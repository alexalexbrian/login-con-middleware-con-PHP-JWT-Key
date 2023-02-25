<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Http\Request;
use App\Models\UserMetadata;
class loginController extends Controller
{
    


     //Pagina principal
     public function acceso_login(){

        return view("login.login");

    }


    //Para iniciar sesion 
    public function acceso_login_post(Request $request){

        //Validamos los datos del formulario para iniciar sesión
        $validated = $request->validate([                 
            'correo'=>'required|email:rfc,dns', 
            'password'=>'required|min:6'
        ],[
            'correo.required'=>'correo está vacio',
            'correo.email'=>'correo no es valido',
            'password.required'=>'contraseña esta vacio',
            'password.min'=>'contraseña debe tener al menos 6 caracteres',
        ]);


        $payload = [
            'correo' => 'test@test.com',
            'password' => '123456789',
            'iat' => time()
            //'exp' => time()+60
        ];



        //Usamos el metodo authentication de laravel 
        if(Auth::attempt(['email' => $request->input('correo'),'password' => $request->input('password')])){

            //Obtenemos el id del usuario logeado
            //echo Auth::id();
            //exit();
            //echo "ok";

            //Esto es una especie de sesion que te presta laravel
            //Auth::id()

            //Obtenemos los datos del usuario
            $usuario = UserMetadata::where(['users_id'=> Auth::id()])->first();
            //Creamos una session perzonalizada
            //session(['users_metadata_id'=>$usuario->id]);
            //session(['perfil_id'=>$usuario->id]);
            //session(['perfil'=>$usuario->id]);
            $key="123456";
            $jwt = JWT::encode($payload, $key, 'HS256');

          
            
            session(['users_metadata_id' => $usuario->id]);
            session(['perfil_id' => $usuario->perfil_id]);
            session(['perfil' => $usuario->perfil->nombre]);

            //return redirect('/login/table')->with('jwt', $jwt);
            return redirect()->intended('/login/table');
        
            

        }else{

            echo "The credentials are not valid loginController.php ";
        }

    }


}
