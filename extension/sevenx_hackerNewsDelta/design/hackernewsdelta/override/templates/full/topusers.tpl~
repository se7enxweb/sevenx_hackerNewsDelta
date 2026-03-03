{* Top Users - User Group - Full view *}

{set-block scope=root variable=cache_ttl}0{/set-block}

{def $fetch_limit = 260
     $page_limit = 10
     $classes = array( 'user' )
     $children = array()
     $children_count = ''
     $total_count=0
     $total_stories=0
     $owner_id=0
     $category_node_id=687
     $childrenNodes = array()
     $users_node_id=12
     $parent_node_id=$users_node_id
     
}

{*if le( $node.depth, '3')}
  {set $classes=array( 'story' )}
{/if *}

{if $node.node_id|eq( 687 )}
  {set $parent_node_id=687}
{elseif $node.node_id|eq( 277 )}
  {set $parent_node_id=687}
{elseif $node.node_id|eq( 709 )}
  {set $parent_node_id=687}
{/if}

{* set $children=fetch( 'content', 'list', hash( 'parent_node_id', $node.node_id,
                                                          'offset', $view_parameters.offset,
                                                          'class_filter_type', 'exclude',
                                                          'class_filter_array', $classes,
						          'sort_by', array( 'modified', false() ),
                                                          'limit', $fetch_limit ) )*}

{set $children=fetch( 'content', 'tree', hash( 'parent_node_id', $parent_node_id,
                                               'offset', $view_parameters.offset,
                                               'class_filter_type', 'include',
                                               'class_filter_array', $classes,
					       'sort_by', array( 'published', true() ),
                                               'limit', $page_limit ) )
      $children_count=fetch( content, 'tree_count', hash( 'parent_node_id', $parent_node_id,
                                                          'class_filter_type', 'include',
                                                          'class_filter_array', $classes ) )}

{foreach $children as $index => $child}
    {* $child|attribute(show,1) *}
      {* <b>{$index}</b>
      'attribute_filter', array( 'creator', '=' $child.creator.id )
	                       'class_filter_type', 'include', 'class_filter_array', array( 'story' ),
			       *}

      {set $owner_id=$child.object.id
           $total_count=fetch( 'content', 'list', hash( 'parent_node_id', $category_node_id,
                               'attribute_filter', array( 'and',
			       array( 'owner',
			       '=',
			       $owner_id ),
			       array( 'class_identifier', '=', 'story' ) ),
      	   		       'depth', '2'
			      ) )
           $total_stories=$total_count|count}

      {if and( $total_stories|gt(1), $childrenNodes[2]|contains( $child.creator.id )|not )}
      {set $childrenNodes=$childrenNodes|append( array( $total_stories, $child, $child.creator.id ) )}
      {/if}
      {* $childrenNodes[$index][1].creator|attribute(show,1) *}
      {if $index|eq($fetch_limit)}{break}{/if}
{/foreach}

{set $childrenNodes=$childrenNodes|arsort(SORT_NUMERIC)}

{* include uri='design:parts/page_header_google_ads.tpl' *}

<div class="border-box">
<div class="border-tl"><div class="border-tr"><div class="border-tc"></div></div></div>
<div class="border-ml"><div class="border-mr"><div class="border-mc float-break">

<div class="content-view-full">
    <div class="class-category">
 .      {*
        <div class="attribute-header">
            <h1>{attribute_view_gui attribute=$node.data_map.name}</h1>
        </div> *}

       {include uri='design:parts/page_nav_sidebar.tpl' current_node=$node}

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

        {if $node.object.data_map.show_children.data_int}

	    <div class="content-view-children float-break">
	        <h1>User Story Submissions Count</h1>
		{if $childrenNodes|count}
                  {foreach $childrenNodes as $child }
                     {node_view_gui view='line' content_node=$child[1] story_count=$child[0]}
                     {delimiter}
                       {include uri='design:content/datatype/view/ezxmltags/separator.tpl'}
                     {/delimiter}
                  {/foreach}
                {/if}
            </div>    

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
