
<h2 class="section-title">Tag Cloud</h2>
<p class="section-description">Navigate HND's website content by keyword / tags.</p>

<ul class="tag-cloud-list">
  {foreach $tag_cloud as $tag}
    <li class="tag-cloud-item">
      <a href={concat( "/content/keyword/", $tag['tag']|rawurlencode )|ezurl()} style="font-size: {$tag['font_size']}%" title="{$tag['count']} objects tagged with '{$tag['tag']|wash()}'" class="tag-cloud-link">
        {$tag['tag']|wash()}
      </a>
    </li>
  {/foreach}
</ul>