<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCongesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conges', function (Blueprint $table) {
            $table->id();
            $table->string('demandeur')->nullable();
            $table->string('poste_occuper')->nullable();
            $table->string('type_de_conge')->nullable();
            $table->string('date_de_debut')->nullable();
            $table->string('heure_de_debut')->nullable();
            $table->string('date_de_fin')->nullable();
            $table->string('heure_de_fin')->nullable();
            $table->string('nombre_de_jours')->nullable();
            $table->mediumText('motifs')->nullable();
            $table->timestamps();   
            
            // faire connaitre au code le foregn key (hahafantarana hoe aniza ilay conge => any employe)
            $table->unsignedBigInteger('employe_id');
            $table->foreign('employe_id')->references('id')->on('employes');

            // // meme definition que decssus
            // $table->foreignId('employe_id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conges');
    }
}
