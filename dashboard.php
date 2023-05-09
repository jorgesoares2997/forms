<?php
  require_once("templates/header.php");

  // Verifica se usuário está autenticado
  require_once("models/User.php");
  require_once("dao/UserDAO.php");
  

  $user = new User();
  $userDao = new UserDao($conn, $BASE_URL);
 
?>
 <div id="team-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Nosso time</h3>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="<?=$BASE_URL?>img/imger/jorge.jpg" class="card-mg-top" alt="Imagem de Perfil 1">
                                <div class="card-body" >
                                    <h5 class="card-title">Jorge Soares</h5>
                                    <a href="https://www.instagram.com/baixodejorge/"><i id="ig" class="fab fa-instagram"></i></a> <p>Mande um direct</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="<?=$BASE_URL?>img/imger/luquinhas.jpg" class="card-mg-top" alt="Imagem de Perfil 2">
                                <div class="card-body" >
                                    <h5 class="card-title">Lucas Amorim</h5>
                                    <a href="https://www.instagram.com/lucas_aafm/"><i id="ig" class="fab fa-instagram"></i></a> <p>Mande um direct</p>
                                </div>
                            </div>
                        </div>
                            <div class="col-md-3">
                            <div class="card">
                                <img src="<?=$BASE_URL?>img/imger/matheus.jpg" class="card-mg-top" alt="Imagem de Perfil 3">
                                <div class="card-body" >
                                    <h5 class="card-title">Matheus Eliaquim</h5>
                                    <a href="https://www.instagram.com/matheuswesilva/"><i id="ig" class="fab fa-instagram"></i></a> <p>Mande um direct</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="<?=$BASE_URL?>img/imger/arthur.jpg" class="card-mg-top" alt="Imagem de Perfil 4">
                                <div class="card-body" >
                                    <h5 class="card-title">Arthur Alves</h5>
                                    <a href="https://www.instagram.com/_arthursx/"><i id="ig" class="fab fa-instagram"></i></a> <p>Mande um direct</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
  require_once("templates/footer.php");
?>