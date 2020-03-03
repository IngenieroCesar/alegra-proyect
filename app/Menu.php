<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menu";
    protected $fillable = ['nombre'. 'url'. 'icono']; //De esta manera controlamos el ingreso masivo de datos
    protected $guarded = ['id']; //No permite cambiar este campo

}
