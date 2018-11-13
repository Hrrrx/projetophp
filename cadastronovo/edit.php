<?php
session_start();  // iniciar sessao para que o ID na linha 12 , consiga ser puxado na update.php
 include_once 'include/header_inc.php';
 include_once 'include/menu_inc.php';
?>
<div class="row_container">
  <div class="col s12">
    <h5 class="light"> Update dados </h5><hr>
  </div>
</div>
<?php
include_once 'db/conexao.php';
if (isset ($_GET['id'])) {


$id = $_GET['id'];
$_SESSION['id'] = $id; // facilitar na hora do uṕdate
$querySelect = $link->query("SELECT  * from aluno where id='$id'");  // procura todos os id da tabela

while ($registros =$querySelect->fetch_assoc()) {   // tudo que for relacionado ao id , vai ser lido

  $nome = $registros['nome'];
  $telefone = $registros['telefone'];
  $email = $registros['email'];
  $cpf = $registros['cpf'];
  $matricula = $registros['matricula'];
}
}
?>
<div class="row container">
  <form action="db/update.php" method="POST"class="col s12"> <!--col s12 ,smp 12 colunas-->
    <fieldset class="formulario">
      <legend><img src="imagens/cadastro.png" alt="[imagem]" width="100"></legend>
      <h5 class="light center"> Alterar dados</h5>

<!--Noome aluno-->
<div class="input-field coll s12">
<i class="material-icons prefix">account_circle</i>
<input type="text" name="aluno" id="aluno" value="<?php echo $nome ?>" maxlength="50" required autofocus>   <!-- abro o php para mostrar o nome da pessoa lida-->
<label for="nome">Nome Do Aluno</label>
</div>
<!-- campo email-->
<div class="input-field col s12">
<i class="material-icons prefix">email</i>
<input type="email" name="email" id="email" value="<?php echo $email ?>" maxlength="50" required >
<label for="Email"> New Email</label>
</div>
<!-- campo telefone-->
<div class="input-field col s12">
<i class="material-icons prefix">phone</i>
<input type="tel" name="telefone" id="telefone" value="<?php echo $telefone ?>" maxlength="15" required >
<label for="telefone"> Novo Numero </label>
</div>
<!-- campo matricula-->
<div class="input-field col s12">
<i class="material-icons prefix">assignment</i>
<input type="int" name="matricula" id="matricula" value="<?php echo $email ?>" maxlength="10" required >
<label for="matricula">Nova Matricula</label>
</div>
<div class="input-field col s12">
<i class="material-icons prefix">assignment_ind </i>
<input type="int" name="cpf" id="cpf" value="<?php echo $cpf ?>" maxlength="12" required >
<label for="cpf">cpf Do Aluno </label>
</div>
<div class="input-field col s12">
<input type="submit" name="" value="cadastrar" >
<a href="consulta.php" > cancelar</a>
</div>
</fieldset>
</form>
</div>
<?php include_once 'include/fot_inc.php' ?>
