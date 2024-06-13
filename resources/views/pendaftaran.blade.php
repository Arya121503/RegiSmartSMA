@extends('layouts.authapp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4">
                <div class="p-5 rounded-3 custom-table-bg">
                    <div class="mb-3 text-center">
                        <h4 class="portal-login-title text-dark">Welcome to RegiSmartSMA</h4>
                        <p class="text-dark">Select an option to proceed:</p>
                    </div>
                    <hr>
                    <div class="d-grid mb-3">
                        <a href="{{ route('login') }}"
                            class="btn d-flex align-items-center justify-content-center custom-btn">
                            <i class="bi bi-box-arrow-in-right me-2"></i>
                            {{ __('Login') }}
                        </a>
                    </div>
                    <div class="d-grid">
                        <a href="{{ route('register') }}"
                            class="btn d-flex align-items-center justify-content-center custom-btn">
                            <i class="bi bi-box-arrow-in-right me-2"></i>
                            {{ __('Register') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
