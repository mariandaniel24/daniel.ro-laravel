<div class="container standard">
	<div class="section-heading">
		<h2 class="page-title text-center">@lang('services.services_title')</h2>
	</div>
	{{--
	<div class="services-container-all shadow-6"> --}}
		<div class="row justify-content-center services-box unselectable">
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-2 ">
				<div data-tab-index="0" class="service-list-item">
					<a class="service-tab">RESPONSIVE DESIGN
					<i class="fa fa-paint-brush" aria-hidden="true"></i>
				</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-2 ">
				<div data-tab-index="1" class="service-list-item">
					<a class="service-tab">UX & UI
					<i class="fa fa-paint-brush" aria-hidden="true"></i>
				</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-2 ">
				<div data-tab-index="2" class="service-list-item tab-button-active">
					<a class="service-tab">DEVELOPMENT
					<i class="fa fa-database" aria-hidden="true"></i>					
				</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-2 ">
				<div data-tab-index="3" class="service-list-item">
					<a class="service-tab">SEO
					<i class="fa fa-line-chart" aria-hidden="true"></i>				
				</a>
				</div>
			</div>
		</div>
		<div class="owl-carousel owl-theme">
			<div id="tab0" class="tab-section">
				<div class="row justify-content-center">
					<div class="col-xs-12 col-sm-5 col-md-6 col-lg-4 ">
						<h4 class="services-title">Responsive Design</h4>
						<br>
						<div class="services-info-box">
							<p>@lang('services.responsive_paragraph1')</p>
							<p>@lang('services.responsive_paragraph2')</p>
							<p>@lang('services.responsive_paragraph3')</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 ">
						<img src="https://i.imgur.com/cbxcJBg.png" alt="" class="img-responsive">
					</div>
				</div>
			</div>

			<div id="tab1" class="tab-section">
				<div class="row justify-content-center">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 ">
						{{--  <img src="http://nevomtechnologies.com/assets/images/service/ui_ux1.png" alt="" class="img-responsive">  --}}
						<img src="https://i.imgur.com/kYuGN8C.png" alt="" class="img-responsive">
					</div>
					<div class="col-xs-12 col-md-6 col-lg-4 ">
						<h4 class="services-title">UX & UI</h4>
						<br>
						<div class="services-info-box">
							<p>@lang('services.uxui_paragraph1')</p>
							<ul>
								<li>
									<p>@lang('services.uxui_list1')</p>
								</li>
								<li>
									<p>@lang('services.uxui_list2')</p>
								</li>
								<li>
									<p>@lang('services.uxui_list3')</p>
								</li>
								<li>
									<p>@lang('services.uxui_list4')</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div id="tab2" class="tab-section tab-active">
				<div class="row justify-content-center">
					<div class="col-xs-12 col-md-6 col-lg-4 ">
						<h4 class="services-title">Development</h4>
						<br>
						<div class="services-info-box">
							<p>@lang('services.development_paragraph')</p>
							<p>@lang('services.development_paragraph2')</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 ">
						<img src="https://i.imgur.com/aqzHHxP.jpg"
						 alt="" class="img-responsive">
					</div>
				</div>
			</div>

			<div id="tab3" class="tab-section">
				<div class="row justify-content-center">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 ">
						<img src="https://i.imgur.com/5xCqk2D.png"
						 alt="Search engine optimisation service" class="img-responsive">
					</div>
					<div class="col-xs-12 col-md-6 col-lg-4 ">
						<h4 class="services-title">Search Engine Optimization</h4>
						<br>
						<p>@lang('services.seo_paragraph')</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.container -->