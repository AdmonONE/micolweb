<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    //
    protected $fillable = ['id_cuadrilla', 'id_actividad', 'NIC'];
}
