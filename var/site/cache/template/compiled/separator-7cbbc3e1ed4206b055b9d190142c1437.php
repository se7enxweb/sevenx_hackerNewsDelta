<?php
// URI:       design:content/datatype/view/ezxmltags/separator.tpl
// Filename:  extension/ezwebin/design/ezwebin/templates/content/datatype/view/ezxmltags/separator.tpl
// Timestamp: 1706506832 (Sun Jan 28 21:40:32 PST 2024)
$oldSetArray_6bba9a4c81c14ae31737ddb54f3bdd92 = isset( $setArray ) ? $setArray : array();
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

$setArray = $oldSetArray_6bba9a4c81c14ae31737ddb54f3bdd92;
$tpl->Level--;
?>
