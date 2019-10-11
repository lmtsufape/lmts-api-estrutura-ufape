<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChavesEstrangeiras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users', function (Blueprint $table) {
          $table->foreign('cursoId')->references('id')->on('cursos')->nullable();
      });
      Schema::table('cursos', function (Blueprint $table) {
          $table->foreign('departamentoId')->references('id')->on('departamentos')->nullable();
      });
      Schema::table('departamentos', function (Blueprint $table) {
          $table->foreign('campusId')->references('id')->on('campuses')->nullable();
      });
      

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
