<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Mega Pizza | Experiência Premium</title>
    <!-- Google Fonts: Montserrat para Títulos e Inter para Corpo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Montserrat:wght@500;700;800;900&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="<?= BASE_URL ?>public/css/megapizza.css" rel="stylesheet" />
</head>
<body class="d-flex flex-column h-100 dark-theme">
    <main class="flex-shrink-0">
        <!-- Navegação com Glassmorphism -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top glass-nav transition-all">
            <div class="container py-2">
                <a class="navbar-brand" href="<?= BASE_URL ?>index.php">
                    <img src="<?= BASE_URL ?>public/img/logo.png" alt="Mega Pizza Logo" height="90" class="logo-img transition-all">
                </a>
                
                <!-- Bloco lateral: Idiomas (sempre visível) e Botão Hamburger (mobile) -->
                <div class="d-flex align-items-center order-lg-last gap-3">
                    <div class="d-flex align-items-center">
                        <a href="?lang=pt" class="text-decoration-none fw-bold <?= $lang == 'pt' ? 'text-white' : 'text-secondary' ?>">PT</a>
                        <span class="text-secondary mx-2">|</span>
                        <a href="?lang=en" class="text-decoration-none fw-bold <?= $lang == 'en' ? 'text-white' : 'text-secondary' ?>">EN</a>
                    </div>
                    
                    <button class="navbar-toggler border-0 shadow-none p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="bi bi-list fs-1 text-white"></i>
                    </button>
                </div>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center gap-3 me-lg-4">
                        <li class="nav-item">
                            <a class="nav-link text-uppercase fw-bold" href="<?= BASE_URL ?>index.php"><?= traduzir('nav_home') ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase fw-bold" href="<?= BASE_URL ?>index.php#menu"><?= traduzir('nav_menu') ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase fw-bold" href="<?= BASE_URL ?>contactos.php"><?= traduzir('nav_reservas') ?></a>
                        </li>
                        <li class="nav-item ms-lg-2">
                            <a class="nav-link text-uppercase fw-bold btn btn-premium rounded-pill px-4 py-2 shadow-glow" href="<?= BASE_URL ?>contactos.php"><?= traduzir('nav_contactos') ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Fim Navegação -->
