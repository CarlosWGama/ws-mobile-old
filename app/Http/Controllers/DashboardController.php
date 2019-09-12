<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Tela Inicial do Admin
 */
class DashboardController extends Controller {
    private $dados = ['menu' => 'dashboard'];

    /** Tela Inicial do Dashboard */
    public function index() {
        $this->dados['usuariosCadastrados'] = 10;
        $this->dados['tarefasCadastradas'] = 200;
        return view('dashboard.index', $this->dados);
    }
}
