{* Category - Upcoming View Template - Full view *}

{set-block scope=root variable=cache_ttl}0{/set-block}

{def $childNodes = array()}
{def $fetch_limit = 460
     $page_limit = 800
     $page_limit_navigator = 6
     $classes = array( 'story', 'youtube_video', 'instagram_video' )
     $children = array()
     $childrenNodes = array()
     $children_count = 0
     $total_count=0
     $total_diggs=0
     $parent_node_id=$node.parent.node_id
     $child=false()

}

{if gt( $node.depth, '3')}
  {set $classes=array( 'story', 'youtube_video' )}
{/if}

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
                                                 'attribute_filter', array( array( 'story/title', 'like', '*7x*' ) ),
      						 'sort_by', array( 'attribute', false(), 382 ),
                                                 'limit', $fetch_limit ) )*}

{set $children=fetch( 'content', 'list', hash( 'parent_node_id', $parent_node_id,
                                               'class_filter_type', 'include',
                                               'class_filter_array', $classes,
                                               'depth', 10,
                                               'attribute_filter', array( array( 'story/title', 'like', '*Ask HND*' ) ),
					       'sort_by', array( array( 'attribute' false(), 382 ),
                                                          array( 'priority', false() ),
                                                          array( 'published', true() ) ),
                                               'limit', $page_limit ) )
     $children_count=fetch( content, 'list_count', hash( 'parent_node_id', $parent_node_id,
                                               	   	 'depth', 10,
                                               		 'attribute_filter', array( array( 'story/title', 'like', '*Ask HND*' ) ),
                                                         'class_filter_type', 'include',
                                                         'class_filter_array', $classes ) )}
{* $children_count|attribute(show,1) *}

{if $view_parameters.offset|ne('' )}
  {def $start=$view_parameters.offset|sub(1)
             $end=$start|sum(5)}
{else}
  {def $start=0
             $end=$start|sum(6)}
{/if}

{for $start to $end as $index}
  {set $child=$children[$index]}
  {* <b>{$index}</b> *}
  {set $total_count=fetch( 'contextual', 'collected_digg_info_count_list', hash( 'object_attribute_id', $child.data_map.diggs.id ) )
                $total_diggs=$total_count[0]}
  {set $childrenNodes=$childrenNodes|append( array( $total_diggs, $child ) )}
  {if $index|eq($fetch_limit)}{break}{/if}
{/for}

