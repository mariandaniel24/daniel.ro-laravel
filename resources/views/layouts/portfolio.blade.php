<div class="portfolio-box">
	<div class="container-fluid standard">
		<div class="section-heading">
			<h2 class="page-title text-center">@lang('portfolio.portfolio_title')</h2>
		</div>
		<p class="text-center">@lang('portfolio.description')</p>
		<br>
		<br>
		<br>
		<div class="row justify-content-center">
			@foreach($portfolio_data as $project)
			<div data-izimodal-open="#body-modal-{{$project->id}}" id="button-modal-{{$project->id}}" class=" col-sm-5 col-md-5 col-lg-3 spacing">
				<div class="project-box shadow-1">
					<div class="project-heading shadow-6">
						<h4>{{ $project->title }}</h4>
						<hr>
						<p>{{ $project->short_description }}</p>
					</div>
					<div class="project-content">
						<img src="{{$project->thumbnail_url}}" class="img-responsive project-thumbnail" 
						alt="Preview image ({{ $project->id }}) of the {{ $project->website }} project." />
					</div>
				</div>
			</div>
			<div id="body-modal-{{$project->id}}" data-iziModal-fullscreen="true" class="body-modal">
				<div class="iziModal-header-buttons">
					<a href="javascript:void(0)" class="iziModal-button iziModal-button-close" data-izimodal-close=""></a>
				</div>
				<div class="container modal">
					<div class="row">
						<div class="col-md-7 modal-images-box">
							<div class="row justify-content-center">
								<hr>
								<br> @php $i = 0 
@endphp @foreach($project['images'] as $img)
 @if($i === 0)
								<div class="col-md-12">
									<div class="modal-main-image-box shadow-6"><a href="{{ $img['image_url'] }}" data-fancybox="image-group-{{$project->id}}" class="zoom-link">
									<img class="img-responsive modal-main-image shadow-1" src="{{ $img['image_url'] }}" alt="Preview image ({{ $project->id }}) of the {{ $project->website }} project.">
										</a>
									</div>
								</div>
								<br>
								<hr> @else
								<div class="col-6 col-sm-4 col-md-4">
									<div class="modal-secondary-image shadow-6">
										<a href="{{ $img['image_url'] }}" data-fancybox="image-group-{{$project->id}}" class="zoom-link">
											<img class="img-responsive" src="{{ $img['image_url'] }}"
											alt="Preview image ({{ $project->id }}) of the {{ $project->website }} project.">
										</a>
									</div>
								</div>
								@endif @php $i++ 
@endphp @endforeach
								<hr>
							</div>
							<p class="text-center">
								<i class="fa fa-search"></i> @lang('portfolio.zoom_images')</p>
						</div>
						<div class="col-md-5 align-content-sm-start">
							<div class="row">
								<div class="col-md-12">
									<div class="modal-info-box">
										<h5 class="modal-title">{{$project->title}}</h5>
										<p>{{$project->long_description}}</p>
										<a href="{{ $project->website }}" target="_blank" class="round-button md btn-primary portfolio-button">
											@lang('portfolio.visit_website')
											
										</a>
									</div>
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