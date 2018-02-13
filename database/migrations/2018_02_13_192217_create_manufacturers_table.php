<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManufacturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type_person')->nullable();
            $table->string('cpf')->nullable();
            $table->string('rg')->nullable();
            $table->date('birthday')->nullable();
            $table->string('foreign_id')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('company_name')->nullable();
            $table->string('state_registration')->nullable();
            $table->string('ind_state_registration')->nullable();
            $table->string('municipal_registration')->nullable();
            $table->string('cep')->nullable();
            $table->string('street')->nullable();
            $table->string('number')->nullable();
            $table->string('complement')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('city')->nullable();
            $table->string('email')->nullable();
            $table->string('commercial_phone')->nullable();
            $table->string('home_phone')->nullable();
            $table->string('cell_phone')->nullable();
            $table->longText('description')->nullable();

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
        Schema::dropIfExists('manufacturers');
    }
}
