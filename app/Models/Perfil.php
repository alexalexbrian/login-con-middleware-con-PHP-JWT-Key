<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;
    //va ser un arreglo vacio, para que no me 
    //obligue a crear otras configuraciones
    protected $guarded=[];
    public $timestamps=false; 
    protected $table = 'perfil'; //Nombre de la base de datos
}
