@extends('layouts.landing', ['enableNavbar' => false, 'enableFooter' => false])

@push('scripts')
    @if (env('RECAPTCHA_MODULE') == 'yes')
        {!! NoCaptcha::renderJs() !!}
    @endif

    <script>
        $(document).ready(function() {
            $("#loginForm").submit(function(e) {
                $("#login_button").attr("disabled", true);
                return true;
            });
        });
    </script>
@endpush

@section('content')
    <div class="wrapper hero py-9 min-h-[100vh]">
        {{-- <!-- background ornament --> --}}
        <div class="absolute -right-28 -top-[140px] -z-10 h-[100vh]">
            <img src="{{ asset('assets/light-mode/header-ornament.svg') }}" alt="UseBash - assets"
                class="block dark:hidden h-full" />
            <img src="{{ asset('assets/dark-mode/header-ornament.svg') }}" alt="UseBash - assets"
                class="hidden h-full dark:block" />
        </div>
        {{-- Top Content --}}
        <div class="flex justify-between items-center">
            <a href="{{ config('app.url') }}">
                <img src="{{ asset('assets/logo/bash-logo-blue.svg') }}" alt="UseBash - assets"
                    class="block h-8 dark:hidden" />
                <img src="{{ asset('assets/logo/bash-logo-white.svg') }}" alt="UseBash - assets"
                    class="hidden h-8 dark:block" />
            </a>
            <select name="language" id="language"
                class="font-bold !text-navy-2 text-center rounded-lg bg-white pl-4 px-8 py-[14px] appearance-none bg-chevronDownNavy bg-16px bg-[center_right_32px] bg-no-repeat w-[112px] cursor-pointer"
                onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                @foreach (App\Models\Utility::languages() as $language)
                    <option @if ($lang == $language) selected @endif
                        value="{{ route('customer.login.lang', $language) }}">{{ Str::upper($language) }}</option>
                @endforeach
            </select>
        </div>

        <form method="POST" action="{{ route('register') }}" class="flex justify-center pt-13" id="loginForm">
            @csrf
            <div
                class="w-full form-placeholder p-13 bg-light-1 dark:bg-dark-3 rounded-xl shadow-formShadow md:min-w-465 md:w-max">
                <div class="dark:text-subtleGrey-5 text-[28px] text-dark-1 font-bold mb-9">
                    {{ __('Register') }}
                </div>
                <div class="flex flex-col gap-5">
                    {{-- Full Name --}}
                    <div class="flex flex-col gap-3">
                        <label class="block">
                            <span class="font-normal text-dark-2 dark:text-subtleGrey-5">{{ __('Full Name') }}</span>
                        </label>
                        <input type="text"
                            class="block w-full px-5 py-4 font-semibold rounded-lg text-dark-1 dark:text-light-1 bg-subtleGrey-1 dark:bg-dark-4 focus:outline-none focus:ring-2 focus:ring-subtleBlue-1 dark:focus:ring-dark-4 focus:bg-light-1 dark:focus:bg-dark-5 placeholder-subtleGrey-2 dark:placeholder-subtleGrey-4 @error('name') outline outline-red-600 @enderror"
                            placeholder="{{ __('Enter Your Full Name') }}" id="name" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus />
                        @error('name')
                            <span class="-mt-2 text-red-600 text-xs">
                                *{{ $message }}
                            </span>
                        @enderror
                    </div>
                    {{-- Email --}}
                    <div class="flex flex-col gap-3">
                        <label class="block">
                            <span class="font-normal text-dark-2 dark:text-subtleGrey-5">{{ __('Email') }}</span>
                        </label>
                        <input type="email"
                            class="block w-full px-5 py-4 font-semibold rounded-lg text-dark-1 dark:text-light-1 bg-subtleGrey-1 dark:bg-dark-4 focus:outline-none focus:ring-2 focus:ring-subtleBlue-1 dark:focus:ring-dark-4 focus:bg-light-1 dark:focus:bg-dark-5 placeholder-subtleGrey-2 dark:placeholder-subtleGrey-4 @error('email') outline outline-red-600 @enderror"
                            placeholder="{{ __('Email@example.org') }}" name="email" value="{{ old('email') }}"
                            required autocomplete="email" autofocus />
                        @error('email')
                            <span class="-mt-2 text-red-600 text-xs">
                                *{{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="flex gap-3 justify-between items-center w-[465px]">
                        {{-- Password --}}
                        <div class="flex flex-col gap-3">
                            <label class="block">
                                <span class="font-normal text-dark-2 dark:text-subtleGrey-5">
                                    {{ __('Password') }}
                                </span>
                            </label>
                            <input
                                class="block w-full px-5 py-4 font-semibold rounded-lg text-dark-1 dark:text-light-1 bg-subtleGrey-1 dark:bg-dark-4 focus:outline-none focus:ring-2 focus:ring-subtleBlue-1 dark:focus:ring-dark-4 focus:bg-light-1 dark:focus:bg-dark-5 placeholder-subtleGrey-2 dark:placeholder-subtleGrey-4 @error('password') outline outline-red-600 @enderror"
                                placeholder="{{ __('Your Password') }}" id="password" type="password" name="password"
                                required autocomplete="new-password" data-indicator="pwindicator" />
                            @error('password')
                                <span class="-mt-2 text-red-600 text-xs">
                                    *{{ $message }}
                                </span>
                            @enderror
                        </div>
                        {{-- Password Confirmation --}}
                        <div class="flex flex-col gap-3">
                            <label class="block">
                                <span class="font-normal text-dark-2 dark:text-subtleGrey-5">
                                    {{ __('Password Confirmation') }}
                                </span>
                            </label>
                            <input
                                class="block w-full px-5 py-4 font-semibold rounded-lg text-dark-1 dark:text-light-1 bg-subtleGrey-1 dark:bg-dark-4 focus:outline-none focus:ring-2 focus:ring-subtleBlue-1 dark:focus:ring-dark-4 focus:bg-light-1 dark:focus:bg-dark-5 placeholder-subtleGrey-2 dark:placeholder-subtleGrey-4 @error('password_confirmation') outline outline-red-600 @enderror"
                                placeholder="{{ __('Your Confirm Password') }}" id="password_confirmation" type="password"
                                name="password_confirmation" required autocomplete="new-password"
                                data-indicator="pwindicator" />
                            @error('password_confirmation')
                                <span class="-mt-2 text-red-600 text-xs">
                                    *{{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{-- Captcha --}}
                    @if (env('RECAPTCHA_MODULE') == 'yes')
                        <div class="form-group mb-3">
                            {!! NoCaptcha::display() !!}
                            @error('g-recaptcha-response')
                                <span class="text-xs text-red-600" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    @endif

                    <button type="submit"
                        class="block py-4 text-base font-bold text-center rounded-lg bg-subtleGreen text-light-1 focus:ring-2"
                        id="login_button">
                        {{ __('Register') }}
                    </button>
                    <div class="text-center text-sm dark:text-subtleGrey-4 text-dark-1">
                        {{ __('Already have an account?') }}
                        <a href="{{ route('login') }}" class="text-subtleBlue-1">
                            {{ __('Sign In') }}
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
