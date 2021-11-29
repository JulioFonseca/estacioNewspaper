<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body class="body-default">
    <div class="container">
        @csrf
          <div class="container mt-10 mb-3">
            
              <div class="row">
                <div class="col">
                    <a href="{{url("materias/create")}}">
                        <button type="button" class="btn btn-primary btn-lg mt-5 mb-4">Cadastrar Materia</button>
                    </a>
                </div>
                <div class="col"></div>
                <div class="col">
                    <a href="{{url("assuntos/")}}">
                        <button type="button" class="btn btn-primary btn-lg mt-5 mb-4">Assuntos</button>
                    </a>
                </div>
                <div class="col"></div>
                <div class="col">
                    <div class="dropdown ms-3 mt-5">
                        <button class="btn btn-primary dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">Filtrar
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            @foreach ($assunto as $assuntos)    
                            <li role="presentation"><a role="menuitem" href={{url("materias/$assuntos->id/filter")}} tabindex="-1">{{$assuntos->nome}}</a></li>
                            @endforeach
                          
                             
                        </ul>
                      </div>
                    </div>
              </div>
              
            </div>
            <section class="text-center">
                <h4 class="mb-5"><strong>Materias do Jornal Estacio</strong></h4>
                <div class="row">
                    @foreach ($materia as $materias)
                    @php
                        $assunto = $materias->find($materias->id)->relAssunto;
                    @endphp
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card">
                              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="data:image/png;base64,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" class="img-fluid" />
                                <a href="#!">
                                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                                <div class="d-flex ml-2 mt-2">
                                    <div class="@if($assunto->id === 1 ) badge-green @else badge-red @endif"> <span>{{$assunto->nome}}</span> </div>
                                </div>
                              </div>
                              <div class="card-body">
                                <h4 class="title">{{$materias->titulo}}</h4>
                                    <p class="card-text">
                                        {{$materias->materia}}
                                    </p>
                                <div class="row align-items-end">
                                    <div class="col-sm">
                                        <a href="{{url("materias/$materias->id/edit")}}">
                                            <button type="button" class="btn btn-primary">Editar</button>
                                        </a>
                                    </div>
                                    <div class="col-sm">
                                        <a href="{{url("materias/$materias->id")}}">
                                            <button type="button" class="btn btn-primary">Ler mais</button>
                                        </a>
                                    </div>
                                    <div class="col-sm">
                                        <form action="{{url("/materias/$materias->id")}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                          </form>
                                    </div>
                                  </div>
                                
                              </div>
                            </div>
                          </div>
                    @endforeach
                </div>
              </section>
        </div>

        
    </div>
</body>
</html>