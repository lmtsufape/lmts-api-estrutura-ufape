<?php

use Illuminate\Database\Seeder;

class Modulo2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //--------------------------------------------------------- Subordinacao

      for($i = 11; $i < 18; $i++){
        DB::table('subordinacaos')->insert([  //1
          'unidadeOrgId' => 62,
          'moduloId' => 2,
          'unidadeOrgIdSubordinada' => $i,
        ]);
      }

      for($i = 18; $i < 27; $i++){
        DB::table('subordinacaos')->insert([  //2
          'unidadeOrgId' => 63,
          'moduloId' => 2,
          'unidadeOrgIdSubordinada' => $i,
        ]);
      }

      for($i = 27; $i < 32; $i++){
        DB::table('subordinacaos')->insert([  //3
          'unidadeOrgId' => 64,
          'moduloId' => 2,
          'unidadeOrgIdSubordinada' => $i,
        ]);
      }

      for($i = 32; $i < 41; $i++){
        DB::table('subordinacaos')->insert([  //3
          'unidadeOrgId' => 85,
          'moduloId' => 2,
          'unidadeOrgIdSubordinada' => $i,
        ]);
      }

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 65,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 41,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 66,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 42,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 67,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 43,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 68,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 44,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 69,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 45,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 70,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 46,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 71,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 47,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 71,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 48,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 72,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 49,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 73,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 50,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 74,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 51,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 75,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 52,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 76,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 53,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 77,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 54,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 78,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 55,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 79,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 56,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 80,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 57,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 81,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 58,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 82,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 59,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 83,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 60,
      ]);

      DB::table('subordinacaos')->insert([  //3
        'unidadeOrgId' => 84,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 61,
      ]);

      // 41 61
      // 65 84

      //--------------------------------------------------------- Subordinacao com a preg -> campus

      DB::table('subordinacaos')->insert([  //4
        'unidadeOrgId' => 6,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 1,
      ]);

      DB::table('subordinacaos')->insert([  //5
        'unidadeOrgId' => 6,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 2,
      ]);

      DB::table('subordinacaos')->insert([  //6
        'unidadeOrgId' => 6,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 3,
      ]);

      DB::table('subordinacaos')->insert([  //7
        'unidadeOrgId' => 6,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 4,
      ]);

      DB::table('subordinacaos')->insert([  //8
        'unidadeOrgId' => 6,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 5,
      ]);

      //--------------------------------------------------------- Subordinacao com a campus -> departamentos


      DB::table('subordinacaos')->insert([  //9
        'unidadeOrgId' => 1,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 62,
      ]);

      DB::table('subordinacaos')->insert([  //10
        'unidadeOrgId' => 2,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 63,
      ]);

      DB::table('subordinacaos')->insert([  //11
        'unidadeOrgId' => 3,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 64,
      ]);

      DB::table('subordinacaos')->insert([  //12
        'unidadeOrgId' => 4,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 85,
      ]);

      // for sede > departamentos

      for($i = 65; $i < 85; $i++){
        DB::table('subordinacaos')->insert([  //13 - 23
          'unidadeOrgId' => 5,
          'moduloId' => 2,
          'unidadeOrgIdSubordinada' => $i,
        ]);
      }

      //-------------------------------------------------- Subordinacao coordenações PREG

      DB::table('subordinacaos')->insert([  //13 - 23
        'unidadeOrgId' => 86,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 6,
      ]);

      DB::table('subordinacaos')->insert([  //13 - 23
        'unidadeOrgId' => 87,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 6,
      ]);

      DB::table('subordinacaos')->insert([  //13 - 23
        'unidadeOrgId' => 88,
        'moduloId' => 2,
        'unidadeOrgIdSubordinada' => 6,
      ]);
    }
}
