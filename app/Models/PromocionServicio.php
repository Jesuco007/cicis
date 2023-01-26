<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromocionServicio extends Model
{
    use HasFactory;

    protected $table = 'promocion_servicio';

    protected $primaryKey = 'id';
    
    public $incrementing = true;

    public $timestamps = false;

    function promociones()
    {
        //La foreingky le pertenece a promocion
        return $this->belongsTo(promocion::class,'promocion_id', 'id');
    }
    
    function servicios()
    {
        return $this->belongsTo(Servicios::class,'servicio_codigo', 'codigo');
    }
}
