<?php
// URI:       design/delta/templates/page_footer.tpl
// Filename:  design/delta/templates/page_footer.tpl
// Timestamp: 1769416680 (Mon Jan 26 0:38:00 PST 2026)
$oldSetArray_fd0747190ed9e7914c50eebcb6841d40 = isset( $setArray ) ? $setArray : array();
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

// def $startyear
if ( $tpl->hasVariable( 'startyear', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'startyear' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 1,
    1 => 19,
    2 => 20,
  ),
  2 => 'design/delta/templates/page_footer.tpl',
) );
    $tpl->setVariable( 'startyear', 2025, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'startyear', 2025, $rootNamespace );
}

$text .= '
<footer class="footer-main">
  <div class="footer-top">
    <div class="container">
      <nav class="nav">
        <ul>
          <li><a href="/lists">Lists</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/about/faq/guidelines">Guidlines</a></li>
          <li><a href="/about/faq">FAQ</a></li>
          <li><a href="/about/faq/security">Security</a></li>
          <li><a href="/about/faq/api">API</a></li>
          <li><a href="/about/legal">Legal</a></li>
          <li><a href="/tools">Tools</a></li>
          
          <li><a href="/about/contact">Contact</a></li>
        </ul>
      </nav>
      <form method="post" action="/content/search" class="search-box">
        <label for="search" class="form-label"> Search: </label>
        <div class="btn-group">
          <input type="text" id="search" name="SearchText" class="form-control" />
          <input class="btn" name="SearchButton" type="submit" value="Search">
        </div>
      </form>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="poweredby-text">
        <div>
          <a href="/" class="brand-logo">
            Hacker News <span class="text-accent">Delta</span>
          </a>
          is Powered by
          <a href="/ezinfo/about" title="Exponential CMS Open Source Web Content Management" class="link">
            Exponential
          </a>
        </div>
        <div class="attribute-image-powered-by">
          <a href="https://exponential.earth">
            <img src="/design/delta/images/content/logos/powered-by-logo-exponential.png" width="339" height="106"
              style="height: 3rem; width: 10rem; margin-top: 0.21rem; border: 0px;" alt="Powered By: Exponential"
              title="Powered By: Exponential">
          </a>
        </div>
      </div>
      <div class="hosting-sponsor">
        <p>Proudly hosted by:</p>
        <p><a href="https://se7enx.com" title="se7enx.com">se7enx.com</a></p>
        <a href="https://se7enx.com" class="footer-logo">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="7x-icon"
            data-name="7x Icon" viewBox="0 0 400 400" width="65" height="65">
            <defs>
              <style>
                
                  .cls-1 {
                    filter: url(#drop-shadow-1);
                  }

                  .cls-2 {
                    fill: #ec7324;
                  }

                
              </style>
              <filter id="drop-shadow-1" x="6.55" y="31.27" width="388.56" height="344.16" filterUnits="userSpaceOnUse">
                <feOffset dx=".8" dy="3.21" />
                <feGaussianBlur result="blur" stdDeviation="2.3" />
                <feFlood flood-color="#010101" flood-opacity=".3" />
                <feComposite in2="blur" operator="in" />
                <feComposite in="SourceGraphic" />
              </filter>
            </defs>
            <g class="cls-1">
              <g>
                <path class="cls-2" d="M12.73,222.3L200,35.03l187.27,187.27h-42.06L199.15,76.24,53.21,222.3H12.73Z" />
                <path class="cls-2"
                  d="M202.55,364.97l142.67-142.55h-40.85l-102.3,102.3-102.3-102.42h-45.21l148,142.67Z" />
                <path class="cls-2" d="M202.55,121.82l101.21,101.21H100l102.55-101.21Z" />
              </g>
            </g>
          </svg>
        </a>
      </div>
    </div>
  </div>
  <div class="footer-bar">
    <div class="tooltip">
      <span class="icon">π</span>
      <span class="content">
        ';
// def $hostname
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
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
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'hostname', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'hostname' is already defined.", array (
  0 => 
  array (
    0 => 93,
    1 => 8,
    2 => 3669,
  ),
  1 => 
  array (
    0 => 96,
    1 => 72,
    2 => 3849,
  ),
  2 => 'design/delta/templates/page_footer.tpl',
) );
    $tpl->setVariable( 'hostname', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'hostname', $var, $rootNamespace );
}

// def $timestamp
unset( $var );
$var = time();
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'timestamp', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'timestamp' is already defined.", array (
  0 => 
  array (
    0 => 93,
    1 => 8,
    2 => 3669,
  ),
  1 => 
  array (
    0 => 96,
    1 => 72,
    2 => 3849,
  ),
  2 => 'design/delta/templates/page_footer.tpl',
) );
    $tpl->setVariable( 'timestamp', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'timestamp', $var, $rootNamespace );
}

// def $version
if ( $tpl->hasVariable( 'version', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'version' is already defined.", array (
  0 => 
  array (
    0 => 93,
    1 => 8,
    2 => 3669,
  ),
  1 => 
  array (
    0 => 96,
    1 => 72,
    2 => 3849,
  ),
  2 => 'design/delta/templates/page_footer.tpl',
) );
    $tpl->setVariable( 'version', '6.0.12gh', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'version', '6.0.12gh', $rootNamespace );
}

// def $language
if ( $tpl->hasVariable( 'language', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'language' is already defined.", array (
  0 => 
  array (
    0 => 93,
    1 => 8,
    2 => 3669,
  ),
  1 => 
  array (
    0 => 96,
    1 => 72,
    2 => 3849,
  ),
  2 => 'design/delta/templates/page_footer.tpl',
) );
    $tpl->setVariable( 'language', 'eng-US', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'language', 'eng-US', $rootNamespace );
}

$text .= '
Rendered on ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hostname', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hostname'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
at ';
unset( $var );
$locale = eZLocale::instance();
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'timestamp', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['timestamp'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $locale->formatDateTimeType( '%Y-%m-%d %H:%i:%s %T', $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
running Exponential ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'version', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['version'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
language code: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
';
// undef $hostname
$tpl->unsetLocalVariable( 'hostname', $rootNamespace );

// undef $timestamp
$tpl->unsetLocalVariable( 'timestamp', $rootNamespace );

// undef $version
$tpl->unsetLocalVariable( 'version', $rootNamespace );

// undef $language
$tpl->unsetLocalVariable( 'language', $rootNamespace );

$text .= '
      </span>
    </div>
  </div>
</footer>

';

$setArray = $oldSetArray_fd0747190ed9e7914c50eebcb6841d40;
$tpl->Level--;
?>
