<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('publishers')->insert(
            [
                'publisher_code' => "pbl_shu",
                'publisher_name' => "Shueisha",
                'publisher_kanji' => "株式会社 集英社",
                'publisher_romaji' => "Kabushiki-gaisha Shūeisha",
                'publisher_address' => "Chiyoda, Tokyo, Japan",
                'publisher_site' => "www.shueisha.co.jp",
                'publisher_created_date' => "March 31, 1949",
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]
        );

        DB::table('publishers')->insert(
            [
                'publisher_code' => "pbl_kod",
                'publisher_name' => "Kodansha",
                'publisher_kanji' => "株式会社 講談社",
                'publisher_romaji' => "Kabushiki-gaisha Kōdansha",
                'publisher_address' => "Bunkyō, Tokyo, Jepang",
                'publisher_site' => "www.kodansha.co.jp",
                'publisher_created_date' => "1909",
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]
        );

        DB::table('publishers')->insert(
            [
                'publisher_code' => "pbl_sho",
                'publisher_name' => "Shōgakukan",
                'publisher_kanji' => "株式会社 小学館",
                'publisher_romaji' => "Kabushiki-gaisha Shōgakukan",
                'publisher_address' => "Tokyo, Japan",
                'publisher_site' => "www.shogakukan.co.jp",
                'publisher_created_date' => "August 8, 1922",
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]
        );

        DB::table('publishers')->insert(
            [
                'publisher_code' => "pbl_hak",
                'publisher_name' => "Hakusensha",
                'publisher_kanji' => "株式会社 白泉社",
                'publisher_romaji' => "Kabushiki-gaisha Hakusensha",
                'publisher_address' => "Chiyoda, Tokyo, Japan",
                'publisher_site' => "www.hakusensha.co.jp",
                'publisher_created_date' => "December 1, 1973",
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]
        );
    }
}
