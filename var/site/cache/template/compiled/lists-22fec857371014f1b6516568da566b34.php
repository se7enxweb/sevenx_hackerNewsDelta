<?php
// URI:       design:node/view/full.tpl
// Filename:  design/delta/override/templates/full/lists.tpl
// Timestamp: 1769336251 (Sun Jan 25 2:17:31 PST 2026)
$oldSetArray_aab331e35dd33907838565f6db948e5d = isset( $setArray ) ? $setArray : array();
$setArray = array();
$tpl->Level++;
if ( $tpl->Level > 40 )
{
$text = $tpl->MaxLevelWarning;$tpl->Level--;
return;
}
$eZTemplateCompilerCodeDate = 1074699607;
if ( !defined( 'EZ_TEMPLATE_COMPILER_COMMON_CODE' ) )
include_once( 'var/site/cache/template/compiled/common.php' );

$node = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "node", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["node"] : null;
if ( is_object( $node ) )
$object = $node->attribute( 'object' );
if ( isset( $object ) && is_object( $object ) )
$nod_aab331e35dd33907838565f6db948e5d = $object->attribute( 'data_map' );
else
$nod_aab331e35dd33907838565f6db948e5d = false;
unset( $node, $object );

$text .= '
';
if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
$text .= '0';
$blockText = $text;
$vars[$rootNamespace]['cache_ttl'] = $blockText;
unset( $blockText );

$text = array_pop( $textStack );
// def $fetch_limit
if ( $tpl->hasVariable( 'fetch_limit', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'fetch_limit' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 83,
  ),
  1 => 
  array (
    0 => 12,
    1 => 0,
    2 => 355,
  ),
  2 => 'design/delta/override/templates/full/lists.tpl',
) );
    $tpl->setVariable( 'fetch_limit', 260, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'fetch_limit', 260, $rootNamespace );
}

// def $page_limit
if ( $tpl->hasVariable( 'page_limit', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'page_limit' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 83,
  ),
  1 => 
  array (
    0 => 12,
    1 => 0,
    2 => 355,
  ),
  2 => 'design/delta/override/templates/full/lists.tpl',
) );
    $tpl->setVariable( 'page_limit', 30, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'page_limit', 30, $rootNamespace );
}

// def $classes
if ( $tpl->hasVariable( 'classes', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'classes' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 83,
  ),
  1 => 
  array (
    0 => 12,
    1 => 0,
    2 => 355,
  ),
  2 => 'design/delta/override/templates/full/lists.tpl',
) );
    $tpl->setVariable( 'classes', array (
  0 => 'link',
  1 => 'category',
  2 => 'article',
  3 => 'image',
  4 => 'user',
  5 => 'folder',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'classes', array (
  0 => 'link',
  1 => 'category',
  2 => 'article',
  3 => 'image',
  4 => 'user',
  5 => 'folder',
), $rootNamespace );
}

// def $children
if ( $tpl->hasVariable( 'children', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'children' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 83,
  ),
  1 => 
  array (
    0 => 12,
    1 => 0,
    2 => 355,
  ),
  2 => 'design/delta/override/templates/full/lists.tpl',
) );
    $tpl->setVariable( 'children', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'children', array (
), $rootNamespace );
}

// def $children_count
if ( $tpl->hasVariable( 'children_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'children_count' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 83,
  ),
  1 => 
  array (
    0 => 12,
    1 => 0,
    2 => 355,
  ),
  2 => 'design/delta/override/templates/full/lists.tpl',
) );
    $tpl->setVariable( 'children_count', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'children_count', '', $rootNamespace );
}

// def $childNodes
if ( $tpl->hasVariable( 'childNodes', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'childNodes' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 83,
  ),
  1 => 
  array (
    0 => 12,
    1 => 0,
    2 => 355,
  ),
  2 => 'design/delta/override/templates/full/lists.tpl',
) );
    $tpl->setVariable( 'childNodes', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'childNodes', array (
), $rootNamespace );
}

// def $currentUserID
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'fetchCurrentUser' ),
  array_values( array(  ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
$var1 = compiledFetchAttribute( $var, 'contentobject' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'currentUserID', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'currentUserID' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 83,
  ),
  1 => 
  array (
    0 => 12,
    1 => 0,
    2 => 355,
  ),
  2 => 'design/delta/override/templates/full/lists.tpl',
) );
    $tpl->setVariable( 'currentUserID', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'currentUserID', $var, $rootNamespace );
}

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'depth' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) <= ( '3' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '  ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'classes', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['classes'] = array (
  0 => 'link',
  1 => 'category',
  2 => 'article',
  3 => 'image',
  4 => 'user',
  5 => 'folder',
);
}
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'node_id' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = ( ( $if_cond2 ) == ( 12 ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'depth' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) <= ( '3' ) );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '  ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'classes', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['classes'] = array (
  0 => 'link',
  1 => 'article',
  2 => 'image',
  3 => 'user',
);
}
}
unset( $if_cond );
// if ends

// def $parent_node_id
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'parent_node_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'parent_node_id' is already defined.", array (
  0 => 
  array (
    0 => 21,
    1 => 0,
    2 => 598,
  ),
  1 => 
  array (
    0 => 21,
    1 => 33,
    2 => 631,
  ),
  2 => 'design/delta/override/templates/full/lists.tpl',
) );
    $tpl->setVariable( 'parent_node_id', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'parent_node_id', $var, $rootNamespace );
}

