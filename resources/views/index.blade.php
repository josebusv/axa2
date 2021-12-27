<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>{{ config('app.name') }}</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <img src="./logo_axa.png" class="img" alt="log">
                </div>
                <div class="col-md-9 col-sm-6 justify-content-center  d-flex align-items-center">
                    <h1>Consulta de Pagos</h1>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-10 offset-md-1 align-items-center">
            <form class="form-inline">
                <div class="row">
                    <col-6>
                        <label for="staticEmail2">Email</label>
                        <input type="text" class="form-control">
                    </col-6>
                    <col-6>
                        <label for="inputPassword2">Password</label>
                        <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                    </col-6>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-primary mb-2">Confirm identity</button>
                    </div>
                </div>
            </form>
          </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>
