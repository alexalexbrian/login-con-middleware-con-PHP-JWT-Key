<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
//Agregamos las rutas de JWT Y KEY; 
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
class Verificacion
{   /**
     * Handle an incoming request.
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    { 
        //El explode me quita el Bearer y con el numero 1 tomamos la posicion del segundo  
        //Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjb3JyZW8iOiJ0ZXN0QHRlc3QuY29tIiwicGFzc3dvcmQiOiIxMjM0NTY3ODkiLCJpYXQiOjE2NzczNjQwMTl9.d8fwgMWu_p6VFbH_IPyCwo_P5-BmIaibpxHAcpNRiNA
        //$headers = explode(' ', $request->header('Authorization'));
        //recibimos el cabecero con el $request que viene de posman 
        $headers = explode(' ', $request->header('Authorization'));
        //print_r($headers[1]);
        //echo "<br>";
        //print_r($request->header('Authorization'));
        //En caso de que no venga el encabezado podriamos retornar un error. 
        //Preguntamos con el metodo isset() negandolo como explode te va a retornar un arreglo 
        //pasandolo por un explode()  TOMAMOS EL VALOR 1 DE ARREGLO QUE VIENE DEL EXPLODE ES DECIR LA SEGUNDA POSICION
        //PREGUNTAMOS  ¿SI ES QUE NO EXISTE EL CABECERO? LO NEGAMOS.  RETORNAMOS LOS DE ABAJO IF
        if(!isset( $headers[1]))
        {
            $array=
		        	array
		        	(
		        		'response'=>array
			        	(
			        		'estado'=>'Unauthorized',
			        		'mensaje'=>'Acceso no autorizado 1' 
			        	)
		        	)
		        ;  	
		    return response()->json($array, 401);
        }
        //En caso de que exista lo descodificamos ejemplo
        //Agregar la variable secreto en el fichero .env  SECRETO="123456"
        //$decoded = JWT::decode($headers[1], new Key(env('SECRETO'), 'HS256'));
        //echo "ok";
        //echo $headers[1];
        $key='123456';
        JWT::$leeway = 60;
        $decoded = JWT::decode($headers[1], new key($key, 'HS256'));
        //print_r($decoded);
       
        //echo $headers[1];
        //Tomamos la fecha actual
        $fecha = strtotime(date('Y-m-d H:i:s'));
       // echo "----";
        //echo $decoded->iat;
        //comparamos la fecha actual con la fecha de $decoded
        if($decoded->iat > $fecha){
            $array = array
            (
                'response'=>array
                (
                    'estado'=>'Unauthorized',
                    'mensaje'=>'Acceso no autorizado 2' 
                )
            )
        ;  	
             return response()->json($array, 401);

        }//Fin del if
   
        return $next($request);
    }
}