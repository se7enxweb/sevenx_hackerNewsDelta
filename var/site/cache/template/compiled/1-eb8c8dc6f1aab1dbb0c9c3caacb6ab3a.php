<?php
// URI:       design:error/kernel/1.tpl
// Filename:  design/delta/templates/error/kernel/1.tpl
// Timestamp: 1769263860 (Sat Jan 24 6:11:00 PST 2026)
$oldSetArray_413e7cbae7023c22f6553a7f2532e352 = isset( $setArray ) ? $setArray : array();
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

$text .= '<form method="post"
      action="#"
      name="loginform"
      class="auth-form">

<div class="warning">
<h2>Access denied</h2>
<p>You do not have permission to access (or submit a story) to this area of HND.</p>
<p>&nbsp;</p>
<p style="margin-bottom: 0.30rem;">Possible reasons for this are:</p>
<ul style="list-style: disc; margin-left: 1.2rem;">
    <li>You must navigate to a HND story category to submit a new story. Please navigate first instead to <a style="text-decoration: underline;" href="/c">/c</a> and then to a sub cateory available in the sidebar of the page.</li>
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'contentobject_id' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'anonymous_user_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['anonymous_user_id'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) != ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <li>Your current user does not have the proper privileges to access this page.</li>
    ';
}
else
{
$text .= '    <li>You are <span style="text-decoration: underline;">not currently logged in to the site</span>, to get proper access create a new user or login with an existing user.</li>
    ';
}
unset( $if_cond );
// if ends

$text .= '    <li>You misspelled some parts of your URL, try changing it.</li>
</ul>
<p>&nbsp;</p>';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_required', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_required'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<p>Permission required</p>
<ul>
<li>Module : ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_required', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_required'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' </li>
<li>Function : ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'function_required', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['function_required'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</li>
</ul>';
}
unset( $if_cond );
// if ends

$text .= '</div>
';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'contentobject_id' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'anonymous_user_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['anonymous_user_id'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) == ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
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
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'embed_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['embed_content'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '
    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'embed_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['embed_content'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
    ';
}
else
{
$text .= '
        <form method="post" action="/user/login">

        <p>Click the Login button to login.</p>
        <div class="buttonblock">
        <input class="button" type="submit" name="LoginButton" value="Login" />
        </div>

        <input type="hidden" name="Login" value="" />
        <input type="hidden" name="Password" value="" />
        <input type="hidden" name="RedirectURI" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'redirect_uri', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['redirect_uri'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
        </form>

    ';
}
unset( $if_cond );
// if ends

}
unset( $if_cond );
// if ends

$text .= '
</form>

';

$setArray = $oldSetArray_413e7cbae7023c22f6553a7f2532e352;
$tpl->Level--;
?>
