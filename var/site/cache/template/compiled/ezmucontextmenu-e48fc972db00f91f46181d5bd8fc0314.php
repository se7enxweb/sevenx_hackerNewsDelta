<?php
// URI:       design:node/ezmucontextmenu.tpl
// Filename:  extension/ezmultiupload/design/standard/templates/node/ezmucontextmenu.tpl
// Timestamp: 1706515858 (Mon Jan 29 0:10:58 PST 2024)
$oldSetArray_7765986e1f1ab1fc4e8b19ac26f59f57 = isset( $setArray ) ? $setArray : array();
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
<hr/>
<script type="text/javascript">
menuArray[\'ContextMenu\'][\'elements\'][\'menu-multiupload\'] = new Array();
menuArray[\'ContextMenu\'][\'elements\'][\'menu-multiupload\'][\'url\'] = "/ezmultiupload/upload/%nodeID%";
</script>

<a id="menu-multiupload" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )" >Upload multiple files</a>';

$setArray = $oldSetArray_7765986e1f1ab1fc4e8b19ac26f59f57;
$tpl->Level--;
?>
