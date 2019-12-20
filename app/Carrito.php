<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    //
    public $table = "mi_carrito";
    public $primaryKey = "id";
    
    public $guarded = [];
}
