<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //cuando queremos hacer una asignacion masiva debemos configurar aca en el metodo $fillable los campos permitidos

    //protected $fillable = ['name', 'decripcion', 'categoria']; //pero el problema de este metodo es que pueden burlar la seguridad ya que ignora el campo de token

    // la opcion seria usar el $guard ya que este ignora los campos requeridos pero no deja pasar por alto el token

    protected $guarded = [];//como no voy a pasar ningun token dejo el array vacio, sino debo mandar 'status'
}
