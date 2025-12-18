<?php 
    require_once "./controllers/AuthenticationController.php";
    session_start(); 
    if(!isset($_SESSION['id_employee'])){
        //header("location: login.php?error=⚠️ Debes iniciar sesion");
        //exit;
        echo "⚠️ Debes iniciar sesion";
    }else{
?>
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
        require_once 'config/config.php';
        require_once BASE_PATH . 'layouts/nav.php';
    ?>
    <h1 class="text-center text-primary mt-4">Gestion de tareas FSJ26</h1>
    <h3 class="text-center my-3 text-secondary">Bienvenido/a <?php echo $_SESSION["employee"]; ?></h3>

    <p class="fw-bold text-center text-info">Administracion de tareas y empleados!</p>

    <div class="text-center">
        <form action="" method="post">
            <button type="submit" name="logout" class="btn btn-danger mt-4">Cerrar Sesion</button>
        </form>
        <?php
            if(isset($_POST['logout'])){
                AuthenticationController::logout();
            }
        ?>
    </div>
    <?php } ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>