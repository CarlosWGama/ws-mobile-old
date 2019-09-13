@extends('template')

@section('titulo', 'Tarefas')

@section('conteudo')
<div class="user-data m-b-30">
        <h3 class="title-3 m-b-30">
            <i class="zmdi zmdi-account-calendar"></i>Tarefas Cadastradas</h3>
        

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
                        <td>Descrição</td>
                        <td>Dono</td>
                        <td>Data</td>
                        <td>Opções</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tarefas as $tarefa)
                    <tr>
                        <!-- ID -->
                        <td><h6>{{$tarefa->id}}</h6></td>
                        <!-- DESCRIÇÃO -->
                        <td><h6>{{$tarefa->descricao}}</h6></td>
                        <!-- DONO -->
                        <td><h6>{{$tarefa->usuario->nome}}</h6></td>
                        <!-- DATA -->
                        <td><h6>{{$tarefa->data}}</h6></td>
                        <!-- OPÇÕES -->   
                        <td>
                            <a href="{{route('tarefas.excluir', ['id' => $tarefa->id])}}">
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