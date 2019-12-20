<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrito;
use App\User;
use App\Auth;
use App\Candy;

class CarritoController extends Controller
{
    //
  //   public function detalle($id){
  //   $productos = ProductoCarrito::find($id);
  //   $vac = compact('productos');
  // return view('ventasdetalle', $vac);
  // }

  public function listado(){
  // $productousuario = Carrito::where("user_id",Auth::user()->id);
  // $listaproductos = $productousuario::paginate(5);
  $listaproductos = Carrito::all();
  $vac = compact('listaproductos');
  return view('carrito', $vac);
  }

  public function crear(Request $req){
    // if (Auth::check()){
  if ($req["usuario"]==0){
      return redirect("/register");
  }else{
      $productonuevos = new Carrito();

      $productonuevos->user_id = $req["usuario"];

      //cambiar por Auth::user()->id ??
      // ??????????????????
      $productonuevos->candy_id = $req["id"];
      $productonuevos->producto = $req["producto"];
      $productonuevos->cantidad = $req["productocantidad"];
      $sub = trim($req["subtotal"], " \t$ \t.\t \t- \t? \t: \t, \t; \t{ \t} \t[");
      $productonuevos->subtotal = $sub;

      $productonuevos->save();
      return redirect("/candys");
    // }else{return redirect("/");};
  }
  }

  public function eliminar($id){
    // $id = $req["id"];
    $elim = Carrito::find($id);
    $elim->eliminado = 1;
    $elim->save();
    return redirect("/carrito");

  }

  public function comprar($id){
    // $id = $req["id"];

      $coms= Carrito::where('user_id',"=",$id)->get();
      foreach ($coms as $com) {
        // code...
      $com->comprado = 1;
      $com->save();
    }

    return redirect("/carrito");

  }

//   public function carrito(){
//     if (Auth::check()){
//     $usercarrito = ProductoCarrito::find(Auth::user()->id);
//     $carrito = $usercarrito->productos;
//     $vac = compact('carrito');
//   return view('carrito', $vac);
//   }
// }



}
