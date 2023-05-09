<?php
  include_once("templates/header.php");
  include_once("db.php");
  


  $equips = [];

  $id = 12;
  
  $query = "SELECT * FROM manutencao WHERE id = $id";

  $stmt = $conn->prepare($query);

  $stmt->execute();

  $equips = $stmt->fetchAll();
?>
<div id="main-container" class="container-fluid">
    <div class="col-md-12">
 
   <?php include_once("templates/backbtn.html"); ?>
   
    <div class="col-md-12" id="register-container">
        
    <?php foreach($equips as $equip): ?>
    
                <h2 id="main-title">Editar Equipamento</h2>
                <form id="create-form" action="<?= $BASE_URL ?>edit_process.php" method="POST">
                  <input type="hidden" name="type" value="edit">
                  <input type="hidden" name="id" value="<?= $equip["id"] ?>">
                  <div class="form-group"><p>Id: <?= $equip["id"] ?></p></div>
                  <div class="form-group">
                    <label for="name">Nome do Equipamento:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="<?= $equip["name"] ?>" value="<?= $equip["name"] ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="condicao">Condição do Equipamento:</label>
                    <select class="form-control" id="form-control" name="condicao" id="condicao">
                    <option value="<?= $equip["condicao"] ?>"><?= $equip["condicao"] ?></option>
                        <option value="Quebrado">Quebrado</option>
                        <option value="Em conserto">Em conserto</option>
                        <option value="Em Avaliação">Em Avaliação</option>
                        <option value="Consertado">Consertado</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="type">Onde ocorreu:</label>
                        <select class="form-control" id="form-control" name="type" id="type">
                            <option value="<?= $equip["type"] ?>"><?= $equip["type"] ?></option>
                            <option value="Templo anexo">Templo anexo</option>
                            <option value="Templo principal">Templo principal</option>
                            <option value="Estudio">Estudio</option>
                            <option value="Auditorio">Auditorio</option>
                            <option value="Outro">Outro</option>
                        </select>  
                    </div>
                     <div class="form-group">
                    <label for="day">Nova Data:</label>
                    <input type="date" class="form-control" id="day" name="day" >
                  </div>
                  <div class="form-group">
                    <label for="description">Descrição:</label>
                    <textarea type="text" class="form-control" id="description" name="description" placeholder="<?= $equip["description"] ?>" rows="3"><?= $equip['description'] ?></textarea>
                  </div>
                  
                  <div class="form-group"><input type="submit" class="btn card-btn" value="Atualizar"></div>
                </form>
               <?php endforeach; ?>
        </div>
          </div>
    </div>
<?php
  include_once("templates/footer.php");
?>
