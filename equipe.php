<?php
  require_once("templates/header.php");

  // Verifica se usuário está autenticado


?>
  
  <div id="main-container" class="container-fluid">
    <div class="col-md-12">
    <h1>Formulario de cadastro de Voluntario</h1>

<p>Aqui você pode se inscrever para fazer parte da equipe de áudio IBP</p>
<div class="col-md-12" id="register-container">
          <h2>Cadastro Para Equipe</h2>
          <form action="<?= $BASE_URL ?>equipe_process.php" method="POST">
            <input type="hidden" name="type" value="register">
            <div class="form-group">
              <label for="email">E-mail:</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail">
            </div>
            <div class="form-group">
              <label for="name">Nome:</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome" required>
            </div>
            <div class="form-group">
              <label for="lastname">Sobrenome:</label>
              <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Digite seu sobrenome" required>
            </div>
            <div class="form-group">
              <label for="number">whatsapp:</label>
              <input type="tel" class="form-control" id="number" name="number" placeholder="81 9 xxxx-xxxx" required>
            </div>
            <div class="form-group">
              <label for="instagram">Instagram:</label>
              <input type="text" class="form-control" id="instagram" name="instagram" placeholder="link do seu perfil no instagram">
            </div>
            <input type="submit" class="btn card-btn" value="Registrar">
          </form>
        </div>
    </div>
  </div>





<?php
  require_once("templates/footer.php");
?>