@extends('layouts.base')
@include('layouts.menu')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cuaderno de campo para Viña</title>
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-7 mt-3">
        <div class="card">

          <p>Campaña: <label for=""class="col-4"></label></p>
          <fieldset>
            <legend>DATOS DE IDENTIFICACION</legend>
            <p>Titular de la explotacion: <label for=""class="col-4"></label></p>
            <p>Direccion: <label for=""class="col-4"></label></p>
            <p>Municipio: <label for=""class="col-4"></label></p>
            <p>Tecnico responsable de la explotacio: <label for=""class="col-4"></label></p>
          </fieldset>

          <p>Fax: <label for=""class="col-4"></label></p>
          <p>Codigo Postal: <label for=""class="col-4"></label></p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
