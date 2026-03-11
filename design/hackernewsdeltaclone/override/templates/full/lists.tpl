{* Folder - Full view *}

{set-block scope=root variable=cache_ttl}0{/set-block}

{def $fetch_limit = 260
     $page_limit = 30
     $classes = array( 'link','category','article', 'image', 'user', 'folder' )
     $children = array()
     $children_count = ''
     $childNodes = array()
     $currentUserID=fetch( 'user', 'current_user' ).contentobject.id
}

{if le( $node.depth, '3')}
  {set $classes=array( 'link','category','article','image', 'user', 'folder' )}
{/if}
{if and( $node.node_id|eq( 12 ), le( $node.depth, '3') )}
  {set $classes=array( 'link', 'article', 'image', 'user' )}
{/if}

{def $parent_node_id=$node.node_id}

{if $node.node_id|eq('687')}
  {set $parent_node_id=687}
{elseif $node.node_id|eq('277')}
  {set $parent_node_id=687}
{/if}

{set $children=fetch( 'content', 'list', hash( 'parent_node_id', $parent_node_id,
                                               'offset', $view_parameters.offset,
                                               'class_filter_type', 'include',
                                               'class_filter_array', $classes,
                                               'sort_by', array( 'priority', false() ),
                                               'limit', $page_limit ) )
     $children_count=fetch( content, 'list_count', hash( 'parent_node_id', $parent_node_id,
                                                         'class_filter_type', 'include',
                                                         'class_filter_array', $classes ) )}
{*
{def $total_count=0
     $total_diggs=0}

    {foreach $children as $index => $child}
<b>{$index}</b>
     {set $total_count=fetch( 'contextual', 'collected_digg_info_count_list', hash( 'object_attribute_id', $child.data_map.diggs.attribute_original_id ) )
          $total_diggs=$total_count[0]}
     {set $childNodes=$childNodes|append( array( $total_diggs, $child ) )}
     {if $index|eq($fetch_limit)}{break}{/if}
    {/foreach}
*}
    {* set $childNodes=$childNodes|arsort(SORT_NUMERIC) *}



{* include uri='design:parts/page_header_google_ads.tpl' *}

<div class="border-box">
<div class="border-tl"><div class="border-tr"><div class="border-tc"></div></div></div>
<div class="border-ml"><div class="border-mr"><div class="border-mc float-break">

<div class="content-view-full">
    <div class="class-folder">

        <div class="attribute-header">
            <h1>{attribute_view_gui attribute=$node.data_map.name}</h1>
        </div>

	{* include uri='design:parts/page_nav_sidebar.tpl' *}

	{if eq( ezini( 'folder', 'SummaryInFullView', 'content.ini' ), 'enabled' )}
            {if and( is_set( $node.object.data_map.short_description ), $node.object.data_map.short_description.has_content)}
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
</div>

      <section class="section profile-section">
        <div class="container">
          <div class="card">
            <div class="card-body">
              <table class="table">
                <tbody>
                  <tr>
                    <th style="width: 10rem">
                      <a href="/" class="link">front</a>
                    </th>
                    <td>
                      Front page submissions for a given day (e.g. {currentdate()|datetime( 'custom', '%Y-%m-%d' )})
                    </td>
                  </tr>
                  <tr>
                    <th style="width: 10rem">
                      <a href="/all/(dir)/0" class="link">highlights</a>
                    </th>
                    <td>Particularly popular stories from over the years</td>
                  </tr>
                  <tr>
                    <th style="width: 10rem">
                      <a href="/past" class="link">past</a>
                    </th>
                    <td>
                      Front page submissions from the past
                    </td>
                  </tr>
		  {*
                  <tr>
                    <th style="width: 10rem">
                      <a href="/all/(dir)/0" class="link">pool</a>
                    </th>
                    <td>
                      Links selected for a
                      <a href="/all/(dir)/0" class="link">second</a> chance at the front
                      page
                    </td>
                  </tr>
                  <tr>
                    <th style="width: 10rem">
                      <a href="/invited" class="link">invited</a>
                    </th>
                    <td>Overlooked links, invited to repost</td>
                  </tr
>                  <tr>
                    <th style="width: 10rem">
                      <a href="/hiughights" class="link">highlights</a>
                    </th>
                    <td>Particularly good comments from over the years</td>
                  </tr>
		  *}
                  <tr>
                    <th style="width: 10rem">
                      <a href="/all/(dir)/1" class="link">shownew</a>
                    </th>
                    <td>New submissions from the last 24 hours</td>
                  </tr>
                  <tr>
                    <th style="width: 10rem">
                      <a href="/show" class="link">showhnd</a>
                    </th>
                    <td>The newest 'Show HND' (text) posts</td>
                  </tr>
                  <tr>
                    <th style="width: 10rem">
                      <a href="/ask" class="link">asknew</a>
                    </th>
                    <td>The newest 'Ask HND' (text) posts</td>
                  </tr>
                  <tr>
                    <th style="width: 10rem">
                      <a href="/comments" class="link">bestcomments</a>
                    </th>
                    <td>Highest-voted recent comments</td>
                  </tr>
                  <tr>
                    <th style="width: 10rem">
                      <a href="/tools/top-stories" class="link">top-stories</a>
                    </th>
                    <td>Highest-voted recent stories</td>
                  </tr>
                  <tr>
                    <th style="width: 10rem">
                      <a href="/tools/top-users" class="link">top-users</a>
                    </th>
                    <td>Highest-post count; users with the most stories submitted</td>
                  </tr>
                  <tr>
                    <th style="width: 10rem">
                      <a href="/Users/Members" class="link">users</a>
                    </th>
                    <td>All members, users, guests of the site</td>
                  </tr>
                  <tr>
                    <th style="width: 10rem">
                      <a href="/content/view/tagcloud/2" class="link">tag-cloud</a>
                    </th>
                    <td>High level view of site wide content and views</td>
                  </tr>
                  <tr>
                    <th style="width: 10rem">
                      <a href="/content/view/sitemap/2" class="link">sitemap</a>
                    </th>
                    <td>High level view of site wide content and views</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>

