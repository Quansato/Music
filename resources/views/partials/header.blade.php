<!---Header--->
<div class="ms_header">
    <div class="ms_top_left">
        <div class="ms_top_search">
            <form action="/search" method="get">
                <input type="text" class="form-control" name="key" placeholder="Nhập tên bài hát,ca sĩ...">
                <button type="submit" class="fa fa-search search_icon"></button>
            </form>
        </div>
        <div class="ms_top_trend">
            <span>
                <a href="#" class="ms_color">Ca khúc HOT :</a>
            </span>
             <span class="top_marquee">
                 @foreach($songT1 as $key=> $song)
                 
                @if($key==1)
                <a href="javascript:void(0)" data-url="{{route('song.update',['id'=>$song->id])}}" class="song_play set" onClick="get_only_song({{$song->id}})">{{$song->name}}</a>
                @else
                <a href="javascript:void(0)" data-url="{{route('song.update',['id'=>$song->id])}}" class="song_play set" onClick="get_only_song({{$song->id}})">{{$song->name}},</a>
                @endif
                 @endforeach
            </span>
        </div>
    </div>
    <div class="ms_top_right">
        <div class="ms_top_lang">
            <span class="dev">Ngôn ngữ <img src="{{asset('MusicLayout/images/svg/lang.svg')}}" alt=""></span>
        </div>
        <div class="ms_top_btn">
            @if(Auth::check())
            <a href="#" class="ms_btn dev">upload</a>
            @if(Auth::user()->img_path==null) 
            <a href="javascript:;" class="ms_admin_name"><span class="ms_admin_title">Chào {{Auth::user()->name}}</span> <span class="ms_pro_name" style="background-image:url('/storage/user/pic1 (12).jpg') !important;background-repeat: no-repeat, repeat;background-size: cover"></span>
            @else
            <a href="javascript:;" class="ms_admin_name"><span class="ms_admin_title">Chào {{Auth::user()->name}}</span> <span class="ms_pro_name" style="background-image:url('{{Auth::user()->img_path}}') !important;background-repeat: no-repeat, repeat;background-size: cover"></span>
            @endif
            </a>
            <ul class="pro_dropdown_menu">
                <li><a href="{{route('user.index')}}">Trang cá nhân</a></li>
                <li><a href="#" class="support">Hỗ trợ</a></li>
                <li><a href="{{route('logout')}}">Đăng xuất</a></li>
            </ul>
            @else
            <a href="javascript:;" class="ms_btn reg_btn" data-toggle="modal" data-target="#myModal"><span>Đăng kí</span></a>
            <a href="javascript:;" class="ms_btn login_btn" data-toggle="modal" data-target="#myModal1"><span>Đăng nhập</span></a>
            @endif
        </div>
    </div>
</div>