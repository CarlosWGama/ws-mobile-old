<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/**
 * Tela resposável por manipular as ações das telas de Login
 */
class LoginController extends Controller {
    
    /** Abre a tela Inicial de Login */
    public function index() {
        return view('login');
    }

    /** Faz com o que o usuário tente realizar o login */
    public function logar(Request $request) {
        if ($request->senha == '123456') {
            session(['usuario' => (object)['id' => 1, 'nome' => 'Carlos W. Gama', 'email' => 'carloswgama@gmail.com', 'admin' => true]]);
            return redirect()->route('dashboard');
        } else
            return redirect()->back()->with(['erro' => 'Login ou Senha incorreta']);
    }

    /** Função para deslogar o usuário */
    public function logout(Request $request) {
        $request->session()->flush();
        return redirect()->route('login');
    }
}
