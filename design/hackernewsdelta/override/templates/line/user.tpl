<div class="content-view-line">
    <div class="class-{$node.object.class_identifier} user-item">
        {if is_set( $node.url_alias )}
            <h3 class="user-title">
                <a href="{$node.url_alias|ezurl('no')}" title="{$node.name|wash()}">
                    {$node.name|wash()}
                </a>
            </h3>
            {if is_set($story_count)}
                <span class="badge">
                    {$story_count}
                </span>
            {/if}
        {else}
            <h3 class="user-title">{$node.name|wash()}</h3>
        {/if}
    </div>
</div>