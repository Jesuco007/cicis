<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
{
    public function reportes(){
        return view('graphic-reports');
    }

    public function promocionesPorMes(){
        $promocionesPorMes = DB::select("SELECT count(promociones.id), EXTRACT(MONTH FROM promociones.fecha_inicio) as month, EXTRACT(YEAR FROM promociones.fecha_inicio) as year FROM promociones
                                            GROUP BY EXTRACT(MONTH FROM promociones.fecha_inicio), EXTRACT(YEAR FROM promociones.fecha_inicio)
                                            ORDER BY year, month asc
                                            LIMIT 15;
                                            ");

        return response($promocionesPorMes);
    }

    public function maximoPromocionMes(){
        $maximoPromocionMes = DB::select("SELECT count(promociones.id), EXTRACT(MONTH FROM promociones.fecha_inicio) || '/' || EXTRACT(YEAR FROM promociones.fecha_inicio) as month FROM promociones
                                            GROUP BY EXTRACT(MONTH FROM promociones.fecha_inicio) || '/' || EXTRACT(YEAR FROM promociones.fecha_inicio)
                                            ORDER BY count desc
                                            LIMIT 1;
                                            ");
        return response($maximoPromocionMes);
    }

    public function ofertasPorMes(){
        $ofertasPorMes = DB::select("SELECT count(ofertas.id), EXTRACT(MONTH FROM ofertas.fecha_inicio) as month, EXTRACT(YEAR FROM ofertas.fecha_inicio) as year FROM ofertas
                                        GROUP BY EXTRACT(MONTH FROM ofertas.fecha_inicio), EXTRACT(YEAR FROM ofertas.fecha_inicio)
                                        ORDER BY year, month asc
                                        LIMIT 15;
                                        ");

        return response($ofertasPorMes);
    }

    public function maximoOfertasMes(){
        $maximoOfertasMes = DB::select("SELECT count(ofertas.id), EXTRACT(MONTH FROM ofertas.fecha_inicio) as month, EXTRACT(YEAR FROM ofertas.fecha_inicio) as year FROM ofertas
                                            GROUP BY EXTRACT(MONTH FROM ofertas.fecha_inicio), EXTRACT(YEAR FROM ofertas.fecha_inicio)
                                            ORDER BY count desc
                                            LIMIT 1;
                                            ");

        return response($maximoOfertasMes);
    }
}
