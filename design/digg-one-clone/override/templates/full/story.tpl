{* Story - Full view *}

{*def    $image_variation=ezini( 'LightboxSettings' , 'FullImageSize' , 'lightbox.ini' )*}
{set-block scope=root variable=cache_ttl}0{/set-block}
{def $total_count=fetch( 'contextual', 'collected_digg_info_count_list', hash( 'object_attribute_id', $node.data_map.diggs.id ) )
     $total_diggs=$total_count[0]
     $currentUserID=fetch( 'user', 'current_user' ).contentobject.id
     $current_node=false()
}

<div class="border-box">
<div class="border-tl"><div class="border-tr"><div class="border-tc"></div></div></div>
<div class="border-ml"><div class="border-mr"><div class="border-mc float-break">

    {include uri='design:parts/page_nav_sidebar.tpl' current_node=$node}

    <div class="content-view-full">
        <div class="class-story">

 {* <div class="attribute-byline">
        {if $node.data_map.author.content.is_empty|not()}
        <p class="author">
             {attribute_view_gui attribute=$node.data_map.author}
        </p>
        {/if}
        <p class="date">
             {$node.object.published|l10n(shortdatetime)}
        </p>
        </div> *}

<div class="content-view-line">
    <div class="class-story float-break">

 <div class="news-full" id="main0" style="">

    {attribute_view_gui attribute=$node.data_map.diggs node=$node total_count=$total_count total_diggs=$total_diggs current_node=$node currentUserID=$currentUserID}

     <div class="news-body">
     <h3 id="title2"><a href={$node.data_map.link.content|ezurl}{*$node.url_alias|ezurl*}><!-- google_ad_section_start -->{$node.data_map.title.content|wash}</a></h3>
     <p class="news-submitted">{def $user_submited=$node.object.author_array.0 $user_submited_username=$user_submited.login $user_submited_node=$user_submited.contentobject.main_node.url_alias}<a href={$user_submited_node|ezurl()}><img src={"favicon/favicon.png"|ezimage()} alt="{$user_submited_username}" width="16" height="16"/></a> submitted by <a href={$user_submited_node|ezurl}>{$user_submited_username}</a>{if $node.data_map.theme_song.has_content} listening to '<a href="{$node.data_map.theme_song.content}">{$node.data_map.theme_song.data_text}</a>'{/if} {$node.object.published|datetime( 'custom', '%Y/%m/%d %h:%i %a' )} {*5 hours 33 minutes ago*} (<a href={$node.data_map.link.content|ezurl()} class="simple tight" title="{$node.data_map.title.content|wash}">via <a href={$node.data_map.link.content}>{$node.data_map.link.content}...</a>)</p>

     {section show=$node.data_map.intro.content.is_empty|not}<p>{attribute_view_gui attribute=$node.data_map.intro}</p>{/section}

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

     <div class="news-details">
       <a href={$node.url_alias|ezurl} class="tool comments">{$node.children|count} comments</a>
       {*<a href="/web/20051201015817/http://digg.com/bnotice" class="tool">blog this</a>*}{* <span class="tool">category: <a href="/web/20051201015817/http://digg.com/science">science</a></span> *}
       <span class="tool">
       category: <a href={$node.parent.url_alias|ezurl}>{$node.parent.name|wash}</a> | <a href={concat("/spy/collectionlist/", $node.object.id)|ezurl} class="">{"Digg Voting History"}</a>
       </span>
     </div>
     {*
     <div class="news-details" style="margin-top: 0.31rem;">
         <a href="/about/moderation" style="font-weight: bolder; text-color: #000000">Moderation</a>
         {attribute_view_gui attribute=$node.data_map.moderation slim=true()}
<form method="post" action={"contextual/action"|ezurl} name="diggs{$node.node_id}" id="diggs{$node.node_id}">

         <input class="button" type="submit" style="display:none;" id="ActionCollectInformationModeration" name="ActionCollectInformation" value="{"Moderate Post"|i18n("design/ezwebin/full/poll")}" />
	 <a onClick="document.getElementById('ActionCollectInformationModeration').click(); return false;" href="#">Moderate this story</a> 
     </div> *}
    		<!-- google_ad_section_end -->
	</div>
    </div>
</form>
	
        {if is_unset( $versionview_mode )}
        {if $node.data_map.enable_comments.data_int}
        <div class="border-rounded">
            <h2>{"Comments"|i18n("design/ezwebin/full/article")}</h2>
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
                    <input class="button new_comment" type="submit" name="NewButton" value="{'New comment'|i18n( 'design/ezwebin/full/article' )}" />
                    </form>
                {else}
                    <p>{'%login_link_startLog in%login_link_end or %create_link_startcreate a user account%create_link_end to comment.'|i18n( 'design/ezwebin/full/article', , hash( '%login_link_start', concat( '<a href="', '/user/login'|ezurl(no), '">' ), '%login_link_end', '</a>', '%create_link_start', concat( '<a href="', "/user/register"|ezurl(no), '">' ), '%create_link_end', '</a>' ) )}</p>
                {/if}
        </div>
        {/if}
        {/if}

        {if eq( ezini( 'TipAFriend', 'Enabled' ), 'true' )}
        <div class="attribute-tipafriend">
            <p><a href={concat( "/content/tipafriend/", $node.node_id )|ezurl} title="{'Tip a friend'|i18n( 'design/ezwebin/full/article' )}">{'Tip a friend'|i18n( 'design/ezwebin/full/article' )}</a></p>
        </div>
        {/if}

        </div>
    </div>

</div></div></div>
<div class="border-bl"><div class="border-br"><div class="border-bc"></div></div></div>
</div>
