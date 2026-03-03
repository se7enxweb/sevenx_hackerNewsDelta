<?php
// URI:       design:popupmenu/ownersubitemscontextmenu.tpl
// Filename:  extension/ezownerchange/design/standard/templates/popupmenu/ownersubitemscontextmenu.tpl
// Timestamp: 1721521321 (Sat Jul 20 17:22:01 PDT 2024)
$oldSetArray_19fec935ff18251639741234f3dc3970 = isset( $setArray ) ? $setArray : array();
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

unset( $show );
$show = call_user_func_array( array( new eZUserFunctionCollection(), 'hasAccessTo' ),
  array_values( array(     'module' => "owner",
    'function' => "all",
    'user_id' => null ) ) );
$show = isset( $show['result'] ) ? $show['result'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '<script type="text/javascript">
menuArray[\'SubitemsContextMenu\'][\'elements\'][\'child-menu-change-owner\'] = new Array();
menuArray[\'SubitemsContextMenu\'][\'elements\'][\'child-menu-change-owner\'][\'url\'] = "/owner/change/%objectID%";
</script>
<hr/>
<a id="child-menu-change-owner" href="#" onmouseover="ezpopmenu_mouseOver( \'SubitemsContextMenu\' );">Change owner</a>';
}


$setArray = $oldSetArray_19fec935ff18251639741234f3dc3970;
$tpl->Level--;
?>
