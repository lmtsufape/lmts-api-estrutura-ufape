<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use lmtsApi\UnidadeOrg;

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
        //--------------------------------------------------------- Tipo de unidades
        DB::table('tipo_unidades')->insert([  // 1
          'nome' => 'Pró-reitoria',
        ]);

        DB::table('tipo_unidades')->insert([  //2
          'nome' => 'Campus',
        ]);

        DB::table('tipo_unidades')->insert([  //3
          'nome' => 'Departamento',
        ]);

        DB::table('tipo_unidades')->insert([  //4
          'nome' => 'Coordenação',
        ]);

        DB::table('tipo_unidades')->insert([  //5
          'nome' => 'Curso de Graduação',
        ]);

        DB::table('tipo_unidades')->insert([  //6
          'nome' => 'Universidade'
        ]);

        DB::table('tipo_unidades')->insert([  //7
          'nome' => 'Candidato'
        ]);

        //--------------------------------------------------------- Unidades Org

        DB::table('unidade_orgs')->insert([ //1
          'nome' => 'Unidade Acadêmica de Garanhuns',
          'tipoUnidadeId' => 2,
        ]);

        DB::table('unidade_orgs')->insert([ //2
          'nome' => 'Unidade Acadêmica de Serra Talhada',
          'tipoUnidadeId' => 2,
        ]);

        DB::table('unidade_orgs')->insert([ //3
          'nome' => 'Unidade Acadêmica do Cabo de Santo Agostinho',
          'tipoUnidadeId' => 2,
        ]);

        DB::table('unidade_orgs')->insert([ //4
          'nome' => 'SEDE',
          'tipoUnidadeId' => 2,
        ]);

        DB::table('unidade_orgs')->insert([ //5
          'nome' => 'Educação a distância',
          'tipoUnidadeId' => 2,
        ]);

        DB::table('unidade_orgs')->insert([ //6
          'nome' => 'Pró-reitoria de Ensino de Graduação',
          'tipoUnidadeId' => 1,
        ]);

        DB::table('unidade_orgs')->insert([ //7
          'nome' => 'Coordenador de Curso',
          'tipoUnidadeId' => 4,
        ]);

        DB::table('unidade_orgs')->insert([ //8
          'nome' => 'Universidade Federal Rural de Pernambuco',
          'tipoUnidadeId' => 6,
        ]);

        DB::table('unidade_orgs')->insert([ //9
          'nome' => 'Candidato Extravestibular',
          'tipoUnidadeId' => 7,
        ]);

        DB::table('unidade_orgs')->insert([ //10
          'nome' => 'Coordenador de Geral',
          'tipoUnidadeId' => 4,
        ]);

        $departamentos = [
          'Administração', 'Agronomia', 'Biologia', 'Ciência Florestal', 'Ciências do Consumo',
          'Ciências Sociais', 'Computação', 'Economia', 'Educação', 'Educação Física', 'Engenharia Agrícola',
          'Estatística e Informática', 'Física', 'História', 'Letras', 'Matemática', 'Medicina Veterinária',
          'Pesca e Aquicultura', 'Química', 'Zootecnia',
        ];

        for ($i=0; $i < sizeof($departamentos); $i++) {
          DB::table('unidade_orgs')->insert([
            'nome'      => $departamentos[$i],
            'tipoUnidadeId'   => 3,
          ]);
        }

        $cursosApi = [
          [
            'Bacharelado em Agronomia',
            'Bacharelado em Ciências da Computação',
            'Bacharelado em Zootecnia',
            'Engenharia de Alimentos',
            'Licenciatura em Letras',
            'Licenciatura em Pedagogia',
            'Medicina Veterinária',
          ],
          [
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
          [
            'Engenharia Civil',
            'Engenharia de Materiais',
            'Engenharia Elétrica',
            'Engenharia Eletrônica',
            'Engenharia Mecânica',
          ],
          [
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
            ['Administração'],
            ['Agronomia'],
            ['Licenciatura em Ciências Biológicas'],
            ['Engenharia Florestal'],
            ['Bacharelado em Ciências do Consumo'],
            ['Bacharelado em Ciências Sociais'],
            [
            'Bacharelado em Ciência da Computação',
            'Licenciatura em Computação'
            ],
            ['Bacharelado em Ciências Econômicas'],
            ['Licenciatura em Pedagogia'],
            ['Licenciatura em Educação Física'],
            ['Engenharia Agrícola e Ambiental'],
            ['Bacharelado em Sistemas da Informação'],
            ['Licenciatura em Física'],
            ['Licenciatura em História'],
            ['Licenciatura em Letras (Português e Espanhol)'],
            ['Licenciatura em Matemática'],
            ['Medicina Veterinária'],
            ['Engenharia de Pesca'],
            ['Licenciatura em Química'],
            ['Zootecnia'],
            ];

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

        for($i = 0; $i < sizeof($cursosApi); $i++){
          for($j = 0; $j < sizeof($cursosApi[$i]); $j++){
            $aux = UnidadeOrg::where('nome', $cursosApi[$i][$j])->get();
            if($aux->count() == 0){
              DB::table('unidade_orgs')->insert([
              'nome' => $cursosApi[$i][$j],
              'tipoUnidadeId' => 5,
              ]);
            }
          }
        }

        //--------------------------------------------------------- Tipo de Usuarios

        DB::table('tipo_usuarios')->insert([  //1
          'nome' => 'PREG',
          'unidadeOrgId' => 6,
        ]);

        DB::table('tipo_usuarios')->insert([  //2
          'nome' => 'coord',
          'unidadeOrgId' => 7,
        ]);

        DB::table('tipo_usuarios')->insert([  //3
          'nome' => 'coord geral',
          'unidadeOrgId' => 10,
        ]);

        DB::table('tipo_usuarios')->insert([  //4
          'nome' => 'candidato',
          'unidadeOrgId' => 9,
        ]);

        //--------------------------------------------------------- Modulos

        DB::table('modulos')->insert([  //1
          'nome' => 'extravestibular',
        ]);

        //--------------------------------------------------------- Ações

        DB::table('acaos')->insert([  //1
          'nome' => 'gerenciar editais',
          'moduloId' => 1,
        ]);
        DB::table('acaos')->insert([  //2
          'nome' => 'classificar inscrições',
          'moduloId' => 1,
        ]);
        DB::table('acaos')->insert([  //3
          'nome' => 'homologar inscrições',
          'moduloId' => 1,
        ]);
        DB::table('acaos')->insert([  //4
          'nome' => 'homologar recursos',
          'moduloId' => 1,
        ]);
        DB::table('acaos')->insert([  //5
          'nome' => 'homologar isenções',
          'moduloId' => 1,
        ]);
        DB::table('acaos')->insert([  //6
          'nome' => 'cadastrar recursos',
          'moduloId' => 1,
        ]);
        DB::table('acaos')->insert([  //7
          'nome' => 'cadastrar inscrições',
          'moduloId' => 1,
        ]);
        DB::table('acaos')->insert([  //8
          'nome' => 'cadastrar isenções',
          'moduloId' => 1,
        ]);
        DB::table('acaos')->insert([  //9
          'nome' => 'listar cursos',
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
        DB::table('controle_de_acessos')->insert([  //10
          'acaoId' => 9,
          'tipoUsuarioId' => 1,
          'nivel' => 3,
        ]);
        DB::table('controle_de_acessos')->insert([  //11
          'acaoId' => 9,
          'tipoUsuarioId' => 3,
          'nivel' => 2,
        ]);
        DB::table('controle_de_acessos')->insert([  //12
          'acaoId' => 9,
          'tipoUsuarioId' => 2,
          'nivel' => 1,
        ]);

        //--------------------------------------------------------- Users

        DB::table('users')->insert([
          'name' => 'asdasd',
          'email' => 'coord@api.com',
          'password' => bcrypt('12345678'),
          'tipoUsuarioId' => 2,
        ]);
        DB::table('users')->insert([
          'name' => 'asdasd',
          'email' => 'coord2@api.com',
          'password' => bcrypt('12345678'),
          'tipoUsuarioId' => 2,
        ]);
        DB::table('users')->insert([
          'name' => 'asdasd',
          'email' => 'coordUAG@api.com',
          'password' => bcrypt('12345678'),
          'tipoUsuarioId' => 3,
        ]);
        DB::table('users')->insert([
          'name' => 'asdasd',
          'email' => 'preg@api.com',
          'password' => bcrypt('12345678'),
          'tipoUsuarioId' => 1,
        ]);
        DB::table('users')->insert([
          'name' => 'asdasd',
          'email' => 'drca@api.com',
          'password' => bcrypt('12345678'),
          'tipoUsuarioId' => 1,
        ]);

        //--------------------------------------------------------- Subordinacao

        for($i = 0; $i < sizeof($cursos['Unidade Academica de Garanhuns']); $i++){
          $curso = DB::table('unidade_orgs')->where('nome', $cursos['Unidade Academica de Garanhuns'][$i])->first();

          DB::table('subordinacaos')->insert([  //1
            'unidadeOrgId' => 10,
            'moduloId' => 1,
            'unidadeOrgIdSubordinada' => $curso->id,
          ]);
        }

        DB::table('subordinacaos')->insert([  //1
          'unidadeOrgId' => 1,
          'moduloId' => 1,
          'unidadeOrgIdSubordinada' => 10,
        ]);















// API ANTIGA------------------------------------------------------------------------------------------------------
        //
        // DB::table('campuses')->insert([
        //   'nome' => 'UAG',
        // ]);
        // DB::table('campuses')->insert([
        //   'nome' => 'UAST',
        // ]);
        // DB::table('campuses')->insert([
        //   'nome' => 'UACSA',
        // ]);
        // DB::table('campuses')->insert([
        //   'nome' => 'EAD',
        // ]);
        // DB::table('campuses')->insert([
        //   'nome' => 'SEDE',
        // ]);
        //
        // DB::table('departamentos')->insert([
        //   'nome' => 'Unidade Academica de Garanhuns',
        //   'campusId' => 1,
        // ]);
        // DB::table('departamentos')->insert([
        //   'nome' => 'Unidade Academica de Serra Talhada',
        //   'campusId' => 2,
        // ]);
        // DB::table('departamentos')->insert([
        //   'nome' => 'Unidade Academica do Cabo de Santo Agostinho',
        //   'campusId' => 3,
        // ]);
        // DB::table('departamentos')->insert([
        //   'nome' => 'Educação a distância',
        //   'campusId' => 4,
        // ]);
        //
        //
        // for ($i=0; $i < sizeof($departamentos); $i++) {
        //   DB::table('departamentos')->insert([
        //     'nome'      => $departamentos[$i],
        //     'campusId'   => 5,
        //   ]);
        // }
        //
        // for ($i=0; $i < sizeof($cursos['Unidade Academica de Garanhuns']); $i++) {
        //   DB::table('cursos')->insert([
        //     'nome'      => $cursos['Unidade Academica de Garanhuns'][$i],
        //     'departamentoId'   => 1,
        //   ]);
        // }
        //
        // for ($i=0; $i < sizeof($cursos['Unidade Academica de Serra Talhada']); $i++) {
        //   DB::table('cursos')->insert([
        //     'nome'      => $cursos['Unidade Academica de Serra Talhada'][$i],
        //     'departamentoId'   => 2,
        //   ]);
        // }
        //
        // for ($i=0; $i < sizeof($cursos['Unidade Academica do Cabo de Santo Agostinho']); $i++) {
        //   DB::table('cursos')->insert([
        //     'nome'      => $cursos['Unidade Academica do Cabo de Santo Agostinho'][$i],
        //     'departamentoId'   => 3,
        //   ]);
        // }
        //
        // for ($i=0; $i < sizeof($cursos['Educação a distância']); $i++) {
        //   DB::table('cursos')->insert([
        //     'nome'      => $cursos['Educação a distância'][$i],
        //     'departamentoId'   => 4,
        //   ]);
        // }
        // for ($j=0; $j < sizeof($departamentos); $j++) {
        //   for ($i=0; $i < sizeof($cursos[$departamentos[$j]]); $i++) {
        //     $idDep = DB::table('departamentos')->where('nome', $departamentos[$j])->select('id')->first();
        //
        //     DB::table('cursos')->insert([
        //       'nome'      => $cursos[$departamentos[$j]][$i],
        //       'departamentoId'   => $idDep->id,
        //     ]);
        //   }
        // }
        //
        //
        //
        // DB::table('users')->insert([
        //   'name' => 'asdasd',
        //   'email' => 'coord@api.com',
        //   'password' => bcrypt('12345678'),
        //   'tipo' => 'coordenador',
        //   'cursoId' => 1,
        // ]);
        // DB::table('users')->insert([
        //   'name' => 'asdasd',
        //   'email' => 'coord2@api.com',
        //   'password' => bcrypt('12345678'),
        //   'tipo' => 'coordenador',
        //   'cursoId' => 2,
        // ]);
        // DB::table('users')->insert([
        //   'name' => 'asdasd',
        //   'email' => 'preg@api.com',
        //   'password' => bcrypt('12345678'),
        //   'tipo' => 'PREG',
        //   'cursoId' => 1,
        // ]);
        // DB::table('users')->insert([
        //   'name' => 'asdasd',
        //   'email' => 'drca@api.com',
        //   'password' => bcrypt('12345678'),
        //   'tipo' => 'DRCA',
        //   'cursoId' => 1,
        // ]);


    }
}
