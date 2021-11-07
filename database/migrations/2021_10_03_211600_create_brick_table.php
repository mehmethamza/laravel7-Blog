<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateBrickTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()


    {
        DB::statement("SET FOREIGN_KEY_CHECKS=0;");

        Schema::create('brick', function (Blueprint $table) {
            $table->id();
            $table->string("type",60);
            $table->text("title")->nullable();
            $table->text("title_slug")->nullable();
            $table->text("contents")->nullable();
            $table->text("realcontents")->nullable();
            $table -> string("video",60) -> nullable();
            $table -> string("audio",60) -> nullable();

            $table -> unsignedBigInteger("author_id");
            $table -> text("durum") -> nullable();

           $table-> foreign("author_id")->references("id")->on("author");

            $table->timestamps();
            $table->softDeletes();
        });
        DB::statement("SET FOREIGN_KEY_CHECKS=1;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brick');
    }
}
