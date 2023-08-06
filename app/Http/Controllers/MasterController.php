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
        /*3


"pregunta1":"3",
"pregunta2":"6",
"pregunta3":"7",
"pregunta4":"11",
"pregunta5":"14",
"pregunta6":"17",
"pregunta7":"20",
"pregunta8":"24",
"pregunta9":"25",
"pregunta10":"30",
"pregunta11":"31",
"pregunta12":"34",
"pregunta13":"37",
"pregunta14":"41",
"pregunta15":"43",
"pregunta16":"49",
"pregunta17":"51",
"pregunta18":"56",
"pregunta19":"58",
"pregunta20":"63"       
*/     
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

        if ($resultado >=0 && $resultado <= 50) {
            
            return redirect()->route('home')->with('success','Es capaz de comprender y utilizar expresiones cotidianas de uso muy frecuente así como frases sencillas destinadas a satisfacer necesidades de tipo inmediato. Puede presentarse a sí mismo y a otros, pedir y dar información personal básica sobre su domicilio, sus pertenencias y las personas que conoce. Puede relacionarse de forma elemental siempre que su interlocutor hable despacio y con claridad y esté dispuesto a cooperar.');

            
        }
        if ($resultado >50 && $resultado <= 100) {
            
            return redirect()->route('home')->with('resultado',$resultado)->with('success','Es capaz de comprender frases y expresiones de uso frecuente relacionadas con áreas de experiencia que le son especialmente relevantes (información básica sobre sí mismo y su familia, compras, lugares de interés, ocupaciones, etc). Sabe comunicarse a la hora de llevar a cabo tareas simples y cotidianas que no requieran más que intercambios sencillos y directos de información sobre cuestiones que le son conocidas o habituales. Sabe describir en términos sencillos aspectos de su pasado y su entorno así como cuestiones relacionadas con sus necesidades inmediatas.');

            
        }

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
