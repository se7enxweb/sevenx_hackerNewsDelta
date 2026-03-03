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

{if $node.node_id|eq( ezini( 'DiggSettings', 'CategoryNodeID', 'digg.ini' ) )}
{set $parent_node_id=ezini( 'DiggSettings', 'CategoryNodeID', 'digg.ini' )}
{elseif $node.node_id|eq( ezini( 'DiggSettings', 'StoryNodeID', 'digg.ini' ) )}
{set $parent_node_id=ezini( 'DiggSettings', 'CategoryNodeID', 'digg.ini' )}
{elseif $node.node_id|eq( ezini( 'DiggSettings', 'TopStoriesNodeID', 'digg.ini' ) )}
{set $parent_node_id=ezini( 'DiggSettings', 'CategoryNodeID', 'digg.ini' )}
{* story node id *}
{elseif $node.node_id|eq( ezini( 'DiggSettings', 'StoryNodeID', 'digg.ini' ) )}
{* category node id *}
{set $parent_node_id=ezini( 'DiggSettings', 'CategoryNodeID', 'digg.ini' )}
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

    {include name=navigator
             uri='design:navigator/google.tpl'
             page_uri=$node.url_alias
             item_count=$children_count
             view_parameters=$view_parameters
             item_limit=$page_limit}

<div class="border-box">
<div class="border-tl"><div class="border-tr"><div class="border-tc"></div></div></div>
<div class="border-ml"><div class="border-mr"><div class="border-mc float-break">

<div class="content-view-full">
    <div class="class-category">
    {*<b>{if $node.depth|gt(2)}submit{else}nosubmit----{$node.depth}}{/if}</b><hr />*}

    {include uri='design:parts/page_nav_sidebar.tpl' current_node=$node}

        <div class="">
        {* def $rssfeedlist = fetch( 'rssfeeds', 'subtree_list', hash( 'node_id', $node.node_id, 'max_depth', 1 ) )
             $rssfeed = $rssfeedlist.0
             $has_rssfeed = is_object( $rssfeed )}

        {if $has_rssfeed}
             {def $rssfeed_uri = $rssfeed.access_url
                  $rssfeed_alt_text = concat( "ATOM Feed. ", $node.name,"'s"," category stories via dynamic ATOM Feed. Subscribe to this rss feed for notifications of new content from this category.")
             $rssfeed_url = concat( '/rss/feed/', $rssfeed_uri )}
             <div id="rssBanner">
                 <a href={$rssfeed_url|ezurl} title="{$rssfeed_alt_text}"><img id="rssIconImage" src={"logos/brands/rss_feed_page_icon.png"|ezimage} alt="{$rssfeed_alt_text}" title="{$rssfeed_alt_text}" /></a>
             </div>
        {/if *}

    {if eq( ezini( 'folder', 'SummaryInFullView', 'content.ini' ), 'enabled' )}
        {if $node.object.data_map.short_description.has_content}
        <div class="attribute-short">
          {attribute_view_gui attribute=$node.data_map.short_description}
        </div>
	{else}
	{* <div class="attribute-short">
          <p>Welcome to Digg [Sigma] social networking news website where the news is user submitted and moderated. Start voting for your favorite stories on <a href="/all" target="_self">/all</a>/<a href="/all/upcoming" target="_self">upcoming</a></p>
        </div> *}
        {/if}
     {/if}

     {if $node.object.data_map.description.has_content}
       <div class="attribute-long">
        {attribute_view_gui attribute=$node.data_map.description}
       </div>
     {/if}

     {if $node.object.data_map.show_children.data_int}
       <div class="content-view-children float-break">
       {if gt( $node.depth, '3')}
       {if $children_count}
       {foreach $childrenNodes as $child}
         {cache-block keys=$child[0]}
         {node_view_gui view=line content_node=$child[1] current_node=$node}
         {delimiter}
             {include uri='design:content/datatype/view/ezxmltags/separator.tpl'}
         {/delimiter}
	 {/cache-block}
       {/foreach}
       {else}
        No stories here yet, login and <a onclick="{if $node.depth|gt(2)}document.getElementById('btn-submit').click(); return false;{else}{/if}" href="{if $node.depth|gt(2)}https://clone.digg.one/submit{else}https://clone.digg.one/c#select-a-category-first{/if}">submit a story</a> to the "{$node.name|wash}" category of DiggClone.
       {/if}
       {else}
         {if $children_count}
           {foreach $children as $child}
             {cache-block keys=$child}
             {node_view_gui view=line content_node=$child current_node=$node}
	     {/cache-block}
             {delimiter}
               {include uri='design:content/datatype/view/ezxmltags/separator.tpl'}
             {/delimiter}
           {/foreach}
       {/if}
    </div>

    {* <div class="content-view-children gallery-items-main">
                {foreach $children as $child }
                    {node_view_gui view='line' content_node=$child current_node=$node}
                {/foreach}
            </div>*}

    {include name=navigator
             uri='design:navigator/google.tpl'
             page_uri=$node.url_alias
             item_count=$children_count
             view_parameters=$view_parameters
             item_limit=$page_limit}

      {/if}
    </div>
</div>

</div></div></div>
<div class="border-bl"><div class="border-br"><div class="border-bc"></div></div></div>
</div>
