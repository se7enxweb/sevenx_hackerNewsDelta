<?php
// URI:       design:node/view/full.tpl
// Filename:  design/delta/override/templates/full/members.tpl
// Timestamp: 1768831858 (Mon Jan 19 6:10:58 PST 2026)
$oldSetArray_55e45c7cc2ae3b2daca880f69c304038 = isset( $setArray ) ? $setArray : array();
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
$nod_55e45c7cc2ae3b2daca880f69c304038 = $object->attribute( 'data_map' );
else
$nod_55e45c7cc2ae3b2daca880f69c304038 = false;
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
    0 => 10,
    1 => 26,
    2 => 275,
  ),
  2 => 'design/delta/override/templates/full/members.tpl',
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
    0 => 10,
    1 => 26,
    2 => 275,
  ),
  2 => 'design/delta/override/templates/full/members.tpl',
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
    0 => 10,
    1 => 26,
    2 => 275,
  ),
  2 => 'design/delta/override/templates/full/members.tpl',
) );
    $tpl->setVariable( 'classes', array (
  0 => 'link',
  1 => 'category',
  2 => 'article',
  3 => 'image',
  4 => 'user',
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
    0 => 10,
    1 => 26,
    2 => 275,
  ),
  2 => 'design/delta/override/templates/full/members.tpl',
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
    0 => 10,
    1 => 26,
    2 => 275,
  ),
  2 => 'design/delta/override/templates/full/members.tpl',
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
    0 => 10,
    1 => 26,
    2 => 275,
  ),
  2 => 'design/delta/override/templates/full/members.tpl',
) );
    $tpl->setVariable( 'childNodes', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'childNodes', array (
), $rootNamespace );
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
    0 => 19,
    1 => 0,
    2 => 508,
  ),
  1 => 
  array (
    0 => 19,
    1 => 33,
    2 => 541,
  ),
  2 => 'design/delta/override/templates/full/members.tpl',
) );
    $tpl->setVariable( 'parent_node_id', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'parent_node_id', $var, $rootNamespace );
}

unset( $elseif_cond_4f517b6ae34e59b994890514a045d019_3 );
unset( $elseif_cond_4f517b6ae34e59b994890514a045d019_31 );
unset( $elseif_cond_4f517b6ae34e59b994890514a045d019_31 );
$elseif_cond_4f517b6ae34e59b994890514a045d019_31 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$elseif_cond_4f517b6ae34e59b994890514a045d019_32 = compiledFetchAttribute( $elseif_cond_4f517b6ae34e59b994890514a045d019_31, 'node_id' );
unset( $elseif_cond_4f517b6ae34e59b994890514a045d019_31 );
$elseif_cond_4f517b6ae34e59b994890514a045d019_31 = $elseif_cond_4f517b6ae34e59b994890514a045d019_32;
if (! isset( $elseif_cond_4f517b6ae34e59b994890514a045d019_31 ) ) $elseif_cond_4f517b6ae34e59b994890514a045d019_31 = NULL;
while ( is_object( $elseif_cond_4f517b6ae34e59b994890514a045d019_31 ) and method_exists( $elseif_cond_4f517b6ae34e59b994890514a045d019_31, 'templateValue' ) )
    $elseif_cond_4f517b6ae34e59b994890514a045d019_31 = $elseif_cond_4f517b6ae34e59b994890514a045d019_31->templateValue();
while ( is_object( $elseif_cond_4f517b6ae34e59b994890514a045d019_31 ) and method_exists( $elseif_cond_4f517b6ae34e59b994890514a045d019_31, 'templateValue' ) )
    $elseif_cond_4f517b6ae34e59b994890514a045d019_31 = $elseif_cond_4f517b6ae34e59b994890514a045d019_31->templateValue();
$elseif_cond_4f517b6ae34e59b994890514a045d019_3 = ( ( $elseif_cond_4f517b6ae34e59b994890514a045d019_31 ) == ( '277' ) );
unset( $elseif_cond_4f517b6ae34e59b994890514a045d019_31 );
if (! isset( $elseif_cond_4f517b6ae34e59b994890514a045d019_3 ) ) $elseif_cond_4f517b6ae34e59b994890514a045d019_3 = NULL;
while ( is_object( $elseif_cond_4f517b6ae34e59b994890514a045d019_3 ) and method_exists( $elseif_cond_4f517b6ae34e59b994890514a045d019_3, 'templateValue' ) )
    $elseif_cond_4f517b6ae34e59b994890514a045d019_3 = $elseif_cond_4f517b6ae34e59b994890514a045d019_3->templateValue();

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
elseif ( $elseif_cond_4f517b6ae34e59b994890514a045d019_3 )
{
$text .= '  ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'parent_node_id', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['parent_node_id'] = 687;
}
}
unset( $if_cond );
// if ends

