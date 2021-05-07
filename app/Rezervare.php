<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rezervare extends Model
{
    protected $table="rezervari";
}
 
//trebuie sa avem acelasi nume la model si la tabela 
//ca sa nu mai fie nevoie de "protected $table.."