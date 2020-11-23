@extends('layouts.main')

@section('title',)
<title>Bài hát yêu thích</title>
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
    <div class="ms_weekly_wrapper" data-url="{{route('song.deletelist')}}">
        <div class="ms_weekly_inner">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ms_heading">
                        <h1>Bài hát yêu thích</h1>
                    </div>
                </div>
                @if($list)
                @foreach($list as $key=> $listItem)
                <div class="col-lg-12 col-md-12 padding_right40">
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="{{$listItem['img_path']}}" alt="" class="img-fluid">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="{{asset('MusicLayout/images/svg/play.svg')}}" alt="" data-url="{{route('song.update',['id'=>$listItem['id']])}}" class="song_play set" onClick="get_only_song({{$listItem['id']}})">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="javascript:void(0)" data-url="{{route('song.update',['id'=>$listItem['id']])}}" class="song_play set" onClick="get_only_song({{$listItem['id']}})">{{$listItem['name']}}</a></h3>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">{{$listItem['time']}}</span>
                            <span class="ms_more_icon" data-other="1">
                                <img src="{{asset('MusicLayout/images/svg/more.svg')}}" alt="">
                            </span>
                        </div>
                        <ul class="more_option">
                            <li><a href="" data-id="{{$key}}" class="song_delete"><span class="opt_icon"><span class="icon icon_fav"></span></span>Xoá khỏi danh sách</a></li>
                            <li>
                                <a href="javascipt:void(0)" class="download" download="{{$listItem['song_path']}}" data-url="{{route('song.updateD',['id'=>$listItem['id']])}}">
                                    <span class="opt_icon"><span class="icon icon_dwn"></span></span>Tải xuống</a>
                            </li>
                            <li><a href="javascript:void(0)" data-url="{{route('song.update',['id'=>$listItem['id']])}}" class="song_play" onClick="get_detail_song({{$listItem['id']}})"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Thêm vào Playlist</a></li>
                            <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://localhost:8000{{$listItem['song_path']}}"><span class="opt_icon"><span class="icon icon_share"></span></span>Chia sẻ</a></li>

                        </ul>
                    </div>
                    <div class="ms_divider"></div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>

@endsection