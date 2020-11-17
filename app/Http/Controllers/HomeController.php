<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use App\Models\Song;
use App\Models\Artist;
use App\Models\SongArtist;
use App\Models\SongAlbum;
use App\Models\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    private  $song, $genres, $artist, $songArtist, $album, $songAlbum;
    public function __construct(Song $song, Genres $genres, Artist $artist, SongArtist $songArtist, Album $album, SongAlbum $songAlbum)
    {

        $this->song = $song;
        $this->genres = $genres;
        $this->artist = $artist;
        $this->songArtist = $songArtist;
        $this->album = $album;
        $this->songAlbum = $songAlbum;
    }

    public function index()
    {
        $songs = $this->song->orderBy('number_listen', 'desc')->take(15)->get();
        $songRelase = $this->song->latest()->limit(5)->get();
        $artists = $this->artist->orderBy('number_visit', 'desc')->take(6)->get();
        $genres = $this->genres->get();
        $albums = $this->album->orderBy('number_visit', 'desc')->take(5)->get();
        $songT1 = DB::table('songs')
        ->whereRaw('datediff((select curdate()),created_at)<30')
        ->orderBy('number_listen','desc')->take(2)->get();
        $albumTop = $this->album->orderBy('number_visit', 'desc')->take(5)->get();
        return view('home', compact('songs', 'artists', 'songRelase', 'genres','songT1', 'albums', 'albumTop'));
    }

    public function getSearch(Request $request)
    {
        $song = $this->song->where('name', 'like', '%' . $request->key . '%')->get();
        $songT1 = DB::table('songs')
        ->whereRaw('datediff((select curdate()),created_at)<30')
        ->orderBy('number_listen','desc')->take(2)->get();
        $artist = $this->artist->where('name', 'like', '%' . $request->key . '%')->get();
        return view('home.search', compact('song', 'songT1', 'artist'));
    }

    public function details($id)
    {
        $song = $this->song->find($id);
        $songAll = $this->song->get();
        $art = $song->artists;
        echo ($song);
        //echo($art);
    }

    public function albumTop()
    {
        $arr = array();
        $albumTop = $this->album->orderBy('number_visit', 'desc')->take(5)->get();
        foreach ($albumTop as $album) {
            foreach ($album->songs as $song) {
                $art = $song->artists;
                array_push($arr, json_decode($song, true));
            }
        }
        print_r(json_encode($arr));
    }

    public function song()
    {
        $songT1 = DB::table('songs')
        ->whereRaw('datediff((select curdate()),created_at)<30')
        ->orderBy('number_listen','desc')->take(2)->get();
        return view('layouts.main', compact('songT1'));
    }

    public function albumFavourite()
    {
        $albumTop = $this->album->orderBy('number_visit', 'desc')->take(5)->get();
        $list = session()->get('list');
        foreach ($albumTop as $album) {
            foreach ($album->songs as $song) {
                $art = $song->artists;
                if (isset($list[$song->id])) {
                    return response()->json([
                        'code' => 201,
                        'message' => 'error'
                    ], 200);
                } else {
                    $list[$song->id] = [
                        'id' => $song->id,
                        'name' => $song->name,
                        'time' => $song->time,
                        'img_path' => $song->img_path,
                        'song_path' => $song->song_path
                    ];
                }
            }
        }
        session()->put('list', $list);
        return response()->json([
            'code' => 200,
            'message' => 'Thành công'
        ], 200);
    }
}

// select * from songs where datediff((select curdate()),(SELECT created_at FROM php_music.songs where id=14))>30 
// order by number_listen desc;
