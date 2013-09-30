<?php
	session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cerrar sesión</title>
</head>
<body>
	<?php
		if(isset($_SESSION['login']))
		{
			session_destroy();
			echo "<h3>Su sesión se ha cerrado correctamente</h3>
				<a href='login.php'>Volver a logearse</a>";
		}
		else
		{
			echo "<h3>El usuario no ha iniciado sesión</h3>
				<a href='login.php'>Ir a logearse</a>";
		}
	?>	
</body>
</html>