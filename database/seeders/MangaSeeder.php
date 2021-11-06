<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MangaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mangas')->insert(
            [
                'manga_code' => "mng_hsb",
                'manga_title' => "Hataraku Saibō",
                'manga_kanji' => "はたらく細胞",
                'manga_release_date' => "26 Januari 2015",
                'manga_author' => "Akane Shimizu",
                'published_at' => "pbl_kod",
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]
        );

        DB::table('mangas')->insert(
            [
                'manga_code' => "mng_anh",
                'manga_title' => "Anohana: Ano Hi Mita Hana no Namae wo Bokutachi wa Mada Shiranai.",
                'manga_kanji' => "あの日見た花の名前を僕達はまだ知らない。",
                'manga_release_date' => "4 September 2013",
                'manga_author' => "Mari Okada",
                'published_at' => "pbl_shu",
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]
        );

        DB::table('mangas')->insert(
            [
                'manga_code' => "mng_ans",
                'manga_title' => "Akagami no Shirayukihime",
                'manga_kanji' => "赤髪の白雪姫",
                'manga_release_date' => "August 10, 2006",
                'manga_author' => "Sorata Akizuki",
                'published_at' => "pbl_hak",
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]
        );

        DB::table('mangas')->insert(
            [
                'manga_code' => "mng_aot",
                'manga_title' => "Attak On Titan",
                'manga_kanji' => "進撃の巨人",
                'manga_release_date' => "September 9, 2009",
                'manga_author' => "Hajime Isayama",
                'published_at' => "pbl_kod",
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]
        );


    }
}
