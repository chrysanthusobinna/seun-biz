@extends('layout')
@section('title', 'Contact | SEUN LAFE MULTIBIZ')
@section('content')
 

{!! NoCaptcha::renderJs() !!}


<!-- Start main-content -->
<section class="page-title" style="background-image: url(images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Contact Us</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>
<!-- end main-content -->

<!--Contact Details Start-->
<section class="contact-details">
	<div class="container ">
		<div class="row">
			<div class="col-xl-6 col-lg-6">

				@if(session('success'))
					<div class="alert alert-success">{{ session('success') }}</div>
				@endif
				@if($errors->any())
					<div class="alert alert-danger">
						<ul class="mb-0">
							@foreach($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

		
				<div class="sec-title">
					<span class="sub-title">Send us an email</span>
					<h2>We'd love to hear from you!</h2>
					<div class="text">Whether you're interested in our services, have a business inquiry, or just want to learn more about what we do — we're here and ready to help.</div>
				</div>
				<!-- Contact Form -->
				<form id="contact_form" name="contact_form" class="" action="{{ route('contact.send') }}" method="post">
                    @csrf
					<div class="row">
						<div class="col-sm-6">
							<div class="mb-3">
								<input name="form_name" class="form-control" type="text" placeholder="Your Name" required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="mb-3">
								<input name="form_email" class="form-control required email" type="email" placeholder="Your Email" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="mb-3">
								<input name="form_subject" class="form-control required" type="text" placeholder="Subject">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="mb-3">
								<input name="form_phone" class="form-control" type="text" placeholder="Phone">
							</div>
						</div>
					</div>
					<div class="mb-3">
						<textarea name="form_message" class="form-control required" rows="7" placeholder="Your Message" required></textarea>
					</div>
					<div class="mb-3">
    {!! app('captcha')->display() !!}
</div>
<div class="mb-3">
    <input name="form_botcheck" class="form-control" type="hidden" value="" />
    <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Send Message</span></button>
    <button type="reset" class="theme-btn btn-style-one bg-theme-color5"><span class="btn-title">Reset</span></button>
</div>
				</form>
				<!-- Contact Form Validation-->
			</div>
			<div class="col-xl-6 col-lg-6">
				<div class="contact-details__right">
					<div class="sec-title">
						<span class="sub-title">Need any help?</span>
						<h2>Get in touch with us</h2>
						<div class="text">We respond to all inquiries within 24 hours. For business collaborations or custom solutions, please reach out directly via phone or email.</div>
					</div>
					<ul class="list-unstyled contact-details__info">
						<li>
							<div class="icon">
								<span class="lnr-icon-phone-plus"></span>
							</div>
							<div class="text">
								<h6>Call Us</h6>
								<a href="tel:{{ env('COMPANY_PHONE') }}">{{ env('COMPANY_PHONE') }}</a><br>
								<small>Mon-Sat, 9:00 AM – 6:00 PM</small>
							</div>
						</li>
						<li>
							<div class="icon">
								<span class="lnr-icon-envelope1"></span>
							</div>
							<div class="text">
								<h6>Email</h6>
								<a href="mailto:{{ env('COMPANY_EMAIL') }}">{{ env('COMPANY_EMAIL') }}</a>
							</div>
						</li>
						<li>
							<div class="icon">
								<span class="lnr-icon-location"></span>
							</div>
							<div class="text">
								<h6>Office Address</h6>
								<span>{{ env('COMPANY_ADDRESS') }}</span>
							</div>
						</li>
						<li>
							<div class="icon">
								<span class="lnr-icon-link"></span>
							</div>
							<div class="text">
								<h6>Instagram</h6>
								<a href="{{ env('COMPANY_INSTAGRAM') }}" target="_blank">{{ env('COMPANY_INSTAGRAM') }}</a>
							</div>
						</li>
					</ul>
					<div class="business-inquiries mt-4">
						<h5>Business Inquiries & Collaborations</h5>
						<p>Looking to partner with us or request a service? Please reach out via phone or email and a member of our team will get back to you shortly.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Contact Details End-->

<!-- Divider: Google Map -->
<section>
	<div class="container-fluid p-0">
		<div class="row">
			<!-- Google Map HTML Codes -->
			<iframe src="https://www.google.com/maps?q=Block+2+Flat+1,+Annaba+Close,+Zone+6,+Wuse,+Abuja,+Nigeria&output=embed" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
	</div>
</section>



@endsection