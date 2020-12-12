@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Novo contato</div>

                <div class="card-body">
                   
                <form action="{{ url('contato/update', $contato->id)}}" method="POST">
                {!! csrf_field() !!}
                <div class="form-group">
                        <label for="exampleInputPassword1">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value=" {{ $contato->nome }}" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" value=" {{ $contato->email }}" required name="email">
                       
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Telefone</label>
                        <input type="text" class="form-control" id="telefone" value=" {{ $contato->telefone }}" required name="telefone">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Endereço</label>
                        <input type="text" class="form-control" id="endereco" value=" {{ $contato->endereco }}" required name="endereco">
                    </div>
                   
 
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
