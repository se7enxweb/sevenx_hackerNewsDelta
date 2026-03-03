{let search=false()}
{section show=$use_template_search}
    {set page_limit=10}
    {set search=fetch(content,search,
        hash(text,$search_text,
            section_id,$search_section_id,
            subtree_array,$search_subtree_array,
            sort_by,array('modified',false()),
            offset,$view_parameters.offset,
            limit,$page_limit))}
    {set search_result=$search['SearchResult']}
    {set search_count=$search['SearchCount']}
    {set stop_word_array=$search['StopWordArray']}
    {set search_data=$search}
{/section}

<div class="border-box">
    <div class="border-tl">
        <div class="border-tr">
            <div class="border-tc"></div>
        </div>
    </div>
    <div class="border-ml">
        <div class="border-mr">
            <div class="border-mc float-break">

                <div class="content-search">
                    <div class="attribute-header">
                        <h2 class="section-title" style="margin-bottom: 0;">
                            {"Search"|i18n("design/ezwebin/content/search")}
                        </h2>
                        {let adv_url=concat('/content/advancedsearch/',$search_text|count_chars()|gt(0)|choose('',concat('?SearchText=',$search_text|urlencode)))|ezurl}
                        <p class="section-description">
                            {"For more options try the %1Advanced search%2"|i18n("design/ezwebin/content/search","The parameters are link start and end tags.",array(concat("<a class=\"link\" href=",$adv_url,">"),"</a>"))}
                        </p>
                        {/let}
                    </div>

                    <form action={"/content/search/"|ezurl} method="get">
                        <div class="btn-group">
                            <input type="text" id="search" name="SearchText" class="form-control"
                                value="{$search_text|wash}" />
                            <input class="btn" name="SearchButton" type="submit"
                                value="{'Search'|i18n('design/ezwebin/content/search')}">
                        </div>

                        {section show=$stop_word_array}
                            <p class="section-description">
                                {"The following words were excluded from the search:"|i18n("design/ezwebin/content/search")}:
                                {section name=StopWord loop=$stop_word_array}
                                    {$StopWord:item.word|wash}
                                    {delimiter}, {/delimiter}
                                {/section}
                            </p>
                        {/section}

                        {switch name=Sw match=$search_count}
                        {case match=0}
                        <div class="warning">
                            <p class="section-description">
                                {'No results were found when searching for "%1".'|i18n("design/ezwebin/content/search",,array($search_text|wash))}
                            </p>
                        </div>
                        <p class="section-description">{'Search tips'|i18n('design/ezwebin/content/search')}</p>
                        <ul class="list-bullet">
                            <li>{'Check spelling of keywords.'|i18n('design/ezwebin/content/search')}</li>
                            <li>{'Try changing some keywords (eg, "car" instead of "cars").'|i18n('design/ezwebin/content/search')}
                            </li>
                            <li>{'Try searching with less specific keywords.'|i18n('design/ezwebin/content/search')}
                            </li>
                            <li>{'Reduce number of keywords to get more results.'|i18n('design/ezwebin/content/search')}
                            </li>
                        </ul>
                        {/case}
                        {case}
                        <p class="section-description">
                            {'Search for "%1" returned %2 matches'|i18n("design/ezwebin/content/search",,array($search_text|wash,$search_count))}
                        </p>
                        {/case}
                        {/switch}

                        {section name=SearchResult loop=$search_result show=$search_result sequence=array(bglight,bgdark)}
                            {node_view_gui view=line sequence=$:sequence use_url_translation=$use_url_translation content_node=$:item}
                        {/section}

                        {include name=Navigator
                            uri='design:navigator/google.tpl'
                            page_uri='/content/search'
                            page_uri_suffix=concat('?SearchText=',$search_text|urlencode,$search_timestamp|gt(0)|choose('',concat('&SearchTimestamp=',$search_timestamp)))
                            item_count=$search_count
                            view_parameters=$view_parameters
                            item_limit=$page_limit}
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="border-bl">
        <div class="border-br">
            <div class="border-bc"></div>
        </div>
    </div>
</div>

{/let}