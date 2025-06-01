@extends('layout')
@section('title', 'Home | SEUN LAFE MULTIBIZ')
@section('content')






<!-- Main Slider -->
<section class="main-slider">
    <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
            <ul>
                <!-- Slide 1 -->
                <li data-index="rs-1" data-transition="zoomout">
                    <!-- MAIN IMAGE -->
                    <img src="/images/main-slider/1.jpg" alt="" class="rev-slidebg">

                    <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[15,15,15,15]"
                    data-paddingright="[15,15,15,15]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text" data-height="none"
                    data-width="['750','750','750','650']"
                    data-whitespace="normal"
                    data-hoffset="['600','0','0','0']"
                    data-voffset="['-70','-70','-70','-90']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <h1><span class="color3">SEUN LAFE MULTIBIZ</span></h1>
                    </div>
                    
                    <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[15,15,15,15]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text" data-height="none"
                    data-width="['750','750','750','450']"
                    data-whitespace="normal"
                    data-hoffset="['600','0','0','0']"
                    data-voffset="['90','90','90','60']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <div class="text">Real Estate, Travel & Tours, and more.</div>
                    </div>

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[15,15,15,15]"
                    data-paddingright="[15,15,15,15]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text" data-height="none"
                    data-width="['700','750','700','450']"
                    data-whitespace="normal"
                    data-hoffset="['600','0','0','0']"
                    data-voffset="['170','185','190','160']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <div class="btn-box">
                            <a href="{{ route('about') }}" class="theme-btn btn-style-one"><span class="btn-title">Learn More</span></a>
                            <a href="{{ route('contact') }}" class="theme-btn btn-style-two"><span class="btn-title">Contact Us</span></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>


<!-- End Main Slider--><!-- About Section -->
<section class="about-section" id="about">
    <div class="auto-container">
        <div class="row">
            <div class="content-column col-xl-6 col-lg-6 col-md-12 col-sm-12 wow fadeInRight" data-wow-delay="600ms">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="sub-title">about the company</span>
                        <h2>Professionalism, Trust, and Value <span class="color3">at Every Step</span></h2>
                        <h4>Based in Abuja, Nigeria, serving clients locally and internationally.</h4>
                        <div class="text">SEUN LAFE MULTIBIZ is your trusted partner for General Merchandise, Supply & Branding, Real Estate, Travel & Tours, and more. Since 2018, we have built a reputation for reliability, innovation, and excellence, delivering outstanding value to our clients.</div>
                    </div>

                    <div class="row">
                        <div class="about-block col-lg-6 col-md-6">
                            <div class="inner">
                                <i class="icon flaticon-passport-16"></i>
                                <h6 class="title">General Merchandise<br> & Supplies</h6>
                            </div>
                        </div>
                        
                        <div class="text-block col-lg-6 col-md-6">
                            <div class="inner">
                                <div class="text">Branding, Real Estate, Travel & Tours, and more—tailored to your needs.</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="btm-box">
                        <a href="{{ route('about') }}" class="theme-btn btn-style-one"><span class="btn-title">Discover More</span></a>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInLeft">
                    <div class="row">
                        <div class="column col-lg-6 col-md-6">
                            <div class="image-box">
                                <figure class="map"><img src="/images/icons/map.png" alt=""></figure>
                                <figure class="image-1 overlay-anim wow fadeInUp"><img src="/images/resource/about-1.jpg" alt=""></figure>
                                <figure class="image-2 overlay-anim wow fadeInRight"><img src="/images/resource/about-2.jpg" alt=""></figure>
                            </div>
                        </div>
                        <div class="column col-lg-6 col-md-6">
                            <div class="image-box">
                                <figure class="image-3 overlay-anim wow fadeInLeft"><img src="/images/resource/about-3.jpg" alt=""></figure>
                                <div class="experience bounce-y">
                                    <div class="inner">
                                        <i class="icon flaticon-loyalty"></i>
                                        <div class="text"><strong>100+</strong> Successful Projects</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- End About Section -->
<!-- Why Choose Us -->
<section class="why-choose-us pt-0">
    <div class="bg bg-pattern-1"></div>

    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="sub-title">why choose us</span>
            <h2>Why SEUN LAFE MULTIBIZ?<br><span class="color3">Your Preferred Business Partner</span></h2>
        </div>

        <div class="row">
            <!-- Feature: Client-Focused -->
            <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <i class="icon flaticon-interview"></i>
                    <span class="cat">Client-Focused</span>
                    <h6 class="title">Your satisfaction is our success</h6>
                </div>
            </div>

            <!-- Feature: Reliable & Efficient -->
            <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                <div class="inner-box">
                    <i class="icon flaticon-low-cost"></i>
                    <span class="cat">Reliable & Efficient</span>
                    <h6 class="title">We deliver value — on time, every time</h6>
                </div>
            </div>

            <!-- Feature: Innovative -->
            <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                <div class="inner-box">
                    <i class="icon flaticon-loyalty"></i>
                    <span class="cat">Innovative</span>
                    <h6 class="title">Modern solutions tailored to your needs</h6>
                </div>
            </div>

            <!-- Feature: Trustworthy -->
            <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
                <div class="inner-box">
                    <i class="icon flaticon-online-support"></i>
                    <span class="cat">Trustworthy</span>
                    <h6 class="title">Built on integrity and lasting relationships</h6>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Why Choose Us -->
