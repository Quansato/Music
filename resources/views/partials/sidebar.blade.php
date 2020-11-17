<!---Side Menu Start--->
<div class="ms_sidemenu_wrapper">
	<div class="ms_nav_close">
		<i class="fa fa-angle-right" aria-hidden="true"></i>
	</div>
	<div class="ms_sidemenu_inner">
		<div class="ms_logo_inner">
			<div class="ms_logo">
				<a href="{{ route('home.index') }}"><img src="{{asset('MusicLayout/images/logo.png')}}" alt="" class="img-fluid" / ></a>
			</div>
			<div class="ms_logo_open">
				<a href="{{ route('home.index') }}"><img src="{{asset('MusicLayout/images/open_logo.png')}}" alt="" class="img-fluid" /></a>
			</div>
		</div>
		<div class="ms_nav_wrapper">
			<ul>
				<li><a href="{{ route('home.index') }}" class="active" id="tab1" title="Trang chủ">
						<span class="nav_icon">
							<span class="icon icon_discover"></span>
						</span>
						<span class="nav_text">
							Trang chủ
						</span>
					</a>
				</li>

				<li><a href="{{ route('album.index') }}" id="tab2" title="Albums">
						<span class="nav_icon">
							<span class="icon icon_albums"></span>
						</span>
						<span class="nav_text">
							albums
						</span>
					</a>
				</li>

				<li><a href="{{ route('artist.index') }}" id="tab3" title="Ca sĩ">
						<span class="nav_icon">
							<span class="icon icon_artists"></span>
						</span>
						<span class="nav_text">
							Ca sĩ
						</span>
					</a>
				</li>

				<li><a href="{{ route('genres.index') }}" id="tab4" title="Thể loại">
						<span class="nav_icon">
							<span class="icon icon_genres"></span>
						</span>
						<span class="nav_text">
							Thể loại
						</span>
					</a>
				</li>

				<li><a href="{{ route('song.index') }}" id="tab5" title="Bài hát">
						<span class="nav_icon">
							<span class="icon icon_tracks"></span>
						</span>
						<span class="nav_text">
							Bài hát
						</span>
					</a>
				</li>


				<li><a href="{{route('song.showlist')}}" title="Yêu thích">
						<span class="nav_icon">
							<span class="icon icon_favourite"></span>
						</span>
						<span class="nav_text">
							Yêu thích
						</span>
					</a>
				</li>

				<!-- <li><a href="stations.html" title="Stations">
						<span class="nav_icon">
							<span class="icon icon_station"></span>
						</span>
						<span class="nav_text">
							stations
						</span>
					</a>
				</li> -->
			</ul>
			<!-- <ul class="nav_downloads">
				<li><a href="download.html" title="Downloads">
						<span class="nav_icon">
							<span class="icon icon_download"></span>
						</span>
						<span class="nav_text">
							downloads
						</span>
					</a>
				</li>

				<li><a href="purchase.html" title="Purchased">
						<span class="nav_icon">
							<span class="icon icon_purchased"></span>
						</span>
						<span class="nav_text">
							purchased
						</span>
					</a>
				</li>

				<li><a href="{{route('song.showlist')}}" title="Yêu thích">
						<span class="nav_icon">
							<span class="icon icon_favourite"></span>
						</span>
						<span class="nav_text">
							Yêu thích
						</span>
					</a>
				</li>

				<li><a href="history.html" title="History">
						<span class="nav_icon">
							<span class="icon icon_history"></span>
						</span>
						<span class="nav_text">
							history
						</span>
					</a>
				</li>
			</ul> -->
			<!-- <ul class="nav_playlist">
				<li><a href="feature_playlist.html" title="Featured Playlist">
						<span class="nav_icon">
							<span class="icon icon_fe_playlist"></span>
						</span>
						<span class="nav_text">
							featured playlist
						</span>
					</a>
				</li>

				<li><a href="add_playlist.html" title="Create Playlist">
						<span class="nav_icon">
							<span class="icon icon_c_playlist"></span>
						</span>
						<span class="nav_text">
							create playlist
						</span>
					</a>
				</li>
			</ul> -->
		</div>
	</div>
</div>