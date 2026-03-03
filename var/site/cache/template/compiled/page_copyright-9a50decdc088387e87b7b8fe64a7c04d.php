<?php
// URI:       design/admin/templates/page_copyright.tpl
// Filename:  design/admin/templates/page_copyright.tpl
// Timestamp: 1768752117 (Sun Jan 18 8:01:57 PST 2026)
$oldSetArray_6ca8facfc677a6daed263ff439908acf = isset( $setArray ) ? $setArray : array();
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
$var = strtr( 'Powered by <span class="edition-info">%edition</span>. For more information see <a href=%about_link>ezinfo/about</a>.', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</p>
<p>
';
unset( $var );
$var3 = array();
foreach ( array (
  '%ezpublish_link' => 'https://se7enx.com/Exponential',
  '%ez_link' => 'https://se7enx.com',
) as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( '<a href="%ezpublish_link">Exponential</a> Copyright &copy; 1998-2025 <a href="%ez_link">7x</a> and others.', $var3 );
unset( $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
</p>
<p>
';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var5 );
$var5 = call_user_func_array( array( new eZSetupFunctionCollection(), 'fetchFullVersionString' ),
  array_values( array(  ) ) );
$var5 = isset( $var5['result'] ) ? $var5['result'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var3 = ( 'https://share.exponential.earth?utm_content=Exponential+Community+Project+' . $var5 . '&utm_source=Exponential+Community+Project+Dashboard&utm_medium=Exponential+Community+Project+Dashboard&utm_campaign=Exponential+Community+Project+Dashboard' );
unset( $var5 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%evaluate_link' => "https://se7enx.com", '%share_link' => $var3 );unset( $var3 );
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
$var = strtr( '<a href="%evaluate_link">Evaluate Exponential (From 7x)</a> - <a href="%share_link">Become a member of the Exponential Community, get support and contribute</a>.', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
</p>
';

$setArray = $oldSetArray_6ca8facfc677a6daed263ff439908acf;
$tpl->Level--;
?>
