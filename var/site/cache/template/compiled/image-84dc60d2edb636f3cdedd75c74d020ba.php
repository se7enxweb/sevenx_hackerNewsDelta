<?php
// URI:       design:node/view/full.tpl
// Filename:  extension/sevenx_diggclone/design/digg/override/templates/full/image.tpl
// Timestamp: 1729653930 (Tue Oct 22 20:25:30 PDT 2024)
$oldSetArray_a7b0d29d80b8724236de0cd6a8faeb62 = isset( $setArray ) ? $setArray : array();
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

$node = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "node", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["node"] : null;
if ( is_object( $node ) )
$object = $node->attribute( 'object' );
if ( isset( $object ) && is_object( $object ) )
$nod_a7b0d29d80b8724236de0cd6a8faeb62 = $object->attribute( 'data_map' );
else
$nod_a7b0d29d80b8724236de0cd6a8faeb62 = false;
unset( $node, $object );

$text .= '
';
if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
$text .= '0';
$blockText = $text;
$vars[$rootNamespace]['cache_ttl'] = $blockText;
unset( $blockText );

$text = array_pop( $textStack );
// def $total_count
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'diggs' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContextualContentFunctionCollection(), 'fetchCollectedDiggInfoCountList' ),
  array_values( array(     'object_attribute_id' => $var1 ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'total_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'total_count' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 118,
  ),
  1 => 
  array (
    0 => 8,
    1 => 0,
    2 => 350,
  ),
  2 => 'extension/sevenx_diggclone/design/digg/override/templates/full/image.tpl',
) );
    $tpl->setVariable( 'total_count', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'total_count', $var, $rootNamespace );
}

// def $total_diggs
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'total_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['total_count'] : null;
$var1 = compiledFetchAttribute( $var, 0 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'total_diggs', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'total_diggs' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 118,
  ),
  1 => 
  array (
    0 => 8,
    1 => 0,
    2 => 350,
  ),
  2 => 'extension/sevenx_diggclone/design/digg/override/templates/full/image.tpl',
) );
    $tpl->setVariable( 'total_diggs', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'total_diggs', $var, $rootNamespace );
}

// def $currentUserID
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'fetchCurrentUser' ),
  array_values( array(  ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
$var1 = compiledFetchAttribute( $var, 'contentobject' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'currentUserID', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'currentUserID' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 118,
  ),
  1 => 
  array (
    0 => 8,
    1 => 0,
    2 => 350,
  ),
  2 => 'extension/sevenx_diggclone/design/digg/override/templates/full/image.tpl',
) );
    $tpl->setVariable( 'currentUserID', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'currentUserID', $var, $rootNamespace );
}

$text .= '
<div class="border-box">
<div class="border-tl"><div class="border-tr"><div class="border-tc"></div></div></div>
<div class="border-ml"><div class="border-mr"><div class="border-mc float-break">

    <div class="content-view-full">
        <div class="class-story">

          

	  ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'diggs',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
  'node' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
      ),
      2 => false,
    ),
  ),
  'total_count' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'total_count',
      ),
      2 => false,
    ),
  ),
  'total_diggs' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'total_diggs',
      ),
      2 => false,
    ),
  ),
  'current_node' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
      ),
      2 => false,
    ),
  ),
  'currentUserID' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'currentUserID',
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 28,
    1 => 3,
    2 => 975,
  ),
  1 => 
  array (
    0 => 28,
    1 => 161,
    2 => 1133,
  ),
  2 => 'extension/sevenx_diggclone/design/digg/override/templates/full/image.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '
<div class="content-view-line">
    <div class="class-story float-break">

	  <div class="news-full" id="main0" style="">
	      <div class="news-body">
	        <h3 id="title2"><a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
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

$text .= '><!-- google_ad_section_start -->';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
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

$text .= '</a></h3>
     		<p class="news-submitted">';
// def $user_submited
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'author_array' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 0 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'user_submited', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'user_submited' is already defined.", array (
  0 => 
  array (
    0 => 36,
    1 => 33,
    2 => 1439,
  ),
  1 => 
  array (
    0 => 36,
    1 => 193,
    2 => 1599,
  ),
  2 => 'extension/sevenx_diggclone/design/digg/override/templates/full/image.tpl',
) );
    $tpl->setVariable( 'user_submited', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'user_submited', $var, $rootNamespace );
}

// def $user_submited_username
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user_submited', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user_submited'] : null;
$var1 = compiledFetchAttribute( $var, 'login' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'user_submited_username', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'user_submited_username' is already defined.", array (
  0 => 
  array (
    0 => 36,
    1 => 33,
    2 => 1439,
  ),
  1 => 
  array (
    0 => 36,
    1 => 193,
    2 => 1599,
  ),
  2 => 'extension/sevenx_diggclone/design/digg/override/templates/full/image.tpl',
) );
    $tpl->setVariable( 'user_submited_username', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'user_submited_username', $var, $rootNamespace );
}

// def $user_submited_node
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user_submited', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user_submited'] : null;
$var1 = compiledFetchAttribute( $var, 'contentobject' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'main_node' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'url_alias' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'user_submited_node', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'user_submited_node' is already defined.", array (
  0 => 
  array (
    0 => 36,
    1 => 33,
    2 => 1439,
  ),
  1 => 
  array (
    0 => 36,
    1 => 193,
    2 => 1599,
  ),
  2 => 'extension/sevenx_diggclone/design/digg/override/templates/full/image.tpl',
) );
    $tpl->setVariable( 'user_submited_node', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'user_submited_node', $var, $rootNamespace );
}

$text .= '<a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user_submited_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user_submited_node'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
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

