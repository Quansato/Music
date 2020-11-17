<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use App\Models\Song;
use App\Models\Artist;
use App\Models\SongArtist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtistController extends Controller
{
    private  $song, $genres, $artist, $songArtist;
    public function __construct(Song $song, Genres $genres, Artist $artist, SongArtist $songArtist)
    {

        $this->song = $song;
        $this->genres = $genres;
        $this->artist = $artist;
        $this->songArtist = $songArtist;
    }

    public function index(){
        $artists = $this->artist->take(6)->get();
        $artistAll = $this->artist->get();
        $songT1 = DB::table('songs')
        ->whereRaw('datediff((select curdate()),created_at)<30')
        ->orderBy('number_listen','desc')->take(2)->get();
        return view('artist.index',compact('artists','artistAll','songT1'));
    }

    public function details($id){
        $artist = $this->artist->find($id);
        $artistAll = $this->artist->get();
        $songT1 = DB::table('songs')
        ->whereRaw('datediff((select curdate()),created_at)<30')
        ->orderBy('number_listen','desc')->take(2)->get();
        return view('artist.detailArtist', compact('artist','artistAll','songT1'));
    }

    public function artistSong($id){
        $artist = $this->artist->find($id);
        $arr=array();
        foreach($artist->songs as $song){
            $art=$song->artists;
            array_push($arr, json_decode($song, true));
        }
        print_r(json_encode($arr));
    }

    public function update($id)
    {
        $artist = $this->artist->find($id);
        $artist->number_visit = $artist->number_visit + 1;
        $artist->save();
    }
}
