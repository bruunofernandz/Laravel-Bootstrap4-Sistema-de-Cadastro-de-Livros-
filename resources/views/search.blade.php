<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lista de Livros</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ url('fontawesome/css/all.css') }}">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <style>
            html, body {

                font-family: 'Nunito', sans-serif;        
            }
            li {
                list-style: none;
            }

            a {
                color: inherit;
                text-decoration: none;
            }
            a:hover {
                color: inherit;
                text-decoration: none;
            }
            .container {
                margin-top: 100px;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                border: 0;
                width: 70vw;
                height: 60vh;
                background: rgba(255, 255, 255, 0.1);

            }
            @media (max-width: 600px){
                .container {
                    width: 400px;
                    height: 400px;
                }
            }
            .actions {
                padding: 4px;
                text-decoration: none;
                font-size: 1.5em;
                transition: .5s;
            }
            .actions:hover {
                color: #CCC;
                transition: .5s;
            }
            .navbar {
                background: #FFF;
                border: 0px;
                box-shadow: 0px 0px 10px 0px;
            }
        </style>
    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

            <span><a href="{{url('/')}}">RegBooks</a></span>

            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            </ul>

            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar Livro" aria-label="Search">
            <button class="btn btn-outline" type="submit">Buscar</button>
            <a href="{{url('/cadastrar')}}" class="btn">Cadastrar</a>
            </form>           
        </div>
    </nav>
    <div class="container">
    <h2>Livros Para Locação</h2>
    <table class="table">
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th></th>
        </tr>
        @foreach($livros as $livro)
        @if($livro->quantidade != 0)
        <tr>
            <td>{{ $livro->nome}}</td>
            <td>{{ $livro->descricao}}</td>
            <td>{{ $livro->quantidade}}</td>
            <td>
                <a href="{{ url('/livros/aluguel', $livro->quantidade) }}" class="actions edit">alugue<i class="fas fa-sign-in-alt"></i></a>
            </td>
        </tr>
        @endif
        @endforeach
</table>

{!! $livros->links() !!}
    </div>
</body>
</html>