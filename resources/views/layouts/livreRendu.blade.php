@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="title m-b-md">
            FÉLICITATION, TU AS RENDUS TON LIVRE
        </div>

        <div class="links">
            <a href="{{ url ('/')}}">Accueil</a>
            <a href="{{ route ('infosdateretour')}}">Mes livres empreintés</a>
            <a href=" {{ route ('listelivre')}}">Liste des Livres</a>
            <a href="https://github.com/FerrandezBenjamin/Biblioth-que" target="_blank">GitHub</a>
        </div>
    </div>
</div>
</html>
@endsection