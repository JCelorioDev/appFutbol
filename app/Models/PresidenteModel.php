<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresidenteModel extends Model
{
    protected $table= 'presidente';
    public $timestamps =false;
    public $fillable = ['nom_p','ape_p', 'cedula_p','fecha_posecion_p'];
}
