<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rating_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->boolean('delivered', true);
            $table->boolean('delivered_on_time', true);
            $table->boolean('correct_product', true);
            $table->boolean('recommend', true);
            $table->longText('description')->nullable();
            $table->integer('product_id')
                ->unsigned();
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');
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
        Schema::dropIfExists('rating_products');
    }
}
