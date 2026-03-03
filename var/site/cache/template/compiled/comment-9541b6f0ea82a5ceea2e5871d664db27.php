<?php
// URI:       design:content/collectedinfo/comment.tpl
// Filename:  design/delta/templates/content/collectedinfo/comment.tpl
// Timestamp: 1768808564 (Sun Jan 18 23:42:44 PST 2026)
$oldSetArray_1301e19012037cebd3c247921fd08b4a = isset( $setArray ) ? $setArray : array();
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

if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
unset( $var );
$var = 'Story Votes %pollname';
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
      1 => 'design/ezwebin/collectedinfo/poll',
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
            1 => '%pollname',
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
                1 => 'name',
                2 => false,
              ),
            ),
            2 => false,
          ),
          2 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'wash',
            ),
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

$blockText = $text;
$vars['']['title'] = $blockText;
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
    0 => 3,
    1 => 0,
    2 => 165,
  ),
  1 => 
  array (
    0 => 7,
    1 => 0,
    2 => 424,
  ),
  2 => 'design/delta/templates/content/collectedinfo/comment.tpl',
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
    0 => 3,
    1 => 0,
    2 => 165,
  ),
  1 => 
  array (
    0 => 7,
    1 => 0,
    2 => 424,
  ),
  2 => 'design/delta/templates/content/collectedinfo/comment.tpl',
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
    0 => 3,
    1 => 0,
    2 => 165,
  ),
  1 => 
  array (
    0 => 7,
    1 => 0,
    2 => 424,
  ),
  2 => 'design/delta/templates/content/collectedinfo/comment.tpl',
) );
    $tpl->setVariable( 'currentUserID', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'currentUserID', $var, $rootNamespace );
}

// def $current_node
if ( $tpl->hasVariable( 'current_node', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'current_node' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 165,
  ),
  1 => 
  array (
    0 => 7,
    1 => 0,
    2 => 424,
  ),
  2 => 'design/delta/templates/content/collectedinfo/comment.tpl',
) );
    $tpl->setVariable( 'current_node', false, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'current_node', false, $rootNamespace );
}

$text .= '
      <section class="section article-section">
        <div class="container">

          <!-- Article -->
          <ul class="article-list">
            <li class="article-item">
              <article class="article">
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
    0 => 16,
    1 => 18,
    2 => 668,
  ),
  1 => 
  array (
    0 => 16,
    1 => 176,
    2 => 826,
  ),
  2 => 'design/delta/templates/content/collectedinfo/comment.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '<div>
                  <h2 class="article-title">
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

$text .= '>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'subject' );
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

$text .= '</a>
                    
                  </h2>
                  <div class="article-meta">
                    <span class="article-score">';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'total_diggs', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['total_diggs'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'total_diggs', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['total_diggs'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

}
else
{
$text .= '0';
}
unset( $if_cond );
// if ends

$text .= ' points</span> by
                    ';
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
    0 => 24,
    1 => 20,
    2 => 1313,
  ),
  1 => 
  array (
    0 => 24,
    1 => 180,
    2 => 1473,
  ),
  2 => 'design/delta/templates/content/collectedinfo/comment.tpl',
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
    0 => 24,
    1 => 20,
    2 => 1313,
  ),
  1 => 
  array (
    0 => 24,
    1 => 180,
    2 => 1473,
  ),
  2 => 'design/delta/templates/content/collectedinfo/comment.tpl',
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
    0 => 24,
    1 => 20,
    2 => 1313,
  ),
  1 => 
  array (
    0 => 24,
    1 => 180,
    2 => 1473,
  ),
  2 => 'design/delta/templates/content/collectedinfo/comment.tpl',
) );
    $tpl->setVariable( 'user_submited_node', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'user_submited_node', $var, $rootNamespace );
}

$text .= '<a class="linkarticle-author" href=';
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

$text .= '</a>

                    ';
// def $now
unset( $var );
$var = time();
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'now', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'now' is already defined.", array (
  0 => 
  array (
    0 => 26,
    1 => 20,
    2 => 1589,
  ),
  1 => 
  array (
    0 => 30,
    1 => 20,
    2 => 1859,
  ),
  2 => 'design/delta/templates/content/collectedinfo/comment.tpl',
) );
    $tpl->setVariable( 'now', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'now', $var, $rootNamespace );
}

// def $diff_seconds
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'now', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['now'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var3 = compiledFetchAttribute( $var2, 'object' );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, 'published' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = $var1 - $var2;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'diff_seconds', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'diff_seconds' is already defined.", array (
  0 => 
  array (
    0 => 26,
    1 => 20,
    2 => 1589,
  ),
  1 => 
  array (
    0 => 30,
    1 => 20,
    2 => 1859,
  ),
  2 => 'design/delta/templates/content/collectedinfo/comment.tpl',
) );
    $tpl->setVariable( 'diff_seconds', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'diff_seconds', $var, $rootNamespace );
}