unset( $elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_3 );
unset( $elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_31 );
unset( $elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_31 );
$elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_31 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_32 = compiledFetchAttribute( $elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_31, 'node_id' );
unset( $elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_31 );
$elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_31 = $elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_32;
if (! isset( $elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_31 ) ) $elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_31 = NULL;
while ( is_object( $elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_31 ) and method_exists( $elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_31, 'templateValue' ) )
    $elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_31 = $elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_31->templateValue();
while ( is_object( $elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_31 ) and method_exists( $elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_31, 'templateValue' ) )
    $elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_31 = $elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_31->templateValue();
$elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_3 = ( ( $elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_31 ) == ( '277' ) );
unset( $elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_31 );
if (! isset( $elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_3 ) ) $elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_3 = NULL;
while ( is_object( $elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_3 ) and method_exists( $elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_3, 'templateValue' ) )
    $elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_3 = $elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_3->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'node_id' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( '687' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '  ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'parent_node_id', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['parent_node_id'] = 687;
}
}
elseif ( $elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_3 )
{
$text .= '  ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'parent_node_id', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['parent_node_id'] = 687;
}
}
unset( $if_cond );
// if ends

unset( $elseif_cond_fe9edd62c09f90e20ecbf493b9bfc5bd_3 );

unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'parent_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['parent_node_id'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$var3 = compiledFetchAttribute( $var2, 'offset' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['page_limit'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'classes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['classes'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array_values( array(     'parent_node_id' => $var1,
    'sort_by' => array( "priority",
       false ),
    'only_translated' => false,
    'language' => false,
    'offset' => $var2,
    'limit' => $var3,
    'depth' => 1,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => "include",
    'class_filter_array' => $var4,
    'group_by' => false,
    'main_node_only' => false,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => null ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2, $var3, $var4 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'children', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['children'] = $var;
    unset( $var );
}
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'parent_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['parent_node_id'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'classes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['classes'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTreeCount' ),
  array_values( array(     'parent_node_id' => $var1,
    'only_translated' => false,
    'language' => false,
    'class_filter_type' => "include",
    'class_filter_array' => $var2,
    'attribute_filter' => false,
    'depth' => 1,
    'depth_operator' => "le",
    'ignore_visibility' => false,
    'limitation' => null,
    'main_node_only' => false,
    'extended_attribute_filter' => false,
    'objectname_filter' => null ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'children_count', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['children_count'] = $var;
    unset( $var );
}
$text .= '
    





<div class="border-box">
<div class="border-tl"><div class="border-tr"><div class="border-tc"></div></div></div>
<div class="border-ml"><div class="border-mr"><div class="border-mc float-break">

<div class="content-view-full">
    <div class="class-folder">

        <div class="attribute-header">
            <h1>';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'name',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 64,
    1 => 16,
    2 => 2393,
  ),
  1 => 
  array (
    0 => 64,
    1 => 64,
    2 => 2441,
  ),
  2 => 'design/delta/override/templates/full/lists.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '</h1>
        </div>

	

	';
// if begins
$if_cond = true;
if ( $if_cond )
{
$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
$if_cond2 = $nod_aab331e35dd33907838565f6db948e5d;
if ( !$if_cond2 )
{
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'object' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'data_map' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
}
$if_cond3 = compiledFetchAttribute( $if_cond2, 'short_description' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
$if_cond2 = $nod_aab331e35dd33907838565f6db948e5d;
if ( !$if_cond2 )
{
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'object' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'data_map' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
}
if ( !isset( $if_cond2['short_description'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$if_cond2['short_description'] does not exist, cannot fetch the value." );
    $if_cond2 = null;
}
else
    $if_cond2 = $if_cond2['short_description'];
if ( !is_object( $if_cond2 ) )
{
    $if_cond2 = null;
}
else if ( $if_cond2->hasAttribute( "has_content" ) )
{
    $if_cond2 = $if_cond2->attribute( "has_content" );
}
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                <div class="attribute-short">
                    ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'short_description',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 72,
    1 => 20,
    2 => 2790,
  ),
  1 => 
  array (
    0 => 72,
    1 => 81,
    2 => 2851,
  ),
  2 => 'design/delta/override/templates/full/lists.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '                </div>
            ';
}
unset( $if_cond );
// if ends

$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '
        ';
// if begins
unset( $if_cond );
$if_cond = $nod_aab331e35dd33907838565f6db948e5d;
if ( !$if_cond )
{
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'object' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
}
if ( !isset( $if_cond['description'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$if_cond['description'] does not exist, cannot fetch the value." );
    $if_cond = null;
}
else
    $if_cond = $if_cond['description'];
if ( !is_object( $if_cond ) )
{
    $if_cond = null;
}
else if ( $if_cond->hasAttribute( "has_content" ) )
{
    $if_cond = $if_cond->attribute( "has_content" );
}
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <div class="attribute-long">
                ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'description',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 79,
    1 => 16,
    2 => 3026,
  ),
  1 => 
  array (
    0 => 79,
    1 => 71,
    2 => 3081,
  ),
  2 => 'design/delta/override/templates/full/lists.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '            </div>
        ';
}
unset( $if_cond );
// if ends

$text .= '    </div>
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
                      Front page submissions for a given day (e.g. ';
unset( $var );
$locale = eZLocale::instance();
unset( $var1 );
$var1 = time();
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $locale->formatDateTimeType( '%Y-%m-%d', $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ')
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
                    <td>The newest \'Show HND\' (text) posts</td>
                  </tr>
                  <tr>
                    <th style="width: 10rem">
                      <a href="/ask" class="link">asknew</a>
                    </th>
                    <td>The newest \'Ask HND\' (text) posts</td>
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

';

$setArray = $oldSetArray_aab331e35dd33907838565f6db948e5d;
$tpl->Level--;
?>