$text .= '><img src="/extension/sevenx_diggclone/design/digg/images/favicon/favicon.png" alt="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user_submited_username', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user_submited_username'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" width="16" height="16"/></a> submitted by <a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user_submited_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user_submited_node'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
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

$text .= '>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user_submited_username', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user_submited_username'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</a>';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'theme_song' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'has_content' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' listening to \'<a href="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'theme_song' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'theme_song' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'data_text' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</a>\'';
}
unset( $if_cond );
// if ends

$text .= ' ';
unset( $var );
$locale = eZLocale::instance();
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'published' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $locale->formatDateTimeType( '%Y/%m/%d %h:%i %a', $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '  (<a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'link' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'content' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
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

$text .= ' class="simple tight" title="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'title' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'content' );
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

$text .= '">via <a href=';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'link' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'link' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '...</a>)</p>

                ';
unset( $show );
unset( $show1 );
unset( $show2 );
unset( $show2 );
$show2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$show3 = compiledFetchAttribute( $show2, 'data_map' );
unset( $show2 );
$show2 = $show3;
$show3 = compiledFetchAttribute( $show2, 'intro' );
unset( $show2 );
$show2 = $show3;
if (! isset( $show2 ) ) $show2 = NULL;
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
$show1 = isset( $show2 );unset( $show2 );
if (! isset( $show1 ) ) $show1 = NULL;
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
if ( $show1 )
{
    unset( $show2 );
unset( $show3 );
unset( $show3 );
$show3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "node", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["node"] : null;
$show4 = compiledFetchAttribute( $show3, "data_map" );
unset( $show3 );
$show3 = $show4;
$show4 = compiledFetchAttribute( $show3, "intro" );
unset( $show3 );
$show3 = $show4;
$show4 = compiledFetchAttribute( $show3, "content" );
unset( $show3 );
$show3 = $show4;
$show4 = compiledFetchAttribute( $show3, "content" );
unset( $show3 );
$show3 = $show4;
$show4 = compiledFetchAttribute( $show3, "is_empty" );
unset( $show3 );
$show3 = $show4;
if (! isset( $show3 ) ) $show3 = NULL;
while ( is_object( $show3 ) and method_exists( $show3, 'templateValue' ) )
    $show3 = $show3->templateValue();
while ( is_object( $show3 ) and method_exists( $show3, 'templateValue' ) )
    $show3 = $show3->templateValue();
$show2 = !( $show3 );
unset( $show3 );
if (! isset( $show2 ) ) $show2 = NULL;
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();

    $show = $show2;
}
unset( $show1, $show2 );
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '<p>';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'intro',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 38,
    1 => 120,
    2 => 2385,
  ),
  1 => 
  array (
    0 => 38,
    1 => 169,
    2 => 2434,
  ),
  2 => 'extension/sevenx_diggclone/design/digg/override/templates/full/image.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '</p>';
}

$text .= '
                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'data_map' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'body' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
if ( $if_cond1 )
{
    unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "node", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["node"] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, "data_map" );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
$if_cond4 = compiledFetchAttribute( $if_cond3, "body" );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
$if_cond4 = compiledFetchAttribute( $if_cond3, "content" );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
$if_cond4 = compiledFetchAttribute( $if_cond3, "is_empty" );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = !( $if_cond3 );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();

    $if_cond = $if_cond2;
}
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                  <div class="attribute-long">
                   ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'body',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 42,
    1 => 19,
    2 => 2619,
  ),
  1 => 
  array (
    0 => 42,
    1 => 67,
    2 => 2667,
  ),
  2 => 'extension/sevenx_diggclone/design/digg/override/templates/full/image.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '            	  </div>
	        ';
}
unset( $if_cond );
// if ends

$text .= '
               ';
// if begins
$if_cond = true;
if ( $if_cond )
{
$text .= '                   ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'image' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'has_content' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                     <div class="attribute-image">
                        ';
// def $image_node
unset( $var );
unset( $var1 );
$var1 = $nod_a7b0d29d80b8724236de0cd6a8faeb62;
if ( !$var1 )
{
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
}
if ( !isset( $var1['image'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var1['image'] does not exist, cannot fetch the value." );
    $var1 = null;
}
else
    $var1 = $var1['image'];
if ( !is_object( $var1 ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var1 is not an object, cannot fetch content()" );
    $var1 = null;
}
else
{
     $var1Tmp = $var1->content();
     unset( $var1 );
     $var1 = $var1Tmp;
     unset( $var1Tmp );
}
$var2 = compiledFetchAttribute( $var1, 'relation_list' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, '0' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'node_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentNode' ),
  array_values( array(     'node_id' => $var1,
    'node_path' => false,
    'language_code' => false,
    'remote_id' => false ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'image_node', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'image_node' is already defined.", array (
  0 => 
  array (
    0 => 49,
    1 => 24,
    2 => 2930,
  ),
  1 => 
  array (
    0 => 49,
    1 => 138,
    2 => 3044,
  ),
  2 => 'extension/sevenx_diggclone/design/digg/override/templates/full/image.tpl',
) );
    $tpl->setVariable( 'image_node', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'image_node', $var, $rootNamespace );
}

$text .= '			';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'image_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['image_node'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                        ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'image',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
  'image_class' => 
  array (
    0 => 
    array (
      0 => 3,
      1 => 'large',
      2 => false,
    ),
  ),
  'href' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'image_node',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'object',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    3 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'image',
          2 => false,
        ),
      ),
      2 => false,
    ),
    4 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'content',
          2 => false,
        ),
      ),
      2 => false,
    ),
    5 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'original',
          2 => false,
        ),
      ),
      2 => false,
    ),
    6 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'full_path',
          2 => false,
        ),
      ),
      2 => false,
    ),
    7 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'ezurl',
      ),
      2 => false,
    ),
  ),
  'lightbox_class' => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'large',
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 51,
    1 => 24,
    2 => 3091,
  ),
  1 => 
  array (
    0 => 51,
    1 => 187,
    2 => 3254,
  ),
  2 => 'extension/sevenx_diggclone/design/digg/override/templates/full/image.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '			';
}
unset( $if_cond );
// if ends

