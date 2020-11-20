
<div class="ms-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="ms_banner_img">
                    <img src="{{asset('MusicLayout/images/banner.png')}}" alt="" class="img-fluid">
                </div>
                <div class="ms_banner_text">
                    <h1>Tháng này</h1>
                    <h1 class="ms_color">Top Album</h1>
                    @foreach($albumTop as $key=> $album)
                    @if($key==4)
                    <a href="{{route('album.detail',['id'=>$album->id])}}">{{$album->name}} </a>
                    @else
                    <a href="{{route('album.detail',['id'=>$album->id])}}">{{$album->name}}, </a>
                    @endif
                    @endforeach
                    <div class="ms_banner_btn">
                        <a href="javascript:void(0)" class="ms_btn play_now" onclick="get_detail_album()">Nghe bây giờ</a>
                        <a href="#" data-url="{{route('albumFavourite')}}" class="ms_btn add_album_fr">Thêm yêu thích</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>