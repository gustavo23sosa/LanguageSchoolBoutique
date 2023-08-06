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
                $id = Auth::user()->id;
                // $registrados = User::select('users.fk_nivel')->where('id','=',$id)->get();
                $nivel = Auth::user()->fk_nivel;
                $activo = Auth::user()->activo;
                $resultado = User::where('id','=',$id)->select('Resultado')->get();
                // return response()->json($resultado);  
                if ($resultado[0]->Resultado >=0 && $resultado[0]->Resultado <= 50) {
                    $estatus = User::where('id', '=', $id)->update(['Observaciones' => 'Es capaz de comprender y utilizar expresiones cotidianas de uso muy frecuente así como frases sencillas destinadas a satisfacer necesidades de tipo inmediato. Puede presentarse a sí mismo y a otros, pedir y dar información personal básica sobre su domicilio, sus pertenencias y las personas que conoce. Puede relacionarse de forma elemental siempre que su interlocutor hable despacio y con claridad y esté dispuesto a cooperar.']);
                    $Observaciones = User::where('id','=',$id)->select('Observaciones')->get();
                    return view('home2')->with('niveles', $nivel)->with('activo',$activo)->with('resultado',$resultado)->with('Observaciones',$Observaciones);

                    
                }
                if ($resultado[0]->Resultado >50 && $resultado[0]->Resultado <= 100) {
                    
                   
                   $estatus = User::where('id', '=', $id)->update(['Observaciones' => 'Es capaz de comprender frases y expresiones de uso frecuente relacionadas con áreas de experiencia que le son especialmente relevantes (información básica sobre sí mismo y su familia, compras, lugares de interés, ocupaciones, etc). Sabe comunicarse a la hora de llevar a cabo tareas simples y cotidianas que no requieran más que intercambios sencillos y directos de información sobre cuestiones que le son conocidas o habituales. Sabe describir en términos sencillos aspectos de su pasado y su entorno así como cuestiones relacionadas con sus necesidades inmediatas.']);
                   $Observaciones = User::where('id','=',$id)->select('Observaciones')->get();
                   return view('home2')->with('niveles', $nivel)->with('activo',$activo)->with('Observaciones',$Observaciones);
                    
                }         
                return view('home2')->with('niveles', $nivel)->with('activo',$activo);
                // ->with('resultado',$resultado);
                //->with('registrados',$registrados);
            }
        }
    }
    
}