$text .= '                        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'caption' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'has_content' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                           <div class="caption">
		               ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'caption',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 55,
    1 => 17,
    2 => 3396,
  ),
  1 => 
  array (
    0 => 55,
    1 => 68,
    2 => 3447,
  ),
  2 => 'extension/sevenx_diggclone/design/digg/override/templates/full/image.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '                    	   </div>
			';
}
unset( $if_cond );
// if ends

$text .= '               	      </div>
                   ';
}
unset( $if_cond );
// if ends

$text .= '               ';
}
unset( $if_cond );
// if ends

$text .= '
               <div class="news-details">
	           <a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
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

$text .= ' class="tool comments">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'children' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' comments</a>

		   

		   <span class="tool">category: <a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'parent' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
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

$text .= '>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'parent' );
unset( $var1 );
$var1 = $var2;
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

$text .= '</a></span>
               </div>

    	       <!-- google_ad_section_end -->
	</div>
    </div>
	
        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'versionview_mode', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['versionview_mode'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'enable_comments' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_int' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <div class="border-rounded">
            <h2>Comments</h2>
                <div class="content-view-children">
                    ';
// foreach begins
$skipDelimiter = true;
$fe_array_d76a8d5713ea753b7e3a43f245e60f16_1 = [];
$fe_array_keys_d76a8d5713ea753b7e3a43f245e60f16_1 = [];
$fe_n_items_d76a8d5713ea753b7e3a43f245e60f16_1 = 0;
$fe_n_items_processed_d76a8d5713ea753b7e3a43f245e60f16_1  = 0;
$fe_i_d76a8d5713ea753b7e3a43f245e60f16_1 = 0;
$fe_key_d76a8d5713ea753b7e3a43f245e60f16_1 = 0;
$fe_val_d76a8d5713ea753b7e3a43f245e60f16_1 = 0;
$fe_offset_d76a8d5713ea753b7e3a43f245e60f16_1 = 0;
$fe_max_d76a8d5713ea753b7e3a43f245e60f16_1 = 0;
$fe_reverse_d76a8d5713ea753b7e3a43f245e60f16_1 = 0;
$fe_first_val_d76a8d5713ea753b7e3a43f245e60f16_1 = 0;
$fe_last_val_d76a8d5713ea753b7e3a43f245e60f16_1 = 0;
if ( !isset( $fe_variable_stack_d76a8d5713ea753b7e3a43f245e60f16_1 ) ) $fe_variable_stack_d76a8d5713ea753b7e3a43f245e60f16_1 = [];
$fe_variable_stack_d76a8d5713ea753b7e3a43f245e60f16_1[] = @compact( 'fe_array_d76a8d5713ea753b7e3a43f245e60f16_1', 'fe_array_keys_d76a8d5713ea753b7e3a43f245e60f16_1', 'fe_n_items_d76a8d5713ea753b7e3a43f245e60f16_1', 'fe_n_items_processed_d76a8d5713ea753b7e3a43f245e60f16_1', 'fe_i_d76a8d5713ea753b7e3a43f245e60f16_1', 'fe_key_d76a8d5713ea753b7e3a43f245e60f16_1', 'fe_val_d76a8d5713ea753b7e3a43f245e60f16_1', 'fe_offset_d76a8d5713ea753b7e3a43f245e60f16_1', 'fe_max_d76a8d5713ea753b7e3a43f245e60f16_1', 'fe_reverse_d76a8d5713ea753b7e3a43f245e60f16_1', 'fe_first_val_d76a8d5713ea753b7e3a43f245e60f16_1', 'fe_last_val_d76a8d5713ea753b7e3a43f245e60f16_1' );
unset( $fe_array_d76a8d5713ea753b7e3a43f245e60f16_1 );
unset( $fe_array_d76a8d5713ea753b7e3a43f245e60f16_11 );
unset( $fe_array_d76a8d5713ea753b7e3a43f245e60f16_11 );
$fe_array_d76a8d5713ea753b7e3a43f245e60f16_11 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$fe_array_d76a8d5713ea753b7e3a43f245e60f16_12 = compiledFetchAttribute( $fe_array_d76a8d5713ea753b7e3a43f245e60f16_11, 'node_id' );
unset( $fe_array_d76a8d5713ea753b7e3a43f245e60f16_11 );
$fe_array_d76a8d5713ea753b7e3a43f245e60f16_11 = $fe_array_d76a8d5713ea753b7e3a43f245e60f16_12;
if (! isset( $fe_array_d76a8d5713ea753b7e3a43f245e60f16_11 ) ) $fe_array_d76a8d5713ea753b7e3a43f245e60f16_11 = NULL;
while ( is_object( $fe_array_d76a8d5713ea753b7e3a43f245e60f16_11 ) and method_exists( $fe_array_d76a8d5713ea753b7e3a43f245e60f16_11, 'templateValue' ) )
    $fe_array_d76a8d5713ea753b7e3a43f245e60f16_11 = $fe_array_d76a8d5713ea753b7e3a43f245e60f16_11->templateValue();
while ( is_object( $fe_array_d76a8d5713ea753b7e3a43f245e60f16_11 ) and method_exists( $fe_array_d76a8d5713ea753b7e3a43f245e60f16_11, 'templateValue' ) )
    $fe_array_d76a8d5713ea753b7e3a43f245e60f16_11 = $fe_array_d76a8d5713ea753b7e3a43f245e60f16_11->templateValue();
$fe_array_d76a8d5713ea753b7e3a43f245e60f16_1 = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array_values( array(     'parent_node_id' => $fe_array_d76a8d5713ea753b7e3a43f245e60f16_11,
    'sort_by' => array( "published",
       "0" ),
    'only_translated' => false,
    'language' => false,
    'offset' => false,
    'limit' => false,
    'depth' => 1,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => "include",
    'class_filter_array' => array( "comment" ),
    'group_by' => false,
    'main_node_only' => false,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => null ) ) );
