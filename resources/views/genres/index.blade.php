@extends('layouts.main')

@section('title',)
<title>Thể loại</title>
@endsection
@section('loader')
<div class="ms_inner_loader">
    <div class="ms_loader">
        <div class="ms_bars">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </div>
</div>
@endsection
@section('content')

<div class="ms_content_wrapper padder_top80">
    <div class="ms_genres_wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="ms_heading">
                    <h1>Thể loại</h1>
                    <span class="veiw_all"><a href="#">Xem thêm</a></span>
                </div>
            </div>
            @foreach($genres as $key=> $gr)
            <div class="{{$key==0 && $key==1 ? 'col-lg-6' : 'col-lg-4'}}">
                <div class="ms_genres_box">
                    <img src="{{$gr->img_path}}" alt="" class="img-fluid" />
                    <div class="ms_main_overlay">
                        <div class="ms_box_overlay"></div>
                        <div class="ms_play_icon">
                            <img src="MusicLayout/images/svg/play.svg" alt="">
                        </div>
                        <div class="ovrly_text_div">
                            <span class="ovrly_text1"><a href="{{route('genres.detail',['id'=>$gr->id])}}">{{$gr->name}}</a></span>
                            <span class="ovrly_text2"><a href="#">Xem</a></span>
                        </div>
                    </div>
                    <div class="ms_box_overlay_on">
                        <div class="ovrly_text_div">
                            <span class="ovrly_text1"><a href="{{route('genres.detail',['id'=>$gr->id])}}">{{$gr->name}}</a></span>
                            <span class="ovrly_text2"><a href="#">Xem</a></span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(function() {
        $('.ms_nav_wrapper ul li a').removeClass('active');
        $('#tab4').addClass('active');
    });
</script>
@endsection