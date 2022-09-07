<!DOCTYPE html>
<html lang="en">

<head>
    @php
        $settings = Utility::settings();
        $logo = asset(Storage::url('uploads/logo/'));
        $company_logo = \App\Models\Utility::get_superadmin_logo();
        
        $setting = \App\Models\Utility::colorset();
        $color = 'theme-3';
        if (!empty($setting['color'])) {
            $color = $setting['color'];
        }
        $SITE_RTL = 'theme-3';
        if (!empty($setting['SITE_RTL'])) {
            $SITE_RTL = $setting['SITE_RTL'];
        }
        $mode_setting = \App\Models\Utility::mode_layout();
    @endphp

    <title>
        {{ Utility::getValByName('title_text') ? Utility::getValByName('title_text') : config('app.name', 'AccountGo SaaS') }}
        @yield('page-title')</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Dashboard Template Description" />
    <meta name="keywords" content="Dashboard Template" />
    <meta name="author" content="Rajodiya Infotech" />

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon" />

    {{-- TailwindCss --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body
    class="mx-auto overflow-x-hidden bg-no-repeat bg-gradient-to-b dark:from-dark-6 dark:to-dark-6 from-light-2 to-light-1">

    @include('frontend.parts.navbar')

    @yield('content')

    @include('frontend.parts.footer')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/navbar-toggler.js') }}"></script>
</body>

</html>
