@extends('layouts.app')
@section('content')
<div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('images/slider-bg.png');">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12">
            <div class="text-contant">
               <h2>
                  <span class="center"><span class="icon"><img src="{{ $iconUrl ?? asset('images/icon-logo.png') }}" alt="#" /></span></span>
                  <a href="" class="typewrite" data-period="2000" data-type='[ "Welcome to Lifecare Hospital, Rajkot", "24x7 Multi-Speciality Healthcare", "Advanced Medical Care in Saurashtra" ]'>
                  <span class="wrap"></span>
                  </a>
               </h2>
            </div>
         </div>
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</div>
<!-- end section -->
<div id="time-table" class="time-table-section">
   <div class="container">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="row">
            <div class="service-time one" style="background:#2895f1;">
               <span class="info-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></span>
               <h3>24x7 Emergency Care</h3>
               <p>Round-the-clock emergency and trauma care center on 150 Feet Ring Road, Rajkot. Advanced cardiac ICU ambulance always ready.</p>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="row">
            <div class="service-time middle" style="background:#0071d1;">
               <span class="info-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
               <h3>Working Hours</h3>
               <div class="time-table-section">
                  <ul>
                     <li><span class="left">Monday - Saturday</span><span class="right">8.00 AM – 9.00 PM</span></li>
                     <li><span class="left">Sunday (OPD)</span><span class="right">9.00 AM – 1.00 PM</span></li>
                     <li><span class="left">Emergency & Trauma</span><span class="right">24 Hours Open</span></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="row">
            <div class="service-time three" style="background:#0060b1;">
               <span class="info-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></span>
               <h3>Specialist OPD Clinics</h3>
               <p>Daily consultations with senior super-specialists across Cardiology, Orthopedics, Pediatrics, Surgery, and Neurology.</p>
            </div>
         </div>
      </div>
   </div>
</div>
<div id="about" class="section wow fadeIn">
   <div class="container">
      <div class="heading">
         <span class="icon-logo"><img src="{{ $iconUrl ?? asset('images/icon-logo.png') }}" alt="#"></span>
         <h2>The Specialist Clinic</h2>
      </div>
      <!-- end title -->
      <div class="row">
         <div class="col-md-6">
            <div class="message-box">
               <h4>Welcome to Lifecare</h4>
               <h2>Multi-Speciality Healthcare in Rajkot</h2>
               <p class="lead">Lifecare Super Speciality Hospital is committed to providing world-class medical treatments, state-of-the-art diagnostic facilities, and compassionate patient care right in the heart of Rajkot, Gujarat.</p>
               <p>Equipped with advanced modular operation theatres, comprehensive cardiac catheterization lab, multi-bed modern ICUs, and 24x7 emergency and trauma services, our experienced medical team delivers excellence in every treatment.</p>
               <a href="{{ url('/about') }}" class="btn btn-light btn-radius btn-brd grd1 effect-1">Read More</a>
            </div>
            <!-- end messagebox -->
         </div>
         <!-- end col -->
         <div class="col-md-6">
            <div class="post-media wow fadeIn">
               <img src="images/about_03.jpg" alt="" class="img-responsive">
               <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
            </div>
            <!-- end media -->
         </div>
         <!-- end col -->
      </div>
      <!-- end row -->
      <hr class="hr1">
      <div class="row">
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/clinic_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/clinic_01.jpg" alt="" class="img-responsive">
               </div>
               <h3>Digital Control Center</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/clinic_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/clinic_02.jpg" alt="" class="img-responsive">
               </div>
               <h3>Hygienic Operating Room</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/clinic_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/clinic_03.jpg" alt="" class="img-responsive">
               </div>
               <h3>Specialist Physicians</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/clinic_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/clinic_01.jpg" alt="" class="img-responsive">
               </div>
               <h3>Digital Control Center</h3>
            </div>
            <!-- end service -->
         </div>
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</div>
<div id="service" class="services wow fadeIn">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
             <div class="inner-services">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon1.png" alt="#" /></span>
                      <h4>PREMIUM FACILITIES</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing.</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon2.png" alt="#" /></span>
                      <h4>LARGE LABORATORY</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing.</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon3.png" alt="#" /></span>
                      <h4>DETAILED SPECIALIST</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing.</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon4.png" alt="#" /></span>
                      <h4>CHILDREN CARE CENTER</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing.</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon5.png" alt="#" /></span>
                      <h4>FINE INFRASTRUCTURE</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing.</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon6.png" alt="#" /></span>
                      <h4>ANYTIME BLOOD BANK</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing.</p>
                   </div>
                </div>
             </div>
          </div>
          @livewire('appointmentform')
       </div>
    </div>
 </div>
 <!-- end section -->

