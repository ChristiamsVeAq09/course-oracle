<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.: Registro de Edicion :.</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../funciones.js"></script>
</head>
<body>
<form action="" method="post">
        <h1>Editar tabla alumnos</h1>
        <div class="row">
            <div class="col">
                <label for="id">Id</label>
                <input type="text" name="id" id="id" class="form-control" value="<?php echo $_GET['id'] ?>" required disabled>
            </div>
            <div class="col">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control" required>
            </div>
            <div class="col">
                <label for="bloque">Bloque</label>
                <input type="text" name="bloque" id="bloque" class="form-control" required>
            </div>
        </div>
            <div class="col">
                <label for="semestre">Semestre</label>
                <input type="text" name="semestre" id="semestre" class="form-control" required>
            </div>
            <div class="col">
                <label for="carrera">Carrera</label>
                <input type="text" name="carrera" id="carrera" class="form-control" required>
            </div>
            <div class="row">
            <div class="col">
                <label for="habilitado">¿Está habilitado?</label>
                <input type="checkbox" name="habilitado" id="habilitado">
            </div>
        </div>
        <div class="d-flex flex-row">
            <div class="p-2">
                <button type="submit" class="btn btn-success boton">Actualizar</button>
            </div>
            <div class="p-2">
                <button class="btn btn-secondary" onclick="redirectToPage()">Cancelar</button>
            </div>
        </div>
    </form>

    <?php

        if(isset($_POST["nombre"])
        && isset($_POST["apellido"]) && isset($_POST["bloque"])&& isset($_POST["semestre"])&& isset($_POST["carrera"])){
            $id = $_GET["id"];
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $bloque = $_POST["bloque"];
            $semeste = $_POST["semestre"];
            $carrera = $_POST["carrera"];
            $habilitado = isset($_POST["habilitado"]) ? 1 : 0;

            include '../db/db.php';

            $sql = "UPDATE Alumno SET nombre='$nombre',apellido='$apellido', bloque='$bloque', semestre='$semeste', carrera='$carrera' habilitado=$habilitado WHERE id=$id";

            try {
                $execute = mysqli_query($db, $sql);
                if($execute){
                    echo "<script>show('Record updated successfully', 'success');</script>";
                }
            } catch(Exception $e){
                echo "<script>show('Something went wrong!', 'error');</script>";
            }
            $db->close();
        }
        
    ?>
</body>
</html>