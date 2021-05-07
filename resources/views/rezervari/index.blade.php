@extends('layouts.app')

@section('content')
        <div class="flex-center position-ref full-height">
           

            <div class="content">
                <div class="title">
                   Lista Rezervari
                </div>
               
                 @foreach($rezervari as $rezervare)
                    <br>
                   <div>
                    {{$rezervare->id}}-- {{$rezervare->nume}}--{{$rezervare->numartelefon}}--{{$rezervare->tipmasa}}
                     --{{$rezervare->zonamasa}}--{{$rezervare->datarezervare}}
                   
                   </div>
                 @endforeach
                 
            </div>
                 
        </div>
 @endsection