$fe_array_d76a8d5713ea753b7e3a43f245e60f16_1 = isset( $fe_array_d76a8d5713ea753b7e3a43f245e60f16_1['result'] ) ? $fe_array_d76a8d5713ea753b7e3a43f245e60f16_1['result'] : null;
unset( $fe_array_d76a8d5713ea753b7e3a43f245e60f16_11 );
if (! isset( $fe_array_d76a8d5713ea753b7e3a43f245e60f16_1 ) ) $fe_array_d76a8d5713ea753b7e3a43f245e60f16_1 = NULL;
while ( is_object( $fe_array_d76a8d5713ea753b7e3a43f245e60f16_1 ) and method_exists( $fe_array_d76a8d5713ea753b7e3a43f245e60f16_1, 'templateValue' ) )
    $fe_array_d76a8d5713ea753b7e3a43f245e60f16_1 = $fe_array_d76a8d5713ea753b7e3a43f245e60f16_1->templateValue();

$fe_array_keys_d76a8d5713ea753b7e3a43f245e60f16_1 = is_array( $fe_array_d76a8d5713ea753b7e3a43f245e60f16_1 ) ? array_keys( $fe_array_d76a8d5713ea753b7e3a43f245e60f16_1 ) : [];
$fe_n_items_d76a8d5713ea753b7e3a43f245e60f16_1 = count( $fe_array_keys_d76a8d5713ea753b7e3a43f245e60f16_1 );
$fe_n_items_processed_d76a8d5713ea753b7e3a43f245e60f16_1 = 0;
$fe_offset_d76a8d5713ea753b7e3a43f245e60f16_1 = 0;
$fe_max_d76a8d5713ea753b7e3a43f245e60f16_1 = $fe_n_items_d76a8d5713ea753b7e3a43f245e60f16_1 - $fe_offset_d76a8d5713ea753b7e3a43f245e60f16_1;
$fe_reverse_d76a8d5713ea753b7e3a43f245e60f16_1 = false;
if ( $fe_offset_d76a8d5713ea753b7e3a43f245e60f16_1 < 0 || $fe_offset_d76a8d5713ea753b7e3a43f245e60f16_1 >= $fe_n_items_d76a8d5713ea753b7e3a43f245e60f16_1 )
{
    $fe_offset_d76a8d5713ea753b7e3a43f245e60f16_1 = ( $fe_offset_d76a8d5713ea753b7e3a43f245e60f16_1 < 0 ) ? 0 : $fe_n_items_d76a8d5713ea753b7e3a43f245e60f16_1;
    if ( $fe_n_items_d76a8d5713ea753b7e3a43f245e60f16_1 || $fe_offset_d76a8d5713ea753b7e3a43f245e60f16_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_d76a8d5713ea753b7e3a43f245e60f16_1'. Array count: $fe_n_items_d76a8d5713ea753b7e3a43f245e60f16_1");   
}
}
if ( $fe_max_d76a8d5713ea753b7e3a43f245e60f16_1 < 0 || $fe_offset_d76a8d5713ea753b7e3a43f245e60f16_1 + $fe_max_d76a8d5713ea753b7e3a43f245e60f16_1 > $fe_n_items_d76a8d5713ea753b7e3a43f245e60f16_1 )
{
    if ( $fe_max_d76a8d5713ea753b7e3a43f245e60f16_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_d76a8d5713ea753b7e3a43f245e60f16_1");
    $fe_max_d76a8d5713ea753b7e3a43f245e60f16_1 = $fe_n_items_d76a8d5713ea753b7e3a43f245e60f16_1 - $fe_offset_d76a8d5713ea753b7e3a43f245e60f16_1;
}
if ( $fe_reverse_d76a8d5713ea753b7e3a43f245e60f16_1 )
{
    $fe_first_val_d76a8d5713ea753b7e3a43f245e60f16_1 = $fe_n_items_d76a8d5713ea753b7e3a43f245e60f16_1 - 1 - $fe_offset_d76a8d5713ea753b7e3a43f245e60f16_1;
    $fe_last_val_d76a8d5713ea753b7e3a43f245e60f16_1  = 0;
}
else
{
    $fe_first_val_d76a8d5713ea753b7e3a43f245e60f16_1 = $fe_offset_d76a8d5713ea753b7e3a43f245e60f16_1;
    $fe_last_val_d76a8d5713ea753b7e3a43f245e60f16_1  = $fe_n_items_d76a8d5713ea753b7e3a43f245e60f16_1 - 1;
}
// foreach
for ( $fe_i_d76a8d5713ea753b7e3a43f245e60f16_1 = $fe_first_val_d76a8d5713ea753b7e3a43f245e60f16_1; $fe_n_items_processed_d76a8d5713ea753b7e3a43f245e60f16_1 < $fe_max_d76a8d5713ea753b7e3a43f245e60f16_1 && ( $fe_reverse_d76a8d5713ea753b7e3a43f245e60f16_1 ? $fe_i_d76a8d5713ea753b7e3a43f245e60f16_1 >= $fe_last_val_d76a8d5713ea753b7e3a43f245e60f16_1 : $fe_i_d76a8d5713ea753b7e3a43f245e60f16_1 <= $fe_last_val_d76a8d5713ea753b7e3a43f245e60f16_1 ); $fe_reverse_d76a8d5713ea753b7e3a43f245e60f16_1 ? $fe_i_d76a8d5713ea753b7e3a43f245e60f16_1-- : $fe_i_d76a8d5713ea753b7e3a43f245e60f16_1++ )
{
$fe_key_d76a8d5713ea753b7e3a43f245e60f16_1 = $fe_array_keys_d76a8d5713ea753b7e3a43f245e60f16_1[$fe_i_d76a8d5713ea753b7e3a43f245e60f16_1];
$fe_val_d76a8d5713ea753b7e3a43f245e60f16_1 = $fe_array_d76a8d5713ea753b7e3a43f245e60f16_1[$fe_key_d76a8d5713ea753b7e3a43f245e60f16_1];
$vars[$rootNamespace]['comment'] = $fe_val_d76a8d5713ea753b7e3a43f245e60f16_1;
$text .= '                        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'comment', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['comment'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
$vars[$namespace]['node'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( 'design' );
    $dKeys = $resH->keys();
}
if ( !isset( $dKeysStack ) )
{
    $dKeysStack = array();
}
$dKeysStack[] = $dKeys;
unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'contentobject_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["object"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'contentclass_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'match_ingroup_id_list' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_group"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_id_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_identifier_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent_node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'depth' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["depth"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'url_alias' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["url_alias"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_object_remote_id"] = $dKey;
unset( $dKey );

if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "bug_report_form", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "bug_report_form" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/bug_report_form-a09e5fb7cf2f36cc25d27360fa3adc5a.php' ) && filemtime( 'var/site/cache/template/compiled/bug_report_form-a09e5fb7cf2f36cc25d27360fa3adc5a.php' ) > filemtime( 'design/delta/override/templates/line/bug_report_form.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/bug_report_form.tpl' );
include( '' . 'var/site/cache/template/compiled/bug_report_form-a09e5fb7cf2f36cc25d27360fa3adc5a.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/bug_report_form.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "category", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "category" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/category-29f2a5284ec5ea723b435a7ed2e9b47c.php' ) && filemtime( 'var/site/cache/template/compiled/category-29f2a5284ec5ea723b435a7ed2e9b47c.php' ) > filemtime( 'design/delta/override/templates/line/category.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/category.tpl' );
include( '' . 'var/site/cache/template/compiled/category-29f2a5284ec5ea723b435a7ed2e9b47c.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/category.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "user", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "user" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/user-53a3920918b523fb7df540df9fc2ba4e.php' ) && filemtime( 'var/site/cache/template/compiled/user-53a3920918b523fb7df540df9fc2ba4e.php' ) > filemtime( 'design/delta/override/templates/line/user.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/user.tpl' );
include( '' . 'var/site/cache/template/compiled/user-53a3920918b523fb7df540df9fc2ba4e.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/user.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "story", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "story" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/story-28ce5526878ccf1911475287b39ea36b.php' ) && filemtime( 'var/site/cache/template/compiled/story-28ce5526878ccf1911475287b39ea36b.php' ) > filemtime( 'design/delta/override/templates/line/story.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/story.tpl' );
include( '' . 'var/site/cache/template/compiled/story-28ce5526878ccf1911475287b39ea36b.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/story.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "youtube_video", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "youtube_video" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/youtube_video-215631ac83cd1cae6696ade340cc39ec.php' ) && filemtime( 'var/site/cache/template/compiled/youtube_video-215631ac83cd1cae6696ade340cc39ec.php' ) > filemtime( 'extension/sevenx_diggclone/design/digg/override/templates/line/youtube_video.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/sevenx_diggclone/design/digg/override/templates/line/youtube_video.tpl' );
include( '' . 'var/site/cache/template/compiled/youtube_video-215631ac83cd1cae6696ade340cc39ec.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/sevenx_diggclone/design/digg/override/templates/line/youtube_video.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "instagram_video", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "instagram_video" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/instagram_video-a2b8aea67863600543403d462f7b2430.php' ) && filemtime( 'var/site/cache/template/compiled/instagram_video-a2b8aea67863600543403d462f7b2430.php' ) > filemtime( 'extension/sevenx_diggclone/design/digg/override/templates/line/instagram_video.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/sevenx_diggclone/design/digg/override/templates/line/instagram_video.tpl' );
include( '' . 'var/site/cache/template/compiled/instagram_video-a2b8aea67863600543403d462f7b2430.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/sevenx_diggclone/design/digg/override/templates/line/instagram_video.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/article-0dc51252b443bc8ca920babc4dfc063f.php' ) && filemtime( 'var/site/cache/template/compiled/article-0dc51252b443bc8ca920babc4dfc063f.php' ) > filemtime( 'design/delta/override/templates/line/article.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/article.tpl' );
include( '' . 'var/site/cache/template/compiled/article-0dc51252b443bc8ca920babc4dfc063f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/article.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "geo_article", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "geo_article" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/geo_article-c6158a194520ae223b667589c0ca63ac.php' ) && filemtime( 'var/site/cache/template/compiled/geo_article-c6158a194520ae223b667589c0ca63ac.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/geo_article.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/geo_article.tpl' );
include( '' . 'var/site/cache/template/compiled/geo_article-c6158a194520ae223b667589c0ca63ac.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/geo_article.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_mainpage", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_mainpage" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/article_mainpage-8eb592bf1ba994f1b60fa4aef510f2eb.php' ) && filemtime( 'var/site/cache/template/compiled/article_mainpage-8eb592bf1ba994f1b60fa4aef510f2eb.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/article_mainpage.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/article_mainpage.tpl' );
include( '' . 'var/site/cache/template/compiled/article_mainpage-8eb592bf1ba994f1b60fa4aef510f2eb.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/article_mainpage.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_subpage", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_subpage" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/article_subpage-81769407d6e1d2cd2d0c50e85a9c7fdb.php' ) && filemtime( 'var/site/cache/template/compiled/article_subpage-81769407d6e1d2cd2d0c50e85a9c7fdb.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/article_subpage.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/article_subpage.tpl' );
include( '' . 'var/site/cache/template/compiled/article_subpage-81769407d6e1d2cd2d0c50e85a9c7fdb.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/article_subpage.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "banner", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "banner" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/banner-b7050ba8e44bbded98450cf004ca7f79.php' ) && filemtime( 'var/site/cache/template/compiled/banner-b7050ba8e44bbded98450cf004ca7f79.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/banner.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/banner.tpl' );
include( '' . 'var/site/cache/template/compiled/banner-b7050ba8e44bbded98450cf004ca7f79.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/banner.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "blog", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "blog" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/blog-0eefb6a517b1d59971fdf42eb6cf7c0f.php' ) && filemtime( 'var/site/cache/template/compiled/blog-0eefb6a517b1d59971fdf42eb6cf7c0f.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/blog.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/blog.tpl' );
include( '' . 'var/site/cache/template/compiled/blog-0eefb6a517b1d59971fdf42eb6cf7c0f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/blog.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "blog_post", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "blog_post" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/blog_post-6ef378421b57de5c47a9352349bd01e3.php' ) && filemtime( 'var/site/cache/template/compiled/blog_post-6ef378421b57de5c47a9352349bd01e3.php' ) > filemtime( 'extension/sevenx_diggclone/design/digg/override/templates/line/blog_post.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/sevenx_diggclone/design/digg/override/templates/line/blog_post.tpl' );
include( '' . 'var/site/cache/template/compiled/blog_post-6ef378421b57de5c47a9352349bd01e3.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/sevenx_diggclone/design/digg/override/templates/line/blog_post.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "comment", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "comment" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/comment-4bf35f09f1c4e9ac6cb6843197f07234.php' ) && filemtime( 'var/site/cache/template/compiled/comment-4bf35f09f1c4e9ac6cb6843197f07234.php' ) > filemtime( 'design/delta/override/templates/line/comment.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/comment.tpl' );
include( '' . 'var/site/cache/template/compiled/comment-4bf35f09f1c4e9ac6cb6843197f07234.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/comment.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "documentation_page", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "documentation_page" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/documentation_page-2a3f2d2c0e4683ed9f5d9320e772c5da.php' ) && filemtime( 'var/site/cache/template/compiled/documentation_page-2a3f2d2c0e4683ed9f5d9320e772c5da.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/documentation_page.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/documentation_page.tpl' );
include( '' . 'var/site/cache/template/compiled/documentation_page-2a3f2d2c0e4683ed9f5d9320e772c5da.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/documentation_page.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "event_calendar", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "event_calendar" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/event_calendar-2525ac7b8a5a786030447e88a7dfb04d.php' ) && filemtime( 'var/site/cache/template/compiled/event_calendar-2525ac7b8a5a786030447e88a7dfb04d.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/event_calendar.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/event_calendar.tpl' );
include( '' . 'var/site/cache/template/compiled/event_calendar-2525ac7b8a5a786030447e88a7dfb04d.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/event_calendar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "event", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "event" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/event-c60ef1079d868f89e7b1b63a58ba31be.php' ) && filemtime( 'var/site/cache/template/compiled/event-c60ef1079d868f89e7b1b63a58ba31be.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/event.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/event.tpl' );
include( '' . 'var/site/cache/template/compiled/event-c60ef1079d868f89e7b1b63a58ba31be.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/event.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "feedback_form", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "feedback_form" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/feedback_form-271ca800559b2f6858133a01c4ccfe93.php' ) && filemtime( 'var/site/cache/template/compiled/feedback_form-271ca800559b2f6858133a01c4ccfe93.php' ) > filemtime( 'design/delta/override/templates/line/feedback_form.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/feedback_form.tpl' );
include( '' . 'var/site/cache/template/compiled/feedback_form-271ca800559b2f6858133a01c4ccfe93.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/feedback_form.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "file", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "file" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/file-3758e42026f15418124382bf9cb09bbf.php' ) && filemtime( 'var/site/cache/template/compiled/file-3758e42026f15418124382bf9cb09bbf.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/file.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/file.tpl' );
include( '' . 'var/site/cache/template/compiled/file-3758e42026f15418124382bf9cb09bbf.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/file.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "flash", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "flash" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/flash-c345c6e42d44095796bfe1db2e0a5b58.php' ) && filemtime( 'var/site/cache/template/compiled/flash-c345c6e42d44095796bfe1db2e0a5b58.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/flash.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/flash.tpl' );
include( '' . 'var/site/cache/template/compiled/flash-c345c6e42d44095796bfe1db2e0a5b58.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/flash.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "folder", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "folder" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/folder-75e1beaa9daa5edcba545fc389bf2128.php' ) && filemtime( 'var/site/cache/template/compiled/folder-75e1beaa9daa5edcba545fc389bf2128.php' ) > filemtime( 'design/delta/override/templates/line/folder.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/folder.tpl' );
include( '' . 'var/site/cache/template/compiled/folder-75e1beaa9daa5edcba545fc389bf2128.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/folder.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/forum-2fa55dab5a456a6aba7031471f0e2e3e.php' ) && filemtime( 'var/site/cache/template/compiled/forum-2fa55dab5a456a6aba7031471f0e2e3e.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/forum.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/forum.tpl' );
include( '' . 'var/site/cache/template/compiled/forum-2fa55dab5a456a6aba7031471f0e2e3e.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/forum.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum_reply", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum_reply" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/forum_reply-4924123f5e578783f4ab098d0dffee9c.php' ) && filemtime( 'var/site/cache/template/compiled/forum_reply-4924123f5e578783f4ab098d0dffee9c.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/forum_reply.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/forum_reply.tpl' );
include( '' . 'var/site/cache/template/compiled/forum_reply-4924123f5e578783f4ab098d0dffee9c.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/forum_reply.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum_topic", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum_topic" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/forum_topic-843ed6aa42d524a1fa22fccd99bb8088.php' ) && filemtime( 'var/site/cache/template/compiled/forum_topic-843ed6aa42d524a1fa22fccd99bb8088.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/forum_topic.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/forum_topic.tpl' );
include( '' . 'var/site/cache/template/compiled/forum_topic-843ed6aa42d524a1fa22fccd99bb8088.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/forum_topic.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forums", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forums" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/forums-fdfdc5d11636c6b72c09ca0e634699e1.php' ) && filemtime( 'var/site/cache/template/compiled/forums-fdfdc5d11636c6b72c09ca0e634699e1.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/forums.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/forums.tpl' );
include( '' . 'var/site/cache/template/compiled/forums-fdfdc5d11636c6b72c09ca0e634699e1.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/forums.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "gallery", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "gallery" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/gallery-b46366278a5d1acc889689a5178e76c9.php' ) && filemtime( 'var/site/cache/template/compiled/gallery-b46366278a5d1acc889689a5178e76c9.php' ) > filemtime( 'extension/sevenx_diggclone/design/digg/override/templates/line/gallery.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/sevenx_diggclone/design/digg/override/templates/line/gallery.tpl' );
include( '' . 'var/site/cache/template/compiled/gallery-b46366278a5d1acc889689a5178e76c9.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/sevenx_diggclone/design/digg/override/templates/line/gallery.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "image", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "image" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/image-846d0aa3eb266feceb498985696efdc1.php' ) && filemtime( 'var/site/cache/template/compiled/image-846d0aa3eb266feceb498985696efdc1.php' ) > filemtime( 'design/delta/override/templates/line/image.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/image.tpl' );
include( '' . 'var/site/cache/template/compiled/image-846d0aa3eb266feceb498985696efdc1.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/image.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "infobox", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "infobox" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/infobox-1b393dc085eabb194b5cc4b6a846e4aa.php' ) && filemtime( 'var/site/cache/template/compiled/infobox-1b393dc085eabb194b5cc4b6a846e4aa.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/infobox.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/infobox.tpl' );
include( '' . 'var/site/cache/template/compiled/infobox-1b393dc085eabb194b5cc4b6a846e4aa.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/infobox.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "link", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "link" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/link-2ac4d77fb122ded7fc5704360a33f762.php' ) && filemtime( 'var/site/cache/template/compiled/link-2ac4d77fb122ded7fc5704360a33f762.php' ) > filemtime( 'design/delta/override/templates/line/link.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/link.tpl' );
include( '' . 'var/site/cache/template/compiled/link-2ac4d77fb122ded7fc5704360a33f762.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/link.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "multicalendar", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "multicalendar" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/multicalendar-1a11a1a66ff5e4705f8de4f3098ad82f.php' ) && filemtime( 'var/site/cache/template/compiled/multicalendar-1a11a1a66ff5e4705f8de4f3098ad82f.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/multicalendar.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/multicalendar.tpl' );
include( '' . 'var/site/cache/template/compiled/multicalendar-1a11a1a66ff5e4705f8de4f3098ad82f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/multicalendar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "poll", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "poll" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/poll-d60f5c1c7e2f5519285fe8b2907403da.php' ) && filemtime( 'var/site/cache/template/compiled/poll-d60f5c1c7e2f5519285fe8b2907403da.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/poll.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/poll.tpl' );
include( '' . 'var/site/cache/template/compiled/poll-d60f5c1c7e2f5519285fe8b2907403da.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/poll.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "product", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "product" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/product-d09e8a7524a9c500849e47ee1ff4ab25.php' ) && filemtime( 'var/site/cache/template/compiled/product-d09e8a7524a9c500849e47ee1ff4ab25.php' ) > filemtime( 'extension/sevenx_diggclone/design/digg/override/templates/line/product.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/sevenx_diggclone/design/digg/override/templates/line/product.tpl' );
include( '' . 'var/site/cache/template/compiled/product-d09e8a7524a9c500849e47ee1ff4ab25.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/sevenx_diggclone/design/digg/override/templates/line/product.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "silverlight", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "silverlight" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/silverlight-3f7a054de3d8d91d837d1e7c14fc319d.php' ) && filemtime( 'var/site/cache/template/compiled/silverlight-3f7a054de3d8d91d837d1e7c14fc319d.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/silverlight.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/silverlight.tpl' );
include( '' . 'var/site/cache/template/compiled/silverlight-3f7a054de3d8d91d837d1e7c14fc319d.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/silverlight.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "quicktime", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "quicktime" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/quicktime-416ef5d211cdc513daba40e8da09154f.php' ) && filemtime( 'var/site/cache/template/compiled/quicktime-416ef5d211cdc513daba40e8da09154f.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/quicktime.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/quicktime.tpl' );
include( '' . 'var/site/cache/template/compiled/quicktime-416ef5d211cdc513daba40e8da09154f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/quicktime.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "real_video", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "real_video" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/real_video-67a69ed473224fffbf81a9a73ae837a8.php' ) && filemtime( 'var/site/cache/template/compiled/real_video-67a69ed473224fffbf81a9a73ae837a8.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/real_video.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/real_video.tpl' );
include( '' . 'var/site/cache/template/compiled/real_video-67a69ed473224fffbf81a9a73ae837a8.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/real_video.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "windows_media", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "windows_media" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/windows_media-959ce016ef74f23d3c1d5205b05b76eb.php' ) && filemtime( 'var/site/cache/template/compiled/windows_media-959ce016ef74f23d3c1d5205b05b76eb.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/windows_media.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/windows_media.tpl' );
include( '' . 'var/site/cache/template/compiled/windows_media-959ce016ef74f23d3c1d5205b05b76eb.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/windows_media.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else 
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/line-9f5ac76563da0e1aad1b67a83fdd1bb5.php' ) && filemtime( 'var/site/cache/template/compiled/line-9f5ac76563da0e1aad1b67a83fdd1bb5.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/templates/node/view/line.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/templates/node/view/line.tpl' );
include( '' . 'var/site/cache/template/compiled/line-9f5ac76563da0e1aad1b67a83fdd1bb5.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/templates/node/view/line.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
$dKeys = array_pop( $dKeysStack );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $vars[$namespace]['node'] );
$text .= '                    ';
$fe_n_items_processed_d76a8d5713ea753b7e3a43f245e60f16_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_d76a8d5713ea753b7e3a43f245e60f16_1 ) ) extract( array_pop( $fe_variable_stack_d76a8d5713ea753b7e3a43f245e60f16_1 ) );