<!-- doctor -->

<div id="doctors" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;" data-scroll-id="doctors" tabindex="-1">
  <div class="container">

   <div class="heading">
         <span class="icon-logo"><img src="{{ $iconUrl ?? asset('images/icon-logo.png') }}" alt="#"></span>
         <h2>The Specialist Clinic</h2>
      </       <div class="row dev-list text-center">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
              <div class="widget clearfix">
                  <img src="{{ asset('images/doctor_01.jpg') }}" alt="" class="img-responsive img-rounded">
                  <div class="widget-title">
                      <h3>Dr. Rajesh Mehta</h3>
                      <small>Chief Cardiologist (MBBS, MD)</small>
                  </div>
                  <p>15+ years of clinical excellence in interventional cardiology, complex angioplasties, and emergency cardiac care in Rajkot.</p>
                  <div class="footer-social">
                      <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                      <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                      <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                  </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
              <div class="widget clearfix">
                  <img src="{{ asset('images/doctor_02.jpg') }}" alt="" class="img-responsive img-rounded">
                  <div class="widget-title">
                      <h3>Dr. Hetal Patel</h3>
                      <small>Senior Gynecologist (MBBS, MS)</small>
                  </div>
                  <p>Renowned specialist in high-risk pregnancy, normal delivery, laparoscopic gynecology, and comprehensive women wellness in Saurashtra.</p>
                  <div class="footer-social">
                      <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                      <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                      <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                  </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn">
              <div class="widget clearfix">
                  <img src="{{ asset('images/doctor_03.jpg') }}" alt="" class="img-responsive img-rounded">
                  <div class="widget-title">
                      <h3>Dr. Jayesh Dave</h3>
                      <small>Orthopedic Surgeon (MBBS, MS)</small>
                  </div>
                  <p>Expert in total knee replacement, arthroscopy, trauma fracture management, and advanced spine surgeries with over 14 years experience.</p>
                  <div class="footer-social">
                      <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                      <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                      <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                  </div>
              </div>
          </div>et -->
          </div><!-- end col -->

      </div><!-- end row -->
  </div><!-- end container -->
</div>

{{-- <div id="price" class="section pr wow fadeIn" style="background-image:url('images/price-bg.png');">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="tab-content">
               <div class="tab-pane active fade in" id="tab1">
                  <div class="row text-center">
                     <div class="col-md-4">
                        <div class="pricing-table">
                           <div class="pricing-table-header">
                              <h2>Shared Hosting</h2>
                              <h3>$85/month</h3>
                           </div>
                           <div class="pricing-table-features">
                              <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                              <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                              <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                              <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                              <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                           </div>
                           <div class="pricing-table-sign-up">
                              <a href="#contact" data-scroll="" class="btn btn-dark btn-radius btn-brd">Order Now</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="pricing-table pricing-table-highlighted">
                           <div class="pricing-table-header grd1">
                              <h2>WordPress Hosting</h2>
                              <h3>$59/year</h3>
                           </div>
                           <div class="pricing-table-space"></div>
                           <div class="pricing-table-text">
                              <p>This is a perfect choice for small businesses and startups.</p>
                           </div>
                           <div class="pricing-table-features">
                              <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                              <p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
                              <p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
                              <p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
                              <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                           </div>
                           <div class="pricing-table-sign-up">
                              <a href="#contact" data-scroll="" class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="pricing-table">
                           <div class="pricing-table-header">
                              <h2>Reseller Hosting</h2>
                              <h3>$85/one-time</h3>
                           </div>
                           <div class="pricing-table-features">
                              <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                              <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                              <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                              <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                              <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                           </div>
                           <div class="pricing-table-sign-up">
                              <a href="#contact" data-scroll="" class="btn btn-dark btn-radius btn-brd">Order Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end row -->
               </div>
               <!-- end pane -->
               <div class="tab-pane fade" id="tab2">
                  <div class="row text-center">
                     <div class="col-md-6">
                        <div class="pricing-table">
                           <div class="pricing-table-header">
                              <h2>Dedicated Server</h2>
                              <h3>$85/month</h3>
                           </div>
                           <div class="pricing-table-space"></div>
                           <div class="pricing-table-features">
                              <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                              <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                              <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                              <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                              <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                           </div>
                           <div class="pricing-table-sign-up">
                              <a href="#contact" data-scroll="" class="btn btn-dark btn-radius btn-brd">Order Now</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="pricing-table pricing-table-highlighted">
                           <div class="pricing-table-header grd1">
                              <h2>VPS Server</h2>
                              <h3>$59/month</h3>
                           </div>
                           <div class="pricing-table-space"></div>
                           <div class="pricing-table-text">
                              <p>This is a perfect choice for small businesses and startups.</p>
                           </div>
                           <div class="pricing-table-features">
                              <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                              <p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
                              <p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
                              <p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
                              <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                           </div>
                           <div class="pricing-table-sign-up">
                              <a href="#contact" data-scroll="" class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end row -->
               </div>
               <!-- end pane -->
            </div>
            <!-- end content -->
         </div>
         <!-- end col -->
      </div>
   </div>
</div>

<!-- end doctor section --> --}}

