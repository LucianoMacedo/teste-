@extends('Layout.base')
@section('title','Página inicial')
@section('content')
    <div class="container">
    <h1 style="text-align: center">Lista de Clientes</h1>
    </div>
        <div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                </tr>
                </thead>
                @foreach($clientes as $cliente)
                    <tr>
                        <th scope="row">{{$cliente->id}}</th>
                        <td>{{$cliente->name}}</td>
                        <td>{{$cliente->email}}</td>
                        <td>{{$cliente->phone}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    {{ $clientes->links() }}
@endsection
