<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   @php
    $settings = \App\Models\Settings::pluck('value', 'key')->toArray();
    $logoUrl = isset($settings['logo']) && $settings['logo'] && file_exists(public_path('storage/' . $settings['logo']))
        ? asset('storage/' . $settings['logo'])
        : (isset($settings['logo']) && file_exists(public_path('images/' . $settings['logo']))
            ? asset('images/' . $settings['logo'])
            : asset('images/logo.png'));

    $iconUrl = isset($settings['icon']) && $settings['icon'] && file_exists(public_path('storage/' . $settings['icon']))
        ? asset('storage/' . $settings['icon'])
        : (isset($settings['icon']) && file_exists(public_path('images/' . $settings['icon']))
            ? asset('images/' . $settings['icon'])
            : asset('images/icon-logo.png'));
@endphp
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ $iconUrl }}" type="image/x-icon" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="{{ asset('css/colors.css') }}">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="{{ asset('css/versions.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- Modern Theme Overrides -->
    <link rel="stylesheet" href="{{ asset('css/modern-theme.css') }}">
    
    <!-- Modernizer for Portfolio -->
    <script src="{{ asset('js/modernizer.js') }}"></script>

    @livewireStyles
</head>

<body class="clinic_version">

    <!-- LOADER -->
    <div id="preloader">
        <a href="{{ url('/') }}"><img class="preloader" src="{{ asset('images/loaders/heart-loading2.gif') }}" alt=""></a>
    </div>
    <!-- END LOADER -->

    <!-- MODERN CLEAN MINIMAL HEADER -->
    <header id="site-header" class="modern-site-header">
        <div class="main-navbar-bar">
            <div class="container-fluid header-flex-container">
                <!-- Brand Logo -->
                <a class="modern-brand" href="{{ url('/') }}">
                    <img src="{{ $logoUrl }}" alt="{{ env('APP_NAME', 'LifeCare') }}" class="brand-img">
                </a>

                <!-- Mobile Toggle Button -->
                <button type="button" class="modern-nav-toggler" data-toggle="collapse" data-target="#modernNavbar" aria-expanded="false" aria-controls="modernNavbar" aria-label="Toggle navigation">
                    <span class="toggler-bar"></span>
                    <span class="toggler-bar"></span>
                    <span class="toggler-bar"></span>
                </button>

                <!-- Navigation Links -->
                <nav class="modern-nav">
                    <div class="collapse navbar-collapse" id="modernNavbar">
                        <ul class="modern-nav-list">
                            <li class="{{ request()->is('/') ? 'active' : '' }}">
                                <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
                            </li>
                            <li class="{{ request()->is('services') ? 'active' : '' }}">
                                <a href="{{ url('/services') }}">Services</a>
                            </li>
                            <li class="{{ request()->is('docters') ? 'active' : '' }}">
                                <a href="{{ url('docters') }}">Doctors</a>
                            </li>
                            <li class="{{ request()->is('departments') ? 'active' : '' }}">
                                <a href="{{ url('/departments') }}">Departments</a>
                            </li>
                            <li class="{{ request()->is('about') ? 'active' : '' }}">
                                <a href="{{ url('/about') }}">About us</a>
                            </li>
                            <li class="{{ request()->is('contact') ? 'active' : '' }}">
                                <a href="{{ url('contact') }}">Contact</a>
                            </li>
                            @auth
                                @if (auth()->user()->is_super_admin)
                                    <li>
                                        <a href="{{ route('admin_settings') }}"><i class="fa fa-cog"></i> Admin Area</a>
                                    </li>
                                @endif
                            @endauth

                            <!-- Mobile Staff Login in Drawer -->
                            <li class="visible-xs visible-sm" style="margin-top: 10px; padding: 6px 0;">
                                @auth
                                    <a href="{{ route('admin_dashboard') }}" class="btn-staff-pill" style="display: block; text-align: center; color: #fff !important;">
                                        <i class="fa fa-user-circle"></i> Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" class="btn-staff-pill" style="display: block; text-align: center; color: #fff !important;">
                                        <i class="fa fa-lock"></i> Staff Login
                                    </a>
                                @endauth
                            </li>
                        </ul>
                    </div>
                </nav>

                <!-- Right Action: Staff Login / Dashboard -->
                <div class="header-right-actions hidden-xs hidden-sm">
                    @auth
                        <a href="{{ route('admin_dashboard') }}" class="btn-staff-pill">
                            <i class="fa fa-user-circle"></i> <span>Dashboard</span>
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="btn-staff-pill">
                            <i class="fa fa-lock"></i> <span>Staff Login</span>
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </header>
    <main id="main">
        @yield('content')
    </main>
    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    <footer id="footer" class="footer-area wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 mb-4">
                    <div class="logo padding">
                        <div class="footer-logo-badge">
                            <a href="{{ url('/') }}">
                                <img src="{{ $logoUrl }}" alt="{{ env('APP_NAME') }}">
                            </a>
                        </div>
                        <p>{{ $settings["description"] ?? 'Lifecare Super Speciality Hospital is a premier healthcare institution in Rajkot, Gujarat, delivering world-class medical treatments with utmost compassion and excellence.' }}</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mb-4">
                    <div class="footer-info padding">
                        <h3>CONTACT US</h3>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $settings["address"] ?? '150 Feet Ring Road, Near KKV Hall, Rajkot, Gujarat' }}</p>
                        <p><i class="fa fa-paper-plane" aria-hidden="true"></i>{{ $settings['business_email'] ?? $settings['email'] ?? 'contact@lifecarehospitalrajkot.com' }}</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i>{{ $settings['business_phone'] ?? $settings['phone'] ?? '+91 98250 12345' }}</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mb-4">
                    @livewire('subscribe')
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright-area wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="footer-text">
                        <p>© {{ date('Y') }} <a id="tw" href="{{ url('') }}" target="_blank">{{ env('APP_NAME', 'LifeCare') }}</a> , Hospital Information System</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="social">
                        <ul class="social-links">
                            <li><a href="{{ $settings['facebook'] ?? '#' }}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ $settings['twitter'] ?? '#' }}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ $settings['linkedin'] ?? '#' }}"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="{{ $settings['youtube'] ?? '#' }}"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="{{ $settings['pinterest'] ?? '#' }}"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end copyrights -->

    <!-- Universal Book OPD Modal (Works on Any Page without Redirecting) -->
    <div class="modal fade" id="bookOpdModal" tabindex="-1" role="dialog" aria-labelledby="bookOpdModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 520px;">
            <div class="modal-content" style="border-radius: 16px; border: none; overflow: hidden; box-shadow: 0 20px 50px rgba(0,0,0,0.25);">
                <div class="modal-header" style="background: linear-gradient(135deg, #0071d1 0%, #0056a3 100%); color: #fff; padding: 18px 24px; border: none; position: relative;">
                    <h5 class="modal-title" id="bookOpdModalLabel" style="font-weight: 700; font-size: 18px; margin: 0; color: #fff; display: inline-flex; align-items: center;">
                        <i class="fa fa-calendar-check-o mr-2"></i> Book OPD Consultation
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #fff; opacity: 0.9; font-size: 26px; text-shadow: none; position: absolute; right: 20px; top: 16px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding: 24px; background: #ffffff;">
                    @livewire('appointmentform')
                </div>
            </div>
        </div>
    </div>

    @livewireScripts
    <!-- all js files -->
    <script src="{{ asset('js/all-in-one.js') }}"></script>
    <!-- all plugins -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>
        function check_active(d) {
            document.getElementById(d).addAttribute('class', 'active');
        }
    </script>
</body>

</html>
