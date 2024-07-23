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
                                        <a href="index.html">
                                            <span><img src="{{asset('TZ-lg.png')}}" alt="" height="80"></span>
                                        </a>
                                    </div>
                                    <h5 class="text-muted text-uppercase py-3 font-16">Register</h5>
                                </div>

                                <form method="POST" action="{{ route('register') }}" class="mt-2">
                                    @csrf

                                    <!-- Name -->
                                    <div class="form-group mb-3">
                                        <input class="form-control" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Enter your name">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>

                                    <!-- Email Address -->
                                    <div class="form-group mb-3">
                                        <input class="form-control" id="email" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Enter your email">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <!-- Password -->
                                    <div class="form-group mb-3">
                                        <input class="form-control" id="password" type="password" name="password" required autocomplete="new-password" placeholder="Enter your password">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="form-group mb-3">
                                        <input class="form-control" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm your password">
                                        @if ($errors->has('password_confirmation'))
                                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group text-center">
                                        <button class="btn btn-success btn-block waves-effect waves-light" type="submit"> Register </button>
                                    </div>

                                    <a href="{{ route('login') }}" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Already registered?</a>
                                </form>

                                {{-- <div class="text-center mt-4">
                                    <h5 class="text-muted py-2"><b>Sign up with</b></h5>

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
                            <p class="text-white-50">Already have an account? <a href="pages-login.html" class="text-white ml-1"><b>Sign In</b></a></p>
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
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
