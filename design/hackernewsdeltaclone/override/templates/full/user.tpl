{* User - Full view *}
{set-block scope=root variable=cache_ttl}0{/set-block}
{def $childNodes = array()}

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
          <div class="class-folder">
          </div>

          <h2 class="section-title">Profile</h2>
          <div class="card">
            <div class="card-body">
              <div class="card-header">
                <h3 class="card-title">User information</h3>
                {def $rssfeedlist = fetch( 'rssfeeds', 'subtree_list', hash( 'node_id', $node.node_id, 'max_depth', 1 ) )
                    $rssfeed = $rssfeedlist.0
                    $has_rssfeed = is_object( $rssfeed )}

                {if $has_rssfeed}
                  {def $rssfeed_uri = $rssfeed.access_url
                    $rssfeed_alt_text = concat( "ATOM Feed. ", $node.name,"'s"," user submited stories via user driven ATOM Feed. Subscribe to this rss feed for notifications of new content from this user.")
                    $rssfeed_url = concat( '/rss/feed/', $rssfeed_uri )}
                  <a href={$rssfeed_url|ezurl} title="{$rssfeed_alt_text}" class="rss-icon">
                    <img id="rssIconImage" src={"logos/brands/rss_feed_page_icon.png"|ezimage} alt="{$rssfeed_alt_text}"
                      title="{$rssfeed_alt_text}" />
                  </a>
                {/if}
              </div>

              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <th style="width: 10rem">Name</th>
                    <td>{$node.data_map.first_name.content|wash} {$node.data_map.last_name.content|wash}</td>
                  </tr>
                  <tr>
                    <th style="width: 10rem">Username</th>
                    <td>{$node.data_map.user_account.content.login}</td>
                  </tr>
                  <tr>
                    <th style="width: 10rem">Joined at</th>
                    <td>
                      {$node.data_map.user_account.content.contentobject.published|datetime( 'custom', '%Y/%m/%d @ %h:%i %a' )}
                  </tr>
                  {*                  <tr>
                        <th style="width: 10rem">Email</th>
                        <td></td>
                      </tr>
                      *}
                  <tr>
                    <th style="width: 10rem">About</th>
                    <td>{if $node.object.data_map.signature.has_content}
                        <div class="attribute-short">
                          {attribute_view_gui attribute=$node.data_map.signature}
                      </div>{/if}
                    </td>
                  </tr>
                  {if $node.object.data_map.image.has_content}
                    <tr>
                      <th>Image</th>
                      <td>
                        <div class="attribute-profile-image">
                          {attribute_view_gui attribute=$node.data_map.image image_class="large"}
                        </div>
                      </td>
                    </tr>
                  {/if}
                  <tr>
                    <th style="width: 10rem">Links</th>
                    <td colspan="2">
                      <a href={concat( $node.url_alias,'/submitted')|ezurl} class="link">submissions</a> |
                      <a href={concat( $node.url_alias,'/diggs')|ezurl} class="link">upvoted</a>
                      {* | <a href={concat( $node.url_alias,'/comments')|ezurl}} class="link">comments</a> *}
                      {* | <a href="#" class="link">favourites</a> *}
                    </td>
                  </tr>

                  {*if $node.object.data_map.show_children.data_int *}
                  {def $fetch_limit = 260
                        $page_limit = 10
                        $classes = array( 'story', 'youtube_video', 'instagram_video' )
                        $children = array()
                        $children_count = ''}

                  {* if le( $node.depth, '3')}
                          {set $classes=array( 'link','category','article', 'folder', 'image', 'user' )}
                      {/if}

                      {if and( $node.parent.node_id|eq( 12 ), le( $node.depth, '4' ) )}
                          {set $classes=array( 'story', 'youtube_video', 'instagram_video' )}
                      {/if *}

                  {* if and( $node.node_id|eq( 12 ), le( $node.depth, '3') )}
                          {set $classes=array( 'link', 'article', 'folder', 'image', 'user' )}
                      {/if *}

                  {def $parent_node_id=$node.node_id}

                  {set $children=fetch( 'content', 'tree', hash( 'parent_node_id', $parent_node_id,
                        'offset', $view_parameters.offset,
                        'class_filter_type', 'include',
                        'class_filter_array', $classes,
                        'depth', 4,
                        'sort_by', array( 'published', false() ),
                        'limit', $page_limit ) )
                        $children_count=fetch( content, 'tree_count', hash( 'parent_node_id', $parent_node_id,
                        'class_filter_type', 'include',
                        'class_filter_array', $classes ) )}

                  {if $children|count}
                    <tr>
                      <th>
                        <a class="link" href={concat( $node.url_alias, '/submitted' )|ezurl()}>Submitted Stories</a>
                      </th>
                      <td>
                        <div class="content-view-children float-break">
                          {foreach $children as $index => $child}
                            {node_view_gui view=line content_node=$child current_node=$node}
                            {delimiter}
                            {include uri='design:content/datatype/view/ezxmltags/separator.tpl'}
                            {/delimiter}
                          {/foreach}
                        </div>

                        {include name=navigator
                                    uri='design:navigator/google.tpl'
                                    page_uri=$node.url_alias
                                    item_count=$children_count
                                    view_parameters=$view_parameters
                                    item_limit=$page_limit}
                      {/if}
                    </td>
                  </tr>
                </tbody>
              </table>
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