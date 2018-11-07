<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisement', function (Blueprint $table) {
            $table->increments('id_advertisement');
            $table->string('title');
            $table->string('description');
            $table->dateTime('date');
            $table->string('contact_mail');
            $table->string('contact_phone')->nullable();
            $table->integer('price');
            $table->integer('area');
            $table->integer('views');

            $table->integer("id_user")->nullable()->unsigned();
            $table->integer("id_condition")->nullable()->unsigned();
            $table->integer("id_type")->nullable()->unsigned();
            $table->integer("id_location")->nullable()->unsigned();
            $table->integer("id_specification")->nullable()->unsigned();


            $table->timestamps();


            $table->foreign('id_user')->references('id_user')->on('user')->onDelete('cascade');
            $table->foreign('id_condition')->references('id_condition')->on('condition')->onDelete('cascade');
            $table->foreign('id_type')->references('id_type')->on('type')->onDelete('cascade');
            $table->foreign('id_location')->references('id_location')->on('location')->onDelete('cascade');
            $table->foreign('id_specification')->references('id_specification')->on('specification')->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advertisement');
    }
}
