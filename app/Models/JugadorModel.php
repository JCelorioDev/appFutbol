<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JugadorModel extends Model
{
    protected $table= 'jugador';
    public $timestamps =false;
    public $fillable = ['nom_j','cedula_j', 'ncamisa_j','posicion','id_equipo'];
}
