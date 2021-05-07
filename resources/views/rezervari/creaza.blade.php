@extends('layouts.app')

@section('content')
    <div class="wrapper creaza-rezervare">
        <h1 id="titlu">Rezervati o masa</h1>
        <form action="/rezervari" method="POST" id="form">
            @csrf
            <label for="nume" >Numele dvs:</label>
            <input type="text" id="nume" name="nume" placeholder="Dl.-Dna."><br><br>
            <label for="numartelefon">Nr telefon:</label>
            <input type="tel" id="numar" name="numartelefon"><br><br>
            <label for="data">Data rezervarii:</label>
            <input type="datetime-local" id="date" name="datarezervare"><br><br>
            <label for="tipmasa">Alegeti numar persoane:</label>
            <select name="tipmasa" id="tipmasa">
                <option value="2 persoane">2 Persoane</option>
                <option value="4 persoane">4 Persoane</option>
                <option value="8 persoane">8 Persoane</option>
                <option value="12 persoane">12 Persoane</option>
            </select><br><br>
            <label for="zonamasa">Alegeti zona:</label>
            <select name="zonamasa" id="zonamasa">
                <option value="fumatori">Fumatori</option>
                <option value="nefumatori">Nefumatori</option>   
            </select><br><br>
            <input type="submit" id="submit" value="Rezerva masa">
        </form> <br><br>
           
       <!-- <a href="/" class="inapoi"><h3><-Pagina principala</h3></a><br>-->
    </div>

 @endsection