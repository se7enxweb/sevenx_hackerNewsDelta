<?php
// URI:       design/standard/templates/page_copyright.tpl
// Filename:  design/standard/templates/page_copyright.tpl
// Timestamp: 1768752118 (Sun Jan 18 8:01:58 PST 2026)
$oldSetArray_accb5dc6931a0b9058de36e7bd93958a = isset( $setArray ) ? $setArray : array();
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

$text .= '
<address>
Powered by <a href="https://exponential.earth" title="Exponential CMS Open Source Web Content Management">Exponential CMS Open Source Web Content Management</a>. Copyright &copy; 1999-2025 <a href="https://se7enx.com" title="7x">7x</a> (except where otherwise noted). All rights reserved.
</address>';

$setArray = $oldSetArray_accb5dc6931a0b9058de36e7bd93958a;
$tpl->Level--;
?>
