@extends('painel.templates.cabecalho')
@section('content')
<div class="container">
@if(isset($user))
<form method="post" action="{{route('pessoas.update',$user->id)}}">
    {!! method_field('PUT') !!}
@else
<form method="post" action="{{route('pessoas.store')}}">
@endif
    
        {!! csrf_field() !!}
        <div class="panel form-group col-md-offset-3 col-md-6  ">

            @if(!empty($sucess))
            <div class="alert alert-success alert-dismissable">{{$sucess}}
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            </div>
            @endif
            @if(isset($errors) && count($errors)>0)
            <div class="alert alert-danger alert-dismissable">Preencha todos os campos para cadastro
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            </div>
            @endif
            
            <div class="h2">Formulário de usuário</div>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control col-md-1" placeholder="my name" name="name" id="name" value="{{$user->name or ''}}">
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control col-md-1" placeholder="email@email.com" name="email" id="email" value="{{$user->email or ''}}">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control col-md-1" placeholder="**********" name="password" id="password" value="{{$user->password or ''}}">
            </div>

            <div class="form-group"><br>                  
                <button type="submit" class="btn btn-primary form-group">Cadastrar</button  
            </div>
        </div>
    </form>
</div>
@endsection