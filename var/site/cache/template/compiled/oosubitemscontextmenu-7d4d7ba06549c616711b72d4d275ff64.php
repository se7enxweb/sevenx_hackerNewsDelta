<?php
// URI:       design:node/oosubitemscontextmenu.tpl
// Filename:  extension/ezodf/design/standard/templates/node/oosubitemscontextmenu.tpl
// Timestamp: 1706516256 (Mon Jan 29 0:17:36 PST 2024)
$oldSetArray_c4ba017612f4d65491fb653365dac33a = isset( $setArray ) ? $setArray : array();
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

$text .= '<script type="text/javascript">
menuArray[\'OpenOffice\'] = [];
menuArray[\'OpenOffice\'][\'depth\'] = 1;
menuArray[\'OpenOffice\'][\'elements\'] = [];
</script>

<hr />
<a id="child-menu-openoffice" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'OpenOffice\', \'child-menu-openoffice\' ); return false;">OpenOffice.org</a>

';

$setArray = $oldSetArray_c4ba017612f4d65491fb653365dac33a;
$tpl->Level--;
?>
