<?php
	session_start();
	require_once("includes/funciones.php");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Iniciar sesión</title>
</head>
<body>
	<?php 
		if(isset($_SESSION['login']))
			mostrarAutenticado($_SESSION['login']);
		else
		{
			if(isset($_POST['login']))
			{
				$userList = array(
					array("user1","passuser1"),
					array("user2","passuser2"),
					array("user3","passuser3"),
					array("user4","passuser4")
				);
				if(isset($_POST['login']) && isset($_POST['password']))
				{
					$i = 0;
					$encontrado = false;
					while($i < count($userList) && $encontrado == false)
					{
						if($_POST['login'] == $userList[$i][0] && $_POST['password'] == $userList[$i][1])
							$encontrado = true;
						else
							$i++;
					}
					if($encontrado)
					{
						mostrarAutenticado($_POST['login']);
						$_SESSION['login'] = $_POST['login'];
					}
					else
					{
						echo "<p>El nombre de usuario o la contraseña no es correcta</p>";
						echo "<a href='".$_SERVER['PHP_SELF']."'>Volver a logearse</a>";
					}
				}
			}
			else
				mostrarForm();
		}
	?>
</body>	
</html>