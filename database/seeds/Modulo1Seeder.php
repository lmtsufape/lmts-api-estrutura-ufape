<?php

use Illuminate\Database\Seeder;

class Modulo1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //--------------------------------------------------------- Ações

        DB::table('acaos')->insert([  //1
          'nome' => 'gerenciar editais',
          'moduloId' => 1,
        ]);
        DB::table('acaos')->insert([  //2
          'nome' => 'classificar inscricoes',
          'moduloId' => 1,
        ]);
        DB::table('acaos')->insert([  //3
          'nome' => 'homologar inscricoes',
          'moduloId' => 1,
        ]);
        DB::table('acaos')->insert([  //4
          'nome' => 'homologar recursos',
          'moduloId' => 1,
        ]);
        DB::table('acaos')->insert([  //5
          'nome' => 'homologar isencoes',
          'moduloId' => 1,
        ]);
        DB::table('acaos')->insert([  //6
          'nome' => 'cadastrar recursos',
          'moduloId' => 1,
        ]);
        DB::table('acaos')->insert([  //7
          'nome' => 'cadastrar inscricoes',
          'moduloId' => 1,
        ]);
        DB::table('acaos')->insert([  //8
          'nome' => 'cadastrar isencoes',
          'moduloId' => 1,
        ]);

        //--------------------------------------------------------- ACL

        DB::table('controle_de_acessos')->insert([  //1
          'acaoId' => 1,
          'tipoUsuarioId' => 1,
          'nivel' => 1,
        ]);
        DB::table('controle_de_acessos')->insert([  //2
          'acaoId' => 2,
          'tipoUsuarioId' => 2,
          'nivel' => 1,
        ]);
        DB::table('controle_de_acessos')->insert([  //3
          'acaoId' => 3,
          'tipoUsuarioId' => 1,
          'nivel' => 1,
        ]);
        DB::table('controle_de_acessos')->insert([  //4
          'acaoId' => 3,
          'tipoUsuarioId' => 2,
          'nivel' => 1,
        ]);
        DB::table('controle_de_acessos')->insert([  //5
          'acaoId' => 4,
          'tipoUsuarioId' => 1,
          'nivel' => 1,
        ]);
        DB::table('controle_de_acessos')->insert([  //6
          'acaoId' => 5,
          'tipoUsuarioId' => 1,
          'nivel' => 1,
        ]);
        DB::table('controle_de_acessos')->insert([  //7
          'acaoId' => 6,
          'tipoUsuarioId' => 4,
          'nivel' => 1,
        ]);
        DB::table('controle_de_acessos')->insert([  //8
          'acaoId' => 7,
          'tipoUsuarioId' => 4,
          'nivel' => 1,
        ]);
        DB::table('controle_de_acessos')->insert([  //9
          'acaoId' => 8,
          'tipoUsuarioId' => 4,
          'nivel' => 1,
        ]);
        DB::table('controle_de_acessos')->insert([  //4
          'acaoId' => 3,
          'tipoUsuarioId' => 5,
          'nivel' => 1,
        ]);


      //--------------------------------------------------------- Subordinacao

      for($i = 11; $i < 18; $i++){
        DB::table('subordinacaos')->insert([  //1
          'unidadeOrgId' => 62,
          'moduloId' => 1,
          'unidadeOrgIdSubordinada' => $i,
        ]);
      }

      for($i = 18; $i < 27; $i++){
        DB::table('subordinacaos')->insert([  //2
          'unidadeOrgId' => 63,
          'moduloId' => 1,
          'unidadeOrgIdSubordinada' => $i,
        ]);
      }

      for($i = 27; $i < 32; $i++){
        DB::table('subordinacaos')->insert([  //3
          'unidadeOrgId' => 64,
          'moduloId' => 1,
          'unidadeOrgIdSubordinada' => $i,
        ]);
      }

      for($i = 32; $i < 41; $i++){
        DB::table('subordinacaos')->insert([  //3
          'unidadeOrgId' => 85,
          'moduloId' => 1,
          'unidadeOrgIdSubordinada' => $i,
        ]);
      }

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 65,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 41,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 66,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 42,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 67,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 43,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 68,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 44,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 69,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 45,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 70,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 46,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 71,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 47,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 71,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 48,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 72,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 49,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 73,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 50,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 74,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 51,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 75,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 52,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 76,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 53,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 77,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 54,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 78,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 55,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 79,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 56,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 80,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 57,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 81,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 58,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 82,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 59,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 83,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 60,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 84,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 61,
      ]);

      // 41 61
      // 65 84

      //--------------------------------------------------------- Subordinacao com a preg -> campus

      DB::table('subordinacaos')->insert([  //4
        'unidadeOrgId' => 6,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 1,
      ]);

      DB::table('subordinacaos')->insert([  //5
        'unidadeOrgId' => 6,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 2,
      ]);

      DB::table('subordinacaos')->insert([  //6
        'unidadeOrgId' => 6,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 3,
      ]);

      DB::table('subordinacaos')->insert([  //7
        'unidadeOrgId' => 6,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 4,
      ]);

      DB::table('subordinacaos')->insert([  //8
        'unidadeOrgId' => 6,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 5,
      ]);

      //--------------------------------------------------------- Subordinacao com a campus -> departamentos


      DB::table('subordinacaos')->insert([  //9
        'unidadeOrgId' => 1,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 62,
      ]);

      DB::table('subordinacaos')->insert([  //10
        'unidadeOrgId' => 2,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 63,
      ]);

      DB::table('subordinacaos')->insert([  //11
        'unidadeOrgId' => 3,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 64,
      ]);

      DB::table('subordinacaos')->insert([  //12
        'unidadeOrgId' => 4,
        'moduloId' => 1,
        'unidadeOrgIdSubordinada' => 85,
      ]);

      // for sede > departamentos

      for($i = 65; $i < 85; $i++){
        DB::table('subordinacaos')->insert([  //13 - 23
          'unidadeOrgId' => 5,
          'moduloId' => 1,
          'unidadeOrgIdSubordinada' => $i,
        ]);
      }
  }
}
