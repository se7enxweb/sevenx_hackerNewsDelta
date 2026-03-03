<?php
// URI:       design:popupmenu/classcontextmenu.tpl
// Filename:  extension/ezchangeclass/design/admin/templates/popupmenu/classcontextmenu.tpl
// Timestamp: 1727171039 (Tue Sep 24 2:43:59 PDT 2024)
$oldSetArray_ba97fab9fa27b8878c6d31351d85160f = isset( $setArray ) ? $setArray : array();
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
       onclick="ezpopmenu_submitForm( \'menu-form-class-change\' ); return false;">Change content class</a>


<form id="menu-form-class-change" method="post" action="/changeclass/action">
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ObjectID" value="%objectID%" />
  <input type="hidden" name="SelectSourceObjectButton" value="submit" />
</form>
';

$setArray = $oldSetArray_ba97fab9fa27b8878c6d31351d85160f;
$tpl->Level--;
?>
