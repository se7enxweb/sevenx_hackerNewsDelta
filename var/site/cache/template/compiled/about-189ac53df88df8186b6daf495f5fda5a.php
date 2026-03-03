<?php
// URI:       design:ezinfo/about.tpl
// Filename:  design/delta/templates/ezinfo/about.tpl
// Timestamp: 1768856486 (Mon Jan 19 13:01:26 PST 2026)
$oldSetArray_c4800b772c0793203f814bbd2889d2b9 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="container-xxl py-5">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center">
        <h1>
          ';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ezinfo', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ezinfo'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = array( '%version' => $var4 );unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var4 = array();
foreach ( $var3 as $var5 => $var6 )
{
  if ( is_int( $var5 ) )
    $var4['%' . ( ($var5%9) + 1 )] = $var6;
  else
    $var4[$var5] = $var6;
}
$var1 = strtr( 'eZ Publish information: %version', $var4 );
unset( $var3, $var4, $var5, $var6 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( (string) $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
        </h1>
        
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <h2 class="h3 mb-4">eZ Publish</h2>
        <div class="row g-3">
          <div class="col-12">
            <h3 class="h4 mb-4">
              What is eZ Publish?
            </h3>
            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'what_is_ez_publish', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['what_is_ez_publish'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '              <div>';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'what_is_ez_publish', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['what_is_ez_publish'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
{
	$var1 = explode( "<p>", $var2 );
}
else if ( is_array( $var2 ) )
{
	$var1 = array( array_slice( $var2, 0, "<p>" ), array_slice( $var2, "<p>" ) );
}
else
{
	$var1 = null;
}
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( "<p class=\"mb-4\">", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</div>
            ';
}
unset( $if_cond );
// if ends

$text .= '          </div>
          <div class="col-12">
            <h3 class="h4 mb-4">
              Licence
            </h3>
            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'license', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['license'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '              <div class="overflow-auto" style="height: 320px;">';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'license', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['license'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
{
	$var1 = explode( "\n", $var2 );
}
else if ( is_array( $var2 ) )
{
	$var1 = array( array_slice( $var2, 0, "\n" ), array_slice( $var2, "\n" ) );
}
else
{
	$var1 = null;
}
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( "<br>", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</div>
            ';
}
unset( $if_cond );
// if ends

$text .= '          </div>
          ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contributors', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contributors'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contributors', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contributors'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = is_array( $if_cond3 );unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond4 );
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond4Data = array( 'value' => $if_cond4 );
$tpl->processOperator( 'count',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'contributors',
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $if_cond4Data, false, false );
$if_cond4 = $if_cond4Data['value'];
unset( $if_cond4Data );
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond3 = ( ( $if_cond4 ) >= ( 1 ) );
unset( $if_cond4 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else if ( !$if_cond3 )
    $if_cond = false;
else
    $if_cond = $if_cond3;
unset( $if_cond1, $if_cond2, $if_cond3 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <div class="col-12">
              <h3 class="h4 mb-4">
                Contributors
              </h3>
              <div>
                <p class="mb-4">
                  The following is a list of <a href="http://ez.no/ezpublish" class="break-all">eZ Publish</a>
                  contributors who
                  have licensed their work for use by <a href="http://ez.no/" class="break-all">eZ Systems AS</a> under
                  the
                  terms and conditions of
                  the eZ Contributor Licensing Agreement. As permitted by this agreement with the contributors, <a
                    href="http://ez.no/">eZ Systems AS</a> is redistributing the
                  contribution under the same license as the file that the contribution is included in. The list of
                  contributors
                  includes the contributors&apos;s
                  name, optional contact info and a list of files that they have either contributed or contributed work
                  to.
                </p>
              </div>
              <ul>
                ';
// foreach begins
$skipDelimiter = true;
$fe_array_57f8b0a009f17d116a713f00cb6d8748_1 = [];
$fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_1 = [];
$fe_n_items_57f8b0a009f17d116a713f00cb6d8748_1 = 0;
$fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_1  = 0;
$fe_i_57f8b0a009f17d116a713f00cb6d8748_1 = 0;
$fe_key_57f8b0a009f17d116a713f00cb6d8748_1 = 0;
$fe_val_57f8b0a009f17d116a713f00cb6d8748_1 = 0;
$fe_offset_57f8b0a009f17d116a713f00cb6d8748_1 = 0;
$fe_max_57f8b0a009f17d116a713f00cb6d8748_1 = 0;
$fe_reverse_57f8b0a009f17d116a713f00cb6d8748_1 = 0;
$fe_first_val_57f8b0a009f17d116a713f00cb6d8748_1 = 0;
$fe_last_val_57f8b0a009f17d116a713f00cb6d8748_1 = 0;
if ( !isset( $fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_1 ) ) $fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_1 = [];
$fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_1[] = @compact( 'fe_array_57f8b0a009f17d116a713f00cb6d8748_1', 'fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_1', 'fe_n_items_57f8b0a009f17d116a713f00cb6d8748_1', 'fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_1', 'fe_i_57f8b0a009f17d116a713f00cb6d8748_1', 'fe_key_57f8b0a009f17d116a713f00cb6d8748_1', 'fe_val_57f8b0a009f17d116a713f00cb6d8748_1', 'fe_offset_57f8b0a009f17d116a713f00cb6d8748_1', 'fe_max_57f8b0a009f17d116a713f00cb6d8748_1', 'fe_reverse_57f8b0a009f17d116a713f00cb6d8748_1', 'fe_first_val_57f8b0a009f17d116a713f00cb6d8748_1', 'fe_last_val_57f8b0a009f17d116a713f00cb6d8748_1' );
unset( $fe_array_57f8b0a009f17d116a713f00cb6d8748_1 );
unset( $fe_array_57f8b0a009f17d116a713f00cb6d8748_1 );
$fe_array_57f8b0a009f17d116a713f00cb6d8748_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contributors', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contributors'] : null;
if (! isset( $fe_array_57f8b0a009f17d116a713f00cb6d8748_1 ) ) $fe_array_57f8b0a009f17d116a713f00cb6d8748_1 = NULL;
while ( is_object( $fe_array_57f8b0a009f17d116a713f00cb6d8748_1 ) and method_exists( $fe_array_57f8b0a009f17d116a713f00cb6d8748_1, 'templateValue' ) )
    $fe_array_57f8b0a009f17d116a713f00cb6d8748_1 = $fe_array_57f8b0a009f17d116a713f00cb6d8748_1->templateValue();

$fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_1 = is_array( $fe_array_57f8b0a009f17d116a713f00cb6d8748_1 ) ? array_keys( $fe_array_57f8b0a009f17d116a713f00cb6d8748_1 ) : [];
$fe_n_items_57f8b0a009f17d116a713f00cb6d8748_1 = count( $fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_1 );
$fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_1 = 0;
$fe_offset_57f8b0a009f17d116a713f00cb6d8748_1 = 0;
$fe_max_57f8b0a009f17d116a713f00cb6d8748_1 = $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_1 - $fe_offset_57f8b0a009f17d116a713f00cb6d8748_1;
$fe_reverse_57f8b0a009f17d116a713f00cb6d8748_1 = false;
if ( $fe_offset_57f8b0a009f17d116a713f00cb6d8748_1 < 0 || $fe_offset_57f8b0a009f17d116a713f00cb6d8748_1 >= $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_1 )
{
    $fe_offset_57f8b0a009f17d116a713f00cb6d8748_1 = ( $fe_offset_57f8b0a009f17d116a713f00cb6d8748_1 < 0 ) ? 0 : $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_1;
    if ( $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_1 || $fe_offset_57f8b0a009f17d116a713f00cb6d8748_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_57f8b0a009f17d116a713f00cb6d8748_1'. Array count: $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_1");   
}
}
if ( $fe_max_57f8b0a009f17d116a713f00cb6d8748_1 < 0 || $fe_offset_57f8b0a009f17d116a713f00cb6d8748_1 + $fe_max_57f8b0a009f17d116a713f00cb6d8748_1 > $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_1 )
{
    if ( $fe_max_57f8b0a009f17d116a713f00cb6d8748_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_57f8b0a009f17d116a713f00cb6d8748_1");
    $fe_max_57f8b0a009f17d116a713f00cb6d8748_1 = $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_1 - $fe_offset_57f8b0a009f17d116a713f00cb6d8748_1;
}
if ( $fe_reverse_57f8b0a009f17d116a713f00cb6d8748_1 )
{
    $fe_first_val_57f8b0a009f17d116a713f00cb6d8748_1 = $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_1 - 1 - $fe_offset_57f8b0a009f17d116a713f00cb6d8748_1;
    $fe_last_val_57f8b0a009f17d116a713f00cb6d8748_1  = 0;
}
else
{
    $fe_first_val_57f8b0a009f17d116a713f00cb6d8748_1 = $fe_offset_57f8b0a009f17d116a713f00cb6d8748_1;
    $fe_last_val_57f8b0a009f17d116a713f00cb6d8748_1  = $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_1 - 1;
}
// foreach
for ( $fe_i_57f8b0a009f17d116a713f00cb6d8748_1 = $fe_first_val_57f8b0a009f17d116a713f00cb6d8748_1; $fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_1 < $fe_max_57f8b0a009f17d116a713f00cb6d8748_1 && ( $fe_reverse_57f8b0a009f17d116a713f00cb6d8748_1 ? $fe_i_57f8b0a009f17d116a713f00cb6d8748_1 >= $fe_last_val_57f8b0a009f17d116a713f00cb6d8748_1 : $fe_i_57f8b0a009f17d116a713f00cb6d8748_1 <= $fe_last_val_57f8b0a009f17d116a713f00cb6d8748_1 ); $fe_reverse_57f8b0a009f17d116a713f00cb6d8748_1 ? $fe_i_57f8b0a009f17d116a713f00cb6d8748_1-- : $fe_i_57f8b0a009f17d116a713f00cb6d8748_1++ )
{
$fe_key_57f8b0a009f17d116a713f00cb6d8748_1 = $fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_1[$fe_i_57f8b0a009f17d116a713f00cb6d8748_1];
$fe_val_57f8b0a009f17d116a713f00cb6d8748_1 = $fe_array_57f8b0a009f17d116a713f00cb6d8748_1[$fe_key_57f8b0a009f17d116a713f00cb6d8748_1];
$vars[$rootNamespace]['contributor'] = $fe_val_57f8b0a009f17d116a713f00cb6d8748_1;
$text .= '                  <li>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contributor', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contributor'] : null;
$var2 = compiledFetchAttribute( $var1, 'name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( (string) $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' : ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contributor', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contributor'] : null;
$var2 = compiledFetchAttribute( $var1, 'files' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( (string) $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</li>
                ';
$fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_1 ) ) extract( array_pop( $fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_1 ) );

else
{

unset( $fe_array_57f8b0a009f17d116a713f00cb6d8748_1 );

unset( $fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_1 );

unset( $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_1 );

unset( $fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_1 );

unset( $fe_i_57f8b0a009f17d116a713f00cb6d8748_1 );

unset( $fe_key_57f8b0a009f17d116a713f00cb6d8748_1 );

unset( $fe_val_57f8b0a009f17d116a713f00cb6d8748_1 );

unset( $fe_offset_57f8b0a009f17d116a713f00cb6d8748_1 );

unset( $fe_max_57f8b0a009f17d116a713f00cb6d8748_1 );

unset( $fe_reverse_57f8b0a009f17d116a713f00cb6d8748_1 );

unset( $fe_first_val_57f8b0a009f17d116a713f00cb6d8748_1 );

unset( $fe_last_val_57f8b0a009f17d116a713f00cb6d8748_1 );

unset( $fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_1 );

}

// foreach ends
$text .= '              </ul>
            </div>
          ';
}
unset( $if_cond );
// if ends

$text .= '          <div class="col-12">
            <h3 class="h4 mb-4">
              Copyright Notice
            </h3>
            <div>
              <p class="mb-4">
                Copyright &copy; 1999-2014 <a href="http://ez.no/" class="break-all">eZ Systems AS</a>, with portions
                copyright by other parties. A complete list of all contributors and third-party
                software follows.
              </p>
            </div>
          </div>
          ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'third_party_software', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['third_party_software'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'third_party_software', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['third_party_software'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = is_array( $if_cond3 );unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond4 );
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond4Data = array( 'value' => $if_cond4 );
$tpl->processOperator( 'count',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'third_party_software',
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $if_cond4Data, false, false );
$if_cond4 = $if_cond4Data['value'];
unset( $if_cond4Data );
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond3 = ( ( $if_cond4 ) >= ( 1 ) );
unset( $if_cond4 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else if ( !$if_cond3 )
    $if_cond = false;
else
    $if_cond = $if_cond3;
unset( $if_cond1, $if_cond2, $if_cond3 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <div class="col-12">
              <h3 class="h4 mb-4">
                Third-Party Software</h2>
              </h3>
              <div>
                <p class="mb-4">
                  The following is a list of the third-party software that is distributed with this copy of <a
                    href="http://ez.no/ezpublish" class="break-all">eZ Publish</a>. The list of third party
                  software includes the license for the software in question and the directory or files that contain the
                  third-party software.
                </p>
              </div>
              <ul>
                ';
// foreach begins
$skipDelimiter = true;
$fe_array_57f8b0a009f17d116a713f00cb6d8748_2 = [];
$fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_2 = [];
$fe_n_items_57f8b0a009f17d116a713f00cb6d8748_2 = 0;
$fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_2  = 0;
$fe_i_57f8b0a009f17d116a713f00cb6d8748_2 = 0;
$fe_key_57f8b0a009f17d116a713f00cb6d8748_2 = 0;
$fe_val_57f8b0a009f17d116a713f00cb6d8748_2 = 0;
$fe_offset_57f8b0a009f17d116a713f00cb6d8748_2 = 0;
$fe_max_57f8b0a009f17d116a713f00cb6d8748_2 = 0;
$fe_reverse_57f8b0a009f17d116a713f00cb6d8748_2 = 0;
$fe_first_val_57f8b0a009f17d116a713f00cb6d8748_2 = 0;
$fe_last_val_57f8b0a009f17d116a713f00cb6d8748_2 = 0;
if ( !isset( $fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_2 ) ) $fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_2 = [];
$fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_2[] = @compact( 'fe_array_57f8b0a009f17d116a713f00cb6d8748_2', 'fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_2', 'fe_n_items_57f8b0a009f17d116a713f00cb6d8748_2', 'fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_2', 'fe_i_57f8b0a009f17d116a713f00cb6d8748_2', 'fe_key_57f8b0a009f17d116a713f00cb6d8748_2', 'fe_val_57f8b0a009f17d116a713f00cb6d8748_2', 'fe_offset_57f8b0a009f17d116a713f00cb6d8748_2', 'fe_max_57f8b0a009f17d116a713f00cb6d8748_2', 'fe_reverse_57f8b0a009f17d116a713f00cb6d8748_2', 'fe_first_val_57f8b0a009f17d116a713f00cb6d8748_2', 'fe_last_val_57f8b0a009f17d116a713f00cb6d8748_2' );
unset( $fe_array_57f8b0a009f17d116a713f00cb6d8748_2 );
unset( $fe_array_57f8b0a009f17d116a713f00cb6d8748_2 );
$fe_array_57f8b0a009f17d116a713f00cb6d8748_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'third_party_software', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['third_party_software'] : null;
if (! isset( $fe_array_57f8b0a009f17d116a713f00cb6d8748_2 ) ) $fe_array_57f8b0a009f17d116a713f00cb6d8748_2 = NULL;
while ( is_object( $fe_array_57f8b0a009f17d116a713f00cb6d8748_2 ) and method_exists( $fe_array_57f8b0a009f17d116a713f00cb6d8748_2, 'templateValue' ) )
    $fe_array_57f8b0a009f17d116a713f00cb6d8748_2 = $fe_array_57f8b0a009f17d116a713f00cb6d8748_2->templateValue();

$fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_2 = is_array( $fe_array_57f8b0a009f17d116a713f00cb6d8748_2 ) ? array_keys( $fe_array_57f8b0a009f17d116a713f00cb6d8748_2 ) : [];
$fe_n_items_57f8b0a009f17d116a713f00cb6d8748_2 = count( $fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_2 );
$fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_2 = 0;
$fe_offset_57f8b0a009f17d116a713f00cb6d8748_2 = 0;
$fe_max_57f8b0a009f17d116a713f00cb6d8748_2 = $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_2 - $fe_offset_57f8b0a009f17d116a713f00cb6d8748_2;
$fe_reverse_57f8b0a009f17d116a713f00cb6d8748_2 = false;
if ( $fe_offset_57f8b0a009f17d116a713f00cb6d8748_2 < 0 || $fe_offset_57f8b0a009f17d116a713f00cb6d8748_2 >= $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_2 )
{
    $fe_offset_57f8b0a009f17d116a713f00cb6d8748_2 = ( $fe_offset_57f8b0a009f17d116a713f00cb6d8748_2 < 0 ) ? 0 : $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_2;
    if ( $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_2 || $fe_offset_57f8b0a009f17d116a713f00cb6d8748_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_57f8b0a009f17d116a713f00cb6d8748_2'. Array count: $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_2");   
}
}
if ( $fe_max_57f8b0a009f17d116a713f00cb6d8748_2 < 0 || $fe_offset_57f8b0a009f17d116a713f00cb6d8748_2 + $fe_max_57f8b0a009f17d116a713f00cb6d8748_2 > $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_2 )
{
    if ( $fe_max_57f8b0a009f17d116a713f00cb6d8748_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_57f8b0a009f17d116a713f00cb6d8748_2");
    $fe_max_57f8b0a009f17d116a713f00cb6d8748_2 = $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_2 - $fe_offset_57f8b0a009f17d116a713f00cb6d8748_2;
}
if ( $fe_reverse_57f8b0a009f17d116a713f00cb6d8748_2 )
{
    $fe_first_val_57f8b0a009f17d116a713f00cb6d8748_2 = $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_2 - 1 - $fe_offset_57f8b0a009f17d116a713f00cb6d8748_2;
    $fe_last_val_57f8b0a009f17d116a713f00cb6d8748_2  = 0;
}
else
{
    $fe_first_val_57f8b0a009f17d116a713f00cb6d8748_2 = $fe_offset_57f8b0a009f17d116a713f00cb6d8748_2;
    $fe_last_val_57f8b0a009f17d116a713f00cb6d8748_2  = $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_2 - 1;
}
// foreach
for ( $fe_i_57f8b0a009f17d116a713f00cb6d8748_2 = $fe_first_val_57f8b0a009f17d116a713f00cb6d8748_2; $fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_2 < $fe_max_57f8b0a009f17d116a713f00cb6d8748_2 && ( $fe_reverse_57f8b0a009f17d116a713f00cb6d8748_2 ? $fe_i_57f8b0a009f17d116a713f00cb6d8748_2 >= $fe_last_val_57f8b0a009f17d116a713f00cb6d8748_2 : $fe_i_57f8b0a009f17d116a713f00cb6d8748_2 <= $fe_last_val_57f8b0a009f17d116a713f00cb6d8748_2 ); $fe_reverse_57f8b0a009f17d116a713f00cb6d8748_2 ? $fe_i_57f8b0a009f17d116a713f00cb6d8748_2-- : $fe_i_57f8b0a009f17d116a713f00cb6d8748_2++ )
{
$fe_key_57f8b0a009f17d116a713f00cb6d8748_2 = $fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_2[$fe_i_57f8b0a009f17d116a713f00cb6d8748_2];
$fe_val_57f8b0a009f17d116a713f00cb6d8748_2 = $fe_array_57f8b0a009f17d116a713f00cb6d8748_2[$fe_key_57f8b0a009f17d116a713f00cb6d8748_2];
$vars[$rootNamespace]['software'] = $fe_val_57f8b0a009f17d116a713f00cb6d8748_2;
$vars[$rootNamespace]['software_key'] = $fe_key_57f8b0a009f17d116a713f00cb6d8748_2;
$text .= '                  <li>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'software', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['software'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( (string) $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</li>
                ';
$fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_2 ) ) extract( array_pop( $fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_2 ) );

else
{

unset( $fe_array_57f8b0a009f17d116a713f00cb6d8748_2 );

unset( $fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_2 );

unset( $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_2 );

unset( $fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_2 );

unset( $fe_i_57f8b0a009f17d116a713f00cb6d8748_2 );

unset( $fe_key_57f8b0a009f17d116a713f00cb6d8748_2 );

unset( $fe_val_57f8b0a009f17d116a713f00cb6d8748_2 );

unset( $fe_offset_57f8b0a009f17d116a713f00cb6d8748_2 );

unset( $fe_max_57f8b0a009f17d116a713f00cb6d8748_2 );

unset( $fe_reverse_57f8b0a009f17d116a713f00cb6d8748_2 );

unset( $fe_first_val_57f8b0a009f17d116a713f00cb6d8748_2 );

unset( $fe_last_val_57f8b0a009f17d116a713f00cb6d8748_2 );

unset( $fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_2 );

}

// foreach ends
$text .= '              </ul>
            </div>
          ';
}
unset( $if_cond );
// if ends

$text .= '          <div class="col-12">
            <h3 class="h4 mb-4">
              Extensions
            </h3>
            <div>
              <p class="mb-4">
                The following is a list of the extensions that have been loaded at run-time by this copy of <a
                  href="http://ez.no/ezpublish" class="break-all">eZ Publish</a>.
              </p>
            </div>
          </div>
          <div class="col-12">
            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'extensions', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['extensions'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '              <div class="row g-3">
                ';
// foreach begins
$skipDelimiter = true;
$fe_array_57f8b0a009f17d116a713f00cb6d8748_5 = [];
$fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_5 = [];
$fe_n_items_57f8b0a009f17d116a713f00cb6d8748_5 = 0;
$fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_5  = 0;
$fe_i_57f8b0a009f17d116a713f00cb6d8748_5 = 0;
$fe_key_57f8b0a009f17d116a713f00cb6d8748_5 = 0;
$fe_val_57f8b0a009f17d116a713f00cb6d8748_5 = 0;
$fe_offset_57f8b0a009f17d116a713f00cb6d8748_5 = 0;
$fe_max_57f8b0a009f17d116a713f00cb6d8748_5 = 0;
$fe_reverse_57f8b0a009f17d116a713f00cb6d8748_5 = 0;
$fe_first_val_57f8b0a009f17d116a713f00cb6d8748_5 = 0;
$fe_last_val_57f8b0a009f17d116a713f00cb6d8748_5 = 0;
if ( !isset( $fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_5 ) ) $fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_5 = [];
$fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_5[] = @compact( 'fe_array_57f8b0a009f17d116a713f00cb6d8748_5', 'fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_5', 'fe_n_items_57f8b0a009f17d116a713f00cb6d8748_5', 'fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_5', 'fe_i_57f8b0a009f17d116a713f00cb6d8748_5', 'fe_key_57f8b0a009f17d116a713f00cb6d8748_5', 'fe_val_57f8b0a009f17d116a713f00cb6d8748_5', 'fe_offset_57f8b0a009f17d116a713f00cb6d8748_5', 'fe_max_57f8b0a009f17d116a713f00cb6d8748_5', 'fe_reverse_57f8b0a009f17d116a713f00cb6d8748_5', 'fe_first_val_57f8b0a009f17d116a713f00cb6d8748_5', 'fe_last_val_57f8b0a009f17d116a713f00cb6d8748_5' );
unset( $fe_array_57f8b0a009f17d116a713f00cb6d8748_5 );
unset( $fe_array_57f8b0a009f17d116a713f00cb6d8748_5 );
$fe_array_57f8b0a009f17d116a713f00cb6d8748_5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'extensions', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['extensions'] : null;
if (! isset( $fe_array_57f8b0a009f17d116a713f00cb6d8748_5 ) ) $fe_array_57f8b0a009f17d116a713f00cb6d8748_5 = NULL;
while ( is_object( $fe_array_57f8b0a009f17d116a713f00cb6d8748_5 ) and method_exists( $fe_array_57f8b0a009f17d116a713f00cb6d8748_5, 'templateValue' ) )
    $fe_array_57f8b0a009f17d116a713f00cb6d8748_5 = $fe_array_57f8b0a009f17d116a713f00cb6d8748_5->templateValue();

$fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_5 = is_array( $fe_array_57f8b0a009f17d116a713f00cb6d8748_5 ) ? array_keys( $fe_array_57f8b0a009f17d116a713f00cb6d8748_5 ) : [];
$fe_n_items_57f8b0a009f17d116a713f00cb6d8748_5 = count( $fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_5 );
$fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_5 = 0;
$fe_offset_57f8b0a009f17d116a713f00cb6d8748_5 = 0;
$fe_max_57f8b0a009f17d116a713f00cb6d8748_5 = $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_5 - $fe_offset_57f8b0a009f17d116a713f00cb6d8748_5;
$fe_reverse_57f8b0a009f17d116a713f00cb6d8748_5 = false;
if ( $fe_offset_57f8b0a009f17d116a713f00cb6d8748_5 < 0 || $fe_offset_57f8b0a009f17d116a713f00cb6d8748_5 >= $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_5 )
{
    $fe_offset_57f8b0a009f17d116a713f00cb6d8748_5 = ( $fe_offset_57f8b0a009f17d116a713f00cb6d8748_5 < 0 ) ? 0 : $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_5;
    if ( $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_5 || $fe_offset_57f8b0a009f17d116a713f00cb6d8748_5 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_57f8b0a009f17d116a713f00cb6d8748_5'. Array count: $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_5");   
}
}
if ( $fe_max_57f8b0a009f17d116a713f00cb6d8748_5 < 0 || $fe_offset_57f8b0a009f17d116a713f00cb6d8748_5 + $fe_max_57f8b0a009f17d116a713f00cb6d8748_5 > $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_5 )
{
    if ( $fe_max_57f8b0a009f17d116a713f00cb6d8748_5 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_57f8b0a009f17d116a713f00cb6d8748_5");
    $fe_max_57f8b0a009f17d116a713f00cb6d8748_5 = $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_5 - $fe_offset_57f8b0a009f17d116a713f00cb6d8748_5;
}
if ( $fe_reverse_57f8b0a009f17d116a713f00cb6d8748_5 )
{
    $fe_first_val_57f8b0a009f17d116a713f00cb6d8748_5 = $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_5 - 1 - $fe_offset_57f8b0a009f17d116a713f00cb6d8748_5;
    $fe_last_val_57f8b0a009f17d116a713f00cb6d8748_5  = 0;
}
else
{
    $fe_first_val_57f8b0a009f17d116a713f00cb6d8748_5 = $fe_offset_57f8b0a009f17d116a713f00cb6d8748_5;
    $fe_last_val_57f8b0a009f17d116a713f00cb6d8748_5  = $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_5 - 1;
}
// foreach
for ( $fe_i_57f8b0a009f17d116a713f00cb6d8748_5 = $fe_first_val_57f8b0a009f17d116a713f00cb6d8748_5; $fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_5 < $fe_max_57f8b0a009f17d116a713f00cb6d8748_5 && ( $fe_reverse_57f8b0a009f17d116a713f00cb6d8748_5 ? $fe_i_57f8b0a009f17d116a713f00cb6d8748_5 >= $fe_last_val_57f8b0a009f17d116a713f00cb6d8748_5 : $fe_i_57f8b0a009f17d116a713f00cb6d8748_5 <= $fe_last_val_57f8b0a009f17d116a713f00cb6d8748_5 ); $fe_reverse_57f8b0a009f17d116a713f00cb6d8748_5 ? $fe_i_57f8b0a009f17d116a713f00cb6d8748_5-- : $fe_i_57f8b0a009f17d116a713f00cb6d8748_5++ )
{
$fe_key_57f8b0a009f17d116a713f00cb6d8748_5 = $fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_5[$fe_i_57f8b0a009f17d116a713f00cb6d8748_5];
$fe_val_57f8b0a009f17d116a713f00cb6d8748_5 = $fe_array_57f8b0a009f17d116a713f00cb6d8748_5[$fe_key_57f8b0a009f17d116a713f00cb6d8748_5];
$vars[$rootNamespace]['extension'] = $fe_val_57f8b0a009f17d116a713f00cb6d8748_5;
$vars[$rootNamespace]['ext_name'] = $fe_key_57f8b0a009f17d116a713f00cb6d8748_5;
$text .= '                  ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'extension', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['extension'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = is_array( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                      <div class="card shadow-sm h-100">
                        <div class="card-body">
                          <ul class="d-flex flex-column gap-2 list-unstyled">
                            ';
// foreach begins
$skipDelimiter = true;
$fe_array_57f8b0a009f17d116a713f00cb6d8748_4 = [];
$fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_4 = [];
$fe_n_items_57f8b0a009f17d116a713f00cb6d8748_4 = 0;
$fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_4  = 0;
$fe_i_57f8b0a009f17d116a713f00cb6d8748_4 = 0;
$fe_key_57f8b0a009f17d116a713f00cb6d8748_4 = 0;
$fe_val_57f8b0a009f17d116a713f00cb6d8748_4 = 0;
$fe_offset_57f8b0a009f17d116a713f00cb6d8748_4 = 0;
$fe_max_57f8b0a009f17d116a713f00cb6d8748_4 = 0;
$fe_reverse_57f8b0a009f17d116a713f00cb6d8748_4 = 0;
$fe_first_val_57f8b0a009f17d116a713f00cb6d8748_4 = 0;
$fe_last_val_57f8b0a009f17d116a713f00cb6d8748_4 = 0;
if ( !isset( $fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_4 ) ) $fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_4 = [];
$fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_4[] = @compact( 'fe_array_57f8b0a009f17d116a713f00cb6d8748_4', 'fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_4', 'fe_n_items_57f8b0a009f17d116a713f00cb6d8748_4', 'fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_4', 'fe_i_57f8b0a009f17d116a713f00cb6d8748_4', 'fe_key_57f8b0a009f17d116a713f00cb6d8748_4', 'fe_val_57f8b0a009f17d116a713f00cb6d8748_4', 'fe_offset_57f8b0a009f17d116a713f00cb6d8748_4', 'fe_max_57f8b0a009f17d116a713f00cb6d8748_4', 'fe_reverse_57f8b0a009f17d116a713f00cb6d8748_4', 'fe_first_val_57f8b0a009f17d116a713f00cb6d8748_4', 'fe_last_val_57f8b0a009f17d116a713f00cb6d8748_4' );
unset( $fe_array_57f8b0a009f17d116a713f00cb6d8748_4 );
unset( $fe_array_57f8b0a009f17d116a713f00cb6d8748_4 );
$fe_array_57f8b0a009f17d116a713f00cb6d8748_4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'extension', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['extension'] : null;
if (! isset( $fe_array_57f8b0a009f17d116a713f00cb6d8748_4 ) ) $fe_array_57f8b0a009f17d116a713f00cb6d8748_4 = NULL;
while ( is_object( $fe_array_57f8b0a009f17d116a713f00cb6d8748_4 ) and method_exists( $fe_array_57f8b0a009f17d116a713f00cb6d8748_4, 'templateValue' ) )
    $fe_array_57f8b0a009f17d116a713f00cb6d8748_4 = $fe_array_57f8b0a009f17d116a713f00cb6d8748_4->templateValue();

$fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_4 = is_array( $fe_array_57f8b0a009f17d116a713f00cb6d8748_4 ) ? array_keys( $fe_array_57f8b0a009f17d116a713f00cb6d8748_4 ) : [];
$fe_n_items_57f8b0a009f17d116a713f00cb6d8748_4 = count( $fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_4 );
$fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_4 = 0;
$fe_offset_57f8b0a009f17d116a713f00cb6d8748_4 = 0;
$fe_max_57f8b0a009f17d116a713f00cb6d8748_4 = $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_4 - $fe_offset_57f8b0a009f17d116a713f00cb6d8748_4;
$fe_reverse_57f8b0a009f17d116a713f00cb6d8748_4 = false;
if ( $fe_offset_57f8b0a009f17d116a713f00cb6d8748_4 < 0 || $fe_offset_57f8b0a009f17d116a713f00cb6d8748_4 >= $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_4 )
{
    $fe_offset_57f8b0a009f17d116a713f00cb6d8748_4 = ( $fe_offset_57f8b0a009f17d116a713f00cb6d8748_4 < 0 ) ? 0 : $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_4;
    if ( $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_4 || $fe_offset_57f8b0a009f17d116a713f00cb6d8748_4 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_57f8b0a009f17d116a713f00cb6d8748_4'. Array count: $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_4");   
}
}
if ( $fe_max_57f8b0a009f17d116a713f00cb6d8748_4 < 0 || $fe_offset_57f8b0a009f17d116a713f00cb6d8748_4 + $fe_max_57f8b0a009f17d116a713f00cb6d8748_4 > $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_4 )
{
    if ( $fe_max_57f8b0a009f17d116a713f00cb6d8748_4 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_57f8b0a009f17d116a713f00cb6d8748_4");
    $fe_max_57f8b0a009f17d116a713f00cb6d8748_4 = $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_4 - $fe_offset_57f8b0a009f17d116a713f00cb6d8748_4;
}
if ( $fe_reverse_57f8b0a009f17d116a713f00cb6d8748_4 )
{
    $fe_first_val_57f8b0a009f17d116a713f00cb6d8748_4 = $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_4 - 1 - $fe_offset_57f8b0a009f17d116a713f00cb6d8748_4;
    $fe_last_val_57f8b0a009f17d116a713f00cb6d8748_4  = 0;
}
else
{
    $fe_first_val_57f8b0a009f17d116a713f00cb6d8748_4 = $fe_offset_57f8b0a009f17d116a713f00cb6d8748_4;
    $fe_last_val_57f8b0a009f17d116a713f00cb6d8748_4  = $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_4 - 1;
}
// foreach
for ( $fe_i_57f8b0a009f17d116a713f00cb6d8748_4 = $fe_first_val_57f8b0a009f17d116a713f00cb6d8748_4; $fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_4 < $fe_max_57f8b0a009f17d116a713f00cb6d8748_4 && ( $fe_reverse_57f8b0a009f17d116a713f00cb6d8748_4 ? $fe_i_57f8b0a009f17d116a713f00cb6d8748_4 >= $fe_last_val_57f8b0a009f17d116a713f00cb6d8748_4 : $fe_i_57f8b0a009f17d116a713f00cb6d8748_4 <= $fe_last_val_57f8b0a009f17d116a713f00cb6d8748_4 ); $fe_reverse_57f8b0a009f17d116a713f00cb6d8748_4 ? $fe_i_57f8b0a009f17d116a713f00cb6d8748_4-- : $fe_i_57f8b0a009f17d116a713f00cb6d8748_4++ )
{
$fe_key_57f8b0a009f17d116a713f00cb6d8748_4 = $fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_4[$fe_i_57f8b0a009f17d116a713f00cb6d8748_4];
$fe_val_57f8b0a009f17d116a713f00cb6d8748_4 = $fe_array_57f8b0a009f17d116a713f00cb6d8748_4[$fe_key_57f8b0a009f17d116a713f00cb6d8748_4];
$vars[$rootNamespace]['ext_info'] = $fe_val_57f8b0a009f17d116a713f00cb6d8748_4;
$vars[$rootNamespace]['ext_key'] = $fe_key_57f8b0a009f17d116a713f00cb6d8748_4;
$text .= '                              <li>
                                <h4 class="h5">';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ext_key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ext_key'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$strlenFunc = 'mb_strlen'; $substrFunc = 'mb_substr';
$i18nIni = eZINI::instance( 'i18n.ini' );
                                                                  $hasMBString = ( $i18nIni->variable( 'CharacterSettings', 'MBStringExtension' ) == 'enabled' and
                                                                  function_exists( "mb_strtoupper" ) and
                                                                  function_exists( "mb_substr" ) and
                                                                  function_exists( "mb_strlen" ) );

                                                                  if ( $hasMBString )
                                                                  {
                                                                      $encoding = eZTextCodec::internalCharset();
                                                                      $firstLetter = mb_strtoupper( mb_substr( $var2, 0, 1, $encoding ), $encoding );
                                                                      $remainingText = mb_substr( $var2, 1, mb_strlen( $var2, $encoding ), $encoding );
                                                                      $var1 = $firstLetter . $remainingText;
                                                                  }
                                                                  else
                                                                  {
                                                                     $var1 = ucfirst( $var2 );
                                                                  }
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( (string) $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</h4>
                                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ext_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ext_info'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = is_array( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !( $if_cond1 );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                                  ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ext_key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ext_key'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'info_url' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                                    <a href=';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ext_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ext_info'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' class="break-all">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ext_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ext_info'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</a>
                                  ';
}
else
{
$text .= '                                    <span ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ext_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ext_info'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
if( is_string( $if_cond1 ) )
{
  $if_cond = ( mb_strpos( $if_cond1, "http" ) !== false );
}
else if ( is_array( $if_cond1 ) )
{
  $if_cond = in_array( "http", $if_cond1 );
}
else
{
$if_cond = false;
}unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' style="text-decoration:underline;"';
}
unset( $if_cond );
// if ends

$text .= '>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ext_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ext_info'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'autolink',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</span>
                                  ';
}
unset( $if_cond );
// if ends

$text .= '                                ';
}
else
{
$text .= '                                  <ul class="d-flex flex-column gap-2">
                                    ';
// foreach begins
$skipDelimiter = true;
$fe_array_57f8b0a009f17d116a713f00cb6d8748_3 = [];
$fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_3 = [];
$fe_n_items_57f8b0a009f17d116a713f00cb6d8748_3 = 0;
$fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_3  = 0;
$fe_i_57f8b0a009f17d116a713f00cb6d8748_3 = 0;
$fe_key_57f8b0a009f17d116a713f00cb6d8748_3 = 0;
$fe_val_57f8b0a009f17d116a713f00cb6d8748_3 = 0;
$fe_offset_57f8b0a009f17d116a713f00cb6d8748_3 = 0;
$fe_max_57f8b0a009f17d116a713f00cb6d8748_3 = 0;
$fe_reverse_57f8b0a009f17d116a713f00cb6d8748_3 = 0;
$fe_first_val_57f8b0a009f17d116a713f00cb6d8748_3 = 0;
$fe_last_val_57f8b0a009f17d116a713f00cb6d8748_3 = 0;
if ( !isset( $fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_3 ) ) $fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_3 = [];
$fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_3[] = @compact( 'fe_array_57f8b0a009f17d116a713f00cb6d8748_3', 'fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_3', 'fe_n_items_57f8b0a009f17d116a713f00cb6d8748_3', 'fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_3', 'fe_i_57f8b0a009f17d116a713f00cb6d8748_3', 'fe_key_57f8b0a009f17d116a713f00cb6d8748_3', 'fe_val_57f8b0a009f17d116a713f00cb6d8748_3', 'fe_offset_57f8b0a009f17d116a713f00cb6d8748_3', 'fe_max_57f8b0a009f17d116a713f00cb6d8748_3', 'fe_reverse_57f8b0a009f17d116a713f00cb6d8748_3', 'fe_first_val_57f8b0a009f17d116a713f00cb6d8748_3', 'fe_last_val_57f8b0a009f17d116a713f00cb6d8748_3' );
unset( $fe_array_57f8b0a009f17d116a713f00cb6d8748_3 );
unset( $fe_array_57f8b0a009f17d116a713f00cb6d8748_3 );
$fe_array_57f8b0a009f17d116a713f00cb6d8748_3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ext_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ext_info'] : null;
if (! isset( $fe_array_57f8b0a009f17d116a713f00cb6d8748_3 ) ) $fe_array_57f8b0a009f17d116a713f00cb6d8748_3 = NULL;
while ( is_object( $fe_array_57f8b0a009f17d116a713f00cb6d8748_3 ) and method_exists( $fe_array_57f8b0a009f17d116a713f00cb6d8748_3, 'templateValue' ) )
    $fe_array_57f8b0a009f17d116a713f00cb6d8748_3 = $fe_array_57f8b0a009f17d116a713f00cb6d8748_3->templateValue();

$fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_3 = is_array( $fe_array_57f8b0a009f17d116a713f00cb6d8748_3 ) ? array_keys( $fe_array_57f8b0a009f17d116a713f00cb6d8748_3 ) : [];
$fe_n_items_57f8b0a009f17d116a713f00cb6d8748_3 = count( $fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_3 );
$fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_3 = 0;
$fe_offset_57f8b0a009f17d116a713f00cb6d8748_3 = 0;
$fe_max_57f8b0a009f17d116a713f00cb6d8748_3 = $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_3 - $fe_offset_57f8b0a009f17d116a713f00cb6d8748_3;
$fe_reverse_57f8b0a009f17d116a713f00cb6d8748_3 = false;
if ( $fe_offset_57f8b0a009f17d116a713f00cb6d8748_3 < 0 || $fe_offset_57f8b0a009f17d116a713f00cb6d8748_3 >= $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_3 )
{
    $fe_offset_57f8b0a009f17d116a713f00cb6d8748_3 = ( $fe_offset_57f8b0a009f17d116a713f00cb6d8748_3 < 0 ) ? 0 : $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_3;
    if ( $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_3 || $fe_offset_57f8b0a009f17d116a713f00cb6d8748_3 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_57f8b0a009f17d116a713f00cb6d8748_3'. Array count: $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_3");   
}
}
if ( $fe_max_57f8b0a009f17d116a713f00cb6d8748_3 < 0 || $fe_offset_57f8b0a009f17d116a713f00cb6d8748_3 + $fe_max_57f8b0a009f17d116a713f00cb6d8748_3 > $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_3 )
{
    if ( $fe_max_57f8b0a009f17d116a713f00cb6d8748_3 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_57f8b0a009f17d116a713f00cb6d8748_3");
    $fe_max_57f8b0a009f17d116a713f00cb6d8748_3 = $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_3 - $fe_offset_57f8b0a009f17d116a713f00cb6d8748_3;
}
if ( $fe_reverse_57f8b0a009f17d116a713f00cb6d8748_3 )
{
    $fe_first_val_57f8b0a009f17d116a713f00cb6d8748_3 = $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_3 - 1 - $fe_offset_57f8b0a009f17d116a713f00cb6d8748_3;
    $fe_last_val_57f8b0a009f17d116a713f00cb6d8748_3  = 0;
}
else
{
    $fe_first_val_57f8b0a009f17d116a713f00cb6d8748_3 = $fe_offset_57f8b0a009f17d116a713f00cb6d8748_3;
    $fe_last_val_57f8b0a009f17d116a713f00cb6d8748_3  = $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_3 - 1;
}
// foreach
for ( $fe_i_57f8b0a009f17d116a713f00cb6d8748_3 = $fe_first_val_57f8b0a009f17d116a713f00cb6d8748_3; $fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_3 < $fe_max_57f8b0a009f17d116a713f00cb6d8748_3 && ( $fe_reverse_57f8b0a009f17d116a713f00cb6d8748_3 ? $fe_i_57f8b0a009f17d116a713f00cb6d8748_3 >= $fe_last_val_57f8b0a009f17d116a713f00cb6d8748_3 : $fe_i_57f8b0a009f17d116a713f00cb6d8748_3 <= $fe_last_val_57f8b0a009f17d116a713f00cb6d8748_3 ); $fe_reverse_57f8b0a009f17d116a713f00cb6d8748_3 ? $fe_i_57f8b0a009f17d116a713f00cb6d8748_3-- : $fe_i_57f8b0a009f17d116a713f00cb6d8748_3++ )
{
$fe_key_57f8b0a009f17d116a713f00cb6d8748_3 = $fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_3[$fe_i_57f8b0a009f17d116a713f00cb6d8748_3];
$fe_val_57f8b0a009f17d116a713f00cb6d8748_3 = $fe_array_57f8b0a009f17d116a713f00cb6d8748_3[$fe_key_57f8b0a009f17d116a713f00cb6d8748_3];
$vars[$rootNamespace]['ext_info_value'] = $fe_val_57f8b0a009f17d116a713f00cb6d8748_3;
$vars[$rootNamespace]['ext_info_key'] = $fe_key_57f8b0a009f17d116a713f00cb6d8748_3;
$text .= '                                      <li>
                                        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ext_info_key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ext_info_key'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'info_url' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                                          <h5 class="h6">';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ext_info_key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ext_info_key'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$strlenFunc = 'mb_strlen'; $substrFunc = 'mb_substr';
$i18nIni = eZINI::instance( 'i18n.ini' );
                                                                  $hasMBString = ( $i18nIni->variable( 'CharacterSettings', 'MBStringExtension' ) == 'enabled' and
                                                                  function_exists( "mb_strtoupper" ) and
                                                                  function_exists( "mb_substr" ) and
                                                                  function_exists( "mb_strlen" ) );

                                                                  if ( $hasMBString )
                                                                  {
                                                                      $encoding = eZTextCodec::internalCharset();
                                                                      $firstLetter = mb_strtoupper( mb_substr( $var2, 0, 1, $encoding ), $encoding );
                                                                      $remainingText = mb_substr( $var2, 1, mb_strlen( $var2, $encoding ), $encoding );
                                                                      $var1 = $firstLetter . $remainingText;
                                                                  }
                                                                  else
                                                                  {
                                                                     $var1 = ucfirst( $var2 );
                                                                  }
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( (string) $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</h5>
                                          <a href=';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ext_info_value', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ext_info_value'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' class="break-all">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ext_info_value', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ext_info_value'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</a>
                                        ';
}
else
{
$text .= '                                          <h5 class="h6">';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ext_info_key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ext_info_key'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$strlenFunc = 'mb_strlen'; $substrFunc = 'mb_substr';
$i18nIni = eZINI::instance( 'i18n.ini' );
                                                                  $hasMBString = ( $i18nIni->variable( 'CharacterSettings', 'MBStringExtension' ) == 'enabled' and
                                                                  function_exists( "mb_strtoupper" ) and
                                                                  function_exists( "mb_substr" ) and
                                                                  function_exists( "mb_strlen" ) );

                                                                  if ( $hasMBString )
                                                                  {
                                                                      $encoding = eZTextCodec::internalCharset();
                                                                      $firstLetter = mb_strtoupper( mb_substr( $var2, 0, 1, $encoding ), $encoding );
                                                                      $remainingText = mb_substr( $var2, 1, mb_strlen( $var2, $encoding ), $encoding );
                                                                      $var1 = $firstLetter . $remainingText;
                                                                  }
                                                                  else
                                                                  {
                                                                     $var1 = ucfirst( $var2 );
                                                                  }
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( (string) $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</h5>
                                          <span>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ext_info_value', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ext_info_value'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</span>
                                        ';
}
unset( $if_cond );
// if ends

$text .= '                                      </li>
                                    ';
$fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_3++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_3 ) ) extract( array_pop( $fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_3 ) );

else
{

unset( $fe_array_57f8b0a009f17d116a713f00cb6d8748_3 );

unset( $fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_3 );

unset( $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_3 );

unset( $fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_3 );

unset( $fe_i_57f8b0a009f17d116a713f00cb6d8748_3 );

unset( $fe_key_57f8b0a009f17d116a713f00cb6d8748_3 );

unset( $fe_val_57f8b0a009f17d116a713f00cb6d8748_3 );

unset( $fe_offset_57f8b0a009f17d116a713f00cb6d8748_3 );

unset( $fe_max_57f8b0a009f17d116a713f00cb6d8748_3 );

unset( $fe_reverse_57f8b0a009f17d116a713f00cb6d8748_3 );

unset( $fe_first_val_57f8b0a009f17d116a713f00cb6d8748_3 );

unset( $fe_last_val_57f8b0a009f17d116a713f00cb6d8748_3 );

unset( $fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_3 );

}

// foreach ends
$text .= '                                  </ul>
                                ';
}
unset( $if_cond );
// if ends

$text .= '                              </li>
                            ';
$fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_4++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_4 ) ) extract( array_pop( $fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_4 ) );

else
{

unset( $fe_array_57f8b0a009f17d116a713f00cb6d8748_4 );

unset( $fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_4 );

unset( $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_4 );

unset( $fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_4 );

unset( $fe_i_57f8b0a009f17d116a713f00cb6d8748_4 );

unset( $fe_key_57f8b0a009f17d116a713f00cb6d8748_4 );

unset( $fe_val_57f8b0a009f17d116a713f00cb6d8748_4 );

unset( $fe_offset_57f8b0a009f17d116a713f00cb6d8748_4 );

unset( $fe_max_57f8b0a009f17d116a713f00cb6d8748_4 );

unset( $fe_reverse_57f8b0a009f17d116a713f00cb6d8748_4 );

unset( $fe_first_val_57f8b0a009f17d116a713f00cb6d8748_4 );

unset( $fe_last_val_57f8b0a009f17d116a713f00cb6d8748_4 );

unset( $fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_4 );

}

// foreach ends
$text .= '                          </ul>
                        </div>
                      </div>
                    </div>
                  ';
}
unset( $if_cond );
// if ends

$text .= '                ';
$fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_5++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_5 ) ) extract( array_pop( $fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_5 ) );

else
{

unset( $fe_array_57f8b0a009f17d116a713f00cb6d8748_5 );

unset( $fe_array_keys_57f8b0a009f17d116a713f00cb6d8748_5 );

unset( $fe_n_items_57f8b0a009f17d116a713f00cb6d8748_5 );

unset( $fe_n_items_processed_57f8b0a009f17d116a713f00cb6d8748_5 );

unset( $fe_i_57f8b0a009f17d116a713f00cb6d8748_5 );

unset( $fe_key_57f8b0a009f17d116a713f00cb6d8748_5 );

unset( $fe_val_57f8b0a009f17d116a713f00cb6d8748_5 );

unset( $fe_offset_57f8b0a009f17d116a713f00cb6d8748_5 );

unset( $fe_max_57f8b0a009f17d116a713f00cb6d8748_5 );

unset( $fe_reverse_57f8b0a009f17d116a713f00cb6d8748_5 );

unset( $fe_first_val_57f8b0a009f17d116a713f00cb6d8748_5 );

unset( $fe_last_val_57f8b0a009f17d116a713f00cb6d8748_5 );

unset( $fe_variable_stack_57f8b0a009f17d116a713f00cb6d8748_5 );

}

// foreach ends
$text .= '              </div>
            ';
}
unset( $if_cond );
// if ends

$text .= '          </div>
        </div>
      </div>
    </div>
</section>';

$setArray = $oldSetArray_c4800b772c0793203f814bbd2889d2b9;
$tpl->Level--;
?>
