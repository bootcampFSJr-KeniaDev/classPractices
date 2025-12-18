<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Gestion de tareas</title>
</head>
<body>
    <?php
        #Llamamos a la configuracion para tener un nav global
        require_once '../config.php';
        require_once BASE_PATH . 'layouts/nav.php';
    ?>
    <section class="container">
        <h1 class="text-center mt-4">Lista de Tareas</h1>

        <?php 
            require_once "../controllers/ManagerController.php";
            //obtener todas las tareas para el administrador
            $tasks = ManagerController::getTasks();
        ?>

        <a href="./register_task.php" class="btn btn-success my-4">Registrar Tarea</a>

        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Titulo</th>
                <th>Estado</th>
                <th>Empleado</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                <?php foreach($tasks as $task){ ?>
                    <tr>
                        <td><?php echo $task['id']; ?></td>
                        <td><?php echo $task['title']; ?></td>
                        <td><?php echo $task['status']; ?></td>
                        <td><?php echo $task['id_employee']; ?></td>
                        <td>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editarModal<?php echo $task['id']; ?>">Editar</button>
                        </td>
                        <td><button class="btn btn-danger">Cambiar Estado</button></td>
                    </tr>

                    <!-- Modal para editar tareas -->
                    <div class="modal fade" id="editarModal<?php echo $task['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Tareas</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="" method="post">
                                    <div class="modal-body">
                                        <!--  Id tarea oculto -->
                                        <input type="hidden" name="id_task" value="<?php echo $task['id']; ?>">
                                        <label for="">Title</label>
                                        <input type="text" class="form-control" name="title" value="<?php echo $task['title']; ?>">

                                        <label for="">Descripcion</label>
                                        <input type="text" name="description" class="form-control" value="<?php echo $task['description']; ?>">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary">Actualizar Datos</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </tbody>
        </table>
        <?php 
            #actualizando una tarea
            if(isset($_POST['id_task'], $_POST['title'], $_POST['description'])){
                $id_task = $_POST['id_task'];
                $title = $_POST['title'];
                $description = $_POST['description'];

                echo ManagerController::edit($id_task, $title, $description);
            }
        ?>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>