
<div id="sidebar">

<div class="note-temp" id="note-temp">
<p>
<strong>What's DiggClone?</strong>
DiggClone is a project from digg.one funded by 7x to create a usable redistributable copy of the digg [Sigma] engine based eZ Publish Website Demo Site Which Provides the same functionality as digg.one ready to use right out of the box.

Digg is a technology news website that employs non-hierarchical editorial control. With digg, users submit stories for review, but rather than allowing an editor to decide which stories go on the homepage, the users do. <a href="https://digg.one/about">Learn more</a>.</p>
</div>

<ul class="main-menu"><li id="main-digg"><a href="https://{ezsys( 'hostname' )}/all/(dir)/1">Digg for stories! <img src={"digg/digger.png"|ezimage()} alt="" width="40" height="40"></a></li>

<li id="main-submit"><a onclick="{if and( $current_node.node_id|ne( ezini( 'DiggSettings', 'AllNodeID', 'digg.ini' ) ), $current_node.node_id|ne( ezini( 'DiggSettings', 'CategoryNodeID', 'digg.ini' ) ), $current_node.class_identifier|eq('category'), $current_node.node_id|ne( ezini( 'DiggSettings', 'StoriesNodeID', 'digg.ini' ) ), $current_node.depth|gt(2))}document.getElementById('btn-submit').click(); return false;{else}{/if}" href="{if and( $current_node.node_id|ne( ezini( 'DiggSettings', 'AllNodeID', 'digg.ini' ) ), $current_node.node_id|ne( ezini( 'DiggSettings', 'CategoryNodeID', 'digg.ini' ) ), $current_node.class_identifier|eq('category'), $current_node.node_id|ne(285), $current_node.depth|gt(2))}https://{ezsys( 'hostname' )}/#submit{else}https://{ezsys( 'hostname' )}/c#select-a-category-first{/if}">Navigate to a category and submit new stories</a></li>

<li class="side-boxed"><div class="boxed">
<div>

{*<span>recently promoted stories:</span>*}

<span>categories for stories:</span>

{def $categories=fetch( 'content', 'list', hash( 'parent_node_id', ezini( 'DiggSettings', 'CategoryNodeID', 'digg.ini' ) ) )}
{* $categories|attribute(show,1) *}

<ul class="column-list">
          <li><a href="https://{ezsys( 'hostname' )}/c">all</a></li>

	  {foreach $categories as $category}
              <li><a href={$category.url_alias|ezurl()}>{$category.name}</a></li>
	  {/foreach}

          </ul><br style="clear: both;"></div></div></li>

{*        <li class="menu-item">
         <span id="bubble">digg&nbsp;podcast:<a href="http://web.archive.org/web/20051102024325/http://phobos.apple.com/WebObjects/MZStore.woa/wa/viewPodcast?id=76140881&amp;s=143441" id="p1">itunes</a> <a href="http://web.archive.org/web/20051102024325/http://odeo.com/channel/4565/view" id="p2">odeo</a> <a href="http://web.archive.org/web/20051102024325/http://feeds.feedburner.com/diggnation" id="p3">feed</a></span></li> *}

{*
<li><a href="https://{ezsys( 'hostname' )}/c/jshomepageedit">add digg news to your site</a></li>
<li><a href="https://{ezsys( 'hostname' )}/spy">digg spy</a></li>
*}
	<li><a href="https://{ezsys( 'hostname' )}/spy/overview">digg spy</a></li>
	<li><a href="https://{ezsys( 'hostname' )}/top-stories">Top Stories</a></li>
	<li><a href="https://{ezsys( 'hostname' )}/topusers">Top Users</a></li>
	<li><a href="https://{ezsys( 'hostname' )}/content/search">Search</a></li>
	<li><a href="https://{ezsys( 'hostname' )}/c/news">Digg News</a></li>
	<li><a href="https://{ezsys( 'hostname' )}/contact/bug-report">Report a website bug</a></li>

</ul>

<a href="https://{ezsys( 'hostname' )}/rss/feed/digg" class="rss">Front page stories in ATOM Feed <img src={"digg/rss.gif"|ezimage()} alt="RSS" width="29" height="14"></a>
</div>
