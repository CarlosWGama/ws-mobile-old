<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/**
 * Controller responsável pela manipulação dos dados do usuários 
 */
class UsuariosController extends Controller {
    
    private $dados = ['menu' => 'usuarios'];

    /** Lista o usuários */
    public function index() {
        $dados['usuarios'] = [

        ];
        return view('usuarios.listar', $this->dados);
    }

    /** 
     * Abre a tela cadastrar novo usuário
     */
    public function novo() {
        return view('usuarios.novo', $this->dados);
    }

    /** 
     * Tenta salvar um novo usuário
     */
    public function cadastrar(Request $request) {

    }

    /** 
     * Abre a tela de editar usuário
     * @param $id id do usuário
     */
    public function edicao(int $id) {
        return view('usuarios.edicao', $this->dados);
    }
    
    /** Tenta editar um usuário e salvar no banco
     * @param $id id do usuário
     */
    public function editar(Request $request) {

    }
    
    /** Remove um usuário
     * @param $id id do usuário
     */
    public function excluir(int $id) {
        return redirect()->route('usuarios.listar')->with('successo', 'Usuário excluido');
    }
}
