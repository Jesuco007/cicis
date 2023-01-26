<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ofertas extends Model
{
    use HasFactory;

    protected $table = 'ofertas';

    protected $primaryKey = 'id';
    
    public $incrementing = true;

    public $timestamps = false;

    function usuarios()
    {
        return $this->belongsTo(User::class,'user_id', 'id');
    }

    function proformas()
    {
        return $this->hasMany(Proformas::class,'ofertas_id', 'id');
    }

    function cursos()
    {
        return $this->belongsTo(Cursos::class,'cursos_codigo', 'codigo');
    }
}
