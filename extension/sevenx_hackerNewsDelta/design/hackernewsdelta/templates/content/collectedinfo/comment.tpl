{set-block scope=global variable=title}{'Story Votes %pollname'|i18n( 'design/ezwebin/collectedinfo/poll', , hash( '%pollname', $node.name|wash() ) )}{/set-block}

{def $total_count=fetch( 'contextual', 'collected_digg_info_count_list', hash( 'object_attribute_id', $node.data_map.diggs.id ) )
     $total_diggs=$total_count[0]
     $currentUserID=fetch( 'user', 'current_user' ).contentobject.id
     $current_node=false()
}

      <section class="section article-section">
        <div class="container">

          <!-- Article -->
          <ul class="article-list">
            <li class="article-item">
              <article class="article">
                  {attribute_view_gui attribute=$node.data_map.diggs node=$node total_count=$total_count total_diggs=$total_diggs current_node=$node currentUserID=$currentUserID}
<div>
                  <h2 class="article-title">
                    <a href={$node.url_alias|ezurl}>{$node.data_map.subject.content|wash}</a>
                    {* <a href="#" class="article-source">({$node.data_map.link.content|explode('https://').1|explode('/')[0]})</a> *}
                  </h2>
                  <div class="article-meta">
                    <span class="article-score">{if $total_diggs|gt(0)}{$total_diggs}{else}0{/if} points</span> by
                    {def $user_submited=$node.object.author_array.0 $user_submited_username=$user_submited.login $user_submited_node=$user_submited.contentobject.main_node.url_alias}<a class="linkarticle-author" href={$user_submited_node|ezurl}>{$user_submited_username}</a>

                    {def $now = currentdate()
                         $diff_seconds = sub( $now, $node.object.published )
                         $hours_ago = round( div( $diff_seconds, 3600 ) )
                         $days_ago = round( div( $diff_seconds, 86400 ) )
                    }
                    <span class="article-time">{if $hours_ago|lt(24)}{$hours_ago} hours{else}{$days_ago} days{/if} ago @ {$node.object.published|datetime( 'custom', '%Y/%m/%d %h:%i %a' )}</span>
                    <br>
                     <span class="tool">category: <a href={$node.parent.url_alias|ezurl}>{$node.parent.name|wash}</a></span>
                     | <a href={concat( $node.url_alias, '#report')|ezurl} class="link">report</a> |
                    <a href={$node.url_alias|ezurl} class="link">{$node.children|count} comments</a>
                  </div>
                </div>
              </article>
            </li>
            </ul>
        {if $error}

        {if $error_anonymous_user}
        <div class="warning">
            <h2>{'Please log in to vote on this story.'|i18n( 'design/ezwebin/collectedinfo/poll' )}</h2>
        </div>
        {/if}

        {if $error_existing_data}
        <div class="warning">
            <h2>{'You have already voted for this story.'|i18n( 'design/ezwebin/collectedinfo/poll' )}</h2>
        </div>
        {/if}

        {/if}

{*
     {section show=$node.data_map.intro.content.is_empty|not}<p>{attribute_view_gui attribute=$node.data_map.intro}</p>{/section}

     {if $node.data_map.body.content.is_empty|not}
         <div class="attribute-long">
         {attribute_view_gui attribute=$node.data_map.body}
         </div>
     {/if}

     {if eq( ezini( 'article', 'ImageInFullView', 'content.ini' ), 'enabled' )}
            {if $node.data_map.image.has_content}
                <div class="attribute-image">
                    {def $image_node=fetch(content,node,hash( node_id, $node.object.data_map.image.content[relation_list].0.node_id ) )}
                    {attribute_view_gui attribute=$node.data_map.image image_class=large href=$image_node.object.data_map.image.content[original].full_path|ezurl lightbox_class="large"}

                    {if $node.data_map.caption.has_content}
                    <div class="caption">
                        {attribute_view_gui attribute=$node.data_map.caption}
                    </div>
                    {/if}
                </div>
            {/if}
     {/if}
*}

     <div class="news-details" style="padding-top:0rem;padding-bottom:0.46rem;">
       <h3>Vote Percentages</h3>
     </div>

        {foreach $object.contentobject_attributes as $contentobject_attribute_item}
            {if $contentobject_attribute_item.contentclass_attribute.is_information_collector}
            {def  $attribute=$contentobject_attribute_item
                  $contentobject_attribute_id=cond( $attribute|get_class|eq( 'digginfocollectionattribute' ),$attribute.contentobject_attribute_id,
                                                   $attribute|get_class|eq( 'ezcontentobjectattribute' ),$attribute.id )
                  $contentobject_attribute=cond( $attribute|get_class|eq( 'digginfocollectionattribute' ),$attribute.contentobject_attribute,
                                                $attribute|get_class|eq( 'ezcontentobjectattribute' ),$attribute )
                  $total_items_count=fetch( 'contextual', 'collected_digg_info_count', hash( 'object_attribute_id', $contentobject_attribute_id ) )
                  $item_counts=fetch( 'contextual', 'collected_digg_info_count_list', hash( 'object_attribute_id', $contentobject_attribute_id  ) )}
