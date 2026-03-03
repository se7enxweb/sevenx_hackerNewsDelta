<?php
// URI:       design/admin3/templates/page_header.tpl
// Filename:  design/admin3/templates/page_header.tpl
// Timestamp: 1768752117 (Sun Jan 18 8:01:57 PST 2026)
$oldSetArray_901a903db1da7605e52f6d0a6b73dfd5 = isset( $setArray ) ? $setArray : array();
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

$oldRestoreIncludeArray_d63dbf1f728f87cf7aba1758787e8f8c = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/page_topmenu-18e15ccba7f71a057ecadc7e9461db92.php' ) && filemtime( 'var/site/cache/template/compiled/page_topmenu-18e15ccba7f71a057ecadc7e9461db92.php' ) > filemtime( 'design/admin3/templates/page_topmenu.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin3/templates/page_topmenu.tpl' );
include( '' . 'var/site/cache/template/compiled/page_topmenu-18e15ccba7f71a057ecadc7e9461db92.php' );
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
$tpl->processURI( 'design/admin3/templates/page_topmenu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_d63dbf1f728f87cf7aba1758787e8f8c;

$text .= '
';

$setArray = $oldSetArray_901a903db1da7605e52f6d0a6b73dfd5;
$tpl->Level--;
?>
