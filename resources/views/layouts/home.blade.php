<header class="header-standard">
	<div id="logo-header" class="logo">
		<p>Daniel.</p>
	</div>

	<div id="lang-header" class="language-box shadow-6">
			<div class="language-list">
				<a>
					  <i class="fa fa-flag" aria-hidden="true"></i>
					@lang('navbar.language_title')
				  </a>
			</div>
			
			<div class="language-dropdown-list">
				<div class="language-item-container">
					<a href="@lang('navbar.other_language_link')">
						<img class="img-responsive" src="@lang('navbar.other_language_icon')" alt="">
						@lang('navbar.other_language')
					  </a>
				</div>
			</div>
		</div>
		
	<div class="hamburger hamburger--elastic js-hamburger">
		<div class="hamburger-box">
			<div class="hamburger-inner"></div>
		</div>
	</div>


	<div class="title-box">
		<h1 class="title web unselectable">
			@lang('navbar.hi_title')
			<span class="design">@lang('navbar.design_title')</span>
			<span id="title-rotate" class="web"></span>
		</h1>
		<a href="#" target="_blank" class="round-button btn-transparent lg">@lang('navbar.cv')</a>
	</div>
	<div class="learn-more-box">
		<a data-nav="true" href="#services" class="not-navbar">@lang('navbar.scroll_down')
				<i class="fa fa-chevron-down" aria-hidden="true"></i>
		</a>
	</div>
</header>