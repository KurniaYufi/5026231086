<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard | Kurnia Yufi Satrio Laksono</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        crossorigin="anonymous" />
    <style>
        body {
            background-color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0;
        }

        header.jumbotron {
            background-color: #17a2b8;
            color: white;
            border-radius: 0;
            margin-bottom: 0;
            padding: 3rem 2rem;
            text-align: center;
        }

        nav.navbar-custom {
            background-color: #343a40;
        }

        nav.navbar-custom .navbar-nav .nav-link {
            color: #adb5bd;
            font-weight: 500;
            padding: 0.75rem 1rem;
        }

        nav.navbar-custom .navbar-nav .nav-link:hover{
            background-color: #495057;
            color: #fff;
            border-radius: 0.25rem;
        }

        main.content {
            flex: 1;
            padding: 2rem 1rem;
            max-width: 1140px;
            margin: 0 auto;
            width: 100%;
        }

        footer {
            text-align: center;
            padding: 1rem 0;
            color: #6c757d;
            background-color: #f1f1f1;
            margin-top: auto;
        }

        @media (max-width: 576px) {
            header.jumbotron {
                padding: 2rem 1rem;
            }
        }
    </style>
</head>

<body>
    <!-- Jumbotron/Header -->
    <header class="jumbotron">
        <h1 class="display-4">Kurnia Yufi Satrio Laksono - 5026231086</h1>
        <p class="lead">Pemrograman Web Kelas B</p>
    </header>

    <!-- Navbar under jumbotron -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="/frontend"><i class="fas fa-code"></i> All Front End</a>
                <a class="nav-item nav-link" href="/pegawai"><i class="fas fa-users"></i> Pegawai</a>
                <a class="nav-item nav-link" href="/minuman"><i class="fas fa-cocktail"></i> Tugas CRUD</a>
                <a class="nav-item nav-link" href="#"><i class="fas fa-clipboard"></i> EAS</a>
                <a class="nav-item nav-link" href="/latihan1"><i class="fas fa-pencil-alt"></i> Latihan 1</a>
                <a class="nav-item nav-link" href="#"><i class="fas fa-pencil-ruler"></i> Latihan 2</a>
                <a class="nav-item nav-link" href="/karyawan"><i class="fas fa-user-tie"></i> Latihan 3</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="content">
        <div class="container-fluid">
            @yield('content')
        </div>
    </main>

    <footer>
        &copy; 2025 Kurnia Yufi Satrio Laksono. All rights reserved.
    </footer>

    <!-- Bootstrap JS & dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