unset( $elseif_cond_4f517b6ae34e59b994890514a045d019_3 );

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
    'sort_by' => array( "published",
       false ),
    'only_translated' => false,
    'language' => false,
    'offset' => $var2,
    'limit' => $var3,
    'depth' => false,
    'depth_operator' => false,
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
    'depth' => false,
    'depth_operator' => false,
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
    0 => 61,
    1 => 16,
    2 => 2303,
  ),
  1 => 
  array (
    0 => 61,
    1 => 64,
    2 => 2351,
  ),
  2 => 'design/delta/override/templates/full/members.tpl',
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
$if_cond2 = $nod_55e45c7cc2ae3b2daca880f69c304038;
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
$if_cond2 = $nod_55e45c7cc2ae3b2daca880f69c304038;
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
    0 => 69,
    1 => 20,
    2 => 2700,
  ),
  1 => 
  array (
    0 => 69,
    1 => 81,
    2 => 2761,
  ),
  2 => 'design/delta/override/templates/full/members.tpl',
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
$if_cond = $nod_55e45c7cc2ae3b2daca880f69c304038;
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
    0 => 76,
    1 => 16,
    2 => 2936,
  ),
  1 => 
  array (
    0 => 76,
    1 => 71,
    2 => 2991,
  ),
  2 => 'design/delta/override/templates/full/members.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '            </div>
        ';
}
unset( $if_cond );
// if ends

$text .= '
        

    	<div class="content-view-children float-break">

    	    ';
// foreach begins
$skipDelimiter = true;
$fe_array_4f517b6ae34e59b994890514a045d019_1 = [];
$fe_array_keys_4f517b6ae34e59b994890514a045d019_1 = [];
$fe_n_items_4f517b6ae34e59b994890514a045d019_1 = 0;
$fe_n_items_processed_4f517b6ae34e59b994890514a045d019_1  = 0;
$fe_i_4f517b6ae34e59b994890514a045d019_1 = 0;
$fe_key_4f517b6ae34e59b994890514a045d019_1 = 0;
$fe_val_4f517b6ae34e59b994890514a045d019_1 = 0;
$fe_offset_4f517b6ae34e59b994890514a045d019_1 = 0;
$fe_max_4f517b6ae34e59b994890514a045d019_1 = 0;
$fe_reverse_4f517b6ae34e59b994890514a045d019_1 = 0;
$fe_first_val_4f517b6ae34e59b994890514a045d019_1 = 0;
$fe_last_val_4f517b6ae34e59b994890514a045d019_1 = 0;
if ( !isset( $fe_variable_stack_4f517b6ae34e59b994890514a045d019_1 ) ) $fe_variable_stack_4f517b6ae34e59b994890514a045d019_1 = [];
$fe_variable_stack_4f517b6ae34e59b994890514a045d019_1[] = @compact( 'fe_array_4f517b6ae34e59b994890514a045d019_1', 'fe_array_keys_4f517b6ae34e59b994890514a045d019_1', 'fe_n_items_4f517b6ae34e59b994890514a045d019_1', 'fe_n_items_processed_4f517b6ae34e59b994890514a045d019_1', 'fe_i_4f517b6ae34e59b994890514a045d019_1', 'fe_key_4f517b6ae34e59b994890514a045d019_1', 'fe_val_4f517b6ae34e59b994890514a045d019_1', 'fe_offset_4f517b6ae34e59b994890514a045d019_1', 'fe_max_4f517b6ae34e59b994890514a045d019_1', 'fe_reverse_4f517b6ae34e59b994890514a045d019_1', 'fe_first_val_4f517b6ae34e59b994890514a045d019_1', 'fe_last_val_4f517b6ae34e59b994890514a045d019_1' );
unset( $fe_array_4f517b6ae34e59b994890514a045d019_1 );
unset( $fe_array_4f517b6ae34e59b994890514a045d019_1 );
$fe_array_4f517b6ae34e59b994890514a045d019_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'children', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['children'] : null;
if (! isset( $fe_array_4f517b6ae34e59b994890514a045d019_1 ) ) $fe_array_4f517b6ae34e59b994890514a045d019_1 = NULL;
while ( is_object( $fe_array_4f517b6ae34e59b994890514a045d019_1 ) and method_exists( $fe_array_4f517b6ae34e59b994890514a045d019_1, 'templateValue' ) )
    $fe_array_4f517b6ae34e59b994890514a045d019_1 = $fe_array_4f517b6ae34e59b994890514a045d019_1->templateValue();

