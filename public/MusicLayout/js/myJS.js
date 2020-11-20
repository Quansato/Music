function addFavourite(e) {
    e.preventDefault();
    let url = $(this).data('url');
    $.ajax({
        type: 'GET',
        url: url,
        dataType: 'json',
        success: function (data) {
            if (data.code == 200) {
                $('#success_modal').modal('show');
            } else {
                $('#error_modal').modal('show');
            }
        },
        error: function () {

        }

    })
};

function deleteFavourite(e) {
    e.preventDefault();
    let url = $('.ms_weekly_wrapper').data('url');
    let id = $(this).data('id');
    $.ajax({
        type: 'GET',
        url: url,
        data: {
            id: id
        },
        success: function (data) {
            if (data.code == 200) {
                $('#delete_modal').modal('show');
            }
            location.reload();
        },
        error: function () {

        }

    })
};
//update luowtj nghe
function updateSong(id) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    let url = '';
    if (typeof id != "object") {
        url = id;
    } else {
        url = $(this).data('url');
    }
    // console.log(url);
    $.ajax({
        type: 'Post',
        url: url,
        dataType: 'json',
        success: function (data) {

        },
        error: function () {

        }

    })
}

function updateSongD(e) {
    // e.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    let url = $(this).data('url');
    $.ajax({
        type: 'Post',
        url: url,
        dataType: 'json',
        success: function (data) {

        },
        error: function () {

        }

    })
}

function update_art(e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }
    });
    let url = $(this).data('url');
    console.log(url);
    $.ajax({
        type: 'Post',
        url: url,
        dataType: 'json',
        success: function (data) {

        },
        error: function () {

        }

    })
}

function get_only_song(id) {
    $.get('/home/detail/' + id, function (data) {
        var obj = JSON.parse(data);
        var art = [];
        for (let i = 0; i < obj.artists.length; i++) {
            art.push(obj.artists[i].name)
        };
        $("#jquery_jplayer_1").jPlayer("destroy");
        $("#jquery_jplayer_1").jPlayer({
            ready: function () {
                $(this).jPlayer("setMedia", {
                    image: obj.img_path,
                    title: obj.name,
                    artist: art.join(' & '),
                    mp3: obj.song_path,
                }).jPlayer('play');
            },
            cssSelectorAncestor: "#jp_container_1",
            swfPath: "/js",
            preload: 'metadata',
            supplied: "mp3",
            errorAlerts: true,
            useStateClassSkin: true,
            autoBlur: false,
            smoothPlayBar: true,
            keyEnabled: true,
            toggleDuration: true,
            playlistOptions: {
                autoPlay: true,
            }
        })
        $(".jp-now-playing").html("<div class='jp-track-name'><span class='que_img'><img width='50' height='50' src='" + obj.img_path + "'></span><div class='que_data'>" + obj.name + " <div class='jp-artist-name'>" + art.join(' & ') + "</div></div></div>");

    })
}

function get_detail_artist(e) {
    e.preventDefault();
    let url = $(this).data('url');
    console.log(url);
    $.ajax({
        type: 'GET',
        url: url,
        dataType: 'json',
        success: function (data) {
            sessionStorage.clear();
            var rev = data;
            console.log(rev);
            for (let i = 0; i < rev.length; i++) {
                sessionStorage.setItem(rev[i].id, JSON.stringify(rev[i]));
                setAudio();
            }
        },
        error: function () {
            alert('err')
        }

    })
}


function checkLang() {
    var checkedValue = $('.check:checked').val();
    let url = 'http://localhost:8000/language/' + checkedValue;
    console.log(url);
    $.ajax({
        type: 'Get',
        url: url,
        dataType: 'json',
        success: function (data) {

        },
        error: function () {

        }

    })
}

function notice() {
    $('#notice').modal('show');
}

function setFlag() {
    console.log('test');
    localStorage.setItem('flag', 0)
}

function clearList() {
    sessionStorage.clear();
    location.reload();
}

function setDp(){
    $('.zalo-chat-widget').addClass('support')
}
function addAlbum(e){
    e.preventDefault();
    let url = $(this).data('url');
    $.ajax({
        type: 'GET',
        url: url,
        success: function (data) {
            if (data.code == 200) {
                $('#success_modal').modal('show');
            }
            location.reload();
        },
        error: function () {

        }

    })
}

function showBar(){
    $('.ms_player_wrapper').removeClass('close_player')
}


$(function () {
    $('.add_favourite').on('click', addFavourite);
    $('.song_delete').on('click', deleteFavourite);
    $('.song_play').on('click', updateSong);
    $('.ms_lang').on('click', checkLang);
    $('.download').on('click', updateSongD);
    $('.dev').on('click', notice);
    $('.artist_play').on('click', update_art)
    $('.art_play').on('click', get_detail_artist)
    $('.jp-next').on('click', setFlag)
    $('.clear_all').on('click', clearList)
    $('#repass').on('keyup', function () {
        if ($('#password').val() != $('#repass').val()) {
            this.setCustomValidity("Mật khẩu không trùng khớp");
            this.reportValidity();
        } else {
            this.setCustomValidity("");
            console.log('ok');
        }
    });
    $('.support').on('click',setDp)
    $('.add_album_fr').on('click',addAlbum)
    $('.song_play,.play_now,.art_play').on('click',showBar)
});

