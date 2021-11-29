<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>assunto</title>
</head>
<body class="body-default">
    <div class="container">
        <h1>@if(isset($assunto))editar @else Cadastrar @endif</h1>
        @if(isset($assunto))
        <form name="formEdit" action="{{url("/assuntos/$assunto->id")}}" id="formEdit" method="POST">
            @method('PUT')
        @else 
        <form name="formCad" action="{{url('/assuntos')}}" id="formCad" method="POST">
        @endif
        @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">nome</label>
                <input name="nome" id="nome" type="text" class="form-control" value="{{$assunto->nome ?? ''}}" placeholder="nome">
              </div>
              <input class="btn btn-primary" type="submit" value="@if(isset($assunto))editar @else Cadastrar @endif">

        </form>
    </div>
</body>
</html>