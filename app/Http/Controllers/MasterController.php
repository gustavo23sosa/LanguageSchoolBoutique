<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\UsersRoles;
use App\Models\User;
use App\Models\PreguntasRespuestas;
use App\Models\preguntas;
use App\Models\Respuestas;

class MasterController extends Controller
{
    //
    public function examenes(){
    	$id = Auth::User()->id;
        $nivel = User::where('id','=',$id)->select('fk_nivel')->get();
        if($nivel[0]->fk_nivel == 2 || $nivel[0]->fk_nivel == 3){
            $preguntas = Preguntas::where('activo','=','1')->get();
            $exprepuestas1 = PreguntasRespuestas::select('PreguntasRespuestas.ID','P.preguntas','R.respuestas')
            ->join('Preguntas AS P','PreguntasRespuestas.fk_preguntas','=','P.ID')
            ->join('Respuestas AS R','PreguntasRespuestas.fk_respuestas','=','R.ID')
            
            ->get();
            
            // return response()->json($preguntas);
            return view('basico')->with('exprepuestas1',$exprepuestas1)
            ->with('preguntas',$preguntas);

        }else if($nivel[0]->fk_nivel == 4 || $nivel[0]->fk_nivel == 5){
            return view('intermedio');
        }else if ($nivel[0]->fk_nivel == 6 || $nivel[0]->fk_nivel == 7) {
            return view('avanzado');
        }
    }
    public function evaluarB(Request $request){
    	$id = Auth::user()->id;
    	// $respuestas = request()->all();
    	$respuestas = request()->except('_token');


        $contador = 0;
        if ($respuestas['pregunta1'] == 3) {
            $contador++;
        }
        if ($respuestas['pregunta2'] == 6) {
            $contador++;
        }
        if ($respuestas['pregunta3'] == 7) {
            $contador++;
        }
        if ($respuestas['pregunta4'] == 11) {
            $contador++;
        }
        if ($respuestas['pregunta5'] == 14) {
            $contador++;
        }
        if ($respuestas['pregunta6'] == 17) {
            $contador++;
        }
        if ($respuestas['pregunta7'] == 20) {
            $contador++;
        }
        if ($respuestas['pregunta8'] == 24) {
            $contador++;
        }
        if ($respuestas['pregunta9'] == 25) {
            $contador++;
        }
        if ($respuestas['pregunta10'] == 30) {
            $contador++;
        }
        if ($respuestas['pregunta11'] == 31) {
            $contador++;
        }
        if ($respuestas['pregunta12'] == 34) {
            $contador++;
        }
        if ($respuestas['pregunta13'] == 37) {
            $contador++;
        }
        if ($respuestas['pregunta14'] == 41) {
            $contador++;
        }
        if ($respuestas['pregunta15'] == 43) {
            $contador++;
        }
        if ($respuestas['pregunta16'] == 49) {
            $contador++;
        }
        if ($respuestas['pregunta17'] == 51) {
            $contador++;
        }
        if ($respuestas['pregunta18'] == 56) {
            $contador++;
        }
        if ($respuestas['pregunta19'] == 58) {
            $contador++;
        }
        if ($respuestas['pregunta20'] == 63) {
            $contador++;
        }

        $resultado = ($contador * 100)/20;
        $estatus = User::where('id', $id)->update(['activo' => '1','fk_estatus'=>'2' , 'Resultado' => $resultado]);

        

        // $estatus = User::where('id', $user)->update(['activo' => '1','fk_estatus'=>'2']);

    	// return response()->json($respuestas);
        
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
