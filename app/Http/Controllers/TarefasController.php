<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarefasController extends Controller {
    
    private $dados = ['menu' => 'tarefas'];

    /** Tela inicial com a listagem de tarefas */
    public function index() {
        $this->dados['tarefas'] = [
            (object) ['id' => 1, 'descricao' => 'teste', 'data' => '20/10/2020', 'usuario' => (object)['nome' => 'Carlos W. Gama']],
            (object) ['id' => 2, 'descricao' => 'asdadasd', 'data' => '10/10/2010', 'usuario' => (object)['nome' => 'João']]
        ];
        return view('tarefas.listar', $this->dados);
    }   

    /**
     * Remove um tarefa cadastrada
     * @param $id id da tarefa
     */
    public function excluir(int $id) {
        return redirect()->route('tarefas.listar')->with('sucesso', 'Tarefa excluida');
    }

}
