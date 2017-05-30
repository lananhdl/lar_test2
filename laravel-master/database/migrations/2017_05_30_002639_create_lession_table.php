<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lession', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name author');
             $table->string('namevideo');
            $table->string('linkvideo');
             $table->string('nameemail');
              $table->text('full');
              $table->string('author');
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
        Schema::dropIfExists('lession');
    }
}
