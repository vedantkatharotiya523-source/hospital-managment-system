@extends('layouts.app')

@section('content')
<div id="service" class="section">
    <div class="container">
        <div class="heading">
            <span class="icon-logo"><img src="{{ $iconUrl ?? asset('images/icon-logo.png') }}" alt="#"></span>
            <h2>Clinical & Super Speciality Services</h2>
            <p class="lead">Providing round-the-clock emergency, trauma, diagnostic and specialized inpatient care in Rajkot.</p>
        </div>

        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="service-cards-grid">
                    <div class="service-card-item">
                        <div class="serv">
                            <span class="icon-service"><img src="{{ asset('images/service-icon1.png') }}" alt="Surgical OTs" /></span>
                            <h4>MODERN SURGICAL OTS</h4>
                            <p>Laminar air-flow modular operation theatres for cardiac, joint replacement, and laparoscopic surgeries.</p>
                        </div>
                    </div>
                    <div class="service-card-item">
                        <div class="serv">
                            <span class="icon-service"><img src="{{ asset('images/service-icon2.png') }}" alt="Pathology" /></span>
                            <h4>AUTOMATED PATHOLOGY</h4>
                            <p>Round-the-clock NABL accredited computerized lab for fast, accurate diagnostic testing.</p>
                        </div>
                    </div>
                    <div class="service-card-item">
                        <div class="serv">
                            <span class="icon-service"><img src="{{ asset('images/service-icon3.png') }}" alt="Super Specialists" /></span>
                            <h4>SUPER SPECIALISTS</h4>
                            <p>Renowned senior doctors across Cardiology, Orthopedics, Neurology, and Pediatrics in Rajkot.</p>
                        </div>
                    </div>
                    <div class="service-card-item">
                        <div class="serv">
                            <span class="icon-service"><img src="{{ asset('images/service-icon4.png') }}" alt="NICU" /></span>
                            <h4>NICU & MOTHER CARE</h4>
                            <p>Specialized Neonatal Intensive Care Unit and maternity suites for newborn and infant care.</p>
                        </div>
                    </div>
                    <div class="service-card-item">
                        <div class="serv">
                            <span class="icon-service"><img src="{{ asset('images/service-icon5.png') }}" alt="ICU" /></span>
                            <h4>ICU & CRITICAL CARE</h4>
                            <p>Multi-bed advanced Intensive Coronary Care Unit (ICCU) monitored 24x7 by intensivists.</p>
                        </div>
                    </div>
                    <div class="service-card-item">
                        <div class="serv">
                            <span class="icon-service"><img src="{{ asset('images/service-icon6.png') }}" alt="Pharmacy" /></span>
                            <h4>24X7 PHARMACY & TRAUMA</h4>
                            <p>Fully stocked round-the-clock pharmacy, emergency ambulance, and rapid trauma center.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Active Livewire Appointment Form -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                @livewire('appointmentform')
            </div>
        </div>
    </div>
</div>
@endsection
