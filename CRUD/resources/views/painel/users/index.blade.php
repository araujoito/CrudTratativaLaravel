@extends('painel.templates.cabecalho')
@section('content')
<title>Home</title>
<h2 class='listUser'>Lista de usuários</h2>
<div class="container">
    <div class="row col-md-offset-2 col-lg-8">
        @if(!empty($sucess))
            <div class="alert alert-success alert-dismissable">{{$sucess}}
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            </div>
            @endif
        <div>
            <table class="table table-striped table-bordered" >
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><a href="{{url("/painel/pessoas/destroy/{$user->id}")}}" class="alert-danger">deletar
                            <span class="alert-danger glyphicon glyphicon-trash"></span>                                    
                        </a>   
                        <a href="{{url("/painel/pessoas/{$user->id}/edit")}}" class="alert-info">editar
                            <span class="glyphicon glyphicon-edit"></span>                                    
                        </a> 
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection
