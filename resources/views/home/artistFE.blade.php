<!---Featured Artists Music--->
<div class="ms_featured_slider">
    <div class="ms_heading">
        <h1>Ca sĩ nổi bật</h1>
        <span class="veiw_all"><a href="#">Xem thêm</a></span>
    </div>
    <div class="ms_feature_slider swiper-container">
        <div class="swiper-wrapper">
            @foreach($artists as $art)
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="{{$art->img_path}}" alt="">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="MusicLayout/images/svg/more.svg" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="MusicLayout/images/svg/play.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">{{$art->name}}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach


            <!-- <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="MusicLayout/images/featured/song2.jpg" alt="">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="MusicLayout/images/svg/more.svg" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="MusicLayout/images/svg/play.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Until I Met You</a></h3>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="MusicLayout/images/featured/song3.jpg" alt="">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="MusicLayout/images/svg/more.svg" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="MusicLayout/images/svg/play.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Gimme Some Courage</a></h3>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="MusicLayout/images/featured/song4.jpg" alt="">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="MusicLayout/images/svg/more.svg" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="MusicLayout/images/svg/play.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Dark Alley Acoustic</a></h3>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="MusicLayout/images/featured/song5.jpg" alt="">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="MusicLayout/images/svg/more.svg" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="MusicLayout/images/svg/play.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Walking Promises</a></h3>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="MusicLayout/images/featured/song6.jpg" alt="">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="MusicLayout/images/svg/more.svg" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="MusicLayout/images/svg/play.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Desired Games</a></h3>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="MusicLayout/images/featured/song1.jpg" alt="">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="MusicLayout/images/svg/more.svg" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="MusicLayout/images/svg/play.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Dream Your Moments (Duet)</a></h3>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="MusicLayout/images/featured/song2.jpg" alt="">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="MusicLayout/images/svg/more.svg" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="MusicLayout/images/svg/play.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Until I Met You</a></h3>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="MusicLayout/images/featured/song3.jpg" alt="">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="MusicLayout/images/svg/more.svg" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="MusicLayout/images/svg/play.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Gimme Some Courage</a></h3>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="MusicLayout/images/featured/song4.jpg" alt="">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="MusicLayout/images/svg/more.svg" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="MusicLayout/images/svg/play.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Dark Alley Acoustic</a></h3>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next1 slider_nav_next"></div>
    <div class="swiper-button-prev1 slider_nav_prev"></div>
</div>