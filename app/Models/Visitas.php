<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitas extends Model
{
    use HasFactory;

    protected $table = 'visitas';

    public $timestamps = false;

    public static function add()
    {
        $visita = Visitas::find(1);
        $visita->contador = $visita->contador + 1;
        $visita->save();
    }

    public static function counter()
    {
        $visita = Visitas::find(1);
        return $visita->contador;
    }
}
