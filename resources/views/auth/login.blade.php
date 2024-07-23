@extends('layouts.main')
@section('content')
<body class="authentication-bg">
    <div class="account-pages pt-5 my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="account-card-box">
                        <div class="card mb-0">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <div class="my-3">
                                        <a href="{{url('/')}}">
                                            <span><img src="{{asset('TZ-lg.png')}}" alt="" height="80"></span>
                                        </a>
                                    </div>
                                    <h5 class="text-muted text-uppercase py-3 font-16">Sign In</h5>
                                </div>

                                <form method="POST" action="{{ route('login') }}" class="mt-2">
                                    @csrf

                                    <!-- Email Address -->
                                    <div class="form-group mb-3">
                                        <input class="form-control" id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Enter your email">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <!-- Password -->
                                    <div class="form-group mb-3">
                                        <input class="form-control" id="password" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>

                                    <!-- Remember Me -->
                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="remember_me" name="remember">
                                            <label class="custom-control-label" for="remember_me">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="form-group text-center">
                                        <button class="btn btn-success btn-block waves-effect waves-light" type="submit"> Log In </button>
                                    </div>

                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
                                    @endif
                                </form>

                                {{-- <div class="text-center mt-4">
                                    <h5 class="text-muted py-2"><b>Sign in with</b></h5>

                                    <div class="row">
                                        <div class="col-12">
                                            <button type="button" class="btn btn-facebook waves-effect font-14 waves-light mt-3">
                                                <i class="fab fa-facebook-f mr-1"></i> Facebook
                                            </button>

                                            <button type="button" class="btn btn-twitter waves-effect font-14 waves-light mt-3">
                                                <i class="fab fa-twitter mr-1"></i> Twitter
                                            </button>

                                            <button type="button" class="btn btn-googleplus waves-effect font-14 waves-light mt-3">
                                                <i class="fab fa-google-plus-g mr-1"></i> Google+
                                            </button>
                                        </div>
                                    </div>
                                </div> --}}

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-white-50">Don't have an account? <a href="{{route('register')}}" class="text-white ml-1"><b>Sign Up</b></a></p>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->
    <!-- Vendor js -->
    @endsection

{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
