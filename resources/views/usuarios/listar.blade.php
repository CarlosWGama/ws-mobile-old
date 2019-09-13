@extends('template')

@section('titulo', 'Usuários')

@section('conteudo')
<div class="user-data m-b-30">
        <h3 class="title-3 m-b-30">
            <i class="zmdi zmdi-account-calendar"></i>Usuários Cadastrados</h3>
        

        <div class="table-responsive table-data">
                @if(session('sucesso'))
                <div class="alert alert-success" role="alert" style="margin:0px 10px">
                    {{session('sucesso')}}
                </div>
                @endif
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Admin</td>
                        <td>Opções</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $usuario)
                    <tr>
                        <!-- ID -->
                        <td><h6>{{$usuario->id}}</h6></td>
                        <!-- NOME -->
                        <td>
                            <div class="table-data__info">
                                <h6>{{$usuario->nome}}</h6>
                                <span>
                                    <a href="#">{{$usuario->email}}</a>
                                </span>
                            </div>
                        </td>
                        <!-- ADMIN -->
                        <td>
                            @if($usuario->admin)
                            <span class="role admin">admin</span>
                            @else
                            <span class="role user">Comum</span>
                            @endif
                        </td>
                        <!-- OPÇÕES -->   
                        <td>
                            <a href="{{route('usuarios.edicao', ['id' => $usuario->id])}}">
                                <span class="more"><i class="zmdi zmdi-edit"></i></span>
                            </a>
                            <a href="{{route('usuarios.excluir', ['id' => $usuario->id])}}">
                                <span class="more"><i class="zmdi zmdi-delete"></i></span>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        <!-- Paginação -->
        <div style="padding:10px"> aa</div>
        
        </div>
      
    </div>
@endsection