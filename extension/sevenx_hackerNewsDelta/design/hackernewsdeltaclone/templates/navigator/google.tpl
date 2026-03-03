{default page_uri_suffix=false()
         left_max=6
         right_max=6}
{default name=ViewParameter
         page_uri_suffix=false()
         left_max=$left_max
         right_max=$right_max}

{let page_count=int( ceil( div( $item_count,$item_limit ) ) )
      current_page=min($:page_count,
                       int( ceil( div( first_set( $view_parameters.offset, 0 ),
                                       $item_limit ) ) ) )
      item_previous=sub( mul( $:current_page, $item_limit ),
                         $item_limit )
      item_next=sum( mul( $:current_page, $item_limit ),
                     $item_limit )

      left_length=min($ViewParameter:current_page,$:left_max)
      right_length=max(min(sub($ViewParameter:page_count,$ViewParameter:current_page,1),$:right_max),0)
      view_parameter_text=""
      offset_text=eq( ezini( 'ControlSettings', 'AllowUserVariables', 'template.ini' ), 'true' )|choose( '/offset/', '/(offset)/' )}
{* Create view parameter text with the exception of offset *}
{section loop=$view_parameters}
  {section-exclude match=$:key|eq('offset')}
    {section-exclude match=$:item|eq('')}
      {set view_parameter_text=concat($:view_parameter_text,'/(',$:key,')/',$:item)}
    {/section}


    {section show=$:page_count|gt(1)}

      <nav class="pagination" aria-label="Article list pagination">
        <ul class="pagination-list">

          {* <span class="nextprev">« Previous</span> *}


          {switch match=$:item_previous|lt(0) }
          {case match=0}
          {*       	<span class="current">1</span> *}
          <li class="pagination-item previous">
            <a href={concat($page_uri,$:item_previous|gt(0)|choose('',concat($:offset_text,$:item_previous)),$:view_parameter_text,$page_uri_suffix)|ezurl}
              class="pagination-btn">
              {"Prev"|i18n("design/standard/navigator")}
            </a>
          </li>
          {/case}
          {case match=1}
          <li class="pagination-item">
            <button class="pagination-btn" disabled>Prev</button>
          </li>
          {/case}
          {/switch}

          {if $:current_page|gt($:left_max)}
            <a class="pagination-btn" href={concat($page_uri,$:view_parameter_text,$page_uri_suffix)|ezurl}>1</a>
            {if sub($:current_page,$:left_length)|gt(1)}
              ...
            {/if}
          {/if}

          {section loop=$:left_length}
            {let page_offset=sum(sub($ViewParameter:current_page,$ViewParameter:left_length),$:index)}
            <li class="pagination-item other"><a class="pagination-btn"
                href={concat($page_uri,$:page_offset|gt(0)|choose('',concat($:offset_text,mul($:page_offset,$item_limit))),$ViewParameter:view_parameter_text,$page_uri_suffix)|ezurl}>{$:page_offset|inc}</a>
            </li>
            {/let}
          {/section}

          <li class="pagination-item">
            <button class="pagination-btn active current">
              {$:current_page|inc}
            </button>
          </li>

          {* section loop=$:right_length|gt( $:page_count ) *}
          {section loop=$:right_length}
            {let page_offset=sum($ViewParameter:current_page,1,$:index)}
            <li class="pagination-item other last"><a class="pagination-btn"
                href={concat($page_uri,$:page_offset|gt(0)|choose('',concat($:offset_text,mul($:page_offset,$item_limit))),$ViewParameter:view_parameter_text,$page_uri_suffix)|ezurl}>{$:page_offset|inc}</a>
            </li>
            {/let}
          {/section}

          {if $:page_count|gt(sum($:current_page,$:right_max,1))}
            {if sum($:current_page,$:right_max,2)|lt($:page_count)}
              <li class="pagination-btn other">...</li>
            {/if}
            <li class="pagination-item other"><a class="pagination-btn"
                href={concat($page_uri,$:page_count|dec|gt(0)|choose('',concat($:offset_text,mul($:page_count|dec,$item_limit))),$:view_parameter_text,$page_uri_suffix)|ezurl}>{$:page_count}</a>
            </li>
          {/if}

          </li>

          {* switch match=and($:item_next|le( $item_count ), $:item_next|le( $item_count ) ) *}
          {switch match=and($:item_next|le( $item_count|sub(1) ) )}
          {case match=1}
          <li class="nextprev"><a class="pagination-btn"
              href={concat($page_uri,$:offset_text,$:item_next,$:view_parameter_text,$page_uri_suffix)|ezurl}>
              {* "Next"|i18n("design/standard/navigator") *}
              {* $:item_next}@{$item_count *}
              Next
            </a>
          </li>
          {/case}
          {case}
          {/case}
          {/switch}



          </div>


        {/section}

        {/let}
        {/default}
    {/default}