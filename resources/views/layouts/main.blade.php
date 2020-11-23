<!DOCTYPE html>
<html lang="vi">

<head>
    @yield('title')
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Music">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="author" content="kamleshyadav">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('MusicLayout/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('MusicLayout/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('MusicLayout/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('MusicLayout/js/plugins/swiper/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('MusicLayout/js/plugins/nice_select/nice-select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('MusicLayout/js/plugins/player/volume.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('MusicLayout/js/plugins/scroll/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('MusicLayout/css/style.css') }}">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('MusicLayout/images/favicon.png') }}">



</head>

<body>
    <!----Loader Start---->
    <!-- <div class="ms_loader">
        <div class="wrap">
            <img src="{{asset('MusicLayout/images/loader.gif')}}" alt="">
        </div>
    </div> -->
    @yield('loader')
    <div class="ms_main_wrapper">
        @include('partials.sidebar')
        @include('partials.header')
        @yield('content')
        @include('partials.footer')

        @include('partials.songplay')
    </div>
    <div class="ms_register_popup">
        @include('partials.login')
        @include('partials.register')
    </div>
    @include('partials.modal')

    <script type="text/javascript" src="{{ asset('MusicLayout/js/jquery.js') }}"></script>
    @yield('js')
    <script type="text/javascript" src="{{ asset('MusicLayout/js/myJS.js') }}"></script>
    <script type="text/javascript" src="{{ asset('MusicLayout/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('MusicLayout/js/plugins/swiper/js/swiper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('MusicLayout/js/plugins/player/jplayer.playlist.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('MusicLayout/js/plugins/player/jquery.jplayer.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('MusicLayout/js/plugins/player/audio-player.js') }}"></script>
    <script type="text/javascript" src="{{ asset('MusicLayout/js/plugins/player/volume.js') }}"></script>
    <script type="text/javascript" src="{{ asset('MusicLayout/js/plugins/nice_select/jquery.nice-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('MusicLayout/js/plugins/scroll/jquery.mCustomScrollbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('MusicLayout/js/custom.js') }}"></script>

    <!-- Check lỗi đăng kí -->
    <script type="text/javascript">
        @if(count($errors) > 0)
        $('#myModal').modal('show');
        @elseif(Session::has('success'))
        $('#success_signin').modal('show');
        @elseif(Session::has('message'))
        $('#err_login').modal('show');
        @elseif(Session::has('mess'))
        $('#err_update').modal('show');
        @elseif(Session::has('update'))
        $('#success_update').modal('show');
        @elseif(Session::has('errupdate'))
        $('#err_updatee').modal('show');
        @endif
    </script>
    <div class="zalo-chat-widget" data-oaid="579745863508352884" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="350" data-height="420"></div>
    <script src="{{ asset('MusicLayout/js/sdk.js') }}"></script>
</body>

</html>