<!-- Training Section -->



 
<section class="services-section" id="services">
  <div class="auto-container">

    <div class="row">
      <div class="col-lg-6">
        <div class="sec-title">
          <span class="sub-title">What do we offer</span>
          <h2>Professional, Reliable <span class="color3">Business Services</span></h2>
          <div class="text">We provide trusted solutions in merchandise, branding, real estate, travel, machinery, and logistics — helping businesses grow with efficiency and excellence.</div>
        </div>
      </div>

      <!-- General Merchandise -->
      <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" onclick="window.location.href='{{ route('services.general-merchandise') }}'" style="cursor:pointer">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><a href="{{ route('services.general-merchandise') }}"><img src="/images/resource/service-1.jpg" alt=""></a></figure>
            <i class="icon fa fa-shopping-cart"></i>
            <h6 class="title">General Merchandise</h6>
          </div>
          <div class="content-box">
            <h6 class="title"><a href="{{ route('services.general-merchandise') }}">General Merchandise</a></h6>
            <div class="text">We trade and distribute a wide range of high-quality goods tailored to commercial and retail needs.</div>
            <a href="{{ route('services.general-merchandise') }}" class="read-more">More <i class="fa fa-long-arrow-right"></i></a>
          </div>
        </div>
      </div>

 
      <!-- Ticketing & Reservation -->
      <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" onclick="window.location.href='{{ route('services.ticketing-reservation') }}'" style="cursor:pointer">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="/images/resource/p-1.jpg" alt="Ticketing & Reservation"></figure>
            <i class="icon fa fa-ticket"></i>
            <h6 class="title">Ticketing & Reservation</h6>
          </div>
          <div class="content-box">
            <div class="text">Tickets for Local and International Flights</div>
          </div>
        </div>
      </div>
      <!-- Travel Tour Services -->
      <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" onclick="window.location.href='{{ route('services.travel-tour-services') }}'" style="cursor:pointer">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="/images/resource/p-2.jpg" alt="Travel Tour Services"></figure>
            <i class="icon fa fa-globe"></i>
            <h6 class="title">Travel Tour Services</h6>
          </div>
          <div class="content-box">
            <div class="text">We organize the perfect tours for meetings, incentive programs, executive retreats, family reunions and destination weddings.</div>
          </div>
        </div>
      </div>
      <!-- Student School Loan -->
      <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" onclick="window.location.href='{{ route('services.student-school-loan') }}'" style="cursor:pointer">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="/images/resource/p-3.jpg" alt="Student School Loan"></figure>
            <i class="icon fa fa-graduation-cap"></i>
            <h6 class="title">Student School Loan</h6>
          </div>
          <div class="content-box">
            <div class="text">International Student Loan.</div>
          </div>
        </div>
      </div>
      <!-- Hotel Reservations -->
      <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" onclick="window.location.href='{{ route('services.hotel-reservations') }}'" style="cursor:pointer">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="/images/resource/p-4.jpg" alt="Hotel Reservations"></figure>
            <i class="icon fa fa-bed"></i>
            <h6 class="title">Hotel Reservations</h6>
          </div>
          <div class="content-box">
            <div class="text">Hotel accommodation for you at ideal locations nationwide.</div>
          </div>
        </div>
      </div>
      <!-- Airport Transfers -->
      <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" onclick="window.location.href='{{ route('services.airport-transfers') }}'" style="cursor:pointer">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="/images/resource/p-5.jpg" alt="Airport Transfers"></figure>
            <i class="icon fa fa-car"></i>
            <h6 class="title">Airport Transfers</h6>
          </div>
          <div class="content-box">
            <div class="text">Providing chauffeur driving car readily available for your pick up and drop off at all airports</div>
          </div>
        </div>
      </div>
      <!-- Travel & Health Insurance -->
      <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" onclick="window.location.href='{{ route('services.travel-health-insurance') }}'" style="cursor:pointer">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="/images/resource/p-7.jpg" alt="Travel & Health Insurance"></figure>
            <i class="icon fa fa-heartbeat"></i>
            <h6 class="title">Travel & Health Insurance</h6>
          </div>
          <div class="content-box">
            <div class="text">Seun Lafe Multibiz finds a great deal on your travel insurance.</div>
          </div>
        </div>
      </div>
      <!-- Cargo and Shipping -->
      <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" onclick="window.location.href='{{ route('services.cargo-shipping') }}'" style="cursor:pointer">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="/images/resource/p-6.jpg" alt="Cargo and Shipping"></figure>
            <i class="icon fa fa-ship"></i>
            <h6 class="title">Cargo and Shipping</h6>
          </div>
          <div class="content-box">
            <div class="text">Entrust your parcels and cargoes into our care.</div>
          </div>
        </div>
      </div>
      <!-- Immigration & Protocol -->
      <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" onclick="window.location.href='{{ route('services.immigration-protocol') }}'" style="cursor:pointer">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="/images/resource/p-9.jpg" alt="Immigration & Protocol"></figure>
            <i class="icon fa fa-id-badge"></i>
            <h6 class="title">Immigration & Protocol</h6>
          </div>
          <div class="content-box">
            <div class="text">We are internationally recognized as a reliable Protocol and Logistics company and we represent our clients' preeminent in their respective interest.</div>
          </div>
        </div>
      </div>
      <!-- Visa Counselling Support Services -->
      <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" onclick="window.location.href='{{ route('services.visa-counselling-support') }}'" style="cursor:pointer">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="/images/resource/p-10.jpg" alt="Visa Counselling Support Services"></figure>
            <i class="icon fa fa-id-badge"></i>
            <h6 class="title">Visa Counselling Support Services</h6>
          </div>
          <div class="content-box">
            <div class="text">We are internationally recognized as a reliable Protocol and Logistics company and we represent our clients' preeminent in their respective interest.</div>
          </div>
        </div>
      </div>
      <!-- Bus/ Car Rent Service -->
      <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" onclick="window.location.href='{{ route('services.bus-car-rent-service') }}'" style="cursor:pointer">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="/images/resource/p-11.jpg" alt="Bus/ Car Rent Service"></figure>
            <i class="icon fa fa-bus"></i>
            <h6 class="title">Bus/ Car Rent Service</h6>
          </div>
          <div class="content-box">
            <div class="text">Seun Lafe Multibiz provide superior car-rental service for less. We deliver chauffeur-driven, comfortable, air-conditioned SUV car rental hire in Lagos, Nigeria at an affordable price. We beat competitors hands down with our superior service.</div>
          </div>
        </div>
      </div>
      <!-- Medical Health Tourism -->
      <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" onclick="window.location.href='{{ route('services.medical-health-tourism') }}'" style="cursor:pointer">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="/images/resource/p-13.jpg" alt="Medical Health Tourism"></figure>
            <i class="icon fa fa-medkit"></i>
            <h6 class="title">Medical Health Tourism</h6>
          </div>
          <div class="content-box">
            <div class="text">We have working relationships with major internationally recognized and globally certified hospitals and medical centres across the world that are centres of medical and health excellence</div>
          </div>
        </div>
      </div>
      <!-- Chartered Aircraft Service -->
      <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" onclick="window.location.href='{{ route('services.chartered-aircraft-service') }}'" style="cursor:pointer">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="/images/resource/p-12.jpg" alt="Chartered Aircraft Service"></figure>
            <i class="icon fa fa-plane"></i>
            <h6 class="title">Chartered Aircraft Service</h6>
          </div>
          <div class="content-box">
            <div class="text">In collaboration with our aviation technical partners across the world, we offer different ranges of charter flight services</div>
          </div>
        </div>
      </div>



    </div>
  </div>
