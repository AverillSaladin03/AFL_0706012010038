<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;

    protected $table = 'publishers';
    protected $fillable = ['publisher_code', 'publisher_name', 'publisher_kanji', 'publisher_romaji', 'publisher_address', 'publisher_site', 'publisher_created_date'];
    protected $primaryKey = 'publisher_code';
    protected $keyType = 'string';

    public function mangas(){
        return $this->hasMany(Manga::class, 'published_at', 'publisher_code');
    }
}
