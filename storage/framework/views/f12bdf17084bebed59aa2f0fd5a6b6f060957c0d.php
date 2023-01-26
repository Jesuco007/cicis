<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        M.Sidenav.init(elems, {});

        var elemDate = document.querySelectorAll('.datepicker');
        M.Datepicker.init(elemDate, {
            format: 'yyyy-mm-dd'
        });

        var elemSelect = document.querySelectorAll('select');
        M.FormSelect.init(elemSelect, {});

        var elems = document.querySelectorAll('.dropdown-trigger');
        var instances = M.Dropdown.init(elems, {});
    });

    function showProgress() {
        var elem = document.getElementById('modal-wait');
        M.Modal.init(elem, {
            'dismissible': false
            , 'opacity': 0.2
        });
        var instance = M.Modal.getInstance(elem);
        instance.open();
    }

</script>


<script>
    console.log('Cargando tema...');
    const darkModeOld = 'darkModeOld';
    const lightModeOld = 'lightModeOld';
    const darkModeYoung = 'darkModeYoung';
    const lightModeYoung = 'lightModeYoung';
    const darkModeChild = 'darkModeChild';
    const lightModeChild = 'lightModeChild';

    let theme = localStorage.getItem('theme');

    const clearTheme = () => {
        document.body.classList.remove('darkmode');
        document.body.classList.remove('darkmode-young');
        document.body.classList.remove('lightmode-young');
        document.body.classList.remove('darkmode-child');
        document.body.classList.remove('lightmode-child');
    }

    const enableDarkModeOld = () => {
        clearTheme();

        document.body.classList.add('darkmode');
        localStorage.setItem('theme', darkModeOld);
    }

    const disabledDarkModeOld = () => {
        clearTheme();

        localStorage.setItem('theme', lightModeOld);
    }

    const enableDarkModeYoung = () => {
        clearTheme();

        document.body.classList.add('darkmode-young');
        localStorage.setItem('theme', darkModeYoung);
    }

    const disabledDarkModeYoung = () => {
        clearTheme();

        document.body.classList.add('lightmode-young');
        localStorage.setItem('theme', lightModeYoung);
    }

    const enableDarkModeChild = () => {
        clearTheme();

        document.body.classList.add('darkmode-child');
        localStorage.setItem('theme', darkModeChild);
    }

    const disabledDarkModeChild = () => {
        clearTheme();

        document.body.classList.add('lightmode-child');
        localStorage.setItem('theme', lightModeChild);
    }




    const btnDarkModeOld = document.querySelector('#darkmode-old');
    btnDarkModeOld.addEventListener('click', () => {
        console.log('click dark mode old');
        enableDarkModeOld();
    });

    const btnLightModeOld = document.querySelector('#lightmode-old');
    btnLightModeOld.addEventListener('click', () => {
        console.log('click light mode old');
        disabledDarkModeOld();
    });

    const btnLightModeYoung = document.querySelector('#lightmode-young');
    btnLightModeYoung.addEventListener('click', () => {
        console.log('click light mode young');
        disabledDarkModeYoung();
    });

    const btnLightModeChild = document.querySelector('#lightmode-child');
    btnLightModeChild.addEventListener('click', () => {
        console.log('click light mode child');
        disabledDarkModeChild();
    });








    const getThemeConfigured = () => {
        console.log(theme);

        if (theme === darkModeOld)
            enableDarkModeOld();
        else if (theme === lightModeOld)
            disabledDarkModeOld();
        else if (theme === darkModeYoung)
            enableDarkModeYoung();
        else if (theme === lightModeYoung)
            disabledDarkModeYoung();
        else if (theme === darkModeChild)
            enableDarkModeChild();
        else if (theme === lightModeChild)
            disabledDarkModeChild();
        else
            cambiarTemaSegunHora();
    }




    const cambiarTemaSegunHora = () => {
        let time = new Date();
        console.log('Tema segun hora: ' + time);
        let h = time.getHours();
        console.log(h);
        if (h >= 18 || h <= 6) {
            enableDarkModeOld();
        } else {
            disabledDarkModeOld();
        }
    }

    getThemeConfigured();

</script>
<?php /**PATH C:\Users\alfreding0\Documents\web-projects\yisu\cicis\resources\views/layouts/scripts.blade.php ENDPATH**/ ?>