<?php
// URI:       design:content/datatype/view/ezxmltags/underline.tpl
// Filename:  extension/ezoe/design/standard/templates/content/datatype/view/ezxmltags/underline.tpl
// Timestamp: 1729308177 (Fri Oct 18 20:22:57 PDT 2024)
$oldSetArray_1450a29ce54b8ae24a04348c83d3e97f = isset( $setArray ) ? $setArray : array();
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

$text .= '<u>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</u>';

$setArray = $oldSetArray_1450a29ce54b8ae24a04348c83d3e97f;
$tpl->Level--;
?>
