<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Trabajo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/login.css">

</head>

<?php

include("modal/modal.php");
include("php/connect.php");

if (isset($_POST['submit'])) {
    $result = "SELECT * FROM usuario";

    $usuario = $_POST['usuario'];
    $contraseña = $_POST['password'];
    $bandera = true;

    $valor = "";


    $sql = mysqli_query($connect, $result);
    while ($row = mysqli_fetch_assoc($sql)) {
        if ($contraseña == $row['contraseña'] && $usuario = $_POST['usuario'] == $row['user']) {
            $bandera = false;
            $valor = $row['id'];
        }
    }
    if ($bandera == true) {
        MensajeAlerta('error', 'ERROR DE DATOS', "index.php");
    } else {
        MensajeAlerta('correcto', 'BIENVENIDO', "usuario.php?usuario=" . $valor);
    }
}

?>


<body>

    <header>
        <h2>Gobierno Regional</h2>
        <div class="img_login">
            <img src="img/Escudo_Región_Puno.png" alt="imagen login">
        </div>
    </header>
    <article>
        <form action="" method="post">
            <input type="text" placeholder="Usuario" name="usuario">
            <input type="password" placeholder="Contraseña" name="password">
            <input type="submit" value="Entrar" name="submit">
        </form>
    </article>
    <footer class="text-white">
            <a href="#">Olvido su Contraseña?</a>
    </footer>

</body>

</html>
<script src="js/modal.js"></script>