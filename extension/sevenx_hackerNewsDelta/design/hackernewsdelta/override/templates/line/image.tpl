{* Story - Line view *}
{def $total_count=fetch( 'contextual', 'collected_digg_info_count_list', hash( 'object_attribute_id', $node.data_map.diggs.id ) )
     $total_diggs=$total_count[0]
     $currentUserID=fetch( 'user', 'current_user' ).contentobject.id
}
{* $node.object.published}<hr>*}
<div class="content-view-line">
    <article class="article">

        {attribute_view_gui attribute=$node.data_map.diggs node=$node total_count=$total_count total_diggs=$total_diggs current_node=$node currentUserID=$currentUserID}

        <div class="news-summary" id="enclosure2" style="z-index:0">
            <div class="news-body">
                <h3 id="article-title"><a href={$node.url_alias|ezurl}>{$node.name|wash}</a></h3>
                <div class="article-meta">
                    {def $user_submited=$node.object.author_array.0 $user_submited_username=$user_submited.login $user_submited_node=$user_submited.contentobject.main_node.url_alias}
                    <a href={$user_submited_node|ezurl()}>
                        <img src={"favicon/favicon.png"|ezimage()} alt="{$user_submited_username}" width="16"
                            height="16" />
                    </a> submitted by
                    <a href={$user_submited_node|ezurl}>
                        {$user_submited_username}
                    </a>
                    | category: <a href={$node.parent.url_alias|ezurl}>{$node.parent.name|wash}</a>
                    | posted on:
                    {$node.object.published|datetime( 'custom', '%Y/%m/%d %h:%i %a' )} {*5 hours 33 minutes ago*}
                    |
                    <a href={$node.url_alias|ezurl} class="tool comments">{$node.children|count} comments</a>
                </div>
                {section show=$node.data_map.caption.content.is_empty|not}
                <p>{attribute_view_gui attribute=$node.data_map.caption}</p>{/section}
                {section show=$node.data_map.image.has_content}
                    <figure class="figure figure-thumbnail">
                        {attribute_view_gui image_class=large href0=$node.url_alias|ezurl attribute=$node.data_map.image}
                    </figure>
                {/section}
                <div class="news-details">
                    {*<a href="/web/20051201015817/http://digg.com/bnotice" class="tool">blog this</a>*}{* <span class="tool">category: <a href="/web/20051201015817/http://digg.com/science">science</a></span> *}

                </div>
            </div>

            {*
	<hr><hr>

<div class="content-story">
    <h2><a href={$node.url_alias|ezurl}>{$node.data_map.title.content|wash}</a></h2>

    {section show=$node.data_map.image.has_content}
        <div class="attribute-image">
            {attribute_view_gui image_class=articlethumbnail href0=$node.url_alias|ezurl attribute=$node.data_map.image}
        </div>
    {/section}

    {section show=$node.data_map.intro.content.is_empty|not}
    <div class="attribute-short">
        {attribute_view_gui attribute=$node.data_map.intro}
    </div>
    {/section}

</div>

*}

            {*<script>
{literal}
                document.addEventListener("DOMContentLoaded", (event) => {
                        const submitButtons = Array.from(document.querySelectorAll('[id="diglink0"]'));

                        submitButtons.forEach((btn) => {
                                btn.addEventListener('click', () => {
                                        const form = btn.closest('form');

                                        form.submit();
                                });
                        });
                });
{/literal}        
</script>

        <div class="content-results">
            <div class="attribute-link">
                <p><a href={concat( "/content/collectedinfo/", $node.node_id, "/" )|ezurl}>{"Result"|i18n("design/ezwebin/full/poll")}</a></p>
            </div>
        </div>
*}
        </div>
</div>