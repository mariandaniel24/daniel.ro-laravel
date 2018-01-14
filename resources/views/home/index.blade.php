@extends ('layout')


@section ('main')


<div id="wrapper">

	<nav class="nav-box unselectable desktop">
		<button class="hamburger" type="button">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</button> 
		<div class="logo">
			<svg width="48px" height="48px" viewBox="0 0 256 259" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
				<defs>
					<linearGradient x1="100.011588%" y1="49.9905059%" x2="-6.48195737e-10%" y2="49.9905059%" id="linearGradient-1">
						<stop stop-color="#37BDA6" offset="0%"></stop>
						<stop stop-color="#8AD3B8" offset="100%"></stop>
					</linearGradient>
					<linearGradient x1="100.011588%" y1="49.9980936%" x2="-3.88862804e-09%" y2="49.9980936%" id="linearGradient-2">
						<stop stop-color="#4BB6AD" offset="50%"></stop>
						<stop stop-color="#78BBC1" offset="100%"></stop>
					</linearGradient>
					<linearGradient x1="-0.0184384384%" y1="49.9980936%" x2="100.023183%" y2="49.9980936%" id="linearGradient-3">
						<stop stop-color="#4379A7" offset="0%"></stop>
						<stop stop-color="#7CC9B8" offset="100%"></stop>
					</linearGradient>
				</defs>
				<g>
					<path d="M127.693413,36.8670659 L127.693413,110.447904 L191.54012,73.5808383 L191.54012,0 L127.693413,36.8670659 L127.693413,36.8670659 Z" opacity="0.5" fill="#13A049"></path>
					<path d="M127.693413,36.8670659 L63.8467066,0 L63.8467066,73.7341317 L127.693413,110.601198 L127.693413,36.8670659 L127.693413,36.8670659 Z" opacity="0.5" fill="#A2CC39"></path>
					<path d="M191.54012,0 L127.693413,36.8670659 L63.8467066,0 L0,36.8670659 L127.693413,110.601198 L255.31018,36.8670659 L191.54012,0 L191.54012,0 Z" opacity="0.9" fill="url(#linearGradient-1)"></path>
					<path d="M127.693413,110.601198 L0,36.8670659 L0,110.601198 L63.8467066,147.468263 L63.8467066,221.125749 L127.693413,257.992814 L191.54012,221.125749 L191.54012,147.468263 L255.31018,110.601198 L255.31018,36.8670659 L127.693413,110.601198 L127.693413,110.601198 Z" fill="url(#linearGradient-2)"></path>
					<path d="M127.693413,110.601198 L127.693413,257.992814 L191.54012,221.125749 L191.54012,147.468263 L255.31018,110.601198 L255.31018,36.8670659 L127.693413,110.601198 L127.693413,110.601198 Z" fill="url(#linearGradient-3)"></path>
					<path d="M127.693413,184.258683 L127.693413,257.992814 L191.54012,221.125749 L127.693413,184.258683 L127.693413,184.258683 Z" opacity="0.05" fill="#231F20"></path>
					<path d="M127.693413,258.146108 L127.693413,184.411976 L63.8467066,221.279042 L127.693413,258.146108 L127.693413,258.146108 Z" opacity="0.1" fill="#231F20"></path>
					<path d="M63.8467066,73.7341317 L0,110.601198 L63.8467066,147.468263 L127.693413,110.601198 L63.8467066,73.7341317 L63.8467066,73.7341317 Z" opacity="0.05" fill="#231F20"></path>
					<path d="M191.54012,73.7341317 L127.693413,110.601198 L191.54012,147.468263 L255.31018,110.601198 L191.54012,73.7341317 L191.54012,73.7341317 Z" opacity="0.05" fill="#231F20"></path>
				</g>
			</svg>
		</div><!-- /.logo -->
		
	
		<ul id="menu">

			<li>
				<a data-nav="true" href="#home">Home</a>
			</li>

			<li>
				<a data-nav="true" href="#services">Services</a>
			</li>

			<li>
				<a data-nav="true" href="#portfolio">Portfolio</a>
			</li>

			<li>
				<a data-nav="true" href="#about">About</a>
			</li>


			<li>
				<a data-nav="true" href="#contact">Contact</a>
			</li>
		</ul>
	</nav>


	<div id="page">

		<section id="home" class="section">
			@include ('layouts.home')
		</section>



		<section id="services" class="section">
			@include ('layouts.services')

		</section>



		<section id="portfolio" class="section">
			@include ('layouts.portfolio')
		</section>




		<section id="about" class="section">
			@include ('layouts.about')

		</section>


		<section id="contact" class="section">
			@include ('layouts.contact')
		</section>






	</div>

</div><!-- /.wrapper -->


<div id="loading-box">
	<div class="loader">
		<svg class="loading" width="96px" height="96px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
			<circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
		</svg></div>
	</div><!-- /.loading-box -->

	@endsection