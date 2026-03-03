<div class="container-xxl py-5">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center">
        <h1>
          {'eZ Publish information: %version'|i18n('design/ezwebin/ezinfo/about',,hash( '%version', $ezinfo ) )|wash}
        </h1>
        {* <p>
          We are eagerly awaiting you to contact 7x. We can't wait to get
          started on your website. Please learn more about how we work through our website map!
        </p> *}
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <h2 class="h3 mb-4">eZ Publish</h2>
        <div class="row g-3">
          <div class="col-12">
            <h3 class="h4 mb-4">
              {'What is eZ Publish?'|i18n( 'design/ezwebin/ezinfo/about' )}
            </h3>
            {if is_set( $what_is_ez_publish )}
              <div>{$what_is_ez_publish|explode('<p>')|implode('<p class="mb-4">')}</div>
            {/if}
          </div>
          <div class="col-12">
            <h3 class="h4 mb-4">
              {'Licence'|i18n( 'design/ezwebin/ezinfo/about' )}
            </h3>
            {if is_set( $license )}
              <div class="overflow-auto" style="height: 320px;">{$license|explode('\n')|implode('<br>')}</div>
            {/if}
          </div>
          {if and( is_set( $contributors ), is_array( $contributors ), count( $contributors )|ge( 1 ) )}
            <div class="col-12">
              <h3 class="h4 mb-4">
                {'Contributors'|i18n( 'design/ezwebin/ezinfo/about' )}
              </h3>
              <div>
                <p class="mb-4">
                  The following is a list of <a href="http://ez.no/ezpublish" class="break-all">eZ Publish</a>
                  contributors who
                  have licensed their work for use by <a href="http://ez.no/" class="break-all">eZ Systems AS</a> under
                  the
                  terms and conditions of
                  the eZ Contributor Licensing Agreement. As permitted by this agreement with the contributors, <a
                    href="http://ez.no/">eZ Systems AS</a> is redistributing the
                  contribution under the same license as the file that the contribution is included in. The list of
                  contributors
                  includes the contributors&apos;s
                  name, optional contact info and a list of files that they have either contributed or contributed work
                  to.
                </p>
              </div>
              <ul>
                {foreach $contributors as $contributor}
                  <li>{$contributor['name']|wash} : {$contributor['files']|wash}</li>
                {/foreach}
              </ul>
            </div>
          {/if}
          <div class="col-12">
            <h3 class="h4 mb-4">
              {'Copyright Notice'|i18n( 'design/ezwebin/ezinfo/about' )}
            </h3>
            <div>
              <p class="mb-4">
                Copyright &copy; 1999-2014 <a href="http://ez.no/" class="break-all">eZ Systems AS</a>, with portions
                copyright by other parties. A complete list of all contributors and third-party
                software follows.
              </p>
            </div>
          </div>
          {if and( is_set( $third_party_software ), is_array( $third_party_software ), count( $third_party_software )|ge( 1 ) )}
            <div class="col-12">
              <h3 class="h4 mb-4">
                {'Third-Party Software'|i18n('design/ezwebin/ezinfo/about')}</h2>
              </h3>
              <div>
                <p class="mb-4">
                  The following is a list of the third-party software that is distributed with this copy of <a
                    href="http://ez.no/ezpublish" class="break-all">eZ Publish</a>. The list of third party
                  software includes the license for the software in question and the directory or files that contain the
                  third-party software.
                </p>
              </div>
              <ul>
                {foreach $third_party_software as $software_key => $software}
                  <li>{$software|wash}</li>
                {/foreach}
              </ul>
            </div>
          {/if}
          <div class="col-12">
            <h3 class="h4 mb-4">
              {'Extensions'|i18n('design/ezwebin/ezinfo/about')}
            </h3>
            <div>
              <p class="mb-4">
                The following is a list of the extensions that have been loaded at run-time by this copy of <a
                  href="http://ez.no/ezpublish" class="break-all">eZ Publish</a>.
              </p>
            </div>
          </div>
          <div class="col-12">
            {if is_set( $extensions )}
              <div class="row g-3">
                {foreach $extensions as $ext_name => $extension}
                  {if is_array( $extension )}
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                      <div class="card shadow-sm h-100">
                        <div class="card-body">
                          <ul class="d-flex flex-column gap-2 list-unstyled">
                            {foreach $extension as $ext_key => $ext_info}
                              <li>
                                <h4 class="h5">{$ext_key|upfirst|wash}</h4>
                                {if not( is_array( $ext_info ) )}
                                  {if $ext_key|eq('info_url')}
                                    <a href={$ext_info} class="break-all">{$ext_info}</a>
                                  {else}
                                    <span {if $ext_info|contains( 'http' )} style="text-decoration:underline;"{/if}>{$ext_info|autolink}</span>
                                  {/if}
                                {else}
                                  <ul class="d-flex flex-column gap-2">
                                    {foreach $ext_info as $ext_info_key => $ext_info_value}
                                      <li>
                                        {if $ext_info_key|eq('info_url')}
                                          <h5 class="h6">{$ext_info_key|upfirst|wash}</h5>
                                          <a href={$ext_info_value} class="break-all">{$ext_info_value}</a>
                                        {else}
                                          <h5 class="h6">{$ext_info_key|upfirst|wash}</h5>
                                          <span>{$ext_info_value}</span>
                                        {/if}
                                      </li>
                                    {/foreach}
                                  </ul>
                                {/if}
                              </li>
                            {/foreach}
                          </ul>
                        </div>
                      </div>
                    </div>
                  {/if}
                {/foreach}
              </div>
            {/if}
          </div>
        </div>
      </div>
    </div>
</section>