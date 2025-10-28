<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //use HasFactory;

     protected $fillable = [ 'nombre','apellido','correo','salario'];
}