$fe_array_keys_4f517b6ae34e59b994890514a045d019_1 = is_array( $fe_array_4f517b6ae34e59b994890514a045d019_1 ) ? array_keys( $fe_array_4f517b6ae34e59b994890514a045d019_1 ) : [];
$fe_n_items_4f517b6ae34e59b994890514a045d019_1 = count( $fe_array_keys_4f517b6ae34e59b994890514a045d019_1 );
$fe_n_items_processed_4f517b6ae34e59b994890514a045d019_1 = 0;
$fe_offset_4f517b6ae34e59b994890514a045d019_1 = 0;
$fe_max_4f517b6ae34e59b994890514a045d019_1 = $fe_n_items_4f517b6ae34e59b994890514a045d019_1 - $fe_offset_4f517b6ae34e59b994890514a045d019_1;
$fe_reverse_4f517b6ae34e59b994890514a045d019_1 = false;
if ( $fe_offset_4f517b6ae34e59b994890514a045d019_1 < 0 || $fe_offset_4f517b6ae34e59b994890514a045d019_1 >= $fe_n_items_4f517b6ae34e59b994890514a045d019_1 )
{
    $fe_offset_4f517b6ae34e59b994890514a045d019_1 = ( $fe_offset_4f517b6ae34e59b994890514a045d019_1 < 0 ) ? 0 : $fe_n_items_4f517b6ae34e59b994890514a045d019_1;
    if ( $fe_n_items_4f517b6ae34e59b994890514a045d019_1 || $fe_offset_4f517b6ae34e59b994890514a045d019_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_4f517b6ae34e59b994890514a045d019_1'. Array count: $fe_n_items_4f517b6ae34e59b994890514a045d019_1");   
}
}
if ( $fe_max_4f517b6ae34e59b994890514a045d019_1 < 0 || $fe_offset_4f517b6ae34e59b994890514a045d019_1 + $fe_max_4f517b6ae34e59b994890514a045d019_1 > $fe_n_items_4f517b6ae34e59b994890514a045d019_1 )
{
    if ( $fe_max_4f517b6ae34e59b994890514a045d019_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_4f517b6ae34e59b994890514a045d019_1");
    $fe_max_4f517b6ae34e59b994890514a045d019_1 = $fe_n_items_4f517b6ae34e59b994890514a045d019_1 - $fe_offset_4f517b6ae34e59b994890514a045d019_1;
}
if ( $fe_reverse_4f517b6ae34e59b994890514a045d019_1 )
{
    $fe_first_val_4f517b6ae34e59b994890514a045d019_1 = $fe_n_items_4f517b6ae34e59b994890514a045d019_1 - 1 - $fe_offset_4f517b6ae34e59b994890514a045d019_1;
    $fe_last_val_4f517b6ae34e59b994890514a045d019_1  = 0;
}
else
{
    $fe_first_val_4f517b6ae34e59b994890514a045d019_1 = $fe_offset_4f517b6ae34e59b994890514a045d019_1;
    $fe_last_val_4f517b6ae34e59b994890514a045d019_1  = $fe_n_items_4f517b6ae34e59b994890514a045d019_1 - 1;
}
// foreach
for ( $fe_i_4f517b6ae34e59b994890514a045d019_1 = $fe_first_val_4f517b6ae34e59b994890514a045d019_1; $fe_n_items_processed_4f517b6ae34e59b994890514a045d019_1 < $fe_max_4f517b6ae34e59b994890514a045d019_1 && ( $fe_reverse_4f517b6ae34e59b994890514a045d019_1 ? $fe_i_4f517b6ae34e59b994890514a045d019_1 >= $fe_last_val_4f517b6ae34e59b994890514a045d019_1 : $fe_i_4f517b6ae34e59b994890514a045d019_1 <= $fe_last_val_4f517b6ae34e59b994890514a045d019_1 ); $fe_reverse_4f517b6ae34e59b994890514a045d019_1 ? $fe_i_4f517b6ae34e59b994890514a045d019_1-- : $fe_i_4f517b6ae34e59b994890514a045d019_1++ )
{
$fe_key_4f517b6ae34e59b994890514a045d019_1 = $fe_array_keys_4f517b6ae34e59b994890514a045d019_1[$fe_i_4f517b6ae34e59b994890514a045d019_1];
$fe_val_4f517b6ae34e59b994890514a045d019_1 = $fe_array_4f517b6ae34e59b994890514a045d019_1[$fe_key_4f517b6ae34e59b994890514a045d019_1];
$vars[$rootNamespace]['child'] = $fe_val_4f517b6ae34e59b994890514a045d019_1;
$vars[$rootNamespace]['index'] = $fe_key_4f517b6ae34e59b994890514a045d019_1;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= '             	  ';
$textElements = array();
$tpl->processFunction( 'include', $textElements,
                       false,
                       array (
  'uri' => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'design:content/datatype/view/ezxmltags/separator.tpl',
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 96,
    1 => 16,
    2 => 3852,
  ),
  1 => 
  array (
    0 => 96,
    1 => 82,
    2 => 3918,
  ),
  2 => 'design/delta/override/templates/full/members.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '         	';
} // delimiter ends

$text .= '                ';
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
$if_cond1 = ( ( $if_cond2 ) == ( 828 ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) == ( 0 ) );
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
$text .= '	 	    <form name="children" method="post" action="/content/action">
		    	 <input type="hidden" name="ContentNodeID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
			 <input type="hidden" name="ContentObjectID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'contentobject_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
	 		 <input type="hidden" name="NodeID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
	 		 <input type="hidden" name="ClassID" value="31" />
	 		 <input type="submit" name="NewButton" value="Upload New Story Image" id="btn-submit" style="width:70%"/>
         	    </form>
		';
}
unset( $if_cond );
// if ends

$text .= '                ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'child', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['child'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
$vars[$namespace]['node'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( 'design' );
    $dKeys = $resH->keys();
}
if ( !isset( $dKeysStack ) )
{
    $dKeysStack = array();
}
$dKeysStack[] = $dKeys;
unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'contentobject_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["object"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'contentclass_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'match_ingroup_id_list' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_group"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_id_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_identifier_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent_node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'depth' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["depth"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'url_alias' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["url_alias"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_object_remote_id"] = $dKey;
unset( $dKey );

