<?php
// URI:       design/admin3/templates/page_topmenu.tpl
// Filename:  design/admin3/templates/page_topmenu.tpl
// Timestamp: 1768752117 (Sun Jan 18 8:01:57 PST 2026)
$oldSetArray_a18d344cadbef2d10b1001f2e514b5ec = isset( $setArray ) ? $setArray : array();
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

$text .= '<div id="navbar" class="navbar-main">
    <div id="header-logo" class="header-logo">
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context_edit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context_edit'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            
            
            <a class="brand" href="/content/view/full/2" title="Exponential ';
unset( $var );
$var = call_user_func_array( array( new eZSetupFunctionCollection(), 'fetchFullVersionString' ),
  array_values( array(  ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '">
            </a>
            <a class="site-preview" href=';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var4 );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var4Data = array( 'value' => $var4 );
$tpl->processOperator( 'ezsys',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'hostname',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $var4Data, false, false );
$var4 = $var4Data['value'];
unset( $var4Data );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
if ( is_string( $var4 ) )
{
	$var3 = explode( "edit.", $var4 );
}
else if ( is_array( $var4 ) )
{
	$var3 = array( array_slice( $var4, 0, "edit." ), array_slice( $var4, "edit." ) );
}
else
{
	$var3 = null;
}
unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = implode( "", $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = ( 'https://' . $var2 );
unset( $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M32 32C14.3 32 0 46.3 0 64l0 96c0 17.7 14.3 32 32 32s32-14.3 32-32l0-64 64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L32 32zM64 352c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 96c0 17.7 14.3 32 32 32l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0 0-64zM320 32c-17.7 0-32 14.3-32 32s14.3 32 32 32l64 0 0 64c0 17.7 14.3 32 32 32s32-14.3 32-32l0-96c0-17.7-14.3-32-32-32l-96 0zM448 352c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 64-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l96 0c17.7 0 32-14.3 32-32l0-96z"/></svg>
            </a>
        ';
}
else
{
$text .= '            
            <a class="brand" href="/content/view/full/2" title="Exponential ';
unset( $var );
$var = call_user_func_array( array( new eZSetupFunctionCollection(), 'fetchFullVersionString' ),
  array_values( array(  ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '">
            </a>
            <a class="site-preview" href=';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var4 );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var4Data = array( 'value' => $var4 );
$tpl->processOperator( 'ezsys',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'hostname',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $var4Data, false, false );
$var4 = $var4Data['value'];
unset( $var4Data );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
if ( is_string( $var4 ) )
{
	$var3 = explode( "edit.", $var4 );
}
else if ( is_array( $var4 ) )
{
	$var3 = array( array_slice( $var4, 0, "edit." ), array_slice( $var4, "edit." ) );
}
else
{
	$var3 = null;
}
unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = implode( "", $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = ( 'https://' . $var2 );
unset( $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M32 32C14.3 32 0 46.3 0 64l0 96c0 17.7 14.3 32 32 32s32-14.3 32-32l0-64 64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L32 32zM64 352c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 96c0 17.7 14.3 32 32 32l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0 0-64zM320 32c-17.7 0-32 14.3-32 32s14.3 32 32 32l64 0 0 64c0 17.7 14.3 32 32 32s32-14.3 32-32l0-96c0-17.7-14.3-32-32-32l-96 0zM448 352c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 64-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l96 0c17.7 0 32-14.3 32-32l0-96z"/></svg>
            </a>
        ';
}
unset( $if_cond );
// if ends

$text .= '    </div>
    <div id="header-search" class="header-search">
        ';
$oldRestoreIncludeArray_9249396a812e47a651bd101ec6c525a4 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/page_search-2d55b6b03d331e845e4f1468dd1a1acd.php' ) && filemtime( 'var/site/cache/template/compiled/page_search-2d55b6b03d331e845e4f1468dd1a1acd.php' ) > filemtime( 'design/admin3/templates/page_search.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin3/templates/page_search.tpl' );
include( '' . 'var/site/cache/template/compiled/page_search-2d55b6b03d331e845e4f1468dd1a1acd.php' );
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
$tpl->processURI( 'design/admin3/templates/page_search.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_9249396a812e47a651bd101ec6c525a4;

$text .= '    </div>
    <div class="navbar-icon">&#9776;</div>
    <!-- begin::Sidebar Controls -->
        <div class="sidebar-controls">
            <button type="button" class="sidebar-control left">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 320 512"><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
            </button>
            <button type="button" class="sidebar-control right">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 320 512"><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
            </button>
        </div>
    <!-- end::Sidebar Controls -->
    <!-- start::Navbar Menu -->
    <div class="navbar-menu ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context_edit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context_edit'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'disabled';
}
unset( $if_cond );
// if ends

$text .= '">
        <ul class="navbar-bar">
            ';
// foreach begins
$skipDelimiter = true;
$fe_array_6233c3c3090aece11d2f801af069c6f8_27 = [];
$fe_array_keys_6233c3c3090aece11d2f801af069c6f8_27 = [];
$fe_n_items_6233c3c3090aece11d2f801af069c6f8_27 = 0;
$fe_n_items_processed_6233c3c3090aece11d2f801af069c6f8_27  = 0;
$fe_i_6233c3c3090aece11d2f801af069c6f8_27 = 0;
$fe_key_6233c3c3090aece11d2f801af069c6f8_27 = 0;
$fe_val_6233c3c3090aece11d2f801af069c6f8_27 = 0;
$fe_offset_6233c3c3090aece11d2f801af069c6f8_27 = 0;
$fe_max_6233c3c3090aece11d2f801af069c6f8_27 = 0;
$fe_reverse_6233c3c3090aece11d2f801af069c6f8_27 = 0;
$fe_first_val_6233c3c3090aece11d2f801af069c6f8_27 = 0;
$fe_last_val_6233c3c3090aece11d2f801af069c6f8_27 = 0;
if ( !isset( $fe_variable_stack_6233c3c3090aece11d2f801af069c6f8_27 ) ) $fe_variable_stack_6233c3c3090aece11d2f801af069c6f8_27 = [];
$fe_variable_stack_6233c3c3090aece11d2f801af069c6f8_27[] = @compact( 'fe_array_6233c3c3090aece11d2f801af069c6f8_27', 'fe_array_keys_6233c3c3090aece11d2f801af069c6f8_27', 'fe_n_items_6233c3c3090aece11d2f801af069c6f8_27', 'fe_n_items_processed_6233c3c3090aece11d2f801af069c6f8_27', 'fe_i_6233c3c3090aece11d2f801af069c6f8_27', 'fe_key_6233c3c3090aece11d2f801af069c6f8_27', 'fe_val_6233c3c3090aece11d2f801af069c6f8_27', 'fe_offset_6233c3c3090aece11d2f801af069c6f8_27', 'fe_max_6233c3c3090aece11d2f801af069c6f8_27', 'fe_reverse_6233c3c3090aece11d2f801af069c6f8_27', 'fe_first_val_6233c3c3090aece11d2f801af069c6f8_27', 'fe_last_val_6233c3c3090aece11d2f801af069c6f8_27' );
unset( $fe_array_6233c3c3090aece11d2f801af069c6f8_27 );
if (! isset( $fe_array_6233c3c3090aece11d2f801af069c6f8_27 ) ) $fe_array_6233c3c3090aece11d2f801af069c6f8_27 = NULL;
while ( is_object( $fe_array_6233c3c3090aece11d2f801af069c6f8_27 ) and method_exists( $fe_array_6233c3c3090aece11d2f801af069c6f8_27, 'templateValue' ) )
    $fe_array_6233c3c3090aece11d2f801af069c6f8_27 = $fe_array_6233c3c3090aece11d2f801af069c6f8_27->templateValue();
$fe_array_6233c3c3090aece11d2f801af069c6f8_27Data = array( 'value' => $fe_array_6233c3c3090aece11d2f801af069c6f8_27 );
$tpl->processOperator( 'topmenu',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'ui_context',
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 7,
      1 => true,
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $fe_array_6233c3c3090aece11d2f801af069c6f8_27Data, false, false );
$fe_array_6233c3c3090aece11d2f801af069c6f8_27 = $fe_array_6233c3c3090aece11d2f801af069c6f8_27Data['value'];
unset( $fe_array_6233c3c3090aece11d2f801af069c6f8_27Data );
if (! isset( $fe_array_6233c3c3090aece11d2f801af069c6f8_27 ) ) $fe_array_6233c3c3090aece11d2f801af069c6f8_27 = NULL;
while ( is_object( $fe_array_6233c3c3090aece11d2f801af069c6f8_27 ) and method_exists( $fe_array_6233c3c3090aece11d2f801af069c6f8_27, 'templateValue' ) )
    $fe_array_6233c3c3090aece11d2f801af069c6f8_27 = $fe_array_6233c3c3090aece11d2f801af069c6f8_27->templateValue();

$fe_array_keys_6233c3c3090aece11d2f801af069c6f8_27 = is_array( $fe_array_6233c3c3090aece11d2f801af069c6f8_27 ) ? array_keys( $fe_array_6233c3c3090aece11d2f801af069c6f8_27 ) : [];
$fe_n_items_6233c3c3090aece11d2f801af069c6f8_27 = count( $fe_array_keys_6233c3c3090aece11d2f801af069c6f8_27 );
$fe_n_items_processed_6233c3c3090aece11d2f801af069c6f8_27 = 0;
$fe_offset_6233c3c3090aece11d2f801af069c6f8_27 = 0;
$fe_max_6233c3c3090aece11d2f801af069c6f8_27 = $fe_n_items_6233c3c3090aece11d2f801af069c6f8_27 - $fe_offset_6233c3c3090aece11d2f801af069c6f8_27;
$fe_reverse_6233c3c3090aece11d2f801af069c6f8_27 = false;
if ( $fe_offset_6233c3c3090aece11d2f801af069c6f8_27 < 0 || $fe_offset_6233c3c3090aece11d2f801af069c6f8_27 >= $fe_n_items_6233c3c3090aece11d2f801af069c6f8_27 )
{
    $fe_offset_6233c3c3090aece11d2f801af069c6f8_27 = ( $fe_offset_6233c3c3090aece11d2f801af069c6f8_27 < 0 ) ? 0 : $fe_n_items_6233c3c3090aece11d2f801af069c6f8_27;
    if ( $fe_n_items_6233c3c3090aece11d2f801af069c6f8_27 || $fe_offset_6233c3c3090aece11d2f801af069c6f8_27 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_6233c3c3090aece11d2f801af069c6f8_27'. Array count: $fe_n_items_6233c3c3090aece11d2f801af069c6f8_27");   
}
}
if ( $fe_max_6233c3c3090aece11d2f801af069c6f8_27 < 0 || $fe_offset_6233c3c3090aece11d2f801af069c6f8_27 + $fe_max_6233c3c3090aece11d2f801af069c6f8_27 > $fe_n_items_6233c3c3090aece11d2f801af069c6f8_27 )
{
    if ( $fe_max_6233c3c3090aece11d2f801af069c6f8_27 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_6233c3c3090aece11d2f801af069c6f8_27");
    $fe_max_6233c3c3090aece11d2f801af069c6f8_27 = $fe_n_items_6233c3c3090aece11d2f801af069c6f8_27 - $fe_offset_6233c3c3090aece11d2f801af069c6f8_27;
}
if ( $fe_reverse_6233c3c3090aece11d2f801af069c6f8_27 )
{
    $fe_first_val_6233c3c3090aece11d2f801af069c6f8_27 = $fe_n_items_6233c3c3090aece11d2f801af069c6f8_27 - 1 - $fe_offset_6233c3c3090aece11d2f801af069c6f8_27;
    $fe_last_val_6233c3c3090aece11d2f801af069c6f8_27  = 0;
}
else
{
    $fe_first_val_6233c3c3090aece11d2f801af069c6f8_27 = $fe_offset_6233c3c3090aece11d2f801af069c6f8_27;
    $fe_last_val_6233c3c3090aece11d2f801af069c6f8_27  = $fe_n_items_6233c3c3090aece11d2f801af069c6f8_27 - 1;
}
// foreach
for ( $fe_i_6233c3c3090aece11d2f801af069c6f8_27 = $fe_first_val_6233c3c3090aece11d2f801af069c6f8_27; $fe_n_items_processed_6233c3c3090aece11d2f801af069c6f8_27 < $fe_max_6233c3c3090aece11d2f801af069c6f8_27 && ( $fe_reverse_6233c3c3090aece11d2f801af069c6f8_27 ? $fe_i_6233c3c3090aece11d2f801af069c6f8_27 >= $fe_last_val_6233c3c3090aece11d2f801af069c6f8_27 : $fe_i_6233c3c3090aece11d2f801af069c6f8_27 <= $fe_last_val_6233c3c3090aece11d2f801af069c6f8_27 ); $fe_reverse_6233c3c3090aece11d2f801af069c6f8_27 ? $fe_i_6233c3c3090aece11d2f801af069c6f8_27-- : $fe_i_6233c3c3090aece11d2f801af069c6f8_27++ )
{
$fe_key_6233c3c3090aece11d2f801af069c6f8_27 = $fe_array_keys_6233c3c3090aece11d2f801af069c6f8_27[$fe_i_6233c3c3090aece11d2f801af069c6f8_27];
$fe_val_6233c3c3090aece11d2f801af069c6f8_27 = $fe_array_6233c3c3090aece11d2f801af069c6f8_27[$fe_key_6233c3c3090aece11d2f801af069c6f8_27];
$vars[$rootNamespace]['menu'] = $fe_val_6233c3c3090aece11d2f801af069c6f8_27;
$text .= '                ';
$oldRestoreIncludeArray_9f97186b59342cdcc005311d3a4d114f = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['menu_item'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'menu_item', $vars[$currentNamespace]['menu_item'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['menu_item'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'menu_item', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['menu_item'] = $var;
unset( $var );
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['navigationpart_identifier'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'navigationpart_identifier', $vars[$currentNamespace]['navigationpart_identifier'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['navigationpart_identifier'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'navigationpart_identifier', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'navigation_part', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['navigation_part'] : null;
$var1 = compiledFetchAttribute( $var, 'identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['navigationpart_identifier'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/page_topmenuitem-01bc2c389676f3675836c2f9785b190f.php' ) && filemtime( 'var/site/cache/template/compiled/page_topmenuitem-01bc2c389676f3675836c2f9785b190f.php' ) > filemtime( 'design/admin3/templates/page_topmenuitem.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin3/templates/page_topmenuitem.tpl' );
include( '' . 'var/site/cache/template/compiled/page_topmenuitem-01bc2c389676f3675836c2f9785b190f.php' );
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
$tpl->processURI( 'design/admin3/templates/page_topmenuitem.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_9f97186b59342cdcc005311d3a4d114f;

$text .= '            ';
$fe_n_items_processed_6233c3c3090aece11d2f801af069c6f8_27++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_6233c3c3090aece11d2f801af069c6f8_27 ) ) extract( array_pop( $fe_variable_stack_6233c3c3090aece11d2f801af069c6f8_27 ) );

else
{

unset( $fe_array_6233c3c3090aece11d2f801af069c6f8_27 );

unset( $fe_array_keys_6233c3c3090aece11d2f801af069c6f8_27 );

unset( $fe_n_items_6233c3c3090aece11d2f801af069c6f8_27 );

unset( $fe_n_items_processed_6233c3c3090aece11d2f801af069c6f8_27 );

unset( $fe_i_6233c3c3090aece11d2f801af069c6f8_27 );

unset( $fe_key_6233c3c3090aece11d2f801af069c6f8_27 );

unset( $fe_val_6233c3c3090aece11d2f801af069c6f8_27 );

unset( $fe_offset_6233c3c3090aece11d2f801af069c6f8_27 );

unset( $fe_max_6233c3c3090aece11d2f801af069c6f8_27 );

unset( $fe_reverse_6233c3c3090aece11d2f801af069c6f8_27 );

unset( $fe_first_val_6233c3c3090aece11d2f801af069c6f8_27 );

unset( $fe_last_val_6233c3c3090aece11d2f801af069c6f8_27 );

unset( $fe_variable_stack_6233c3c3090aece11d2f801af069c6f8_27 );

}

// foreach ends
$text .= '            <li>
                ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context_edit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context_edit'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                    <a href=\'#\' title="Logout from the system." id="header-usermenu-logout" class="disabled">Logout: ';
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'fetchCurrentUser' ),
  array_values( array(  ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
$var1 = compiledFetchAttribute( $var, 'login' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</a>
                ';
}
else
{
$text .= '                    <a href="/user/logout" title="Logout from the system." id="header-usermenu-logout">Logout: ';
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'fetchCurrentUser' ),
  array_values( array(  ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
$var1 = compiledFetchAttribute( $var, 'login' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</a>
                ';
}
unset( $if_cond );
// if ends

$text .= '            </li>
            <li class="header-search-mobile">
                ';
$oldRestoreIncludeArray_6b69b55df151f206f0311d872165ca3f = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/page_search-2d55b6b03d331e845e4f1468dd1a1acd.php' ) && filemtime( 'var/site/cache/template/compiled/page_search-2d55b6b03d331e845e4f1468dd1a1acd.php' ) > filemtime( 'design/admin3/templates/page_search.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin3/templates/page_search.tpl' );
include( '' . 'var/site/cache/template/compiled/page_search-2d55b6b03d331e845e4f1468dd1a1acd.php' );
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
$tpl->processURI( 'design/admin3/templates/page_search.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_6b69b55df151f206f0311d872165ca3f;

$text .= '            </li>
        </ul>
    </div>
    <!-- end::Navbar Menu -->
</div>
 ';

$setArray = $oldSetArray_a18d344cadbef2d10b1001f2e514b5ec;
$tpl->Level--;
?>
