<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="body-default">
    <div class="container">
        <h1>@if(isset($materia))editar @else Cadastrar @endif</h1>
        @if(isset($materia))
        <form name="formEdit" action="{{url("/materias/$materia->id")}}" id="formEdit" method="POST">
            @method('PUT')
        @else 
        <form name="formCad" action="{{url('/materias')}}" id="formCad" method="POST">
        @endif
        @csrf
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input name="titulo" id="titulo" type="text" class="form-control" value="{{$materia->titulo ?? ''}}" placeholder="Titulo">
              </div>
              <div class="mb-3">
                <label for="assuntos_id" class="form-label">Assunto</label>
                <select class="form-control" id="assuntos_id" name="assuntos_id">
                    <option value="{{$materia->relAssunto->id ?? ''}}">{{$materia->relAssunto->nome ?? 'Selecione'}}</option>
                    @foreach ($assuntos as $assunto)    
                    <option value="{{$assunto->id}}">{{$assunto->nome}}</option> 
                    @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <input name="descricao" id="descricao" type="text" value="{{$materia->materia ?? ''}}" class="form-control" placeholder="Descrição">
              </div>
              <input class="btn btn-primary" type="submit" value="@if(isset($materia))editar @else Cadastrar @endif">

        </form>
    </div>
</body>
</html>