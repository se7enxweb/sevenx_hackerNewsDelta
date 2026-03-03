{* Folder - Full view *}

{set-block scope=root variable=cache_ttl}0{/set-block}

{def $fetch_limit = 260
     $page_limit = 30
     $classes = array( 'link','category','article', 'image', 'user', 'folder', 'feedback_form', 'bug_report_form' )
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
            <h2 class="section-title" style="text-transform: capitalize;">{attribute_view_gui attribute=$node.data_map.name}</h2>
        </div>

	{* include uri='design:parts/page_nav_sidebar.tpl' *}
<div class="section-description">
	{if eq( ezini( 'folder', 'SummaryInFullView', 'content.ini' ), 'enabled' )}
            {if and( is_set( $node.object.data_map.short_description ), $node.object.data_map.short_description.has_content)}
                <div class="attribute-short">
                    {attribute_view_gui attribute=$node.data_map.short_description}
                </div>
            {/if}
        {/if}

        {if $node.object.data_map.description.has_content}
            <div class="attribute-long rich-text">
                {attribute_view_gui attribute=$node.data_map.description}
            </div>
        {/if}
</div>
        {*if $node.object.data_map.show_children.data_int *}

    	<div class="content-view-children float-break generic-content-list">
    	    {foreach $children as $index => $child}
                {if and($node.node_id|eq( 828 ), $index|eq( 0 ) )}
	 	    <form name="children" method="post" action={'content/action'|ezurl}>
		    	 <input type="hidden" name="ContentNodeID" value="{$node.node_id}" />
			 <input type="hidden" name="ContentObjectID" value="{$node.contentobject_id}" />
	 		 <input type="hidden" name="NodeID" value="{$node.node_id}" />
	 		 <input type="hidden" name="ClassID" value="31" />
	 		 <input type="submit" name="NewButton" value="Upload New Story Image" id="btn-submit" style="width:70%"/>
         	    </form>
		{/if}
                {node_view_gui view=line content_node=$child current_node=$node currentUserID=$currentUserID}
            {* {delimiter}
             	  {include uri='design:content/datatype/view/ezxmltags/separator.tpl'}
         	{/delimiter} *}
             {/foreach}
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
                     item_limit=$page_limit}
    </div>
</div>

</div></div></div>
<div class="border-bl"><div class="border-br"><div class="border-bc"></div></div></div>
</div>