else
{

unset( $fe_array_d76a8d5713ea753b7e3a43f245e60f16_1 );

unset( $fe_array_keys_d76a8d5713ea753b7e3a43f245e60f16_1 );

unset( $fe_n_items_d76a8d5713ea753b7e3a43f245e60f16_1 );

unset( $fe_n_items_processed_d76a8d5713ea753b7e3a43f245e60f16_1 );

unset( $fe_i_d76a8d5713ea753b7e3a43f245e60f16_1 );

unset( $fe_key_d76a8d5713ea753b7e3a43f245e60f16_1 );

unset( $fe_val_d76a8d5713ea753b7e3a43f245e60f16_1 );

unset( $fe_offset_d76a8d5713ea753b7e3a43f245e60f16_1 );

unset( $fe_max_d76a8d5713ea753b7e3a43f245e60f16_1 );

unset( $fe_reverse_d76a8d5713ea753b7e3a43f245e60f16_1 );

unset( $fe_first_val_d76a8d5713ea753b7e3a43f245e60f16_1 );

unset( $fe_last_val_d76a8d5713ea753b7e3a43f245e60f16_1 );

unset( $fe_variable_stack_d76a8d5713ea753b7e3a43f245e60f16_1 );

}

// foreach ends
$text .= '                </div>

                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = call_user_func_array( array( new eZContentFunctionCollection(), 'checkAccess' ),
  array_values( array(     'access' => "create",
    'contentobject' => $if_cond1,
    'contentclass_id' => "comment",
    'parent_contentclass_id' => false,
    'language' => false ) ) );
