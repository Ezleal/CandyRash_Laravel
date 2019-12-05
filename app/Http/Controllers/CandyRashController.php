<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;

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
  $peliculas = Movie::paginate(5);

$vac = compact('peliculas');
return view('listado', $vac);

}

public function new()
{
  $genres = Genre::all();
  $vac = compact('genres');
  return view('new', $vac);
}
public function create()
{
  var_dump($_POST);
}
public function detail($id)
{
    $detalle = Movie::find($id);
    

    $vac = compact('detalle');

      return view('detail', $vac );
}

}
