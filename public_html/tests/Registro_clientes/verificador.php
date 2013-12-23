<?php
	$cryptinstall="./crypt/cryptographp.fct.php";
	include $cryptinstall;
	
	session_start();
	
	if(isset($_POST["username"]) && isset($_POST["password"])
		&& isset($_POST["pass"]) && isset($_POST["name"]) && isset($_POST["apellido"])
		&& isset($_POST["nit"])) {
		
		$username=$_POST["username"];
		$password=$_POST["password"];
		$pass=$_POST["pass"];
		$name=$_POST["name"];
		$apellido=$_POST["apellido"];
		$nit=$_POST["nit"];
		
		if($username!=NULL && $password!=NULL && $pass!=NULL && $name!=NULL && $apellido!=NULL && $nit!=NULL){
			
			if($pass == $password){
				
				if(chk_crypt($_POST["code"])){
					//conección a base de datos para inserción
					$_SESSION["username"]=$username;
					$_SESSION["tipo"]="cliente";
					
					echo '<script>location.href="index.php";</script>';
				}else{
					echo '<script>location.href="registro.php?mensaje=noCoincide";</script>';
				}
			}else{
				echo '<script>location.href="registro.php?mensaje=noCoincidePass";</script>';
			}
			
		}else{
			echo '<script>location.href="registro.php?mensaje=vacios";</script>';
		}
	}else {
		echo '<script>location.href="registro.php?mensaje=vacios";</script>';
	}
?>