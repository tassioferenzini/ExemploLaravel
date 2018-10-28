<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 27/10/18
 * Time: 20:07
 */
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  </head>
  <body>
    <div class="container">
      <h2>Cadatro de Livros</h2><br/>
      <form method="post" action="{{url('livros')}}" enctype="multipart/form-data">
@csrf
<div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
        <label for="Name">Nome:</label>
        <input type="text" class="form-control" name="nome">
    </div>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
        <label for="Email">Edição:</label>
        <input type="text" class="form-control" name="edicao">
    </div>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
        <label for="Number">ISBN:</label>
        <input type="text" class="form-control" name="isbn">
    </div>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
        <input type="file" name="arq">
    </div>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4" style="margin-top:60px">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</div>
</form>
</div>
</body>
</html>
