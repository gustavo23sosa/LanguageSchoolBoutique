<?php

namespace App\Http\Responses;

use Illuminate\Contracts\Auth\StatefulGuard;
use Laravel\Fortify\Http\Responses\LoginResponse as FortifyLoginResponse;
use Illuminate\Support\Facades\DB;
use App\Models\Roles;
use App\Models\EstatusUser;
use App\Models\UsersRoles;
use App\Models\User;
use App\Models\Nivel;
use App\Models\Clases;
use Auth;
use Mail;


class LoginResponse extends FortifyLoginResponse
{
    //protected $guard;

    public function __construct()//StatefulGuard $guard)
    {
        //$this->guard = $guard;
    }

    public function toResponse($request)
    {        

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
                // $id = Auth::user()->id;
                // $registrados = User::select('users.fk_nivel')->where('id','=',$id)->get();
                $nivel = Auth::user()->fk_nivel;
                return view('home2')->with('niveles', $nivel);
                //->with('registrados',$registrados);
            }
        }
    }
}