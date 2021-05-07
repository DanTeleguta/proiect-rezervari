@extends('layouts.app')

@section('content')
        <div class="flex-center position-ref full-height">
       

            <div class="content">
              <img src="/img/logo.jpg" alt="restaurant-logo">
                <div class="title">
                    Restaurant BestFood
                </div>
                <p class="msg"><h3>{{session('mssg')}}</h3></p>
                <a href="{{route('rezervari.creaza')}}"><h1>>Rezervati o masa<</h1></a>
            </div>
        </div>
 @endsection
