<?php
// URI:       design:popupmenu/ownercontextmenu.tpl
// Filename:  extension/ezownerchange/design/standard/templates/popupmenu/ownercontextmenu.tpl
// Timestamp: 1721521321 (Sat Jul 20 17:22:01 PDT 2024)
$oldSetArray_23fe6fda16b24b306eb36362cf142eea = isset( $setArray ) ? $setArray : array();
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

$text .= ' 
<script type="text/javascript">
menuArray[\'ContextMenu\'][\'elements\'][\'menu-change-owner\'] = new Array();
menuArray[\'ContextMenu\'][\'elements\'][\'menu-change-owner\'][\'url\'] = "/owner/change/%objectID%";
</script>
<hr/>
<a id="menu-change-owner" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' );">Change owner</a>';
}


$setArray = $oldSetArray_23fe6fda16b24b306eb36362cf142eea;
$tpl->Level--;
?>
