<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{url('/')}}/css/style.css">
    <title>Gestion de Pacientes / Citas</title>
</head>
<body>
    @include('modules.nav')
    @if (Request::is('/'))
        <section class="container">
            <h1 class="text-center mt-5 title">Bienvenido a la plataforma!</h1>

            <div class="text-center mt-5">
                <img src="https://res.cloudinary.com/dmddi5ncx/image/upload/v1744738230/practicas/informe-medico_bvl00n.png" alt="Logo Medico" class="img-fluid">
            </div>
        </section>
    @endif

    <!-- contenido dinamico -->
    <section>
        @yield('content')
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
@stack('scripts')
</html>