{* Category - Full view *}

{set-block scope=root variable=cache_ttl}0{/set-block}

{def $fetch_limit = 460
  $page_limit = 47
  $classes = array( 'category', 'folder', )
  $children = array()
  $childrenNodes = array()
  $children_count = ''
  $total_count=0
  $total_diggs=0}

{if gt( $node.depth, '3')}
  {set $classes=array( 'story', 'youtube_video', 'instagram_video' )}
{/if}

{if and( $node.class_identifier|eq( 'category' ) )}
  {set $classes=array( 'story', 'youtube_video', 'instagram_video' )}
{/if}

{def $parent_node_id=$node.node_id}
{if $node.node_id|eq( 687 )}
  {set $parent_node_id=687}
{elseif $node.node_id|eq( 277 )}
  {set $parent_node_id=687}
{elseif $node.node_id|eq( 709 )}
  {set $parent_node_id=687}
{elseif $node.node_id|eq( 707 )}
  {set $parent_node_id=687}
{/if}
{* $parent_node_id *}
{* $classes.0|attribute(show,1) *}
{* set $children=fetch( 'content', 'list', hash( 'parent_node_id', $node.node_id,
  'offset', $view_parameters.offset,
  'class_filter_type', 'exclude',
  'class_filter_array', $classes,
'sort_by', array( array( 'priority', false() ),
array( 'attribute', false(), 382 ) ),
  'limit', $fetch_limit ) ) *}

{set $children=fetch( 'content', 'tree', hash( 'parent_node_id', $parent_node_id,
    'offset', $view_parameters.offset,
    'class_filter_type', 'include',
    'class_filter_array', $classes,
    'sort_by', array( array( 'attribute' false(), 382 ),
array( 'priority', false() ),
array( 'published', true() ) ),
    'limit', $page_limit ) )
     $children_count=fetch( content, 'tree_count', hash( 'parent_node_id', $parent_node_id,
    'class_filter_type', 'include',
    'class_filter_array', $classes ) )}
{* $children_count|attribute(show,1) *}


<!-- Article List -->
<ul class="article-list">

  {foreach $children as $index => $child}
    {* <b>{$index}</b>
    {$child.data_map.diggs|attribute(show,1)}<Br> *}
    {set $total_count=fetch( 'contextual', 'collected_digg_info_count_list', hash( 'object_attribute_id', $child.data_map.diggs.id ) )
          $total_diggs=$total_count[0]}
    {set $childrenNodes=$childrenNodes|append( array( $total_diggs, $child ) )}
    {* $total_diggs|attribute(show,1)}<hr> *}
    {if $index|eq($fetch_limit)}{break}{/if}
  {/foreach}

  {set $childrenNodes=$childrenNodes|arsort(SORT_NUMERIC)}

  {* $childrenNodes[0]|attribute(show,1) *}

  {* include uri='design:parts/page_header_google_ads.tpl' *}

  <div class="border-box">
    <div class="border-tl">
      <div class="border-tr">
        <div class="border-tc"></div>
      </div>
    </div>
    <div class="border-ml">
      <div class="border-mr">
        <div class="border-mc float-break">
          <div class="content-view-full">
            <div class="class-category">
              {*<b>{if $node.depth|gt(2)}submit{else}nosubmit----{$node.depth}}{/if}</b><hr />*}

              {* include uri='design:parts/page_nav_sidebar.tpl' current_node=$node *}

              {if eq( ezini( 'folder', 'SummaryInFullView', 'content.ini' ), 'enabled' )}
                {if $node.object.data_map.short_description.has_content}
                  <div class="section-header">
                    <h2 class="section-title alt underline">
                      {attribute_view_gui attribute=$node.data_map.short_description}
                    </h2>
                    {def $rssfeedlist = fetch( 'rssfeeds', 'subtree_list', hash( 'node_id', $node.node_id, 'max_depth', 1 ) )
                      $rssfeed = $rssfeedlist.0
                      $has_rssfeed = is_object( $rssfeed )}
                    {if $has_rssfeed}
                      {def $rssfeed_uri = $rssfeed.access_url
                                                                                                    $rssfeed_alt_text = concat( "ATOM Feed. ", $node.name,"'s"," category stories via dynamic ATOM Feed. Subscribe to this rss feed for notifications of new content from this category.")
                                                                                                    $rssfeed_url = concat( '/rss/feed/', $rssfeed_uri )}
                      <a href={$rssfeed_url|ezurl} title="{$rssfeed_alt_text}" class="rss-icon">
                        <img src={"logos/brands/rss_feed_page_icon.png"|ezimage} alt="{$rssfeed_alt_text}"
                          title="{$rssfeed_alt_text}" />
                      </a>
                    {/if}
                  </div>
                {else}
                  <div class="attribute-short">
                    <p>Welcome to Hacker News [Delta] social networking news website where the news is user submitted
                      and moderated. Start voting for your favorite stories on
                      / <a href="/all" target="_self" class="link">
                        all
                      </a>
                      /
                      <a href="/all/upcoming" target="_self" class="link">
                        upcoming
                      </a>
                    </p>
                  </div>
                {/if}
              {/if}

              {if $node.object.data_map.description.has_content}
                <div class="attribute-long rich-text">
                  {attribute_view_gui attribute=$node.data_map.description}
                </div>
              {/if}

              {if $node.object.data_map.show_children.data_int}
                {if gt( $node.depth, '3')}
                  {if $children_count}
                    <ul class="article-list">
                      {foreach $childrenNodes as $index => $child}
                        {cache-block keys=$child[0]}
                        <li>
                          {node_view_gui view=line content_node=$child[1] current_node=$node index=$index}
                        </li>
                        {* {delimiter}
                            {include uri='design:content/datatype/view/ezxmltags/separator.tpl'}
                            {/delimiter} *}
                        {/cache-block}
                      {/foreach}
                    </ul>
                  {else}
                    No stories here yet,
                    <a href="/user/login" class="link">
                      login
                    </a>
                    and
                    <a onclick="{if $node.depth|gt(2)}document.getElementById('btn-submit').click(); return false;{else}{/if}"
                      href="{if $node.depth|gt(2)}{ezsys('hostname')}/submit{else}{ezsys('hostname')}/c#select-a-category-first{/if}"
                      class="link">
                      submit a story
                    </a>
                    to the "{$node.name|wash}" category of Hacker News Delta.
                  {/if}
                {else}
                  {if $children_count}
                    {foreach $children as $index => $child}
                      {cache-block keys=$child}
                      <li>
                        {node_view_gui view=line content_node=$child current_node=$node index=$index}
                      </li>
                      {/cache-block}
                      {* {delimiter}
                            {include uri='design:content/datatype/view/ezxmltags/separator.tpl'}
                            {/delimiter} *}
                    {/foreach}
                  {/if}
                {/if}
                {include name=navigator
                                              uri='design:navigator/google.tpl'
                                              page_uri=$node.url_alias
                                              item_count=$children_count
                                              view_parameters=$view_parameters
                                              item_limit=$page_limit}
              {/if}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</ul>