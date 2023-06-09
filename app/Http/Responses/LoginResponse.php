<?php

namespace App\Http\Responses;

use Illuminate\Contracts\Auth\StatefulGuard;
use Laravel\Fortify\Http\Responses\LoginResponse as FortifyLoginResponse;
use Illuminate\Support\Facades\DB;
use App\Models\cat_redesconatrib;
use App\Models\Roles;
use App\Models\usersRoles;
use App\Models\User;
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
             $registradosUs = User::select('name','aPaterno','aMaterno','email','telefono', 'users.id')
            ->join('UsersRoles AS UR','UR.fk_users','=','users.id')
            ->join('roles AS R','R.ID','=','UR.fk_roles')
            ->join('estatusUser AS EU','EU.ID','=','users.fk_estatus')
            ->where('users.fk_estatus','=','1')
            ->where('users.activo','=','0')->get();
            return view('admin')->with('registradosUs', $registradosUs);
        }elseif ($rol[0]->fk_roles == '2') {
            return view('home');
        }
    }
}