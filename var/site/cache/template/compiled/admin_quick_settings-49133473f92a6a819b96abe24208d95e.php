<?php
// URI:       design/admin/templates/toolbar/full/admin_quick_settings.tpl
// Filename:  design/admin/templates/toolbar/full/admin_quick_settings.tpl
// Timestamp: 1768752117 (Sun Jan 18 8:01:57 PST 2026)
$oldSetArray_d00cb4ea5e7ccd23c613fa1201863f63 = isset( $setArray ) ? $setArray : array();
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

// if begins
unset( $if_cond );
$if_cond = call_user_func_array( array( new eZUserFunctionCollection(), 'hasAccessTo' ),
  array_values( array(     'module' => "setup",
    'function' => "setup",
    'user_id' => null ) ) );
$if_cond = isset( $if_cond['result'] ) ? $if_cond['result'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '
<div id="quicksettings-tool">
<div class="box-header"><div class="box-ml">

   ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'edit' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '     <h4><span class="disabled">Quick settings</span></h4>
   ';
}
else
{
$text .= '     <h4>Quick settings</h4>
   ';
}
unset( $if_cond );
// if ends

$text .= '
</div></div>

<div class="box-bc"><div class="box-ml"><div class="box-content">
    ';
unset( $var );
$var = eZPreferences::value( "admin_quicksettings_siteaccess" );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['siteaccess'] = $var;
unset( $var );
$vars[$currentNamespace]['select_siteaccess'] = 'true';
$text .= '        ';
$oldRestoreIncludeArray_1688541ac9fb0560cfb123d318bc4f5d = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/quick_settings-e3887769c2bc82ec66f4ed315ca4ced2.php' ) && filemtime( 'var/site/cache/template/compiled/quick_settings-e3887769c2bc82ec66f4ed315ca4ced2.php' ) > filemtime( 'design/admin/templates/setup/quick_settings.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/setup/quick_settings.tpl' );
include( '' . 'var/site/cache/template/compiled/quick_settings-e3887769c2bc82ec66f4ed315ca4ced2.php' );
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
$tpl->processURI( 'design/admin/templates/setup/quick_settings.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_1688541ac9fb0560cfb123d318bc4f5d;

$text .= '    ';
unset( $vars[$currentNamespace]['siteaccess'] );
unset( $vars[$currentNamespace]['select_siteaccess'] );
$text .= '</div></div></div>
</div>
';
}
unset( $if_cond );
// if ends


$setArray = $oldSetArray_d00cb4ea5e7ccd23c613fa1201863f63;
$tpl->Level--;
?>
