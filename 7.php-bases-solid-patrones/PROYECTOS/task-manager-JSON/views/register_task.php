<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registro de tareas</title>
</head>
<body>
    <?php
        require_once "../controllers/ManagerController.php";
        #Llamamos a la configuracion para tener un nav global
        require_once '../config.php';
        //obtener empleados
        $employees = ManagerController::all();
        require_once BASE_PATH . 'layouts/nav.php';
    ?>
    <main class="container">
        <h1 class="text-center text-primary">Registro de Tareas</h1>

        <form action="" method="POST">
            <label for="">ID</label>
            <input type="text" class="form-control" name="id_task">

            <label for="">Title</label>
            <input type="text" class="form-control" name="title">

            <label for="">Descripcion</label>
            <textarea name="description" class="form-control"></textarea>

            <label for="">Seleccionar Empleado</label>
            <select name="id_employee" class="form-control">
                <?php foreach($employees as $item) { ?>
                    <option value="<?php echo $item['id_employee']; ?>"><?php echo $item['name']; ?></option>
                <?php } ?>
            </select>

            <input type="submit" class="btn btn-dark mt-4" value="Guardar Datos">
        </form>
    </main>

    <?php
        if(isset($_POST['id_task'], $_POST['title'], $_POST['description'], $_POST['id_employee'])){
            $id_task = $_POST['id_task'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $id_employee = $_POST['id_employee'];
            #creando tareas
            $task = new TaskModel($id_task, $title, $description, $id_employee);
            
            echo ManagerController::create($task);
        }
        
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>