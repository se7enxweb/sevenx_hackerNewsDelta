{* Category - Line view *}

<div class="content-view-line">
    <div class="class-category">

        <h3><a class="link underlined" href={$node.url_alias|ezurl}>{$node.name|wash()}</a></h3>

       {section show=$node.data_map.short_description.content.is_empty|not}
        <div class="attribute-short rich-text">
        {attribute_view_gui attribute=$node.data_map.short_description}
        </div>
       {/section}
    </div>
</div>
