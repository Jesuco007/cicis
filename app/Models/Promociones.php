<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promociones extends Model
{
    use HasFactory;

    protected $table = 'promociones';

    protected $primaryKey = 'id';
    
    public $incrementing = true;

    public $timestamps = false;

    function items()
    {
        //La foreingky le pertenece a roles
        return $this->belongsTo(Items::class,'items_id', 'id');
    }
}
