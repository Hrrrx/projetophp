<?php

	include "db/conexao.php";

	session_start();
	$_SESSION['nome'] = $_REQUEST['nome'];
	$_SESSION['senha'] = $_POST['senha'];

	$sql = "SELECT * FROM aluno WHERE nome = '";
	$sql .= $_SESSION['nome'] . "' and senha = '";
	$sql .= $_SESSION['senha'] . "'";

    if($resultado = mysqli_query($link, $sql)){
       if(mysqli_num_rows($resultado) > 0){
       		header("Location:index.php");

       } else {
		session_destroy();
		echo "SENHA OU EMAIL INCORRETOS";
		}
    }

?>
