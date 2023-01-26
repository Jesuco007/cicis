<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'persona';

    protected $primaryKey = 'id';
    
    public $incrementing = true;

    public $timestamps = false;

    function usuarios()
    {
        return $this->hasMany(Usuarios::class,'usuarios_id', 'id');
    }
}
