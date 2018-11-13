<?php
session_start();
include_once 'conexao.php';
$aluno=$_POST['aluno'];
$email =$_POST['email'];
$telefone=$_POST['telefone'];
$matricula=$_POST['matricula'];
$cpf=$_POST['cpf'];
$senha=$_POST['senha'];
$querySelect=$link->query("SELECT  cpf from aluno"); // procura cpf na tabela aluno
$array_cpf=[];

while ($cpfs=$querySelect->fetch_assoc()):   //verificando cpf existente pela query da tabela no banco,e salvando em $array_cpf
  $cpf_exist = $cpfs['cpf'];
  array_push($array_cpf,$cpf_exist);
endwhile;
if (in_array($cpf,$array_cpf)):
$_SESSION['msg'] = "<p class='center red-text'>".'ja existe um aluno cadastrado com esse cpf'."</p>";   // ja cadastrado?,volta
header('Location:../');
else:
  $queryInsert=$link->query("INSERT INTO aluno (id,nome,telefone,email,cpf,matricula,senha) VALUES (default,'$aluno','$telefone','$email','$cpf','$matricula', '$senha')");
  //salvando no banco depois da verificação
  $affected_rows= mysqli_affected_rows($link); //verificando linhas afetadas
  if ($affected_rows > 0):
    $_SESSION['msg'] = "<p class='center green-text'>".'cadastrado com sucesso'."<br></p>";
    header('location:../');
endif;
endif;
?>
