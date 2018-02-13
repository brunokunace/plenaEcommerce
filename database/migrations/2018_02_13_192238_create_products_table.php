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
            $table->decimal('cost_price',10,2);
            $table->decimal('sell_price',10,2);
            $table->decimal('promo_price',10,2);
            $table->decimal('gross_weight',10,2);
            $table->decimal('net_weight',10,2);
            $table->date('validity')->nullable();
            $table->string('condition');
            $table->string('width');
            $table->string('lenght');
            $table->string('height');
            $table->string('unit');
            $table->longText('description');
            $table->integer('stock');
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
