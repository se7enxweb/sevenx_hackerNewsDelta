{* DropDown Menu : START *}

{def $root_node = fetch( 'content', 'node', hash( 'node_id', $indexpage ) )
     $top_menu_class_filter = ezini( 'MenuContentSettings', 'TopIdentifierList', 'menu.ini' )
     $top_menu_items = fetch( 'content', 'list', hash('parent_node_id', $root_node.node_id,
                                                      'sort_by', $root_node.sort_array,
						      'class_filter_type', 'include', 'class_filter_array', $top_menu_class_filter, 'ignore_visibility', false() ))
     $top_menu_items_count = $top_menu_items|count()
     $item_class = array()
     $level_2_items = 0
     $top_level_exclude_items = array( )
     $level_2_limit = 7
     $current_node_in_path = first_set($module_result.node_id, 0 )
     $current_node_in_path_2 = first_set($module_result.node_id, 0 )
     $cu_main_id=$current_user.contentobject.main_node_id
     $cu_main_node=fetch(content, node, hash( node_id, $cu_main_id) )
     $cu_main_node_uri=$cu_main_node.url_alias
     $cu_diggs_uri=concat( $cu_main_node.url_alias, '/diggs')
     $cu_submitted_uri=concat( $cu_main_node.url_alias, '/submitted')}

<nav class="nav">
  <div class="nav-left">
    <ul>
      <li class="nav-title">
        <h3>Menu</h3>
      </li>
      <li><a href={"/all/(dir)/1"|ezurl}>new</a></li>
      <li><a href={"/all/(dir)/0"|ezurl}>past</a></li>
      <li><a href="/c">c</a></li>
      <li><a href="/show">show</a></li>
      <li><a href="/ask">ask</a></li>
      <li><a href="/comments">comments</a></li>
      <li><a href={"/c/jobs"|ezurl}>jobs</a></li>
      <li>
        <form name="create-story" method="post" action={'content/action'|ezurl}>
          <input type="hidden" name="ContentNodeID" value="{$current_node_id}" />
          <input type="hidden" name="ContentObjectID" value="{$current_node.contentobject_id}" />
          <input type="hidden" name="NodeID" value="{$current_node_id}" />
          {if $current_node.node_id|eq( 828 )}
            <input type="hidden" name="ClassID" value="31" />
          {else}
            <input type="hidden" name="ClassID" value="47" />
          {/if}
          <input type="submit" name="NewButton" value="Submit" id="btn-submit" style="display: none;" />
          <a style="display: none;"
            href="{if $current_node.depth|lt(2)}https://hackernews.portfolio.se7enx.com/submit{else}https://hackernews.portfolio.se7enx.com/c#select-a-category-first{/if}"
            role="submit" class="dropdown-link" {if $pagedata.is_edit}onclick="return false;"
              {else}onclick="{if and( $current_node.node_id|ne( 687 ), $current_node.class_identifier|eq('category'), $current_node.node_id|ne(707), $current_node.depth|gt(2))}event.preventDefault();document.getElementById('btn-submit').click();{else}window.location.href = 'https://hackernews.portfolio.se7enx.com/c#select-a-category-first';{/if}"
            {/if}></a>
        </form>
        <a {if eq( $ui_context, 'browse' )} href=
          {concat("content/browse/", $item.node_id)|ezurl} 
        {else}
            href="{if $current_node.depth|lt(2)}https://hackernews.portfolio.se7enx.com/submit{else}https://hackernews.portfolio.se7enx.com/c#select-a-category-first{/if}"
            {if and( is_set( $item.data_map.open_in_new_window ), $item.data_map.open_in_new_window.data_int )}
              target="_blank" {/if} {/if} {if $pagedata.is_edit} onclick="return false;" {else}
              onclick="{if and( $current_node.node_id|ne( 687 ), $current_node.class_identifier|eq('category'), $current_node.node_id|ne(707), $current_node.depth|gt(2))}event.preventDefault();document.getElementById('btn-submit').click();{else}window.location.href = 'https://hackernews.portfolio.se7enx.com/c#select-a-category-first';{/if}"
              {/if} title="{$item.data_map.location.data_text|wash}" {if $item_class}class="dropdown-link dropdown-folder"
            {/if} rel={$item.url_alias|ezurl}>
            submit
          </a>
        </li>
      </ul>
      {* <ul>
        <li><a href={"/all/(dir)/1"|ezurl}>new</a></li>
        <li><a href={"/all/(dir)/0"|ezurl}>past</a></li>
        <li><a href="/c">c</a></li>
        <li><a href="/show">show</a></li>
        <li><a href="/ask">ask</a></li>
        <li><a href="/comments">comments</a></li>
        <li><a href={"/c/jobs"|ezurl}>jobs</a></li>
        <li><a href={"/all/(dir)/1"|ezurl}>new</a></li>
        <li><a href={"/all/(dir)/0"|ezurl}>past</a></li>
        <li><a href="/c">c</a></li>
        <li><a href="/show">show</a></li>
        <li><a href="/ask">ask</a></li>
        <li><a href="/comments">comments</a></li>
        <li><a href={"/c/jobs"|ezurl}>jobs</a></li>
        <li><a href={"/all/(dir)/1"|ezurl}>new</a></li>
        <li><a href={"/all/(dir)/0"|ezurl}>past</a></li>
        <li><a href="/c">c</a></li>
        <li><a href="/show">show</a></li>
        <li><a href="/ask">ask</a></li>
        <li><a href="/comments">comments</a></li>
        <li><a href={"/c/jobs"|ezurl}>jobs</a></li>
      </ul> *}
      {include uri='design:page_footer.tpl'}
    </div>
    <ul class="nav-right">
      <li>
        <button type="button" class="dark-mode-btn" aria-pressed="false">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="currentColor"
            class="icon-sun">
            <path
              d="M12 18C8.68629 18 6 15.3137 6 12C6 8.68629 8.68629 6 12 6C15.3137 6 18 8.68629 18 12C18 15.3137 15.3137 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16ZM11 1H13V4H11V1ZM11 20H13V23H11V20ZM3.51472 4.92893L4.92893 3.51472L7.05025 5.63604L5.63604 7.05025L3.51472 4.92893ZM16.9497 18.364L18.364 16.9497L20.4853 19.0711L19.0711 20.4853L16.9497 18.364ZM19.0711 3.51472L20.4853 4.92893L18.364 7.05025L16.9497 5.63604L19.0711 3.51472ZM5.63604 16.9497L7.05025 18.364L4.92893 20.4853L3.51472 19.0711L5.63604 16.9497ZM23 11V13H20V11H23ZM4 11V13H1V11H4Z">
            </path>
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20"
            class="icon-moon">
            <path
              d="M11.3807 2.01886C9.91573 3.38768 9 5.3369 9 7.49999C9 11.6421 12.3579 15 16.5 15C18.6631 15 20.6123 14.0843 21.9811 12.6193C21.6613 17.8537 17.3149 22 12 22C6.47715 22 2 17.5228 2 12C2 6.68514 6.14629 2.33869 11.3807 2.01886Z">
            </path>
          </svg>
        </button>
      </li>
      {if $current_user.is_logged_in|not}
        <li><a href="/user/login">login</a></li>
      {else}
        <li>
          <a href={$current_user.contentobject.main_node.url_alias|ezurl}>{$current_user.login}</a>
        </li>
        <li>
          <a href="/user/logout">logout</a>
        </li>
      {/if}
    </ul>
  </nav>


  {undef $level_2_items $root_node $top_menu_items $item_class $top_menu_items_count $current_node_in_path $current_node_in_path_2}

  {* Top menu content: END *}