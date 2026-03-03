<?php
// URI:       design:content/datatype/view/ezxmltags/separator.tpl
// Filename:  extension/ezwebin/design/ezwebin/templates/content/datatype/view/ezxmltags/separator.tpl
// Timestamp: 1772547739 (Tue Mar 3 6:22:19 PST 2026)
$oldSetArray_4c734e09185889ce1173e078ead90c87 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="separator">
    <div class="separator-design"></div>
</div>';

$setArray = $oldSetArray_4c734e09185889ce1173e078ead90c87;
$tpl->Level--;
?>
