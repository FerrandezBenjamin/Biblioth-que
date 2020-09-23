@extends('layouts.app')

@section('content')

<div class="content">
    <div class="title m-b-md">
        LISTE DES LIVRES
    </div>

    <div class="links">
        <a href="{{ url ('/')}}">Accueil</a>
        <a href="{{ route ('panier')}}">Mon Panier</a>
        <a href=" {{ route ('fichebook')}}">Fiche des livres</a>
        <a href="https://github.com/FerrandezBenjamin/Biblioth-que" target="_blank">GitHub</a>
    </div>
</div>
<div class="container">
    <div class="row">

        @foreach ($books as $book)
        <div class="col p-1">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/livre.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$book->title}}</h5>
                    <p class="card-text">{{$book->author}}</p>
                    <a href="#" class="btn btn-primary">Je veux l'empreinter !</a>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>
@endsection