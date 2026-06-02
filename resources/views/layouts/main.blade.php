<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Zaka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        /* Variabel warna berdasarkan palet pilihanmu */
        :root {
            --dark-charcoal: #222521;
            --deep-olive: #40443d;
            --sage-green: #6e7a6b;
            --soft-cream: #eee3d3;
        }

        body {
            background-color: var(--soft-cream);
            color: var(--dark-charcoal);
        }

        .navbar {
            background-color: var(--dark-charcoal) !important;
        }

        .nav-link {
            color: var(--soft-cream) !important;
        }

        .nav-link:hover {
            color: var(--sage-green) !important;
        }

        .hero-section {
            background-color: var(--deep-olive);
            color: var(--soft-cream);
        }

        footer {
            background-color: var(--dark-charcoal);
            color: var(--sage-green);
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg shadow-sm py-3">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="/">Bagus Zaka</a>
            
            <div class="navbar-nav ms-auto">
                <a class="nav-link px-3" href="/">Home</a>
                <a class="nav-link px-3" href="/about">About Me</a>
                <a class="nav-link px-3" href="/skills">Skills</a>
                <a class="nav-link px-3" href="/projects">Projects</a>
                <a class="nav-link px-3" href="/contact">Contact</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

    <footer class="text-center mt-5 py-4">
        <p class="mb-0">&copy; 2026 Portofolio Mahasiswa IT</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>