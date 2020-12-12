@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Contatos</div>

                @if (session('success'))
     
                <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
 
                @endif

                <div class="card-body">

                <a href="{{ url('contato/create')  }}"> 
                    <button type="button" class="btn btn-primary">Novo</button>
                </a>
                   
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach ($contatos as $contato)

                    <tr>
                        <th scope="row">1</th>
                        <td> {{ $contato->nome }} </td>
                        <td> {{ $contato->email }} </td>
                        <td> {{ $contato->endereco }} </td>
                        <td> {{ $contato->telefone }} </td>
                        <td>
                            <a href=" {{ url('contato/edit', $contato->id) }}"> 
                                <button type="button" class="btn btn-warning">Editar</button>
                            </a>

                            <a href=" {{ url('contato/deletar', $contato->id) }}"> 
                                <button type="button" class="btn btn-danger">Deletar</button>
                            </a>

                        </td>
                        </tr>
                             
                     @endforeach                       
                     {{ $contatos->links() }}
                    
                    </tbody>
                    </table>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
