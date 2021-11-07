<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategorybrickTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorybrick', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table-> unsignedBigInteger("brick_id");
            $table-> unsignedBigInteger("category_id");
            $table-> foreign("brick_id")->references("id")->on("brick")->cascadeOnDelete();
            $table-> foreign("category_id")->references("id")->on("category")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorybrick');
    }
}
