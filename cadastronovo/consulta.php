<?php include_once 'include/header_inc.php' ?>
<?php include_once 'include/menu_inc.php' ?>
<div class="row container">
  <div class="col s12">
    <h5 class="light"> Consultas</h5><hr>

    <table>
      <thead>
        <tr>
          <th>nome</th>
          <th>telefone</th>
          <th>email</th>
          <th>cpf</th>
          <th>matricula</th>
        </tr>
      </thead>
      <tbody>
<?php include_once('db/read.php') ?>  <!--os dados foram processados no read.php e printados aqui-->
      </tbody>
    </table>
  </div>
</div>
<?php include_once 'include/fot_inc.php' ?>
