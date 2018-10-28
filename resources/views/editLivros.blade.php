<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 27/10/18
 * Time: 20:57
 */

?>

        <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Editar Livro</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <h2>Editar Livro</h2><br  />
    <form method="post" action="{{action('LivrosController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" name="nome" value="{{$livro->nome}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="email">Edição</label>
                <input type="text" class="form-control" name="edicao" value="{{$livro->edicao}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="number">ISBN:</label>
                <input type="text" class="form-control" name="isbn" value="{{$livro->isbn}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-top:60px">
                <button type="submit" class="btn btn-success" style="margin-left:38px">Alterar</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