<!--
                <h3>{$contentobject_attribute.content.name}</h3>
-->
                <table class="poll-resultlist">
                <tr>

                {foreach $contentobject_attribute.content.option_list as $option}
                    {def $item_count=0}
                    {if is_set( $item_counts[$option.id] )}
                        {set $item_count=$item_counts[$option.id]}
                    {/if}
                    <td class="poll-resultname">
                        <p>
                            {$option.value|explode('digg')|implode('vote')|upfirst}
                        </p>
                    </td>

                    {def $percentage=cond( $total_items_count|gt( 0 ), round( div( mul( $item_count, 100 ), $total_items_count ) ), 0 )
                         $tenth=cond( $total_items_count|gt( 0 ), round( div( mul( $item_count, 10 ), $total_items_count ) ), 0 )}
                    <td class="poll-resultbar">
                        <table class="poll-resultbar">
                        <tr>
                            <td class="poll-percentage">
                                <i>{$percentage}%</i>
                            </td>
                            <td class="poll-votecount">
                                {'Votes'|i18n( 'design/ezwebin/collectedinfo/poll' )}: {$item_count}
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <div class="chart-bar-edge-start">
                                <div class="chart-bar-edge-end">
                                    <div class="chart-bar-resultbox">
                                        <div class="chart-bar-resultbar chart-bar-{$percentage}-of-100 chart-bar-{$tenth}-of-10" style="width: {$percentage}%;">
                                            <div class="chart-bar-result-divider"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </td>
                        </tr>
                        </table>
                    </td>
                    {delimiter}
                </tr>
                <tr>
                    {/delimiter}
                    {undef $item_count $percentage $tenth}
                {/foreach}
                </tr>
                </table>
            {* else}
                {if and( $attribute_hide_list|contains( $contentobject_attribute_item.contentclass_attribute.identifier )|not, array( 'metadata', 'star_rating', 'enable_comments', 'image' )|contains( $contentobject_attribute_item.contentclass_attribute.identifier ) )|not}
                    <div class="attribute-short">{attribute_view_gui attribute=$contentobject_attribute_item}</div>
                {/if}
            {/if *}
	    {/if}
        {/foreach}

   	<div class="news-details" style="padding-top:1rem">
       	  {* <a href={$node.url_alias|ezurl} class="tool comments">{$node.children|count} comments</a> *}
       	  {*<a href="/web/20051201015817/http://digg.com/bnotice" class="tool">blog this</a>*}{* <span class="tool">category: <a href="/web/20051201015817/http://digg.com/science">science</a></span> *}
       	  <span class="tool">
       	  {* category: <a href={$node.parent.url_alias|ezurl}>{$node.parent.name|wash}</a></span> | *}
       	  <a href={concat("/spy/collectionlist/", $node.object.id)|ezurl} class="" style="text-decoration: underline;">{"Vote history report"}</a>
     	</div>
     
	<button class="btn btn-primary" style="margin-top: 0.8rem; margin-bottom: 0.8rem;" onclick="javascript:history.back()">Back</button>	

	{*
        <br/>

        {'%count total votes'|i18n( 'design/ezwebin/collectedinfo/poll' ,,
                                     hash( '%count', fetch( content, collected_info_count, hash( object_id, $object.id ) ) ) )}

            <div class="content-results">
                <div class="attribute-link">
                    <p><a href={$node.url_alias|ezurl}>{'Back to poll'|i18n( 'design/ezwebin/collectedinfo/poll' )}</a></p>
                </div>
            </div>*}


        </div>
    </div>
</form>


        </div>
    </div>
</div>

</div></div></div>
<div class="border-bl"><div class="border-br"><div class="border-bc"></div></div></div>
</div>