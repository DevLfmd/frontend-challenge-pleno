<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('developers')->insert(array(
            [
                'id' => 0,
                'name' => 'Luiz Fernando Miranda Dias',
                'age' => '23',
                'description' => 'O desenvolvedor full stack é o profissional habilitado para compreender e operar em todas as camadas do desenvolvimento de um projeto, desde a criação de servidores internos até interfaces de comunicação com o usuário final.',
                'img' => 'https://exame.com/wp-content/uploads/2021/02/bill.jpg',
                'created_at' => '2021-04-12 13:46:47',
                'updated_at' => '2021-04-12 13:46:47'
            ],
            [
                'id' => 1,
                'name' => 'Júlia Moura Garcia',
                'age' => '21',
                'description' => 'O Desenvolvedor mobile é o profissional que tem habilidades para criar um projeto de elaboração de aplicativo de celular, para qualquer finalidade, inclusive a educação.',
                'img' => 'https://s2.glbimg.com/LC0BkSbOs0672gk85aQQDlysN4c=/e.glbimg.com/og/ed/f/original/2019/04/11/captura_de_tela_2019-04-11_as_13.13.44.png',
                'created_at' => '2021-04-12 13:46:47',
                'updated_at' => '2021-04-12 13:46:47'
            ],
            [
                'id' => 2,
                'name' => 'Ana Silva',
                'age' => '32',
                'description' => 'Administrador de banco de dados, comumente chamado de DBA (sigla em inglês de Database administrator), é o profissional responsável por gerenciar, instalar, configurar, atualizar e monitorar um banco de dados ou sistemas de bancos de dados.',
                'img' => 'https://live.staticflickr.com/6129/6195500334_91c7240acd_b.jpg',
                'created_at' => '2021-04-12 13:46:47',
                'updated_at' => '2021-04-12 13:46:47'
            ],
            [
                'id' => 3,
                'name' => 'Josimar Júnior',
                'age' => '25',
                'description' => 'A infraestrutura de TI consiste nos componentes e serviços que fornecem a base para sustentar todos os sistemas de informação de uma organização.',
                'img' => 'https://s2.glbimg.com/hOQeWyRlurqGohHz2rDzpirVqgo=/e.glbimg.com/og/ed/f/original/2021/06/26/gettyimages-1229892421.jpg',
                'created_at' => '2021-04-12 13:46:47',
                'updated_at' => '2021-04-12 13:46:47'
            ]
        ));
    }
}
