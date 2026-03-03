<?php
// URI:       design:user/register_user_not_valid.tpl
// Filename:  design/standard/templates/user/register_user_not_valid.tpl
// Timestamp: 1768752118 (Sun Jan 18 8:01:58 PST 2026)
$oldSetArray_2020deceee409d99f552ec5d3d34524e = isset( $setArray ) ? $setArray : array();
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
<form action="/user/register" method="post" name="RetryRegister">

<div class="maincontentheader">
<h1>Register user</h1>
</div>

    <div class="message-error">
        <h2><!-- span class="time">[';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
$var1 = time();
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

$var = $locale->formatShortDateTime( $var1 );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ']</span --> Your browser does not seem to support cookies, to register a new user, cookies need to be supported and enabled!</h2>
    </div>


    <div class="buttonblock">
        <input class="button" type="submit" name="RetryButton" value="Try again" />
    </div>
</form>';

$setArray = $oldSetArray_2020deceee409d99f552ec5d3d34524e;
$tpl->Level--;
?>