///getttt audio
function setAudio() {
    var myPlayListOtion = '<ul class="more_option"><li><a href="#"><span class="opt_icon" title="Add To Favourites"><span class="icon icon_fav"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Queue"><span class="icon icon_queue"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Download Now"><span class="icon icon_dwn"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Playlist"><span class="icon icon_playlst"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Share"><span class="icon icon_share"></span></span></a></li></ul>';
    $(document).ready(function () {
        if (sessionStorage.length) {
            var playList = [];
            for (let i = 0; i < sessionStorage.length; i++) {
                var art = [];
                var obj2 = JSON.parse(sessionStorage.getItem(Object.keys(sessionStorage)[i]));
                for (let i = 0; i < obj2.artists.length; i++) {
                    art.push(obj2.artists[i].name)
                };
                playList.push({
                    id: obj2.id,
                    image: obj2.img_path,
                    title: obj2.name,
                    artist: art.join(' & '),
                    mp3: obj2.song_path,
                    option: myPlayListOtion
                });

            }

            if (playList.length) {
                var myPlaylist = new jPlayerPlaylist({
                    jPlayer: "#jquery_jplayer_1",
                    cssSelectorAncestor: "#jp_container_1"
                }, playList, {
                    swfPath: "/MusicLayout/js/plugins/player",
                    supplied: "mp3",
                    solution: "flash, html",
                    wmode: "window",
                    useStateClassSkin: true,
                    autoBlur: true,
                    smoothPlayBar: true,
                    errorAlerts: true,
                    toggleDuration: true,
                    preload: 'metadata',
                    keyEnabled: true,
                    playlistOptions: {
                        autoPlay: true,
                        removeItemClass: "jp-playlist-item-remove",
                        //xoá bài hát khỏi list:
                        enableRemoveControls: true
                    }
                });
                $("#jquery_jplayer_1").on($.jPlayer.event.ready + ' ' + $.jPlayer.event.play, function (event) {
                    var current = myPlaylist.current;
                    var playlist = myPlaylist.playlist;

                    $.each(playlist, function (index, obj) {
                        if (index == current) {
                            $(".jp-now-playing").html("<div class='jp-track-name'><span class='que_img'><img width='50' height='50' src='" + obj.image + "'></span><div class='que_data'>" + obj.title + " <div class='jp-artist-name'>" + obj.artist + "</div></div></div>");
                        }
                    });
                    $('.knob-wrapper').mousedown(function () {
                        $(window).mousemove(function (e) {
                            var angle1 = getRotationDegrees($('.knob')),
                                volume = angle1 / 270

                            if (volume > 1) {
                                $("#jquery_jplayer_1").jPlayer("volume", 1);
                            } else if (volume <= 0) {
                                $("#jquery_jplayer_1").jPlayer("mute");
                            } else {
                                $("#jquery_jplayer_1").jPlayer("volume", volume);
                                $("#jquery_jplayer_1").jPlayer("unmute");
                            }
                        });

                        return false;
                    }).mouseup(function () {
                        $(window).unbind("mousemove");
                    });


                    function getRotationDegrees(obj) {
                        var matrix = obj.css("-webkit-transform") ||
                            obj.css("-moz-transform") ||
                            obj.css("-ms-transform") ||
                            obj.css("-o-transform") ||
                            obj.css("transform");
                        if (matrix !== 'none') {
                            var values = matrix.split('(')[1].split(')')[0].split(',');
                            var a = values[0];
                            var b = values[1];
                            var angle = Math.round(Math.atan2(b, a) * (180 / Math.PI));
                        } else {
                            var angle = 0;
                        }
                        return (angle < 0) ? angle + 360 : angle;
                    }
                    var timeDrag = false;
                    $('.jp-play-bar').mousedown(function (e) {
                        timeDrag = true;
                        console.log('Test:' + timeDrag);
                        updatebar(e.pageX);

                    });
                    $(document).mouseup(function (e) {
                        if (timeDrag) {
                            timeDrag = false;
                            updatebar(e.pageX);
                        }
                    });
                    $(document).mousemove(function (e) {
                        if (timeDrag) {
                            updatebar(e.pageX);
                        }
                    });
                    var updatebar = function (x) {
                        var progress = $('.jp-progress');
                        var position = x - progress.offset().left;
                        console.log(position);
                        console.log(progress.width());
                        var percentage = 100 * position / progress.width();
                        if (percentage > 100) {
                            console.log('ended');
                            percentage = 100;
                        }
                        if (percentage < 0) {
                            percentage = 0;
                        }
                        $("#jquery_jplayer_1").jPlayer("playHead", percentage);
                        $('.jp-play-bar').css('width', percentage + '%');
                    };
                    $('#playlist-toggle, #playlist-text, #playlist-wrap li a').unbind().on('click', function () {
                        $('#playlist-wrap').fadeToggle();
                        $('#playlist-toggle, #playlist-text').toggleClass('playlist-is-visible');
                    });
                    $('.hide_player').unbind().on('click', function () {
                        $('.audio-player').toggleClass('is_hidden');
                        $(this).html($(this).html() == '<i class="fa fa-angle-down"></i> HIDE' ? '<i class="fa fa-angle-up"></i> SHOW PLAYER' : '<i class="fa fa-angle-down"></i> HIDE');
                    });
                    $('body').unbind().on('click', '.audio-play-btn', function () {
                        $('.audio-play-btn').removeClass('is_playing');
                        $(this).addClass('is_playing');
                        var playlistId = $(this).data('playlist-id');
                        myPlaylist.play(playlistId);
                        console.log(playlistId);
                    });

                });
            }
        }
    })
}
