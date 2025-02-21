<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-mi-navbar text-mi-navbar">
    <div class="container">
        <a class="navbar-brand text-white" href="<?= site_url('dashboard') ?>">Mi Dashboard</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">

                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= site_url('dashboard') ?>">Inicio</a>
                    </li>
                <!-- Solo se muestra a los usuarios del grupo admin -->
                <?php if( auth()->user()->inGroup('admin')) : ?>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= site_url('dashboard/create') ?>">Crear</a>
                    </li>
                <?php endif; ?>
            </ul>

            <!-- Contenedor de usuario alineado correctamente -->
            <div class="d-flex align-items-center">
                <span class="text-white me-3"><?= esc(auth()->user()->username ?? auth()->user()->email) ?></span>
                <a href="<?= site_url('logout') ?>" class="btn btn-outline-light">Cerrar sesión</a>
            </div>
        </div>
    </div>
</nav>


    <div class="container mt-4">
