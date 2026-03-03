<?php
// URI:       design:pagelayout.tpl
// Filename:  design/delta/templates/pagelayout.tpl
// Timestamp: 1769248953 (Sat Jan 24 2:02:33 PST 2026)
$oldSetArray_967d73172a6a828d13469f15826e1749 = isset( $setArray ) ? $setArray : array();
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

$text .= '<!DOCTYPE html>
<html lang="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site'] : null;
$var2 = compiledFetchAttribute( $var1, 'http_equiv' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'Content-language' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( (string) $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  ';
// def $basket
unset( $var );
$var = call_user_func_array( array( new eZShopFunctionCollection(), 'fetchBasket' ),
  array_values( array(  ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'basket', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'basket' is already defined.", array (
  0 => 
  array (
    0 => 7,
    1 => 2,
    2 => 180,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 701,
  ),
  2 => 'design/delta/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'basket', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'basket', $var, $rootNamespace );
}

// def $basket_qty
if ( $tpl->hasVariable( 'basket_qty', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'basket_qty' is already defined.", array (
  0 => 
  array (
    0 => 7,
    1 => 2,
    2 => 180,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 701,
  ),
  2 => 'design/delta/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'basket_qty', 0, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'basket_qty', 0, $rootNamespace );
}

// def $basket_is_empty
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var2 = compiledFetchAttribute( $var1, 'is_logged_in' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    unset( $var2 );
$var2 = call_user_func_array( array( new eZShopFunctionCollection(), 'fetchBasket' ),
  array_values( array(  ) ) );
$var2 = isset( $var2['result'] ) ? $var2['result'] : null;
$var3 = compiledFetchAttribute( $var2, "is_empty" );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

    $var = $var2;
}
else
{
    
    $var = 1;
}
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'basket_is_empty', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'basket_is_empty' is already defined.", array (
  0 => 
  array (
    0 => 7,
    1 => 2,
    2 => 180,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 701,
  ),
  2 => 'design/delta/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'basket_is_empty', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'basket_is_empty', $var, $rootNamespace );
}

// def $user_hash
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var3 = compiledFetchAttribute( $var2, 'role_id_list' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = implode( ",", $var2 );unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var5 = compiledFetchAttribute( $var4, 'limited_assignment_value_list' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = implode( ",", $var4 );unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = ( $var1 . ',' . $var3 );
unset( $var1, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'user_hash', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'user_hash' is already defined.", array (
  0 => 
  array (
    0 => 7,
    1 => 2,
    2 => 180,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 701,
  ),
  2 => 'design/delta/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'user_hash', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'user_hash', $var, $rootNamespace );
}

// def $path_array
if ( $tpl->hasVariable( 'path_array', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'path_array' is already defined.", array (
  0 => 
  array (
    0 => 7,
    1 => 2,
    2 => 180,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 701,
  ),
  2 => 'design/delta/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'path_array', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'path_array', array (
), $rootNamespace );
}

// def $path_normalized
if ( $tpl->hasVariable( 'path_normalized', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'path_normalized' is already defined.", array (
  0 => 
  array (
    0 => 7,
    1 => 2,
    2 => 180,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 701,
  ),
  2 => 'design/delta/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'path_normalized', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'path_normalized', '', $rootNamespace );
}

// def $indexpage
if ( $tpl->hasVariable( 'indexpage', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'indexpage' is already defined.", array (
  0 => 
  array (
    0 => 7,
    1 => 2,
    2 => 180,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 701,
  ),
  2 => 'design/delta/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'indexpage', '710', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'indexpage', '710', $rootNamespace );
}

// def $pagerootdepth
if ( $tpl->hasVariable( 'pagerootdepth', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'pagerootdepth' is already defined.", array (
  0 => 
  array (
    0 => 7,
    1 => 2,
    2 => 180,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 701,
  ),
  2 => 'design/delta/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'pagerootdepth', '2', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'pagerootdepth', '2', $rootNamespace );
}

$text .= '  ';
// foreach begins
$skipDelimiter = true;
$fe_array_37115bd9a194d05c37e57428f3785070_2 = [];
$fe_array_keys_37115bd9a194d05c37e57428f3785070_2 = [];
$fe_n_items_37115bd9a194d05c37e57428f3785070_2 = 0;
$fe_n_items_processed_37115bd9a194d05c37e57428f3785070_2  = 0;
$fe_i_37115bd9a194d05c37e57428f3785070_2 = 0;
$fe_key_37115bd9a194d05c37e57428f3785070_2 = 0;
$fe_val_37115bd9a194d05c37e57428f3785070_2 = 0;
$fe_offset_37115bd9a194d05c37e57428f3785070_2 = 0;
$fe_max_37115bd9a194d05c37e57428f3785070_2 = 0;
$fe_reverse_37115bd9a194d05c37e57428f3785070_2 = 0;
$fe_first_val_37115bd9a194d05c37e57428f3785070_2 = 0;
$fe_last_val_37115bd9a194d05c37e57428f3785070_2 = 0;
if ( !isset( $fe_variable_stack_37115bd9a194d05c37e57428f3785070_2 ) ) $fe_variable_stack_37115bd9a194d05c37e57428f3785070_2 = [];
$fe_variable_stack_37115bd9a194d05c37e57428f3785070_2[] = @compact( 'fe_array_37115bd9a194d05c37e57428f3785070_2', 'fe_array_keys_37115bd9a194d05c37e57428f3785070_2', 'fe_n_items_37115bd9a194d05c37e57428f3785070_2', 'fe_n_items_processed_37115bd9a194d05c37e57428f3785070_2', 'fe_i_37115bd9a194d05c37e57428f3785070_2', 'fe_key_37115bd9a194d05c37e57428f3785070_2', 'fe_val_37115bd9a194d05c37e57428f3785070_2', 'fe_offset_37115bd9a194d05c37e57428f3785070_2', 'fe_max_37115bd9a194d05c37e57428f3785070_2', 'fe_reverse_37115bd9a194d05c37e57428f3785070_2', 'fe_first_val_37115bd9a194d05c37e57428f3785070_2', 'fe_last_val_37115bd9a194d05c37e57428f3785070_2' );
unset( $fe_array_37115bd9a194d05c37e57428f3785070_2 );
unset( $fe_array_37115bd9a194d05c37e57428f3785070_2 );
$fe_array_37115bd9a194d05c37e57428f3785070_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'basket', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['basket'] : null;
$fe_array_37115bd9a194d05c37e57428f3785070_21 = compiledFetchAttribute( $fe_array_37115bd9a194d05c37e57428f3785070_2, 'items' );
unset( $fe_array_37115bd9a194d05c37e57428f3785070_2 );
$fe_array_37115bd9a194d05c37e57428f3785070_2 = $fe_array_37115bd9a194d05c37e57428f3785070_21;
if (! isset( $fe_array_37115bd9a194d05c37e57428f3785070_2 ) ) $fe_array_37115bd9a194d05c37e57428f3785070_2 = NULL;
while ( is_object( $fe_array_37115bd9a194d05c37e57428f3785070_2 ) and method_exists( $fe_array_37115bd9a194d05c37e57428f3785070_2, 'templateValue' ) )
    $fe_array_37115bd9a194d05c37e57428f3785070_2 = $fe_array_37115bd9a194d05c37e57428f3785070_2->templateValue();

$fe_array_keys_37115bd9a194d05c37e57428f3785070_2 = is_array( $fe_array_37115bd9a194d05c37e57428f3785070_2 ) ? array_keys( $fe_array_37115bd9a194d05c37e57428f3785070_2 ) : [];
$fe_n_items_37115bd9a194d05c37e57428f3785070_2 = count( $fe_array_keys_37115bd9a194d05c37e57428f3785070_2 );
$fe_n_items_processed_37115bd9a194d05c37e57428f3785070_2 = 0;
$fe_offset_37115bd9a194d05c37e57428f3785070_2 = 0;
$fe_max_37115bd9a194d05c37e57428f3785070_2 = $fe_n_items_37115bd9a194d05c37e57428f3785070_2 - $fe_offset_37115bd9a194d05c37e57428f3785070_2;
$fe_reverse_37115bd9a194d05c37e57428f3785070_2 = false;
if ( $fe_offset_37115bd9a194d05c37e57428f3785070_2 < 0 || $fe_offset_37115bd9a194d05c37e57428f3785070_2 >= $fe_n_items_37115bd9a194d05c37e57428f3785070_2 )
{
    $fe_offset_37115bd9a194d05c37e57428f3785070_2 = ( $fe_offset_37115bd9a194d05c37e57428f3785070_2 < 0 ) ? 0 : $fe_n_items_37115bd9a194d05c37e57428f3785070_2;
    if ( $fe_n_items_37115bd9a194d05c37e57428f3785070_2 || $fe_offset_37115bd9a194d05c37e57428f3785070_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_37115bd9a194d05c37e57428f3785070_2'. Array count: $fe_n_items_37115bd9a194d05c37e57428f3785070_2");   
}
}
if ( $fe_max_37115bd9a194d05c37e57428f3785070_2 < 0 || $fe_offset_37115bd9a194d05c37e57428f3785070_2 + $fe_max_37115bd9a194d05c37e57428f3785070_2 > $fe_n_items_37115bd9a194d05c37e57428f3785070_2 )
{
    if ( $fe_max_37115bd9a194d05c37e57428f3785070_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_37115bd9a194d05c37e57428f3785070_2");
    $fe_max_37115bd9a194d05c37e57428f3785070_2 = $fe_n_items_37115bd9a194d05c37e57428f3785070_2 - $fe_offset_37115bd9a194d05c37e57428f3785070_2;
}
if ( $fe_reverse_37115bd9a194d05c37e57428f3785070_2 )
{
    $fe_first_val_37115bd9a194d05c37e57428f3785070_2 = $fe_n_items_37115bd9a194d05c37e57428f3785070_2 - 1 - $fe_offset_37115bd9a194d05c37e57428f3785070_2;
    $fe_last_val_37115bd9a194d05c37e57428f3785070_2  = 0;
}
else
{
    $fe_first_val_37115bd9a194d05c37e57428f3785070_2 = $fe_offset_37115bd9a194d05c37e57428f3785070_2;
    $fe_last_val_37115bd9a194d05c37e57428f3785070_2  = $fe_n_items_37115bd9a194d05c37e57428f3785070_2 - 1;
}
// foreach
for ( $fe_i_37115bd9a194d05c37e57428f3785070_2 = $fe_first_val_37115bd9a194d05c37e57428f3785070_2; $fe_n_items_processed_37115bd9a194d05c37e57428f3785070_2 < $fe_max_37115bd9a194d05c37e57428f3785070_2 && ( $fe_reverse_37115bd9a194d05c37e57428f3785070_2 ? $fe_i_37115bd9a194d05c37e57428f3785070_2 >= $fe_last_val_37115bd9a194d05c37e57428f3785070_2 : $fe_i_37115bd9a194d05c37e57428f3785070_2 <= $fe_last_val_37115bd9a194d05c37e57428f3785070_2 ); $fe_reverse_37115bd9a194d05c37e57428f3785070_2 ? $fe_i_37115bd9a194d05c37e57428f3785070_2-- : $fe_i_37115bd9a194d05c37e57428f3785070_2++ )
{
$fe_key_37115bd9a194d05c37e57428f3785070_2 = $fe_array_keys_37115bd9a194d05c37e57428f3785070_2[$fe_i_37115bd9a194d05c37e57428f3785070_2];
$fe_val_37115bd9a194d05c37e57428f3785070_2 = $fe_array_37115bd9a194d05c37e57428f3785070_2[$fe_key_37115bd9a194d05c37e57428f3785070_2];
$vars[$rootNamespace]['cart_item'] = $fe_val_37115bd9a194d05c37e57428f3785070_2;
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'basket_qty', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['basket_qty'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'cart_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['cart_item'] : null;
$var3 = compiledFetchAttribute( $var2, 'item_count' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = $var1 + $var2;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'basket_qty', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['basket_qty'] = $var;
    unset( $var );
}
$fe_n_items_processed_37115bd9a194d05c37e57428f3785070_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_37115bd9a194d05c37e57428f3785070_2 ) ) extract( array_pop( $fe_variable_stack_37115bd9a194d05c37e57428f3785070_2 ) );

else
{

unset( $fe_array_37115bd9a194d05c37e57428f3785070_2 );

unset( $fe_array_keys_37115bd9a194d05c37e57428f3785070_2 );

unset( $fe_n_items_37115bd9a194d05c37e57428f3785070_2 );

unset( $fe_n_items_processed_37115bd9a194d05c37e57428f3785070_2 );

unset( $fe_i_37115bd9a194d05c37e57428f3785070_2 );

unset( $fe_key_37115bd9a194d05c37e57428f3785070_2 );

unset( $fe_val_37115bd9a194d05c37e57428f3785070_2 );

unset( $fe_offset_37115bd9a194d05c37e57428f3785070_2 );

unset( $fe_max_37115bd9a194d05c37e57428f3785070_2 );

unset( $fe_reverse_37115bd9a194d05c37e57428f3785070_2 );

unset( $fe_first_val_37115bd9a194d05c37e57428f3785070_2 );

unset( $fe_last_val_37115bd9a194d05c37e57428f3785070_2 );

unset( $fe_variable_stack_37115bd9a194d05c37e57428f3785070_2 );

}

// foreach ends
$text .= '  ';
$oldRestoreIncludeArray_bdbe69d20f11c64e7b3e525d0cbd9a54 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/page_head_displaystyles-f1d4f49f98b71b2f3d4c02895cd326e4.php' ) && filemtime( 'var/site/cache/template/compiled/page_head_displaystyles-f1d4f49f98b71b2f3d4c02895cd326e4.php' ) > filemtime( 'design/standard/templates/page_head_displaystyles.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/page_head_displaystyles.tpl' );
include( '' . 'var/site/cache/template/compiled/page_head_displaystyles-f1d4f49f98b71b2f3d4c02895cd326e4.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/standard/templates/page_head_displaystyles.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_bdbe69d20f11c64e7b3e525d0cbd9a54;

$text .= '
  ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'extra_cache_key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['extra_cache_key'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !( $if_cond1 );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// def $extra_cache_key
if ( $tpl->hasVariable( 'extra_cache_key', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'extra_cache_key' is already defined.", array (
  0 => 
  array (
    0 => 20,
    1 => 4,
    2 => 910,
  ),
  1 => 
  array (
    0 => 20,
    1 => 29,
    2 => 935,
  ),
  2 => 'design/delta/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'extra_cache_key', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'extra_cache_key', '', $rootNamespace );
}

$text .= '  ';
}
unset( $if_cond );
// if ends

$text .= '
    ';
// def $pagedata
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezpagedata',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'pagedata', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'pagedata' is already defined.", array (
  0 => 
  array (
    0 => 24,
    1 => 2,
    2 => 1090,
  ),
  1 => 
  array (
    0 => 28,
    1 => 89,
    2 => 1376,
  ),
  2 => 'design/delta/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'pagedata', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'pagedata', $var, $rootNamespace );
}

// def $pagestyle
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var1 = compiledFetchAttribute( $var, 'css_classes' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'pagestyle', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'pagestyle' is already defined.", array (
  0 => 
  array (
    0 => 24,
    1 => 2,
    2 => 1090,
  ),
  1 => 
  array (
    0 => 28,
    1 => 89,
    2 => 1376,
  ),
  2 => 'design/delta/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'pagestyle', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'pagestyle', $var, $rootNamespace );
}

// def $locales
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchTranslationList' ),
  array_values( array(  ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'locales', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'locales' is already defined.", array (
  0 => 
  array (
    0 => 24,
    1 => 2,
    2 => 1090,
  ),
  1 => 
  array (
    0 => 28,
    1 => 89,
    2 => 1376,
  ),
  2 => 'design/delta/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'locales', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'locales', $var, $rootNamespace );
}

// def $pagedesign
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var1 = compiledFetchAttribute( $var, 'template_look' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'pagedesign', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'pagedesign' is already defined.", array (
  0 => 
  array (
    0 => 24,
    1 => 2,
    2 => 1090,
  ),
  1 => 
  array (
    0 => 28,
    1 => 89,
    2 => 1376,
  ),
  2 => 'design/delta/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'pagedesign', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'pagedesign', $var, $rootNamespace );
}

// def $pagedesign_class
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchClass' ),
  array_values( array(     'class_id' => "template_look" ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'pagedesign_class', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'pagedesign_class' is already defined.", array (
  0 => 
  array (
    0 => 24,
    1 => 2,
    2 => 1090,
  ),
  1 => 
  array (
    0 => 28,
    1 => 89,
    2 => 1376,
  ),
  2 => 'design/delta/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'pagedesign_class', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'pagedesign_class', $var, $rootNamespace );
}

$text .= '  ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "pagedata", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["pagedata"] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, "node_id" );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();

if ( isset( $if_cond1 ) )
{
    $if_cond = $if_cond1;
}
else
{
    $if_cond = 0;
}
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' ';
// def $current_node_id
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'current_node_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'current_node_id' is already defined.", array (
  0 => 
  array (
    0 => 29,
    1 => 36,
    2 => 1417,
  ),
  1 => 
  array (
    0 => 29,
    1 => 76,
    2 => 1457,
  ),
  2 => 'design/delta/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'current_node_id', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'current_node_id', $var, $rootNamespace );
}

$text .= '  ';
}
else
{
$text .= '    ';
// def $current_node_id
if ( $tpl->hasVariable( 'current_node_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'current_node_id' is already defined.", array (
  0 => 
  array (
    0 => 31,
    1 => 4,
    2 => 1473,
  ),
  1 => 
  array (
    0 => 31,
    1 => 26,
    2 => 1495,
  ),
  2 => 'design/delta/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'current_node_id', 0, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'current_node_id', 0, $rootNamespace );
}

$text .= '  ';
}
unset( $if_cond );
// if ends

$text .= '  ';
// def $current_node
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node_id'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentNode' ),
  array_values( array(     'node_id' => $var1,
    'node_path' => false,
    'language_code' => false,
    'remote_id' => false ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'current_node', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'current_node' is already defined.", array (
  0 => 
  array (
    0 => 33,
    1 => 2,
    2 => 1508,
  ),
  1 => 
  array (
    0 => 33,
    1 => 73,
    2 => 1579,
  ),
  2 => 'design/delta/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'current_node', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'current_node', $var, $rootNamespace );
}

$text .= '  ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedesign_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedesign_class'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'object_count' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = ( ( $if_cond2 ) == ( 0 ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !( $if_cond1 );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedesign_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedesign_class'] : null;
$var1 = compiledFetchAttribute( $var, 'object_list' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 1 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'pagedesign', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['pagedesign'] = $var;
    unset( $var );
}
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'content_info' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$var1 = compiledFetchAttribute( $var, 'content_info' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'content_info', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['content_info'] = $var;
    unset( $var );
}
}
unset( $if_cond );
// if ends

$text .= '
  ';
$oldRestoreIncludeArray_e6ea529a0a0609df69eaec3a16deb14c = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/page_head-62d9c826801d8981afc690c34418ab36.php' ) && filemtime( 'var/site/cache/template/compiled/page_head-62d9c826801d8981afc690c34418ab36.php' ) > filemtime( 'design/delta/templates/page_head.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/templates/page_head.tpl' );
include( '' . 'var/site/cache/template/compiled/page_head-62d9c826801d8981afc690c34418ab36.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/templates/page_head.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_e6ea529a0a0609df69eaec3a16deb14c;

$text .= '  <!-- google fonts  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  
  <!-- custom styles -->
  ';
$oldRestoreIncludeArray_dc40462047b817d3787104cf66894b8b = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/page_head_style-73313536c5a5e01ed21b7c858b3ece98.php' ) && filemtime( 'var/site/cache/template/compiled/page_head_style-73313536c5a5e01ed21b7c858b3ece98.php' ) > filemtime( 'extension/sevenx_diggclone/design/digg/templates/page_head_style.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/sevenx_diggclone/design/digg/templates/page_head_style.tpl' );
include( '' . 'var/site/cache/template/compiled/page_head_style-73313536c5a5e01ed21b7c858b3ece98.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/sevenx_diggclone/design/digg/templates/page_head_style.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_dc40462047b817d3787104cf66894b8b;

$text .= '  ';
$oldRestoreIncludeArray_1e61e5c5d243eca2bb6ce29bee5e9fee = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/page_head_script-d508608c067a56801b780b383d4119cc.php' ) && filemtime( 'var/site/cache/template/compiled/page_head_script-d508608c067a56801b780b383d4119cc.php' ) > filemtime( 'extension/sevenx_diggclone/design/digg/templates/page_head_script.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/sevenx_diggclone/design/digg/templates/page_head_script.tpl' );
include( '' . 'var/site/cache/template/compiled/page_head_script-d508608c067a56801b780b383d4119cc.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/sevenx_diggclone/design/digg/templates/page_head_script.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_1e61e5c5d243eca2bb6ce29bee5e9fee;

$text .= '  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7402149281256266"
    crossorigin="anonymous"></script>
</head>

<!--[if lt IE 7 ]><body class="ie6"><![endif]-->
<!--[if IE 7 ]>   <body class="ie7"><![endif]-->
<!--[if IE 8 ]>   <body class="ie8"><![endif]-->
<!--[if (gt IE 8)|!(IE)]><!-->

<body class="hnd">
  <!--<![endif]-->

  <!-- Header area: START -->
  ';
$oldRestoreIncludeArray_1a2ac35488dd0dcca75e3e4e06192a70 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['current_user'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'current_user', $vars[$currentNamespace]['current_user'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['current_user'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'current_user', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['current_user'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/page_header-ce065152cbfa47862fa11616c68ad8e5.php' ) && filemtime( 'var/site/cache/template/compiled/page_header-ce065152cbfa47862fa11616c68ad8e5.php' ) > filemtime( 'design/delta/templates/page_header.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/templates/page_header.tpl' );
include( '' . 'var/site/cache/template/compiled/page_header-ce065152cbfa47862fa11616c68ad8e5.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/templates/page_header.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_1a2ac35488dd0dcca75e3e4e06192a70;

$text .= '  <!-- Header area: END -->

  <script>
    <!--
    var ezpRoot = "';
unset( $var );
unset( $namedParameters9bd0e095c84d3945ae4cc797e8d93c24 );
$namedParameters9bd0e095c84d3945ae4cc797e8d93c24 = array();
$namedParameters9bd0e095c84d3945ae4cc797e8d93c24['charlist'] = '/';
$var = SwarkRTrimOperator::execute( '/', $namedParameters9bd0e095c84d3945ae4cc797e8d93c24 );
unset( $namedParameters9bd0e095c84d3945ae4cc797e8d93c24 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '";
    var ezpFilesRoot = "';
unset( $var );
unset( $namedParametersfbc472feb8c42eb4db0e859f25422b7c );
$namedParametersfbc472feb8c42eb4db0e859f25422b7c = array();
$namedParametersfbc472feb8c42eb4db0e859f25422b7c['charlist'] = '/';
$var = SwarkRTrimOperator::execute( '/', $namedParametersfbc472feb8c42eb4db0e859f25422b7c );
unset( $namedParametersfbc472feb8c42eb4db0e859f25422b7c );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '";
    var ezpCurrentURL = ';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node_id'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = isset( $var2 );unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    unset( $var2 );
unset( $var4 );
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "module_result", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["module_result"] : null;
$var6 = compiledFetchAttribute( $var5, "uri" );
unset( $var5 );
$var5 = $var6;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var4 = str_replace( array( "\\", "\"", "'" ),
                                             array( "\\\\", "\\042", "\\047" ) , $var5 ); unset( $var5 );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var2 = ( "\"" . $var4 . "\"" );
unset( $var4 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

    $var = $var2;
}
else
{
    
    $var = 'false';
}
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ';
    var ezpReturnURL = ';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node_id'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = isset( $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( $var2 )
{
    unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "module_result", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["module_result"] : null;
$var4 = compiledFetchAttribute( $var3, "uri" );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    $var1 = $var3;
}
else
{
    
    $var1 = '/';
}
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

eZURI::transformURI( $var1, false, 'full' );
switch ($var3)
{
    case 'single':
         $var1 = '\'' . $var1 . '\'' ;
         break;
    case 'no':
         break;
     default:
         $var1 = '"' . $var1 . '"' ;
}
$var = $var1;
unset( $var1, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ';
    // 
    -->
  </script>

  <!-- main starts -->
  <main class="main">
    <!-- Complete page area: START -->

    <!-- Change between "sidemenu"/"nosidemenu" and "extrainfo"/"noextrainfo" to switch display of side columns on or off  -->
    

    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'persistent_variable' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'extra_template_list' );
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
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'persistent_variable' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'extra_template_list' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond2Data = array( 'value' => $if_cond2 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond2Data, false, false );
$if_cond2 = $if_cond2Data['value'];
unset( $if_cond2Data );
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
$text .= '    ';
// foreach begins
$skipDelimiter = true;
$fe_array_37115bd9a194d05c37e57428f3785070_3 = [];
$fe_array_keys_37115bd9a194d05c37e57428f3785070_3 = [];
$fe_n_items_37115bd9a194d05c37e57428f3785070_3 = 0;
$fe_n_items_processed_37115bd9a194d05c37e57428f3785070_3  = 0;
$fe_i_37115bd9a194d05c37e57428f3785070_3 = 0;
$fe_key_37115bd9a194d05c37e57428f3785070_3 = 0;
$fe_val_37115bd9a194d05c37e57428f3785070_3 = 0;
$fe_offset_37115bd9a194d05c37e57428f3785070_3 = 0;
$fe_max_37115bd9a194d05c37e57428f3785070_3 = 0;
$fe_reverse_37115bd9a194d05c37e57428f3785070_3 = 0;
$fe_first_val_37115bd9a194d05c37e57428f3785070_3 = 0;
$fe_last_val_37115bd9a194d05c37e57428f3785070_3 = 0;
if ( !isset( $fe_variable_stack_37115bd9a194d05c37e57428f3785070_3 ) ) $fe_variable_stack_37115bd9a194d05c37e57428f3785070_3 = [];
$fe_variable_stack_37115bd9a194d05c37e57428f3785070_3[] = @compact( 'fe_array_37115bd9a194d05c37e57428f3785070_3', 'fe_array_keys_37115bd9a194d05c37e57428f3785070_3', 'fe_n_items_37115bd9a194d05c37e57428f3785070_3', 'fe_n_items_processed_37115bd9a194d05c37e57428f3785070_3', 'fe_i_37115bd9a194d05c37e57428f3785070_3', 'fe_key_37115bd9a194d05c37e57428f3785070_3', 'fe_val_37115bd9a194d05c37e57428f3785070_3', 'fe_offset_37115bd9a194d05c37e57428f3785070_3', 'fe_max_37115bd9a194d05c37e57428f3785070_3', 'fe_reverse_37115bd9a194d05c37e57428f3785070_3', 'fe_first_val_37115bd9a194d05c37e57428f3785070_3', 'fe_last_val_37115bd9a194d05c37e57428f3785070_3' );
unset( $fe_array_37115bd9a194d05c37e57428f3785070_3 );
unset( $fe_array_37115bd9a194d05c37e57428f3785070_3 );
$fe_array_37115bd9a194d05c37e57428f3785070_3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$fe_array_37115bd9a194d05c37e57428f3785070_31 = compiledFetchAttribute( $fe_array_37115bd9a194d05c37e57428f3785070_3, 'persistent_variable' );
unset( $fe_array_37115bd9a194d05c37e57428f3785070_3 );
$fe_array_37115bd9a194d05c37e57428f3785070_3 = $fe_array_37115bd9a194d05c37e57428f3785070_31;
$fe_array_37115bd9a194d05c37e57428f3785070_31 = compiledFetchAttribute( $fe_array_37115bd9a194d05c37e57428f3785070_3, 'extra_template_list' );
unset( $fe_array_37115bd9a194d05c37e57428f3785070_3 );
$fe_array_37115bd9a194d05c37e57428f3785070_3 = $fe_array_37115bd9a194d05c37e57428f3785070_31;
if (! isset( $fe_array_37115bd9a194d05c37e57428f3785070_3 ) ) $fe_array_37115bd9a194d05c37e57428f3785070_3 = NULL;
while ( is_object( $fe_array_37115bd9a194d05c37e57428f3785070_3 ) and method_exists( $fe_array_37115bd9a194d05c37e57428f3785070_3, 'templateValue' ) )
    $fe_array_37115bd9a194d05c37e57428f3785070_3 = $fe_array_37115bd9a194d05c37e57428f3785070_3->templateValue();

$fe_array_keys_37115bd9a194d05c37e57428f3785070_3 = is_array( $fe_array_37115bd9a194d05c37e57428f3785070_3 ) ? array_keys( $fe_array_37115bd9a194d05c37e57428f3785070_3 ) : [];
$fe_n_items_37115bd9a194d05c37e57428f3785070_3 = count( $fe_array_keys_37115bd9a194d05c37e57428f3785070_3 );
$fe_n_items_processed_37115bd9a194d05c37e57428f3785070_3 = 0;
$fe_offset_37115bd9a194d05c37e57428f3785070_3 = 0;
$fe_max_37115bd9a194d05c37e57428f3785070_3 = $fe_n_items_37115bd9a194d05c37e57428f3785070_3 - $fe_offset_37115bd9a194d05c37e57428f3785070_3;
$fe_reverse_37115bd9a194d05c37e57428f3785070_3 = false;
if ( $fe_offset_37115bd9a194d05c37e57428f3785070_3 < 0 || $fe_offset_37115bd9a194d05c37e57428f3785070_3 >= $fe_n_items_37115bd9a194d05c37e57428f3785070_3 )
{
    $fe_offset_37115bd9a194d05c37e57428f3785070_3 = ( $fe_offset_37115bd9a194d05c37e57428f3785070_3 < 0 ) ? 0 : $fe_n_items_37115bd9a194d05c37e57428f3785070_3;
    if ( $fe_n_items_37115bd9a194d05c37e57428f3785070_3 || $fe_offset_37115bd9a194d05c37e57428f3785070_3 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_37115bd9a194d05c37e57428f3785070_3'. Array count: $fe_n_items_37115bd9a194d05c37e57428f3785070_3");   
}
}
if ( $fe_max_37115bd9a194d05c37e57428f3785070_3 < 0 || $fe_offset_37115bd9a194d05c37e57428f3785070_3 + $fe_max_37115bd9a194d05c37e57428f3785070_3 > $fe_n_items_37115bd9a194d05c37e57428f3785070_3 )
{
    if ( $fe_max_37115bd9a194d05c37e57428f3785070_3 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_37115bd9a194d05c37e57428f3785070_3");
    $fe_max_37115bd9a194d05c37e57428f3785070_3 = $fe_n_items_37115bd9a194d05c37e57428f3785070_3 - $fe_offset_37115bd9a194d05c37e57428f3785070_3;
}
if ( $fe_reverse_37115bd9a194d05c37e57428f3785070_3 )
{
    $fe_first_val_37115bd9a194d05c37e57428f3785070_3 = $fe_n_items_37115bd9a194d05c37e57428f3785070_3 - 1 - $fe_offset_37115bd9a194d05c37e57428f3785070_3;
    $fe_last_val_37115bd9a194d05c37e57428f3785070_3  = 0;
}
else
{
    $fe_first_val_37115bd9a194d05c37e57428f3785070_3 = $fe_offset_37115bd9a194d05c37e57428f3785070_3;
    $fe_last_val_37115bd9a194d05c37e57428f3785070_3  = $fe_n_items_37115bd9a194d05c37e57428f3785070_3 - 1;
}
// foreach
for ( $fe_i_37115bd9a194d05c37e57428f3785070_3 = $fe_first_val_37115bd9a194d05c37e57428f3785070_3; $fe_n_items_processed_37115bd9a194d05c37e57428f3785070_3 < $fe_max_37115bd9a194d05c37e57428f3785070_3 && ( $fe_reverse_37115bd9a194d05c37e57428f3785070_3 ? $fe_i_37115bd9a194d05c37e57428f3785070_3 >= $fe_last_val_37115bd9a194d05c37e57428f3785070_3 : $fe_i_37115bd9a194d05c37e57428f3785070_3 <= $fe_last_val_37115bd9a194d05c37e57428f3785070_3 ); $fe_reverse_37115bd9a194d05c37e57428f3785070_3 ? $fe_i_37115bd9a194d05c37e57428f3785070_3-- : $fe_i_37115bd9a194d05c37e57428f3785070_3++ )
{
$fe_key_37115bd9a194d05c37e57428f3785070_3 = $fe_array_keys_37115bd9a194d05c37e57428f3785070_3[$fe_i_37115bd9a194d05c37e57428f3785070_3];
$fe_val_37115bd9a194d05c37e57428f3785070_3 = $fe_array_37115bd9a194d05c37e57428f3785070_3[$fe_key_37115bd9a194d05c37e57428f3785070_3];
$vars[$rootNamespace]['extra_template'] = $fe_val_37115bd9a194d05c37e57428f3785070_3;
$text .= '      ';
$textElements = array();
$tpl->processFunction( 'include', $textElements,
                       false,
                       array (
  'uri' => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'concat',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'design:extra/',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'extra_template',
            ),
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 82,
    1 => 6,
    2 => 3790,
  ),
  1 => 
  array (
    0 => 82,
    1 => 58,
    2 => 3842,
  ),
  2 => 'design/delta/templates/pagelayout.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    ';
$fe_n_items_processed_37115bd9a194d05c37e57428f3785070_3++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_37115bd9a194d05c37e57428f3785070_3 ) ) extract( array_pop( $fe_variable_stack_37115bd9a194d05c37e57428f3785070_3 ) );

else
{

unset( $fe_array_37115bd9a194d05c37e57428f3785070_3 );

unset( $fe_array_keys_37115bd9a194d05c37e57428f3785070_3 );

unset( $fe_n_items_37115bd9a194d05c37e57428f3785070_3 );

unset( $fe_n_items_processed_37115bd9a194d05c37e57428f3785070_3 );

unset( $fe_i_37115bd9a194d05c37e57428f3785070_3 );

unset( $fe_key_37115bd9a194d05c37e57428f3785070_3 );

unset( $fe_val_37115bd9a194d05c37e57428f3785070_3 );

unset( $fe_offset_37115bd9a194d05c37e57428f3785070_3 );

unset( $fe_max_37115bd9a194d05c37e57428f3785070_3 );

unset( $fe_reverse_37115bd9a194d05c37e57428f3785070_3 );

unset( $fe_first_val_37115bd9a194d05c37e57428f3785070_3 );

unset( $fe_last_val_37115bd9a194d05c37e57428f3785070_3 );

unset( $fe_variable_stack_37115bd9a194d05c37e57428f3785070_3 );

}

// foreach ends
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '
    
    

    

    <!-- Toolbar area: START -->
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'website_toolbar' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'is_edit' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = !( $if_cond3 );
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
$text .= '      ';
$oldRestoreIncludeArray_a82cf1411aab74286c77909d08528fea = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/page_toolbar-1d390579e0cd62ad1446bf055a0d4f97.php' ) && filemtime( 'var/site/cache/template/compiled/page_toolbar-1d390579e0cd62ad1446bf055a0d4f97.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/templates/page_toolbar.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/templates/page_toolbar.tpl' );
include( '' . 'var/site/cache/template/compiled/page_toolbar-1d390579e0cd62ad1446bf055a0d4f97.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/templates/page_toolbar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_a82cf1411aab74286c77909d08528fea;

$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '    <!-- Toolbar area: END -->

    <!-- Columns area: START -->
    

    

    
        <section class="section">
      <div class="container">
        ';
// foreach begins
$skipDelimiter = true;
$fe_array_37115bd9a194d05c37e57428f3785070_4 = [];
$fe_array_keys_37115bd9a194d05c37e57428f3785070_4 = [];
$fe_n_items_37115bd9a194d05c37e57428f3785070_4 = 0;
$fe_n_items_processed_37115bd9a194d05c37e57428f3785070_4  = 0;
$fe_i_37115bd9a194d05c37e57428f3785070_4 = 0;
$fe_key_37115bd9a194d05c37e57428f3785070_4 = 0;
$fe_val_37115bd9a194d05c37e57428f3785070_4 = 0;
$fe_offset_37115bd9a194d05c37e57428f3785070_4 = 0;
$fe_max_37115bd9a194d05c37e57428f3785070_4 = 0;
$fe_reverse_37115bd9a194d05c37e57428f3785070_4 = 0;
$fe_first_val_37115bd9a194d05c37e57428f3785070_4 = 0;
$fe_last_val_37115bd9a194d05c37e57428f3785070_4 = 0;
if ( !isset( $fe_variable_stack_37115bd9a194d05c37e57428f3785070_4 ) ) $fe_variable_stack_37115bd9a194d05c37e57428f3785070_4 = [];
$fe_variable_stack_37115bd9a194d05c37e57428f3785070_4[] = @compact( 'fe_array_37115bd9a194d05c37e57428f3785070_4', 'fe_array_keys_37115bd9a194d05c37e57428f3785070_4', 'fe_n_items_37115bd9a194d05c37e57428f3785070_4', 'fe_n_items_processed_37115bd9a194d05c37e57428f3785070_4', 'fe_i_37115bd9a194d05c37e57428f3785070_4', 'fe_key_37115bd9a194d05c37e57428f3785070_4', 'fe_val_37115bd9a194d05c37e57428f3785070_4', 'fe_offset_37115bd9a194d05c37e57428f3785070_4', 'fe_max_37115bd9a194d05c37e57428f3785070_4', 'fe_reverse_37115bd9a194d05c37e57428f3785070_4', 'fe_first_val_37115bd9a194d05c37e57428f3785070_4', 'fe_last_val_37115bd9a194d05c37e57428f3785070_4' );
unset( $fe_array_37115bd9a194d05c37e57428f3785070_4 );
unset( $fe_array_37115bd9a194d05c37e57428f3785070_4 );
$fe_array_37115bd9a194d05c37e57428f3785070_4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$fe_array_37115bd9a194d05c37e57428f3785070_41 = compiledFetchAttribute( $fe_array_37115bd9a194d05c37e57428f3785070_4, 'path' );
unset( $fe_array_37115bd9a194d05c37e57428f3785070_4 );
$fe_array_37115bd9a194d05c37e57428f3785070_4 = $fe_array_37115bd9a194d05c37e57428f3785070_41;
if (! isset( $fe_array_37115bd9a194d05c37e57428f3785070_4 ) ) $fe_array_37115bd9a194d05c37e57428f3785070_4 = NULL;
while ( is_object( $fe_array_37115bd9a194d05c37e57428f3785070_4 ) and method_exists( $fe_array_37115bd9a194d05c37e57428f3785070_4, 'templateValue' ) )
    $fe_array_37115bd9a194d05c37e57428f3785070_4 = $fe_array_37115bd9a194d05c37e57428f3785070_4->templateValue();

$fe_array_keys_37115bd9a194d05c37e57428f3785070_4 = is_array( $fe_array_37115bd9a194d05c37e57428f3785070_4 ) ? array_keys( $fe_array_37115bd9a194d05c37e57428f3785070_4 ) : [];
$fe_n_items_37115bd9a194d05c37e57428f3785070_4 = count( $fe_array_keys_37115bd9a194d05c37e57428f3785070_4 );
$fe_n_items_processed_37115bd9a194d05c37e57428f3785070_4 = 0;
$fe_offset_37115bd9a194d05c37e57428f3785070_4 = 0;
$fe_max_37115bd9a194d05c37e57428f3785070_4 = $fe_n_items_37115bd9a194d05c37e57428f3785070_4 - $fe_offset_37115bd9a194d05c37e57428f3785070_4;
$fe_reverse_37115bd9a194d05c37e57428f3785070_4 = false;
if ( $fe_offset_37115bd9a194d05c37e57428f3785070_4 < 0 || $fe_offset_37115bd9a194d05c37e57428f3785070_4 >= $fe_n_items_37115bd9a194d05c37e57428f3785070_4 )
{
    $fe_offset_37115bd9a194d05c37e57428f3785070_4 = ( $fe_offset_37115bd9a194d05c37e57428f3785070_4 < 0 ) ? 0 : $fe_n_items_37115bd9a194d05c37e57428f3785070_4;
    if ( $fe_n_items_37115bd9a194d05c37e57428f3785070_4 || $fe_offset_37115bd9a194d05c37e57428f3785070_4 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_37115bd9a194d05c37e57428f3785070_4'. Array count: $fe_n_items_37115bd9a194d05c37e57428f3785070_4");   
}
}
if ( $fe_max_37115bd9a194d05c37e57428f3785070_4 < 0 || $fe_offset_37115bd9a194d05c37e57428f3785070_4 + $fe_max_37115bd9a194d05c37e57428f3785070_4 > $fe_n_items_37115bd9a194d05c37e57428f3785070_4 )
{
    if ( $fe_max_37115bd9a194d05c37e57428f3785070_4 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_37115bd9a194d05c37e57428f3785070_4");
    $fe_max_37115bd9a194d05c37e57428f3785070_4 = $fe_n_items_37115bd9a194d05c37e57428f3785070_4 - $fe_offset_37115bd9a194d05c37e57428f3785070_4;
}
if ( $fe_reverse_37115bd9a194d05c37e57428f3785070_4 )
{
    $fe_first_val_37115bd9a194d05c37e57428f3785070_4 = $fe_n_items_37115bd9a194d05c37e57428f3785070_4 - 1 - $fe_offset_37115bd9a194d05c37e57428f3785070_4;
    $fe_last_val_37115bd9a194d05c37e57428f3785070_4  = 0;
}
else
{
    $fe_first_val_37115bd9a194d05c37e57428f3785070_4 = $fe_offset_37115bd9a194d05c37e57428f3785070_4;
    $fe_last_val_37115bd9a194d05c37e57428f3785070_4  = $fe_n_items_37115bd9a194d05c37e57428f3785070_4 - 1;
}
// foreach
for ( $fe_i_37115bd9a194d05c37e57428f3785070_4 = $fe_first_val_37115bd9a194d05c37e57428f3785070_4; $fe_n_items_processed_37115bd9a194d05c37e57428f3785070_4 < $fe_max_37115bd9a194d05c37e57428f3785070_4 && ( $fe_reverse_37115bd9a194d05c37e57428f3785070_4 ? $fe_i_37115bd9a194d05c37e57428f3785070_4 >= $fe_last_val_37115bd9a194d05c37e57428f3785070_4 : $fe_i_37115bd9a194d05c37e57428f3785070_4 <= $fe_last_val_37115bd9a194d05c37e57428f3785070_4 ); $fe_reverse_37115bd9a194d05c37e57428f3785070_4 ? $fe_i_37115bd9a194d05c37e57428f3785070_4-- : $fe_i_37115bd9a194d05c37e57428f3785070_4++ )
{
$fe_key_37115bd9a194d05c37e57428f3785070_4 = $fe_array_keys_37115bd9a194d05c37e57428f3785070_4[$fe_i_37115bd9a194d05c37e57428f3785070_4];
$fe_val_37115bd9a194d05c37e57428f3785070_4 = $fe_array_37115bd9a194d05c37e57428f3785070_4[$fe_key_37115bd9a194d05c37e57428f3785070_4];
$vars[$rootNamespace]['path'] = $fe_val_37115bd9a194d05c37e57428f3785070_4;
$vars[$rootNamespace]['index'] = $fe_key_37115bd9a194d05c37e57428f3785070_4;
$text .= '          ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagerootdepth', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagerootdepth'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) >= ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'path', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['path'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'path_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['path_array'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
    $var = $var2 . implode( '', array( $var1 ) );
else if( is_array( $var2 ) )
    $var = array_merge( $var2, array( $var1 ) );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'path_array', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['path_array'] = $var;
    unset( $var );
}
$text .= '          ';
}
unset( $if_cond );
// if ends

$text .= '          ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'path', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['path'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'node_id' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'path', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['path'] : null;
$var6 = compiledFetchAttribute( $var5, 'node_id' );
unset( $var5 );
$var5 = $var6;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var1 = ( 'subtree_level_' . $var3 . '_node_id_' . $var5 . ' ' );
unset( $var3, $var5 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'path_normalized', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['path_normalized'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
    $var = $var2 . implode( '', array( $var1 ) );
else if( is_array( $var2 ) )
    $var = array_merge( $var2, array( $var1 ) );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'path_normalized', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['path_normalized'] = $var;
    unset( $var );
}
$text .= '          ';
}
unset( $if_cond );
// if ends

$text .= '        ';
$fe_n_items_processed_37115bd9a194d05c37e57428f3785070_4++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_37115bd9a194d05c37e57428f3785070_4 ) ) extract( array_pop( $fe_variable_stack_37115bd9a194d05c37e57428f3785070_4 ) );

else
{

unset( $fe_array_37115bd9a194d05c37e57428f3785070_4 );

unset( $fe_array_keys_37115bd9a194d05c37e57428f3785070_4 );

unset( $fe_n_items_37115bd9a194d05c37e57428f3785070_4 );

unset( $fe_n_items_processed_37115bd9a194d05c37e57428f3785070_4 );

unset( $fe_i_37115bd9a194d05c37e57428f3785070_4 );

unset( $fe_key_37115bd9a194d05c37e57428f3785070_4 );

unset( $fe_val_37115bd9a194d05c37e57428f3785070_4 );

unset( $fe_offset_37115bd9a194d05c37e57428f3785070_4 );

unset( $fe_max_37115bd9a194d05c37e57428f3785070_4 );

unset( $fe_reverse_37115bd9a194d05c37e57428f3785070_4 );

unset( $fe_first_val_37115bd9a194d05c37e57428f3785070_4 );

unset( $fe_last_val_37115bd9a194d05c37e57428f3785070_4 );

unset( $fe_variable_stack_37115bd9a194d05c37e57428f3785070_4 );

}

// foreach ends
$text .= '
        <!-- Path area: START -->
        <div id="path">
          ';
$oldRestoreIncludeArray_23590e6bef5c6ccc5c252b5e73c6944c = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/path-a6eaffff7ebf4cca7a755725f584489c.php' ) && filemtime( 'var/site/cache/template/compiled/path-a6eaffff7ebf4cca7a755725f584489c.php' ) > filemtime( 'design/delta/templates/parts/path.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/templates/parts/path.tpl' );
include( '' . 'var/site/cache/template/compiled/path-a6eaffff7ebf4cca7a755725f584489c.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/templates/parts/path.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_23590e6bef5c6ccc5c252b5e73c6944c;

$text .= '        </div>
        <!-- Path area: END -->
        <!-- Main area: START -->
        
        <!-- Main area content: START -->
        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
      </div>
    </section>
    <!-- Main area content: END -->
    <!-- Main area: END -->
  </main>
  <!-- main ends -->
  
  ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedesign', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedesign'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezpagedata',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'pagedata', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['pagedata'] = $var;
    unset( $var );
}
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var1 = compiledFetchAttribute( $var, 'template_look' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'pagedesign', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['pagedesign'] = $var;
    unset( $var );
}
$text .= '  ';
}
unset( $if_cond );
// if ends

$text .= '
  

  
  <!-- Columns area: END -->

  <!-- Footer area: START -->
  ';
$oldRestoreIncludeArray_3f7b26aa1462e881e4b493e80e3bf466 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/page_footer-c307196c2653933212eeb839c1f0f819.php' ) && filemtime( 'var/site/cache/template/compiled/page_footer-c307196c2653933212eeb839c1f0f819.php' ) > filemtime( 'design/delta/templates/page_footer.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/templates/page_footer.tpl' );
include( '' . 'var/site/cache/template/compiled/page_footer-c307196c2653933212eeb839c1f0f819.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/templates/page_footer.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_3f7b26aa1462e881e4b493e80e3bf466;

$text .= '  
  <!-- Scroll To Top::Start -->
  <button type="button" class="scroll-to-top" id="scrollToTop" aria-label="Scroll to top">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
      <path
        d="M13.0001 22.0003L11.0002 22.0004L11.0002 5.82845L7.05044 9.77817L5.63623 8.36396L12.0002 2L18.3642 8.36396L16.9499 9.77817L13.0002 5.8284L13.0001 22.0003Z">
      </path>
    </svg>
  </button>
  <!-- Scroll To Top::End -->

  <!-- Settings::Start -->
  <div class="settings-dock">
    <button class="settings-btn" type="button" id="openSettings" aria-label="Open site settings" data-toggle="modal"
      data-target="#settingsModal">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
        <path
          d="M8.68637 4.00008L11.293 1.39348C11.6835 1.00295 12.3167 1.00295 12.7072 1.39348L15.3138 4.00008H19.0001C19.5524 4.00008 20.0001 4.4478 20.0001 5.00008V8.68637L22.6067 11.293C22.9972 11.6835 22.9972 12.3167 22.6067 12.7072L20.0001 15.3138V19.0001C20.0001 19.5524 19.5524 20.0001 19.0001 20.0001H15.3138L12.7072 22.6067C12.3167 22.9972 11.6835 22.9972 11.293 22.6067L8.68637 20.0001H5.00008C4.4478 20.0001 4.00008 19.5524 4.00008 19.0001V15.3138L1.39348 12.7072C1.00295 12.3167 1.00295 11.6835 1.39348 11.293L4.00008 8.68637V5.00008C4.00008 4.4478 4.4478 4.00008 5.00008 4.00008H8.68637ZM6.00008 6.00008V9.5148L3.5148 12.0001L6.00008 14.4854V18.0001H9.5148L12.0001 20.4854L14.4854 18.0001H18.0001V14.4854L20.4854 12.0001L18.0001 9.5148V6.00008H14.4854L12.0001 3.5148L9.5148 6.00008H6.00008ZM12.0001 16.0001C9.79094 16.0001 8.00008 14.2092 8.00008 12.0001C8.00008 9.79094 9.79094 8.00008 12.0001 8.00008C14.2092 8.00008 16.0001 9.79094 16.0001 12.0001C16.0001 14.2092 14.2092 16.0001 12.0001 16.0001ZM12.0001 14.0001C13.1047 14.0001 14.0001 13.1047 14.0001 12.0001C14.0001 10.8955 13.1047 10.0001 12.0001 10.0001C10.8955 10.0001 10.0001 10.8955 10.0001 12.0001C10.0001 13.1047 10.8955 14.0001 12.0001 14.0001Z">
        </path>
      </svg>
    </button>
  </div>
  <!-- Settings::End -->

  <!-- Modals:End -->
  <div class="modal-backdrop" id="settingsModal" aria-hidden="true">
    <div class="modal" role="dialog" aria-modal="true" aria-labelledby="settingsTitle">
      <header class="modal-header">
        <h2 class="modal-title" id="settingsTitle">Site Settings</h2>
        <button type="button" class="modal-close" id="closeSettings" aria-label="Close settings">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
          </svg>
        </button>
      </header>

      <div class="modal-body">
        <section class="settings-section">
          <div class="form-group">
            <label for="fontSizeSelect" class="form-label">Font Size:</label>
            <select id="fontSizeSelect" class="form-control">
              <option value="0.75">75%</option>
              <option value="0.875">87.5%</option>
              <option value="1">100%</option>
              <option value="1.25">125%</option>
              <option value="1.5" selected>150%</option>
            </select>
          </div>
          <div class="form-group">
            <label for="themeSelect" class="form-label">Theme:</label>
            <select id="themeSelect" class="form-control">
              <option value="light">Light</option>
              <option value="dark">Dark</option>
              <option value="system">System Default</option>
            </select>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- Modals::End -->

  <!-- JavaScript -->
  <script src="/design/delta/javascript/main.js" defer></script>
  <!-- Google tag (gtag.js) -->
  ';
unset( $var );
$var = 'false';
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'bc_ga_urchin',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
  <!-- Footer area: END -->
    
  <!--DEBUG_REPORT-->
</body>

</html>';

$setArray = $oldSetArray_967d73172a6a828d13469f15826e1749;
$tpl->Level--;
?>
