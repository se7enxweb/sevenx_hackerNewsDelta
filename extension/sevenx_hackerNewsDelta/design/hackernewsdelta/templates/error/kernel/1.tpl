<form method="post"
      action="#"
      name="loginform"
      class="auth-form">

<div class="warning">
<h2>{"Access denied"|i18n("design/standard/error/kernel")}</h2>
<p>{"You do not have permission to access (or submit a story) to this area of HND."|i18n("design/standard/error/kernel")}</p>
<p>&nbsp;</p>
<p style="margin-bottom: 0.30rem;">{"Possible reasons for this are"|i18n("design/standard/error/kernel")}:</p>
<ul style="list-style: disc; margin-left: 1.2rem;">
    <li>You must navigate to a HND story category to submit a new story. Please navigate first instead to <a style="text-decoration: underline;" href="/c">/c</a> and then to a sub cateory available in the sidebar of the page.</li>
    {if ne($current_user.contentobject_id,$anonymous_user_id)}
    <li>{"Your current user does not have the proper privileges to access this page."|i18n("design/standard/error/kernel")}</li>
    {else}
    <li>You are <span style="text-decoration: underline;">not currently logged in to the site</span>, to get proper access create a new user or login with an existing user.</li>
    {/if}
    <li>{"You misspelled some parts of your URL, try changing it."|i18n("design/standard/error/kernel")}</li>
</ul>
<p>&nbsp;</p>
{if is_set($module_required)}
<p>{"Permission required"|i18n("design/standard/error/kernel")}</p>
<ul>
<li>{"Module : "|i18n("design/standard/error/kernel")}{$module_required} </li>
<li>{"Function : "|i18n("design/standard/error/kernel")}{$function_required}</li>
</ul>
{/if}
</div>

{if eq($current_user.contentobject_id,$anonymous_user_id)}

    {if $embed_content}

    {$embed_content}
    {else}

        <form method="post" action={"/user/login/"|ezurl}>

        <p>{"Click the Login button to login."|i18n("design/standard/error/kernel")}</p>
        <div class="buttonblock">
        <input class="button" type="submit" name="LoginButton" value="{'Login'|i18n('design/standard/error/kernel','Button')}" />
        </div>

        <input type="hidden" name="Login" value="" />
        <input type="hidden" name="Password" value="" />
        <input type="hidden" name="RedirectURI" value="{$redirect_uri}" />
        </form>

    {/if}

{/if}

</form>

