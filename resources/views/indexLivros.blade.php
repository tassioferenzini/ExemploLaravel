<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 27/10/18
 * Time: 20:49
 */

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Livros</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <br />
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
    </div><br />
    @endif
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Edição</th>
            <th>ISBN</th>
            <th colspan="2">Ações</th>
        </tr>
        </thead>
        <tbody>

        @foreach($livros as $livro)
        <tr>
            <td>{{$livro['id']}}</td>
            <td>{{$livro['nome']}}</td>
            <td>{{$livro['edicao']}}</td>
            <td>{{$livro['isbn']}}</td>

            <td><a href="{{action('LivrosController@edit', $livro['id'])}}" class="btn btn-warning">Editar</a></td>
            <td>
                <form action="{{action('LivrosController@destroy', $livro['id'])}}" method="post">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
