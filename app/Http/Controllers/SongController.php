<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use App\Models\Song;
use App\Models\Artist;
use App\Models\SongArtist;
use App\Models\SongAlbum;
use App\Models\SongUser;
use App\Models\Album;
use App\Models\Favourite;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SongController extends Controller
{
    private  $song, $genres, $artist, $songArtist, $album, $songAlbum;
    public function __construct(Song $song, Genres $genres, Artist $artist, SongArtist $songArtist, Album $album, SongAlbum $songAlbum, Favourite $favourite,SongUser $songUser)
    {

        $this->song = $song;
        $this->genres = $genres;
        $this->artist = $artist;
        $this->songArtist = $songArtist;
        $this->album = $album;
        $this->favourite = $favourite;
        $this->songAlbum = $songAlbum;
        $this->songUser = $songUser;
    }

    public function index()
    {
        $songs = $this->song->paginate(10);
        $songT1 = DB::table('songs')
        ->whereRaw('datediff((select curdate()),created_at)<30')
        ->orderBy('number_listen','desc')->take(2)->get();
        return view('song.index', compact('songs','songT1'));
    }

    public function details($id)
    {
        $song = $this->song->find($id);
        $songAll = $this->song->get();
        dd($songAll);
    }

    public function favourite($id)
    {

        $song = $this->song->find($id);
        $list = session()->get('list');
        if (isset($list[$id])) {
            return response()->json([
                'code' => 201,
                'message' => 'error'
            ], 200);
        } else {
            $list[$id] = [
                'id'=>$song->id,
                'name' => $song->name,
                'time' => $song->time,
                'img_path' => $song->img_path,
                'song_path' => $song->song_path
            ];
        }
        session()->put('list', $list);
        return response()->json([
            'code' => 200,
            'message' => 'Thành công'
        ], 200);
    }

    public function showList()
    {
        $list = session()->get('list');
        $songT1 = DB::table('songs')
        ->whereRaw('datediff((select curdate()),created_at)<30')
        ->orderBy('number_listen','desc')->take(2)->get();
        return view('song.favourite', compact('list','songT1'));
    }

    public function deleteList(Request $request)
    {
        if ($request->id) {
            $list = session()->get('list');
            unset($list[$request->id]);
            session()->put('list', $list);
            $list = session()->get('list');
            return response()->json([
                'code' => 200,
                'message' => 'Thành công'
            ], 200);
            $listComponent = view('song.favourite', compact('list'))->render();
        }
    }

    public function update($id)
    {
        $song = $this->song->find($id);
        $song->number_listen = $song->number_listen + 1;
        $song->save();
    }

    public function updateD($id)
    {
        $song = $this->song->find($id);
        $song->number_download = $song->number_download + 1;
        $song->save();
    }


    public function smartReadFile($location, $filename, $mimeType = 'audio/mpeg')
    {
        if (!file_exists($location)) {
            header("HTTP/1.1 404 Not Found");
            return;
        }

        $size    = filesize($location);
        $time    = date('r', filemtime($location));

        $fm        = @fopen($location, 'rb');
        if (!$fm) {
            header("HTTP/1.1 505 Internal server error");
            return;
        }

        $begin    = 0;
        $end    = $size - 1;

        if (isset($_SERVER['HTTP_RANGE'])) {
            if (preg_match('/bytes=\h*(\d+)-(\d*)[\D.*]?/i', $_SERVER['HTTP_RANGE'], $matches)) {
                $begin    = intval($matches[1]);
                if (!empty($matches[2])) {
                    $end    = intval($matches[2]);
                }
            }
        }

        if (isset($_SERVER['HTTP_RANGE'])) {
            header('HTTP/1.1 206 Partial Content');
        } else {
            header('HTTP/1.1 200 OK');
        }

        header("Content-Type: $mimeType");
        header('Cache-Control: public, must-revalidate, max-age=0');
        header('Pragma: no-cache');
        header('Accept-Ranges: bytes');
        header('Content-Length:' . (($end - $begin) + 1));
        if (isset($_SERVER['HTTP_RANGE'])) {
            header("Content-Range: bytes $begin-$end/$size");
        }
        header("Content-Disposition: inline; filename=$filename");
        header("Content-Transfer-Encoding: binary");
        header("Last-Modified: $time");

        $cur    = $begin;
        fseek($fm, $begin, 0);

        while (!feof($fm) && $cur <= $end && (connection_status() == 0)) {
            print fread($fm, min(1024 * 16, ($end - $cur) + 1));
            $cur += 1024 * 16;
        }
    }

    public function showCmt($id){
        $song = $this->song->find($id);
        $cmt=$this->songUser->where('id_song',$id)->get();
        echo($cmt);
    }

    public function getDownload(File $file)
    {
        $tempImage = tempnam(sys_get_temp_dir(), $file);
        copy('http://localhost:8000'. $file, $tempImage);

        return response()->download($tempImage, $file);
    }
}
