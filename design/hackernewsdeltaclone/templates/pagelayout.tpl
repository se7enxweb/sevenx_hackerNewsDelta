<!DOCTYPE html>
<html lang="{$site.http_equiv.Content-language|wash}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {def $basket = fetch( shop, basket )
     $basket_qty        = 0
     $basket_is_empty   = cond( $current_user.is_logged_in, fetch( shop, basket ).is_empty, 1 )
     $user_hash         = concat( $current_user.role_id_list|implode( ',' ), ',', $current_user.limited_assignment_value_list|implode( ',' ) )
     $path_array        = array()
     $path_normalized   = ''
     $indexpage         = ezini( 'NodeSettings', 'RootNode', 'content.ini' )
     $pagerootdepth    = ezini( 'SiteSettings', 'RootNodeDepth', 'site.ini' )
}
  {foreach $basket.items as $cart_item}{set $basket_qty = $basket_qty|sum( $cart_item.item_count )}{/foreach}
  {include uri='design:page_head_displaystyles.tpl'}

  {if is_set( $extra_cache_key )|not}
    {def $extra_cache_key = ''}
  {/if}

  {cache-block keys=array( $view_paramters.offset, $module_result.uri, $basket_is_empty, $current_user.contentobject_id, $extra_cache_key )}
  {def $pagedata         = ezpagedata()
     $pagestyle        = $pagedata.css_classes
     $locales          = fetch( 'content', 'translation_list' )
     $pagedesign       = $pagedata.template_look
     $pagedesign_class = fetch( 'content', 'class', hash( 'class_id', 'template_look' ) )}
  {if first_set($pagedata.node_id,0)} {def $current_node_id = $pagedata.node_id}
  {else}
    {def $current_node_id=0}
  {/if}
  {def $current_node=fetch(content, node, hash(node_id, $current_node_id))}
  {if $pagedesign_class.object_count|eq( 0 )|not}{set $pagedesign = $pagedesign_class.object_list[1]}{/if}{if is_set( $module_result.content_info )}{set $content_info = $module_result.content_info}{/if}

  {include uri='design:page_head.tpl'}
  <!-- google fonts  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  {*<!-- splide -->
    <link rel="stylesheet" href={"javascript/splide/css/splide.min.css"|ezdesign()} >*}
  <!-- custom styles -->
  {include uri='design:page_head_style.tpl'}
  {include uri='design:page_head_script.tpl'}
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7402149281256266"
    crossorigin="anonymous"></script>
</head>
{* To simplify IE css targeting. IE9 conforms, so threat as rest *}
<!--[if lt IE 7 ]><body class="ie6"><![endif]-->
<!--[if IE 7 ]>   <body class="ie7"><![endif]-->
<!--[if IE 8 ]>   <body class="ie8"><![endif]-->
<!--[if (gt IE 8)|!(IE)]><!-->

