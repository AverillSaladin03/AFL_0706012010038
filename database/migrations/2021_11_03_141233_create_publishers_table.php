<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublishersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publishers', function (Blueprint $table) {
            $table->string('publisher_code')->primary();
            $table->string('publisher_name');
            $table->string('publisher_kanji')->nullable();
            $table->string('publisher_romaji')->nullable();
            $table->string('publisher_address')->nullable();
            $table->string('publisher_site')->nullable();
            $table->string('publisher_created_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publishers');
    }
}
