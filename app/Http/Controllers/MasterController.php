<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\UsersRoles;
use App\Models\User;

class MasterController extends Controller
{
    //
    public function examenes(){
    	$id = Auth::User()->id;
    	$tipo = User::where('id', '=', $id)->select('fk_nivel')->get();
    	switch ($tipo) {
    		case 1:
    			return view('home');
    			break;
    		case 2:
    			return view('basico');
    			break;
			case 3:
				return view('intermedio');
				break;
			case 3:
    			return view('avanzado');
    			break;
    		default:
    			return view('home');
    			break;
    	}
    }
    public function evaluarB(Request $request){
    	// $id = Auth::user()->id;
    	// $respuestas = request()->all();
    	$respuestas = request()->except('_token');
    	return response()->json($respuestas);
    }
    public function subirArchivo(Request $request)
	{
	        //Recibimos el archivo y lo guardamos en la carpeta storage/app/public
			$id = Auth::User()->id;
		    // $user = $request['id_user'];
		    $campos = [

		    	'archivo' => 'required|max:15000|mimes:MP4,MOV,WMV,AVI,AVCHD,FLV,F4V,SWF,MKV,WEBM',
		    ];
		    $mensaje=[
		    	'required'=>'El :attribute es requerido',
		    	'archivo.required'=>'El archivo es requerido',
		    ];

		    $estatus = User::where('id', $id)->update([
		    	'archivo' => $request->file('archivo')->store('uploads', 'public'), 
		    	'fk_nivel' => $request->input('nivel'), 
		    	'fk_clases' => $request->input('clases')
		    ]);
	        return redirect()->route('home')->with('success','Archivo cargado con exito');
	}
}
