<?php
// URI:       design:popupmenu/classsubitemscontextmenu.tpl
// Filename:  extension/ezchangeclass/design/admin/templates/popupmenu/classsubitemscontextmenu.tpl
// Timestamp: 1727171039 (Tue Sep 24 2:43:59 PDT 2024)
$oldSetArray_001b4400d51f4f9b5bc2b6ba0c0798e3 = isset( $setArray ) ? $setArray : array();
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

$text .= ' <hr/>
    <a id="menu-class-change" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )"
       onclick="ezpopmenu_submitForm( \'menu-form-class-change-sub\' ); return false;">Change content class</a>


<form id="menu-form-class-change-sub" method="post" action="/changeclass/action">
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ObjectID" value="%objectID%" />
  <input type="hidden" name="SelectSourceObjectButton" value="submit" />
</form>
';

$setArray = $oldSetArray_001b4400d51f4f9b5bc2b6ba0c0798e3;
$tpl->Level--;
?>
