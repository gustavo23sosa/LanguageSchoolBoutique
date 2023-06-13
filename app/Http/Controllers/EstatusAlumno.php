<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\UsersRoles;
use App\Models\User;

class EstatusAlumno extends Controller
{
    //
	public function detalleAlumno(Request $request){
		$id = Auth::User()->id;
		$user = $request['id_user'];
        $usuariodetalle = User::select('name','aPaterno','aMaterno','email','telefono','Observaciones','nivel','EU.estatus','EF.entidad', 'users.id')
            ->join('UsersRoles AS UR','UR.fk_users','=','users.id')
            ->join('roles AS R','R.ID','=','UR.fk_roles')
            ->join('estatusUser AS EU','EU.ID','=','users.fk_estatus')
            ->join('EntidadFederativa AS EF','EF.id','=','users.fk_estado')
            ->where('users.id', '=' ,$user)
            ->get();
            // return response()->json($usuariodetalle);
        return view('detallealumno')->with('usuariodetalle',$usuariodetalle);
	}
	 public function BajaUsuario(Request $request)
    {
        //
        $id = Auth::User()->id;
        $user = $request['id_user'];
        $estatus = User::where('id', $user)->update(['fk_estatus' => '3']);
        $usuariodetalle = User::select('name','aPaterno','aMaterno','email','telefono','EU.estatus','EF.entidad', 'users.id')
            ->join('UsersRoles AS UR','UR.fk_users','=','users.id')
            ->join('roles AS R','R.ID','=','UR.fk_roles')
            ->join('estatusUser AS EU','EU.ID','=','users.fk_estatus')
            ->join('EntidadFederativa AS EF','EF.id','=','users.fk_estado')
            ->where('users.id', '=' ,$user)
            ->get();
            // return response()->json($usuariodetalle);
        return redirect()->route('home')->with('danger','Usuario dado de baja con exito');
    }
    public function ModificaUsuario(Request $request){
        $id = Auth::User()->id;
        $user = $request['id_user'];
        $obs = $request['Observaciones'];
        $estatus = User::where('id', $user)->update(['Observaciones' => $obs]);
        return redirect()->route('home')->with('warning','Usuario modificado con exito');
    }

}
