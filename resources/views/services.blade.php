@extends('layouts.app')

@section('content')
<div id="service" class="services wow fadeIn">
    <div class="container">
       <div class="row">
           <div class="col">
            <center><h1>{{ config('app.name') }} Services</h1><hr>
            </center>
           </div>
          <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
             <div class="inner-services">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon1.png" alt="#" /></span>
                      <h4>MODERN SURGICAL OTs</h4>
                      <p>Laminar air-flow modular operation theatres for cardiac, joint, and laparoscopic surgeries.</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon2.png" alt="#" /></span>
                      <h4>AUTOMATED PATHOLOGY</h4>
                      <p>Round-the-clock NABL accredited computerized lab for fast, accurate diagnostic testing.</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon3.png" alt="#" /></span>
                      <h4>SUPER SPECIALISTS</h4>
                      <p>Renowned senior doctors across Cardiology, Orthopedics, Neurology, and Pediatrics in Rajkot.</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon4.png" alt="#" /></span>
                      <h4>NICU & MOTHER CARE</h4>
                      <p>Specialized Neonatal Intensive Care Unit and maternity suites for newborn and infant care.</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon5.png" alt="#" /></span>
                      <h4>ICU & CRITICAL CARE</h4>
                      <p>Multi-bed advanced Intensive Coronary Care Unit (ICCU) monitored 24x7 by intensivists.</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon6.png" alt="#" /></span>
                      <h4>24x7 PHARMACY & TRAUMA</h4>
                      <p>Fully stocked round-the-clock pharmacy, emergency ambulance, and rapid trauma center.</p>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
             <div class="appointment-form">
                <h3><span>+</span> Book Appointment</h3>
                <div class="form">
                   <form action="/">
                      <fieldset>
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                               <div class="form-group">
                                  <input type="text" id="name" placeholder="Your Name"  />
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                               <div class="form-group">
                                  <input type="email" placeholder="Email Address" id="email" />
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 select-section">
                            <div class="row">
                               <div class="form-group">
                                  <select class="form-control">
                                     <option>Day</option>
                                     <option>Sunday</option>
                                     <option>Monday</option>
                                  </select>
                               </div>
                               <div class="form-group">
                                  <select class="form-control">
                                     <option>Time</option>
                                     <option>AM</option>
                                     <option>PM</option>
                                  </select>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                               <div class="form-group">
                                  <select class="form-control">
                                     <option>Doctor Name</option>
                                     <option>Mr.XYZ</option>
                                     <option>Mr.ABC</option>
                                  </select>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                               <div class="form-group">
                                  <textarea rows="4" id="textarea_message" class="form-control" placeholder="Your Message..."></textarea>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                               <div class="form-group">
                                  <div class="center"><button type="submit">Submit</button></div>
                               </div>
                            </div>
                         </div>
                      </fieldset>
                   </form>
                </div>
             </div>
          </div>
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
 </div>

@endsection
