@extends('layouts.app')

@section('content')
<div id="doctors" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;" data-scroll-id="doctors" tabindex="-1">
    <div class="container">
        <div class="heading">
            <span class="icon-logo"><img src="{{ $iconUrl ?? asset('images/icon-logo.png') }}" alt="#"></span>
            <h2>Our Specialist Doctors</h2>
            <p class="lead">Distinguished Medical Specialists & Surgeons Serving Rajkot and Saurashtra with Decades of Experience.</p>
        </div>

        <div class="row dev-list text-center">
            @php
                $dbDoctors = \App\Models\doctor::with('employ')->get();
            @endphp

            @forelse ($dbDoctors as $doc)
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="margin-bottom: 30px;">
                    <div class="widget clearfix" style="border: 1px solid #e1e8ed; border-radius: 8px; padding: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); height: 100%;">
                        <img src="{{ asset($doc->employ->image ?? 'images/doctor_01.jpg') }}" alt="{{ $doc->employ->name ?? 'Doctor' }}" class="img-responsive img-rounded" style="height: 250px; width: 100%; object-fit: cover;">
                        <div class="widget-title" style="margin-top: 15px;">
                            <h3 style="color: #0071d1; margin-bottom: 4px;">{{ $doc->employ->name ?? 'Specialist' }}</h3>
                            <small style="color: #28a745; font-weight: bold; font-size: 13px;">{{ $doc->employ->qualification ?? 'MBBS, MD' }}</small>
                        </div>
                        <p style="color: #555; margin-top: 10px; font-size: 13px;">
                            Consultant at Lifecare Super Speciality Hospital, Rajkot. Available for daily OPD consultations and specialized treatments.
                        </p>
                        <div style="border-top: 1px solid #eee; padding-top: 10px; font-size: 12px; color: #777;">
                            <i class="fa fa-phone"></i> {{ $doc->employ->phone ?? '+91 98250 12345' }}
                        </div>
                        <div class="footer-social" style="margin-top: 12px;">
                            <a href="#" class="btn grd1"><i class="fa fa-phone"></i> Call</a>
                            <a href="{{ url('/#appointment') }}" class="btn grd1"><i class="fa fa-calendar"></i> Book OPD</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="lead">Doctors list is currently being updated. Please contact hospital reception for OPD timings.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection