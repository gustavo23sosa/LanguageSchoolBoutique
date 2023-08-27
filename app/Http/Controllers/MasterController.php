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
            $preguntas = Preguntas::whereBetween('ID',[1,20])->get();
            $exprepuestas1 = PreguntasRespuestas::whereBetween('PreguntasRespuestas.ID',[1,65])->select('PreguntasRespuestas.ID','P.preguntas','R.respuestas')
            ->join('Preguntas AS P','PreguntasRespuestas.fk_preguntas','=','P.ID')
            ->join('Respuestas AS R','PreguntasRespuestas.fk_respuestas','=','R.ID')
            
            ->get();
            
            // return response()->json($preguntas);
            return view('basico')->with('exprepuestas1',$exprepuestas1)
            ->with('preguntas',$preguntas);

        }else if($nivel[0]->fk_nivel == 4 || $nivel[0]->fk_nivel == 5){
            $preguntas = Preguntas::whereBetween('ID',[21,40])->get();
            $exprepuestas1 = PreguntasRespuestas::whereBetween('PreguntasRespuestas.ID',[66,125])->select('PreguntasRespuestas.ID','P.preguntas','R.respuestas')
            ->join('Preguntas AS P','PreguntasRespuestas.fk_preguntas','=','P.ID')
            ->join('Respuestas AS R','PreguntasRespuestas.fk_respuestas','=','R.ID')
            
            ->get();
            // return response()->json($exprepuestas1);
            return view('intermedio')->with('exprepuestas1',$exprepuestas1)
            ->with('preguntas',$preguntas);
        }else if ($nivel[0]->fk_nivel == 6 || $nivel[0]->fk_nivel == 7) {

            $preguntas = Preguntas::whereBetween('ID',[41,60])->get();
            $exprepuestas1 = PreguntasRespuestas::whereBetween('PreguntasRespuestas.ID',[126,180])->select('PreguntasRespuestas.ID','P.preguntas','R.respuestas')
            ->join('Preguntas AS P','PreguntasRespuestas.fk_preguntas','=','P.ID')
            ->join('Respuestas AS R','PreguntasRespuestas.fk_respuestas','=','R.ID')
            ->get();

            // return response()->json($exprepuestas1);

            return view('avanzado')->with('exprepuestas1',$exprepuestas1)
            ->with('preguntas',$preguntas);
        }
    }
    public function evaluarB(Request $request){
    	$id = Auth::user()->id;
    	// $respuestas = request()->all();
    	$respuestas = request()->except('_token');
        // return response()->json($respuestas);
        
        $nivel = User::where('id','=',$id)->select('fk_nivel')->get();

        if($nivel[0]->fk_nivel == 2 || $nivel[0]->fk_nivel == 3){

            $contador = 0;
            if ($respuestas['datos1'] == 3) {
                $contador++;
            }
            if ($respuestas['datos2'] == 6) {
                $contador++;
            }
            if ($respuestas['datos3'] == 7) {
                $contador++;
            }
            if ($respuestas['datos4'] == 11) {
                $contador++;
            }
            if ($respuestas['datos5'] == 14) {
                $contador++;
            }
            if ($respuestas['datos6'] == 17) {
                $contador++;
            }
            if ($respuestas['datos7'] == 20) {
                $contador++;
            }
            if ($respuestas['datos8'] == 24) {
                $contador++;
            }
            if ($respuestas['datos9'] == 25) {
                $contador++;
            }
            if ($respuestas['datos10'] == 30) {
                $contador++;
            }
            if ($respuestas['datos11'] == 31) {
                $contador++;
            }
            if ($respuestas['datos12'] == 34) {
                $contador++;
            }
            if ($respuestas['datos13'] == 37) {
                $contador++;
            }
            if ($respuestas['datos14'] == 41) {
                $contador++;
            }
            if ($respuestas['datos15'] == 43) {
                $contador++;
            }
            if ($respuestas['datos16'] == 49) {
                $contador++;
            }
            if ($respuestas['datos17'] == 51) {
                $contador++;
            }
            if ($respuestas['datos18'] == 56) {
                $contador++;
            }
            if ($respuestas['datos19'] == 58) {
                $contador++;
            }
            if ($respuestas['datos20'] == 63) {
                $contador++;
            }

            //-----Calificacion

            $resultado = ($contador * 100)/20;
            $estatus = User::where('id', $id)->update(['activo' => '1','fk_estatus'=>'2' , 'porcentaje' => $resultado]);

            //------------------

            if ($resultado >=1 && $resultado <= 50) {
                $estatus = User::where('id','=',$id)->update(['fk_rango' => 1]);
            }
            if ($resultado >50 && $resultado <= 100) {
                $estatus = User::where('id','=',$id)->update(['fk_rango' => 2]);                
            }


        }else if($nivel[0]->fk_nivel == 4 || $nivel[0]->fk_nivel == 5){
            
            $contador = 0;
            if ($respuestas['datos1'] == 68) {
                $contador++;
            }
            if ($respuestas['datos2'] == 69) {
                $contador++;
            }
            if ($respuestas['datos3'] == 72) {
                $contador++;
            }
            if ($respuestas['datos4'] == 76) {
                $contador++;
            }
            if ($respuestas['datos5'] == 79) {
                $contador++;
            }
            if ($respuestas['datos6'] == 81) {
                $contador++;
            }
            if ($respuestas['datos7'] == 86) {
                $contador++;
            }
            if ($respuestas['datos8'] == 88) {
                $contador++;
            }
            if ($respuestas['datos9'] == 90) {
                $contador++;
            }
            if ($respuestas['datos10'] == 93) {
                $contador++;
            }
            if ($respuestas['datos11'] == 96) {
                $contador++;
            }
            if ($respuestas['datos12'] == 99) {
                $contador++;
            }
            if ($respuestas['datos13'] == 102) {
                $contador++;
            }
            if ($respuestas['datos14'] == 105) {
                $contador++;
            }
            if ($respuestas['datos15'] == 108) {
                $contador++;
            }
            if ($respuestas['datos16'] == 113) {
                $contador++;
            }
            if ($respuestas['datos17'] == 115) {
                $contador++;
            }
            if ($respuestas['datos18'] == 117) {
                $contador++;
            }
            if ($respuestas['datos19'] == 121) {
                $contador++;
            }
            if ($respuestas['datos20'] == 123) {
                $contador++;
            }

            //-----Calificacion

            $resultado = ($contador * 100)/20;
            $estatus = User::where('id', $id)->update(['activo' => '1','fk_estatus'=>'2' , 'porcentaje' => $resultado]);

            //------------------

            if ($resultado >=1 && $resultado <= 25) {
                $estatus = User::where('id','=',$id)->update(['fk_rango' => 1]);
            }
            if ($resultado >25 && $resultado <= 50) {
                $estatus = User::where('id','=',$id)->update(['fk_rango' => 2]);
            }
            if ($resultado >50 && $resultado <= 75) {
                $estatus = User::where('id','=',$id)->update(['fk_rango' => 3]);
            } 
            if ($resultado >75 && $resultado <= 100) {
                $estatus = User::where('id','=',$id)->update(['fk_rango' => 4]); 
            } 

        }else if($nivel[0]->fk_nivel == 6 || $nivel[0]->fk_nivel == 7){
            

            $contador = 0;

            if ($respuestas['datos1'] == 126) {
                $contador++;
            }
            if ($respuestas['datos2'] == 131) {
                $contador++;
            }
            if ($respuestas['datos3'] == 134) {
                $contador++;
            }
            if ($respuestas['datos4'] == 136) {
                $contador++;
            }
            if ($respuestas['datos5'] == 141) {
                $contador++;
            }
            if ($respuestas['datos6'] == 142) {
                $contador++;
            }
            if ($respuestas['datos7'] == 145) {
                $contador++;
            }
            if ($respuestas['datos8'] == 150) {
                $contador++;
            }
            if ($respuestas['datos9'] == 153) {
                $contador++;
            }
            if ($respuestas['datos10'] == 154) {
                $contador++;
            }
            if ($respuestas['datos11'] == 158) {
                $contador++;
            }
            if ($respuestas['datos12'] == 162) {
                $contador++;
            }
            if ($respuestas['datos13'] == "My bike has been stolen!" || $respuestas['datos13'] == "my bike has been stolen" || $respuestas['datos13'] == "My bike has been stolen") {
                $contador++;
                
            }
            if ($respuestas['datos14'] == "The newspaper is received everyday." || $respuestas['datos14'] == "The newspaper is received everyday" || $respuestas['datos14'] == "the newspaper is received everyday") {
                $contador++;
                
            }
            if ($respuestas['datos15'] == "The cookies have been eaten by the children." || $respuestas['datos15'] == "The cookies have been eaten by the children" || $respuestas['datos15'] == "the cookies have been eaten by the children") {
                $contador++;
                
            }
            if ($respuestas['datos16'] == 167) {
                $contador++;
            }
            if ($respuestas['datos17'] == 170) {
                $contador++;
            }
            if ($respuestas['datos18'] == 172) {
                $contador++;
            }
            if ($respuestas['datos19'] == 176) {
                $contador++;
            }
            if ($respuestas['datos20'] == 178) {
                $contador++;
            }
            //-----Calificacion

            $resultado = ($contador * 100)/20;
            $estatus = User::where('id', $id)->update(['activo' => '1','fk_estatus'=>'2' , 'porcentaje' => $resultado]);

            //------------------

            if ($resultado >=1 && $resultado <= 16) {
                $estatus = User::where('id','=',$id)->update(['fk_rango' => 1]);
            }
            if ($resultado >16 && $resultado <= 32) {    
                $estatus = User::where('id','=',$id)->update(['fk_rango' => 2]);
            }
            if ($resultado >32 && $resultado <= 48) {
                $estatus = User::where('id','=',$id)->update(['fk_rango' => 3]);
            }
            if ($resultado >48 && $resultado <= 64) {
                $estatus = User::where('id','=',$id)->update(['fk_rango' => 4]);
            }
            if ($resultado >64 && $resultado <= 80) {
                $estatus = User::where('id','=',$id)->update(['fk_rango' => 5]);
            }
            if ($resultado >80 && $resultado <= 100) {
                $estatus = User::where('id','=',$id)->update(['fk_rango' => 6]);
            } 

        }
        return redirect()->route('home')->with('success','Se ha calificado con exito');

        // $estatus = User::where('id', $user)->update(['activo' => '1','fk_estatus'=>'2']);

    	
        
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
