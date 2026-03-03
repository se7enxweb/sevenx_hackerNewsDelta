<?php
// URI:       design:user/unactivated.tpl
// Filename:  design/standard/templates/user/unactivated.tpl
// Timestamp: 1768752118 (Sun Jan 18 8:01:58 PST 2026)
$oldSetArray_a99638e1d79b0dc5f18bf597a74cbee2 = isset( $setArray ) ? $setArray : array();
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

// def $uri
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module'] : null;
$var1 = compiledFetchAttribute( $var, 'functions' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'unactivated' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'uri' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'uri', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'uri' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 64,
  ),
  1 => 
  array (
    0 => 2,
    1 => 44,
    2 => 108,
  ),
  2 => 'design/standard/templates/user/unactivated.tpl',
) );
    $tpl->setVariable( 'uri', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'uri', $var, $rootNamespace );
}

$text .= '<form name="activations" method="post" action=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'uri', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['uri'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>
';
unset( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_6 );
unset( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_61 );
unset( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_62 );
unset( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_62 );
$elseif_cond_dd75f0f0fb74691d822380aa66742e38_62 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'success_remove', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['success_remove'] : null;
if (! isset( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_62 ) ) $elseif_cond_dd75f0f0fb74691d822380aa66742e38_62 = NULL;
while ( is_object( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_62 ) and method_exists( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_62, 'templateValue' ) )
    $elseif_cond_dd75f0f0fb74691d822380aa66742e38_62 = $elseif_cond_dd75f0f0fb74691d822380aa66742e38_62->templateValue();
while ( is_object( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_62 ) and method_exists( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_62, 'templateValue' ) )
    $elseif_cond_dd75f0f0fb74691d822380aa66742e38_62 = $elseif_cond_dd75f0f0fb74691d822380aa66742e38_62->templateValue();
$elseif_cond_dd75f0f0fb74691d822380aa66742e38_61 = isset( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_62 );unset( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_62 );
if (! isset( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_61 ) ) $elseif_cond_dd75f0f0fb74691d822380aa66742e38_61 = NULL;
while ( is_object( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_61 ) and method_exists( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_61, 'templateValue' ) )
    $elseif_cond_dd75f0f0fb74691d822380aa66742e38_61 = $elseif_cond_dd75f0f0fb74691d822380aa66742e38_61->templateValue();
unset( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_62 );
unset( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_63 );
unset( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_63 );
$elseif_cond_dd75f0f0fb74691d822380aa66742e38_63 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'errors_remove', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['errors_remove'] : null;
if (! isset( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_63 ) ) $elseif_cond_dd75f0f0fb74691d822380aa66742e38_63 = NULL;
while ( is_object( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_63 ) and method_exists( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_63, 'templateValue' ) )
    $elseif_cond_dd75f0f0fb74691d822380aa66742e38_63 = $elseif_cond_dd75f0f0fb74691d822380aa66742e38_63->templateValue();
while ( is_object( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_63 ) and method_exists( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_63, 'templateValue' ) )
    $elseif_cond_dd75f0f0fb74691d822380aa66742e38_63 = $elseif_cond_dd75f0f0fb74691d822380aa66742e38_63->templateValue();
$elseif_cond_dd75f0f0fb74691d822380aa66742e38_62 = isset( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_63 );unset( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_63 );
if (! isset( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_62 ) ) $elseif_cond_dd75f0f0fb74691d822380aa66742e38_62 = NULL;
while ( is_object( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_62 ) and method_exists( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_62, 'templateValue' ) )
    $elseif_cond_dd75f0f0fb74691d822380aa66742e38_62 = $elseif_cond_dd75f0f0fb74691d822380aa66742e38_62->templateValue();
if ( !$elseif_cond_dd75f0f0fb74691d822380aa66742e38_61 )
    $elseif_cond_dd75f0f0fb74691d822380aa66742e38_6 = false;
else if ( !$elseif_cond_dd75f0f0fb74691d822380aa66742e38_62 )
    $elseif_cond_dd75f0f0fb74691d822380aa66742e38_6 = false;
else
    $elseif_cond_dd75f0f0fb74691d822380aa66742e38_6 = $elseif_cond_dd75f0f0fb74691d822380aa66742e38_62;
