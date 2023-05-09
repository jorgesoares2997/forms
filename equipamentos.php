<?php

include_once("db.php");

include_once("templates/header.php");
$equips = [];

$query = "SELECT * FROM manutencao";

$stmt = $conn->prepare($query);

$stmt->execute();

$equips = $stmt->fetchAll();

?>

<div class="container">
   
    <h1 >Condição dos equipamentos</h1>
    <?php if(count($equips) > 0 ): ?>
      <table class="table" id="equips-table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Condição</th>
            <th scope="col">Descrição</th>
            <th scope="col">Dia do ocorrido</th>           
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($equips as $equip): ?>
            <tr>
              <td scope="row" class="col-id"><?= $equip["id"] ?></td>
              <td scope="row"><?= $equip["name"] ?></td>
              <td scope="row"><?= $equip["condicao"] ?></td>
              <td scope="row"><?= $equip["description"] ?></td>
              <td scope="row"><?= $equip["day"] ?></td>
              <td class="actions">                
                <a href="<?=$BASE_URL?>edit.php"><i id="edit-icon" class="far fa-edit edit-icon"></i></a>
                <form class="delete-form" action="<?= $BASE_URL ?>manu_process.php" method="POST">
                  <input type="hidden" name="type" value="delete">
                  <input type="hidden" name="id" value="<?= $equip["id"] ?>">
                  <button type="submit" class="delete-btn"><i id="delete-icon" class="fa-solid fa-eraser"></i></button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else: ?>  
      <p id="empty-list-text">Ainda não há contatos na sua agenda, <a href="#">clique aqui para adicionar</a>.</p>
    <?php endif; ?>
  </div>


<?php
include_once("templates/footer.php");
?>