<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="jumbotron text-center">
        <h1>PowerFitness</h1>
        <p>Teretana u KV</p>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName() == 'index') active @endif" href="{{ route('index') }}">Pocetna</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link @if(Route::currentRouteName() == 'member') active @endif" href="{{ route('member') }}">Clanovi</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="container">
        <h2>Podaci o clanu</h2>
        <p>Ime: {{$ime}}</p>
        <p>Prezime: {{$prezime}}</p>
        <p>Email: {{$email}}</p>
        <p>Tranjanje clanarine: {{$rok}}</p>
        <p>Cena: {{$cena}}</p>
    </div>
    <footer>
        <div class="text-center p-4 bg-dark text-light">
            © 2023 Copyright:Andrija Bascarevic
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>