<div id="testimonials" class="section wb wow fadeIn">
   <div class="container">
      <div class="heading">
         <span class="icon-logo"><img src="{{ $iconUrl ?? asset('images/icon-logo.png') }}" alt="#"></span>
         <h2>Testimonials</h2>
      </div>
      <!-- end title -->
      <div class="row">
         <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="testimonial clearfix">
               <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> Immediate Cardiac Care Saved My Life!</h3>
                  <p class="lead">The emergency cardiac team at Lifecare Hospital Rajkot diagnosed my blockage and performed angioplasty within the golden hour. Truly grateful to Dr. Rajesh Mehta and the staff.</p>
               </div>
               <div class="testi-meta">
                  <img src="{{ asset('images/testi_01.png') }}" alt="" class="img-responsive alignleft">
                  <h4>Ramesh Kothari <small>- Business Owner, Rajkot</small></h4>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
            <div class="testimonial clearfix">
               <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> Painless Knee Surgery & Quick Recovery</h3>
                  <p class="lead">Had severe knee arthritis for 5 years. Dr. Jayesh Dave performed total knee replacement surgery. Now I am walking comfortably without any support. Exceptional care!</p>
               </div>
               <div class="testi-meta">
                  <img src="{{ asset('images/testi_02.png') }}" alt="" class="img-responsive alignleft">
                  <h4>Dharmesh Vora <small>- Advocate, Rajkot</small></h4>
               </div>
            </div>
         </div>
      </div>
      <hr class="invis">
      <div class="row">
         <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
            <div class="testimonial clearfix">
               <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> Wonderful Maternity & NICU Facility!</h3>
                  <p class="lead">Dr. Hetal Patel and the nursing team were supportive and caring throughout my delivery. The hospital rooms are clean, modern, and hygienic. Best maternity care in Rajkot.</p>
               </div>
               <div class="testi-meta">
                  <img src="{{ asset('images/testi_03.png') }}" alt="" class="img-responsive alignleft">
                  <h4>Pooja Doshi <small>- Professor, Saurashtra University</small></h4>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
            <div class="testimonial clearfix">
               <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> Transparent Billing & 24x7 Support!</h3>
                  <p class="lead">From admission to discharge, the administrative process was seamless and cashless TPA insurance claim was approved smoothly. Transparent billing and genuine medical advice.</p>
               </div>
               <div class="testi-meta">
                  <img src="{{ asset('images/testi_01.png') }}" alt="" class="img-responsive alignleft">
                  <h4>Kishorebhai Parmar <small>- Mavdi, Rajkot</small></h4>
               </div>
            </div>
         </div>
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</div>
<!-- end section -->
@livewire('contactus')

@endsection
