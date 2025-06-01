@extends('layout')
@section('title', 'Hotel Reservations | SEUN LAFE MULTIBIZ')
@section('content')


<!-- Start main-content -->
<section class="page-title" style="background-image: url(/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Hotel Reservations</h1>
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
					<img src="/images/resource/p-4.jpg" alt="Hotel Reservations" />
					<h2 class="mt-4">Effortless Hotel Reservations for Every Journey</h2>
					<p><strong>SEUN LAFE MULTIBIZ</strong> provides seamless <strong>Hotel Reservation</strong> services for business and leisure travelers. Our expertise and strong industry partnerships ensure you get the best accommodation options at competitive rates, tailored to your needs and preferences.</p>
					<ul>
						<li>Wide selection of hotels and serviced apartments</li>
						<li>Flexible booking for individuals, families, and groups</li>
						<li>Special rates for corporate and long-term stays</li>
						<li>Personalized recommendations and booking support</li>
						<li>Transparent pricing and dedicated customer care</li>
					</ul>
					<p>We are committed to making your travel experience smooth and enjoyable, from booking to check-out. Let SEUN LAFE MULTIBIZ handle your hotel reservations, so you can focus on your journey.</p>
					<p>Ready to reserve your stay or need a custom accommodation solution? <a href="{{ route('contact') }}">Contact us here</a> and our team will assist you promptly.</p>
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