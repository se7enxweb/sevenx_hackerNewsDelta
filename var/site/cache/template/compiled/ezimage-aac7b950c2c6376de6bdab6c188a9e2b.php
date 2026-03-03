<?php
// URI:       design:content/datatype/view/ezimage.tpl
// Filename:  extension/sevenx_diggclone/design/digg/templates/content/datatype/view/ezimage.tpl
// Timestamp: 1726778603 (Thu Sep 19 13:43:23 PDT 2024)
$oldSetArray_7075d36d57d020a35ac110dae0c846d4 = isset( $setArray ) ? $setArray : array();
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

if ( !isset( $vars[$currentNamespace]['image_class'] ) )
{
    $vars[$currentNamespace]['image_class'] = 'large';
    $setArray[$currentNamespace]['image_class'] = true;
}

if ( !isset( $vars[$currentNamespace]['css_class'] ) )
{
    $vars[$currentNamespace]['css_class'] = false;
    $setArray[$currentNamespace]['css_class'] = true;
}

if ( !isset( $vars[$currentNamespace]['alignment'] ) )
{
    $vars[$currentNamespace]['alignment'] = false;
    $setArray[$currentNamespace]['alignment'] = true;
}

if ( !isset( $vars[$currentNamespace]['link_to_image'] ) )
{
    $vars[$currentNamespace]['link_to_image'] = false;
    $setArray[$currentNamespace]['link_to_image'] = true;
}

if ( !isset( $vars[$currentNamespace]['href'] ) )
{
    $vars[$currentNamespace]['href'] = false;
    $setArray[$currentNamespace]['href'] = true;
}

if ( !isset( $vars[$currentNamespace]['target'] ) )
{
    $vars[$currentNamespace]['target'] = false;
    $setArray[$currentNamespace]['target'] = true;
}

if ( !isset( $vars[$currentNamespace]['hspace'] ) )
{
    $vars[$currentNamespace]['hspace'] = false;
    $setArray[$currentNamespace]['hspace'] = true;
}

if ( !isset( $vars[$currentNamespace]['border_size'] ) )
{
    $vars[$currentNamespace]['border_size'] = 0;
    $setArray[$currentNamespace]['border_size'] = true;
}

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'lightbox_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['lightbox_class'] : null;
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
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'lightbox_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['lightbox_class'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) != ( '' ) );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'content' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
unset( $if_cond5 );
unset( $if_cond5 );
$if_cond5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'lightbox_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['lightbox_class'] : null;
if (! isset( $if_cond5 ) ) $if_cond5 = NULL;
while ( is_object( $if_cond5 ) and method_exists( $if_cond5, 'templateValue' ) )
    $if_cond5 = $if_cond5->templateValue();
$if_cond4 = compiledFetchAttribute( $if_cond3, $if_cond5 );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'is_valid' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
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
$text .= '   ';
// def $href
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var2 = compiledFetchAttribute( $var1, 'content' );
unset( $var1 );
$var1 = $var2;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'lightbox_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['lightbox_class'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'url' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( !is_null( $var1 ) && preg_match( "#^[a-zA-Z0-9]+:#", $var1 ) or
!is_null( $var1 ) && substr( $var1, 0, 2 ) == '//' )
  $var1 = '/';
else if ( !is_null( $var1 ) && strlen( $var1 ) > 0 and
  $var1[0] != '/' )
