<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $primaryKey = 'id';
    
    public $incrementing = true;

    public $timestamps = false;

    function roles()
    {
        //La foreingky le pertenece a roles
        return $this->belongsTo(Roles::class,'roles_id', 'id');
    }
    
    function persona()
    {
        return $this->belongsTo(Persona::class,'persona_id', 'id');
    }

    function ofertas()
    {
        //usuarios tiene uno o muchas foreingky en ofertas
        return $this->hasMany(Ofertas::class,'usuarios_id', 'id');
    }
}
