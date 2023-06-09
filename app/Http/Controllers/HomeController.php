<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Roles;
use App\Models\UsersRoles;
use App\Models\User;

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
            return view('home');
        }
    }
}