{if $view_parameters.dir|eq(1)}
  {set $childrenNodes=$childrenNodes|arsort(SORT_NUMERIC)|reverse}
{else}
  {set $childrenNodes=$childrenNodes|arsort(SORT_NUMERIC)}
{/if}
{* $children_count|attribute(show,1) *}

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

            {* <b> {if $node.depth|gt(2)}submit{else}nosubmit-{$node.depth}{/if} </b><hr /> *}
            <div style="margin-bottom: 1rem;">
              <div class="attribute-header">
                <h1>{attribute_view_gui attribute=$node.data_map.name}</h1>
              </div>

              {* include uri='design:parts/page_nav_sidebar.tpl' current_node=$node *}

              {if eq( ezini( 'folder', 'SummaryInFullView', 'content.ini' ), 'enabled' )}
                {if $node.object.data_map.short_description.has_content}
                  <div class="attribute-short">
                    {attribute_view_gui attribute=$node.data_map.short_description}
                  </div>
                {/if}
              {/if}

              {if $node.object.data_map.description.has_content}
                <div class="attribute-long">
                  {attribute_view_gui attribute=$node.data_map.description}
                </div>
              {/if}
            </div>

            <div class="category-atom-feed">
              {* def $rssfeedlist = fetch( 'rssfeeds', 'subtree_list', hash( 'node_id', $node.node_id, 'max_depth', 1 ) )
             $rssfeed = $rssfeedlist.0
             $has_rssfeed = is_object( $rssfeed ) *}
              {* if $has_rssfeed}
             {def $rssfeed_uri = $rssfeed.access_url
                  $rssfeed_alt_text = concat( "ATOM Feed. ", $node.name,"'s"," category stories via dynamic ATOM Feed. Subscribe to this rss feed for notifications of new content from this category.")
             $rssfeed_url = concat( '/rss/feed/', $rssfeed_uri )}
             <div id="rssBanner">
                 <a href={$rssfeed_url|ezurl} title="{$rssfeed_alt_text}"><img id="rssIconImage" src={"logos/brands/rss_feed_page_icon.png"|ezimage} alt="{$rssfeed_alt_text}" title="{$rssfeed_alt_text}" /></a>
             </div>
        {/if *}


              {if $node.object.data_map.show_children.data_int}
                <div class="content-view-children float-break">
                  <div class="section-header">
                    <h2 class="section-title alt">Direction:
                      {*<a href={concat($node.url_alias,'/(dir)/1')|ezurl}>down</a> and <a href={concat($node.url_alias,'/(dir)/0')|ezurl}>up</a>*}<a
                        style="text-decoration: underline;" href={concat($node.url_alias,'/(dir)/1')|ezurl}>upcoming</a>
                      and
                      <a style="text-decoration: underline;" href={concat($node.url_alias,'/(dir)/0')|ezurl}>top</a> or go
                      back to read the <a style="text-decoration: underline;" href={"/"|ezurl()}>home page</a>
                    </h2>
                    {def $rssfeed_uri = 'all'
                   $rssfeed_alt_text = concat( "ATOM Feed. ", $node.name,"'s"," category stories via dynamic ATOM Feed. Subscribe to this rss feed for notifications of new content from this category.")
                   $rssfeed_url = concat( '/rss/feed/', $rssfeed_uri )}
                    <a href={$rssfeed_url|ezurl} title="{$rssfeed_alt_text}" class="rss-icon">
                      <img src={"logos/brands/rss_feed_page_icon.png"|ezimage} alt="{$rssfeed_alt_text}"
                        title="{$rssfeed_alt_text}" />
                    </a>
                  </div>


                  {if $offset|gt(2)}
                    {include name=navigator
                          uri='design:navigator/google.tpl'
                          page_uri=$node.url_alias
                          item_count=$children_count
                          view_parameters=$view_parameters
                          item_limit=$page_limit_navigator}
                  {/if}

                  {if $view_parameters.dir|eq('0')}
                    {if $view_parameters.offset|ne('')}
                      {def $total_index=$counter|sum($view_parameters.offset)|sum(1)
                                $counter=1}
                    {else}
                      {def $total_index=$counter|sum($view_parameters.offset)|sum(1)
                                $counter=1}
                    {/if}
                    {* set $total_index=$children_count|sub($index|sum($view_parameters.offset) *}
                  {else}
                    {def $total_index=$children_count|sum(2)|sub(1)|sub($view_parameters.offset)
                         $counter=0}
                    {if $view_parameters.offset|ne('')}
                      {def $total_index=$children_count|sub(1)|sub($view_parameters.offset)
                               $counter=0}
                    {else}
                      {def $total_index=$children_count|sub($view_parameters.offset)
                               $counter=0}
                    {/if}
                  {/if}

                  {if gt( $node.depth, '1')}
                    {if $children_count}
                      {foreach $childrenNodes as $index => $child}
                        {cache-block keys=$child[0]}
                        {if and( $total_index|ge(0), $counter|le($page_limit_navigator) )}
                          {node_view_gui view=line content_node=$child[1] current_node=$node index=$total_index}
                        {/if}
                        {/cache-block}

                        {delimiter}
                        {include uri='design:content/datatype/view/ezxmltags/separator.tpl'}
                        {/delimiter}

                        {if $view_parameters.dir|eq('0')}
                          {if $view_parameters.offset|ne('')}
                            {set $counter=$counter|inc
                                                      $total_index=$total_index|inc}
                          {else}
                            {set $counter=$counter|inc
                                    	          $total_index=$counter}
                          {/if}
                        {else}
                          {set $counter=$counter|inc
                              	        $total_index=$total_index|dec}
                        {/if}
                      {/foreach}
                    {else}
                      <div class="">No 'Ask HND' Stories Found. Please wait to try again.</div>
                    {/if}
                  {else}
                    {if $children_count}
                      {foreach $children as $index => $child}
                        {cache-block keys=$child}
                        {node_view_gui view=line content_node=$child current_node=$node index=$index}
                        {/cache-block}
                        {delimiter}
                        {include uri='design:content/datatype/view/ezxmltags/separator.tpl'}
                        {/delimiter}
                      {/foreach}
                    {/if}
                  {/if}

                </div>

                <div class="notice-more" style="padding-top: 1rem;">
                  Looking for more? Try submitting a new story to Hacker News Delta's <a href="/c">categories</a> section
                which will apear in the <a href="/all/(dir)/1">upcoming</a> section for voting to begin!
              </div>

              {*
  <div class="content-view-children gallery-items-main">
   {foreach $children as $child }
      {node_view_gui view='line' content_node=$child}
   {/foreach}
  </div>
*}
              {include name=navigator
              uri='design:navigator/google.tpl'
                    page_uri=$node.url_alias
                    item_count=$children_count
                    view_parameters=$view_parameters
                    item_limit=$page_limit_navigator}

              {/if}
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="border-bl">
      <div class="border-br">
        <div class="border-bc"></div>
      </div>
    </div>
</div>