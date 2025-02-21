<body class="d-flex flex-column min-vh-100">
    <?= view('layouts/header', ['title' => $this->renderSection('title') ?: 'Dashboard']) ?>

    <main class="container flex-grow-1 mt-4">
        <?= $this->renderSection('content') ?>
    </main>

    <?= view('layouts/footer') ?>
</body>
