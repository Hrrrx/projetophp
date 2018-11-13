<?php
session_start();
include_once 'conexao.php';
$id = $_SESSION['id'];
$nome = $_POST['aluno'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];   //name que vem do edit.php
$matricula = $_POST['matricula'];
$cpf = $_POST['cpf'];

$queryUpdate=$link->query("UPDATE aluno SET nome='$nome', telefone='$telefone',email='$email',cpf='$cpf',matricula='$matricula' where id='$id'");
// salvando no banco de dados os novos dados digitado na pagina edição
$affected_rows=mysqli_affected_rows($link); //verificando as linhas afetadas
if ($affected_rows > 0) {
  header("Location:../consulta.php");
}

 ?>
