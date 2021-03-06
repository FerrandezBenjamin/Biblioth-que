@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ben Bibliothèque</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636B6F;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636B6F;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-top: 15%;
        }
    </style>
</head>

<body>
    
        <div class="content">
            <div class="title m-b-md">
                Ben Bibliothèque
            </div>
            <div class="links">
                <div class="links">
                    <a href="{{ route ('infosdateretour')}}">Mes livres empreintés</a>
                    <a href="{{ route ('listelivre')}}">Liste des livres</a>
                    <a href=" {{ route ('fichebook')}}">Fiche des livres</a>
                    <a href="https://github.com/FerrandezBenjamin/Biblioth-que" target="_blank">GitHub</a>
                </div>
            </div>
        </div>
</body>

</html>
@endsection