<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kamars', function (Blueprint $table) {
            $table->id();
            $table->string('tipekamar');
            $table->string('besarkamar');
            $table->string('fasilitaskamar');
            $table->integer('jumlahkamar');
            $table->string('image');
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
        Schema::dropIfExists('data_kamars');
    }
};
