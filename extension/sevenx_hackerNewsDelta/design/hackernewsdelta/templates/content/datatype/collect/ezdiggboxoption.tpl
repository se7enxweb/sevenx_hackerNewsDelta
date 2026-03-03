{def $userDuggStory=dugg( $node.object.id, $currentUserID )|not}
<form method="post" action={"contextual/action"|ezurl} name="digg{$node.node_id}" id="digg{$node.node_id}">
  <input type="hidden" name="ContentNodeID" value="{$node.node_id}" />
  <input type="hidden" name="ContentObjectID" value="{$node.object.id}" />
  <input type="hidden" name="ViewMode" value="full" />
  <input type="hidden" name="collection_redirect"
    value="{if $current_node.node_id|eq( 707 )}/{else}{if $node.parent.parent.node_id|eq( 687 )}{if $userDuggStory}{$node.url_alias|ezurl('no')}{else}{$node.parent.url_alias|ezurl('no')}{/if}{else}/{/if}{/if}" />

  <ul class="article-digg">
    {if or( $currentUserID|eq( 10 ), $userDuggStory )}
      <li>
        <a onClick="{if or( $currentUserID|eq( 10 ), $userDuggStory )}document.getElementById('ActionCollectDiggInformation{$node.node_id}').click(); return false;{/if}"
          href="#" class="article-up">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
            <path d="M13 12V20H11V12H4L12 4L20 12H13Z"></path>
          </svg>
        </a>
      </li>
      <li>
        <a href={if $current_node.parent.node_id|ne( 687 )}
          {concat("/contextual/diggcollectedinfo/", $node.node_id, "/")|ezurl()} {else}
          {concat($node.url_alias, "/")|ezurl()} {/if} id="diggs0" class="article-icon circle">
        {*
                if $total_diggs|ne('')}
                    {cache-block keys=$total_diggs}{$total_diggs}


          {/cache-block}


        {else}0


        {/if} diggs
          *}
        &#9959;
      </a>
    </li>
    {else}
    <li>
      <a href={if $current_node.parent.node_id|ne( 687 )}
        {concat("/contextual/diggcollectedinfo/", $node.node_id, "/")|ezurl()} {else}
        {concat($node.url_alias, "/")|ezurl()} {/if} class="article-icon circle">
        {*
              if $total_diggs|ne('')}
                  {cache-block keys=$total_diggs}{$total_diggs}


        {/cache-block}


        {else}0


        {/if} diggs
            *}
        &#9959;
      </a>
    </li>
    <li>
      <a onClick="document.getElementsByName('ContentObjectAttribute_data_option_value_{$node.data_map.diggs.id}')[1].checked = true;document.getElementById('ActionCollectDiggInformation{$node.node_id}').click(); return false;"
        href="https://{ezsys('hostname')}/notice" class="article-down">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
          <path d="M13 12H20L12 20L4 12H11V4H13V12Z"></path>
        </svg>
      </a>
    </li>
    {/if}
  </ul>
  <div class="content-diggs" style="display:none">
    {let option_id=cond( is_set( $#collection_attributes[$attribute.id]), $#collection_attributes[$attribute.id].data_int, false() )}
    <div class="block">
      <label>{$attribute.content.name}:</label>
      {section show=$attribute.content.option_list}

        {section show=$attribute.content.option_list|count|lt( 6 )}

          {section var=Options loop=$attribute.content.option_list}
            <label>
              <input type="radio" name="ContentObjectAttribute_data_option_value_{$attribute.id}" value="{$Options.item.id}"
                {if $Options.item.id|eq( $option_id )}checked="checked" {/if} />
              {$Options.item.value|wash()}
            </label>
          {/section}

          {section-else}
            <select name="ContentObjectAttribute_data_option_value_{$attribute.id}">
              {section var=Options loop=$attribute.content.option_list}
                <option value="{$Options.item.id}" {if $Options.item.id|eq( $option_id )}selected="selected" {/if}>
                  {$Options.item.value|wash()}</option>
              {/section}
            </select>
          {/section}

          {section-else}
            {'There are no options.'|i18n( 'design/standard/content/datatype' )}
          {/section}
          {/let}
        </div>

        {if is_unset( $versionview_mode )}
          <input class="button" type="submit" id="ActionCollectDiggInformation{$node.node_id}"
            name="ActionCollectDiggInformation" value="{"Digg it"|i18n("design/ezwebin/full/poll")}" />
          <input class="button" type="submit" name="ActionCollectDiggInformation"
            value="{"UnDigg it"|i18n("design/ezwebin/full/poll")}" />
        {/if}

      </div>
    </form>