$var1 = '/' . $var1;
eZURI::transformURI( $var1, true, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'href', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'href' is already defined.", array (
  0 => 
  array (
    0 => 23,
    1 => 3,
    2 => 873,
  ),
  1 => 
  array (
    0 => 23,
    1 => 59,
    2 => 929,
  ),
  2 => 'extension/sevenx_diggclone/design/digg/templates/content/datatype/view/ezimage.tpl',
) );
    $tpl->setVariable( 'href', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'href', $var, $rootNamespace );
}

}
unset( $if_cond );
// if ends

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['image_content'] = $var;
unset( $var );
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'image_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['image_content'] : null;
$show1 = compiledFetchAttribute( $show, 'is_valid' );
unset( $show );
$show = $show1;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '
    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'image_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['image_content'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'image_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['image_class'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['image'] = $var;
unset( $var );
$text .= '
    ';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'link_to_image', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['link_to_image'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'image_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['image_content'] : null;
$var1 = compiledFetchAttribute( $var, 'original' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['image_original'] = $var;
unset( $var );
$text .= '        ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'image_original', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['image_original'] : null;
$var2 = compiledFetchAttribute( $var1, 'url' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( !is_null( $var1 ) && preg_match( "#^[a-zA-Z0-9]+:#", $var1 ) or
!is_null( $var1 ) && substr( $var1, 0, 2 ) == '//' )
  $var1 = '/';
else if ( !is_null( $var1 ) && strlen( $var1 ) > 0 and
  $var1[0] != '/' )
$var1 = '/' . $var1;
eZURI::transformURI( $var1, true, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'href', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['href'] = $var;
    unset( $var );
}
$text .= '        ';
unset( $vars[$currentNamespace]['image_original'] );
$text .= '    ';
}

$text .= '    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'alignment', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['alignment'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['match'] = $var;
unset( $var );
unset( $match );
unset( $match );
$match = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'alignment', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['alignment'] : null;
if (! isset( $match ) ) $match = NULL;
while ( is_object( $match ) and method_exists( $match, 'templateValue' ) )
    $match = $match->templateValue();

switch ( $match )
{
    case "left":
    {
$text .= '        <div class="imageleft">
    ';
    } break;
    case "right":
    {
$text .= '        <div class="imageright">
    ';
    } break;
    default:
    {
    } break;
}
unset( $match );

unset( $vars[$currentNamespace]['match'] );
$text .= '
    ';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'css_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['css_class'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '        <div class="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'css_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['css_class'] : null;
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

$text .= '">
    ';
}

$text .= '
    ';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'href', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['href'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '<a href=';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'href', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['href'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

unset( $show );
unset( $show1 );
unset( $show2 );
unset( $show2 );
$show2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'link_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['link_class'] : null;
if (! isset( $show2 ) ) $show2 = NULL;
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
$show1 = isset( $show2 );unset( $show2 );
if (! isset( $show1 ) ) $show1 = NULL;
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
unset( $show2 );
unset( $show2 );
$show2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'link_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['link_class'] : null;
if (! isset( $show2 ) ) $show2 = NULL;
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
if ( !$show1 )
    $show = false;
else if ( !$show2 )
    $show = false;
else
    $show = $show2;
unset( $show1, $show2 );
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= ' class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'link_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['link_class'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '"';
}

unset( $show );
unset( $show1 );
unset( $show2 );
unset( $show2 );
$show2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'link_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['link_id'] : null;
if (! isset( $show2 ) ) $show2 = NULL;
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
$show1 = isset( $show2 );unset( $show2 );
if (! isset( $show1 ) ) $show1 = NULL;
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
unset( $show2 );
unset( $show2 );
$show2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'link_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['link_id'] : null;
if (! isset( $show2 ) ) $show2 = NULL;
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
if ( !$show1 )
    $show = false;
else if ( !$show2 )
    $show = false;
else
    $show = $show2;
unset( $show1, $show2 );
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= ' id="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'link_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['link_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '"';
}

unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'target', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['target'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= ' target="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'target', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['target'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '"';
}

unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'lightbox_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['lightbox_class'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= ' rel="lightbox"';
}

$text .= '>';
}

$text .= '    ';
unset( $show );
unset( $show1 );
unset( $show2 );
unset( $show2 );
$show2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'image', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['image'] : null;
if (! isset( $show2 ) ) $show2 = NULL;
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
$show1 = isset( $show2 );unset( $show2 );
if (! isset( $show1 ) ) $show1 = NULL;
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
unset( $show2 );
unset( $show2 );
$show2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'image', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['image'] : null;
if (! isset( $show2 ) ) $show2 = NULL;
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
if ( !$show1 )
    $show = false;
