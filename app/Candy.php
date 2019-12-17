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
}
