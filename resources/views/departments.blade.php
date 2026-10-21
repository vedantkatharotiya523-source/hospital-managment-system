@extends('layouts.app')

@section('content')
<div id="departments-page" class="section">
    <div class="container">
        <div class="heading">
            <span class="icon-logo"><img src="{{ $iconUrl ?? asset('images/icon-logo.png') }}" alt="Hospital Logo"></span>
            <h2>Our Hospital Departments</h2>
            <p class="lead">Explore our specialized departments equipped with state-of-the-art facilities, modern diagnostic labs, and dedicated medical teams in Rajkot.</p>
        </div>

        <div class="department-cards-grid">
            @forelse ($departments as $department)
                @php
                    $deptImg = asset('images/clinic_01.jpg');
                    if (!empty($department->photo_path)) {
                        if (\Illuminate\Support\Str::startsWith($department->photo_path, ['http://', 'https://'])) {
                            $deptImg = $department->photo_path;
                        } elseif (\Illuminate\Support\Str::startsWith($department->photo_path, 'images/')) {
                            $deptImg = asset($department->photo_path);
                        } else {
                            $deptImg = asset('storage/' . $department->photo_path);
                        }
                    }
                @endphp
                <div class="dept-card-item">
                    <div class="modern-dept-card">
                        <div class="dept-img-wrap">
                            <img src="{{ $deptImg }}" 
                                 alt="{{ $department->name }}" 
                                 onerror="this.src='{{ asset('images/clinic_01.jpg') }}'">
                            <span class="dept-block-tag">
                                <i class="fa fa-building-o"></i> {{ $department->block?->blockname ?? 'Main Block' }}
                            </span>
                        </div>
                        <div class="dept-body">
                            <h3 class="dept-title">{{ $department->name }}</h3>
                            <p class="dept-desc">{{ $department->description }}</p>
                            <div class="dept-footer">
                                <span><i class="fa fa-user-md text-primary"></i> <strong>Head of Dept:</strong></span>
                                <span class="dept-hod-pill">
                                    {{ $department->hod?->doctor?->employ?->name ?? 'Specialist In-Charge' }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center" style="padding: 60px 0; width: 100%;">
                    <h3 class="text-muted">No departments listed at this time.</h3>
                    <p>Please check back soon or contact us for more information.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
