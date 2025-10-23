<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juragan Tas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
    body {
        background-color: #ffffff;
        color: #212529;
    }
    .bg-merah {
        background-color: #b30000;
    }
    .btn-merah {
        background-color: #b30000;
        color: white;
        border: none;
    }
    .btn-merah:hover {
        background-color: #a00000;
        color: white;
    }
    .text-merah {
        color: #b30000;
    }

    .navbar-custom {
        background-color: #b30000;
        height: 100px; 
        font-size: 1.2rem;
        transition: all 0.3s ease-in-out;

    }

    .logo-brand {
        width: 70px;
        height: 70px;
        border-radius: 50%;
    }

    .brand-text {
        font-size: 1.6rem;
        font-weight: 800;
        color: white;
        letter-spacing: 1px;
        float: left;
    }

    .navbar-custom .nav-link {
        color: #fff !important;
        transition: color 0.3s;
    }

    .navbar-custom .nav-link:hover {
        color: #ffcc00 !important;
    }

    @media (max-width: 992px) {
        .navbar-custom {
            height: auto;
            padding: 10px 0;
            float: left;
        }

        .logo-brand {
            width: 55px;
            height: 55px;
            float: left;
        }

        .brand-text {
            font-size: 1.3rem;
        }

        .navbar-custom .nav-link {
            padding: 10px;
            text-align: center;
            
        }
        }
        .input-group-text i {
        font-size: 1.2rem;
        color: #b30000;
        }
        .input-group-text:hover i {
            color: #ffcc00;
        }
    </style>

</head>
<body>

    @if (Route::currentRouteName() !== 'login')
    @include('components.navbar')
    @endif

    <main class="container-fluid p-0 m-0">
        @yield('content')
    </main>

    @if (Route::currentRouteName() !== 'login')
    @include('components.footer')
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')
</body>
</html>