// def $hours_ago
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'diff_seconds', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['diff_seconds'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
@$var1 = $var2 / 3600.000000;
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = round( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'hours_ago', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'hours_ago' is already defined.", array (
  0 => 
  array (
    0 => 26,
    1 => 20,
    2 => 1589,
  ),
  1 => 
  array (
    0 => 30,
    1 => 20,
    2 => 1859,
  ),
  2 => 'design/delta/templates/content/collectedinfo/comment.tpl',
) );
    $tpl->setVariable( 'hours_ago', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'hours_ago', $var, $rootNamespace );
}

// def $days_ago
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'diff_seconds', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['diff_seconds'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
@$var1 = $var2 / 86400.000000;
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = round( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'days_ago', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'days_ago' is already defined.", array (
  0 => 
  array (
    0 => 26,
    1 => 20,
    2 => 1589,
  ),
  1 => 
  array (
    0 => 30,
    1 => 20,
    2 => 1859,
  ),
  2 => 'design/delta/templates/content/collectedinfo/comment.tpl',
) );
    $tpl->setVariable( 'days_ago', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'days_ago', $var, $rootNamespace );
}

$text .= '                    <span class="article-time">';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hours_ago', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hours_ago'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) < ( 24 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hours_ago', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hours_ago'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' hours';
}
else
{
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'days_ago', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['days_ago'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' days';
}
unset( $if_cond );
// if ends

$text .= ' ago @ ';
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

$text .= '</span>
                    <br>
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
                     | <a href=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var3 = compiledFetchAttribute( $var2, 'url_alias' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( $var2 . '#report' );
unset( $var2 );
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

$text .= ' class="link">report</a> |
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

$text .= ' class="link">';
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
                  </div>
                </div>
              </article>
            </li>
            </ul>
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'error', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['error'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'error_anonymous_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['error_anonymous_user'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <div class="warning">
            <h2>Please log in to vote on this story.</h2>
        </div>
        ';
}
unset( $if_cond );
// if ends

$text .= '
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'error_existing_data', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['error_existing_data'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <div class="warning">
            <h2>You have already voted for this story.</h2>
        </div>
        ';
}
unset( $if_cond );
// if ends

$text .= '
        ';
}
unset( $if_cond );
// if ends

$text .= '


     <div class="news-details" style="padding-top:0rem;padding-bottom:0.46rem;">
       <h3>Vote Percentages</h3>
     </div>

        ';
// foreach begins
$skipDelimiter = true;
$fe_array_1747c2f09c2e16fda6e459eeb6045af3_2 = [];
$fe_array_keys_1747c2f09c2e16fda6e459eeb6045af3_2 = [];
$fe_n_items_1747c2f09c2e16fda6e459eeb6045af3_2 = 0;
$fe_n_items_processed_1747c2f09c2e16fda6e459eeb6045af3_2  = 0;
$fe_i_1747c2f09c2e16fda6e459eeb6045af3_2 = 0;
$fe_key_1747c2f09c2e16fda6e459eeb6045af3_2 = 0;
$fe_val_1747c2f09c2e16fda6e459eeb6045af3_2 = 0;
$fe_offset_1747c2f09c2e16fda6e459eeb6045af3_2 = 0;
$fe_max_1747c2f09c2e16fda6e459eeb6045af3_2 = 0;
$fe_reverse_1747c2f09c2e16fda6e459eeb6045af3_2 = 0;
$fe_first_val_1747c2f09c2e16fda6e459eeb6045af3_2 = 0;
$fe_last_val_1747c2f09c2e16fda6e459eeb6045af3_2 = 0;
if ( !isset( $fe_variable_stack_1747c2f09c2e16fda6e459eeb6045af3_2 ) ) $fe_variable_stack_1747c2f09c2e16fda6e459eeb6045af3_2 = [];
$fe_variable_stack_1747c2f09c2e16fda6e459eeb6045af3_2[] = @compact( 'fe_array_1747c2f09c2e16fda6e459eeb6045af3_2', 'fe_array_keys_1747c2f09c2e16fda6e459eeb6045af3_2', 'fe_n_items_1747c2f09c2e16fda6e459eeb6045af3_2', 'fe_n_items_processed_1747c2f09c2e16fda6e459eeb6045af3_2', 'fe_i_1747c2f09c2e16fda6e459eeb6045af3_2', 'fe_key_1747c2f09c2e16fda6e459eeb6045af3_2', 'fe_val_1747c2f09c2e16fda6e459eeb6045af3_2', 'fe_offset_1747c2f09c2e16fda6e459eeb6045af3_2', 'fe_max_1747c2f09c2e16fda6e459eeb6045af3_2', 'fe_reverse_1747c2f09c2e16fda6e459eeb6045af3_2', 'fe_first_val_1747c2f09c2e16fda6e459eeb6045af3_2', 'fe_last_val_1747c2f09c2e16fda6e459eeb6045af3_2' );
unset( $fe_array_1747c2f09c2e16fda6e459eeb6045af3_2 );
unset( $fe_array_1747c2f09c2e16fda6e459eeb6045af3_2 );
$fe_array_1747c2f09c2e16fda6e459eeb6045af3_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$fe_array_1747c2f09c2e16fda6e459eeb6045af3_21 = compiledFetchAttribute( $fe_array_1747c2f09c2e16fda6e459eeb6045af3_2, 'contentobject_attributes' );
unset( $fe_array_1747c2f09c2e16fda6e459eeb6045af3_2 );
$fe_array_1747c2f09c2e16fda6e459eeb6045af3_2 = $fe_array_1747c2f09c2e16fda6e459eeb6045af3_21;
if (! isset( $fe_array_1747c2f09c2e16fda6e459eeb6045af3_2 ) ) $fe_array_1747c2f09c2e16fda6e459eeb6045af3_2 = NULL;
while ( is_object( $fe_array_1747c2f09c2e16fda6e459eeb6045af3_2 ) and method_exists( $fe_array_1747c2f09c2e16fda6e459eeb6045af3_2, 'templateValue' ) )
    $fe_array_1747c2f09c2e16fda6e459eeb6045af3_2 = $fe_array_1747c2f09c2e16fda6e459eeb6045af3_2->templateValue();

$fe_array_keys_1747c2f09c2e16fda6e459eeb6045af3_2 = is_array( $fe_array_1747c2f09c2e16fda6e459eeb6045af3_2 ) ? array_keys( $fe_array_1747c2f09c2e16fda6e459eeb6045af3_2 ) : [];
$fe_n_items_1747c2f09c2e16fda6e459eeb6045af3_2 = count( $fe_array_keys_1747c2f09c2e16fda6e459eeb6045af3_2 );
$fe_n_items_processed_1747c2f09c2e16fda6e459eeb6045af3_2 = 0;
$fe_offset_1747c2f09c2e16fda6e459eeb6045af3_2 = 0;
$fe_max_1747c2f09c2e16fda6e459eeb6045af3_2 = $fe_n_items_1747c2f09c2e16fda6e459eeb6045af3_2 - $fe_offset_1747c2f09c2e16fda6e459eeb6045af3_2;
$fe_reverse_1747c2f09c2e16fda6e459eeb6045af3_2 = false;
if ( $fe_offset_1747c2f09c2e16fda6e459eeb6045af3_2 < 0 || $fe_offset_1747c2f09c2e16fda6e459eeb6045af3_2 >= $fe_n_items_1747c2f09c2e16fda6e459eeb6045af3_2 )
{
    $fe_offset_1747c2f09c2e16fda6e459eeb6045af3_2 = ( $fe_offset_1747c2f09c2e16fda6e459eeb6045af3_2 < 0 ) ? 0 : $fe_n_items_1747c2f09c2e16fda6e459eeb6045af3_2;
    if ( $fe_n_items_1747c2f09c2e16fda6e459eeb6045af3_2 || $fe_offset_1747c2f09c2e16fda6e459eeb6045af3_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_1747c2f09c2e16fda6e459eeb6045af3_2'. Array count: $fe_n_items_1747c2f09c2e16fda6e459eeb6045af3_2");   
}
}
if ( $fe_max_1747c2f09c2e16fda6e459eeb6045af3_2 < 0 || $fe_offset_1747c2f09c2e16fda6e459eeb6045af3_2 + $fe_max_1747c2f09c2e16fda6e459eeb6045af3_2 > $fe_n_items_1747c2f09c2e16fda6e459eeb6045af3_2 )
{
    if ( $fe_max_1747c2f09c2e16fda6e459eeb6045af3_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_1747c2f09c2e16fda6e459eeb6045af3_2");
    $fe_max_1747c2f09c2e16fda6e459eeb6045af3_2 = $fe_n_items_1747c2f09c2e16fda6e459eeb6045af3_2 - $fe_offset_1747c2f09c2e16fda6e459eeb6045af3_2;
}
if ( $fe_reverse_1747c2f09c2e16fda6e459eeb6045af3_2 )
{
    $fe_first_val_1747c2f09c2e16fda6e459eeb6045af3_2 = $fe_n_items_1747c2f09c2e16fda6e459eeb6045af3_2 - 1 - $fe_offset_1747c2f09c2e16fda6e459eeb6045af3_2;
    $fe_last_val_1747c2f09c2e16fda6e459eeb6045af3_2  = 0;
}
else
{
    $fe_first_val_1747c2f09c2e16fda6e459eeb6045af3_2 = $fe_offset_1747c2f09c2e16fda6e459eeb6045af3_2;
    $fe_last_val_1747c2f09c2e16fda6e459eeb6045af3_2  = $fe_n_items_1747c2f09c2e16fda6e459eeb6045af3_2 - 1;
}
// foreach
for ( $fe_i_1747c2f09c2e16fda6e459eeb6045af3_2 = $fe_first_val_1747c2f09c2e16fda6e459eeb6045af3_2; $fe_n_items_processed_1747c2f09c2e16fda6e459eeb6045af3_2 < $fe_max_1747c2f09c2e16fda6e459eeb6045af3_2 && ( $fe_reverse_1747c2f09c2e16fda6e459eeb6045af3_2 ? $fe_i_1747c2f09c2e16fda6e459eeb6045af3_2 >= $fe_last_val_1747c2f09c2e16fda6e459eeb6045af3_2 : $fe_i_1747c2f09c2e16fda6e459eeb6045af3_2 <= $fe_last_val_1747c2f09c2e16fda6e459eeb6045af3_2 ); $fe_reverse_1747c2f09c2e16fda6e459eeb6045af3_2 ? $fe_i_1747c2f09c2e16fda6e459eeb6045af3_2-- : $fe_i_1747c2f09c2e16fda6e459eeb6045af3_2++ )
{
$fe_key_1747c2f09c2e16fda6e459eeb6045af3_2 = $fe_array_keys_1747c2f09c2e16fda6e459eeb6045af3_2[$fe_i_1747c2f09c2e16fda6e459eeb6045af3_2];
$fe_val_1747c2f09c2e16fda6e459eeb6045af3_2 = $fe_array_1747c2f09c2e16fda6e459eeb6045af3_2[$fe_key_1747c2f09c2e16fda6e459eeb6045af3_2];
$vars[$rootNamespace]['contentobject_attribute_item'] = $fe_val_1747c2f09c2e16fda6e459eeb6045af3_2;
$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contentobject_attribute_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contentobject_attribute_item'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'contentclass_attribute' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_information_collector' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
// def $attribute
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contentobject_attribute_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contentobject_attribute_item'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'attribute', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'attribute' is already defined.", array (
  0 => 
  array (
    0 => 88,
    1 => 12,
    2 => 4375,
  ),
  1 => 
  array (
    0 => 94,
    1 => 147,
    2 => 5242,
  ),
  2 => 'design/delta/templates/content/collectedinfo/comment.tpl',
) );
    $tpl->setVariable( 'attribute', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'attribute', $var, $rootNamespace );
}

