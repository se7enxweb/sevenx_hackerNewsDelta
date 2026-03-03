<?php
// URI:       design:user/login.tpl
// Filename:  design/delta/templates/user/login.tpl
// Timestamp: 1768805888 (Sun Jan 18 22:58:08 PST 2026)
$oldSetArray_f63ce8e02c8a9c10bc2968e1da2610bf = isset( $setArray ) ? $setArray : array();
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
';
// def $var1
if ( $tpl->hasVariable( 'var1', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'var1' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 24,
  ),
  1 => 
  array (
    0 => 5,
    1 => 0,
    2 => 37,
  ),
  2 => 'design/delta/templates/user/login.tpl',
) );
    $tpl->setVariable( 'var1', 0, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'var1', 0, $rootNamespace );
}

$text .= '
<form method="post"
      action=';
unset( $var );
unset( $var1 );
unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var3Data = array( 'value' => $var3 );
$tpl->processOperator( 'ezsys',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'hostname',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $var3Data, false, false );
$var3 = $var3Data['value'];
unset( $var3Data );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'https://' . $var3 . '/user/login/' );
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

$text .= '
      name="loginform" 
      class="auth-form">

     <section class="section auth-section">
	    ';
// if begins
unset( $if_cond );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "User";
else
    $namespace .= ':User';
unset( $if_cond );
$if_cond = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'warning', $vars[$namespace] ) ) ? $vars[$namespace]['warning'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'bad_login' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '	    <div class="warning">
	    <h2>Could not login</h2>
	    <ul>
	        <li>A valid username and password is required to login.</li>
	    </ul>
	    </div>
	    ';
}
else
{
$text .= '              
	    ';
}
unset( $if_cond );
// if ends

$text .= '	    <div class="auth-form-header">
              <h2 class="auth-form-title">Login to your account</h2>
              <p>Enter your credentials to access your account.</p>
            </div>

            <div class="form-group">
              <label for="username" class="form-label">Username</label>
              <input
                type="text"
                id="username"
                name="Login"
                class="form-control"
                required
              />
              <div class="invalid-feedback"></div>
            </div>

            <div class="form-group">
              <div class="form-label-group">
                <label for="password" class="form-label">Password</label>
                <a href="/user/forgotpassword" class="link"
                  >Forgot your password?</a
                >
              </div>
              <input
                type="password"
                id="password"
                name="Password"
                class="form-control"
                required
              />
              <div class="invalid-feedback"></div>
            </div>
            <div class="form-group">
	    ';
// if begins
$if_cond = '';
if ( $if_cond )
{
$text .= '	    <div class="block">
	      <input type="checkbox" tabindex="1" name="Cookie" id="id4" /><label for="id4" style="display:inline;">Remember me</label>
	    </div>
	    ';
}
unset( $if_cond );
// if ends

$text .= '	    </div>

            <div class="form-actions">
	      <input class="btn btn-primary defaultbutton" type="submit" name="LoginButton" value="Login" tabindex="1" />
            </div>

	    ';
// if begins
unset( $if_cond );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();
$if_condData = array( 'value' => $if_cond );
$tpl->processOperator( 'ezmodule',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'user/register',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $if_condData, false, false );
$if_cond = $if_condData['value'];
unset( $if_condData );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <div class="auth-form-footer">
              <p>
                Don\'t have an account?
                <a href="/user/register" class="link">Create one</a>
              </p>
            </div>
	    ';
}
unset( $if_cond );
// if ends

$text .= '            <input type="hidden" name="RedirectURI" value="';
unset( $var );
unset( $var1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "User";
else
    $namespace .= ':User';
unset( $var1 );
$var1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'redirect_uri', $vars[$namespace] ) ) ? $vars[$namespace]['redirect_uri'] : null;
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

$text .= '" />
	    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "User";
