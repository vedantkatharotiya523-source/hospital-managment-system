@extends('layouts.app')

@section('content')
<div id="departments-page" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;" data-scroll-id="departments-page" tabindex="-1">
    <div class="container">
        <div class="heading">
            <span class="icon-logo"><img src="{{ $iconUrl ?? asset('images/icon-logo.png') }}" alt="#"></span>
            <h2>Our Hospital Departments</h2>
            <p class="lead">Explore our specialized departments equipped with state-of-the-art facilities and dedicated medical teams.</p>
        </div>

        <div class="row dev-list">
            @forelse ($departments as $department)
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="margin-bottom: 30px;">
                    <div class="widget clearfix" style="border: 1px solid #e1e8ed; border-radius: 8px; padding: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); background: #fff; height: 100%; display: flex; flex-direction: column;">
                        <div style="height: 200px; overflow: hidden; border-radius: 6px; margin-bottom: 15px; background: #f4f7f6; display: flex; align-items: center; justify-content: center;">
                            @if ($department->photo_path)
                                <img src="{{ \Illuminate\Support\Str::startsWith($department->photo_path, ['http://', 'https://']) ? $department->photo_path : asset('storage/' . $department->photo_path) }}" 
                                     alt="{{ $department->name }}" 
                                     class="img-responsive" 
                                     style="width: 100%; height: 100%; object-fit: cover;">
                            @else
                                <img src="{{ asset('images/clinic_01.jpg') }}" alt="{{ $department->name }}" class="img-responsive" style="width: 100%; height: 100%; object-fit: cover;">
                            @endif
                        </div>
                        <div class="widget-title" style="margin-bottom: 10px;">
                            <h3 style="color: #0071d1; margin-bottom: 5px;">{{ $department->name }}</h3>
                            <small style="color: #6c757d; font-weight: 600;">
                                <i class="fa fa-building-o"></i> Block: {{ $department->block?->blockname ?? 'Main Block' }}
                            </small>
                        </div>
                        <p style="color: #555; flex-grow: 1;">{{ $department->description }}</p>
                        <div style="border-top: 1px solid #eee; padding-top: 12px; margin-top: 10px; font-size: 13px; color: #333;">
                            <strong>Head of Dept:</strong> {{ $department->hod?->doctor?->employ?->name ?? 'Specialist In-Charge' }}
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center" style="padding: 50px 0;">
                    <h3 class="text-muted">No departments listed at this time.</h3>
                    <p>Please check back soon or contact us for more information.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
