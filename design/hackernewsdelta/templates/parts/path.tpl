  <!-- Path content: START -->
  {if $path_array|count|ge(2)}
    <ul class="breadcrumbs">
      {foreach $path_array as $path}
        <li class="breadcrumb-item">
          {if $path.url}
            <a href={cond(is_set($path.url_alias), $path.url_alias, $path.url)|ezurl} class="breadcrumb-link">
              {$path.text|wash}
            </a>
          {else}
            <span class="breadcrumb-text">{$path.text|wash}</span>
          {/if}
        </li>
        {delimiter}<li class="breadcrumb-item">/</li>{/delimiter}
      {/foreach}
    </ul>
  {/if}
<!-- Path content: END -->