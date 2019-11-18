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
          'nome' => 'Educação a distância',
          'tipoUnidadeId' => 2,
        ]);

        DB::table('unidade_orgs')->insert([ //5
          'nome' => 'SEDE',
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

        //--------------------------------------------------------- cursos UAG

        DB::table('unidade_orgs')->insert([ //11
          'nome' => 'Bacharelado em Agronomia',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //12
          'nome' => 'Bacharelado em Ciências da Computação',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //13
          'nome' => 'Bacharelado em Zootecnia',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //14
          'nome' => 'Engenharia de Alimentos',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //15
          'nome' => 'Licenciatura em Letras',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //16
          'nome' => 'Licenciatura em Pedagogia',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //17
          'nome' => 'Medicina Veterinária',
          'tipoUnidadeId' => 5,
        ]);

        //--------------------------------------------------------- cursos UAST

        DB::table('unidade_orgs')->insert([ //18
          'nome' => 'Bacharelado em Ciências Biológicas',
          'tipoUnidadeId' => 5,
        ]);
        DB::table('unidade_orgs')->insert([ //19
          'nome' => 'Bacharelado em Ciências Econômicas',
          'tipoUnidadeId' => 5,
        ]);
        DB::table('unidade_orgs')->insert([ //20
          'nome' => 'Bacharelado em Sistemas de Informação',
          'tipoUnidadeId' => 5,
        ]);
        DB::table('unidade_orgs')->insert([ //21
          'nome' => 'Bacharelado em Agronomia',
          'tipoUnidadeId' => 5,
        ]);
        DB::table('unidade_orgs')->insert([ //22
          'nome' => 'Bacharelado em Engenharia de Pesca',
          'tipoUnidadeId' => 5,
        ]);
        DB::table('unidade_orgs')->insert([ //23
          'nome' => 'Licenciatura em Química',
          'tipoUnidadeId' => 5,
        ]);
        DB::table('unidade_orgs')->insert([ //24
          'nome' => 'Licenciatura em Letras',
          'tipoUnidadeId' => 5,
        ]);
        DB::table('unidade_orgs')->insert([ //25
          'nome' => 'Bacharelado em Administração',
          'tipoUnidadeId' => 5,
        ]);
        DB::table('unidade_orgs')->insert([ //26
          'nome' => 'Bacharelado em Zootecnia',
          'tipoUnidadeId' => 5,
        ]);

        //--------------------------------------------------------- cursos UACSA

        DB::table('unidade_orgs')->insert([ //27
          'nome' => 'Engenharia Civil',
          'tipoUnidadeId' => 5,
        ]);
        DB::table('unidade_orgs')->insert([ //28
          'nome' => 'Engenharia de Materiais',
          'tipoUnidadeId' => 5,
        ]);
        DB::table('unidade_orgs')->insert([ //29
          'nome' => 'Engenharia Elétrica',
          'tipoUnidadeId' => 5,
        ]);
        DB::table('unidade_orgs')->insert([ //30
          'nome' => 'Engenharia Eletrônica',
          'tipoUnidadeId' => 5,
        ]);
        DB::table('unidade_orgs')->insert([ //31
          'nome' => 'Engenharia Mecânica',
          'tipoUnidadeId' => 5,
        ]);

        //--------------------------------------------------------- cursos EAD

        DB::table('unidade_orgs')->insert([ //32
          'nome' => 'Bacharelado em Administração Pública',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //33
          'nome' => 'Bacharelado em Sistemas da Informação',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //34
          'nome' => 'Licenciatura em Artes Visuais com ênfase em Digitais',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //35
          'nome' => 'Licenciatura em Computação',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //36
          'nome' => 'Licenciatura em Física',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //37
          'nome' => 'Licenciatura em História',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //38
          'nome' => 'Licenciatura Interdisciplinar em Ciências Naturais',
          'tipoUnidadeId' => 5,
        ]);


        DB::table('unidade_orgs')->insert([ //39
          'nome' => 'Licenciatura em Letras',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //40
          'nome' => 'Licenciatura em Pedagogia',
          'tipoUnidadeId' => 5,
        ]);

        //--------------------------------------------------------- cursos SEDE

        DB::table('unidade_orgs')->insert([ //41
          'nome' => 'Administração',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //42
          'nome' => 'Agronomia',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //43
          'nome' => 'Licenciatura em Ciências Biológicas',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //44
          'nome' => 'Engenharia Florestal',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //45
          'nome' => 'Bacharelado em Ciências do Consumo',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //46
          'nome' => 'Bacharelado em Ciências Sociais',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //47
          'nome' => 'Bacharelado em Ciência da Computação',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //48
          'nome' => 'Licenciatura em Computação',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //49
          'nome' => 'Bacharelado em Ciências Econômicas',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //50
          'nome' => 'Licenciatura em Pedagogia',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //51
          'nome' => 'Licenciatura em Educação Física',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //52
          'nome' => 'Engenharia Agrícola e Ambiental',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //53
          'nome' => 'Bacharelado em Sistemas da Informação',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //54
          'nome' => 'Licenciatura em Física',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //55
          'nome' => 'Licenciatura em História',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //56
          'nome' => 'Licenciatura em Letras (Português e Espanhol)',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //57
          'nome' => 'Licenciatura em Matemática',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //58
          'nome' => 'Medicina Veterinária',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //59
          'nome' => 'Engenharia de Pesca',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //60
          'nome' => 'Licenciatura em Química',
          'tipoUnidadeId' => 5,
        ]);

        DB::table('unidade_orgs')->insert([ //61
          'nome' => 'Zootecnia',
          'tipoUnidadeId' => 5,
        ]);

        //--------------------------------------------------------- Departamentos

        DB::table('unidade_orgs')->insert([ //62
          'nome'      => 'Unidade Acadêmica de Garanhuns',
          'tipoUnidadeId'   => 3,
        ]);

        DB::table('unidade_orgs')->insert([ //63
          'nome'      => 'Unidade Acadêmica de Serra Talhada',
          'tipoUnidadeId'   => 3,
        ]);

        DB::table('unidade_orgs')->insert([ //64
          'nome'      => 'Unidade Acadêmica do Cabo de Santo Agostinho',
          'tipoUnidadeId'   => 3,
        ]);

        DB::table('unidade_orgs')->insert([ //65
          'nome'      => 'Administração',
          'tipoUnidadeId'   => 3,
        ]);

        DB::table('unidade_orgs')->insert([ //66
          'nome'      => 'Agronomia',
          'tipoUnidadeId'   => 3,
        ]);

        DB::table('unidade_orgs')->insert([ //67
          'nome'      => 'Biologia',
          'tipoUnidadeId'   => 3,
        ]);

        DB::table('unidade_orgs')->insert([ //68
          'nome'      => 'Ciência Florestal',
          'tipoUnidadeId'   => 3,
        ]);

        DB::table('unidade_orgs')->insert([ //69
          'nome'      => 'Ciências do Consumo',
          'tipoUnidadeId'   => 3,
        ]);

        DB::table('unidade_orgs')->insert([ //70
          'nome'      => 'Ciências Sociais',
          'tipoUnidadeId'   => 3,
        ]);

        DB::table('unidade_orgs')->insert([ //71
          'nome'      => 'Computação',
          'tipoUnidadeId'   => 3,
        ]);

        DB::table('unidade_orgs')->insert([ //72
          'nome'      => 'Economia',
          'tipoUnidadeId'   => 3,
        ]);

        DB::table('unidade_orgs')->insert([ //73
          'nome'      => 'Educação',
          'tipoUnidadeId'   => 3,
        ]);

        DB::table('unidade_orgs')->insert([ //74
          'nome'      => 'Educação Física',
          'tipoUnidadeId'   => 3,
        ]);

        DB::table('unidade_orgs')->insert([ //75
          'nome'      => 'Engenharia Agrícola',
          'tipoUnidadeId'   => 3,
        ]);

        DB::table('unidade_orgs')->insert([ //76
          'nome'      => 'Estatística e Informática',
          'tipoUnidadeId'   => 3,
        ]);

        DB::table('unidade_orgs')->insert([ //77
          'nome'      => 'Física',
          'tipoUnidadeId'   => 3,
        ]);

        DB::table('unidade_orgs')->insert([ //78
          'nome'      => 'História',
          'tipoUnidadeId'   => 3,
        ]);

        DB::table('unidade_orgs')->insert([ //79
          'nome'      => 'Letras',
          'tipoUnidadeId'   => 3,
        ]);

        DB::table('unidade_orgs')->insert([ //80
          'nome'      => 'Matemática',
          'tipoUnidadeId'   => 3,
        ]);

        DB::table('unidade_orgs')->insert([ //81
          'nome'      => 'Medicina Veterinária',
          'tipoUnidadeId'   => 3,
        ]);

        DB::table('unidade_orgs')->insert([ //82
          'nome'      => 'Pesca e Aquicultura',
          'tipoUnidadeId'   => 3,
        ]);

        DB::table('unidade_orgs')->insert([ //83
          'nome'      => 'Química',
          'tipoUnidadeId'   => 3,
        ]);

        DB::table('unidade_orgs')->insert([ //84
          'nome'      => 'Zootecnia',
          'tipoUnidadeId'   => 3,
        ]);

        DB::table('unidade_orgs')->insert([ //85
          'nome'      => 'Educação a distância',
          'tipoUnidadeId'   => 3,
        ]);

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

        // for($i = 0; $i < sizeof($cursosApi); $i++){
        //   for($j = 0; $j < sizeof($cursosApi[$i]); $j++){
        //     $aux = UnidadeOrg::where('nome', $cursosApi[$i][$j])->get();
        //     if($aux->count() == 0){
        //       DB::table('unidade_orgs')->insert([
        //       'nome' => $cursosApi[$i][$j],
        //       'tipoUnidadeId' => 5,
        //       ]);
        //     }
        //   }
        // }


        $departamentos = [
          'Unidade Acadêmica de Garanhuns',
          'Unidade Acadêmica de Serra Talhada',
          'Unidade Acadêmica do Cabo de Santo Agostinho',
          'Administração',
          'Agronomia',
          'Biologia',
          'Ciência Florestal',
          'Ciências do Consumo',
          'Ciências Sociais',
          'Computação',
          'Economia',
          'Educação',
          'Educação Física',
          'Engenharia Agrícola',
          'Estatística e Informática',
          'Física',
          'História',
          'Letras',
          'Matemática',
          'Medicina Veterinária',
          'Pesca e Aquicultura',
          'Química',
          'Zootecnia',
          'Educação a distância',
        ];

        // for ($i=0; $i < sizeof($departamentos); $i++) {
        //   DB::table('unidade_orgs')->insert([
        //     'nome'      => $departamentos[$i],
        //     'tipoUnidadeId'   => 3,
        //   ]);
        // }

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


        //--------------------------------------------------------- Tipo de Usuarios

        DB::table('tipo_usuarios')->insert([  //1
          'nome' => 'PREG',
        ]);

        DB::table('tipo_usuarios')->insert([  //2
          'nome' => 'coordenador',
        ]);

        DB::table('tipo_usuarios')->insert([  //3
          'nome' => 'coordenador geral',
        ]);

        DB::table('tipo_usuarios')->insert([  //4
          'nome' => 'candidato',
        ]);

        DB::table('tipo_usuarios')->insert([  //5
          'nome' => 'DRCA',
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
          'name' => 'Coordenador',
          'email' => 'coord@api.com',
          'password' => bcrypt('12345678'),
          'tipoUsuarioId' => 2,
          'unidadeOrgId' => 11,
        ]);

        DB::table('users')->insert([
          'name' => 'Coordenador',
          'email' => 'coord2@api.com',
          'password' => bcrypt('12345678'),
          'tipoUsuarioId' => 2,
          'unidadeOrgId' => 12,
        ]);
        DB::table('users')->insert([
          'name' => 'Coordenador',
          'email' => 'coordUAG@api.com',
          'password' => bcrypt('12345678'),
          'tipoUsuarioId' => 3,
          'unidadeOrgId' => 1,
        ]);
        DB::table('users')->insert([
          'name' => 'Pró-Reitoria de Ensino de Graduação',
          'email' => 'preg@api.com',
          'password' => bcrypt('12345678'),
          'tipoUsuarioId' => 1,
          'unidadeOrgId' => 6,
        ]);
        DB::table('users')->insert([
          'name' => 'Departamento de Registro e Controle Acadêmico',
          'email' => 'drca@api.com',
          'password' => bcrypt('12345678'),
          'tipoUsuarioId' => 5,
          'unidadeOrgId' => 6,
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
