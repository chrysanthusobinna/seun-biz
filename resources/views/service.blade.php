@extends('layout')
@section('title', 'Service | SEUN LAFE MULTIBIZ')
@section('content')

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Our Services</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Our Services</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->



    <section class="services-overview-section py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <h3 class="text-center mb-5">Our Services</h3>
        <div class="row g-4">

          <!-- Service Item -->
          <div class="col-md-6">
            <div class="service-box">
              <a href="{{ route('services.general-merchandise') }}"><strong>General Merchandise</strong></a>
              <p>We trade and distribute a wide range of high-quality goods tailored to commercial and retail needs.</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="service-box">
              <a href="{{ route('services.ticketing-reservation') }}"><strong>Ticketing & Reservation</strong></a>
              <p>Tickets for Local and International Flights.</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="service-box">
              <a href="{{ route('services.travel-tour-services') }}"><strong>Travel Tour Services</strong></a>
              <p>We organize the perfect tours for meetings, retreats, family reunions, and destination weddings.</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="service-box">
              <a href="{{ route('services.student-school-loan') }}"><strong>Student School Loan</strong></a>
              <p>International Student Loan support and guidance.</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="service-box">
              <a href="{{ route('services.hotel-reservations') }}"><strong>Hotel Reservations</strong></a>
              <p>Hotel accommodation at ideal locations nationwide.</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="service-box">
              <a href="{{ route('services.airport-transfers') }}"><strong>Airport Transfers</strong></a>
              <p>Chauffeur-driven cars for pick-up and drop-off at all airports.</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="service-box">
              <a href="{{ route('services.travel-health-insurance') }}"><strong>Travel & Health Insurance</strong></a>
              <p>Reliable travel insurance options with great value.</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="service-box">
              <a href="{{ route('services.cargo-shipping') }}"><strong>Cargo and Shipping</strong></a>
              <p>Secure handling of your parcels and cargo.</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="service-box">
              <a href="{{ route('services.immigration-protocol') }}"><strong>Immigration & Protocol</strong></a>
              <p>Trusted logistics and protocol representation worldwide.</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="service-box">
              <a href="{{ route('services.visa-counselling-support') }}"><strong>Visa Counselling Support Services</strong></a>
              <p>Expert visa support and immigration guidance services.</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="service-box">
              <a href="{{ route('services.bus-car-rent-service') }}"><strong>Bus/ Car Rent Service</strong></a>
              <p>Comfortable chauffeur-driven SUV rentals at affordable prices.</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="service-box">
              <a href="{{ route('services.medical-health-tourism') }}"><strong>Medical Health Tourism</strong></a>
              <p>Connections to globally certified hospitals and medical centers.</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="service-box">
              <a href="{{ route('services.chartered-aircraft-service') }}"><strong>Chartered Aircraft Service</strong></a>
              <p>Wide range of charter flight options via global aviation partners.</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- Custom Styling -->
<style>
.services-overview-section {
  background-color: #f8f9fa;
}
.service-box {
  background-color: #ffffff;
  border: 1px solid rgba(0, 0, 0, 0.08);
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06), 0 6px 20px rgba(0, 0, 0, 0.05);
  padding: 20px;
  border-radius: 8px;
  transition: all 0.3s ease-in-out;
  height: 100%;
}
.service-box:hover {
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
  transform: translateY(-5px);
}
.service-box a {
  color: #0d6efd;
  text-decoration: none;
  font-size: 1.1rem;
}
.service-box p {
  margin-top: 5px;
  color: #444;
  font-size: 0.95rem;
}
</style>


<!-- Custom Styling -->
<style>
.services-overview-section {
  background-color: #f8f9fa;
}
.service-box {
  background-color: #ffffff;
  border: 1px solid rgba(0, 0, 0, 0.08);
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06), 0 6px 20px rgba(0, 0, 0, 0.05);
  padding: 20px;
  border-radius: 8px;
  transition: all 0.3s ease-in-out;
  height: 100%;
}
.service-box:hover {
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
  transform: translateY(-5px);
}
.service-box a {
  color: #0d6efd;
  text-decoration: none;
  font-size: 1.1rem;
}
.service-box p {
  margin-top: 5px;
  color: #444;
  font-size: 0.95rem;
}
</style>




 

@endsection 