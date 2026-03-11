<!-- Header area: START -->
<header class="header-main">
  {* include uri='design:menu/topbar.tpl' *}
  <div class="container">
    <button type="button" class="btn hamburger-btn" aria-label="Toggle navigation">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
        <path d="M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z"></path>
      </svg>
    </button>
    <a href="/" class="brand-logo">
      Hacker News <span class="text-accent">Delta</span>
    </a>

    {include uri='design:menu/dropdown.tpl'}
  </div>

</header>
<!-- Header area: END -->