$if_cond = isset( $if_cond['result'] ) ? $if_cond['result'] : null;
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                    <form method="post" action="/content/action">
                    <input type="hidden" name="ClassIdentifier" value="comment" />
                    <input type="hidden" name="NodeID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'main_node' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
                    <input type="hidden" name="ContentLanguageCode" value="eng-US" />
                    <input class="button new_comment" type="submit" name="NewButton" value="New comment" />
                    </form>
                ';
}
else
{
$text .= '                    <p>';
unset( $var );
$var = '%login_link_startLog in%login_link_end or %create_link_startcreate a user account%create_link_end to comment.';
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'i18n',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'design/ezwebin/full/article',
      2 => false,
    ),
  ),
  1 => 
  array (
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'hash',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '%login_link_start',
            2 => false,
          ),
        ),
        2 => 
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
                  1 => '<a href="',
                  2 => false,
                ),
              ),
              2 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => '/user/login',
                  2 => false,
                ),
                1 => 
                array (
                  0 => 6,
                  1 => 
                  array (
                    0 => 'ezurl',
                    1 => 
                    array (
                      0 => 
                      array (
                        0 => 3,
                        1 => 'no',
                        2 => false,
                      ),
                    ),
                  ),
                  2 => false,
                ),
              ),
              3 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => '">',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '%login_link_end',
            2 => false,
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '</a>',
            2 => false,
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '%create_link_start',
            2 => false,
          ),
        ),
        6 => 
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
                  1 => '<a href="',
                  2 => false,
                ),
              ),
              2 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => '/user/register',
                  2 => false,
                ),
                1 => 
                array (
                  0 => 6,
                  1 => 
                  array (
                    0 => 'ezurl',
                    1 => 
                    array (
                      0 => 
                      array (
                        0 => 3,
                        1 => 'no',
                        2 => false,
                      ),
                    ),
                  ),
                  2 => false,
                ),
              ),
              3 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => '">',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '%create_link_end',
            2 => false,
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '</a>',
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</p>
                ';
}
unset( $if_cond );
// if ends

$text .= '        </div>
        ';
}
unset( $if_cond );
// if ends

$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '
        

        </div>
    </div>

</div></div></div>
<div class="border-bl"><div class="border-br"><div class="border-bc"></div></div></div>
</div>
';

$setArray = $oldSetArray_a7b0d29d80b8724236de0cd6a8faeb62;
$tpl->Level--;
?>