// def $contentobject_attribute_id
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = ( is_object( $var3 ) ? strtolower( get_class( $var3 ) ) : "" );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( ( $var2 ) == ( 'digginfocollectionattribute' ) );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["attribute"] : null;
$var3 = compiledFetchAttribute( $var2, "contentobject_attribute_id" );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

    $var = $var2;
}
else
{
    unset( $var3 );
unset( $var4 );
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["attribute"] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var4 = ( is_object( $var5 ) ? strtolower( get_class( $var5 ) ) : "" );unset( $var5 );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = ( ( $var4 ) == ( "ezcontentobjectattribute" ) );
unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    if ( $var3 )
    {
        unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["attribute"] : null;
$var5 = compiledFetchAttribute( $var4, "id" );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();

        $var = $var4;
    }
}
unset( $var1, $var2, $var3, $var4 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'contentobject_attribute_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'contentobject_attribute_id' is already defined.", array (
  0 => 
  array (
    0 => 88,
    1 => 12,
    2 => 4375,
  ),
  1 => 
  array (
    0 => 94,
    1 => 147,
    2 => 5242,
  ),
  2 => 'design/delta/templates/content/collectedinfo/comment.tpl',
) );
    $tpl->setVariable( 'contentobject_attribute_id', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'contentobject_attribute_id', $var, $rootNamespace );
}

