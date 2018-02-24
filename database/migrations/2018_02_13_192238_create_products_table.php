<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('sku')->nullable();
            $table->string('gtin')->nullable();
            $table->string('ncm')->nullable();
            $table->decimal('cost_price',10,2)->nullable();
            $table->decimal('sell_price',10,2)->nullable();
            $table->decimal('promo_price',10,2)->nullable();
            $table->decimal('gross_weight',10,2)->nullable();
            $table->decimal('net_weight',10,2)->nullable();
            $table->date('validity')->nullable();
            $table->string('condition');
            $table->string('width')->nullable();
            $table->string('lenght')->nullable();
            $table->string('height')->nullable();
            $table->string('unit');
            $table->longText('description')->nullable();
            $table->integer('stock')->nullable();
            $table->integer('category_id')
                ->unsigned()->nullable();
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
            $table->integer('sub_category_id')
                ->unsigned()->nullable();
            $table->foreign('sub_category_id')
                ->references('id')
                ->on('sub_categories')
                ->onDelete('cascade');
            $table->boolean('featured', true);
            $table->boolean('active', true);
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
