<?php 
$cryptinstall="./crypt/cryptographp.fct.php";
include $cryptinstall; 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

</head>

<body>
	<form action="verificador.php">
		<table>
			<tr>
				<td>Nombre de Usuario</td>
				<td><input name="username"/></td>
			</tr>
			
			<tr>
				<td>Correo</td>
				<td><input name="correo"/></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input name="password" type="password"/></td>
			</tr>
			<tr>
				<td>Confirma Password</td>
				<td><input name="pass" type="password"/></td>
			</tr>
			
			<tr>
				<td>NIT</td>
				<td><input name="nit"/></td>
			</tr>
			<tr>
				<td>direccion</td>
				<td><input name="direccion"/></td>
			</tr>
			<tr>
				<td>Fecha nacimiento</td>
				<td><input name="fecha_naci"/></td>
			</tr>
			<tr>
				<td></td>
				<td><?php dsp_crypt(0,1);?></td>
			</tr>
			<tr>
				<td></td>
				<td align="center">Ingrese el código:<br><input type="text" name="code"/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Registrar"/></td>
			</tr>
		</table>
	</form>
</body>
</html>
