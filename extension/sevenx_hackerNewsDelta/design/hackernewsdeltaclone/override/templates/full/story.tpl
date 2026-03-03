{* Story - Full view *}

{*def    $image_variation=ezini( 'LightboxSettings' , 'FullImageSize' , 'lightbox.ini' )*}
{set-block scope=root variable=cache_ttl}0{/set-block}
{def $total_count=fetch( 'contextual', 'collected_digg_info_count_list', hash( 'object_attribute_id', $node.data_map.diggs.id ) )
     $total_diggs=$total_count[0]
     $currentUserID=fetch( 'user', 'current_user' ).contentobject.id
     $current_node=false()
}

{* include uri='design:parts/page_nav_sidebar.tpl' current_node=$node *}


<!-- Article -->
<ul class="article-list">
    <li class="article-item">
        <article class="article">
            {attribute_view_gui attribute=$node.data_map.diggs node=$node total_count=$total_count total_diggs=$total_diggs current_node=$node currentUserID=$currentUserID}
            <div>
                <h2 class="article-title">
                    <a href={$node.data_map.link.content|ezurl}>{$node.data_map.title.content|wash}</a>
                    <a href={$node.data_map.link.content|ezurl}
                        class="article-source">({$node.data_map.link.content|explode('https://').1|explode('/')[0]})</a>
                </h2>
                <div class="article-meta">
                    <span class="article-score">{if $total_diggs|gt(0)}{$total_diggs}{else}0{/if} points</span>
                    by
                    {def $user_submited=$node.object.author_array.0 $user_submited_username=$user_submited.login $user_submited_node=$user_submited.contentobject.main_node.url_alias}<a
                        class="link article-author" href={$user_submited_node|ezurl}>{$user_submited_username}</a>

                    {def $now = currentdate()
                                $diff_seconds = sub( $now, $node.object.published )
                                $hours_ago = round( div( $diff_seconds, 3600 ) )
                                $days_ago = round( div( $diff_seconds, 86400 ) )
                            }
                    <span class="article-time">
                        {if $hours_ago|lt(24)}{$hours_ago} hours
                        {else}{$days_ago}
                            days
                        {/if} ago on
                        {$node.object.published|datetime( 'custom', '%Y/%m/%d @ %h:%i %a' )}
                    </span>
                    <br>
                    category:
                    <a href={$node.parent.url_alias|ezurl}>
                        {$node.parent.name|wash}
                    </a>
                    |
                    <a href={concat( $node.url_alias, '#report' )|ezurl} class="link">
                        report
                    </a>
                    |
                    <a href={concat( $node.url_alias, '#comments' )|ezurl} class="link">
                        {$node.children|count}
                        comments
                    </a>
                </div>
            </div>
        </article>
    </li>
</ul>

{section show=$node.data_map.intro.content.is_empty|not}
    <div class="">
        {attribute_view_gui attribute=$node.data_map.intro}
    </div>
{/section}

{if $node.data_map.body.content.is_empty|not}
    <div class="attribute-long">
        {attribute_view_gui attribute=$node.data_map.body}
    </div>
{/if}

{*if eq( ezini( 'article', 'SummaryInFullView', 'content.ini' ), 'enabled' )}
            {if $node.data_map.intro.content.is_empty|not}
                <div class="attribute-short">
                    {attribute_view_gui attribute=$node.data_map.intro}
                </div>
            {/if}
        {/if*}

{if eq( ezini( 'article', 'ImageInFullView', 'content.ini' ), 'enabled' )}
    {if $node.data_map.image.has_content}
        <div class="attribute-image">
            {def $image_node=fetch(content,node,hash( node_id, $node.object.data_map.image.content[relation_list].0.node_id ) )}
            {attribute_view_gui attribute=$node.data_map.image image_class=large href=$image_node.object.data_map.image.content[original].full_path|ezurl lightbox_class="large"}

            {if $node.data_map.caption.has_content}
                <div class="caption">
                    {attribute_view_gui attribute=$node.data_map.caption}
                </div>
            {/if}
        </div>
    {/if}
{/if}

<div class="news-details" style="margin-top: 0.31rem;">
    <a href="/about/moderation" class="form-label" style="font-weight: bolder; text-color: #000000"
        id="report">Moderation</a>
    {attribute_view_gui attribute=$node.data_map.moderation slim=true()}
    <form method="post" action={"contextual/action"|ezurl} name="diggs{$node.node_id}" id="diggs{$node.node_id}">

        <input class="button" type="submit" style="display:none;" id="ActionCollectInformationModeration"
            name="ActionCollectInformation" value="{"Moderate Post"|i18n("design/ezwebin/full/poll")}" />
        <a class="btn btn-primary"
            onClick="document.getElementById('ActionCollectInformationModeration').click(); return false;"
            href="#">Moderate this story</a>
    </form>
</div>

{if is_unset( $versionview_mode )}
    {if $node.data_map.enable_comments.data_int}
        <div class="border-rounded" style="padding-top:1rem;">
            <h2 id="comments">{"Comments"|i18n("design/ezwebin/full/article")}</h2>
            <div class="content-view-children">
                {foreach fetch_alias( comments, hash( parent_node_id, $node.node_id ) ) as $comment}
                    {node_view_gui view='line' content_node=$comment}
                {/foreach}
            </div>
            {if fetch( 'content', 'access', hash( 'access', 'create',
                                            'contentobject', $node,
                                            'contentclass_id', 'comment' ) )}
            <form method="post" action={"content/action"|ezurl}>
                <input type="hidden" name="ClassIdentifier" value="comment" />
                <input type="hidden" name="NodeID" value="{$node.object.main_node.node_id}" />
                <input type="hidden" name="ContentLanguageCode" value="{ezini( 'RegionalSettings', 'Locale', 'site.ini')}" />
                <input class="btn btn-primary button new_comment" type="submit" name="NewButton"
                    value="{'New comment'|i18n( 'design/ezwebin/full/article' )}" />
            </form>
        {else}
            <p>{'%login_link_startLog in%login_link_end or %create_link_startcreate a user account%create_link_end to comment.'|i18n( 'design/ezwebin/full/article', , hash( '%login_link_start', concat( '<a href="', '/user/login'|ezurl(no), '">' ), '%login_link_end', '</a>', '%create_link_start', concat( '<a href="', "/user/register"|ezurl(no), '">' ), '%create_link_end', '</a>' ) )}
            </p>
        {/if}
    </div>
{/if}
{/if}

{* if eq( ezini( 'TipAFriend', 'Enabled' ), 'true' )}
    <div class="attribute-tipafriend">
        <p><a href={concat( "/content/tipafriend/", $node.node_id )|ezurl} title="{'Tip a friend'|i18n( 'design/ezwebin/full/article' )}">{'Tip a friend'|i18n( 'design/ezwebin/full/article' )}</a></p>
    </div>
{/if *}