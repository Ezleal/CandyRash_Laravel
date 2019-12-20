<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candy extends Model
{
    public $table = 'candys';
    public $primaryKey = 'id';
    public $guarded = [];

    public function getCategorieName(): string{

      if($this->categorie_id){
        $categorie = Categorie::find($this->categorie_id);


        return $categorie->name;
      }

      return "Sin Categoria";
    }


    public function users(){
      return $this->belongsToMany("App\User","mi_carrito","candy_id","user_id" );
    }


//
// public function getName()
// {
//   $candy = Candy::find($this->candy_id);
//
//
//   return $candy->title;
// }
}
