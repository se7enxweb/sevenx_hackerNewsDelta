{* User login view *}

{def $var1=0

}

<form method="post"
      action={concat("https://", ezsys('hostname'), "/user/login/")|ezurl}
      name="loginform" 
      class="auth-form">

     <section class="section auth-section">
	    {if $User:warning.bad_login}
	    <div class="warning">
	    <h2>{"Could not login"|i18n("design/ezwebin/user/login")}</h2>
	    <ul>
	        <li>{"A valid username and password is required to login."|i18n("design/ezwebin/user/login")}</li>
	    </ul>
	    </div>
	    {else}
              {* if $site_access.allowed|not}
	      <div class="warning">
	        <h2>{"Access not allowed"|i18n("design/ezwebin/user/login")}</h2>
		<ul>
		    <li>{"You are not allowed to access %1."|i18n("design/ezwebin/user/login",,array($site_access.name))}</li>
                </ul>
	      </div>
	      {/if *}
	    {/if}
	    <div class="auth-form-header">
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
	    {if ezini( 'Session', 'RememberMeTimeout' )}
	    <div class="block">
	      <input type="checkbox" tabindex="1" name="Cookie" id="id4" /><label for="id4" style="display:inline;">{"Remember me"|i18n("design/ezwebin/user/login")}</label>
	    </div>
	    {/if}
	    </div>

            <div class="form-actions">
	      <input class="btn btn-primary defaultbutton" type="submit" name="LoginButton" value="{'Login'|i18n('design/ezwebin/user/login','Button')}" tabindex="1" />
            </div>

	    {if ezmodule( 'user/register' ) }
            <div class="auth-form-footer">
              <p>
                Don't have an account?
                <a href="/user/register" class="link">Create one</a>
              </p>
            </div>
	    {/if}
            <input type="hidden" name="RedirectURI" value="{$User:redirect_uri|wash}" />
	    {if and( is_set( $User:post_data ), is_array( $User:post_data ) )}
  	    {foreach $User:post_data as $key => $postData}
      	      <input name="Last_{$key|wash}" value="{$postData|wash}" type="hidden" />
  	    {/foreach}
	    {/if}
          </form>
      </section>