if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "bug_report_form", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "bug_report_form" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/bug_report_form-a09e5fb7cf2f36cc25d27360fa3adc5a.php' ) && filemtime( 'var/site/cache/template/compiled/bug_report_form-a09e5fb7cf2f36cc25d27360fa3adc5a.php' ) > filemtime( 'design/delta/override/templates/line/bug_report_form.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/bug_report_form.tpl' );
include( '' . 'var/site/cache/template/compiled/bug_report_form-a09e5fb7cf2f36cc25d27360fa3adc5a.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/bug_report_form.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "category", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "category" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/category-29f2a5284ec5ea723b435a7ed2e9b47c.php' ) && filemtime( 'var/site/cache/template/compiled/category-29f2a5284ec5ea723b435a7ed2e9b47c.php' ) > filemtime( 'design/delta/override/templates/line/category.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/category.tpl' );
include( '' . 'var/site/cache/template/compiled/category-29f2a5284ec5ea723b435a7ed2e9b47c.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/category.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "user", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "user" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/user-53a3920918b523fb7df540df9fc2ba4e.php' ) && filemtime( 'var/site/cache/template/compiled/user-53a3920918b523fb7df540df9fc2ba4e.php' ) > filemtime( 'design/delta/override/templates/line/user.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/user.tpl' );
include( '' . 'var/site/cache/template/compiled/user-53a3920918b523fb7df540df9fc2ba4e.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/user.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "story", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "story" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/story-28ce5526878ccf1911475287b39ea36b.php' ) && filemtime( 'var/site/cache/template/compiled/story-28ce5526878ccf1911475287b39ea36b.php' ) > filemtime( 'design/delta/override/templates/line/story.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/story.tpl' );
include( '' . 'var/site/cache/template/compiled/story-28ce5526878ccf1911475287b39ea36b.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/story.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "youtube_video", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "youtube_video" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/youtube_video-215631ac83cd1cae6696ade340cc39ec.php' ) && filemtime( 'var/site/cache/template/compiled/youtube_video-215631ac83cd1cae6696ade340cc39ec.php' ) > filemtime( 'extension/sevenx_diggclone/design/digg/override/templates/line/youtube_video.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/sevenx_diggclone/design/digg/override/templates/line/youtube_video.tpl' );
include( '' . 'var/site/cache/template/compiled/youtube_video-215631ac83cd1cae6696ade340cc39ec.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/sevenx_diggclone/design/digg/override/templates/line/youtube_video.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "instagram_video", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "instagram_video" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/instagram_video-a2b8aea67863600543403d462f7b2430.php' ) && filemtime( 'var/site/cache/template/compiled/instagram_video-a2b8aea67863600543403d462f7b2430.php' ) > filemtime( 'extension/sevenx_diggclone/design/digg/override/templates/line/instagram_video.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/sevenx_diggclone/design/digg/override/templates/line/instagram_video.tpl' );
include( '' . 'var/site/cache/template/compiled/instagram_video-a2b8aea67863600543403d462f7b2430.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/sevenx_diggclone/design/digg/override/templates/line/instagram_video.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/article-0dc51252b443bc8ca920babc4dfc063f.php' ) && filemtime( 'var/site/cache/template/compiled/article-0dc51252b443bc8ca920babc4dfc063f.php' ) > filemtime( 'design/delta/override/templates/line/article.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/article.tpl' );
include( '' . 'var/site/cache/template/compiled/article-0dc51252b443bc8ca920babc4dfc063f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/article.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "geo_article", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "geo_article" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/geo_article-c6158a194520ae223b667589c0ca63ac.php' ) && filemtime( 'var/site/cache/template/compiled/geo_article-c6158a194520ae223b667589c0ca63ac.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/geo_article.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/geo_article.tpl' );
include( '' . 'var/site/cache/template/compiled/geo_article-c6158a194520ae223b667589c0ca63ac.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/geo_article.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_mainpage", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_mainpage" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/article_mainpage-8eb592bf1ba994f1b60fa4aef510f2eb.php' ) && filemtime( 'var/site/cache/template/compiled/article_mainpage-8eb592bf1ba994f1b60fa4aef510f2eb.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/article_mainpage.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/article_mainpage.tpl' );
include( '' . 'var/site/cache/template/compiled/article_mainpage-8eb592bf1ba994f1b60fa4aef510f2eb.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/article_mainpage.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_subpage", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_subpage" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/article_subpage-81769407d6e1d2cd2d0c50e85a9c7fdb.php' ) && filemtime( 'var/site/cache/template/compiled/article_subpage-81769407d6e1d2cd2d0c50e85a9c7fdb.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/article_subpage.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/article_subpage.tpl' );
include( '' . 'var/site/cache/template/compiled/article_subpage-81769407d6e1d2cd2d0c50e85a9c7fdb.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/article_subpage.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "banner", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "banner" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/banner-b7050ba8e44bbded98450cf004ca7f79.php' ) && filemtime( 'var/site/cache/template/compiled/banner-b7050ba8e44bbded98450cf004ca7f79.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/banner.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/banner.tpl' );
include( '' . 'var/site/cache/template/compiled/banner-b7050ba8e44bbded98450cf004ca7f79.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/banner.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "blog", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "blog" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/blog-0eefb6a517b1d59971fdf42eb6cf7c0f.php' ) && filemtime( 'var/site/cache/template/compiled/blog-0eefb6a517b1d59971fdf42eb6cf7c0f.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/blog.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/blog.tpl' );
include( '' . 'var/site/cache/template/compiled/blog-0eefb6a517b1d59971fdf42eb6cf7c0f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/blog.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "blog_post", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "blog_post" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/blog_post-6ef378421b57de5c47a9352349bd01e3.php' ) && filemtime( 'var/site/cache/template/compiled/blog_post-6ef378421b57de5c47a9352349bd01e3.php' ) > filemtime( 'extension/sevenx_diggclone/design/digg/override/templates/line/blog_post.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/sevenx_diggclone/design/digg/override/templates/line/blog_post.tpl' );
include( '' . 'var/site/cache/template/compiled/blog_post-6ef378421b57de5c47a9352349bd01e3.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/sevenx_diggclone/design/digg/override/templates/line/blog_post.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "comment", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "comment" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/comment-4bf35f09f1c4e9ac6cb6843197f07234.php' ) && filemtime( 'var/site/cache/template/compiled/comment-4bf35f09f1c4e9ac6cb6843197f07234.php' ) > filemtime( 'design/delta/override/templates/line/comment.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/comment.tpl' );
include( '' . 'var/site/cache/template/compiled/comment-4bf35f09f1c4e9ac6cb6843197f07234.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/comment.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "documentation_page", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "documentation_page" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/documentation_page-2a3f2d2c0e4683ed9f5d9320e772c5da.php' ) && filemtime( 'var/site/cache/template/compiled/documentation_page-2a3f2d2c0e4683ed9f5d9320e772c5da.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/documentation_page.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/documentation_page.tpl' );
include( '' . 'var/site/cache/template/compiled/documentation_page-2a3f2d2c0e4683ed9f5d9320e772c5da.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/documentation_page.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "event_calendar", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "event_calendar" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/event_calendar-2525ac7b8a5a786030447e88a7dfb04d.php' ) && filemtime( 'var/site/cache/template/compiled/event_calendar-2525ac7b8a5a786030447e88a7dfb04d.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/event_calendar.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/event_calendar.tpl' );
include( '' . 'var/site/cache/template/compiled/event_calendar-2525ac7b8a5a786030447e88a7dfb04d.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/event_calendar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "event", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "event" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/event-c60ef1079d868f89e7b1b63a58ba31be.php' ) && filemtime( 'var/site/cache/template/compiled/event-c60ef1079d868f89e7b1b63a58ba31be.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/event.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/event.tpl' );
include( '' . 'var/site/cache/template/compiled/event-c60ef1079d868f89e7b1b63a58ba31be.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/event.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "feedback_form", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "feedback_form" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/feedback_form-271ca800559b2f6858133a01c4ccfe93.php' ) && filemtime( 'var/site/cache/template/compiled/feedback_form-271ca800559b2f6858133a01c4ccfe93.php' ) > filemtime( 'design/delta/override/templates/line/feedback_form.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/feedback_form.tpl' );
include( '' . 'var/site/cache/template/compiled/feedback_form-271ca800559b2f6858133a01c4ccfe93.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/feedback_form.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "file", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "file" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/file-3758e42026f15418124382bf9cb09bbf.php' ) && filemtime( 'var/site/cache/template/compiled/file-3758e42026f15418124382bf9cb09bbf.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/file.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/file.tpl' );
include( '' . 'var/site/cache/template/compiled/file-3758e42026f15418124382bf9cb09bbf.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/file.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "flash", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "flash" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/flash-c345c6e42d44095796bfe1db2e0a5b58.php' ) && filemtime( 'var/site/cache/template/compiled/flash-c345c6e42d44095796bfe1db2e0a5b58.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/flash.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/flash.tpl' );
include( '' . 'var/site/cache/template/compiled/flash-c345c6e42d44095796bfe1db2e0a5b58.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/flash.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "folder", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "folder" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/folder-75e1beaa9daa5edcba545fc389bf2128.php' ) && filemtime( 'var/site/cache/template/compiled/folder-75e1beaa9daa5edcba545fc389bf2128.php' ) > filemtime( 'design/delta/override/templates/line/folder.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/folder.tpl' );
include( '' . 'var/site/cache/template/compiled/folder-75e1beaa9daa5edcba545fc389bf2128.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/folder.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/forum-2fa55dab5a456a6aba7031471f0e2e3e.php' ) && filemtime( 'var/site/cache/template/compiled/forum-2fa55dab5a456a6aba7031471f0e2e3e.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/forum.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/forum.tpl' );
include( '' . 'var/site/cache/template/compiled/forum-2fa55dab5a456a6aba7031471f0e2e3e.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/forum.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum_reply", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum_reply" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/forum_reply-4924123f5e578783f4ab098d0dffee9c.php' ) && filemtime( 'var/site/cache/template/compiled/forum_reply-4924123f5e578783f4ab098d0dffee9c.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/forum_reply.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/forum_reply.tpl' );
include( '' . 'var/site/cache/template/compiled/forum_reply-4924123f5e578783f4ab098d0dffee9c.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/forum_reply.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum_topic", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum_topic" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/forum_topic-843ed6aa42d524a1fa22fccd99bb8088.php' ) && filemtime( 'var/site/cache/template/compiled/forum_topic-843ed6aa42d524a1fa22fccd99bb8088.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/forum_topic.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/forum_topic.tpl' );
include( '' . 'var/site/cache/template/compiled/forum_topic-843ed6aa42d524a1fa22fccd99bb8088.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/forum_topic.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forums", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forums" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/forums-fdfdc5d11636c6b72c09ca0e634699e1.php' ) && filemtime( 'var/site/cache/template/compiled/forums-fdfdc5d11636c6b72c09ca0e634699e1.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/forums.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/forums.tpl' );
include( '' . 'var/site/cache/template/compiled/forums-fdfdc5d11636c6b72c09ca0e634699e1.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/forums.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "gallery", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "gallery" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/gallery-b46366278a5d1acc889689a5178e76c9.php' ) && filemtime( 'var/site/cache/template/compiled/gallery-b46366278a5d1acc889689a5178e76c9.php' ) > filemtime( 'extension/sevenx_diggclone/design/digg/override/templates/line/gallery.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/sevenx_diggclone/design/digg/override/templates/line/gallery.tpl' );
include( '' . 'var/site/cache/template/compiled/gallery-b46366278a5d1acc889689a5178e76c9.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/sevenx_diggclone/design/digg/override/templates/line/gallery.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "image", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "image" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/image-846d0aa3eb266feceb498985696efdc1.php' ) && filemtime( 'var/site/cache/template/compiled/image-846d0aa3eb266feceb498985696efdc1.php' ) > filemtime( 'design/delta/override/templates/line/image.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/image.tpl' );
include( '' . 'var/site/cache/template/compiled/image-846d0aa3eb266feceb498985696efdc1.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/image.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "infobox", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "infobox" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/infobox-1b393dc085eabb194b5cc4b6a846e4aa.php' ) && filemtime( 'var/site/cache/template/compiled/infobox-1b393dc085eabb194b5cc4b6a846e4aa.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/infobox.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/infobox.tpl' );
include( '' . 'var/site/cache/template/compiled/infobox-1b393dc085eabb194b5cc4b6a846e4aa.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/infobox.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "link", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "link" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/link-2ac4d77fb122ded7fc5704360a33f762.php' ) && filemtime( 'var/site/cache/template/compiled/link-2ac4d77fb122ded7fc5704360a33f762.php' ) > filemtime( 'design/delta/override/templates/line/link.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/link.tpl' );
include( '' . 'var/site/cache/template/compiled/link-2ac4d77fb122ded7fc5704360a33f762.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/link.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "multicalendar", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "multicalendar" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/multicalendar-1a11a1a66ff5e4705f8de4f3098ad82f.php' ) && filemtime( 'var/site/cache/template/compiled/multicalendar-1a11a1a66ff5e4705f8de4f3098ad82f.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/multicalendar.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/multicalendar.tpl' );
include( '' . 'var/site/cache/template/compiled/multicalendar-1a11a1a66ff5e4705f8de4f3098ad82f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/multicalendar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "poll", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "poll" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/poll-d60f5c1c7e2f5519285fe8b2907403da.php' ) && filemtime( 'var/site/cache/template/compiled/poll-d60f5c1c7e2f5519285fe8b2907403da.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/poll.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/poll.tpl' );
include( '' . 'var/site/cache/template/compiled/poll-d60f5c1c7e2f5519285fe8b2907403da.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/poll.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "product", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "product" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/product-d09e8a7524a9c500849e47ee1ff4ab25.php' ) && filemtime( 'var/site/cache/template/compiled/product-d09e8a7524a9c500849e47ee1ff4ab25.php' ) > filemtime( 'extension/sevenx_diggclone/design/digg/override/templates/line/product.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/sevenx_diggclone/design/digg/override/templates/line/product.tpl' );
include( '' . 'var/site/cache/template/compiled/product-d09e8a7524a9c500849e47ee1ff4ab25.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/sevenx_diggclone/design/digg/override/templates/line/product.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "silverlight", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "silverlight" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/silverlight-3f7a054de3d8d91d837d1e7c14fc319d.php' ) && filemtime( 'var/site/cache/template/compiled/silverlight-3f7a054de3d8d91d837d1e7c14fc319d.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/silverlight.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/silverlight.tpl' );
include( '' . 'var/site/cache/template/compiled/silverlight-3f7a054de3d8d91d837d1e7c14fc319d.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/silverlight.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "quicktime", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "quicktime" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/quicktime-416ef5d211cdc513daba40e8da09154f.php' ) && filemtime( 'var/site/cache/template/compiled/quicktime-416ef5d211cdc513daba40e8da09154f.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/quicktime.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/quicktime.tpl' );
include( '' . 'var/site/cache/template/compiled/quicktime-416ef5d211cdc513daba40e8da09154f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/quicktime.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "real_video", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "real_video" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/real_video-67a69ed473224fffbf81a9a73ae837a8.php' ) && filemtime( 'var/site/cache/template/compiled/real_video-67a69ed473224fffbf81a9a73ae837a8.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/real_video.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/real_video.tpl' );
include( '' . 'var/site/cache/template/compiled/real_video-67a69ed473224fffbf81a9a73ae837a8.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/real_video.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "windows_media", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "windows_media" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/windows_media-959ce016ef74f23d3c1d5205b05b76eb.php' ) && filemtime( 'var/site/cache/template/compiled/windows_media-959ce016ef74f23d3c1d5205b05b76eb.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/windows_media.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/windows_media.tpl' );
include( '' . 'var/site/cache/template/compiled/windows_media-959ce016ef74f23d3c1d5205b05b76eb.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/windows_media.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else 
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/line-9f5ac76563da0e1aad1b67a83fdd1bb5.php' ) && filemtime( 'var/site/cache/template/compiled/line-9f5ac76563da0e1aad1b67a83fdd1bb5.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/templates/node/view/line.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/templates/node/view/line.tpl' );
include( '' . 'var/site/cache/template/compiled/line-9f5ac76563da0e1aad1b67a83fdd1bb5.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/templates/node/view/line.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
$dKeys = array_pop( $dKeysStack );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $vars[$namespace]['node'] );
$text .= ' 		             ';
$fe_n_items_processed_4f517b6ae34e59b994890514a045d019_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_4f517b6ae34e59b994890514a045d019_1 ) ) extract( array_pop( $fe_variable_stack_4f517b6ae34e59b994890514a045d019_1 ) );

