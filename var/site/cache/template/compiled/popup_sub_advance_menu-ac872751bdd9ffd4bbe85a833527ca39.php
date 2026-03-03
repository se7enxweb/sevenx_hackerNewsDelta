<?php
// URI:       design/admin/templates/popupmenu/popup_sub_advance_menu.tpl
// Filename:  design/admin/templates/popupmenu/popup_sub_advance_menu.tpl
// Timestamp: 1768752117 (Sun Jan 18 8:01:57 PST 2026)
$oldSetArray_fa37d244d7dab3e0ae0286a559b27c27 = isset( $setArray ) ? $setArray : array();
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

$text .= '<!-- Advanced menu -->
<script type="text/javascript">
menuArray[\'Advanced\'] = { \'depth\': 1 };
menuArray[\'Advanced\'][\'elements\'] = {};
menuArray[\'Advanced\'][\'elements\'][\'menu-hide\'] = { \'url\': "/content/hide/%nodeID%" };
menuArray[\'Advanced\'][\'elements\'][\'menu-list\'] = { \'url\': "/content/view/sitemap/%nodeID%" };
menuArray[\'Advanced\'][\'elements\'][\'reverse-related\'] = { \'url\': "/content/reverserelatedlist/%nodeID%" };
menuArray[\'Advanced\'][\'elements\'][\'menu-history\'] = { \'url\': "/content/history/%objectID%" };
menuArray[\'Advanced\'][\'elements\'][\'menu-url-alias\'] = { \'url\': "/content/urlalias/%nodeID%" };
</script>

<div class="popupmenu" id="Advanced">
    <a id="menu-swap" href="#" onmouseover="ezpopmenu_mouseOver( \'Advanced\' )" onclick="ezpopmenu_submitForm( \'menu-form-swap\' ); return false;">Swap with another node</a>
    <a id="menu-hide" href="#" onmouseover="ezpopmenu_mouseOver( \'Advanced\' )">Hide / unhide</a>
    <hr />
    <a id="menu-list" href="#" onmouseover="ezpopmenu_mouseOver( \'Advanced\' )">Sitemap for subtree</a>
    <a id="reverse-related" href="#" onmouseover="ezpopmenu_mouseOver( \'Advanced\' )">Reverse related for subtree</a>
    <hr />
    <a id="menu-history" href="#" onmouseover="ezpopmenu_mouseOver( \'Advanced\' )">Manage versions</a>
    <a id="menu-url-alias" href="#" onmouseover="ezpopmenu_mouseOver( \'Advanced\' )">Manage URL aliases</a>

    
    ';
// foreach begins
$skipDelimiter = true;
$fe_array_5a40b38520ba97ac5aa4aedba172886c_40 = [];
$fe_array_keys_5a40b38520ba97ac5aa4aedba172886c_40 = [];
$fe_n_items_5a40b38520ba97ac5aa4aedba172886c_40 = 0;
$fe_n_items_processed_5a40b38520ba97ac5aa4aedba172886c_40  = 0;
$fe_i_5a40b38520ba97ac5aa4aedba172886c_40 = 0;
$fe_key_5a40b38520ba97ac5aa4aedba172886c_40 = 0;
$fe_val_5a40b38520ba97ac5aa4aedba172886c_40 = 0;
$fe_offset_5a40b38520ba97ac5aa4aedba172886c_40 = 0;
$fe_max_5a40b38520ba97ac5aa4aedba172886c_40 = 0;
$fe_reverse_5a40b38520ba97ac5aa4aedba172886c_40 = 0;
$fe_first_val_5a40b38520ba97ac5aa4aedba172886c_40 = 0;
$fe_last_val_5a40b38520ba97ac5aa4aedba172886c_40 = 0;
if ( !isset( $fe_variable_stack_5a40b38520ba97ac5aa4aedba172886c_40 ) ) $fe_variable_stack_5a40b38520ba97ac5aa4aedba172886c_40 = [];
$fe_variable_stack_5a40b38520ba97ac5aa4aedba172886c_40[] = @compact( 'fe_array_5a40b38520ba97ac5aa4aedba172886c_40', 'fe_array_keys_5a40b38520ba97ac5aa4aedba172886c_40', 'fe_n_items_5a40b38520ba97ac5aa4aedba172886c_40', 'fe_n_items_processed_5a40b38520ba97ac5aa4aedba172886c_40', 'fe_i_5a40b38520ba97ac5aa4aedba172886c_40', 'fe_key_5a40b38520ba97ac5aa4aedba172886c_40', 'fe_val_5a40b38520ba97ac5aa4aedba172886c_40', 'fe_offset_5a40b38520ba97ac5aa4aedba172886c_40', 'fe_max_5a40b38520ba97ac5aa4aedba172886c_40', 'fe_reverse_5a40b38520ba97ac5aa4aedba172886c_40', 'fe_first_val_5a40b38520ba97ac5aa4aedba172886c_40', 'fe_last_val_5a40b38520ba97ac5aa4aedba172886c_40' );
$fe_array_5a40b38520ba97ac5aa4aedba172886c_40 = array (
);
$fe_array_keys_5a40b38520ba97ac5aa4aedba172886c_40 = is_array( $fe_array_5a40b38520ba97ac5aa4aedba172886c_40 ) ? array_keys( $fe_array_5a40b38520ba97ac5aa4aedba172886c_40 ) : [];
$fe_n_items_5a40b38520ba97ac5aa4aedba172886c_40 = count( $fe_array_keys_5a40b38520ba97ac5aa4aedba172886c_40 );
$fe_n_items_processed_5a40b38520ba97ac5aa4aedba172886c_40 = 0;
$fe_offset_5a40b38520ba97ac5aa4aedba172886c_40 = 0;
$fe_max_5a40b38520ba97ac5aa4aedba172886c_40 = $fe_n_items_5a40b38520ba97ac5aa4aedba172886c_40 - $fe_offset_5a40b38520ba97ac5aa4aedba172886c_40;
$fe_reverse_5a40b38520ba97ac5aa4aedba172886c_40 = false;
if ( $fe_offset_5a40b38520ba97ac5aa4aedba172886c_40 < 0 || $fe_offset_5a40b38520ba97ac5aa4aedba172886c_40 >= $fe_n_items_5a40b38520ba97ac5aa4aedba172886c_40 )
{
    $fe_offset_5a40b38520ba97ac5aa4aedba172886c_40 = ( $fe_offset_5a40b38520ba97ac5aa4aedba172886c_40 < 0 ) ? 0 : $fe_n_items_5a40b38520ba97ac5aa4aedba172886c_40;
    if ( $fe_n_items_5a40b38520ba97ac5aa4aedba172886c_40 || $fe_offset_5a40b38520ba97ac5aa4aedba172886c_40 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_5a40b38520ba97ac5aa4aedba172886c_40'. Array count: $fe_n_items_5a40b38520ba97ac5aa4aedba172886c_40");   
}
}
if ( $fe_max_5a40b38520ba97ac5aa4aedba172886c_40 < 0 || $fe_offset_5a40b38520ba97ac5aa4aedba172886c_40 + $fe_max_5a40b38520ba97ac5aa4aedba172886c_40 > $fe_n_items_5a40b38520ba97ac5aa4aedba172886c_40 )
{
    if ( $fe_max_5a40b38520ba97ac5aa4aedba172886c_40 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_5a40b38520ba97ac5aa4aedba172886c_40");
    $fe_max_5a40b38520ba97ac5aa4aedba172886c_40 = $fe_n_items_5a40b38520ba97ac5aa4aedba172886c_40 - $fe_offset_5a40b38520ba97ac5aa4aedba172886c_40;
}
if ( $fe_reverse_5a40b38520ba97ac5aa4aedba172886c_40 )
{
    $fe_first_val_5a40b38520ba97ac5aa4aedba172886c_40 = $fe_n_items_5a40b38520ba97ac5aa4aedba172886c_40 - 1 - $fe_offset_5a40b38520ba97ac5aa4aedba172886c_40;
    $fe_last_val_5a40b38520ba97ac5aa4aedba172886c_40  = 0;
}
else
{
    $fe_first_val_5a40b38520ba97ac5aa4aedba172886c_40 = $fe_offset_5a40b38520ba97ac5aa4aedba172886c_40;
    $fe_last_val_5a40b38520ba97ac5aa4aedba172886c_40  = $fe_n_items_5a40b38520ba97ac5aa4aedba172886c_40 - 1;
}
// foreach
for ( $fe_i_5a40b38520ba97ac5aa4aedba172886c_40 = $fe_first_val_5a40b38520ba97ac5aa4aedba172886c_40; $fe_n_items_processed_5a40b38520ba97ac5aa4aedba172886c_40 < $fe_max_5a40b38520ba97ac5aa4aedba172886c_40 && ( $fe_reverse_5a40b38520ba97ac5aa4aedba172886c_40 ? $fe_i_5a40b38520ba97ac5aa4aedba172886c_40 >= $fe_last_val_5a40b38520ba97ac5aa4aedba172886c_40 : $fe_i_5a40b38520ba97ac5aa4aedba172886c_40 <= $fe_last_val_5a40b38520ba97ac5aa4aedba172886c_40 ); $fe_reverse_5a40b38520ba97ac5aa4aedba172886c_40 ? $fe_i_5a40b38520ba97ac5aa4aedba172886c_40-- : $fe_i_5a40b38520ba97ac5aa4aedba172886c_40++ )
{
$fe_key_5a40b38520ba97ac5aa4aedba172886c_40 = $fe_array_keys_5a40b38520ba97ac5aa4aedba172886c_40[$fe_i_5a40b38520ba97ac5aa4aedba172886c_40];
$fe_val_5a40b38520ba97ac5aa4aedba172886c_40 = $fe_array_5a40b38520ba97ac5aa4aedba172886c_40[$fe_key_5a40b38520ba97ac5aa4aedba172886c_40];
$vars[$rootNamespace]['template'] = $fe_val_5a40b38520ba97ac5aa4aedba172886c_40;
$text .= '        ';
$textElements = array();
$tpl->processFunction( 'include', $textElements,
                       false,
                       array (
  'uri' => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'concat',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'design:',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'template',
            ),
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 24,
    1 => 8,
    2 => 1930,
  ),
  1 => 
  array (
    0 => 24,
    1 => 49,
    2 => 1971,
  ),
  2 => 'design/admin/templates/popupmenu/popup_sub_advance_menu.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    ';
$fe_n_items_processed_5a40b38520ba97ac5aa4aedba172886c_40++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_5a40b38520ba97ac5aa4aedba172886c_40 ) ) extract( array_pop( $fe_variable_stack_5a40b38520ba97ac5aa4aedba172886c_40 ) );

else
{

unset( $fe_array_5a40b38520ba97ac5aa4aedba172886c_40 );

unset( $fe_array_keys_5a40b38520ba97ac5aa4aedba172886c_40 );

unset( $fe_n_items_5a40b38520ba97ac5aa4aedba172886c_40 );

unset( $fe_n_items_processed_5a40b38520ba97ac5aa4aedba172886c_40 );

unset( $fe_i_5a40b38520ba97ac5aa4aedba172886c_40 );

unset( $fe_key_5a40b38520ba97ac5aa4aedba172886c_40 );

unset( $fe_val_5a40b38520ba97ac5aa4aedba172886c_40 );

unset( $fe_offset_5a40b38520ba97ac5aa4aedba172886c_40 );

unset( $fe_max_5a40b38520ba97ac5aa4aedba172886c_40 );

unset( $fe_reverse_5a40b38520ba97ac5aa4aedba172886c_40 );

unset( $fe_first_val_5a40b38520ba97ac5aa4aedba172886c_40 );

unset( $fe_last_val_5a40b38520ba97ac5aa4aedba172886c_40 );

unset( $fe_variable_stack_5a40b38520ba97ac5aa4aedba172886c_40 );

}

// foreach ends
$text .= '</div>


<form id="menu-form-swap" method="post" action="/content/action">
  <input type="hidden" name="TopLevelNode" value="%nodeID%" />
  <input type="hidden" name="ContentNodeID" value="%nodeID%" />
  <input type="hidden" name="ContentObjectID" value="%objectID%" />
  <input type="hidden" name="SwapNodeButton" value="x" />
</form>';

$setArray = $oldSetArray_fa37d244d7dab3e0ae0286a559b27c27;
$tpl->Level--;
?>