// def $contentobject_attribute
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = ( is_object( $var3 ) ? strtolower( get_class( $var3 ) ) : "" );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( ( $var2 ) == ( 'digginfocollectionattribute' ) );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["attribute"] : null;
$var3 = compiledFetchAttribute( $var2, "contentobject_attribute" );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

    $var = $var2;
}
else
{
    unset( $var3 );
unset( $var4 );
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["attribute"] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var4 = ( is_object( $var5 ) ? strtolower( get_class( $var5 ) ) : "" );unset( $var5 );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = ( ( $var4 ) == ( "ezcontentobjectattribute" ) );
unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    if ( $var3 )
    {
        unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["attribute"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();

        $var = $var4;
    }
}
unset( $var1, $var2, $var3, $var4 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'contentobject_attribute', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'contentobject_attribute' is already defined.", array (
  0 => 
  array (
    0 => 88,
    1 => 12,
    2 => 4375,
  ),
  1 => 
  array (
    0 => 94,
    1 => 147,
    2 => 5242,
  ),
  2 => 'design/delta/templates/content/collectedinfo/comment.tpl',
) );
    $tpl->setVariable( 'contentobject_attribute', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'contentobject_attribute', $var, $rootNamespace );
}

// def $total_items_count
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contentobject_attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contentobject_attribute_id'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContextualContentFunctionCollection(), 'fetchCollectedDiggInfoCount' ),
  array_values( array(     'object_attribute_id' => $var1,
    'object_id' => false,
    'value' => false,
    'creator_id' => false,
    'user_identifier' => false ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'total_items_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'total_items_count' is already defined.", array (
  0 => 
  array (
    0 => 88,
    1 => 12,
    2 => 4375,
  ),
  1 => 
  array (
    0 => 94,
    1 => 147,
    2 => 5242,
  ),
  2 => 'design/delta/templates/content/collectedinfo/comment.tpl',
) );
    $tpl->setVariable( 'total_items_count', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'total_items_count', $var, $rootNamespace );
}

