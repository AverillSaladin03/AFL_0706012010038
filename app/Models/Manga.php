<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    use HasFactory;

    protected $table = 'mangas';
    protected $fillable = ['manga_code', 'manga_title', 'manga_kanji', 'manga_release_date', 'manga_author', 'published_at'];
    protected $primaryKey = 'manga_code';
    protected $keyType = 'string';

    public function publisher(){
        return $this->belongsTo(Publisher::class, 'published_at', 'publisher_code');
    }

}
