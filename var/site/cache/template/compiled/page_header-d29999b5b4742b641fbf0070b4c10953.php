<?php
// URI:       design/clone/templates/page_header.tpl
// Filename:  design/clone/templates/page_header.tpl
// Timestamp: 1769248627 (Sat Jan 24 1:57:07 PST 2026)
$oldSetArray_c2e1ef7db01258e1af60260e08b929c8 = isset( $setArray ) ? $setArray : array();
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

$text .= '<!-- Header area: START -->
<header class="header-main">
  
  <div class="container">
    <button type="button" class="btn hamburger-btn" aria-label="Toggle navigation">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
        <path d="M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z"></path>
      </svg>
    </button>
    <a href="/" class="brand-logo">
      Hacker News <span class="text-accent">Delta</span>
    </a>

    ';
$oldRestoreIncludeArray_021b56eec2e59f8a307ae23ba9b5d278 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/dropdown-c51525181fb826cad0f6f63a7012ccd8.php' ) && filemtime( 'var/site/cache/template/compiled/dropdown-c51525181fb826cad0f6f63a7012ccd8.php' ) > filemtime( 'design/clone/templates/menu/dropdown.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/clone/templates/menu/dropdown.tpl' );
include( '' . 'var/site/cache/template/compiled/dropdown-c51525181fb826cad0f6f63a7012ccd8.php' );
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
$tpl->processURI( 'design/clone/templates/menu/dropdown.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_021b56eec2e59f8a307ae23ba9b5d278;

$text .= '  </div>

</header>
<!-- Header area: END -->';

$setArray = $oldSetArray_c2e1ef7db01258e1af60260e08b929c8;
$tpl->Level--;
?>
