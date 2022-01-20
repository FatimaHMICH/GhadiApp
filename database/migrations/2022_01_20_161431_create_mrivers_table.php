<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Schema::rename($mrivers, $drivers);

class CreateMriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mrivers', function (Blueprint $table) {
            $table->id();
            $table->string('userName');
            $table->string('email');
            $table->string('cin');
            $table->string('password');
            $table->string('address');
            $table->string('city');
            $table->string('postalCode');
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
        Schema::dropIfExists('mrivers');
    }
}
