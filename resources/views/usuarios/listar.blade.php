@extends('template')

@section('titulo', 'Usuários')

@section('conteudo')
<div class="user-data m-b-30">
        <h3 class="title-3 m-b-30">
            <i class="zmdi zmdi-account-calendar"></i>Usuários Cadastrados</h3>
        

        <div class="table-responsive table-data">
                @if(session('successo'))
                <div class="alert alert-success" role="alert" style="margin:0px 10px">
                    {{session('successo')}}
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

                    <tr>
                        <!-- ID -->
                        <td><h6>1</h6></td>
                        <!-- NOME -->
                        <td>
                            <div class="table-data__info">
                                <h6>lori lynch</h6>
                                <span>
                                    <a href="#">johndoe@gmail.com</a>
                                </span>
                            </div>
                        </td>
                        <!-- ADMIN -->
                        <td>
                            <span class="role admin">admin</span>
                        </td>
                        <!-- OPÇÕES -->   
                        <td>
                            <a href="{{route('usuarios.edicao', ['id' => 1])}}">
                                <span class="more"><i class="zmdi zmdi-edit"></i></span>
                            </a>
                            <a href="{{route('usuarios.excluir', ['id' => 1])}}">
                                <span class="more"><i class="zmdi zmdi-delete"></i></span>
                            </a>
                        </td>
                    </tr>


                    <tr>
                        <td><h6>1</h6></td>
                        <td>
                            <div class="table-data__info">
                                <h6>lori lynch</h6>
                                <span>
                                    <a href="#">johndoe@gmail.com</a>
                                </span>
                            </div>
                        </td>
                        <td>
                            <span class="role user">user</span>
                        </td>
                        <td>
                            <a href="{{route('usuarios.edicao', ['id' => 1])}}">
                                <span class="more"><i class="zmdi zmdi-edit"></i></span>
                            </a>
                            <a href="{{route('usuarios.excluir', ['id' => 1])}}">
                                <span class="more"><i class="zmdi zmdi-delete"></i></span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            
        <!-- Paginação -->
        <div style="padding:10px"> aa</div>
        
        </div>
      
    </div>
@endsection