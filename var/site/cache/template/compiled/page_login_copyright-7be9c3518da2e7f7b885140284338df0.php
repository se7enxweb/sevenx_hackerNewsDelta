<?php
// URI:       design/admin/templates/page_login_copyright.tpl
// Filename:  design/admin/templates/page_login_copyright.tpl
// Timestamp: 1768752117 (Sun Jan 18 8:01:57 PST 2026)
$oldSetArray_82e61b4b22e00f7fb858a4f155e7a0d3 = isset( $setArray ) ? $setArray : array();
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
<p>
';
unset( $var );
$var3 = array();
foreach ( array (
  '%evaluate_link' => 'https://se7enx.com',
  '%share_link' => 'https://share.exponential.earth',
  '%ezpublish_link' => 'https://exponential.se7enx.com',
  '%7x_link' => 'https://se7enx.com',
) as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( ' <a href="%ezpublish_link">Exponential</a> Copyright &copy; 1998-2025 <a href="%7x_link">7x</a> and others.', $var3 );
unset( $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

unset( $var );
unset( $var2 );
unset( $var3 );
$var3 = call_user_func_array( array( new eZSetupFunctionCollection(), 'fetchEdition' ),
  array_values( array(  ) ) );
$var3 = isset( $var3['result'] ) ? $var3['result'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%edition' => $var3, '%about_link' => "\"/ezinfo/about\"" );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var3 = array();
foreach ( $var2 as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( '<p>For more information see <a href=%about_link>ezinfo/about</a>.</p>', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
</p>';

$setArray = $oldSetArray_82e61b4b22e00f7fb858a4f155e7a0d3;
$tpl->Level--;
?>
