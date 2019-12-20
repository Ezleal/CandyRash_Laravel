<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrito;
use App\User;
use App\Auth;

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
  $listaproductos = Carrito::paginate(5);
  $vac = compact('listaproductos');
  return view('carrito', $vac);
  }

  public function crear(Request $req){
    // if (Auth::check()){
  $productonuevos = new Carrito();
  $productonuevos->user_id = $req["usuario"];
  //cambiar por Auth::user()->id ??
  // ??????????????????
  $productonuevos->candy_id = $req["id"];
  $productonuevos->cantidad = $req["productocantidad"];
  $productonuevos->subtotal = $req["subtotal"];

  $productonuevos->save();
  return redirect("/candys");
// }else{return redirect("/");};

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
