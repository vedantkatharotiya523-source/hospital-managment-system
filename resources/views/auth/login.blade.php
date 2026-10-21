@extends('layouts.app')

@section('content')
<div class="login-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
                <div class="login-card">
                    <div class="login-card-header text-center">
                        <div class="login-icon-badge">
                            <i class="fa fa-user-md" aria-hidden="true"></i>
                        </div>
                        <h2 class="login-title">Portal Login</h2>
                        <p class="login-subtitle">Hospital Management System</p>
                    </div>

                    <div class="login-card-body">
                        <form method="POST" action="{{ route('login') }}" class="login-form">
                            @csrf

                            <!-- Email Input -->
                            <div class="form-group mb-4">
                                <label for="email" class="form-label-custom">
                                    <i class="fa fa-envelope-o mr-1"></i> Email Address
                                </label>
                                <div class="input-group-custom">
                                    <span class="input-icon"><i class="fa fa-envelope text-muted"></i></span>
                                    <input type="email"
                                           name="email"
                                           id="email"
                                           class="form-control-custom @error('email') is-invalid-custom @enderror"
                                           value="{{ old('email') }}"
                                           placeholder="admin@hospital.com"
                                           required
                                           autofocus
                                           autocomplete="email">
                                </div>
                                @error('email')
                                    <span class="custom-invalid-feedback" role="alert">
                                        <i class="fa fa-exclamation-circle"></i> {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <!-- Password Input -->
                            <div class="form-group mb-4">
                                <label for="password" class="form-label-custom">
                                    <i class="fa fa-lock mr-1"></i> Password
                                </label>
                                <div class="input-group-custom">
                                    <span class="input-icon"><i class="fa fa-lock text-muted"></i></span>
                                    <input id="password"
                                           type="password"
                                           class="form-control-custom @error('password') is-invalid-custom @enderror"
                                           name="password"
                                           placeholder="••••••••"
                                           required
                                           autocomplete="current-password">
                                </div>
                                @error('password')
                                    <span class="custom-invalid-feedback" role="alert">
                                        <i class="fa fa-exclamation-circle"></i> {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <!-- Remember Me & Forgot Password -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input"
                                           type="checkbox"
                                           name="remember"
                                           id="remember"
                                           {{ old('remember', true) ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="remember">
                                        Remember Me
                                    </label>
                                </div>

                                @if (Route::has('password.request'))
                                    <a class="forgot-link" href="{{ route('password.request') }}">
                                        Forgot Password?
                                    </a>
                                @endif
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group mb-4">
                                <button type="submit" class="btn btn-login btn-block">
                                    <span>Log In to Dashboard</span>
                                    <i class="fa fa-arrow-right ml-2"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* In-flow Sticky Navbar Spacing */
    .login-wrapper {
        padding-top: 50px;
        padding-bottom: 70px;
        min-height: calc(85vh - 100px);
        background: linear-gradient(135deg, #f0f5fa 0%, #e8f1f8 100%);
        display: flex;
        align-items: center;
    }

    @media (max-width: 991px) {
        .login-wrapper {
            padding-top: 40px;
            padding-bottom: 50px;
        }
    }

    /* Card Box */
    .login-card {
        background: #ffffff;
        border-radius: 16px;
        box-shadow: 0 15px 35px rgba(21, 127, 218, 0.12), 0 5px 15px rgba(0, 0, 0, 0.05);
        border: 1px solid rgba(21, 127, 218, 0.15);
        overflow: hidden;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .login-card-header {
        background: linear-gradient(135deg, #157fda 0%, #0d63b0 100%);
        padding: 35px 25px 25px;
        color: #ffffff;
        position: relative;
    }

    .login-icon-badge {
        width: 65px;
        height: 65px;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(5px);
        border: 2px solid rgba(255, 255, 255, 0.35);
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 12px;
        font-size: 30px;
        color: #ffffff;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .login-title {
        color: #ffffff !important;
        font-size: 24px;
        font-weight: 700;
        margin: 0 0 6px 0;
        letter-spacing: 0.5px;
    }

    .login-subtitle {
        color: rgba(255, 255, 255, 0.85);
        font-size: 14px;
        margin: 0;
        font-weight: 400;
    }

    .login-card-body {
        padding: 35px 30px 30px;
    }

    /* Form Customization */
    .form-label-custom {
        font-weight: 600;
        font-size: 13px;
        color: #495057;
        margin-bottom: 8px;
        display: block;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .input-group-custom {
        position: relative;
        display: flex;
        align-items: center;
    }

    .input-icon {
        position: absolute;
        left: 15px;
        font-size: 16px;
        color: #8da2b5;
        z-index: 4;
        pointer-events: none;
    }

    .form-control-custom {
        width: 100% !important;
        height: 48px !important;
        padding: 8px 15px 8px 45px !important;
        font-size: 15px !important;
        border-radius: 10px !important;
        border: 1.5px solid #d9e2ec !important;
        background-color: #fafbfc !important;
        color: #333333 !important;
        box-shadow: none !important;
        transition: all 0.25s ease-in-out !important;
    }

    .form-control-custom:focus {
        background-color: #ffffff !important;
        border-color: #157fda !important;
        box-shadow: 0 0 0 4px rgba(21, 127, 218, 0.15) !important;
        outline: none !important;
    }

    .is-invalid-custom {
        border-color: #dc3545 !important;
    }

    .custom-invalid-feedback {
        display: block;
        color: #dc3545;
        font-size: 12px;
        margin-top: 6px;
        font-weight: 500;
    }

    /* Checkbox & Forgot Link */
    .custom-control-label {
        font-size: 14px;
        color: #555555;
        cursor: pointer;
        padding-top: 2px;
    }

    .forgot-link {
        font-size: 13px;
        color: #157fda;
        font-weight: 600;
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .forgot-link:hover {
        color: #0b5394;
        text-decoration: underline;
    }

    /* Submit Button */
    .btn-login {
        background: linear-gradient(135deg, #157fda 0%, #0d63b0 100%) !important;
        color: #ffffff !important;
        font-size: 16px !important;
        font-weight: 600 !important;
        height: 50px !important;
        border-radius: 10px !important;
        border: none !important;
        box-shadow: 0 6px 18px rgba(21, 127, 218, 0.35) !important;
        transition: all 0.25s ease !important;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
    }

    .btn-login:hover {
        background: linear-gradient(135deg, #126ec0 0%, #0a4f8f 100%) !important;
        box-shadow: 0 8px 22px rgba(21, 127, 218, 0.45) !important;
        transform: translateY(-1px);
        color: #ffffff !important;
    }

    /* Demo Box */
    .demo-box {
        background: #f8fafc;
        border: 1px dashed #cbd5e1;
        border-radius: 8px;
        padding: 12px 16px;
        font-size: 13px;
        color: #475569;
    }

    .demo-header {
        font-weight: 600;
        color: #0f172a;
        margin-bottom: 4px;
    }

    .demo-content code {
        background: #e2e8f0;
        color: #0f172a;
        padding: 1px 6px;
        border-radius: 4px;
        font-size: 12px;
    }
</style>
@endsection
