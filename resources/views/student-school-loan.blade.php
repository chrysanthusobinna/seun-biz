@extends('layout')
@section('title', 'Student School Loan | SEUN LAFE MULTIBIZ')
@section('content')


<!-- Start main-content -->
<section class="page-title" style="background-image: url(/images/resource/p-3.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Student School Loan</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Services</li>
            </ul>
        </div>
    </div>
</section>
<!-- end main-content -->


<!--Start Services Details-->
<section class="services-details">
	<div class="container">
		<div class="row">

			<!--Start Services Details Content-->
			<div class="col-xl-8 col-lg-8">
				<div class="services-details__content">
					<img src="/images/resource/p-3.jpg" alt="Student School Loan" />
					<h2 class="mt-4">Empowering Education with Student School Loans</h2>
					<p><strong>SEUN LAFE MULTIBIZ</strong> is dedicated to supporting students and families with accessible <strong>Student School Loan</strong> solutions. We believe in the power of education and are committed to making quality learning opportunities available to all.</p>
					<ul>
						<li>Flexible loan options for primary, secondary, and tertiary education</li>
						<li>Support for tuition, fees, and educational materials</li>
						<li>Guidance through the application and approval process</li>
						<li>Transparent terms and responsible lending</li>
						<li>Dedicated to helping students achieve their academic goals</li>
					</ul>
					<p>Our team works closely with families and institutions to ensure a smooth, supportive experience from start to finish. Let SEUN LAFE MULTIBIZ help you invest in your future with confidence.</p>
					<p>Interested in a student loan or need more information? <a href="{{ route('contact') }}">Contact us here</a> and our team will guide you every step of the way.</p>
				</div>
			</div>
			<!--End Services Details Content-->
            
			<!--Start Services Details Sidebar-->
			<div class="col-xl-4 col-lg-4">
				<div class="service-sidebar">
					<!--Start Services Details Sidebar Single-->
					<div class="sidebar-widget service-sidebar-single">
						<div class="service-sidebar wow fadeInUp"
							data-wow-delay="0.1s" data-wow-duration="1200m">
							<div class="service-list">
							<ul>
							<li><a href="{{ route('services.general-merchandise') }}" class="{{ request()->routeIs('services.general-merchandise') ? 'current' : '' }}"><i class="fas fa-angle-right"></i><span>General Merchandise</span></a></li>
							<li><a href="{{ route('services.ticketing-reservation') }}" class="{{ request()->routeIs('services.ticketing-reservation') ? 'current' : '' }}"><i class="fas fa-angle-right"></i><span>Ticketing & Reservation</span></a></li>
							<li><a href="{{ route('services.travel-tour-services') }}" class="{{ request()->routeIs('services.travel-tour-services') ? 'current' : '' }}"><i class="fas fa-angle-right"></i><span>Travel Tour Services</span></a></li>
							<li><a href="{{ route('services.student-school-loan') }}" class="{{ request()->routeIs('services.student-school-loan') ? 'current' : '' }}"><i class="fas fa-angle-right"></i><span>Student School Loan</span></a></li>
							<li><a href="{{ route('services.hotel-reservations') }}" class="{{ request()->routeIs('services.hotel-reservations') ? 'current' : '' }}"><i class="fas fa-angle-right"></i><span>Hotel Reservations</span></a></li>
							<li><a href="{{ route('services.airport-transfers') }}" class="{{ request()->routeIs('services.airport-transfers') ? 'current' : '' }}"><i class="fas fa-angle-right"></i><span>Airport Transfers</span></a></li>
							<li><a href="{{ route('services.travel-health-insurance') }}" class="{{ request()->routeIs('services.travel-health-insurance') ? 'current' : '' }}"><i class="fas fa-angle-right"></i><span>Travel & Health Insurance</span></a></li>
							<li><a href="{{ route('services.cargo-shipping') }}" class="{{ request()->routeIs('services.cargo-shipping') ? 'current' : '' }}"><i class="fas fa-angle-right"></i><span>Cargo and Shipping</span></a></li>
							<li><a href="{{ route('services.immigration-protocol') }}" class="{{ request()->routeIs('services.immigration-protocol') ? 'current' : '' }}"><i class="fas fa-angle-right"></i><span>Immigration & Protocol</span></a></li>
							<li><a href="{{ route('services.visa-counselling-support') }}" class="{{ request()->routeIs('services.visa-counselling-support') ? 'current' : '' }}"><i class="fas fa-angle-right"></i><span>Visa Counselling Support Services</span></a></li>
							<li><a href="{{ route('services.bus-car-rent-service') }}" class="{{ request()->routeIs('services.bus-car-rent-service') ? 'current' : '' }}"><i class="fas fa-angle-right"></i><span>Bus/ Car Rent Service</span></a></li>
							<li><a href="{{ route('services.medical-health-tourism') }}" class="{{ request()->routeIs('services.medical-health-tourism') ? 'current' : '' }}"><i class="fas fa-angle-right"></i><span>Medical Health Tourism</span></a></li>
							<li><a href="{{ route('services.chartered-aircraft-service') }}" class="{{ request()->routeIs('services.chartered-aircraft-service') ? 'current' : '' }}"><i class="fas fa-angle-right"></i><span>Chartered Aircraft Service</span></a></li>
							</ul>
							</div>
						</div>
					</div>

 
 
				</div>
			</div>
			<!--End Services Details Sidebar-->


		</div>
	</div>
</section>
<!--End Services Details-->

@endsection 