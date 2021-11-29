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
    {{-- <div class="container">
        <h1>Visualizar</h1>
        <div class="col-8 m-auto">
            @php
             $assunto = $materia->find($materia->id)->relAssunto;   
            @endphp
            <h2>Titulo: {{$materia->titulo}}</h2>
            <h2>Assunto: {{$assunto->nome}}</h2>
            <h2>Descrição: {{$materia->materia}}</h2>
        </div>
    </div> --}}
    <div class="container mt-5">
        @php
             $assunto = $materia->find($materia->id)->relAssunto;   
            @endphp
        <div class="row">
            <div >
                <article>
                    <header class="mb-4">
                        <h1 class="fw-bolder mb-1">{{$materia->titulo}}</h1>
                        <div class="text-muted fst-italic mb-2">Publicado em {{$materia->created_at->day}}/{{$materia->created_at->month}}/{{$materia->created_at->year}}</div>
                        <a class="badge bg-secondary text-decoration-none link-light">{{$assunto->nome}}</a>
                    </header>
                    <img class="img-fluid rounded" width="900px" height="400px" src="http://www.visarmc.com.br/wp-content/uploads/2020/02/ESTACIO-banner-miolo-1170x550-1.png" alt="..." />
                    <section class="mb-5">
                        <p class="fs-5 mb-4">{{$materia->materia}}</p> 
                    </section>
                </article>
            </div>
            {{-- <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header">Side Widget</div>
                    <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                </div>
            </div> --}}
        </div>
    </div>
</body>
</html>