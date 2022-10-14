<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supporter_data', function (Blueprint $table) {
            $table->id();
            $table->integer("Abia")->nullable();
            $table->integer("Adamawa")->nullable();
            $table->integer("Akwa Ibom")->nullable();
            $table->integer("Anambra")->nullable();
            $table->integer("Bauchi")->nullable();
            $table->integer("Bayelsa")->nullable();
            $table->integer("Benue")->nullable();
            $table->integer("Borno")->nullable();
            $table->integer("Cross River")->nullable();
            $table->integer("Delta")->nullable();
            $table->integer("Ebonyi")->nullable();
            $table->integer("Edo")->nullable();
            $table->integer("Ekiti")->nullable();
            $table->integer("Enugu")->nullable();
            $table->integer("FCT")->nullable();
            $table->integer("Gombe")->nullable();
            $table->integer("Imo")->nullable();
            $table->integer("Jigawa")->nullable();
            $table->integer("Kaduna")->nullable();
            $table->integer("Kano")->nullable();
            $table->integer("Katsina")->nullable();
            $table->integer("Kebbi")->nullable();
            $table->integer("Kogi")->nullable();
            $table->integer("Kwara")->nullable();
            $table->integer("Lagos")->nullable();
            $table->integer("Nasarawa")->nullable();
            $table->integer("Niger")->nullable();
            $table->integer("Ogun")->nullable();
            $table->integer("Ondo")->nullable();
            $table->integer("Osun")->nullable();
            $table->integer("Oyo")->nullable();
            $table->integer("Plateau")->nullable();
            $table->integer("Rivers")->nullable();
            $table->integer("Sokoto")->nullable();
            $table->integer("Taraba")->nullable();
            $table->integer("Yobe")->nullable();
            $table->integer("Zamfara")->nullable();
            $table->text("comment");
            $table->text("achievements");
            $table->string("party");
            $table->string("candidate");
            $table->bigInteger("user_id");
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
        Schema::dropIfExists('supporter_data');
    }
};
