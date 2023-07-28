<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\UsersRoles;
use App\Models\User;
use App\Models\preguntas;

class MasterController extends Controller
{
    //
    public function examenes(){
    	$id = Auth::User()->id;
        $nivel = User::where('id','=',$id)->select('fk_nivel')->get();
        if($nivel[0]->fk_nivel == 2 || $nivel[0]->fk_nivel == 3){
            $pregunta1 = Preguntas::where('id','=','1')->get()
            return view('basico');
        }else if($nivel[0]->fk_nivel == 4 || $nivel[0]->fk_nivel == 5){
            return view('intermedio');
        }else if ($nivel[0]->fk_nivel == 6 || $nivel[0]->fk_nivel == 7) {
            return view('avanzado');
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


		    $estatus = User::where('id', $id)->update([
		    	// 'archivo' => $request->file('archivo')->store('uploads', 'public'), 
		    	'fk_nivel' => $request->input('nivel'), 
		    	'fk_clases' => $request->input('clases')
		    ]);
	        return redirect()->route('home')->with('success','Se guardó la información');
	}
}
