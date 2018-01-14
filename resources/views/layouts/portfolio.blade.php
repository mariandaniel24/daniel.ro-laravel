<div class="container-fluid standard">
	<br><br><br><br>
	<h1 class="text-center">PORTFOLIO</h1>
	<br><br><br><br><br><br>

	<div class="row justify-content-center">


@foreach($portfolio_data as $project) 
		<div data-izimodal-open="#modal-{{$project->id}}" class="col-xs-12 col-sm-5 col-md-5 col-lg-3 spacing">

			<div class="project-box shadow-1">

				<div class="project-heading shadow-6">
					<h1>{{ $project->title }}</h1>

					<hr>
					<p>{{ $project->short_description }}</p>
				</div><!-- /.project-heading -->



				<div class="project-content">
					<img src="https://i.imgur.com/ZFTDvq3.png" class="img-responsive project-img"></img>
				</div><!-- /.project-content -->

			</div><!-- /.project-box -->

		</div><!-- /.col-xs-8 col-sm-6 col-md-6 col-lg-3 project-animation -->
@endforeach




	</div><!-- /.row -->


</div><!-- /.container -->
