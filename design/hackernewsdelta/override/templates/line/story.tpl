{* Story - Line view *}
{def $total_count=fetch( 'contextual', 'collected_digg_info_count_list', hash( 'object_attribute_id', $node.data_map.diggs.id ) )
     $total_diggs=$total_count[0]
     $currentUserID=fetch( 'user', 'current_user' ).contentobject.id
     $current_node=false()
}
{* $node.object.published}<hr>*}

<ul class="article-list">
  <li class="article-item">
    <article class="article">
      {if $index|ne( '' )}<span class="article-rank">{$index}.</span>{/if}
      {attribute_view_gui
			attribute=$node.data_map.diggs
			node=$node
			total_count=$total_count
			total_diggs=$total_diggs
			current_node=$current_node
			currentUserID=$currentUserID}
      <div>
        <h2 class="article-title">
          <a href={$node.url_alias|ezurl}>{$node.data_map.title.content|wash}</a><a
            href={$node.data_map.link.content|ezurl} class="article-source"
            style="word-wrap: anywhere;">({$node.data_map.link.content|explode('https://').1|explode('/')[0]})</a>
        </h2>
        <div class="article-meta">
          <span class="article-score">
            {if $total_diggs|gt(0)}{$total_diggs}{else}0{/if} points
          </span> by
          {def $user_submited=$node.object.author_array.0 $user_submited_username=$user_submited.login $user_submited_node=$user_submited.contentobject.main_node.url_alias}<a
            class="link article-author"
            href={$user_submited_node|ezurl}>{if $user_submited_username|ne( '' )}{$user_submited_username}{else}Removed{/if}</a>

          {def $now = currentdate()
            $diff_seconds = sub( $now, $node.object.published )
			 $hours_ago = round( div( $diff_seconds, 3600 ) )
			 $days_ago = round( div( $diff_seconds, 86400 ) )
		    }
          <span class="article-time">{if $hours_ago|lt(24)}{$hours_ago} hours{else}{$days_ago} days{/if} ago on
            {$node.object.published|datetime( 'custom', '%Y/%m/%d @ %h:%i %a' )}
          </span>
          <br>
          category:
          <a class="link" href={$node.object.main_node.parent.url_alias|ezurl}>
            {$node.object.main_node.parent.name|wash}
          </a>
          |
          <a href={concat( $node.url_alias, '#report')|ezurl} class="link">
            report
          </a>
          |
          <a href={concat( $node.url_alias, '#comments' )|ezurl} class="link">
            {$node.children|count} comments
          </a>
        </div>
      </div>
    </article>
  </li>
</ul>