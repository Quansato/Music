<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.main')

@section('title',)
<title>Trang chủ</title>
@endsection

@section('loader')
<div class="ms_loader">
    <div class="wrap">
        <img src="{{asset('MusicLayout/images/loader.gif')}}" alt="">
    </div>
</div>
@endsection

@section('content')


<div class="ms_content_wrapper padder_top80">

@include('home.banner')

@include('home.recentplay')

@include('home.top15')

@include('home.artistFE')

<!----Add Section Start---->
<div class="ms_advr_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="#"><img src="MusicLayout/images/adv.jpg" alt="" class="img-fluid" /></a>
            </div>
        </div>
    </div>
</div>
@include('home.newrelase')

@include('home.album')

@include('home.genres')
</div>


@endsection

@section('js')
<script>
    $(function() {
        $('.ms_nav_wrapper ul li a').removeClass('active');
        $('#tab1').addClass('active');
    });
</script>
@endsection