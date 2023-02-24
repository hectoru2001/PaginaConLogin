<?php
session_start();

include 'conexion.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];


// Obtener la contraseña encriptada del usuario con el correo proporcionado
$validarIni = mysqli_query($conexion, "SELECT contrasena FROM usuarios WHERE correo='$correo'");
$usuario = mysqli_fetch_assoc($validarIni);
$password_hash = $usuario['contrasena'];

// Comparar la contraseña ingresada por el usuario con la contraseña encriptada
if (password_verify($contrasena, $password_hash)) {
    $_SESSION['usuario'] = $correo;
    header ("location: ../index.php");
    exit;
} else {
    echo '
        <script>
            alert("Este usuario no existe o la contraseña es incorrecta, verifica tu información");
            window.location = "../inicio_ses.php";
        </script>
    ';
}

?>