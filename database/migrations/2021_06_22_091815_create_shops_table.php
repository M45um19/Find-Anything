<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('market_id');
            $table->string('market_name');
            $table->string('market_address');
            $table->string('shop_name');
            $table->string('shop_address');
            $table->string('shop_image')->nullable();
            $table->string('mobile_number');
            $table->string('shop_description');

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
        Schema::dropIfExists('shops');
    }
}