// def $item_counts
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contentobject_attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contentobject_attribute_id'] : null;
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
if ( $tpl->hasVariable( 'item_counts', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'item_counts' is already defined.", array (
  0 => 
  array (
    0 => 88,
    1 => 12,
    2 => 4375,
  ),
  1 => 
  array (
    0 => 94,
    1 => 147,
    2 => 5242,
  ),
  2 => 'design/delta/templates/content/collectedinfo/comment.tpl',
) );
    $tpl->setVariable( 'item_counts', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'item_counts', $var, $rootNamespace );
}

$text .= '<!--
                <h3>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contentobject_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contentobject_attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</h3>
-->
                <table class="poll-resultlist">
                <tr>

                ';
// foreach begins
$skipDelimiter = true;
$fe_array_1747c2f09c2e16fda6e459eeb6045af3_1 = [];
$fe_array_keys_1747c2f09c2e16fda6e459eeb6045af3_1 = [];
$fe_n_items_1747c2f09c2e16fda6e459eeb6045af3_1 = 0;
$fe_n_items_processed_1747c2f09c2e16fda6e459eeb6045af3_1  = 0;
$fe_i_1747c2f09c2e16fda6e459eeb6045af3_1 = 0;
$fe_key_1747c2f09c2e16fda6e459eeb6045af3_1 = 0;
$fe_val_1747c2f09c2e16fda6e459eeb6045af3_1 = 0;
$fe_offset_1747c2f09c2e16fda6e459eeb6045af3_1 = 0;
$fe_max_1747c2f09c2e16fda6e459eeb6045af3_1 = 0;
$fe_reverse_1747c2f09c2e16fda6e459eeb6045af3_1 = 0;
$fe_first_val_1747c2f09c2e16fda6e459eeb6045af3_1 = 0;
$fe_last_val_1747c2f09c2e16fda6e459eeb6045af3_1 = 0;
if ( !isset( $fe_variable_stack_1747c2f09c2e16fda6e459eeb6045af3_1 ) ) $fe_variable_stack_1747c2f09c2e16fda6e459eeb6045af3_1 = [];
$fe_variable_stack_1747c2f09c2e16fda6e459eeb6045af3_1[] = @compact( 'fe_array_1747c2f09c2e16fda6e459eeb6045af3_1', 'fe_array_keys_1747c2f09c2e16fda6e459eeb6045af3_1', 'fe_n_items_1747c2f09c2e16fda6e459eeb6045af3_1', 'fe_n_items_processed_1747c2f09c2e16fda6e459eeb6045af3_1', 'fe_i_1747c2f09c2e16fda6e459eeb6045af3_1', 'fe_key_1747c2f09c2e16fda6e459eeb6045af3_1', 'fe_val_1747c2f09c2e16fda6e459eeb6045af3_1', 'fe_offset_1747c2f09c2e16fda6e459eeb6045af3_1', 'fe_max_1747c2f09c2e16fda6e459eeb6045af3_1', 'fe_reverse_1747c2f09c2e16fda6e459eeb6045af3_1', 'fe_first_val_1747c2f09c2e16fda6e459eeb6045af3_1', 'fe_last_val_1747c2f09c2e16fda6e459eeb6045af3_1' );
unset( $fe_array_1747c2f09c2e16fda6e459eeb6045af3_1 );
unset( $fe_array_1747c2f09c2e16fda6e459eeb6045af3_1 );
$fe_array_1747c2f09c2e16fda6e459eeb6045af3_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contentobject_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contentobject_attribute'] : null;
$fe_array_1747c2f09c2e16fda6e459eeb6045af3_11 = compiledFetchAttribute( $fe_array_1747c2f09c2e16fda6e459eeb6045af3_1, 'content' );
unset( $fe_array_1747c2f09c2e16fda6e459eeb6045af3_1 );
$fe_array_1747c2f09c2e16fda6e459eeb6045af3_1 = $fe_array_1747c2f09c2e16fda6e459eeb6045af3_11;
$fe_array_1747c2f09c2e16fda6e459eeb6045af3_11 = compiledFetchAttribute( $fe_array_1747c2f09c2e16fda6e459eeb6045af3_1, 'option_list' );
unset( $fe_array_1747c2f09c2e16fda6e459eeb6045af3_1 );
$fe_array_1747c2f09c2e16fda6e459eeb6045af3_1 = $fe_array_1747c2f09c2e16fda6e459eeb6045af3_11;
if (! isset( $fe_array_1747c2f09c2e16fda6e459eeb6045af3_1 ) ) $fe_array_1747c2f09c2e16fda6e459eeb6045af3_1 = NULL;
while ( is_object( $fe_array_1747c2f09c2e16fda6e459eeb6045af3_1 ) and method_exists( $fe_array_1747c2f09c2e16fda6e459eeb6045af3_1, 'templateValue' ) )
    $fe_array_1747c2f09c2e16fda6e459eeb6045af3_1 = $fe_array_1747c2f09c2e16fda6e459eeb6045af3_1->templateValue();

