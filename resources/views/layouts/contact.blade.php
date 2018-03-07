<div class="contact-box">
	<div class="section-heading">
		<h1 class="page-title contact-title text-center">@lang('contact.contact_title')</h1>
	</div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 col-lg-6 col-xl-4">
				<form id="contact-form" method="POST">
					<div class="row justify-content-center">
						<div class="col-sm-5 col-md-6 footer-bg">
							<div class="form-group">
								{{ csrf_field() }}
								<label for="name">@lang('contact.name')</label>
								<input required minlength="3" type="text" class="text-input shadow-2" name="name" value="">
								<span class="input-line"></span>
							</div>
						</div>
						<div class="col-sm-5 col-md-6 footer-bg">
							<div class="form-group">
								<label for="email">@lang('contact.email')</label>
								<input required minlength="3" type="email" class="text-input shadow-2" name="email" value="">
								<span class="input-line"></span>
							</div>
						</div>
						<div class="col-sm-10 col-md-12 footer-bg">
							<div class="form-group">
								<label for="message">@lang('contact.message')</label>
								<textarea required minlength="10" spellcheck="false" type="text" rows="7" class="text-input shadow-2" name="message"></textarea>
								<span class="input-line"></span>
							</div>
							<div class="form-group">
								<button class="primary" id="contact-submit">@lang('contact.send_message') 
								
									<div id="contact-loading-box" class="hide">
								<svg class="contact-loading-icon" width="100%" height="100%" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
									<circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
								</svg>
								</div>
															
								</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>