<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id_user');

            $table->string("first_name");
            $table->string("last_name");
            $table->string("email");
            $table->string("password",60);
            $table->string("telephone")->nullable();
            $table->integer("id_user_group")->nullable()->unsigned();
            $table->timestamps();

            $table->foreign('id_user_group')->references('id_user_group')->on('user_group')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