$fe_array_keys_1747c2f09c2e16fda6e459eeb6045af3_1 = is_array( $fe_array_1747c2f09c2e16fda6e459eeb6045af3_1 ) ? array_keys( $fe_array_1747c2f09c2e16fda6e459eeb6045af3_1 ) : [];
$fe_n_items_1747c2f09c2e16fda6e459eeb6045af3_1 = count( $fe_array_keys_1747c2f09c2e16fda6e459eeb6045af3_1 );
$fe_n_items_processed_1747c2f09c2e16fda6e459eeb6045af3_1 = 0;
$fe_offset_1747c2f09c2e16fda6e459eeb6045af3_1 = 0;
$fe_max_1747c2f09c2e16fda6e459eeb6045af3_1 = $fe_n_items_1747c2f09c2e16fda6e459eeb6045af3_1 - $fe_offset_1747c2f09c2e16fda6e459eeb6045af3_1;
$fe_reverse_1747c2f09c2e16fda6e459eeb6045af3_1 = false;
if ( $fe_offset_1747c2f09c2e16fda6e459eeb6045af3_1 < 0 || $fe_offset_1747c2f09c2e16fda6e459eeb6045af3_1 >= $fe_n_items_1747c2f09c2e16fda6e459eeb6045af3_1 )
{
    $fe_offset_1747c2f09c2e16fda6e459eeb6045af3_1 = ( $fe_offset_1747c2f09c2e16fda6e459eeb6045af3_1 < 0 ) ? 0 : $fe_n_items_1747c2f09c2e16fda6e459eeb6045af3_1;
    if ( $fe_n_items_1747c2f09c2e16fda6e459eeb6045af3_1 || $fe_offset_1747c2f09c2e16fda6e459eeb6045af3_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_1747c2f09c2e16fda6e459eeb6045af3_1'. Array count: $fe_n_items_1747c2f09c2e16fda6e459eeb6045af3_1");   
}
}
if ( $fe_max_1747c2f09c2e16fda6e459eeb6045af3_1 < 0 || $fe_offset_1747c2f09c2e16fda6e459eeb6045af3_1 + $fe_max_1747c2f09c2e16fda6e459eeb6045af3_1 > $fe_n_items_1747c2f09c2e16fda6e459eeb6045af3_1 )
{
    if ( $fe_max_1747c2f09c2e16fda6e459eeb6045af3_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_1747c2f09c2e16fda6e459eeb6045af3_1");
    $fe_max_1747c2f09c2e16fda6e459eeb6045af3_1 = $fe_n_items_1747c2f09c2e16fda6e459eeb6045af3_1 - $fe_offset_1747c2f09c2e16fda6e459eeb6045af3_1;
}
if ( $fe_reverse_1747c2f09c2e16fda6e459eeb6045af3_1 )
{
    $fe_first_val_1747c2f09c2e16fda6e459eeb6045af3_1 = $fe_n_items_1747c2f09c2e16fda6e459eeb6045af3_1 - 1 - $fe_offset_1747c2f09c2e16fda6e459eeb6045af3_1;
    $fe_last_val_1747c2f09c2e16fda6e459eeb6045af3_1  = 0;
}
else
{
    $fe_first_val_1747c2f09c2e16fda6e459eeb6045af3_1 = $fe_offset_1747c2f09c2e16fda6e459eeb6045af3_1;
    $fe_last_val_1747c2f09c2e16fda6e459eeb6045af3_1  = $fe_n_items_1747c2f09c2e16fda6e459eeb6045af3_1 - 1;
}
// foreach
for ( $fe_i_1747c2f09c2e16fda6e459eeb6045af3_1 = $fe_first_val_1747c2f09c2e16fda6e459eeb6045af3_1; $fe_n_items_processed_1747c2f09c2e16fda6e459eeb6045af3_1 < $fe_max_1747c2f09c2e16fda6e459eeb6045af3_1 && ( $fe_reverse_1747c2f09c2e16fda6e459eeb6045af3_1 ? $fe_i_1747c2f09c2e16fda6e459eeb6045af3_1 >= $fe_last_val_1747c2f09c2e16fda6e459eeb6045af3_1 : $fe_i_1747c2f09c2e16fda6e459eeb6045af3_1 <= $fe_last_val_1747c2f09c2e16fda6e459eeb6045af3_1 ); $fe_reverse_1747c2f09c2e16fda6e459eeb6045af3_1 ? $fe_i_1747c2f09c2e16fda6e459eeb6045af3_1-- : $fe_i_1747c2f09c2e16fda6e459eeb6045af3_1++ )
{
$fe_key_1747c2f09c2e16fda6e459eeb6045af3_1 = $fe_array_keys_1747c2f09c2e16fda6e459eeb6045af3_1[$fe_i_1747c2f09c2e16fda6e459eeb6045af3_1];
$fe_val_1747c2f09c2e16fda6e459eeb6045af3_1 = $fe_array_1747c2f09c2e16fda6e459eeb6045af3_1[$fe_key_1747c2f09c2e16fda6e459eeb6045af3_1];
$vars[$rootNamespace]['option'] = $fe_val_1747c2f09c2e16fda6e459eeb6045af3_1;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= '                </tr>
                <tr>
                    ';
} // delimiter ends

$text .= '                    ';
// def $item_count
if ( $tpl->hasVariable( 'item_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'item_count' is already defined.", array (
  0 => 
  array (
    0 => 102,
    1 => 20,
    2 => 5491,
  ),
  1 => 
  array (
    0 => 102,
    1 => 37,
    2 => 5508,
  ),
  2 => 'design/delta/templates/content/collectedinfo/comment.tpl',
) );
    $tpl->setVariable( 'item_count', 0, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'item_count', 0, $rootNamespace );
}

