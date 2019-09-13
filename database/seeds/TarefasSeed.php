<?php

use Illuminate\Database\Seeder;
use App\Models\Tarefa;

class TarefasSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Tarefa::create([
            'descricao' => 'Teste',
            'data'      => date('Y-m-d'),
            'usuario_id'=> 1,
            'imagem'    => 'teste.png'
        ]);

        Tarefa::create([
            'descricao' => 'Teste 2',
            'data'      => date('Y-m-d', mktime(0, 0, 0, date('m')+2, date('d'), date('Y'))),
            'usuario_id'=> 1,
            'imagem'    => 'teste.png'
        ]);
    }
}
