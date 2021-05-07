<?php

namespace App\Http\Controllers;

use App\Rezervare;
use Illuminate\Http\Request;
use App\Rezervari;


class RezervareController extends Controller
{
   // public function __construct() {
    //    $this->middleware('auth');
   // }

    public function index() {
      
        $rezervari=Rezervare::latest()->get();
        
         
             return view('rezervari.index',[
                 'rezervari'=>$rezervari,
                 ]);
    }

    public function arata($id) {
        

        $rezervare=Rezervare::findOrFail($id);
        return view('rezervari.arata',['rezervare'=>$rezervare]);
    }

    public function creaza() {
        
        return view('rezervari.creaza');
    }
    public function stocheaza() {

        $rezervare= new Rezervare();

        $rezervare->nume = request('nume');
        $rezervare->numartelefon = request('numartelefon');
        $rezervare->datarezervare = request('datarezervare');
        $rezervare->tipmasa = request('tipmasa');
        $rezervare->zonamasa = request('zonamasa');
        
        $rezervare->save();
      
        return redirect('/')->with('mssg',"Multumim pentru rezrvare,va vom 
        contacta in cel mai scurt timp pentru confirmare!");
    }
    public function sterge($id) {
        $rezervare= Rezervare::findOrFail($id);
        $rezervare->delete();
        return redirect('/rezervari');
    }
}
