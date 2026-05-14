<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Home</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style-home.css') }}">
</head>
<body>

    <div class="phone">

        <!-- Logo -->
        <div class="logo">
            @include('note.layouts._partials.logo')
            <span>listening and writing you learn</span>
        </div>

        <!-- Texto -->
        <div class="content">
            <h2>Aplicación Notes</h2>

            <p>
                Plataforma web interactiva que <br> transforma texto en audio en inglés, <br>ayudando a practicar pronunciación,<br> listening y aprendizaje del idioma en tiempo real.
            </p>
        </div>

        <!-- Botones -->
        @include('note.layouts._partials.login-register')
    </div>

</body>
</html>