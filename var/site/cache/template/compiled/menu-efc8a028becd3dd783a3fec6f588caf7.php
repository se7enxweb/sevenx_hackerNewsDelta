<?php
// URI:       design:parts/user/menu.tpl
// Filename:  design/admin3/templates/parts/user/menu.tpl
// Timestamp: 1768752117 (Sun Jan 18 8:01:57 PST 2026)
$oldSetArray_47674596a5697f0b97f407cf6cc3bf6a = isset( $setArray ) ? $setArray : array();
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

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'edit' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<div class="box-header"><div class="box-ml">

<h4>Role information</h4>

</div></div>

<div class="box-bc"><div class="box-ml"><div class="box-content">

<p>
<label>Name:</label>
';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'role', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['role'] : null;
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

$text .= '
</p>

<p>
<label>ID:</label>
';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'role', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['role'] : null;
$var2 = compiledFetchAttribute( $var1, 'id' );
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
</p>

</div></div></div>
';
}
else
{
$text .= '
<div id="content-tree">

<div class="box-header"><div class="box-ml">
<h4>User accounts</h4>
</div></div>

<div class="box-bc"><div class="box-ml"><div class="box-content">


<div id="contentstructure">
    ';
$oldRestoreIncludeArray_2aef96c8e5167a0612e42c760796fb61 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['custom_root_node_id'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'custom_root_node_id', $vars[$currentNamespace]['custom_root_node_id'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['custom_root_node_id'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'custom_root_node_id', 'unset' );

$vars[$currentNamespace]['custom_root_node_id'] = '5';
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/content_structure_menu_dynamic-42d8c9b464afc8ec87c9b5962dde5c32.php' ) && filemtime( 'var/site/cache/template/compiled/content_structure_menu_dynamic-42d8c9b464afc8ec87c9b5962dde5c32.php' ) > filemtime( 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl' );
include( '' . 'var/site/cache/template/compiled/content_structure_menu_dynamic-42d8c9b464afc8ec87c9b5962dde5c32.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_2aef96c8e5167a0612e42c760796fb61;

$text .= '</div>

';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) != ( 'browse' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<div id="trash">
<a class="image-text" href=';
unset( $var );
unset( $var1 );
$var1 = ( '/content/trash/' . '2' );
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

$text .= ' title="View and manage the contents of the trash bin."><img src="/design/admin3/images/trash-icon-16x16.gif" width="16" height="16" alt="Trash" />&nbsp;<span>Trash</span></a>
</div>';
}
unset( $if_cond );
// if ends

$text .= '
</div></div></div>
</div>


';
$oldRestoreIncludeArray_3c78aca3f50ca8d31faf888f333a9812 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['ini_section'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'ini_section', $vars[$currentNamespace]['ini_section'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['ini_section'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'ini_section', 'unset' );

$vars[$currentNamespace]['ini_section'] = 'Leftmenu_user';
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['i18n_hash'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'i18n_hash', $vars[$currentNamespace]['i18n_hash'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['i18n_hash'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'i18n_hash', 'unset' );

$vars[$currentNamespace]['i18n_hash'] = array (
  'access_controll' => 'Access control',
  'roles_and_policies' => 'Roles and policies',
  'unactivated' => 'Unactivated users',
);
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/ini_menu-e1de853ddb9652b95375480dcfb6e285.php' ) && filemtime( 'var/site/cache/template/compiled/ini_menu-e1de853ddb9652b95375480dcfb6e285.php' ) > filemtime( 'design/admin/templates/parts/ini_menu.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/parts/ini_menu.tpl' );
include( '' . 'var/site/cache/template/compiled/ini_menu-e1de853ddb9652b95375480dcfb6e285.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin/templates/parts/ini_menu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_3c78aca3f50ca8d31faf888f333a9812;

$text .= '

<div id="widthcontrol-links" class="widthcontrol">
<p>';
$textElements = array();
$tpl->processFunction( 'switch', $textElements,
                       array (
  0 => 
  array (
    0 => 2,
    1 => false,
    2 => '    ',
    3 => 
    array (
      0 => 
      array (
      ),
      1 => 
      array (
      ),
      2 => NULL,
    ),
  ),
  1 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '    <a href=',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      1 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 60,
            1 => 12,
            2 => 2181,
          ),
          1 => 
          array (
            0 => 60,
            1 => 68,
            2 => 2237,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      3 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to small size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
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
            0 => 60,
            1 => 76,
            2 => 2247,
          ),
          1 => 
          array (
            0 => 60,
            1 => 158,
            2 => 2329,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      5 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
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
            0 => 60,
            1 => 160,
            2 => 2333,
          ),
          1 => 
          array (
            0 => 60,
            1 => 206,
            2 => 2379,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      6 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <span class="current">',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      7 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
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
            0 => 61,
            1 => 26,
            2 => 2412,
          ),
          1 => 
          array (
            0 => 61,
            1 => 73,
            2 => 2459,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      8 => 
      array (
        0 => 2,
        1 => false,
        2 => '</span>
    <a href=',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      9 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 62,
            1 => 12,
            2 => 2481,
          ),
          1 => 
          array (
            0 => 62,
            1 => 68,
            2 => 2537,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      10 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      11 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to large size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
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
            0 => 62,
            1 => 76,
            2 => 2547,
          ),
          1 => 
          array (
            0 => 62,
            1 => 158,
            2 => 2629,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      12 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      13 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
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
            0 => 62,
            1 => 160,
            2 => 2633,
          ),
          1 => 
          array (
            0 => 62,
            1 => 206,
            2 => 2679,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      14 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    ',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
      'match' => 
      array (
        0 => 
        array (
          0 => 1,
          1 => 'medium',
          2 => false,
        ),
      ),
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 59,
        1 => 4,
        2 => 2147,
      ),
      1 => 
      array (
        0 => 59,
        1 => 23,
        2 => 2166,
      ),
      2 => 'design/admin3/templates/parts/user/menu.tpl',
    ),
  ),
  2 => 
  array (
    0 => 2,
    1 => false,
    2 => '
    ',
    3 => 
    array (
      0 => 
      array (
      ),
      1 => 
      array (
      ),
      2 => NULL,
    ),
  ),
  3 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '    <a href=',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      1 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 66,
            1 => 12,
            2 => 2736,
          ),
          1 => 
          array (
            0 => 66,
            1 => 68,
            2 => 2792,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      3 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to small size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
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
            0 => 66,
            1 => 76,
            2 => 2802,
          ),
          1 => 
          array (
            0 => 66,
            1 => 158,
            2 => 2884,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      5 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
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
            0 => 66,
            1 => 160,
            2 => 2888,
          ),
          1 => 
          array (
            0 => 66,
            1 => 206,
            2 => 2934,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      6 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <a href=',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      7 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 67,
            1 => 12,
            2 => 2953,
          ),
          1 => 
          array (
            0 => 67,
            1 => 69,
            2 => 3010,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      8 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      9 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to medium size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
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
            0 => 67,
            1 => 77,
            2 => 3020,
          ),
          1 => 
          array (
            0 => 67,
            1 => 160,
            2 => 3103,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      10 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      11 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
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
            0 => 67,
            1 => 162,
            2 => 3107,
          ),
          1 => 
          array (
            0 => 67,
            1 => 209,
            2 => 3154,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      12 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <span class="current">',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      13 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
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
            0 => 68,
            1 => 26,
            2 => 3187,
          ),
          1 => 
          array (
            0 => 68,
            1 => 72,
            2 => 3233,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      14 => 
      array (
        0 => 2,
        1 => false,
        2 => '</span>
    ',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
      'match' => 
      array (
        0 => 
        array (
          0 => 1,
          1 => 'large',
          2 => false,
        ),
      ),
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 65,
        1 => 4,
        2 => 2703,
      ),
      1 => 
      array (
        0 => 65,
        1 => 22,
        2 => 2721,
      ),
      2 => 'design/admin3/templates/parts/user/menu.tpl',
    ),
  ),
  4 => 
  array (
    0 => 2,
    1 => false,
    2 => '
    ',
    3 => 
    array (
      0 => 
      array (
      ),
      1 => 
      array (
      ),
      2 => NULL,
    ),
  ),
  5 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '    <span class="current">',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      1 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
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
            0 => 72,
            1 => 26,
            2 => 3317,
          ),
          1 => 
          array (
            0 => 72,
            1 => 72,
            2 => 3363,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => '</span>
    <a href=',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      3 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 73,
            1 => 12,
            2 => 3385,
          ),
          1 => 
          array (
            0 => 73,
            1 => 69,
            2 => 3442,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      5 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to medium size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
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
            0 => 73,
            1 => 77,
            2 => 3452,
          ),
          1 => 
          array (
            0 => 73,
            1 => 160,
            2 => 3535,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      6 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      7 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
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
            0 => 73,
            1 => 162,
            2 => 3539,
          ),
          1 => 
          array (
            0 => 73,
            1 => 209,
            2 => 3586,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      8 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <a href=',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      9 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 74,
            1 => 12,
            2 => 3605,
          ),
          1 => 
          array (
            0 => 74,
            1 => 68,
            2 => 3661,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      10 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      11 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to large size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
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
            0 => 74,
            1 => 76,
            2 => 3671,
          ),
          1 => 
          array (
            0 => 74,
            1 => 158,
            2 => 3753,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      12 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      13 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
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
            0 => 74,
            1 => 160,
            2 => 3757,
          ),
          1 => 
          array (
            0 => 74,
            1 => 206,
            2 => 3803,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      14 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    ',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
      'in' => 
      array (
        0 => 
        array (
          0 => 6,
          1 => 
          array (
            0 => 'array',
            1 => 
            array (
              0 => 
              array (
                0 => 1,
                1 => 'small',
                2 => false,
              ),
            ),
            2 => 
            array (
              0 => 
              array (
                0 => 1,
                1 => '',
                2 => false,
              ),
            ),
          ),
          2 => false,
        ),
      ),
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 71,
        1 => 4,
        2 => 3260,
      ),
      1 => 
      array (
        0 => 71,
        1 => 32,
        2 => 3288,
      ),
      2 => 'design/admin3/templates/parts/user/menu.tpl',
    ),
  ),
  6 => 
  array (
    0 => 2,
    1 => false,
    2 => '
    ',
    3 => 
    array (
      0 => 
      array (
      ),
      1 => 
      array (
      ),
      2 => NULL,
    ),
  ),
  7 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '    <a href=',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      1 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 78,
            1 => 12,
            2 => 3846,
          ),
          1 => 
          array (
            0 => 78,
            1 => 68,
            2 => 3902,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      3 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to small size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
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
            0 => 78,
            1 => 76,
            2 => 3912,
          ),
          1 => 
          array (
            0 => 78,
            1 => 158,
            2 => 3994,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      5 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
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
            0 => 78,
            1 => 160,
            2 => 3998,
          ),
          1 => 
          array (
            0 => 78,
            1 => 206,
            2 => 4044,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      6 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <a href=',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      7 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 79,
            1 => 12,
            2 => 4063,
          ),
          1 => 
          array (
            0 => 79,
            1 => 69,
            2 => 4120,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      8 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      9 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to medium size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
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
            0 => 79,
            1 => 77,
            2 => 4130,
          ),
          1 => 
          array (
            0 => 79,
            1 => 160,
            2 => 4213,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      10 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      11 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
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
            0 => 79,
            1 => 162,
            2 => 4217,
          ),
          1 => 
          array (
            0 => 79,
            1 => 209,
            2 => 4264,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      12 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <a href=',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      13 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 80,
            1 => 12,
            2 => 4283,
          ),
          1 => 
          array (
            0 => 80,
            1 => 68,
            2 => 4339,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      14 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      15 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to large size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
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
            0 => 80,
            1 => 76,
            2 => 4349,
          ),
          1 => 
          array (
            0 => 80,
            1 => 158,
            2 => 4431,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      16 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      17 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
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
            0 => 80,
            1 => 160,
            2 => 4435,
          ),
          1 => 
          array (
            0 => 80,
            1 => 206,
            2 => 4481,
          ),
          2 => 'design/admin3/templates/parts/user/menu.tpl',
        ),
      ),
      18 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    ',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 77,
        1 => 4,
        2 => 3827,
      ),
      1 => 
      array (
        0 => 77,
        1 => 8,
        2 => 3831,
      ),
      2 => 'design/admin3/templates/parts/user/menu.tpl',
    ),
  ),
),
                       array (
  'match' => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'ezpreference',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'admin_left_menu_size',
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
    0 => 58,
    1 => 0,
    2 => 2089,
  ),
  1 => 
  array (
    0 => 58,
    1 => 51,
    2 => 2140,
  ),
  2 => 'design/admin3/templates/parts/user/menu.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '</p>
</div>';
}
unset( $if_cond );
// if ends

$text .= '
';

$setArray = $oldSetArray_47674596a5697f0b97f407cf6cc3bf6a;
$tpl->Level--;
?>
