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
          $table->foreign('tipoUsuarioId')->references('id')->on('tipo_usuarios')->nullable();
      });
      Schema::table('cursos', function (Blueprint $table) {
          $table->foreign('departamentoId')->references('id')->on('departamentos')->nullable();
      });
      Schema::table('departamentos', function (Blueprint $table) {
          $table->foreign('campusId')->references('id')->on('campuses')->nullable();
      });
      Schema::table('tipo_usuarios', function (Blueprint $table) {
          $table->foreign('unidadeOrgId')->references('id')->on('unidade_orgs')->nullable();
      });
      Schema::table('logs', function (Blueprint $table) {
          $table->foreign('userId')->references('id')->on('users')->nullable();
          $table->foreign('acaoId')->references('id')->on('acaos')->nullable();
      });
      Schema::table('acaos', function (Blueprint $table) {
          $table->foreign('moduloId')->references('id')->on('modulos')->nullable();
      });
      Schema::table('subordinacaos', function (Blueprint $table) {
          $table->foreign('unidadeOrgId')->references('id')->on('unidade_orgs')->nullable();
          $table->foreign('unidadeOrgIdSubordinada')->references('id')->on('unidade_orgs')->nullable();

          $table->foreign('moduloId')->references('id')->on('modulos')->nullable();
      });
      Schema::table('controle_de_acessos', function (Blueprint $table) {
        $table->foreign('acaoId')->references('id')->on('acaos')->nullable();
        $table->foreign('tipoUsuarioId')->references('id')->on('tipo_usuarios')->nullable();
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
