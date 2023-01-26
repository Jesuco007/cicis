
<?php $__env->startSection('content'); ?>

<script src="//code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<h1 class="center">Reportes gráficos</h1>

<div class="row">
    <div class="col s12 m8 offset-m2">
        <div class="row">
            <div class="col s12 m6">
                <div class="card">
                    <div class="card-content">
                        <p id="promocionMonth">Máximo Promociones en 0-2000</p>
                        <p id="promocionCount">0 Veces</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m6">
                <div class="card">
                    <div class="card-content">
                        <p id="ofertaMonth">Máximo Ofertas en 0-2000</p>
                        <p id="ofertaCount">0 Veces</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<h5 id="esperaDeCarga" class="center">
    Cargando datos para el reporte...
</h5>

<div class="row">
    <div class="col s12 m8 offset-m2">
        <canvas id="myChart1"></canvas>
    </div>
</div>

<div class="row">
    <div class="divider"></div>
</div>

<div class="row">
    <div class="col s12 m8 offset-m2">
        <canvas id="myChart2"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // ********* MAXIMO PROMOCIONES **********************************
    const parrafoMesPromocion = document.getElementById('ofertaMonth');
    const parrafoContadorPromocion = document.getElementById('ofertaCount');

    fetch("<?php echo e(route('maximoPromocionMes')); ?>")
        .then(res => res.json())
        .then(data => {
            parrafoMesPromocion.innerText = 'Máximo Promociones en ' + data[0].month;
            parrafoContadorPromocion.innerText = data[0].count + ' Veces';

        })




    // ********* MAXIMO OFERTAS **********************************
    const parrafoMesOferta = document.getElementById('promocionMonth');
    const parrafoContadorOferta = document.getElementById('promocionCount');

    fetch("<?php echo e(route('maximoOfertasMes')); ?>")
        .then(res => res.json())
        .then(data => {
            parrafoMesOferta.innerText = 'Máximo Ofertas en ' + data[0].month;
            parrafoContadorOferta.innerText = data[0].count + ' Veces';

        })






        // ************** GRAFICO PROMOCIONES POR MES ************************************
    const ctx1 = document.getElementById('myChart1');

    fetch("<?php echo e(route('promocionesPorMes')); ?>")
        .then(res => res.json())
        .then(data => {
            let cantidad = [];
            let mes = [];
            data.forEach((element, i) => {
                cantidad[i] = element.count;
                mes[i] = `${element.month}/${element.year}`;
            });

            document.getElementById('esperaDeCarga').innerText = '';

            new Chart(ctx1, {
                type: 'bar'
                , data: {
                    labels: mes
                    , datasets: [{
                        label: 'Cantidad Promociones por Mes'
                        , data: cantidad
                        , borderWidth: 1
                    , }]
                }
                , options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        })









    // ************** GRAFICO OFERTAS POR MES ************************************
    const ctx2 = document.getElementById('myChart2');

    fetch("<?php echo e(route('ofertasPorMes')); ?>")
        .then(res => res.json())
        .then(data => {
            let cantidad = [];
            let mes = [];
            data.forEach((element, i) => {
                cantidad[i] = element.count;
                mes[i] = `${element.month}/${element.year}`;
            });

            new Chart(ctx2, {
                type: 'bar'
                , data: {
                    labels: mes
                    , datasets: [{
                        label: 'Cantidad Ofertas por Mes'
                        , data: cantidad
                        , borderWidth: 1
                    , }]
                }
                , options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        })

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alfreding0\Documents\web-projects\yisu\cicis\resources\views/graphic-reports.blade.php ENDPATH**/ ?>