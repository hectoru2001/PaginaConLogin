<?php

    session_start();

    include 'conexion.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $validarIni = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'");

    if(mysqli_num_rows($validarIni) > 0){
        $_SESSION['usuario'] = $correo;
        header ("location: ../index.php");
        exit;
    }else{
        echo '
            <script>
                alert("Este usuario no existe, verifica tu información");
                window.location = "../inicio_ses.php"):
            </script>
        ';
    }
?>