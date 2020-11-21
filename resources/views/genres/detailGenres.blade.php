@extends('layouts.main')

@section('title',)
<title>Genres</title>
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
    <div class="ms_rcnt_slider marger_top60">
        <div class="ms_heading">
            <h1>{{$genres->name}}</h1>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($genres->songs as $song)
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="{{$song->img_path}}" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="{{asset('MusicLayout/images/svg/more.svg')}}" alt="">
                                </div>
                                <ul class="more_option">
                                    @if(Auth::check())
                                    <li><a href="#" data-url="{{route('song.favourite',['id'=>$song->id])}}" class="add_favourite" data-toggle="modal"><span class="opt_icon"><span class="icon icon_fav"></span></span>Thêm vào yêu thích</a></li>
                                    <li>
                                        <a href="{{route('download',['file'=>$song->song_path])}}" class="download" download="{{$song->song_path}}" data-url="{{route('song.updateD',['id'=>$song->id])}}">
                                            <span class="opt_icon"><span class="icon icon_dwn"></span></span>Tải xuống</a>
                                    </li>
                                    <li><a href="javascript:void(0)" data-url="{{route('song.update',['id'=>$song->id])}}" class="song_play" onClick="get_detail_song({{$song->id}})"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Thêm vào Playlist</a></li>
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://localhost:8000{{$song->song_path}}"><span class="opt_icon"><span class="icon icon_share"></span></span>Chia sẻ</a></li>
                                    @else
                                    <li><a href="#save_modal" data-toggle="modal"><span class="opt_icon"><span class="icon icon_fav"></span></span>Thêm vào yêu thích</a></li>
                                    <li><a href="#save_modal" data-toggle="modal"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Tải xuống</a></li>
                                    <li><a href="#save_modal" data-toggle="modal"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Thêm vào Playlist</a></li>
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://localhost:8000{{$song->song_path}}"><span class="opt_icon"><span class="icon icon_share"></span></span>Chia sẻ</a></li>
                                    @endif
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="{{asset('MusicLayout/images/svg/play.svg')}}" alt="" data-url="{{route('song.update',['id'=>$song->id])}}" class="song_play set" onClick="get_only_song({{$song->id}})">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="javascript:void(0)" data-url="{{route('song.update',['id'=>$song->id])}}" class="song_play set" onClick="get_only_song({{$song->id}})">{{$song->name}}</a></h3>
                            <p></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next5 slider_nav_next"></div>
        <div class="swiper-button-prev5 slider_nav_prev"></div>
    </div>
</div>

@endsection