</section>
<!-- End Services Section -->

 
 
 
<!-- End Testimonial Section -->
<!-- Contact Section -->
<section class="contact-section" id="contact">
  <div class="outer-box">
    <div class="bg bg-pattern-6"></div>
    <div class="auto-container">
      <div class="row">
        
        <!-- Title Column -->
        <div class="title-column col-lg-7 col-md-12 wow fadeInRight">
          <div class="inner-column">
            <div class="sec-title">
              <span class="sub-title">get in touch</span>
              <h2>Start a <span class="color3">Business Conversation</span></h2>
              <div class="text">
                Interested in working with SEUN LAFE MULTIBIZ? Reach out to discuss how our services in general merchandise, branding, real estate, travel, and logistics can support your goals.
              </div>
            </div>

            <ul class="list-style-two">
              <li><i class="fa fa-check-circle"></i> Tailored solutions for businesses and individuals</li>
              <li><i class="fa fa-check-circle"></i> Prompt, professional, and client-focused support</li>
              <li><i class="fa fa-check-circle"></i> Trusted by clients across Nigeria and the diaspora</li>
            </ul>

   
          </div>
        </div>

        <!-- Form Column -->
        <div class="form-column col-lg-5 col-md-12 col-sm-12">
          <div class="inner-column">
            <div class="form-outer">

              <!-- Contact Form -->
              <div class="contact-form wow fadeInLeft">
              <button class="theme-btn btn-style-three" type="submit" name="submit-form"><span class="btn-title">Contact us!</span></button>

              </div>
              <!-- End Contact Form -->

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- End Contact Section -->

@endsection 