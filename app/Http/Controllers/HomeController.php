<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Roles;
use App\Models\UsersRoles;
use App\Models\User;
use App\Models\Nivel;
use App\Models\Clases;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function create()
    // {
    //     Auth::logout();
    //     return redirect()->route('register')->with('success','Registro exitoso');
    // }
    public function index()
    {
        // $respuestas = request()->all();
        $id = Auth::user()->id;
        $rol = UsersRoles::where('fk_users','=', $id)->get();
        
        if ($rol[0]->fk_roles == '1') {
             $registradosUs = User::select('users.name','users.aPaterno','users.aMaterno','users.email','users.telefono', 'users.id')
            ->join('UsersRoles AS UR','UR.fk_users','=','users.id')
            ->join('Roles AS R','R.ID','=','UR.fk_roles')
            ->join('EstatusUser AS EU','EU.ID','=','users.fk_estatus')
            ->where('users.fk_estatus','=','1')
            ->where('users.activo','=','0')->get();
            return view('admin')->with('registradosUs', $registradosUs);
        

        }elseif ($rol[0]->fk_roles == '2') {

            
            $id = Auth::user()->id;
            $clases = User::where('id','=',$id)->select('fk_clases')->get();
            $nivel = User::where('id','=',$id)->select('fk_nivel')->get();
            if($clases[0]->fk_clases == 1 && $nivel[0]->fk_nivel == 1) {
                $nivel = Nivel::where('activo','=','1')->get();
                $clase = Clases::where('activo','=','1')->get();
                return view('home')->with('niveles',$nivel)->with('clases',$clase);
            }else{
                $activo = Auth::user()->activo;
                if($activo == 0){
                    $id = Auth::user()->id;
                    // $registrados = User::select('users.fk_nivel')->where('id','=',$id)->get();
                    $nivel = Auth::user()->fk_nivel;
                    return view('home2')->with('niveles', $nivel)->with('activo',$activo);    
                }else{

                    $id = Auth::user()->id;
                    // $registrados = User::select('users.fk_nivel')->where('id','=',$id)->get();
                    $nivel = User::where('id','=',$id)->select('fk_nivel')->get();
                    
                    $resultado = User::where('id','=',$id)->select('porcentaje')->get();
                    // return response()->json($resultado);  
                    if($nivel[0]->fk_nivel == 2 || $nivel[0]->fk_nivel == 3){

                        if ($resultado[0]->porcentaje >=1 && $resultado[0]->porcentaje <= 50) {

                        $estatus = User::where('id','=',$id)->update(['fk_rango' => 1]);
                        $Mensaje = User::where('users.id','=',$id)->select('Ran.rango')
                        ->join('MCER AS Ran','users.fk_rango','=','Ran.ID')
                        ->get();
                        $nivel = User::where('users.id','=',$id)->select('Ran.nivel')
                        ->join('MCER AS Ran','users.fk_rango','=','Ran.ID')
                        ->get();
                        // return response()->json($Mensaje);
                        return view('home2')->with('niveles', $nivel)->with('activo',$activo)->with('nivel',$nivel)->with('Mensaje',$Mensaje);

                        
                        }
                        if ($resultado[0]->porcentaje >50 && $resultado[0]->porcentaje <= 100) {
                            
                           $estatus = User::where('id','=',$id)->update(['fk_rango' => 2]);
                           $Mensaje = User::where('users.id','=',$id)->select('Ran.rango')
                            ->join('MCER AS Ran','users.fk_rango','=','Ran.ID')
                            ->get();
                            $nivel = User::where('users.id','=',$id)->select('Ran.nivel')
                            ->join('MCER AS Ran','users.fk_rango','=','Ran.ID')
                            ->get();
                           // return response()->json($Mensaje[0]->rango);
                           return view('home2')->with('niveles', $nivel)->with('activo',$activo)->with('nivel',$nivel)->with('Mensaje',$Mensaje);     
                            
                        }

                    }
                    else if($nivel[0]->fk_nivel == 4 || $nivel[0]->fk_nivel == 5){

                        if ($resultado[0]->porcentaje >=1 && $resultado[0]->porcentaje <= 25) {

                        $estatus = User::where('id','=',$id)->update(['fk_rango' => 2]);
                        $Mensaje = User::where('users.id','=',$id)->select('Ran.rango')
                        ->join('MCER AS Ran','users.fk_rango','=','Ran.ID')
                        ->get();
                        $nivel = User::where('users.id','=',$id)->select('Ran.nivel')
                        ->join('MCER AS Ran','users.fk_rango','=','Ran.ID')
                        ->get();
                        // return response()->json($Mensaje);
                        return view('home2')->with('niveles', $nivel)->with('activo',$activo)->with('nivel',$nivel)->with('Mensaje',$Mensaje);

                        
                        }
                        if ($resultado[0]->porcentaje >=26 && $resultado[0]->porcentaje <= 60) {

                        $estatus = User::where('id','=',$id)->update(['fk_rango' => 3]);
                        $Mensaje = User::where('users.id','=',$id)->select('Ran.rango')
                        ->join('MCER AS Ran','users.fk_rango','=','Ran.ID')
                        ->get();
                        $nivel = User::where('users.id','=',$id)->select('Ran.nivel')
                        ->join('MCER AS Ran','users.fk_rango','=','Ran.ID')
                        ->get();
                        // return response()->json($Mensaje);
                        return view('home2')->with('niveles', $nivel)->with('activo',$activo)->with('nivel',$nivel)->with('Mensaje',$Mensaje);

                        
                        }
                        if ($resultado[0]->porcentaje >60 && $resultado[0]->porcentaje <= 100) {
                            
                           $estatus = User::where('id','=',$id)->update(['fk_rango' => 4]);
                           $Mensaje = User::where('users.id','=',$id)->select('Ran.rango')
                            ->join('MCER AS Ran','users.fk_rango','=','Ran.ID')
                            ->get();
                            $nivel = User::where('users.id','=',$id)->select('Ran.nivel')
                            ->join('MCER AS Ran','users.fk_rango','=','Ran.ID')
                            ->get();
                           // return response()->json($Mensaje[0]->rango);
                           return view('home2')->with('niveles', $nivel)->with('activo',$activo)->with('nivel',$nivel)->with('Mensaje',$Mensaje);     
                            
                        } 

                    }
                    else if ($nivel[0]->fk_nivel == 6 || $nivel[0]->fk_nivel == 7){

                        if ($resultado[0]->porcentaje >=1 && $resultado[0]->porcentaje <= 50) {

                        $estatus = User::where('id','=',$id)->update(['fk_rango' => 5]);
                        $Mensaje = User::where('users.id','=',$id)->select('Ran.rango')
                        ->join('MCER AS Ran','users.fk_rango','=','Ran.ID')
                        ->get();
                        $nivel = User::where('users.id','=',$id)->select('Ran.nivel')
                        ->join('MCER AS Ran','users.fk_rango','=','Ran.ID')
                        ->get();
                        // return response()->json($Mensaje);
                        return view('home2')->with('niveles', $nivel)->with('activo',$activo)->with('nivel',$nivel)->with('Mensaje',$Mensaje);

                        
                        }
                        if ($resultado[0]->porcentaje >50 && $resultado[0]->porcentaje <= 100) {
                            
                           $estatus = User::where('id','=',$id)->update(['fk_rango' => 6]);
                           $Mensaje = User::where('users.id','=',$id)->select('Ran.rango')
                            ->join('MCER AS Ran','users.fk_rango','=','Ran.ID')
                            ->get();
                            $nivel = User::where('users.id','=',$id)->select('Ran.nivel')
                            ->join('MCER AS Ran','users.fk_rango','=','Ran.ID')
                            ->get();
                           // return response()->json($Mensaje[0]->rango);
                           return view('home2')->with('niveles', $nivel)->with('activo',$activo)->with('nivel',$nivel)->with('Mensaje',$Mensaje);     
                            
                        } 

                    }


                    if($resultado[0]->porcentaje == 0){
                        return view('home2')->with('niveles', $nivel)->with('activo',$activo);
                    }
                }
                
                // ->with('resultado',$resultado);
                //->with('registrados',$registrados);
            }
        }
    }
    
}
