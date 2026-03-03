{* User Signup / Register View *}

{def $var1=0

}

<section class="section auth-section">
  <div class="container">
    <form enctype="multipart/form-data" action={"/user/register/"|ezurl} method="post" name="Signup">
      <div class="auth-form-header">
        <h2 class="auth-form-title">Create an account</h2>
        <p>Make your account to submit stories, comments, and more.</p>
      </div>

      {if and( and( is_set( $checkErrNodeId ), $checkErrNodeId ), eq( $checkErrNodeId, true() ) )}
        <div class="invalid-feedback">
          <time>[{currentdate()|l10n( shortdatetime )}]</time> {$errMsg}
        </div>
      {/if}

      {if $validation.processed}
        {if $validation.attributes|count|gt(0)}
          <div class="invalid-feedback warning">
            <p>{"Input did not validate"|i18n("design/ezwebin/user/register")}</p>
            <ul>
              {foreach $validation.attributes as $attribute}
                <li>{$attribute.name}: {$attribute.description}</li>
              {/foreach}
            </ul>
          </div>
        {else}
          <div class="valid-feedback">
            {"Input was stored successfully"|i18n("design/ezwebin/user/register")}
          </div>
        {/if}
      {/if}

      <div class="form-group">
        {if count($content_attributes)|gt(0)}
          {foreach $content_attributes as $attribute}
            <input type="hidden" name="ContentObjectAttribute_id[]" value="{$attribute.id}" />
            {if $attribute.data_type_string|eq('ezboolean')}
              <div class="form-check block">
                {attribute_edit_gui attribute=$attribute class="form-control"}
                {if array('user_account')|contains($attribute.contentclass_attribute.identifier)|not}
                  <label id="ezcoa-{$attribute.id}_label" class="form-check-label">
                    {$attribute.contentclass_attribute.name}
                  </label>
                {/if}
              </div>
            {else}
              <div class="form-group block">
                {if array('user_account')|contains($attribute.contentclass_attribute.identifier)|not}
                  <label class="form-label">
                    {$attribute.contentclass_attribute.name}
                  </label>
                {/if}
                {attribute_edit_gui attribute=$attribute class="form-control"}
              </div>
            {/if}
          {/foreach}

        {else}
          <div class="invalid-feedback">
            {"Unable to register new user"|i18n("design/ezwebin/user/register")}
          </div>
          <input class="btn btn-primary button" type="submit" id="CancelButton" name="CancelButton"
            value="{'Back'|i18n('design/ezwebin/user/register')}"
            onclick="window.setTimeout( disableButtons, 1 ); return true;" />
        {/if}

        <div class="form-actions" style="margin-top:1.5em;">
          <input class="button" type="hidden" name="UserID" value="{$content_attributes[0].contentobject_id}" />
          {if and( is_set( $checkErrNodeId ), $checkErrNodeId )|not()}
            <input class="btn btn-primary button" type="submit" id="PublishButton" name="PublishButton"
              value="{'Create Account'|i18n('design/ezwebin/user/register')}"
              onclick="window.setTimeout( disableButtons, 1 ); return true;" />
          {else}
            <input class="btn btn-primary button" type="submit" id="PublishButton" name="PublishButton"
              disabled="disabled" value="{'Signup'|i18n('design/ezwebin/user/register')}"
              onclick="window.setTimeout( disableButtons, 1 ); return true;" />
          {/if}
          <input class="btn btn-primary button" type="submit" id="CancelButton" name="CancelButton"
            value="{'Cancel'|i18n('design/ezwebin/user/register')}"
            onclick="window.setTimeout( disableButtons, 1 ); return true;" />
        </div>

        <div class="auth-form-footer">
          <p>
            Already have an account?
            <a href="/user/login" class="link">Login</a>
          </p>
        </div>

    </form>
  </div>
</section>

{literal}
  <script type="text/javascript">
    function disableButtons() {
      document.getElementById('PublishButton').disabled = true;
      document.getElementById('CancelButton').disabled = true;
    }
  </script>
{/literal}