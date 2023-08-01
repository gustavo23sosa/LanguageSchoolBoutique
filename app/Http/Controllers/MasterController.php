<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\UsersRoles;
use App\Models\User;
use App\Models\Exprespuesta;
use App\Models\Preguntas;
use App\Models\Respuestas;

class MasterController extends Controller
{
    //
    public function examenes(){
    	$id = Auth::User()->id;
        $nivel = User::where('id','=',$id)->select('fk_nivel')->get();
        if($nivel[0]->fk_nivel == 2 || $nivel[0]->fk_nivel == 3){
            $exprepuestas1 = Exprespuesta::select('Exprespuesta.ID','P.preguntas','R.respuestas')
            ->join('Preguntas AS P','Exprespuesta.fk_preguntas','=','P.ID')
            ->join('Respuestas AS R','Exprespuesta.fk_respuestas','=','R.ID')
            ->get();
            $preguntas = Preguntas::whereBetween('ID',['1','20'])->get();
            
            return view('basico')->with('exprepuestas1',$exprepuestas1);
            // ->with('preguntas',$preguntas);

        }else if($nivel[0]->fk_nivel == 4 || $nivel[0]->fk_nivel == 5){
            return view('intermedio');
        }else if ($nivel[0]->fk_nivel == 6 || $nivel[0]->fk_nivel == 7) {
            return view('avanzado');
        }
    }
    public function evaluarB(Request $request){
    	// $id = Auth::user()->id;
    	// $respuestas = request()->all();
        /*3

3

1

2

2

2

2

3

1

3

1

1

1

2

1

4

2

3

1

2*/
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
