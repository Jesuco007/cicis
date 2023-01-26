<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proformas extends Model
{
    use HasFactory;

    protected $table = 'proformas';

    protected $primaryKey = 'id';
    
    public $incrementing = true;

    public $timestamps = false;

    function ofertas()
    {
        return $this->belongsTo(Ofertas::class,'oferta_id', 'id');
    }
}
