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
        $id = Auth::user()->id;
        $rol = UsersRoles::where('fk_users','=', $id)->get();
        if ($rol[0]->fk_roles == '1') {
             $registradosUs = User::select('name','aPaterno','aMaterno','email','telefono', 'users.id')
            ->join('UsersRoles AS UR','UR.fk_users','=','users.id')
            ->join('roles AS R','R.ID','=','UR.fk_roles')
            ->join('estatusUser AS EU','EU.ID','=','users.fk_estatus')
            ->where('users.fk_estatus','=','1')
            ->where('users.activo','=','0')->get();

            return view('admin')->with('registradosUs', $registradosUs);
        }elseif ($rol[0]->fk_roles == '2') {
            $id = Auth::user()->id;
            $registradosUs = User::where('id','=',$id)->select('archivo')->get();
            if(is_null($registradosUs[0]->archivo) ) {
                $nivel = Nivel::where('activo','=','1')->get();
                $clase = Clases::where('activo','=','1')->get();
                return view('home')->with('niveles',$nivel)->with('clases',$clase);
            }else{
                // $id = Auth::user()->id;
                // $registrados = User::select('users.fk_nivel')->where('id','=',$id)->get();
                $nivel = Auth::user()->fk_nivel;
                return view('home2')->with('niveles', $nivel);
                //->with('registrados',$registrados);
            }
        }
    }
    
}
