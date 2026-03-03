{* Comment - Line view *}
{def $total_count=fetch( 'contextual', 'collected_digg_info_count_list', hash( 'object_attribute_id', $node.data_map.diggs.id ) )
     $total_diggs=$total_count[0]
     $currentUserID=fetch( 'user', 'current_user' ).contentobject.id
     $current_node=false()
}
{default $indent=0}
{* $node.object.published}<hr>*}

<li class="comment-item" style="margin-left: {$indent}rem;">
  {attribute_view_gui
    attribute=$node.data_map.diggs
    node=$node
    total_count=$total_count
    total_diggs=$total_diggs
    current_node=$current_node
    currentUserID=$currentUserID}
  <div>
    <div class="comment-header">
      <h3 class="comment-header-title">
        <a href={$node.url_alias|ezurl}>
          {$node.name|wash}
        </a>
      </h3>
      <p>
        <span class="article-score">
          {if $total_diggs|gt(0)}{$total_diggs}{else}0{/if} points
        </span> by
        {* def $user_submited=$node.object.author_array.0 $user_submited_username=$user_submited.login $user_submited_node=$user_submited.contentobject.main_node.url_alias}<a class="link article-author" href={$user_submited_node|ezurl}>{if $user_submited_username|ne( '' )}{$user_submited_username}{else}Removed{/if}</a> *}
        {def $user_submited=$node.data_map.author.content
	     $user_submited_username=$user_submited
	     $user_submited_node=$node.object.owner.main_node.url_alias}

        {if $node.object.owner_id|eq( '10' )}
          <span class="comment-author" style="text-underline: none;">{if $user_submited_username|ne( '' )}{$user_submited_username}{else}Removed{/if}</span>
	{else}
        <a class="comment-author" href={$user_submited_node|ezurl}>
          {if $user_submited_username|ne( '' )}{$user_submited_username}{else}Removed{/if}
        </a>
	{/if}
        {def $now = currentdate()
          $diff_seconds = sub( $now, $node.object.published )
          $hours_ago = round( div( $diff_seconds, 3600 ) )
          $days_ago = round( div( $diff_seconds, 86400 ) )
        }
        <span class="comment-time">
          {if $hours_ago|lt(24)}{$hours_ago} hours{else}{$days_ago} days{/if} ago on
          {$node.object.published|datetime( 'custom', '%Y/%m/%d @ %h:%i %a' )}
        </span>
      </p>
    </div>
    <div class="comment-body">
      <p>{$node.data_map.message.content|autolink|break}</p>
    </div>
    <div class="comment-actions">
      {if fetch( 'content', 'access', hash( 'access', 'create',
                'contentobject', $node,
                'contentclass_id', 'comment' ) )}
      <form method="post" action={"content/action"|ezurl}>
        <input type="hidden" name="ClassIdentifier" value="comment" />
        <input type="hidden" name="NodeID" value="{$node.object.main_node.node_id}" />
        <input type="hidden" name="ContentLanguageCode" value="{ezini( 'RegionalSettings', 'Locale', 'site.ini')}" />
        <input class="btn btn-sm" type="submit" name="NewButton"
          value="{'Reply to comment'|i18n( 'design/ezwebin/full/article' )}" />
      </form>
      {else}
      <p>
        {'%login_link_startLog in%login_link_end or %create_link_startcreate a user account%create_link_end to comment.'|i18n( 'design/ezwebin/full/article', , hash( '%login_link_start', concat( '<a href="', '/user/login'|ezurl(no), '">' ), '%login_link_end', '</a>', '%create_link_start', concat('<a href="', "/user/register"|ezurl(no), '">' ), '%create_link_end', '</a>' ) )}
      </p>
      {/if}
    </div>
  </div>
  {*<div class="attribute-byline float-break">
      <p class="date">{$node.object.published|l10n(datetime)}</p>
      <p class="author">{$node.data_map.author.content|wash}</p>
    </div>*}


  {def $childNodes = array()}
  {def $fetch_limit = 460
     $page_limit = 800
     $page_limit_navigator = 6
     $classes = array( 'comment' )
     $children = array()
     $childrenNodes = array()
     $children_count = 0
     $total_count=0
     $total_diggs=0
     $parent_node_id=$node.node_id
     $child=false()

}

  {set $children=fetch( 'content', 'list', hash( 'parent_node_id', $parent_node_id,
    'class_filter_type', 'include',
    'class_filter_array', $classes,
    'depth', 10,
    'sort_by', array( array( 'attribute' false(), 382 ),
    array( 'priority', false() ),
    array( 'published', true() ) ),
      'limit', $page_limit ) )
     $children_count=fetch( content, 'list_count', hash( 'parent_node_id', $parent_node_id,
    'depth', 10,
    'class_filter_type', 'include',
    'class_filter_array', $classes ) )}

  {def $total_index=$counter|sum($view_parameters.offset)|sum(1)
          $counter=1}

  {if $children_count}
    {foreach $children as $index => $child}
      {def $childrenNodeIndex=$index|sum(1)}
      {if is_object( $children[$childrenNodeIndex] )}
        {cache-block keys=$children[$childrenNodeIndex]}
        {if and( $total_index|ge(0), $counter|le($page_limit_navigator) )}
          {node_view_gui view=line content_node=$children[$childrenNodeIndex] current_node=$node index=$total_index indent=$child.depth|sub(6)}
        {/if}
        {/cache-block}

        {* {delimiter}
      {include uri='design:content/datatype/view/ezxmltags/separator.tpl'}
      {/delimiter} *}

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
      {/if}
    {/foreach}
  {else}
  {/if}
  {else}
  {if $children_count}
    {foreach $children as $index => $child}
      {cache-block keys=$child}
      {node_view_gui view=line content_node=$child current_node=$node index=$index indent=$child.depth|sub(6)}
      {/cache-block}
      {* {delimiter}
      {include uri='design:content/datatype/view/ezxmltags/separator.tpl'}
      {/delimiter} *}
    {/foreach}
  {/if}
  {/if}

  {undef $counter $children_count $children $total_index $indent}

</li>