<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search', [
    'as' => 'home.search',
    'uses' => 'App\Http\Controllers\HomeController@getSearch'
]);

// Route::get('/home', 'App\Http\Controllers\HomeController@index');

Route::prefix('home')->group(function () {
    Route::get('/', [
        'as' => 'home.index',
        'uses' => 'App\Http\Controllers\HomeController@index'
    ]);
    
    Route::get('/detail/{id}', [
        'as' => 'song.detail',
        'uses' => 'App\Http\Controllers\HomeController@details'
    ]);

    Route::get('/song', [
        'as' => 'home.song',
        'uses' => 'App\Http\Controllers\HomeController@song'
    ]);

    Route::get('/play/album', [
        'as' => 'albumTop',
        'uses' => 'App\Http\Controllers\HomeController@albumTop'
    ]);

    Route::get('/add/album', [
        'as' => 'albumFavourite',
        'uses' => 'App\Http\Controllers\HomeController@albumFavourite'
    ]);

   
    
});

Route::prefix('artist')->group(function () {
    Route::get('/', [
        'as' => 'artist.index',
        'uses' => 'App\Http\Controllers\ArtistController@index'
    ]);
    
    Route::get('/detail/{id}', [
        'as' => 'artist.detail',
        'uses' => 'App\Http\Controllers\ArtistController@details'
    ]);

    Route::get('/song/{id}', [
        'as' => 'art.song',
        'uses' => 'App\Http\Controllers\ArtistController@artistSong'
    ]);

    Route::get('/update/{id}', [
        'as' => 'artist.update',
        'uses' => 'App\Http\Controllers\ArtistController@update'
    ]);
    
});

Route::prefix('genres')->group(function () {
    Route::get('/', [
        'as' => 'genres.index',
        'uses' => 'App\Http\Controllers\GenresController@index'
    ]);
    
    Route::get('/detail/{id}', [
        'as' => 'genres.detail',
        'uses' => 'App\Http\Controllers\GenresController@detailGenres'
    ]);
    
});

Route::prefix('topDL')->group(function () {
    Route::get('/', [
        'as' => 'topDL.index',
        'uses' => 'App\Http\Controllers\TDownloadController@index'
    ]);
    //gotoviewtheem
    
});

Route::prefix('album')->group(function () {
    Route::get('/', [
        'as' => 'album.index',
        'uses' => 'App\Http\Controllers\AlbumController@index'
    ]);

    Route::get('/detail/{id}', [
        'as' => 'album.detail',
        'uses' => 'App\Http\Controllers\AlbumController@detailAlbum'
    ]);
    
});

Route::prefix('user')->group(function () {
    Route::get('/', [
        'as' => 'user.index',
        'uses' => 'App\Http\Controllers\UserController@index'
    ]);

    Route::post('/update/{id}', [
        'as' => 'user.update',
        'uses' => 'App\Http\Controllers\UserController@update'
    ]);

    Route::post('/update/{id}', [
        'as' => 'user.update',
        'uses' => 'App\Http\Controllers\UserController@update'
    ]);
    
});




Route::prefix('song')->group(function () {
    Route::get('/', [
        'as' => 'song.index',
        'uses' => 'App\Http\Controllers\SongController@index'
    ]);
    Route::get('/detail/{id}', [
        'as' => 'song.detail',
        'uses' => 'App\Http\Controllers\SongController@details'
    ]);

    Route::get('/favourite/{id}', [
        'as' => 'song.favourite',
        'uses' => 'App\Http\Controllers\SongController@favourite'
    ]);

    Route::get('/showlist', [
        'as' => 'song.showlist',
        'uses' => 'App\Http\Controllers\SongController@showList'
    ]);

    Route::get('/deletelist', [
        'as' => 'song.deletelist',
        'uses' => 'App\Http\Controllers\SongController@deleteList'
    ]);

    Route::post('/update/{id}', [
        'as' => 'song.update',
        'uses' => 'App\Http\Controllers\SongController@update'
    ]);

    Route::post('/updateD/{id}', [
        'as' => 'song.updateD',
        'uses' => 'App\Http\Controllers\SongController@updateD'
    ]);

});

Route::group(['middleware' => ['web']], function () {
    Route::post('/signup', [
        'as' => 'signup',
        'uses' => 'App\Http\Controllers\UserController@signup'
    ]);
});



Route::post('/signin', [
    'as' => 'signin',
    'uses' => 'App\Http\Controllers\UserController@signin'
]);


Route::get('/logout', [
    'as' => 'logout',
    'uses' => 'App\Http\Controllers\UserController@logout'
]);


Route::get('/language/{language}', [
    'as' => 'language',
    'uses' => 'App\Http\Controllers\LanguageController@index'
]);

Route::get('/auth/redirect/{provider}', [
    'as' => 'loginfb',
    'uses' => 'App\Http\Controllers\UserController@redirect'
]);
Route::get('/callback/{provider}', [
    'as' => 'callbackfb',
    'uses' => 'App\Http\Controllers\UserController@callback'
]);

Route::get('{file}', [
    'as' => 'download',
    'uses' => 'App\Http\Controllers\SongController@getDownload'
]);