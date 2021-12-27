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
                    <img src="./logo_axa.png" class="img-fluid" alt="log">
                </div>
                <div class="col-md-9 col-sm-6 justify-content-center  d-flex align-items-center">
                    <h1>Consulta de Pagos</h1>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <form id="form-consulta-pagos">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tipo_doc">Tipo de Documento</label>
                            <select class="form-control" id="tipo_doc">
                            <option value="">Seleccione un tipo de documento...</option>
                            <option value="1">Cedula de Ciudadania</option>
                            <option value="2">Cedula de extranjeria</option>
                            <option value="3">NIT</option>
                            <option value="4">Pasaporte</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="num_documento">Número de Documento</label>
                            <input type="text" class="form-control" id="num_documento" maxlength="10">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-primary" id="btn_consultar" disabled="true">Consultar</button>
                    </div>
                </div>
            </form>
          </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

<script>
    $(function(){

        let largo = 0;

        $("#tipo_doc").change(function(){
            largo = $("#num_documento").val().length;
            enable_consultar($(this).val(), largo);
        })

        $("#num_documento").keyup(function(){
            largo = $("#num_documento").val().length;
            enable_consultar(tipo_doc, largo);
        })

        $("#btn_consultar").click(function(e) {

            e.preventDefault();

            let tipo_documeto = $("select#tipo_doc option:selected").val();
            console.log(tipo_documeto);
            let num_documento = $("#num_documento").val();
            console.log(num_documento);
            let url = "{{ route('consulta', ['tipo_doc' => ':tipo_doc', 'num_identificacion' => ':num_identificacion']) }}";
            url = url.replace(':tipo_doc', tipo_documeto);
            url = url.replace(':num_identificacion', num_documento);

            $.ajax({
                type: "GET",
                url: url,
                dataType: 'json',

                success: function (data) {
                    console.log(data)
                }
            })

        });

    })

    function enable_consultar(tipo_doc, largo){

        if(tipo_doc && largo > 4)
        {
            $("#btn_consultar").prop('disabled', false);
        }else{
            $("#btn_consultar").prop('disabled', true);
        }

    }
</script>

</body>
</html>
