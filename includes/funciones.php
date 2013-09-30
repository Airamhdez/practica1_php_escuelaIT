<?php
	function mostrarForm()
	{
		echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
				<label for="login">Login</label><br>
				<input type="text" name="login" id="login" /><br>
				<label for="password">Password</label><br>
				<input type="password" name="password" id="password" /><br>
				<input type="submit" name="enviar" id="enviar" value="Iniciar sesión" />
			</form>';
	}

	function mostrarAutenticado($usuario)
	{
		echo "<p>Bienvenido ".$usuario."</p>
			<a href='cerrar_sesion.php'>Cerrar sesión</a>";	
	}
?>