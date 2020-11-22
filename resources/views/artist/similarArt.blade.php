<div class="ms_content_wrapper ms_artist_content">
            <div class="ms_featured_slider">
                <div class="ms_heading">
                    <h1>Đề xuất</h1>
                    <span class="veiw_all"><a href="#">Xem thêm</a></span>
                </div>
                <div class="ms_relative_inner">
                    <div class="ms_feature_slider swiper-container">
                        <div class="swiper-wrapper">
                            @foreach($artistAll as $art)
                            <div class="swiper-slide">
                                <div class="ms_rcnt_box">
                                    <div class="ms_rcnt_box_img">
                                        <img src="{{$art->img_path}}" alt="">
                                        <div class="ms_main_overlay">
                                            <div class="ms_box_overlay"></div>
                                            
                                        </div>
                                    </div>
                                    <div class="ms_rcnt_box_text">
                                        <h3><a href="{{route('artist.detail',['id'=>$art->id])}}" class="artist_play" data-url="{{route('artist.update',['id'=>$art->id])}}">{{$art->name}}</a></h3>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next1 slider_nav_next"></div>
                    <div class="swiper-button-prev1 slider_nav_prev"></div>
                </div>
            </div>
        </div>