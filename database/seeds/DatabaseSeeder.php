<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $cursos = [ 'Unidade Academica de Garanhuns'    => ['Bacharelado em Agronomia',
                                                                      'Bacharelado em Ciências da Computação',
                                                                      'Bacharelado em Zootecnia',
                                                                      'Engenharia de Alimentos',
                                                                      'Licenciatura em Letras',
                                                                      'Licenciatura em Pedagogia',
                                                                      'Medicina Veterinária',
                                                                     ],
                    'Unidade Academica de Serra Talhada' => ['Bacharelado em Ciências Biológicas',
                                                                      'Bacharelado em Ciências Econômicas',
                                                                      'Bacharelado em Sistemas de Informação',
                                                                      'Bacharelado em Agronomia',
                                                                      'Bacharelado em Engenharia de Pesca',
                                                                      'Licenciatura em Química',
                                                                      'Licenciatura em Letras',
                                                                      'Bacharelado em Administração',
                                                                      'Bacharelado em Zootecnia',
                                                                     ],
                  ];

        $i = 0;
        for ($i=0; $i < sizeof($cursos['Unidade Academica de Garanhuns']); $i++) {
          DB::table('cursos')->insert([
            'nome'      => $cursos['Unidade Academica de Garanhuns'][$i],
            'unidade'   => 'Unidade Academica de Garanhuns',
          ]);
        }
        $i = 0;
        for ($i=0; $i < sizeof($cursos['Unidade Academica de Serra Talhada']); $i++) {
          DB::table('cursos')->insert([
            'nome'      => $cursos['Unidade Academica de Serra Talhada'][$i],
            'unidade'   => 'Unidade Academica de Serra Talhada',
          ]);
        }
        DB::table('users')->insert([
          'name' => 'asdasd',
          'email' => 'coord@api.com',
          'password' => bcrypt('12345678'),
          'tipo' => 'coordenador',
          'cursoId' => 1,
        ]);
        DB::table('users')->insert([
          'name' => 'asdasd',
          'email' => 'coord2@api.com',
          'password' => bcrypt('12345678'),
          'tipo' => 'coordenador',
          'cursoId' => 2,
        ]);
        DB::table('users')->insert([
          'name' => 'asdasd',
          'email' => 'preg@api.com',
          'password' => bcrypt('12345678'),
          'tipo' => 'PREG',
          'cursoId' => 1,
        ]);
        DB::table('users')->insert([
          'name' => 'asdasd',
          'email' => 'drca@api.com',
          'password' => bcrypt('12345678'),
          'tipo' => 'DRCA',
          'cursoId' => 1,
        ]);


    }
}
