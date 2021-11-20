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
          'nome' => 'Universidade Federal do Agreste de Pernambuco',
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
          'nome'      => 'Universidade Federal do Agreste de Pernambuco',
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

        //------------------------------------------------ UnidadeOrg modulo 2

        DB::table('unidade_orgs')->insert([ //86
          'nome'      => 'Coordenação de Ações Pedagógicas e Regulação',
          'tipoUnidadeId'   => 4,
        ]);

        DB::table('unidade_orgs')->insert([ //87
          'nome'      => 'Coordenação Geral de Estágios',
          'tipoUnidadeId'   => 4,
        ]);

        DB::table('unidade_orgs')->insert([ //88
          'nome'      => 'Coordenação de Planejamento e Gestão Acadêmica',
          'tipoUnidadeId'   => 4,
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



        $departamentos = [
          'Universidade Federal do Agreste de Pernambuco',
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

        DB::table('tipo_usuarios')->insert([  //6
          'nome' => 'CAPR',
        ]);

        DB::table('tipo_usuarios')->insert([  //7
          'nome' => 'CGE',
        ]);

        DB::table('tipo_usuarios')->insert([  //8
          'nome' => 'CPGA',
        ]);

        //--------------------------------------------------------- Modulos

        DB::table('modulos')->insert([  //1
          'nome' => 'extravestibular',
        ]);

        DB::table('modulos')->insert([  //2
          'nome' => 'ppc',
        ]);

        //--------------------------------------------------------- Users

        for($i = 1; $i < 62; $i++){
           DB::table('users')->insert([
          'name' => 'Coordenador',
          'email' => 'coord' . $i . '@api.com',
          'password' => bcrypt('12345678'),
          'tipoUsuarioId' => 2,
          'unidadeOrgId' => 11,
          ]);
        }

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

        DB::table('users')->insert([
          'name' => 'CAPR',
          'email' => 'capr@api.com',
          'password' => bcrypt('12345678'),
          'tipoUsuarioId' => 6,
          'unidadeOrgId' => 86,
        ]);

        DB::table('users')->insert([
          'name' => 'CGE',
          'email' => 'cge@api.com',
          'password' => bcrypt('12345678'),
          'tipoUsuarioId' => 7,
          'unidadeOrgId' => 87,
        ]);

        DB::table('users')->insert([
          'name' => 'CPGA',
          'email' => 'cpga@api.com',
          'password' => bcrypt('12345678'),
          'tipoUsuarioId' => 8,
          'unidadeOrgId' => 88,
        ]);

        $this->call(Modulo1Seeder::class);
        $this->call(Modulo2Seeder::class);

    }
}