unset( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_61, $elseif_cond_dd75f0f0fb74691d822380aa66742e38_62 );
if (! isset( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_6 ) ) $elseif_cond_dd75f0f0fb74691d822380aa66742e38_6 = NULL;
while ( is_object( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_6 ) and method_exists( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_6, 'templateValue' ) )
    $elseif_cond_dd75f0f0fb74691d822380aa66742e38_6 = $elseif_cond_dd75f0f0fb74691d822380aa66742e38_6->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'success_activate', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['success_activate'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'errors_activate', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['errors_activate'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = isset( $if_cond3 );unset( $if_cond3 );
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
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'success_activate', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['success_activate'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <div class="message-feedback">
        <h2>The following users have been successfully activated:</h2>
        <ul>
        ';
// foreach begins
$skipDelimiter = true;
$fe_array_dd75f0f0fb74691d822380aa66742e38_1 = [];
$fe_array_keys_dd75f0f0fb74691d822380aa66742e38_1 = [];
$fe_n_items_dd75f0f0fb74691d822380aa66742e38_1 = 0;
$fe_n_items_processed_dd75f0f0fb74691d822380aa66742e38_1  = 0;
$fe_i_dd75f0f0fb74691d822380aa66742e38_1 = 0;
$fe_key_dd75f0f0fb74691d822380aa66742e38_1 = 0;
$fe_val_dd75f0f0fb74691d822380aa66742e38_1 = 0;
$fe_offset_dd75f0f0fb74691d822380aa66742e38_1 = 0;
$fe_max_dd75f0f0fb74691d822380aa66742e38_1 = 0;
$fe_reverse_dd75f0f0fb74691d822380aa66742e38_1 = 0;
$fe_first_val_dd75f0f0fb74691d822380aa66742e38_1 = 0;
$fe_last_val_dd75f0f0fb74691d822380aa66742e38_1 = 0;
if ( !isset( $fe_variable_stack_dd75f0f0fb74691d822380aa66742e38_1 ) ) $fe_variable_stack_dd75f0f0fb74691d822380aa66742e38_1 = [];
$fe_variable_stack_dd75f0f0fb74691d822380aa66742e38_1[] = @compact( 'fe_array_dd75f0f0fb74691d822380aa66742e38_1', 'fe_array_keys_dd75f0f0fb74691d822380aa66742e38_1', 'fe_n_items_dd75f0f0fb74691d822380aa66742e38_1', 'fe_n_items_processed_dd75f0f0fb74691d822380aa66742e38_1', 'fe_i_dd75f0f0fb74691d822380aa66742e38_1', 'fe_key_dd75f0f0fb74691d822380aa66742e38_1', 'fe_val_dd75f0f0fb74691d822380aa66742e38_1', 'fe_offset_dd75f0f0fb74691d822380aa66742e38_1', 'fe_max_dd75f0f0fb74691d822380aa66742e38_1', 'fe_reverse_dd75f0f0fb74691d822380aa66742e38_1', 'fe_first_val_dd75f0f0fb74691d822380aa66742e38_1', 'fe_last_val_dd75f0f0fb74691d822380aa66742e38_1' );
unset( $fe_array_dd75f0f0fb74691d822380aa66742e38_1 );
unset( $fe_array_dd75f0f0fb74691d822380aa66742e38_1 );
$fe_array_dd75f0f0fb74691d822380aa66742e38_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'success_activate', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['success_activate'] : null;
if (! isset( $fe_array_dd75f0f0fb74691d822380aa66742e38_1 ) ) $fe_array_dd75f0f0fb74691d822380aa66742e38_1 = NULL;
while ( is_object( $fe_array_dd75f0f0fb74691d822380aa66742e38_1 ) and method_exists( $fe_array_dd75f0f0fb74691d822380aa66742e38_1, 'templateValue' ) )
    $fe_array_dd75f0f0fb74691d822380aa66742e38_1 = $fe_array_dd75f0f0fb74691d822380aa66742e38_1->templateValue();

$fe_array_keys_dd75f0f0fb74691d822380aa66742e38_1 = is_array( $fe_array_dd75f0f0fb74691d822380aa66742e38_1 ) ? array_keys( $fe_array_dd75f0f0fb74691d822380aa66742e38_1 ) : [];
$fe_n_items_dd75f0f0fb74691d822380aa66742e38_1 = count( $fe_array_keys_dd75f0f0fb74691d822380aa66742e38_1 );
$fe_n_items_processed_dd75f0f0fb74691d822380aa66742e38_1 = 0;
$fe_offset_dd75f0f0fb74691d822380aa66742e38_1 = 0;
$fe_max_dd75f0f0fb74691d822380aa66742e38_1 = $fe_n_items_dd75f0f0fb74691d822380aa66742e38_1 - $fe_offset_dd75f0f0fb74691d822380aa66742e38_1;
$fe_reverse_dd75f0f0fb74691d822380aa66742e38_1 = false;
if ( $fe_offset_dd75f0f0fb74691d822380aa66742e38_1 < 0 || $fe_offset_dd75f0f0fb74691d822380aa66742e38_1 >= $fe_n_items_dd75f0f0fb74691d822380aa66742e38_1 )
{
    $fe_offset_dd75f0f0fb74691d822380aa66742e38_1 = ( $fe_offset_dd75f0f0fb74691d822380aa66742e38_1 < 0 ) ? 0 : $fe_n_items_dd75f0f0fb74691d822380aa66742e38_1;
    if ( $fe_n_items_dd75f0f0fb74691d822380aa66742e38_1 || $fe_offset_dd75f0f0fb74691d822380aa66742e38_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_dd75f0f0fb74691d822380aa66742e38_1'. Array count: $fe_n_items_dd75f0f0fb74691d822380aa66742e38_1");   
}
}
if ( $fe_max_dd75f0f0fb74691d822380aa66742e38_1 < 0 || $fe_offset_dd75f0f0fb74691d822380aa66742e38_1 + $fe_max_dd75f0f0fb74691d822380aa66742e38_1 > $fe_n_items_dd75f0f0fb74691d822380aa66742e38_1 )
{
    if ( $fe_max_dd75f0f0fb74691d822380aa66742e38_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_dd75f0f0fb74691d822380aa66742e38_1");
    $fe_max_dd75f0f0fb74691d822380aa66742e38_1 = $fe_n_items_dd75f0f0fb74691d822380aa66742e38_1 - $fe_offset_dd75f0f0fb74691d822380aa66742e38_1;
}
if ( $fe_reverse_dd75f0f0fb74691d822380aa66742e38_1 )
{
    $fe_first_val_dd75f0f0fb74691d822380aa66742e38_1 = $fe_n_items_dd75f0f0fb74691d822380aa66742e38_1 - 1 - $fe_offset_dd75f0f0fb74691d822380aa66742e38_1;
    $fe_last_val_dd75f0f0fb74691d822380aa66742e38_1  = 0;
}
else
{
    $fe_first_val_dd75f0f0fb74691d822380aa66742e38_1 = $fe_offset_dd75f0f0fb74691d822380aa66742e38_1;
    $fe_last_val_dd75f0f0fb74691d822380aa66742e38_1  = $fe_n_items_dd75f0f0fb74691d822380aa66742e38_1 - 1;
}
// foreach
for ( $fe_i_dd75f0f0fb74691d822380aa66742e38_1 = $fe_first_val_dd75f0f0fb74691d822380aa66742e38_1; $fe_n_items_processed_dd75f0f0fb74691d822380aa66742e38_1 < $fe_max_dd75f0f0fb74691d822380aa66742e38_1 && ( $fe_reverse_dd75f0f0fb74691d822380aa66742e38_1 ? $fe_i_dd75f0f0fb74691d822380aa66742e38_1 >= $fe_last_val_dd75f0f0fb74691d822380aa66742e38_1 : $fe_i_dd75f0f0fb74691d822380aa66742e38_1 <= $fe_last_val_dd75f0f0fb74691d822380aa66742e38_1 ); $fe_reverse_dd75f0f0fb74691d822380aa66742e38_1 ? $fe_i_dd75f0f0fb74691d822380aa66742e38_1-- : $fe_i_dd75f0f0fb74691d822380aa66742e38_1++ )
{
$fe_key_dd75f0f0fb74691d822380aa66742e38_1 = $fe_array_keys_dd75f0f0fb74691d822380aa66742e38_1[$fe_i_dd75f0f0fb74691d822380aa66742e38_1];
$fe_val_dd75f0f0fb74691d822380aa66742e38_1 = $fe_array_dd75f0f0fb74691d822380aa66742e38_1[$fe_key_dd75f0f0fb74691d822380aa66742e38_1];
$vars[$rootNamespace]['userid'] = $fe_val_dd75f0f0fb74691d822380aa66742e38_1;
$text .= '            ';
// def $object
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'userid', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['userid'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentObject' ),
  array_values( array(     'object_id' => $var1,
    'remote_id' => false ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'object', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'object' is already defined.", array (
  0 => 
  array (
    0 => 11,
    1 => 12,
    2 => 489,
  ),
  1 => 
  array (
    0 => 11,
    1 => 80,
    2 => 557,
  ),
  2 => 'design/standard/templates/user/unactivated.tpl',
) );
    $tpl->setVariable( 'object', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'object', $var, $rootNamespace );
}

$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'status' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 1 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                <li><a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var2 = compiledFetchAttribute( $var1, 'main_node' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var2 = compiledFetchAttribute( $var1, 'name' );
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

$text .= '</a></li>
            ';
}
else
{
$text .= '                <li>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var2 = compiledFetchAttribute( $var1, 'name' );
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

$text .= '</li>
            ';
}
unset( $if_cond );
// if ends

$text .= '            ';
// undef $object
$tpl->unsetLocalVariable( 'object', $rootNamespace );

$text .= '        ';
$fe_n_items_processed_dd75f0f0fb74691d822380aa66742e38_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_dd75f0f0fb74691d822380aa66742e38_1 ) ) extract( array_pop( $fe_variable_stack_dd75f0f0fb74691d822380aa66742e38_1 ) );

else
{

unset( $fe_array_dd75f0f0fb74691d822380aa66742e38_1 );

unset( $fe_array_keys_dd75f0f0fb74691d822380aa66742e38_1 );

unset( $fe_n_items_dd75f0f0fb74691d822380aa66742e38_1 );

unset( $fe_n_items_processed_dd75f0f0fb74691d822380aa66742e38_1 );

unset( $fe_i_dd75f0f0fb74691d822380aa66742e38_1 );

unset( $fe_key_dd75f0f0fb74691d822380aa66742e38_1 );

unset( $fe_val_dd75f0f0fb74691d822380aa66742e38_1 );

unset( $fe_offset_dd75f0f0fb74691d822380aa66742e38_1 );

unset( $fe_max_dd75f0f0fb74691d822380aa66742e38_1 );

unset( $fe_reverse_dd75f0f0fb74691d822380aa66742e38_1 );

unset( $fe_first_val_dd75f0f0fb74691d822380aa66742e38_1 );

unset( $fe_last_val_dd75f0f0fb74691d822380aa66742e38_1 );

unset( $fe_variable_stack_dd75f0f0fb74691d822380aa66742e38_1 );

}

// foreach ends
$text .= '        </ul>
    </div>
    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'errors_activate', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['errors_activate'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <div class="message-error">
        <h2>Some users have not been activated</h2>
    </div>
    ';
}
unset( $if_cond );
// if ends

}
elseif ( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_6 )
{
$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'success_remove', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['success_remove'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <div class="message-feedback">
        <h2>The following unactivated users have been successfully removed:</h2>
        <ul>
        ';
// foreach begins
$skipDelimiter = true;
$fe_array_dd75f0f0fb74691d822380aa66742e38_2 = [];
$fe_array_keys_dd75f0f0fb74691d822380aa66742e38_2 = [];
$fe_n_items_dd75f0f0fb74691d822380aa66742e38_2 = 0;
$fe_n_items_processed_dd75f0f0fb74691d822380aa66742e38_2  = 0;
$fe_i_dd75f0f0fb74691d822380aa66742e38_2 = 0;
$fe_key_dd75f0f0fb74691d822380aa66742e38_2 = 0;
$fe_val_dd75f0f0fb74691d822380aa66742e38_2 = 0;
$fe_offset_dd75f0f0fb74691d822380aa66742e38_2 = 0;
$fe_max_dd75f0f0fb74691d822380aa66742e38_2 = 0;
$fe_reverse_dd75f0f0fb74691d822380aa66742e38_2 = 0;
$fe_first_val_dd75f0f0fb74691d822380aa66742e38_2 = 0;
$fe_last_val_dd75f0f0fb74691d822380aa66742e38_2 = 0;
if ( !isset( $fe_variable_stack_dd75f0f0fb74691d822380aa66742e38_2 ) ) $fe_variable_stack_dd75f0f0fb74691d822380aa66742e38_2 = [];
$fe_variable_stack_dd75f0f0fb74691d822380aa66742e38_2[] = @compact( 'fe_array_dd75f0f0fb74691d822380aa66742e38_2', 'fe_array_keys_dd75f0f0fb74691d822380aa66742e38_2', 'fe_n_items_dd75f0f0fb74691d822380aa66742e38_2', 'fe_n_items_processed_dd75f0f0fb74691d822380aa66742e38_2', 'fe_i_dd75f0f0fb74691d822380aa66742e38_2', 'fe_key_dd75f0f0fb74691d822380aa66742e38_2', 'fe_val_dd75f0f0fb74691d822380aa66742e38_2', 'fe_offset_dd75f0f0fb74691d822380aa66742e38_2', 'fe_max_dd75f0f0fb74691d822380aa66742e38_2', 'fe_reverse_dd75f0f0fb74691d822380aa66742e38_2', 'fe_first_val_dd75f0f0fb74691d822380aa66742e38_2', 'fe_last_val_dd75f0f0fb74691d822380aa66742e38_2' );
unset( $fe_array_dd75f0f0fb74691d822380aa66742e38_2 );
unset( $fe_array_dd75f0f0fb74691d822380aa66742e38_2 );
$fe_array_dd75f0f0fb74691d822380aa66742e38_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'success_remove', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['success_remove'] : null;
if (! isset( $fe_array_dd75f0f0fb74691d822380aa66742e38_2 ) ) $fe_array_dd75f0f0fb74691d822380aa66742e38_2 = NULL;
while ( is_object( $fe_array_dd75f0f0fb74691d822380aa66742e38_2 ) and method_exists( $fe_array_dd75f0f0fb74691d822380aa66742e38_2, 'templateValue' ) )
    $fe_array_dd75f0f0fb74691d822380aa66742e38_2 = $fe_array_dd75f0f0fb74691d822380aa66742e38_2->templateValue();

$fe_array_keys_dd75f0f0fb74691d822380aa66742e38_2 = is_array( $fe_array_dd75f0f0fb74691d822380aa66742e38_2 ) ? array_keys( $fe_array_dd75f0f0fb74691d822380aa66742e38_2 ) : [];
$fe_n_items_dd75f0f0fb74691d822380aa66742e38_2 = count( $fe_array_keys_dd75f0f0fb74691d822380aa66742e38_2 );
$fe_n_items_processed_dd75f0f0fb74691d822380aa66742e38_2 = 0;
$fe_offset_dd75f0f0fb74691d822380aa66742e38_2 = 0;
$fe_max_dd75f0f0fb74691d822380aa66742e38_2 = $fe_n_items_dd75f0f0fb74691d822380aa66742e38_2 - $fe_offset_dd75f0f0fb74691d822380aa66742e38_2;
$fe_reverse_dd75f0f0fb74691d822380aa66742e38_2 = false;
if ( $fe_offset_dd75f0f0fb74691d822380aa66742e38_2 < 0 || $fe_offset_dd75f0f0fb74691d822380aa66742e38_2 >= $fe_n_items_dd75f0f0fb74691d822380aa66742e38_2 )
{
    $fe_offset_dd75f0f0fb74691d822380aa66742e38_2 = ( $fe_offset_dd75f0f0fb74691d822380aa66742e38_2 < 0 ) ? 0 : $fe_n_items_dd75f0f0fb74691d822380aa66742e38_2;
    if ( $fe_n_items_dd75f0f0fb74691d822380aa66742e38_2 || $fe_offset_dd75f0f0fb74691d822380aa66742e38_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_dd75f0f0fb74691d822380aa66742e38_2'. Array count: $fe_n_items_dd75f0f0fb74691d822380aa66742e38_2");   
}
}
if ( $fe_max_dd75f0f0fb74691d822380aa66742e38_2 < 0 || $fe_offset_dd75f0f0fb74691d822380aa66742e38_2 + $fe_max_dd75f0f0fb74691d822380aa66742e38_2 > $fe_n_items_dd75f0f0fb74691d822380aa66742e38_2 )
{
    if ( $fe_max_dd75f0f0fb74691d822380aa66742e38_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_dd75f0f0fb74691d822380aa66742e38_2");
    $fe_max_dd75f0f0fb74691d822380aa66742e38_2 = $fe_n_items_dd75f0f0fb74691d822380aa66742e38_2 - $fe_offset_dd75f0f0fb74691d822380aa66742e38_2;
}
if ( $fe_reverse_dd75f0f0fb74691d822380aa66742e38_2 )
{
    $fe_first_val_dd75f0f0fb74691d822380aa66742e38_2 = $fe_n_items_dd75f0f0fb74691d822380aa66742e38_2 - 1 - $fe_offset_dd75f0f0fb74691d822380aa66742e38_2;
    $fe_last_val_dd75f0f0fb74691d822380aa66742e38_2  = 0;
}
else
{
    $fe_first_val_dd75f0f0fb74691d822380aa66742e38_2 = $fe_offset_dd75f0f0fb74691d822380aa66742e38_2;
    $fe_last_val_dd75f0f0fb74691d822380aa66742e38_2  = $fe_n_items_dd75f0f0fb74691d822380aa66742e38_2 - 1;
}
// foreach
for ( $fe_i_dd75f0f0fb74691d822380aa66742e38_2 = $fe_first_val_dd75f0f0fb74691d822380aa66742e38_2; $fe_n_items_processed_dd75f0f0fb74691d822380aa66742e38_2 < $fe_max_dd75f0f0fb74691d822380aa66742e38_2 && ( $fe_reverse_dd75f0f0fb74691d822380aa66742e38_2 ? $fe_i_dd75f0f0fb74691d822380aa66742e38_2 >= $fe_last_val_dd75f0f0fb74691d822380aa66742e38_2 : $fe_i_dd75f0f0fb74691d822380aa66742e38_2 <= $fe_last_val_dd75f0f0fb74691d822380aa66742e38_2 ); $fe_reverse_dd75f0f0fb74691d822380aa66742e38_2 ? $fe_i_dd75f0f0fb74691d822380aa66742e38_2-- : $fe_i_dd75f0f0fb74691d822380aa66742e38_2++ )
{
$fe_key_dd75f0f0fb74691d822380aa66742e38_2 = $fe_array_keys_dd75f0f0fb74691d822380aa66742e38_2[$fe_i_dd75f0f0fb74691d822380aa66742e38_2];
$fe_val_dd75f0f0fb74691d822380aa66742e38_2 = $fe_array_dd75f0f0fb74691d822380aa66742e38_2[$fe_key_dd75f0f0fb74691d822380aa66742e38_2];
$vars[$rootNamespace]['name'] = $fe_val_dd75f0f0fb74691d822380aa66742e38_2;
$text .= '            <li>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['name'] : null;
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

$text .= '</li>
        ';
$fe_n_items_processed_dd75f0f0fb74691d822380aa66742e38_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_dd75f0f0fb74691d822380aa66742e38_2 ) ) extract( array_pop( $fe_variable_stack_dd75f0f0fb74691d822380aa66742e38_2 ) );

else
{

unset( $fe_array_dd75f0f0fb74691d822380aa66742e38_2 );

unset( $fe_array_keys_dd75f0f0fb74691d822380aa66742e38_2 );

unset( $fe_n_items_dd75f0f0fb74691d822380aa66742e38_2 );

unset( $fe_n_items_processed_dd75f0f0fb74691d822380aa66742e38_2 );

unset( $fe_i_dd75f0f0fb74691d822380aa66742e38_2 );

unset( $fe_key_dd75f0f0fb74691d822380aa66742e38_2 );

unset( $fe_val_dd75f0f0fb74691d822380aa66742e38_2 );

unset( $fe_offset_dd75f0f0fb74691d822380aa66742e38_2 );

unset( $fe_max_dd75f0f0fb74691d822380aa66742e38_2 );

unset( $fe_reverse_dd75f0f0fb74691d822380aa66742e38_2 );

unset( $fe_first_val_dd75f0f0fb74691d822380aa66742e38_2 );

unset( $fe_last_val_dd75f0f0fb74691d822380aa66742e38_2 );

unset( $fe_variable_stack_dd75f0f0fb74691d822380aa66742e38_2 );

}

// foreach ends
$text .= '        </ul>
    </div>
    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'errors_remove', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['errors_remove'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <div class="message-error">
        <h2>Some users have not been removed</h2>
    </div>
    ';
}
unset( $if_cond );
// if ends

}
unset( $if_cond );
// if ends

unset( $elseif_cond_dd75f0f0fb74691d822380aa66742e38_6 );

$text .= '


<div class="context-block">
<div class="box-header"><div class="box-ml">
<h1 class="context-title">';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'unactivated_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['unactivated_count'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%users_count' => $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var3 = array();
foreach ( $var2 as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( 'Unactivated users (%users_count)', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</h1>
<div class="header-mainline"></div>

</div></div>

<div class="box-ml"><div class="box-mr"><div class="box-content">


<div class="context-toolbar">
<div class="button-left">
<p class="table-preferences">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'number_of_items', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['number_of_items'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['match'] = $var;
unset( $var );
unset( $match );
unset( $match );
$match = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'number_of_items', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['number_of_items'] : null;
if (! isset( $match ) ) $match = NULL;
while ( is_object( $match ) and method_exists( $match, 'templateValue' ) )
    $match = $match->templateValue();

switch ( $match )
{
    case 25:
    {
$text .= '<a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'limit_preference', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['limit_preference'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/user/preferences/set/' . $var3 . '/1' );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>10</a>
<span class="current">25</span>
<a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'limit_preference', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['limit_preference'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/user/preferences/set/' . $var3 . '/3' );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>50</a>';
    } break;
    case 50:
    {
$text .= '<a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'limit_preference', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['limit_preference'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/user/preferences/set/' . $var3 . '/1' );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>10</a>
<a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'limit_preference', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['limit_preference'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/user/preferences/set/' . $var3 . '/2' );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>25</a>
<span class="current">50</span>';
    } break;
    default:
    {
$text .= '<span class="current">10</span>
<a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'limit_preference', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['limit_preference'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/user/preferences/set/' . $var3 . '/2' );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>25</a>
<a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'limit_preference', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['limit_preference'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/user/preferences/set/' . $var3 . '/3' );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>50</a>';
    } break;
}
unset( $match );

unset( $vars[$currentNamespace]['match'] );
$text .= '</p>
</div>
<div class="float-break"></div>
</div>
';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'unactivated_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['unactivated_count'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <table class="list" cellspacing="0">
    <tr>
        <th class="tight"><img src="/design/admin3/images/toggle-button-16x16.gif" width="16" height="16" alt="Toggle selection" onclick="ezjs_toggleCheckboxes( document.activations, \'DeleteIDArray[]\' ); return false;"/></th>
        <th';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sort_field', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sort_field'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( ( $var2 ) == ( 'time' ) );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    unset( $var2 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "sort_order", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["sort_order"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var2 = ( " class=\"sort-" . $var4 . "\"" );
unset( $var4 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

    $var = $var2;
}
else
{
    
    $var = '';
}
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '><a href=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'uri', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['uri'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var4 );
unset( $var5 );
unset( $var6 );
unset( $var7 );
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sort_field', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sort_field'] : null;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
$var6 = ( ( $var7 ) == ( 'time' ) );
unset( $var7 );
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
unset( $var7 );
unset( $var8 );
unset( $var8 );
$var8 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sort_order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sort_order'] : null;
if (! isset( $var8 ) ) $var8 = NULL;
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
$var7 = ( ( $var8 ) == ( 'asc' ) );
unset( $var8 );
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
if ( !$var6 )
    $var5 = false;
else if ( !$var7 )
    $var5 = false;
else
    $var5 = $var7;
unset( $var6, $var7 );
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
if ( $var5 )
{
    $var4 = "desc";
}
else
{
    
    $var4 = 'asc';
}
unset( $var5 );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var1 = ( $var2 . '/time/' . $var4 );
unset( $var2, $var4 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>Registration date</a></th>
        <th>Name</th>
        <th';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sort_field', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sort_field'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( ( $var2 ) == ( 'login' ) );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    unset( $var2 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "sort_order", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["sort_order"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var2 = ( " class=\"sort-" . $var4 . "\"" );
unset( $var4 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

    $var = $var2;
}
else
{
    
    $var = '';
}
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '><a href=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'uri', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['uri'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var4 );
unset( $var5 );
unset( $var6 );
unset( $var7 );
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sort_field', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sort_field'] : null;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
$var6 = ( ( $var7 ) == ( 'login' ) );
unset( $var7 );
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
unset( $var7 );
unset( $var8 );
unset( $var8 );
$var8 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sort_order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sort_order'] : null;
if (! isset( $var8 ) ) $var8 = NULL;
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
$var7 = ( ( $var8 ) == ( 'asc' ) );
unset( $var8 );
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
if ( !$var6 )
    $var5 = false;
else if ( !$var7 )
    $var5 = false;
else
    $var5 = $var7;
unset( $var6, $var7 );
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
if ( $var5 )
{
    $var4 = "desc";
}
else
{
    
    $var4 = 'asc';
}
unset( $var5 );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var1 = ( $var2 . '/login/' . $var4 );
unset( $var2, $var4 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>Login</a></th>
        <th';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sort_field', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sort_field'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( ( $var2 ) == ( 'email' ) );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    unset( $var2 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "sort_order", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["sort_order"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var2 = ( " class=\"sort-" . $var4 . "\"" );
unset( $var4 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

    $var = $var2;
}
else
{
    
    $var = '';
}
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '><a href=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'uri', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['uri'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var4 );
unset( $var5 );
unset( $var6 );
unset( $var7 );
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sort_field', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sort_field'] : null;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
$var6 = ( ( $var7 ) == ( 'email' ) );
unset( $var7 );
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
unset( $var7 );
unset( $var8 );
unset( $var8 );
$var8 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sort_order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sort_order'] : null;
if (! isset( $var8 ) ) $var8 = NULL;
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
$var7 = ( ( $var8 ) == ( 'asc' ) );
unset( $var8 );
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
if ( !$var6 )
    $var5 = false;
else if ( !$var7 )
    $var5 = false;
else
    $var5 = $var7;
unset( $var6, $var7 );
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
if ( $var5 )
{
    $var4 = "desc";
}
else
{
    
    $var4 = 'asc';
}
unset( $var5 );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var1 = ( $var2 . '/email/' . $var4 );
unset( $var2, $var4 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>E-mail</a></th>
    </tr>
    ';
// foreach begins
$skipDelimiter = true;
// creating sequence variables for \{foreach} loop
$foreach_sequence_array_dd75f0f0fb74691d822380aa66742e38_3 = array (
  0 => 'bglight',
  1 => 'bgdark',
);
$foreach_sequence_var_dd75f0f0fb74691d822380aa66742e38_3 = current( $foreach_sequence_array_dd75f0f0fb74691d822380aa66742e38_3 );

$fe_array_dd75f0f0fb74691d822380aa66742e38_3 = [];
$fe_array_keys_dd75f0f0fb74691d822380aa66742e38_3 = [];
$fe_n_items_dd75f0f0fb74691d822380aa66742e38_3 = 0;
$fe_n_items_processed_dd75f0f0fb74691d822380aa66742e38_3  = 0;
$fe_i_dd75f0f0fb74691d822380aa66742e38_3 = 0;
$fe_key_dd75f0f0fb74691d822380aa66742e38_3 = 0;
$fe_val_dd75f0f0fb74691d822380aa66742e38_3 = 0;
$fe_offset_dd75f0f0fb74691d822380aa66742e38_3 = 0;
$fe_max_dd75f0f0fb74691d822380aa66742e38_3 = 0;
$fe_reverse_dd75f0f0fb74691d822380aa66742e38_3 = 0;
$fe_first_val_dd75f0f0fb74691d822380aa66742e38_3 = 0;
$fe_last_val_dd75f0f0fb74691d822380aa66742e38_3 = 0;
if ( !isset( $fe_variable_stack_dd75f0f0fb74691d822380aa66742e38_3 ) ) $fe_variable_stack_dd75f0f0fb74691d822380aa66742e38_3 = [];
$fe_variable_stack_dd75f0f0fb74691d822380aa66742e38_3[] = @compact( 'fe_array_dd75f0f0fb74691d822380aa66742e38_3', 'fe_array_keys_dd75f0f0fb74691d822380aa66742e38_3', 'fe_n_items_dd75f0f0fb74691d822380aa66742e38_3', 'fe_n_items_processed_dd75f0f0fb74691d822380aa66742e38_3', 'fe_i_dd75f0f0fb74691d822380aa66742e38_3', 'fe_key_dd75f0f0fb74691d822380aa66742e38_3', 'fe_val_dd75f0f0fb74691d822380aa66742e38_3', 'fe_offset_dd75f0f0fb74691d822380aa66742e38_3', 'fe_max_dd75f0f0fb74691d822380aa66742e38_3', 'fe_reverse_dd75f0f0fb74691d822380aa66742e38_3', 'fe_first_val_dd75f0f0fb74691d822380aa66742e38_3', 'fe_last_val_dd75f0f0fb74691d822380aa66742e38_3' );
unset( $fe_array_dd75f0f0fb74691d822380aa66742e38_3 );
unset( $fe_array_dd75f0f0fb74691d822380aa66742e38_3 );
$fe_array_dd75f0f0fb74691d822380aa66742e38_3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'unactivated_users', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['unactivated_users'] : null;
if (! isset( $fe_array_dd75f0f0fb74691d822380aa66742e38_3 ) ) $fe_array_dd75f0f0fb74691d822380aa66742e38_3 = NULL;
while ( is_object( $fe_array_dd75f0f0fb74691d822380aa66742e38_3 ) and method_exists( $fe_array_dd75f0f0fb74691d822380aa66742e38_3, 'templateValue' ) )
    $fe_array_dd75f0f0fb74691d822380aa66742e38_3 = $fe_array_dd75f0f0fb74691d822380aa66742e38_3->templateValue();

$fe_array_keys_dd75f0f0fb74691d822380aa66742e38_3 = is_array( $fe_array_dd75f0f0fb74691d822380aa66742e38_3 ) ? array_keys( $fe_array_dd75f0f0fb74691d822380aa66742e38_3 ) : [];
$fe_n_items_dd75f0f0fb74691d822380aa66742e38_3 = count( $fe_array_keys_dd75f0f0fb74691d822380aa66742e38_3 );
$fe_n_items_processed_dd75f0f0fb74691d822380aa66742e38_3 = 0;
$fe_offset_dd75f0f0fb74691d822380aa66742e38_3 = 0;
$fe_max_dd75f0f0fb74691d822380aa66742e38_3 = $fe_n_items_dd75f0f0fb74691d822380aa66742e38_3 - $fe_offset_dd75f0f0fb74691d822380aa66742e38_3;
$fe_reverse_dd75f0f0fb74691d822380aa66742e38_3 = false;
if ( $fe_offset_dd75f0f0fb74691d822380aa66742e38_3 < 0 || $fe_offset_dd75f0f0fb74691d822380aa66742e38_3 >= $fe_n_items_dd75f0f0fb74691d822380aa66742e38_3 )
{
    $fe_offset_dd75f0f0fb74691d822380aa66742e38_3 = ( $fe_offset_dd75f0f0fb74691d822380aa66742e38_3 < 0 ) ? 0 : $fe_n_items_dd75f0f0fb74691d822380aa66742e38_3;
    if ( $fe_n_items_dd75f0f0fb74691d822380aa66742e38_3 || $fe_offset_dd75f0f0fb74691d822380aa66742e38_3 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_dd75f0f0fb74691d822380aa66742e38_3'. Array count: $fe_n_items_dd75f0f0fb74691d822380aa66742e38_3");   
}
}
if ( $fe_max_dd75f0f0fb74691d822380aa66742e38_3 < 0 || $fe_offset_dd75f0f0fb74691d822380aa66742e38_3 + $fe_max_dd75f0f0fb74691d822380aa66742e38_3 > $fe_n_items_dd75f0f0fb74691d822380aa66742e38_3 )
{
    if ( $fe_max_dd75f0f0fb74691d822380aa66742e38_3 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_dd75f0f0fb74691d822380aa66742e38_3");
    $fe_max_dd75f0f0fb74691d822380aa66742e38_3 = $fe_n_items_dd75f0f0fb74691d822380aa66742e38_3 - $fe_offset_dd75f0f0fb74691d822380aa66742e38_3;
}
if ( $fe_reverse_dd75f0f0fb74691d822380aa66742e38_3 )
{
    $fe_first_val_dd75f0f0fb74691d822380aa66742e38_3 = $fe_n_items_dd75f0f0fb74691d822380aa66742e38_3 - 1 - $fe_offset_dd75f0f0fb74691d822380aa66742e38_3;
    $fe_last_val_dd75f0f0fb74691d822380aa66742e38_3  = 0;
}
else
{
    $fe_first_val_dd75f0f0fb74691d822380aa66742e38_3 = $fe_offset_dd75f0f0fb74691d822380aa66742e38_3;
    $fe_last_val_dd75f0f0fb74691d822380aa66742e38_3  = $fe_n_items_dd75f0f0fb74691d822380aa66742e38_3 - 1;
}
// foreach
for ( $fe_i_dd75f0f0fb74691d822380aa66742e38_3 = $fe_first_val_dd75f0f0fb74691d822380aa66742e38_3; $fe_n_items_processed_dd75f0f0fb74691d822380aa66742e38_3 < $fe_max_dd75f0f0fb74691d822380aa66742e38_3 && ( $fe_reverse_dd75f0f0fb74691d822380aa66742e38_3 ? $fe_i_dd75f0f0fb74691d822380aa66742e38_3 >= $fe_last_val_dd75f0f0fb74691d822380aa66742e38_3 : $fe_i_dd75f0f0fb74691d822380aa66742e38_3 <= $fe_last_val_dd75f0f0fb74691d822380aa66742e38_3 ); $fe_reverse_dd75f0f0fb74691d822380aa66742e38_3 ? $fe_i_dd75f0f0fb74691d822380aa66742e38_3-- : $fe_i_dd75f0f0fb74691d822380aa66742e38_3++ )
{
$fe_key_dd75f0f0fb74691d822380aa66742e38_3 = $fe_array_keys_dd75f0f0fb74691d822380aa66742e38_3[$fe_i_dd75f0f0fb74691d822380aa66742e38_3];
$fe_val_dd75f0f0fb74691d822380aa66742e38_3 = $fe_array_dd75f0f0fb74691d822380aa66742e38_3[$fe_key_dd75f0f0fb74691d822380aa66742e38_3];
$vars[$rootNamespace]['user'] = $fe_val_dd75f0f0fb74691d822380aa66742e38_3;
// setting current sequence value
$vars[$rootNamespace]['style'] = $foreach_sequence_var_dd75f0f0fb74691d822380aa66742e38_3;
$text .= '    <tr class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'style', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['style'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
        <td><input type="checkbox" name="DeleteIDArray[]" id="delete-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user'] : null;
$var1 = compiledFetchAttribute( $var, 'contentobject_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user'] : null;
$var1 = compiledFetchAttribute( $var, 'contentobject_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" /></td>
        <td><label for="delete-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user'] : null;
$var1 = compiledFetchAttribute( $var, 'contentobject_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user'] : null;
$var2 = compiledFetchAttribute( $var1, 'account_key' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'time' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

$var = $locale->formatShortDateTime( $var1 );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</label></td>
        <td><label for="delete-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user'] : null;
$var1 = compiledFetchAttribute( $var, 'contentobject_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user'] : null;
$var2 = compiledFetchAttribute( $var1, 'contentobject' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'name' );
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

$text .= '</label></td>
        <td><label for="delete-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user'] : null;
$var1 = compiledFetchAttribute( $var, 'contentobject_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user'] : null;
$var2 = compiledFetchAttribute( $var1, 'login' );
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

$text .= '</label></td>
        <td><label for="delete-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user'] : null;
$var1 = compiledFetchAttribute( $var, 'contentobject_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user'] : null;
$var2 = compiledFetchAttribute( $var1, 'email' );
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

$text .= '</label></td>
    </tr>
    ';
// sequence iteration
if ( ( $foreach_sequence_var_dd75f0f0fb74691d822380aa66742e38_3 = next( $foreach_sequence_array_dd75f0f0fb74691d822380aa66742e38_3 ) ) === false )
{
   reset( $foreach_sequence_array_dd75f0f0fb74691d822380aa66742e38_3 );
   $foreach_sequence_var_dd75f0f0fb74691d822380aa66742e38_3 = current( $foreach_sequence_array_dd75f0f0fb74691d822380aa66742e38_3 );
}

$fe_n_items_processed_dd75f0f0fb74691d822380aa66742e38_3++;
} // foreach
unset( $foreach_sequence_array_dd75f0f0fb74691d822380aa66742e38_3 );

unset( $foreach_sequence_var_dd75f0f0fb74691d822380aa66742e38_3 );

unset( $vars[$rootNamespace]['style'] );
$skipDelimiter = false;
if ( count( $fe_variable_stack_dd75f0f0fb74691d822380aa66742e38_3 ) ) extract( array_pop( $fe_variable_stack_dd75f0f0fb74691d822380aa66742e38_3 ) );

else
{

unset( $fe_array_dd75f0f0fb74691d822380aa66742e38_3 );

unset( $fe_array_keys_dd75f0f0fb74691d822380aa66742e38_3 );

unset( $fe_n_items_dd75f0f0fb74691d822380aa66742e38_3 );

unset( $fe_n_items_processed_dd75f0f0fb74691d822380aa66742e38_3 );

unset( $fe_i_dd75f0f0fb74691d822380aa66742e38_3 );

unset( $fe_key_dd75f0f0fb74691d822380aa66742e38_3 );

unset( $fe_val_dd75f0f0fb74691d822380aa66742e38_3 );

unset( $fe_offset_dd75f0f0fb74691d822380aa66742e38_3 );

unset( $fe_max_dd75f0f0fb74691d822380aa66742e38_3 );

unset( $fe_reverse_dd75f0f0fb74691d822380aa66742e38_3 );

unset( $fe_first_val_dd75f0f0fb74691d822380aa66742e38_3 );

unset( $fe_last_val_dd75f0f0fb74691d822380aa66742e38_3 );

unset( $fe_variable_stack_dd75f0f0fb74691d822380aa66742e38_3 );

}

// foreach ends
$text .= '
    </table>

    <div class="context-toolbar">
    ';
$oldRestoreIncludeArray_3da0d5f4cf73e68d9a9fd6ffc2a802f1 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $namespace ) and isset( $vars[$namespace]['page_uri'] ) )
    $restoreIncludeArray[] = array( $namespace, 'page_uri', $vars[$namespace]['page_uri'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['page_uri'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'page_uri', 'unset' );

unset( $var );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sort_field', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sort_field'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sort_order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sort_order'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var = ( '/user/unactivated/' . $var2 . '/' . $var4 );
unset( $var2, $var4 );
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
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'unactivated_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['unactivated_count'] : null;
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
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'number_of_items', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['number_of_items'] : null;
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
if ( file_exists( 'var/site/cache/template/compiled/google-f4f16a0f6d74d11b78a068fa8ad573d6.php' ) && filemtime( 'var/site/cache/template/compiled/google-f4f16a0f6d74d11b78a068fa8ad573d6.php' ) > filemtime( 'design/admin/templates/navigator/google.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'navigator' : ( $currentNamespace . ':' . 'navigator' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/navigator/google.tpl' );
include( '' . 'var/site/cache/template/compiled/google-f4f16a0f6d74d11b78a068fa8ad573d6.php' );
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
$tpl->processURI( 'design/admin/templates/navigator/google.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_3da0d5f4cf73e68d9a9fd6ffc2a802f1;

$text .= '    </div>';
}
else
{
$text .= '    <div class="block">
        <p>There are no unactivated users</p>
    </div>';
}
unset( $if_cond );
// if ends

$text .= '
</div></div></div>
';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'unactivated_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['unactivated_count'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<div class="controlbar">
<div class="box-bc"><div class="box-ml">
<div class="block">
    <input class="button" type="submit" name="ActivateButton" value="Activate selected users" title="Activate selected users." />
    <input class="button" type="submit" name="RemoveButton" value="Remove selected users" title="Remove selected users." />
</div>
</div></div>
</div>';
}
unset( $if_cond );
// if ends

$text .= '
</div>
</form>';
// undef $uri
$tpl->unsetLocalVariable( 'uri', $rootNamespace );


$setArray = $oldSetArray_a99638e1d79b0dc5f18bf597a74cbee2;
$tpl->Level--;
?>
