@extends('layouts.app')
@section('content')
<div class="content">
    <div class="title m-b-md">
        MES LIVRES EMPREINTÉS
    </div>

    <div class="links">
        <a href="{{ url ('/')}}">Accueil</a>
        <!-- <a href="{{ route ('panier')}}">Mon Panier</a> -->
        <a href=" {{ route ('listelivre')}}">Liste des Livres</a>
        <a href="https://github.com/FerrandezBenjamin/Biblioth-que" target="_blank">GitHub</a>
    </div>
</div>
</div>
@foreach ($empreints as $empreint)
<div class="col p-1">
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('img/livre.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$empreint->date_retour}}</h5>
            <p class="card-text">{{$empreint->id_books}}</p>
            <a href="{{ route ('livrerendu')}}" class="btn btn-primary">Je l'ai rendu !</a>
            <a href="#" class="btn btn-primary">Date rendu prévu : </br> {{$empreint->due_at}}</a>
        </div>
    </div>
</div>
@endforeach
</html>
@endsection