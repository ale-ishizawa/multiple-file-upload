<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Análise de Dados </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
<div class="container">
    <h2 class="text-center">Importar Arquivos</h2><br/>
    <form method="post" action="{{url('upload')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="file">Arquivo:</label>
                <input type="file[]" multiple="true" name="file" accept=".dat"  >
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-top:60px">
                <button type="submit" class="btn btn-success">Importar arquivo</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>