<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipoModel extends Model
{
    protected $table= 'presidente';
    public $timestamps =false;
    public $fillable = ['nom_e','ape_e', 'cedula_e','fecha_posecion_e','id_presidente'];
}
