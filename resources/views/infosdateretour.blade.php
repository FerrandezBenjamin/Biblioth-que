@extends('layouts.app')
@section('content')

<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    MES LIVRES EMPREINTES
                </div>

                <div class="links">
                    <a href ="{{ url ('/')}}">Accueil</a>
                    <a href ="{{ route ('panier')}}">Mon Panier</a>
                    <a href =" {{ route ('listelivre')}}">Liste des Livres</a>
                    <a href="https://github.com/FerrandezBenjamin/Biblioth-que" target = "_blank">GitHub</a>
                </div>
            </div>     
    </div>
    @foreach ($empreints as $empreint)
        {{$empreint->date_retour}}
        echo "helloWord";
    @endforeach
</html>
@endsection