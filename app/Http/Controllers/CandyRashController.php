<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candy;
use App\Categorie;

class CandyRashController extends Controller
{
  public function index(){
      return view('index');

    }

    public function faq(){
      return view('faq');

    }
    public function producto(){

          return view('producto');

        }

        public function perfil(){

              return view('perfil');

            }

    public function register()
  {
        return view('register');
  }

    public function login()
  {
  return view('login');

  }

  public function listado()
{
  $candys = Candy::paginate(6);

$vac = compact('candys');
return view('listado', $vac);

}

public function new()
//para que es
{
  $categories = Categorie::all();
  $vac = compact('categories');
  return view('new', $vac);
}
public function create(Request $req)
{
  $productonuevo = new Candy();
    $productonuevo->title = $req["title"];
    $productonuevo->stock = $req["stock"];
    $productonuevo->price = $req["price"];

    $productonuevo->save();
    return redirect("/");
}
public function detail($id)
{
    $detalle = Candy::find($id);


    $vac = compact('detalle');

      return view('detail', $vac );
}

//??
public function edit(){
  return view('edit');
}



}
