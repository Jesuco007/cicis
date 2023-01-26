<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromocionCurso extends Model
{
    use HasFactory;

    protected $table = 'promocion_curso';

    protected $primaryKey = 'id';
    
    public $incrementing = true;

    public $timestamps = false;

    function cursos()
    {
        //La foreingky le pertenece a cursos
        return $this->belongsTo(Cursos::class,'cursos_codigo', 'codigo');
    }
    
    function promociones()
    {
        return $this->belongsTo(Promociones::class,'promocion_id', 'id');
    }
}
