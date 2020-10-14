<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SongArtist extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id_song','id_artist'
    ];

    public function song()
    {
        return $this->belongsTo(Song::class);
    }
}
