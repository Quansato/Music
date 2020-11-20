<!---Weekly Top 15--->
<div class="ms_weekly_wrapper">
    <div class="ms_weekly_inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="ms_heading">
                    <h1>Bảng xếp hạng</h1>
                </div>
            </div>
            @foreach($songs as $key=> $song)
            <div class="col-lg-12 col-md-12 padding_right40">
                <div class="ms_weekly_box">
                    <div class="weekly_left">
                        <span class="w_top_no">
                            {{$key+1}}
                        </span>
                        <div class="w_top_song">
                            <div class="w_tp_song_img">
                                <img src="{{$song->img_path}}" alt="" class="img-fluid">
                                <div class="ms_song_overlay">
                                </div>
                                <div class="ms_play_icon">
                                    <img src="{{asset('MusicLayout/images/svg/play.svg')}}" alt="" data-url="{{route('song.update',['id'=>$song->id])}}" class="song_play set" onClick="get_only_song({{$song->id}})">
                                </div>
                            </div>
                            <div class="w_tp_song_name">
                                <h3><a href="javascript:void(0)" data-url="{{route('song.update',['id'=>$song->id])}}" class="song_play set" onClick="get_only_song({{$song->id}})">{{$song->name}}</a></h3>
                                @foreach ($song->artists as $sa)
                                <p>{{$sa->name}}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="weekly_right">
                        <span class="w_song_time">{{$song->time}}</span>
                        <span class="ms_more_icon" data-other="1">
                            <img src="{{asset('MusicLayout/images/svg/more.svg')}}" alt="">
                        </span>
                    </div>
                    <ul class="more_option">
                        @if(Auth::check())
                        <li><a href="#" data-url="{{route('song.favourite',['id'=>$song->id])}}" class="add_favourite" data-toggle="modal"><span class="opt_icon"><span class="icon icon_fav"></span></span>Thêm vào yêu thích</a></li>
                        <li>
                            <a href="#" class="download" download="{{$song->song_path}}" data-url="{{route('song.updateD',['id'=>$song->id])}}">
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
                </div>
                <div class="ms_divider"></div>
            </div>
            @endforeach
        </div>
    </div>
</div>