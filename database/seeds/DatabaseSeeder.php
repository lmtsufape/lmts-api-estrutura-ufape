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
        $cursos = [ 'Unidade Academica de Garanhuns'                => [
                                                                        'Bacharelado em Agronomia',
                                                                        'Bacharelado em Ciências da Computação',
                                                                        'Bacharelado em Zootecnia',
                                                                        'Engenharia de Alimentos',
                                                                        'Licenciatura em Letras',
                                                                        'Licenciatura em Pedagogia',
                                                                        'Medicina Veterinária',
                                                                       ],
                    'Unidade Academica de Serra Talhada'            => [
                                                                        'Bacharelado em Ciências Biológicas',
                                                                        'Bacharelado em Ciências Econômicas',
                                                                        'Bacharelado em Sistemas de Informação',
                                                                        'Bacharelado em Agronomia',
                                                                        'Bacharelado em Engenharia de Pesca',
                                                                        'Licenciatura em Química',
                                                                        'Licenciatura em Letras',
                                                                        'Bacharelado em Administração',
                                                                        'Bacharelado em Zootecnia',
                                                                       ],
                    'Unidade Academica do Cabo de Santo Agostinho' => [
                                                                        'Engenharia Civil',
                                                                        'Engenharia de Materiais',
                                                                        'Engenharia Elétrica',
                                                                        'Engenharia Eletrônica',
                                                                        'Engenharia Mecânica',

                                                                      ],
                    'Educação a distância'                          => [
                                                                        'Bacharelado em Administração Pública',
                                                                        'Bacharelado em Sistemas da Informação',
                                                                        'Licenciatura em Artes Visuais com ênfase em Digitais',
                                                                        'Licenciatura em Computação',
                                                                        'Licenciatura em Física',
                                                                        'Licenciatura em História',
                                                                        'Licenciatura Interdisciplinar em Ciências Naturais',
                                                                        'Licenciatura em Letras',
                                                                        'Licenciatura em Pedagogia',
                                                                      ],
                    'Administração'                                 => ['Administração'],
                    'Agronomia'                                     => ['Agronomia'],
                    'Biologia'                                      => ['Licenciatura em Ciências Biológicas'],
                    'Ciência Florestal'                             => ['Engenharia Florestal'],
                    'Ciências do Consumo'                           => ['Bacharelado em Ciências do Consumo'],
                    'Ciências Sociais'                              => ['Bacharelado em Ciências Sociais'],
                    'Computação'                                    => [
                                                                        'Bacharelado em Ciência da Computação',
                                                                        'Licenciatura em Computação'
                                                                       ],
                    'Economia'                                      => ['Bacharelado em Ciências Econômicas'],
                    'Educação'                                      => ['Licenciatura em Pedagogia'],
                    'Educação Física'                               => ['Licenciatura em Educação Física'],
                    'Engenharia Agrícola'                           => ['Engenharia Agrícola e Ambiental'],
                    'Estatística e Informática'                     => ['Bacharelado em Sistemas da Informação'],
                    'Física'                                        => ['Licenciatura em Física'],
                    'História'                                      => ['Licenciatura em História'],
                    'Letras'                                        => ['Licenciatura em Letras (Português e Espanhol)'],
                    'Matemática'                                    => ['Licenciatura em Matemática'],
                    'Medicina Veterinária'                          => ['Medicina Veterinária'],
                    'Pesca e Aquicultura'                           => ['Engenharia de Pesca'],
                    'Química'                                       => ['Licenciatura em Química'],
                    'Zootecnia'                                     => ['Zootecnia'],

                  ];
        $departamentos = ['Administração', 'Agronomia', 'Biologia', 'Ciência Florestal', 'Ciências do Consumo',
                          'Ciências Sociais', 'Computação', 'Economia', 'Educação', 'Educação Física', 'Engenharia Agrícola',
                          'Estatística e Informática', 'Física', 'História', 'Letras', 'Matemática', 'Medicina Veterinária',
                          'Pesca e Aquicultura', 'Química', 'Zootecnia',
                        ];

        DB::table('campuses')->insert([
          'nome' => 'UAG',
        ]);
        DB::table('campuses')->insert([
          'nome' => 'UAST',
        ]);
        DB::table('campuses')->insert([
          'nome' => 'UACSA',
        ]);
        DB::table('campuses')->insert([
          'nome' => 'EAD',
        ]);
        DB::table('campuses')->insert([
          'nome' => 'SEDE',
        ]);

        DB::table('departamentos')->insert([
          'nome' => 'Unidade Academica de Garanhuns',
          'campusId' => 1,
        ]);
        DB::table('departamentos')->insert([
          'nome' => 'Unidade Academica de Serra Talhada',
          'campusId' => 2,
        ]);
        DB::table('departamentos')->insert([
          'nome' => 'Unidade Academica do Cabo de Santo Agostinho',
          'campusId' => 3,
        ]);
        DB::table('departamentos')->insert([
          'nome' => 'Educação a distância',
          'campusId' => 4,
        ]);

        for ($i=0; $i < sizeof($departamentos); $i++) {
          DB::table('departamentos')->insert([
            'nome'      => $departamentos[$i],
            'campusId'   => 5,
          ]);
        }

        for ($i=0; $i < sizeof($cursos['Unidade Academica de Garanhuns']); $i++) {
          DB::table('cursos')->insert([
            'nome'      => $cursos['Unidade Academica de Garanhuns'][$i],
            'departamentoId'   => 1,
          ]);
        }

        for ($i=0; $i < sizeof($cursos['Unidade Academica de Serra Talhada']); $i++) {
          DB::table('cursos')->insert([
            'nome'      => $cursos['Unidade Academica de Serra Talhada'][$i],
            'departamentoId'   => 2,
          ]);
        }

        for ($i=0; $i < sizeof($cursos['Unidade Academica do Cabo de Santo Agostinho']); $i++) {
          DB::table('cursos')->insert([
            'nome'      => $cursos['Unidade Academica do Cabo de Santo Agostinho'][$i],
            'departamentoId'   => 3,
          ]);
        }

        for ($i=0; $i < sizeof($cursos['Educação a distância']); $i++) {
          DB::table('cursos')->insert([
            'nome'      => $cursos['Educação a distância'][$i],
            'departamentoId'   => 4,
          ]);
        }
        for ($j=0; $j < sizeof($departamentos); $j++) {
          for ($i=0; $i < sizeof($cursos[$departamentos[$j]]); $i++) {
            $idDep = DB::table('departamentos')->where('nome', $departamentos[$j])->select('id')->first();

            DB::table('cursos')->insert([
              'nome'      => $cursos[$departamentos[$j]][$i],
              'departamentoId'   => $idDep->id,
            ]);
          }
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
