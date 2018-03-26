<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sistema extends Model
{
    //
    protected $fillable = ['id', 'email', 'proceso', 'OS', 'fecha', 'cuadrilla', 'actividad', 'estado', 'materiales', 'costo'];
}
