@extends ('layout') 
@section ('main')

<div id="wrapper">
	<nav class="nav-box unselectable desktop">
		<div id="logo-navbar" class="logo">
			<p>Daniel.</p>
		</div>
		<!-- /.logo -->
		<div class="hamburger hamburger--elastic js-hamburger">
			<div class="hamburger-box">
				<div class="hamburger-inner"></div>
			</div>
		</div>

		<ul id="menu">
			<li>
				<a data-nav="true" class="white active" href="#home">@lang('navbar.title.home')</a>
			</li>
			<li>
				<a data-nav="true" class="white" href="#services">@lang('navbar.title.services')</a>
			</li>
			<li>
				<a data-nav="true" class="white" href="#portfolio">@lang('navbar.title.portfolio')</a>
			</li>
			<li>
				<a data-nav="true" class="white" href="#about">@lang('navbar.title.about')</a>
			</li>

			<li>
				<a data-nav="true" class="white" href="#contact">@lang('navbar.title.contact')</a>
			</li>
		</ul>
	</nav>

	<div id="page">
		<section id="home" class="section ">
	@include ('layouts.home')
		</section>

		<section id="services" class="section white-bg">
	@include ('layouts.services')
		</section>

		<section id="portfolio" class="section">
	@include ('layouts.portfolio')
		</section>
		<section id="statistics" class="section">
	@include ('layouts.statistics')
		</section>

		<section id="about" class="section ">
	@include ('layouts.about')
		</section>

		<section id="contact" class="section ">
	@include ('layouts.contact')
		</section>

		<section id="footer" class="section ">
	@include ('layouts.footer')
		</section>



	</div>
</div>
<!-- /.wrapper -->

<div id="loading-box">
	<div class="loader">
		<svg class="loading" width="96px" height="96px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
			<circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
		</svg></div>
</div>
<!-- /.loading-box -->
@endsection