<?php
    session_start();
    require_once('../inc/db.php');
?>
<?php include'inc/header.php';?>
<?php include'inc/menu.php';?> 
  <section class="info">
        <div class="container p-12">
    <div class = "row">
        <div class="col-md-12">
            <div class ="card text-center">
                <div class="card-body">
                    <h1 class="card-title">Sistema CRUD</h1>
                    <p class="card-text">Un sistema CRUD permite ejecutar las operaciones básicas de trabajo en PHP y MySQL. Se usará una pequeña base de datos con una tabla llamada "alumno" para demostrar el funcioamiento</p>
                    <p class="card-text">Seleccione la operación en el menú de navegación ó en las siguientes cards:</p>                    
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="card-title">CREATE</h2>
                                    <p class="card-text">Esta opción permite CREAR un registro en la BDD</p>
                                    <a href="create.php" class="btn btn-primary">Crear</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="card-title">READ</h2>
                                    <p class="card-text">Esta opción permite LEER un registro de la BDD</p>
                                    <a href="read.php" class="btn btn-primary">Leer</a>
                                </div>
                            </div>

                        <div class="col-sm-6"> <br> </div>
                    
                    </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="card-title">UPDATE</h2>
                                    <p class="card-text">Esta opción permite ACTUALIZAR un registro de la BDD</p>
                                    <a href="update.php" class="btn btn-primary">Actualizar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="card-title">DELETE</h2>
                                    <p class="card-text">Esta opción permite BORRAR un registro de la BDD</p>
                                    <a href="delete.php" class="btn btn-primary">Borrar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php include'inc/footer.php';?>
</div>
</div>
</section>
