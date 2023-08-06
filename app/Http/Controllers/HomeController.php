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
                    $nivel = Auth::user()->fk_nivel;
                    
                    $resultado = User::where('id','=',$id)->select('Resultado')->get();
                    // return response()->json($resultado);  
                    if ($resultado[0]->Resultado >=1 && $resultado[0]->Resultado <= 50) {
                        
                        $Observaciones = User::where('id','=',$id)->select('Observaciones')->get();
                        return view('home2')->with('niveles', $nivel)->with('activo',$activo)->with('resultado',$resultado);

                        
                    }
                    if ($resultado[0]->Resultado >50 && $resultado[0]->Resultado <= 100) {
                        
                       
                       
                       $Observaciones = User::where('id','=',$id)->select('Observaciones')->get();
                       return view('home2')->with('niveles', $nivel)->with('activo',$activo)->with('resultado',$resultado);     
                        
                    } 
                    if(is_null($resultado)){
                        
                    }
                }
                
                // ->with('resultado',$resultado);
                //->with('registrados',$registrados);
            }
        }
    }
    
}
