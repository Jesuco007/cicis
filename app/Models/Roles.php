<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $primaryKey = 'id';
    
    public $incrementing = true;

    public $timestamps = false;

    function user()
    {
        //Roles tiene uno o muchos datos foraneas en usuarios
        return $this->belongsTo(User::class,'id_user', 'id');
    }
}
