<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('shop_id');
            $table->string('market_name');
            $table->string('market_address');
            $table->string('product_type');
            $table->string('product_name');
            $table->string('product_description');
            $table->string('product_image');
            $table->string('product_sale_prize');
            $table->string('product_regular_prize');
            $table->string('product_availability');
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
        Schema::dropIfExists('products');
    }
}
