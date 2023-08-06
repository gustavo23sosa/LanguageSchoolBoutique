<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\UsersRoles;
use App\Models\User;
use App\Models\Nivel;
use App\Models\Clases;

class EstatusAlumno extends Controller
{
    //
    public function alumnosAceptados(){
        $id = Auth::user()->id;
        $registradosUs = User::select('users.name','users.aPaterno','users.aMaterno','users.email','users.telefono','EU.estatus','EF.entidad', 'users.id')
            ->join('UsersRoles AS UR','UR.fk_users','=','users.id')
            ->join('Roles AS R','R.ID','=','UR.fk_roles')
            ->join('RstatusUser AS EU','EU.ID','=','users.fk_estatus')
            ->join('EntidadFederativa AS EF','EF.id','=','users.fk_estado')
            ->where('users.id', '=' ,$user)
            ->get();
            return view('admin')->with('registradosUs', $registradosUs);
    }
	public function detalleAlumno(Request $request){
		$id = Auth::User()->id;
		$user = $request['id_user'];
        $usuariodetalle = User::select('users.name','users.aPaterno','users.aMaterno','users.email','users.telefono','users.Resultado','users.Observaciones','clas.tipo', 'Ni.nivel','EU.estatus','EF.entidad', 'users.id')
            ->join('UsersRoles AS UR','UR.fk_users','=','users.id')
            ->join('Roles AS R','R.ID','=','UR.fk_roles')
            ->join('Nivel AS Ni','Ni.ID','=','users.fk_nivel')
            ->join('Clases AS clas','clas.ID','=','users.fk_clases')
            ->join('EstatusUser AS EU','EU.ID','=','users.fk_estatus')
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
        $usuariodetalle = User::select('users.name','users.aPaterno','users.aMaterno','users.email','users.telefono', 'users.id')
            ->join('UsersRoles AS UR','UR.fk_users','=','users.id')
            ->join('Roles AS R','R.ID','=','UR.fk_roles')
            ->join('EstatusUser AS EU','EU.ID','=','users.fk_estatus')
            ->join('EntidadFederativa AS EF','EF.id','=','users.fk_estado')
            ->where('users.id', '=' ,$user)
            ->get();
            // return response()->json($usuariodetalle);
        return redirect()->route('home')->with('danger','Usuario dado de baja con exito');
    }
    public function AceptarUsuario(Request $request)
    {
        //
        $id = Auth::User()->id;
        $user = $request['id_user'];
        $estatus = User::where('id', $user)->update(['activo' => '1','fk_estatus'=>'2']);
        $usuariodetalle = User::select('users.name','users.aPaterno','users.aMaterno','users.email','users.telefono', 'users.id')
            ->join('UsersRoles AS UR','UR.fk_users','=','users.id')
            ->join('Roles AS R','R.ID','=','UR.fk_roles')
            ->join('EstatusUser AS EU','EU.ID','=','users.fk_estatus')
            ->join('EntidadFederativa AS EF','EF.id','=','users.fk_estado')
            ->where('users.id', '=' ,$user)
            ->get();
            // return response()->json($usuariodetalle);
        return redirect()->route('home')->with('success','Aceptado con exito, se ha activado su ficha de examen al alumno');
    }
    public function ModificaUsuario(Request $request){
        $id = Auth::User()->id;
        $user = $request['id_user'];
        $obs = $request['Observaciones'];
        $estatus = User::where('id', $user)->update(['Observaciones' => $obs]);
        return redirect()->route('home')->with('warning','Usuario modificado con exito');
    }

}
