@extends('layouts.app')

@section('content')
    <div class ="id-rezervari">
        <h1>Rezervare pentru {{$rezervare->nume}}</h1>
        <p class="id">Id. rezervare-{{$rezervare->id}}</p>
        <p class="tipmasa">Numar persoane-{{$rezervare->tipmasa}}</p>
        <p class="telefon">Nr telefon-{{$rezervare->numartelefon}}
        <p class="felmasa">Zona masa-{{$rezervare->zonamasa}}
        <p class="data">Data rezervare-{{$rezervare->datarezervare}}
            <form action="{{route('rezervari.sterge',$rezervare->id)}}" method="POST" id="formd">
            @csrf
            @method('DELETE')
            <button>Sterge Rezervarea</button>
        </form><br><br>
   <a href="/rezervari" class="inapoi"><-Inapoi la rezervari</a>
    </div>   
 @endsection 
