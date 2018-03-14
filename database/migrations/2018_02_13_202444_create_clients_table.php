<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('email');
            $table->string('password')->nullable();
            $table->string('provider_id')->nullable();
            $table->date('birthday')->nullable();
            $table->string('sex')->nullable();
            $table->string('cpf')->nullable();
            $table->string('phone')->nullable();
            $table->string('cell_phone')->nullable();
            $table->boolean('receive_email', true);
            $table->boolean('receive_sms', true);
            $table->integer('sou_barato')->nullable();
            $table->boolean('active', true);
            $table->rememberToken();
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
        Schema::dropIfExists('clients');
    }
}
