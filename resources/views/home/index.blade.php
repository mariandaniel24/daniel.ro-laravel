@extends ('layout')


@section ('main')

<div id="wrapper">

	<div id="page">

		<div class="section {{  Request::path() == '/' ? 'active' : ''  }}">
			@include ('layouts.home')
		</div>

		<div class="section {{  Request::path() == 'about' ? 'active' : ''  }}">
			@include ('layouts.about')

		</div>

		<div class="section {{  Request::path() == 'portfolio' ? 'active' : ''  }}">
			@include ('layouts.portfolio')

		</div>

		<div class="section {{  Request::path() == 'contact' ? 'active' : ''  }}">
			@include ('layouts.contact')

		</div>

	</div>

</div><!-- /.wrapper -->



<div id="loading-box">
	<div class="loader">
		<svg class="loading" width="96px" height="96px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
			<circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
		</svg></div>
	</div><!-- /.loading-box -->

	@endsection