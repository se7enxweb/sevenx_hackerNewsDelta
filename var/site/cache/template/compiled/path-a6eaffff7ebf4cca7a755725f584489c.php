<?php
// URI:       design/delta/templates/parts/path.tpl
// Filename:  design/delta/templates/parts/path.tpl
// Timestamp: 1769259141 (Sat Jan 24 4:52:21 PST 2026)
$oldSetArray_7fd045e72441f111ed45ea8616473ef0 = isset( $setArray ) ? $setArray : array();
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

$text .= '  <!-- Path content: START -->
  ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'path_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['path_array'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond1Data = array( 'value' => $if_cond1 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond1Data, false, false );
$if_cond1 = $if_cond1Data['value'];
unset( $if_cond1Data );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) >= ( 2 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <ul class="breadcrumbs">
      ';
// foreach begins
$skipDelimiter = true;
$fe_array_1210e8c527ad98e8ebe8ad5f62da366b_5 = [];
$fe_array_keys_1210e8c527ad98e8ebe8ad5f62da366b_5 = [];
$fe_n_items_1210e8c527ad98e8ebe8ad5f62da366b_5 = 0;
$fe_n_items_processed_1210e8c527ad98e8ebe8ad5f62da366b_5  = 0;
$fe_i_1210e8c527ad98e8ebe8ad5f62da366b_5 = 0;
$fe_key_1210e8c527ad98e8ebe8ad5f62da366b_5 = 0;
$fe_val_1210e8c527ad98e8ebe8ad5f62da366b_5 = 0;
$fe_offset_1210e8c527ad98e8ebe8ad5f62da366b_5 = 0;
$fe_max_1210e8c527ad98e8ebe8ad5f62da366b_5 = 0;
$fe_reverse_1210e8c527ad98e8ebe8ad5f62da366b_5 = 0;
$fe_first_val_1210e8c527ad98e8ebe8ad5f62da366b_5 = 0;
$fe_last_val_1210e8c527ad98e8ebe8ad5f62da366b_5 = 0;
if ( !isset( $fe_variable_stack_1210e8c527ad98e8ebe8ad5f62da366b_5 ) ) $fe_variable_stack_1210e8c527ad98e8ebe8ad5f62da366b_5 = [];
$fe_variable_stack_1210e8c527ad98e8ebe8ad5f62da366b_5[] = @compact( 'fe_array_1210e8c527ad98e8ebe8ad5f62da366b_5', 'fe_array_keys_1210e8c527ad98e8ebe8ad5f62da366b_5', 'fe_n_items_1210e8c527ad98e8ebe8ad5f62da366b_5', 'fe_n_items_processed_1210e8c527ad98e8ebe8ad5f62da366b_5', 'fe_i_1210e8c527ad98e8ebe8ad5f62da366b_5', 'fe_key_1210e8c527ad98e8ebe8ad5f62da366b_5', 'fe_val_1210e8c527ad98e8ebe8ad5f62da366b_5', 'fe_offset_1210e8c527ad98e8ebe8ad5f62da366b_5', 'fe_max_1210e8c527ad98e8ebe8ad5f62da366b_5', 'fe_reverse_1210e8c527ad98e8ebe8ad5f62da366b_5', 'fe_first_val_1210e8c527ad98e8ebe8ad5f62da366b_5', 'fe_last_val_1210e8c527ad98e8ebe8ad5f62da366b_5' );
unset( $fe_array_1210e8c527ad98e8ebe8ad5f62da366b_5 );
unset( $fe_array_1210e8c527ad98e8ebe8ad5f62da366b_5 );
$fe_array_1210e8c527ad98e8ebe8ad5f62da366b_5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'path_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['path_array'] : null;
if (! isset( $fe_array_1210e8c527ad98e8ebe8ad5f62da366b_5 ) ) $fe_array_1210e8c527ad98e8ebe8ad5f62da366b_5 = NULL;
while ( is_object( $fe_array_1210e8c527ad98e8ebe8ad5f62da366b_5 ) and method_exists( $fe_array_1210e8c527ad98e8ebe8ad5f62da366b_5, 'templateValue' ) )
    $fe_array_1210e8c527ad98e8ebe8ad5f62da366b_5 = $fe_array_1210e8c527ad98e8ebe8ad5f62da366b_5->templateValue();

$fe_array_keys_1210e8c527ad98e8ebe8ad5f62da366b_5 = is_array( $fe_array_1210e8c527ad98e8ebe8ad5f62da366b_5 ) ? array_keys( $fe_array_1210e8c527ad98e8ebe8ad5f62da366b_5 ) : [];
$fe_n_items_1210e8c527ad98e8ebe8ad5f62da366b_5 = count( $fe_array_keys_1210e8c527ad98e8ebe8ad5f62da366b_5 );
$fe_n_items_processed_1210e8c527ad98e8ebe8ad5f62da366b_5 = 0;
$fe_offset_1210e8c527ad98e8ebe8ad5f62da366b_5 = 0;
$fe_max_1210e8c527ad98e8ebe8ad5f62da366b_5 = $fe_n_items_1210e8c527ad98e8ebe8ad5f62da366b_5 - $fe_offset_1210e8c527ad98e8ebe8ad5f62da366b_5;
$fe_reverse_1210e8c527ad98e8ebe8ad5f62da366b_5 = false;
if ( $fe_offset_1210e8c527ad98e8ebe8ad5f62da366b_5 < 0 || $fe_offset_1210e8c527ad98e8ebe8ad5f62da366b_5 >= $fe_n_items_1210e8c527ad98e8ebe8ad5f62da366b_5 )
{
    $fe_offset_1210e8c527ad98e8ebe8ad5f62da366b_5 = ( $fe_offset_1210e8c527ad98e8ebe8ad5f62da366b_5 < 0 ) ? 0 : $fe_n_items_1210e8c527ad98e8ebe8ad5f62da366b_5;
    if ( $fe_n_items_1210e8c527ad98e8ebe8ad5f62da366b_5 || $fe_offset_1210e8c527ad98e8ebe8ad5f62da366b_5 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_1210e8c527ad98e8ebe8ad5f62da366b_5'. Array count: $fe_n_items_1210e8c527ad98e8ebe8ad5f62da366b_5");   
}
}
if ( $fe_max_1210e8c527ad98e8ebe8ad5f62da366b_5 < 0 || $fe_offset_1210e8c527ad98e8ebe8ad5f62da366b_5 + $fe_max_1210e8c527ad98e8ebe8ad5f62da366b_5 > $fe_n_items_1210e8c527ad98e8ebe8ad5f62da366b_5 )
{
    if ( $fe_max_1210e8c527ad98e8ebe8ad5f62da366b_5 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_1210e8c527ad98e8ebe8ad5f62da366b_5");
    $fe_max_1210e8c527ad98e8ebe8ad5f62da366b_5 = $fe_n_items_1210e8c527ad98e8ebe8ad5f62da366b_5 - $fe_offset_1210e8c527ad98e8ebe8ad5f62da366b_5;
}
if ( $fe_reverse_1210e8c527ad98e8ebe8ad5f62da366b_5 )
{
    $fe_first_val_1210e8c527ad98e8ebe8ad5f62da366b_5 = $fe_n_items_1210e8c527ad98e8ebe8ad5f62da366b_5 - 1 - $fe_offset_1210e8c527ad98e8ebe8ad5f62da366b_5;
    $fe_last_val_1210e8c527ad98e8ebe8ad5f62da366b_5  = 0;
}
else
{
    $fe_first_val_1210e8c527ad98e8ebe8ad5f62da366b_5 = $fe_offset_1210e8c527ad98e8ebe8ad5f62da366b_5;
    $fe_last_val_1210e8c527ad98e8ebe8ad5f62da366b_5  = $fe_n_items_1210e8c527ad98e8ebe8ad5f62da366b_5 - 1;
}
// foreach
for ( $fe_i_1210e8c527ad98e8ebe8ad5f62da366b_5 = $fe_first_val_1210e8c527ad98e8ebe8ad5f62da366b_5; $fe_n_items_processed_1210e8c527ad98e8ebe8ad5f62da366b_5 < $fe_max_1210e8c527ad98e8ebe8ad5f62da366b_5 && ( $fe_reverse_1210e8c527ad98e8ebe8ad5f62da366b_5 ? $fe_i_1210e8c527ad98e8ebe8ad5f62da366b_5 >= $fe_last_val_1210e8c527ad98e8ebe8ad5f62da366b_5 : $fe_i_1210e8c527ad98e8ebe8ad5f62da366b_5 <= $fe_last_val_1210e8c527ad98e8ebe8ad5f62da366b_5 ); $fe_reverse_1210e8c527ad98e8ebe8ad5f62da366b_5 ? $fe_i_1210e8c527ad98e8ebe8ad5f62da366b_5-- : $fe_i_1210e8c527ad98e8ebe8ad5f62da366b_5++ )
{
$fe_key_1210e8c527ad98e8ebe8ad5f62da366b_5 = $fe_array_keys_1210e8c527ad98e8ebe8ad5f62da366b_5[$fe_i_1210e8c527ad98e8ebe8ad5f62da366b_5];
$fe_val_1210e8c527ad98e8ebe8ad5f62da366b_5 = $fe_array_1210e8c527ad98e8ebe8ad5f62da366b_5[$fe_key_1210e8c527ad98e8ebe8ad5f62da366b_5];
$vars[$rootNamespace]['path'] = $fe_val_1210e8c527ad98e8ebe8ad5f62da366b_5;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= '<li class="breadcrumb-item">/</li>';
} // delimiter ends

$text .= '        <li class="breadcrumb-item">
          ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'path', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['path'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'url' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <a href=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'path', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['path'] : null;
$var4 = compiledFetchAttribute( $var3, 'url_alias' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = isset( $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( $var2 )
{
    unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "path", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["path"] : null;
$var4 = compiledFetchAttribute( $var3, "url_alias" );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    $var1 = $var3;
}
else
{
    unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "path", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["path"] : null;
$var5 = compiledFetchAttribute( $var4, "url" );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();

    $var1 = $var4;
}
unset( $var2, $var3, $var4 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' class="breadcrumb-link">
              ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'path', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['path'] : null;
$var2 = compiledFetchAttribute( $var1, 'text' );
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

$text .= '
            </a>
          ';
}
else
{
$text .= '            <span class="breadcrumb-text">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'path', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['path'] : null;
$var2 = compiledFetchAttribute( $var1, 'text' );
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

$text .= '</span>
          ';
}
unset( $if_cond );
// if ends

$text .= '        </li>
              ';
$fe_n_items_processed_1210e8c527ad98e8ebe8ad5f62da366b_5++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_1210e8c527ad98e8ebe8ad5f62da366b_5 ) ) extract( array_pop( $fe_variable_stack_1210e8c527ad98e8ebe8ad5f62da366b_5 ) );

else
{

unset( $fe_array_1210e8c527ad98e8ebe8ad5f62da366b_5 );

unset( $fe_array_keys_1210e8c527ad98e8ebe8ad5f62da366b_5 );

unset( $fe_n_items_1210e8c527ad98e8ebe8ad5f62da366b_5 );

unset( $fe_n_items_processed_1210e8c527ad98e8ebe8ad5f62da366b_5 );

unset( $fe_i_1210e8c527ad98e8ebe8ad5f62da366b_5 );

unset( $fe_key_1210e8c527ad98e8ebe8ad5f62da366b_5 );

unset( $fe_val_1210e8c527ad98e8ebe8ad5f62da366b_5 );

unset( $fe_offset_1210e8c527ad98e8ebe8ad5f62da366b_5 );

unset( $fe_max_1210e8c527ad98e8ebe8ad5f62da366b_5 );

unset( $fe_reverse_1210e8c527ad98e8ebe8ad5f62da366b_5 );

unset( $fe_first_val_1210e8c527ad98e8ebe8ad5f62da366b_5 );

unset( $fe_last_val_1210e8c527ad98e8ebe8ad5f62da366b_5 );

unset( $fe_variable_stack_1210e8c527ad98e8ebe8ad5f62da366b_5 );

}

// foreach ends
$text .= '    </ul>
  ';
}
unset( $if_cond );
// if ends

$text .= '<!-- Path content: END -->';

$setArray = $oldSetArray_7fd045e72441f111ed45ea8616473ef0;
$tpl->Level--;
?>
