<div class="portfolio-box">
	<div class="container-fluid standard">
		<div class="section-heading">
			<h1 class="page-title text-center">@lang('portfolio.portfolio_title')</h1>
		</div>
		<p class="text-center">@lang('portfolio.description')</p>
		<br><br><br>
		<div class="row justify-content-center">

			@foreach($portfolio_data as $project)
			<div data-izimodal-open="#body-modal-{{$project->id}}" id="button-modal-{{$project->id}}" class=" col-sm-5 col-md-5 col-lg-3 spacing">
				<div class="project-box shadow-1">
					<div class="project-heading shadow-6">
						<h1>{{ $project->title }}</h1>
						<hr>
						<p>{{ $project->short_description }}</p>
					</div>
					<div class="project-content">
						<img src="{{$project->thumbnail_url}}" class="img-responsive project-thumbnail" />
					</div>
				</div>
			</div>

			<div id="body-modal-{{$project->id}}" data-iziModal-fullscreen="true" class="body-modal">
				<div class="iziModal-header-buttons">
					<a href="javascript:void(0)" class="iziModal-button iziModal-button-close" data-izimodal-close=""></a>
					<a href="javascript:void(0)" class="iziModal-button iziModal-button-fullscreen" data-izimodal-fullscreen="" style="display: block;"></a>
				</div>
				<div class="container modal">
					<h2 class="modal-title">{{$project->title}}</h2>
					<p>{{$project->short_description}}</p>
					<div class="row">
						<div class="col-md-7 modal-images-box">
							<div class="row justify-content-center">
								<hr>
								<br> @php $i = 0 @endphp @foreach($project['images'] as $img) @if($i === 0)
								<div class="col-md-9">
									<div class="modal-main-image-box">
										<img class="img-responsive modal-main-image shadow-1" src="{{ $img['image_url'] }}">
									</div>
								</div>
								<br>
								<hr> @else
								<div class="col-md-4">
									<div class="modal-secondary-image shadow-6">
										<img class="img-responsive" src="{{ $img['image_url'] }}">
									</div>
								</div>
								@endif @php $i++ @endphp @endforeach
								<hr>
							</div>
						</div>

						<div class="col-md-4 modal-info-box">
							<div class="row">
								<div class="col-md-12">
									<h1></h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>