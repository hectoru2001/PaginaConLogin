<?php 

    include 'conexion.php';

    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    $query = "INSERT INTO usuarios(nombres, apellidos, correo, contrasena)
              VALUES ('$nombres', '$apellidos', '$correo', '$contrasena')";
    
    $verificacion = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

    if(mysqli_num_rows($verificacion) > 0){
        echo '
        <script> 
            alert("Este correo ya está en uso, prueba con otro");
            window.location = "../registro.php"; 
        </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);


    if($ejecutar){
        echo '<script> 
                alert ("Usuario registrado exitosamente");
                window.location = "../index.php"; 
              </script>)';
    } else {
        echo '<script> 
                alert ("Hubo un problema con su registro, inténtelo de nuevo"); 
                window.location = "../registro.php"; 
              </script>';
    } 

    mysqli_close($conexion);
?>