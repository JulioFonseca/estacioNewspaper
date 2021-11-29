<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>assuntos</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <a href="{{url("assuntos/create")}}">
                    <button type="button" class="btn btn-primary btn-lg mt-5 mb-4">Cadastrar Assunto</button>
                </a>
            </div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col">
                <a href="{{url("materias/")}}">
                    <button type="button" class="btn btn-primary btn-lg mt-5 mb-4">Materias</button>
                </a>
            </div>
          </div>
        <h1>Assuntos</h1>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">id</th>
                <th scope="col">nome</th>
                <th scope="col">funçoes</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($assunto as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->nome}}</td>
                    <td>
                      <div class="row align-items-end">
                        <div class="col-sm">
                            <a href="{{url("assuntos/$item->id/edit")}}">
                                <button type="button" class="btn btn-primary">editar</button>
                            </a>
                        </div>
                        <div class="col-sm">
                            <form action="{{url("/assuntos/$item->id")}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                              </form>
                        </div>
                      </div>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>