$text .= '                    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item_counts', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item_counts'] : null;
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'option', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['option'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'id' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = compiledFetchAttribute( $if_cond1, $if_cond3 );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item_counts', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item_counts'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'option', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['option'] : null;
$var3 = compiledFetchAttribute( $var2, 'id' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'item_count', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['item_count'] = $var;
    unset( $var );
}
$text .= '                    ';
}
unset( $if_cond );
// if ends

$text .= '                    <td class="poll-resultname">
                        <p>
                            ';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'option', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['option'] : null;
$var4 = compiledFetchAttribute( $var3, 'value' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
if ( is_string( $var3 ) )
{
	$var2 = explode( "digg", $var3 );
}
else if ( is_array( $var3 ) )
{
	$var2 = array( array_slice( $var3, 0, "digg" ), array_slice( $var3, "digg" ) );
}
else
{
	$var2 = null;
}
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = implode( "vote", $var2 );unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$strlenFunc = 'mb_strlen'; $substrFunc = 'mb_substr';
$i18nIni = eZINI::instance( 'i18n.ini' );
                                                                  $hasMBString = ( $i18nIni->variable( 'CharacterSettings', 'MBStringExtension' ) == 'enabled' and
                                                                  function_exists( "mb_strtoupper" ) and
                                                                  function_exists( "mb_substr" ) and
                                                                  function_exists( "mb_strlen" ) );

                                                                  if ( $hasMBString )
                                                                  {
                                                                      $encoding = eZTextCodec::internalCharset();
                                                                      $firstLetter = mb_strtoupper( mb_substr( $var1, 0, 1, $encoding ), $encoding );
                                                                      $remainingText = mb_substr( $var1, 1, mb_strlen( $var1, $encoding ), $encoding );
                                                                      $var = $firstLetter . $remainingText;
                                                                  }
                                                                  else
                                                                  {
                                                                     $var = ucfirst( $var1 );
                                                                  }
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
                        </p>
                    </td>

                    ';
// def $percentage
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'total_items_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['total_items_count'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( ( $var2 ) > ( 0 ) );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    unset( $var2 );
unset( $var3 );
unset( $var4 );
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "item_count", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["item_count"] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var4 = $var5 * 100.000000;
unset( $var5 );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "total_items_count", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["total_items_count"] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
@$var3 = $var4 / $var5;
unset( $var4, $var5 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = round( $var3 );
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

    $var = $var2;
}
else
{
    
    $var = 0;
}
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'percentage', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'percentage' is already defined.", array (
  0 => 
  array (
    0 => 112,
    1 => 20,
    2 => 5901,
  ),
  1 => 
  array (
    0 => 113,
    1 => 129,
    2 => 6145,
  ),
  2 => 'design/delta/templates/content/collectedinfo/comment.tpl',
) );
    $tpl->setVariable( 'percentage', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'percentage', $var, $rootNamespace );
}

// def $tenth
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'total_items_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['total_items_count'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( ( $var2 ) > ( 0 ) );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    unset( $var2 );
unset( $var3 );
unset( $var4 );
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "item_count", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["item_count"] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var4 = $var5 * 10.000000;
unset( $var5 );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "total_items_count", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["total_items_count"] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
@$var3 = $var4 / $var5;
unset( $var4, $var5 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = round( $var3 );
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

    $var = $var2;
}
else
{
    
    $var = 0;
}
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'tenth', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'tenth' is already defined.", array (
  0 => 
  array (
    0 => 112,
    1 => 20,
    2 => 5901,
  ),
  1 => 
  array (
    0 => 113,
    1 => 129,
    2 => 6145,
  ),
  2 => 'design/delta/templates/content/collectedinfo/comment.tpl',
) );
    $tpl->setVariable( 'tenth', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'tenth', $var, $rootNamespace );
}

