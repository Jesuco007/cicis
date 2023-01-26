<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    protected $table = 'items';

    protected $primaryKey = 'id';
    
    public $incrementing = true;

    public $timestamps = false;

    function cursos()
    {
        //usuarios tiene uno o muchas foreingky en ofertas
        return $this->hasOne(Cursos::class,'items_id', 'id');
    }

    function promociones()
    {
        return $this->hasMany(Promociones::class,'items_id', 'id');
    }

    function servicios()
    {
        //usuarios tiene uno o muchas foreingky en ofertas
        return $this->hasOne(Servicios::class,'items_id', 'id');
    }
}
