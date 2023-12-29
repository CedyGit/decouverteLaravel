<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('nom',100)->nullable();
            $table->string('prenom',100)->nullable();
            $table->string('email',100)->nullable();
            $table->string('date_de_naissance',100)->nullable();
            $table->string('sexe',100)->nullable();
            $table->string('numero',100)->nullable();
            $table->string('poste',100)->nullable();
            $table->string('date_de_recrutement',100)->nullable();
            $table->string('status',100)->nullable();
            $table->string('matricule',100)->nullable();
            $table->string('adress',100)->nullable();
            $table->string('avatar',100)->nullable();
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
        Schema::dropIfExists('employes');
    }
}
