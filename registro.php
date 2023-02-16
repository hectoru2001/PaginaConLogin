<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/style2.css">
	<link rel="icon" type="image/svg+xml" href="./images/favicon.png" />
    <title> Inicio de sesión </title>
</head>
<body>

<header class="cabecera">
        <nav>
            <ul>
                <li><a href="index.php"> Inicio </a></li>
                <li><a href="camisetas.php"> Camisetas </a></li>
                <li><a href="nosotros.php"> Nosotros </a></li>
                <li> </li>
            </ul>
        </nav>
</header>

    <section class="login">
		<div class="login_box">
			<div class="left">
				<div class="contact">
					<form action="php/signup.php" method="POST">
						<h1>Crear nueva cuenta</h1>
						<input name="nombres" type="text" placeholder="Ingrese sus nombres">
						<input name="apellidos" type="text" placeholder="Ingrese sus apellidos">
						<input name="correo" type="text" placeholder="Ingrese su correo electrónico">
						<input name="contrasena" type="password" placeholder="Ingrese una contraseña">
						<button class="submit">Registrarse</button>
						<p style="text-align: center;"> <a href="inicio_ses.php"> ¿Ya estas registrado? Inicia sesión </a></p>
					</form>
				</div>
			</div>
			<div class="right">
				<div class="right-text">
					<h2>Jetsports</h2>
					<h5>¡Tu tienda de camisetas favorita!</h5>
				</div>
			</div>
		</div>
	</section>
    
</body>
</html>