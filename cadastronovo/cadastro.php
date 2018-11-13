<?php session_start() ?>
<?php include_once 'include/header_inc.php' ?>  <!-- botei em include , pq levei esculacho -->
<?php include_once 'include/menu_inc.php' ?>
           <!--formulario de cadastro-->
           <div class="row container">
             <form action="db/create.php" method="POST"class="col s12"> <!--col s12 ,smp 12 colunas-->
               <fieldset class="formulario">      <!--agrupar elementos-->
                 <legend><img src="imagens/cadastro.png" alt="[imagem]" width="100"></legend>
                 <h5 class="light center"> Cadastro Aluno</h5>
                 <?php
                  if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];   // mostrar que foi cadastrado com sucesso
                    session_unset();
                  }
                  ?>

           <!--Noome aluno-->
<div class="input-field coll s12">
  <i class="material-icons prefix">account_circle</i>
  <input type="text" name="aluno" id="aluno" maxlength="50" required autofocus> <!--maxlength qtde de acordo com o banco-->
</div>
<!-- campo email-->
<div class="input-field col s12">
  <i class="material-icons prefix">email</i>
  <input type="email" name="email" id="email" maxlength="50" required placeholder="Email do Aluno" > <!--required para tratar os erros-->

</div>
<!-- campo telefone-->
<div class="input-field col s12">
  <i class="material-icons prefix">phone</i>
  <input type="tel" name="telefone" id="telefone" maxlength="15" required placeholder="Telefoner do Aluno">

</div>
<!-- campo matricula-->
<div class="input-field col s12">
  <i class="material-icons prefix">assignment</i>
  <input type="int" name="matricula" id="matricula" maxlength="10" required placeholder="Digite a Matricula" >

</div>
<div class="input-field col s12">
  <i class="material-icons prefix">assignment_ind</i>
  <input type="int" name="cpf" id="cpf" maxlength="12" required placeholder="Digite o CPF">

</div>
<div class="input-field col s12">
  <input type="submit" name="" value="cadastrar" class="btn btn-primary"/>
  <button type="submit" name="" value="apagar" class="btn btn-dark"/>Apagar</button>
</div>
</fieldset>
</form>
</div>
<?php include_once 'include/fot_inc.php' ?>
