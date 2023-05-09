<?php
require_once("templates/header.php");
include_once("db.php");
include_once("dao/manuDAO");





?>

<div id="main-container" class="container-fluid">
    <div class="col-md-12">
    <h1>Cadastro de equipamentos</h1>

<p>Aqui você pode cadastrar equipamentos que precisam de reparos urgentes, manutenções preventivas</p>
<p>ou conferir o andamento de uma requisição de reparo na pagina de <a href="<?=$BASE_URL ?>equipamentos.php">Equipamentos</a></p>


<div id="main-container" class="container-fluid">
    <div class="col-md-12">
      <div class="row" id="auth-row">      
        <div class="col-md-4" id="manu-container">
          <h2>Equipamentos para Manutenção</h2>
          <form action="<?= $BASE_URL ?>manu_process.php" method="POST">
          <input type="hidden" name="type" value="create">
            <div class="form-group">
              <label for="name">O que quebrou?</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="">
            </div>
            <div class="form-group">
              <label for="description">Como quebrou?</label>
              <textarea name="description" id="description" class="form-control" cols="30" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="day">Data do ocorrido:</label>
              <input type="date" class="form-control" id="day" name="day">
            </div>
            <div class="form-group">
              <label for="type">Onde ocorreu:</label>
            <select class="form-control" id="form-control" name="type" id="type">
            <option value="...">...</option>
              <option value="Templo anexo">Templo anexo</option>
              <option value="Templo principal">Templo principal</option>
              <option value="Estudio">Estudio</option>
              <option value="Auditorio">Auditorio</option>
              <option value="Outro">Outro</option>
            </select>  
            </div>
            <div class="form-group">
              <label for="image">Foto do equipamento:</label>
              <input type="file" class="" id="image" name="image" placeholder="envie uma foto">
              
            </div>
            <div class="form-group"><input type="submit" class="btn card-btn" value="enviar"></div>
          </form>
          
        </div>
        <div id="main-container" class="container-fluid">
   
          



       


<?php
require_once("templates/footer.php");
?>