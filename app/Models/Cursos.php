<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;

    protected $table = 'cursos';

    protected $primaryKey = 'codigo';
    
    public $incrementing = true;

    public $timestamps = false;

    function ofertas()
    {
        return $this->hasMany(Ofertas::class,'cursos_codigo', 'codigo');
    }

    function items()
    {
        return $this->belongsTo(Items::class,'items_id', 'id');
    }
}
