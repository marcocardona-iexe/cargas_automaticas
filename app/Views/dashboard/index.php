<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
    <h1 class="text-primary">Bienvenido al Enrolamiento 🎉</h1>
    <p class="lead">Has iniciado sesión correctamente.</p>

    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Crear Generaciones</h5>
                    <p class="card-text">Crear generaciones y asignarles materias </p>
                    <a href="#" class="btn btn-primary">Ir a</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Enrolar Usuarios</h5>
                    <p class="card-text">Permite asignar materias a los alumnos</p>
                    <a href="#" class="btn btn-success">Ir a</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Calendarización de cursos</h5>
                    <p class="card-text">Agregar duracion de cada matería.</p>
                    <a href="#" class="btn btn-warning">Ir a</a>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
