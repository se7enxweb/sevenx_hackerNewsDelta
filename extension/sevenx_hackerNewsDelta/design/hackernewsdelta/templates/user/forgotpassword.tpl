
      <section class="section auth-section">
        <div class="container">
	{if $link}
	   <p>
	    {"An email has been sent to the following address: %1. It contains a link you need to click so that we can confirm that the correct user has received the new password."|i18n('design/ezwebin/user/forgotpassword',,array($email))}
	  </p>
	{else}
	   {if $wrong_email}
	      <div class="warning">
	         <h2>{"There is no registered user with that email address."|i18n('design/ezwebin/user/forgotpassword')}</h2>
	      </div>
	   {/if}
           {if $generated}
             <p>
	        {"Password was successfully generated and sent to: %1"|i18n('design/ezwebin/user/forgotpassword',,array($email))}
             </p>
	   {else}
	     {if $wrong_key}
	       <div class="warning">
	         <h2>{"The key is invalid or has been used. "|i18n('design/ezwebin/user/forgotpassword')}</h2>
	       </div>
             {else}
	       <form method="post"
               name="forgotpassword"
               class="auth-form"
	       action={"/user/forgotpassword/"|ezurl}>


            <div class="auth-form-header">
              <h2 class="auth-form-title">Forgot Your Password?</h2>
	      <p>
                {"If you have forgotten your password, enter your email address and we will create a new password and send it to you."|i18n('design/ezwebin/user/forgotpassword')}
              </p>
              <p>Enter your email or username to reset your password.</p>
            </div>
            <p class="form-info" style="display: none">
              If your email or username is registered, a password reset link has
              been sent. Please check your inbox. If you don’t receive it, try
              again or contact support.
            </p>

            <div class="form-group">
              <label for="email" class="form-label">Email or Username</label>
              <input
                type="text"
                id="email"
                name="UserEmail"
                class="form-control"
                placeholder="you@example.com"
                required
              />
              <div class="invalid-feedback"></div>
            </div>

            <div class="form-actions">
	      <input class="btn btn-primary button" type="submit" name="GenerateButton" value="{'Send Reset Link'|i18n('design/ezwebin/user/forgotpassword')}" />
            </div>

            <div class="auth-form-footer">
              <p>
                Do you remember your password?
                <a href="/user/login" class="link">Login</a>
              </p>
            </div>
          </form>
        </div>
      </section>

      {/if}
   {/if}
{/if}