else if ( !$show2 )
    $show = false;
else
    $show = $show2;
unset( $show1, $show2 );
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '        <img src=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'image', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['image'] : null;
$var2 = compiledFetchAttribute( $var1, 'url' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( !is_null( $var1 ) && preg_match( "#^[a-zA-Z0-9]+:#", $var1 ) or
!is_null( $var1 ) && substr( $var1, 0, 2 ) == '//' )
  $var1 = '/';
else if ( !is_null( $var1 ) && strlen( $var1 ) > 0 and
  $var1[0] != '/' )
$var1 = '/' . $var1;
eZURI::transformURI( $var1, true, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' width="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'image', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['image'] : null;
$var1 = compiledFetchAttribute( $var, 'width' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" height="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'image', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['image'] : null;
$var1 = compiledFetchAttribute( $var, 'height' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" ';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hspace', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hspace'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= 'hspace="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hspace', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hspace'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '"';
}

$text .= ' style="border: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'border_size', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['border_size'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= 'px;" alt="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'image', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['image'] : null;
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

$text .= '" title="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'image', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['image'] : null;
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

$text .= '" />';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'href', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['href'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '</a>';
}

$text .= '    ';
}

$text .= '
    ';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'css_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['css_class'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '        </div>
    ';
}

$text .= '
    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'alignment', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['alignment'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['match'] = $var;
unset( $var );
unset( $match );
unset( $match );
$match = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'alignment', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['alignment'] : null;
if (! isset( $match ) ) $match = NULL;
while ( is_object( $match ) and method_exists( $match, 'templateValue' ) )
    $match = $match->templateValue();

switch ( $match )
{
    case "left":
    {
$text .= '        </div>
    ';
    } break;
    case "right":
    {
$text .= '        </div>
    ';
    } break;
    default:
    {
    } break;
}
unset( $match );

unset( $vars[$currentNamespace]['match'] );
$text .= '
    ';
unset( $vars[$currentNamespace]['image'] );
}

unset( $vars[$currentNamespace]['image_content'] );
if ( isset( $setArray[$currentNamespace]['image_class'] ) )
{
unset( $vars[$currentNamespace]['image_class'] );
}

if ( isset( $setArray[$currentNamespace]['css_class'] ) )
{
unset( $vars[$currentNamespace]['css_class'] );
}

if ( isset( $setArray[$currentNamespace]['alignment'] ) )
{
unset( $vars[$currentNamespace]['alignment'] );
}

if ( isset( $setArray[$currentNamespace]['link_to_image'] ) )
{
unset( $vars[$currentNamespace]['link_to_image'] );
}

if ( isset( $setArray[$currentNamespace]['href'] ) )
{
unset( $vars[$currentNamespace]['href'] );
}

if ( isset( $setArray[$currentNamespace]['target'] ) )
{
unset( $vars[$currentNamespace]['target'] );
}

if ( isset( $setArray[$currentNamespace]['hspace'] ) )
{
unset( $vars[$currentNamespace]['hspace'] );
}

if ( isset( $setArray[$currentNamespace]['border_size'] ) )
{
unset( $vars[$currentNamespace]['border_size'] );
}

// undef $href
$tpl->unsetLocalVariable( 'href', $rootNamespace );

// undef $ccs_class
$tpl->unsetLocalVariable( 'ccs_class', $rootNamespace );

// undef $alignment
$tpl->unsetLocalVariable( 'alignment', $rootNamespace );

// undef $image
$tpl->unsetLocalVariable( 'image', $rootNamespace );

// undef $link_class
$tpl->unsetLocalVariable( 'link_class', $rootNamespace );

// undef $lightbox_class
$tpl->unsetLocalVariable( 'lightbox_class', $rootNamespace );


$setArray = $oldSetArray_7075d36d57d020a35ac110dae0c846d4;
$tpl->Level--;
?>
