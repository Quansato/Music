@extends('layouts.main')

@section('title',)
<title>Album</title>
@endsection

@section('content')

<div class="ms_album_single_wrapper">
    <div class="album_single_data">
        <div class="album_single_img">
            <img src="{{$album->img_path}}" alt="" class="img-fluid">
        </div>
        <div class="album_single_text">
            <h2>{{$album->name}}</h2>
            <!-- <p class="singer_name">By - Ava Cornish, Brian Hill</p> -->
            <div class="album_feature">
                <a href="#" class="album_date">{{count($albumAll)}}</a>
            </div>
            <div class="album_btn">
                <a href="#" class="ms_btn play_btn"><span class="play_all"><img src="{{asset('MusicLayout/images/svg/play_all.svg')}}" alt="">Phát tất cả</span><span class="pause_all"><img src="{{asset('MusicLayout/images/svg/pause_all.svg')}}" alt="">Pause</span></a>
                <a href="#" class="ms_btn"><span class="play_all"><img src="{{asset('MusicLayout/images/svg/add_q.svg')}}" alt="">Thêm sau</span></a>
            </div>
        </div>

    </div>
    <!----Song List---->
    <div class="album_inner_list">
        <div class="album_list_wrapper">
            <ul class="album_list_name">
                <li class="stt">#</li>
                <li>Tên bài hát</li>
                <li class="text-center name">Ca sĩ</li>
                <li class="text-center">Thời lượng</li>
                <li class="text-center">Thêm vào yêu thích</li>
                <li class="text-center">Thêm</li>
            </ul>
            @foreach($album->songs as $key=> $song)
            <ul>
                <li class="stt"><a href="javascript:void(0)" data-url="{{route('song.update',['id'=>$song->id])}}" class="song_play set" onClick="get_only_song({{$song->id}})"><span class="play_no">{{$key+1}}</span><span class="play_hover"></span></a></li>
                <li><a href="#">{{$song->name}}</a></li>
                <li class="text-center name">
                    @foreach($song->artists as $art)
                    <a href="#">{{$art->name}} </a>
                    @endforeach
                </li>
                <li class="text-center"><a href="#">{{$song->time}}</a></li>
                <li class="text-center"><a href="#" data-url="{{route('song.favourite',['id'=>$song->id])}}" class="add_favourite" data-toggle="modal"><span class="ms_icon1 ms_fav_icon"></span></a></li>
                <li class="text-center ms_more_icon"><a href="javascript:;"><span class="ms_icon1 ms_active_icon"></span></a>
                    <ul class="more_option">
                        @if(Auth::check())
                        <li><a href="#" data-url="{{route('song.favourite',['id'=>$song->id])}}" class="add_favourite" data-toggle="modal"><span class="opt_icon"><span class="icon icon_fav"></span></span>Thêm vào thư viện</a></li>
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
                </li>
            </ul>
            @endforeach
        </div>
    </div>
</div>
@endsection