else
    $namespace .= ':User';
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'post_data', $vars[$namespace] ) ) ? $vars[$namespace]['post_data'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "User";
else
    $namespace .= ':User';
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'post_data', $vars[$namespace] ) ) ? $vars[$namespace]['post_data'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = is_array( $if_cond3 );unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '  	    ';
// foreach begins
$skipDelimiter = true;
$fe_array_95308bc9a0daa508de2003083c1184fa_1 = [];
$fe_array_keys_95308bc9a0daa508de2003083c1184fa_1 = [];
$fe_n_items_95308bc9a0daa508de2003083c1184fa_1 = 0;
$fe_n_items_processed_95308bc9a0daa508de2003083c1184fa_1  = 0;
$fe_i_95308bc9a0daa508de2003083c1184fa_1 = 0;
$fe_key_95308bc9a0daa508de2003083c1184fa_1 = 0;
$fe_val_95308bc9a0daa508de2003083c1184fa_1 = 0;
$fe_offset_95308bc9a0daa508de2003083c1184fa_1 = 0;
$fe_max_95308bc9a0daa508de2003083c1184fa_1 = 0;
$fe_reverse_95308bc9a0daa508de2003083c1184fa_1 = 0;
$fe_first_val_95308bc9a0daa508de2003083c1184fa_1 = 0;
$fe_last_val_95308bc9a0daa508de2003083c1184fa_1 = 0;
if ( !isset( $fe_variable_stack_95308bc9a0daa508de2003083c1184fa_1 ) ) $fe_variable_stack_95308bc9a0daa508de2003083c1184fa_1 = [];
$fe_variable_stack_95308bc9a0daa508de2003083c1184fa_1[] = @compact( 'fe_array_95308bc9a0daa508de2003083c1184fa_1', 'fe_array_keys_95308bc9a0daa508de2003083c1184fa_1', 'fe_n_items_95308bc9a0daa508de2003083c1184fa_1', 'fe_n_items_processed_95308bc9a0daa508de2003083c1184fa_1', 'fe_i_95308bc9a0daa508de2003083c1184fa_1', 'fe_key_95308bc9a0daa508de2003083c1184fa_1', 'fe_val_95308bc9a0daa508de2003083c1184fa_1', 'fe_offset_95308bc9a0daa508de2003083c1184fa_1', 'fe_max_95308bc9a0daa508de2003083c1184fa_1', 'fe_reverse_95308bc9a0daa508de2003083c1184fa_1', 'fe_first_val_95308bc9a0daa508de2003083c1184fa_1', 'fe_last_val_95308bc9a0daa508de2003083c1184fa_1' );
unset( $fe_array_95308bc9a0daa508de2003083c1184fa_1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "User";
else
    $namespace .= ':User';
unset( $fe_array_95308bc9a0daa508de2003083c1184fa_1 );
$fe_array_95308bc9a0daa508de2003083c1184fa_1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'post_data', $vars[$namespace] ) ) ? $vars[$namespace]['post_data'] : null;
if (! isset( $fe_array_95308bc9a0daa508de2003083c1184fa_1 ) ) $fe_array_95308bc9a0daa508de2003083c1184fa_1 = NULL;
while ( is_object( $fe_array_95308bc9a0daa508de2003083c1184fa_1 ) and method_exists( $fe_array_95308bc9a0daa508de2003083c1184fa_1, 'templateValue' ) )
    $fe_array_95308bc9a0daa508de2003083c1184fa_1 = $fe_array_95308bc9a0daa508de2003083c1184fa_1->templateValue();

