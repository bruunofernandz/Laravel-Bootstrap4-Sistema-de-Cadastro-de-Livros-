<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                width: 40vw;
                height: 70vh;
                background: rgba(255, 255, 255, 0.1);
                border-radius: 15px;
                box-shadow: 0px 0px 5px 0px;
            }
            @media (max-width: 600px){
                .container {
                    width: 400px;
                    height: 400px;
                }
            }
            .reg {
                display: flex;
                justify-content: center;
                align-items: center;
                min-width: 160px;
                height: 50px;
                background-color: #ff4b5a;
                border-radius: 25px;
                text-align: center;

                font-family: Poppins-Medium;
                font-size: 16px;
                color: #fff;
                line-height: 1.2;

                -webkit-transition: all 0.4s;
                -o-transition: all 0.4s;
                -moz-transition: all 0.4s;
                transition: all 0.4s;

                box-shadow: 0 10px 30px 0px rgba(255, 75, 90, 0.5);
                -moz-box-shadow: 0 10px 30px 0px rgba(255, 75, 90, 0.5);
                -webkit-box-shadow: 0 10px 30px 0px rgba(255, 75, 90, 0.5);
                -o-box-shadow: 0 10px 30px 0px rgba(255, 75, 90, 0.5);
                -ms-box-shadow: 0 10px 30px 0px rgba(255, 75, 90, 0.5);
            }
            .reg:hover {
                background-color: #333333;
                box-shadow: 0 10px 30px 0px rgba(51, 51, 51, 0.5);
                -moz-box-shadow: 0 10px 30px 0px rgba(51, 51, 51, 0.5);
                -webkit-box-shadow: 0 10px 30px 0px rgba(51, 51, 51, 0.5);
                -o-box-shadow: 0 10px 30px 0px rgba(51, 51, 51, 0.5);
                -ms-box-shadow: 0 10px 30px 0px rgba(51, 51, 51, 0.5);  
            }
            .form-control {
                width: 30vw;
            }
            .book {
                width: 100px;
                margin-bottom: 20px;
            }
        </style>
    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

            <span><a href="{{ route('raiz') }}">RegBooks</a></span>

            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            </ul>

            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar Livro" aria-label="Search">
            <button class="btn btn-outline" type="submit">Buscar</button>
            <a href="{{ route('cadastro') }}" class="btn">Cadastrar</a>
            </form>           
        </div>
    </nav>
    <div class="container">
        <img class="book" src="{{ asset('/img/open-book.png') }}" alt="">
        <form action="" class="was-validated">
                <div class="form-group">
                    <span>Título do livro</span>
                    <input type="text" class="form-control is-invalid" required>
                </div>
                
                <div class="form-group">
                    <span>Autor do Livro</span>
                    <input type="text" class="form-control is-invalid" required>
                </div>

                <div class="form-group">
                    <span>Autor do Livro</span>
                    <select name="" class="form-control">
                        <option value="">Um</option>
                        <option value="">Dois</option>
                        <option value="">Tres</option>
                    </select>
                </div>

                <div class="form-group">
                    <span>Descrição</span>
                    <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                </div>


                <button class="btn reg mb-2">Cadastrar</button>
   
        </form>
    </div>
</body>
</html>