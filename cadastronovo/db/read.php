<?php
include_once 'conexao.php';
$querySelect = $link->query("select * from aluno");

while ($registros = $querySelect->fetch_assoc()) {
$id = $registros['id'];
  $nome =$registros['nome'];
$telefone =$registros['telefone'];
  $email = $registros['email'];
  $cpf = $registros['cpf'];
  $matricula = $registros['matricula'];

echo "<tr>";
echo "<td> $nome </td>  <td> $telefone </td>      <td> $email </td> <td> $cpf </td> <td> $matricula </td>
<td>   <a href='edit.php?id=$id'> <i class='material-icons'> edit </i> </a> </td> <td>   <a href='db/delete.php?id=$id'> <i class='material-icons'> delete </i> </a> </td>"   ;
echo "</tr>";


}

 ?>