$fe_array_keys_95308bc9a0daa508de2003083c1184fa_1 = is_array( $fe_array_95308bc9a0daa508de2003083c1184fa_1 ) ? array_keys( $fe_array_95308bc9a0daa508de2003083c1184fa_1 ) : [];
$fe_n_items_95308bc9a0daa508de2003083c1184fa_1 = count( $fe_array_keys_95308bc9a0daa508de2003083c1184fa_1 );
$fe_n_items_processed_95308bc9a0daa508de2003083c1184fa_1 = 0;
$fe_offset_95308bc9a0daa508de2003083c1184fa_1 = 0;
$fe_max_95308bc9a0daa508de2003083c1184fa_1 = $fe_n_items_95308bc9a0daa508de2003083c1184fa_1 - $fe_offset_95308bc9a0daa508de2003083c1184fa_1;
$fe_reverse_95308bc9a0daa508de2003083c1184fa_1 = false;
if ( $fe_offset_95308bc9a0daa508de2003083c1184fa_1 < 0 || $fe_offset_95308bc9a0daa508de2003083c1184fa_1 >= $fe_n_items_95308bc9a0daa508de2003083c1184fa_1 )
{
    $fe_offset_95308bc9a0daa508de2003083c1184fa_1 = ( $fe_offset_95308bc9a0daa508de2003083c1184fa_1 < 0 ) ? 0 : $fe_n_items_95308bc9a0daa508de2003083c1184fa_1;
    if ( $fe_n_items_95308bc9a0daa508de2003083c1184fa_1 || $fe_offset_95308bc9a0daa508de2003083c1184fa_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_95308bc9a0daa508de2003083c1184fa_1'. Array count: $fe_n_items_95308bc9a0daa508de2003083c1184fa_1");   
}
}
if ( $fe_max_95308bc9a0daa508de2003083c1184fa_1 < 0 || $fe_offset_95308bc9a0daa508de2003083c1184fa_1 + $fe_max_95308bc9a0daa508de2003083c1184fa_1 > $fe_n_items_95308bc9a0daa508de2003083c1184fa_1 )
{
    if ( $fe_max_95308bc9a0daa508de2003083c1184fa_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_95308bc9a0daa508de2003083c1184fa_1");
    $fe_max_95308bc9a0daa508de2003083c1184fa_1 = $fe_n_items_95308bc9a0daa508de2003083c1184fa_1 - $fe_offset_95308bc9a0daa508de2003083c1184fa_1;
}
if ( $fe_reverse_95308bc9a0daa508de2003083c1184fa_1 )
{
    $fe_first_val_95308bc9a0daa508de2003083c1184fa_1 = $fe_n_items_95308bc9a0daa508de2003083c1184fa_1 - 1 - $fe_offset_95308bc9a0daa508de2003083c1184fa_1;
    $fe_last_val_95308bc9a0daa508de2003083c1184fa_1  = 0;
}
else
{
    $fe_first_val_95308bc9a0daa508de2003083c1184fa_1 = $fe_offset_95308bc9a0daa508de2003083c1184fa_1;
    $fe_last_val_95308bc9a0daa508de2003083c1184fa_1  = $fe_n_items_95308bc9a0daa508de2003083c1184fa_1 - 1;
}
// foreach
for ( $fe_i_95308bc9a0daa508de2003083c1184fa_1 = $fe_first_val_95308bc9a0daa508de2003083c1184fa_1; $fe_n_items_processed_95308bc9a0daa508de2003083c1184fa_1 < $fe_max_95308bc9a0daa508de2003083c1184fa_1 && ( $fe_reverse_95308bc9a0daa508de2003083c1184fa_1 ? $fe_i_95308bc9a0daa508de2003083c1184fa_1 >= $fe_last_val_95308bc9a0daa508de2003083c1184fa_1 : $fe_i_95308bc9a0daa508de2003083c1184fa_1 <= $fe_last_val_95308bc9a0daa508de2003083c1184fa_1 ); $fe_reverse_95308bc9a0daa508de2003083c1184fa_1 ? $fe_i_95308bc9a0daa508de2003083c1184fa_1-- : $fe_i_95308bc9a0daa508de2003083c1184fa_1++ )
{
$fe_key_95308bc9a0daa508de2003083c1184fa_1 = $fe_array_keys_95308bc9a0daa508de2003083c1184fa_1[$fe_i_95308bc9a0daa508de2003083c1184fa_1];
$fe_val_95308bc9a0daa508de2003083c1184fa_1 = $fe_array_95308bc9a0daa508de2003083c1184fa_1[$fe_key_95308bc9a0daa508de2003083c1184fa_1];
$vars[$rootNamespace]['postData'] = $fe_val_95308bc9a0daa508de2003083c1184fa_1;
$vars[$rootNamespace]['key'] = $fe_key_95308bc9a0daa508de2003083c1184fa_1;
$text .= '      	      <input name="Last_';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['key'] : null;
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

$text .= '" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'postData', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['postData'] : null;
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

$text .= '" type="hidden" />
  	    ';
$fe_n_items_processed_95308bc9a0daa508de2003083c1184fa_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_95308bc9a0daa508de2003083c1184fa_1 ) ) extract( array_pop( $fe_variable_stack_95308bc9a0daa508de2003083c1184fa_1 ) );

else
{

unset( $fe_array_95308bc9a0daa508de2003083c1184fa_1 );

unset( $fe_array_keys_95308bc9a0daa508de2003083c1184fa_1 );

unset( $fe_n_items_95308bc9a0daa508de2003083c1184fa_1 );

unset( $fe_n_items_processed_95308bc9a0daa508de2003083c1184fa_1 );

unset( $fe_i_95308bc9a0daa508de2003083c1184fa_1 );

unset( $fe_key_95308bc9a0daa508de2003083c1184fa_1 );

unset( $fe_val_95308bc9a0daa508de2003083c1184fa_1 );

unset( $fe_offset_95308bc9a0daa508de2003083c1184fa_1 );

unset( $fe_max_95308bc9a0daa508de2003083c1184fa_1 );

unset( $fe_reverse_95308bc9a0daa508de2003083c1184fa_1 );

unset( $fe_first_val_95308bc9a0daa508de2003083c1184fa_1 );

unset( $fe_last_val_95308bc9a0daa508de2003083c1184fa_1 );

unset( $fe_variable_stack_95308bc9a0daa508de2003083c1184fa_1 );

}

// foreach ends
$text .= '	    ';
}
unset( $if_cond );
// if ends

$text .= '          </form>
      </section>

';

$setArray = $oldSetArray_f63ce8e02c8a9c10bc2968e1da2610bf;
$tpl->Level--;
?>
