@extends('app')

@section('content')
    <div class="container">
        <h1>Estado</h1>
        <table class = "table table-striped tale-bordered table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Uf</th>
                </tr>
            </thead>
            <tbody>
            @foreach($estado as $est)
                <tr>
                    <td>{{$est->nome}}</td>
                    <td>{{$est->uf}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection