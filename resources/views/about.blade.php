@extends('layouts.app')

@section('content')
<div id="about" class="section wow fadeIn">
    <div class="container">
      <div class="heading">
         <span class="icon-logo"><img src="{{ $iconUrl ?? asset('images/icon-logo.png') }}" alt="#"></span>
         <h2>About Lifecare Hospital, Rajkot</h2>
         <p class="lead">Serving Saurashtra with Trusted Healthcare, Compassion, and Clinical Excellence Since Inception.</p>
      </div>

      <div class="row">
         <div class="col-md-6">
            <div class="message-box">
               <h4>Our Heritage & Commitment</h4>
               <h2>Premier Healthcare in Gujarat</h2>
               <p class="lead">Lifecare Super Speciality Hospital was founded in Rajkot with a singular vision: to make advanced super-speciality medical care accessible, affordable, and ethical for every family across Saurashtra and Gujarat.</p>
               <p>Located conveniently on 150 Feet Ring Road near Kalawad Road in Rajkot, our multi-bed hospital combines cutting-edge diagnostic technology with a distinguished panel of experienced doctors, compassionate nurses, and dedicated healthcare professionals.</p>
               <p>From complex cardiac interventions and robotic-assisted joint surgeries to 24/7 neonatal intensive care and emergency trauma management, we uphold the highest international clinical standards while preserving the warmth and personal touch of community-centered care.</p>
               <div style="margin-top: 25px;">
                  <ul style="list-style: none; padding-left: 0; line-height: 2;">
                     <li><i class="fa fa-check-circle text-primary" style="color: #0071d1; margin-right: 8px;"></i> <strong>24/7 Cardiac & Trauma Care</strong> with advanced ICU ambulances.</li>
                     <li><i class="fa fa-check-circle text-primary" style="color: #0071d1; margin-right: 8px;"></i> <strong>Modular Operation Theatres</strong> with laminar air flow & HEPA filters.</li>
                     <li><i class="fa fa-check-circle text-primary" style="color: #0071d1; margin-right: 8px;"></i> <strong>NABL Accredited Diagnostics</strong> & fully computerized automated lab.</li>
                     <li><i class="fa fa-check-circle text-primary" style="color: #0071d1; margin-right: 8px;"></i> <strong>Cashless Mediclaim TPA</strong> tie-ups with all major Indian insurers.</li>
                  </ul>
               </div>
            </div>
         </div>

         <div class="col-md-6">
            <div class="post-media wow fadeIn" style="margin-top: 20px;">
               <img src="{{ asset('images/about_03.jpg') }}" alt="Lifecare Hospital Rajkot" class="img-responsive img-rounded shadow">
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