else
{

unset( $fe_array_4f517b6ae34e59b994890514a045d019_1 );

unset( $fe_array_keys_4f517b6ae34e59b994890514a045d019_1 );

unset( $fe_n_items_4f517b6ae34e59b994890514a045d019_1 );

unset( $fe_n_items_processed_4f517b6ae34e59b994890514a045d019_1 );

unset( $fe_i_4f517b6ae34e59b994890514a045d019_1 );

unset( $fe_key_4f517b6ae34e59b994890514a045d019_1 );

unset( $fe_val_4f517b6ae34e59b994890514a045d019_1 );

unset( $fe_offset_4f517b6ae34e59b994890514a045d019_1 );

unset( $fe_max_4f517b6ae34e59b994890514a045d019_1 );

unset( $fe_reverse_4f517b6ae34e59b994890514a045d019_1 );

unset( $fe_first_val_4f517b6ae34e59b994890514a045d019_1 );

unset( $fe_last_val_4f517b6ae34e59b994890514a045d019_1 );

unset( $fe_variable_stack_4f517b6ae34e59b994890514a045d019_1 );

}

// foreach ends
$text .= '	  </div>    


    	    

            ';
$oldRestoreIncludeArray_72922142c254a147355fa9bc9dad2dfa = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $namespace ) and isset( $vars[$namespace]['page_uri'] ) )
    $restoreIncludeArray[] = array( $namespace, 'page_uri', $vars[$namespace]['page_uri'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['page_uri'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'page_uri', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'url_alias' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['page_uri'] = $var;
unset( $var );
if ( isset( $namespace ) and isset( $vars[$namespace]['item_count'] ) )
    $restoreIncludeArray[] = array( $namespace, 'item_count', $vars[$namespace]['item_count'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['item_count'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'item_count', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'children_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['children_count'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['item_count'] = $var;
unset( $var );
if ( isset( $namespace ) and isset( $vars[$namespace]['view_parameters'] ) )
    $restoreIncludeArray[] = array( $namespace, 'view_parameters', $vars[$namespace]['view_parameters'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['view_parameters'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'view_parameters', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['view_parameters'] = $var;
unset( $var );
if ( isset( $namespace ) and isset( $vars[$namespace]['item_limit'] ) )
    $restoreIncludeArray[] = array( $namespace, 'item_limit', $vars[$namespace]['item_limit'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['item_limit'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'item_limit', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['page_limit'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['item_limit'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/google-e86a947a831075deac06f3c72e01f3a7.php' ) && filemtime( 'var/site/cache/template/compiled/google-e86a947a831075deac06f3c72e01f3a7.php' ) > filemtime( 'design/delta/templates/navigator/google.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'navigator' : ( $currentNamespace . ':' . 'navigator' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/templates/navigator/google.tpl' );
include( '' . 'var/site/cache/template/compiled/google-e86a947a831075deac06f3c72e01f3a7.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'navigator' : ( $currentNamespace . ':' . 'navigator' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/templates/navigator/google.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_72922142c254a147355fa9bc9dad2dfa;

$text .= '    </div>
</div>

</div></div></div>
<div class="border-bl"><div class="border-br"><div class="border-bc"></div></div></div>
</div>
';

$setArray = $oldSetArray_55e45c7cc2ae3b2daca880f69c304038;
$tpl->Level--;
?>