<body class="hnd">
  <!--<![endif]-->

  <!-- Header area: START -->
  {include uri='design:page_header.tpl' current_user=$current_user}
  <!-- Header area: END -->

  <script>
    <!--
    var ezpRoot = "{'/'|ezurl( no )|rtrim( '/' )}";
    var ezpFilesRoot = "{'/'|ezroot( no )|rtrim( '/' )}";
    var ezpCurrentURL = {cond( is_set( $current_node_id ), concat( '"', $module_result.uri|wash( 'javascript' ), '"' ), 'false' )};
    var ezpReturnURL = {cond( is_set( $current_node_id ), $module_result.uri, '/' )|ezurl( , 'full' )};
    // 
    -->
  </script>

  <!-- main starts -->
  <main class="main">
    <!-- Complete page area: START -->

    <!-- Change between "sidemenu"/"nosidemenu" and "extrainfo"/"noextrainfo" to switch display of side columns on or off  -->
    {*<div id="page" class="{$pagestyle}">*}

    {if and( is_set( $pagedata.persistent_variable.extra_template_list ),
             $pagedata.persistent_variable.extra_template_list|count() )}
    {foreach $pagedata.persistent_variable.extra_template_list as $extra_template}
      {include uri=concat('design:extra/', $extra_template)}
    {/foreach}
    {/if}

    {cache-block keys=array( $module_result.uri, $user_hash, $extra_cache_key )}

    {*<!-- Top menu area: START -->
  {if $pagedata.top_menu}
    {include uri='design:page_topmenu.tpl'}
  {/if}
  <!-- Top menu area: END -->*}

    {* <!-- Path area: START -->
  {if $pagedata.show_path}
    {include uri='design:page_toppath.tpl'}
  {/if}
  <!-- Path area: END -->*}

    <!-- Toolbar area: START -->
    {if and( $pagedata.website_toolbar, $pagedata.is_edit|not)}
      {include uri='design:page_toolbar.tpl'}
    {/if}
    <!-- Toolbar area: END -->

    <!-- Columns area: START -->
    {*<div id="columns-position">
  <div id="columns" class="float-break"> *}

    {*<!-- Side menu area: START -->
    {if $pagedata.left_menu}
        {include uri='design:page_leftmenu.tpl'}
    {/if}
    <!-- Side menu area: END -->*}

    {/cache-block}

    {/cache-block}
    <section class="section">
      <div class="container">
        {foreach $module_result.path as $index => $path}
          {if $index|ge($pagerootdepth)}
            {set $path_array = $path_array|append($path)}
          {/if}
          {if is_set($path.node_id)}
            {set $path_normalized = $path_normalized|append( concat('subtree_level_', $index, '_node_id_', $path.node_id, ' ' ))}
          {/if}
        {/foreach}

        <!-- Path area: START -->
        <div id="path">
          {include uri='design:parts/path.tpl'}
        </div>
        <!-- Path area: END -->
        <!-- Main area: START -->
        {*include uri='design:page_mainarea.tpl'*}
        <!-- Main area content: START -->
        {$module_result.content}
      </div>
    </section>
    <!-- Main area content: END -->
    <!-- Main area: END -->
  </main>
  <!-- main ends -->
  {cache-block keys=array( $module_result.uri, $user_hash, $access_type.name, $extra_cache_key )}

  {if is_unset($pagedesign)}
    {set $pagedata   = ezpagedata()
               $pagedesign = $pagedata.template_look}
  {/if}

  {*<!-- Extra area: START -->
    {if $pagedata.extra_menu}
        {include uri='design:page_extramenu.tpl'}
    {/if}
    <!-- Extra area: END -->*}

  {*  </div>
  </div>*}
  <!-- Columns area: END -->

  <!-- Footer area: START -->
  {include uri='design:page_footer.tpl'}
  {*include uri="design:page_footer_secondary.tpl"*}
  <!-- Scroll To Top::Start -->
  <button type="button" class="scroll-to-top" id="scrollToTop" aria-label="Scroll to top">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
      <path
        d="M13.0001 22.0003L11.0002 22.0004L11.0002 5.82845L7.05044 9.77817L5.63623 8.36396L12.0002 2L18.3642 8.36396L16.9499 9.77817L13.0002 5.8284L13.0001 22.0003Z">
      </path>
    </svg>
  </button>
  <!-- Scroll To Top::End -->

  <!-- Settings::Start -->
  <div class="settings-dock">
    <button class="settings-btn" type="button" id="openSettings" aria-label="Open site settings" data-toggle="modal"
      data-target="#settingsModal">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
        <path
          d="M8.68637 4.00008L11.293 1.39348C11.6835 1.00295 12.3167 1.00295 12.7072 1.39348L15.3138 4.00008H19.0001C19.5524 4.00008 20.0001 4.4478 20.0001 5.00008V8.68637L22.6067 11.293C22.9972 11.6835 22.9972 12.3167 22.6067 12.7072L20.0001 15.3138V19.0001C20.0001 19.5524 19.5524 20.0001 19.0001 20.0001H15.3138L12.7072 22.6067C12.3167 22.9972 11.6835 22.9972 11.293 22.6067L8.68637 20.0001H5.00008C4.4478 20.0001 4.00008 19.5524 4.00008 19.0001V15.3138L1.39348 12.7072C1.00295 12.3167 1.00295 11.6835 1.39348 11.293L4.00008 8.68637V5.00008C4.00008 4.4478 4.4478 4.00008 5.00008 4.00008H8.68637ZM6.00008 6.00008V9.5148L3.5148 12.0001L6.00008 14.4854V18.0001H9.5148L12.0001 20.4854L14.4854 18.0001H18.0001V14.4854L20.4854 12.0001L18.0001 9.5148V6.00008H14.4854L12.0001 3.5148L9.5148 6.00008H6.00008ZM12.0001 16.0001C9.79094 16.0001 8.00008 14.2092 8.00008 12.0001C8.00008 9.79094 9.79094 8.00008 12.0001 8.00008C14.2092 8.00008 16.0001 9.79094 16.0001 12.0001C16.0001 14.2092 14.2092 16.0001 12.0001 16.0001ZM12.0001 14.0001C13.1047 14.0001 14.0001 13.1047 14.0001 12.0001C14.0001 10.8955 13.1047 10.0001 12.0001 10.0001C10.8955 10.0001 10.0001 10.8955 10.0001 12.0001C10.0001 13.1047 10.8955 14.0001 12.0001 14.0001Z">
        </path>
      </svg>
    </button>
  </div>
  <!-- Settings::End -->

  <!-- Modals:End -->
  <div class="modal-backdrop" id="settingsModal" aria-hidden="true">
    <div class="modal" role="dialog" aria-modal="true" aria-labelledby="settingsTitle">
      <header class="modal-header">
        <h2 class="modal-title" id="settingsTitle">Site Settings</h2>
        <button type="button" class="modal-close" id="closeSettings" aria-label="Close settings">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
          </svg>
        </button>
      </header>

      <div class="modal-body">
        <section class="settings-section">
          <div class="form-group">
            <label for="fontSizeSelect" class="form-label">Font Size:</label>
            <select id="fontSizeSelect" class="form-control">
              <option value="0.75">75%</option>
              <option value="0.875">87.5%</option>
              <option value="1">100%</option>
              <option value="1.25">125%</option>
              <option value="1.5" selected>150%</option>
            </select>
          </div>
          <div class="form-group">
            <label for="themeSelect" class="form-label">Theme:</label>
            <select id="themeSelect" class="form-control">
              <option value="light">Light</option>
              <option value="dark">Dark</option>
              <option value="system">System Default</option>
            </select>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- Modals::End -->

  <!-- JavaScript -->
  <script src={"javascript/main.js"|ezdesign} defer></script>
  <!-- Google tag (gtag.js) -->
  {'false'|bc_ga_urchin()}
  <!-- Footer area: END -->
  {/cache-block}
  {* This comment will be replaced with actual debug report (if debug is on). *}
  <!--DEBUG_REPORT-->
</body>

</html>