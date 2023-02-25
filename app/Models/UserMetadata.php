<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;  //Exportamos el modelo usuario para obtener los registros de los usuarios, porque tenemos una llave formaria que se necesita 
use App\Models\Perfil;  //Exportamos el modelo perfil para obtener los registro de los perfiles, porque tenemos una llave formaria que se necesita 

class UserMetadata extends Model
{
    use HasFactory;
    //va ser un arreglo vacio, para que no me 
    //obligue a crear otras configuraciones
    protected $guarded=[];
    public $timestamps=false; 
    protected $table = 'user_metadata'; //Nombre de la base de datos

   
   
   
    public function users(){

        //Con esto obtenemos los registros de los usuarios 
        return $this->belongsTo(User::class);


    }

    
    public function perfil(){

        //Con esto obtenemos los registros de los perfiles 
        return $this->belongsTo(Perfil::class);


    }




}