<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller

{

    public function login(){
        return view('login');
    }
    public function registro(){
        return view('registro');
    }
    public function registrar(Request $request){
        $request->validate([
            'nombre' => 'required',
            'password1' => 'required',
            'password2' => 'required'
        ]);
        if($request->password1 != $request->password2){
            return back()->with('PasswordD', 'La contraseña no coincide');
        }
        $users = App\User::all();
        foreach($users as $user){
            if($user->name == $request->nombre){     
             return back()->with('Usuario', 'No se pudo guardar, nombre de usuario repetido');
            }
        }
        $Newuser = new App\User;
        if($request->admin){
            $Newuser->admin = $request->admin;
        }
        else{
            $Newuser->admin ="0";
        }
        $Newuser->name = $request->nombre;
        $Newuser->password = $request->password1;  
        $Newuser->save();
        return back()->with('Registro', 'Registrado correctamente');
    }
    public function validar(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $users = App\User::all();
        foreach($users as $user){
            if($user->name == $request->username && $user->password == $request->password){
                $id= $user->id;
                return view('menu',compact('id' , 'users'));
            }
        }
        return back()->with('mensaje', 'No se pudo ingresar, los datos no coinciden');
    }
    public function menu($id){
        $users = App\User::all();
        return view('menu',compact('id','users'));
    }
    
    public function buscador($id){
        $users = App\User::all();
        $relacion = App\Relacion::all();
        $productos = App\Productos::all();
        $empresas = App\Empresas::all();
        return view('buscador',compact('users','relacion','productos','empresas','id'));
    }

    public function cambiarProducto(Request $request, $id){
        $request->validate([
            'idEmpresa' => 'required',
            'nombreProc' => 'required',
            'cantidad' => 'required',
            'tipo' => 'required'
        ]);
        $producto=App\Productos::find($id)->first();
        $relacion=App\Relacion::where('producto_id',$id)->first();
        $relacion->empresa_id = $request->idEmpresa;
        $relacion->cantidad= $request->cantidad;
        $relacion->save();
        $producto->nombre = $request->nombreProc;
        $producto->tipo = $request->tipo;
        $producto->save();
        return back()->with('mensaje', 'Producto editado!');
    }

    public function agregarProducto($id){
        $users = App\User::all();
        $empresas = App\Empresas::all();
        return view('agregarProducto',compact('empresas','id'));
    }
    public function agregarEmpresa($id){
        $users = App\User::all();
        return view('agregarEmpresa',compact('users','id'));
    }
    public function crear(Request $request){
        $request->validate([
            'idEmpresa' => 'required',
            'nombreProd' => 'required',
            'tipo' => 'required',
            'cantProd' => 'required'
        ]);
        $productoNuevo = new App\Productos;
        $relacionNueva = new App\Relacion;
        $empresa = App\Empresas::findOrFail($request->idEmpresa);
        $productoNuevo->nombre = $request->nombreProd;
        $productoNuevo->tipo = $request->tipo;
        $productoNuevo->save();
        $productos= App\Productos::all();
        $ultimoProducto = $productos->last();
        $relacionNueva->empresa_id = $empresa->id;
        $relacionNueva->producto_id = $ultimoProducto ->id;
        $relacionNueva->cantidad = $request->cantProd;
        $relacionNueva->save();
        return back()->with('mensaje', 'Producto guardado');
    }
    public function crear2(Request $request){
        $request->validate([
            'nombreEmp' => 'required',
            'telefono' => 'required',
            'direccion' => 'required'
        ]);
        $empresas = App\Empresas::all();
        foreach($empresas as $empresa){
            if($empresa->nombre == $request->nombreEmp){     
             return back()->with('mensaje2', 'No se pudo guardar, nombre de empresa repetida');
            }
        }
        $nuevaEmpresa = new App\Empresas;
        $nuevaEmpresa->nombre = $request->nombreEmp;
        $nuevaEmpresa->telefono = $request->telefono;
        $nuevaEmpresa->direccion = $request->direccion;
        $nuevaEmpresa->save();
        return back()->with('mensaje', 'Empresa guardada');
    }
    public function eliminar($id){
        $relaciones=App\Relacion::where('producto_id',$id)->delete();
        $producto=App\Productos::find($id)->delete();
    
        return back()->with('mensaje', 'Producto eliminado');
    }
    public function editar($id2){
        $empresas = App\Empresas::all();
        return view('cambiarProducto', compact('id2','empresas'));
    }
    
}
