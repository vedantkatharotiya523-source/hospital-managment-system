@extends('layouts.app')

@section('content')
<div id="doctors" class="section">
    <div class="container">
        <div class="heading">
            <span class="icon-logo"><img src="{{ $iconUrl ?? asset('images/icon-logo.png') }}" alt="Doctor Icon"></span>
            <h2>Our Specialist Doctors</h2>
            <p class="lead">Distinguished Medical Specialists & Surgeons Serving Rajkot and Saurashtra with Decades of Clinical Experience.</p>
        </div>

        <div class="doctor-cards-grid">
            @php
                $dbDoctors = \App\Models\doctor::with('employ')->get();
            @endphp

            @forelse ($dbDoctors as $doc)
                @php
                    $docImg = asset('images/doctor_01.jpg');
                    if (!empty($doc->employ?->image)) {
                        if (\Illuminate\Support\Str::startsWith($doc->employ->image, ['http://', 'https://'])) {
                            $docImg = $doc->employ->image;
                        } elseif (\Illuminate\Support\Str::startsWith($doc->employ->image, 'images/')) {
                            $docImg = asset($doc->employ->image);
                        } else {
                            $docImg = asset('storage/' . $doc->employ->image);
                        }
                    }
                @endphp
                <div class="doctor-card-item">
                    <div class="modern-doc-card">
                        <div class="doc-img-wrap">
                            <img src="{{ $docImg }}" 
                                 alt="{{ $doc->employ->name ?? 'Doctor' }}" 
                                 onerror="this.src='{{ asset('images/doctor_01.jpg') }}'">
                        </div>
                        <div class="doc-body">
                            <h3 class="doc-name">{{ $doc->employ->name ?? 'Specialist Doctor' }}</h3>
                            <span class="doc-qualification">
                                <i class="fa fa-graduation-cap"></i> {{ $doc->employ->qualification ?? 'MBBS, MD' }}
                            </span>
                            <p class="doc-desc">
                                Senior consultant at LifeCare Super Speciality Hospital. Available for regular OPD consultations.
                            </p>
                            <div class="doc-actions">
                                <a href="tel:{{ $doc->employ->phone ?? '+919825012345' }}" class="btn-doc-call">
                                    <i class="fa fa-phone"></i> Call
                                </a>
                                <a href="javascript:void(0)" 
                                   class="btn-doc-book" 
                                   data-toggle="modal" 
                                   data-target="#bookOpdModal"
                                   data-doctor="{{ $doc->employ->name ?? $doc->name }}">
                                    <i class="fa fa-calendar-check-o"></i> Book OPD
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center" style="padding: 60px 0; width: 100%;">
                    <h3 class="text-muted">Doctors list is currently being updated.</h3>
                    <p>Please contact hospital reception for OPD timings and doctor schedules.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection