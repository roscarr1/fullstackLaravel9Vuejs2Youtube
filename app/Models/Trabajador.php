<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    use HasFactory;

    protected $table = 'trabajadores';
    protected $fillable = ['apellidos','nombres','direccion','telefono','correo'];

    public $timestamps = false;
}