$text .= '                    <td class="poll-resultbar">
                        <table class="poll-resultbar">
                        <tr>
                            <td class="poll-percentage">
                                <i>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'percentage', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['percentage'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '%</i>
                            </td>
                            <td class="poll-votecount">
                                Votes: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item_count'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <div class="chart-bar-edge-start">
                                <div class="chart-bar-edge-end">
                                    <div class="chart-bar-resultbox">
                                        <div class="chart-bar-resultbar chart-bar-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'percentage', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['percentage'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '-of-100 chart-bar-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tenth', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tenth'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '-of-10" style="width: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'percentage', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['percentage'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '%;">
                                            <div class="chart-bar-result-divider"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </td>
                        </tr>
                        </table>
                    </td>
                                        ';
// undef $item_count
$tpl->unsetLocalVariable( 'item_count', $rootNamespace );

// undef $percentage
$tpl->unsetLocalVariable( 'percentage', $rootNamespace );

// undef $tenth
$tpl->unsetLocalVariable( 'tenth', $rootNamespace );

$text .= '                ';
$fe_n_items_processed_1747c2f09c2e16fda6e459eeb6045af3_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_1747c2f09c2e16fda6e459eeb6045af3_1 ) ) extract( array_pop( $fe_variable_stack_1747c2f09c2e16fda6e459eeb6045af3_1 ) );

else
{

unset( $fe_array_1747c2f09c2e16fda6e459eeb6045af3_1 );

unset( $fe_array_keys_1747c2f09c2e16fda6e459eeb6045af3_1 );

unset( $fe_n_items_1747c2f09c2e16fda6e459eeb6045af3_1 );

unset( $fe_n_items_processed_1747c2f09c2e16fda6e459eeb6045af3_1 );

unset( $fe_i_1747c2f09c2e16fda6e459eeb6045af3_1 );

unset( $fe_key_1747c2f09c2e16fda6e459eeb6045af3_1 );

unset( $fe_val_1747c2f09c2e16fda6e459eeb6045af3_1 );

unset( $fe_offset_1747c2f09c2e16fda6e459eeb6045af3_1 );

unset( $fe_max_1747c2f09c2e16fda6e459eeb6045af3_1 );

unset( $fe_reverse_1747c2f09c2e16fda6e459eeb6045af3_1 );

unset( $fe_first_val_1747c2f09c2e16fda6e459eeb6045af3_1 );

unset( $fe_last_val_1747c2f09c2e16fda6e459eeb6045af3_1 );

unset( $fe_variable_stack_1747c2f09c2e16fda6e459eeb6045af3_1 );

}

// foreach ends
$text .= '                </tr>
                </table>
            
	    ';
}
unset( $if_cond );
// if ends

$text .= '        ';
$fe_n_items_processed_1747c2f09c2e16fda6e459eeb6045af3_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_1747c2f09c2e16fda6e459eeb6045af3_2 ) ) extract( array_pop( $fe_variable_stack_1747c2f09c2e16fda6e459eeb6045af3_2 ) );

else
{

unset( $fe_array_1747c2f09c2e16fda6e459eeb6045af3_2 );

unset( $fe_array_keys_1747c2f09c2e16fda6e459eeb6045af3_2 );

unset( $fe_n_items_1747c2f09c2e16fda6e459eeb6045af3_2 );

unset( $fe_n_items_processed_1747c2f09c2e16fda6e459eeb6045af3_2 );

unset( $fe_i_1747c2f09c2e16fda6e459eeb6045af3_2 );

unset( $fe_key_1747c2f09c2e16fda6e459eeb6045af3_2 );

unset( $fe_val_1747c2f09c2e16fda6e459eeb6045af3_2 );

unset( $fe_offset_1747c2f09c2e16fda6e459eeb6045af3_2 );

unset( $fe_max_1747c2f09c2e16fda6e459eeb6045af3_2 );

unset( $fe_reverse_1747c2f09c2e16fda6e459eeb6045af3_2 );

unset( $fe_first_val_1747c2f09c2e16fda6e459eeb6045af3_2 );

unset( $fe_last_val_1747c2f09c2e16fda6e459eeb6045af3_2 );

unset( $fe_variable_stack_1747c2f09c2e16fda6e459eeb6045af3_2 );

}

// foreach ends
$text .= '
   	<div class="news-details" style="padding-top:1rem">
       	  
       	  
       	  <span class="tool">
       	  
       	  <a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var4 = compiledFetchAttribute( $var3, 'object' );
unset( $var3 );
$var3 = $var4;
$var4 = compiledFetchAttribute( $var3, 'id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/spy/collectionlist/' . $var3 );
unset( $var3 );
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

$text .= ' class="" style="text-decoration: underline;">Vote history report</a>
     	</div>
     
	<button class="btn btn-primary" style="margin-top: 0.8rem; margin-bottom: 0.8rem;" onclick="javascript:history.back()">Back</button>	

	


        </div>
    </div>
</form>


        </div>
    </div>
</div>

</div></div></div>
<div class="border-bl"><div class="border-br"><div class="border-bc"></div></div></div>
</div>';

$setArray = $oldSetArray_1301e19012037cebd3c247921fd08b4a;
$tpl->Level--;
?>
