<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Laravel</title>

    <!-- ICONOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Nunito:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #f9f3fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* HEADER */
        .header img {
            width: 100%;
            height: 240px;
            object-fit: cover;
            display: block;
            box-shadow: 0px 3px 8px rgba(0,0,0,0.15);
        }

        /* LAYOUT */
        .container {
            display: flex;
            flex: 1;
        }

        /* SIDEBAR */
        .sidebar {
            width: 240px;
            background: #F5D3F1;
            padding-top: 20px;
            box-sizing: border-box;
            border-right: 2px solid #e7b5df;
            box-shadow: 3px 0 8px rgba(0,0,0,0.08);
        }

        .sidebar-title {
            font-size: 18px;
            font-weight: 600;
            padding: 0 20px 10px;
            color: #5e3d5f;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 14px 22px;
            text-decoration: none;
            color: #4a3d49;
            font-size: 15px;
            border-left: 5px solid transparent;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        /* ANIMACIÓN hover */
        .sidebar a::before {
            content: "";
            position: absolute;
            left: -100%;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(255,255,255,0.25);
            transition: 0.3s;
        }

        .sidebar a:hover::before {
            left: 0;
        }

        .sidebar a:hover {
            background: #efbde9;
            border-left-color: #bd4fb8;
            color: #4a003f;
            transform: translateX(3px);
        }

        .sidebar a.active {
            background: #eaa9e4;
            border-left-color: #bd4fb8;
            font-weight: 600;
            color: #4a003f;
        }

        /* CONTENIDO */
        .content {
            padding: 40px;
            flex: 1;
            background: white;
        }

        .content h1 {
            margin-top: 0;
            font-weight: 600;
            color: #6d3f6a;
        }

        /* TARJETAS */
        .card {
            background: #ffffff;
            padding: 22px;
            border-radius: 14px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
            margin-bottom: 22px;
            border-left: 5px solid #d97bd3;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 18px rgba(0,0,0,0.12);
        }

        .card h3 {
            margin: 0 0 10px;
            font-weight: 600;
            color: #6b2f6b;
            display: flex;
            align-items: center;
        }

        /* FOOTER */
        footer {
            background: #F5D3F1;
            padding: 15px 0;
            text-align: center;
            color: #5d3d59;
            font-size: 14px;
            border-top: 2px solid #e7b5df;
            box-shadow: 0 -3px 8px rgba(0,0,0,0.08);
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>
<body>

    <!-- HEADER -->
    <div class="header">
        <img src="{{ asset('img/laravel2.jpg') }}" alt="header">
    </div>

    <div class="container">

        <!-- SIDEBAR -->
        <div class="sidebar">

            <div class="sidebar-title">Menú</div>

            <a href="{{ route('dashboard') }}" class="active">
                <i class="fa-solid fa-gauge-high"></i>
                Dashboard
            </a>

            <a href="{{ route('posts') }}">
                <i class="fa-solid fa-file-pen"></i>
                Posts
            </a>

            <a href="{{ route('media') }}">
                <i class="fa-solid fa-photo-film"></i>
                Media
            </a>

            <a href="{{ route('pages') }}">
                <i class="fa-solid fa-file-lines"></i>
                Pages
            </a>

            <a href="{{ route('settings') }}">
                <i class="fa-solid fa-gear"></i>
                Settings
            </a>

        </div>

        <!-- CONTENIDO -->
        <div class="content">

            @yield('content')

            <!-- Tarjetas decorativas -->
            <div class="card">
                <h3>Últimas novedades</h3>
                <p>No hay novedades por ahora</p>
            </div>

            <div class="card">
                <h3>Actividad reciente</h3>
                <p>Aún no se registra actividad.</p>
            </div>

        </div>
    </div>

    <!-- FOOTER -->
    <footer>
        Dashboard desarrollado — {{ date('Y') }}
    </footer>

</body>
</html>
