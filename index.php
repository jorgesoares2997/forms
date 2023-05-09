<?php
  require_once("templates/header.php"); 
?>
<!-- carrousel -->
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= $BASE_URL ?>img/imger/comunicacao.JPG" class="d-block w-100" alt="Comunicação">
      <div class="carousel-caption d-none d-md-block">
        <h5>Comunicação</h5>
        <p>A comunicação pavimenta o processo e o bom funcionamento da equipe.</p>
      </div>
    </div>
    <div class="carousel-item">
      <a href="<?= $BASE_URL ?>manu.php"><img src="<?= $BASE_URL ?>img/imger/manutencao.JPG" class="d-block w-100" alt="Manutenção"></a>
      <div class="carousel-caption d-none d-md-block">
        <h5>Manutenção</h5>
        <p>A manutenção dos equipamentos garante o funcionamento deles.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= $BASE_URL ?>img/imger/unidade.JPG" class="d-block w-100" alt="Unidade">
      <div class="carousel-caption d-none d-md-block">
        <h5>Unidade</h5>
        <p>Andar em unidade é um valor inegociável da equipe de áudio IBP.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div id="para"></div>
<!-- About Area  -->
<div id="about-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Sobre a equipe de áudio IBP</h3>
                        </div>
                        <div class="col-md-6">
                            <img class="img-fluid" src="<?=$BASE_URL?>img/imger/mix.jpg" alt="audio IBP">
                        </div>
                        <div class="col-md-6">
                            <h3 class="about-title">Vivemos a Igreja nas Casas.</h3>
                            <p>Somos uma equipe que atua na <a id="ibp" class="bold" href="https://keepo.io/ibprazeres/"><abbr title="Igreja Batista Em Prazeres">IBP</abbr></a></p>
                            <p>Essa equipe foi formada á partir do crescimento da área do audio e da sonoplastia da Igreja Batista em Prazeres </p>
                            <p>Uma Igreja referencia em questões acústicas em Jaboatão dos Guararapes-PE</p>
                            <p>Nossos Valores:</p>
                            <ul id="about-list">
                                <li><i class="fas fa-check"></i>Somos Um grupo de voluntários</li>
                                <li><i class="fas fa-check"></i>Atuamos de maneira viva e inovadora</li>
                                <li><i class="fas fa-check"></i>Integramos outras áreas de atuaçao, como iluminação e streaming</li>
                                <li><i class="fas fa-check"></i>Valorizamos o aprendizado e o uso cotidiano</li>
                                <li><i class="fas fa-check"></i>Damos oportunidades de desenvolvimento ministerial</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="main-container" class="container-fluid">
              <div class="col-md-12" id="register-container">
                <h1>Conheça nossos cultos</h1>
                <div class="ratio ratio-16x9">
                  <div class="about">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/4wqzmGi3hRU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div id="about-txt">
                      <p>Conheça nosso Podcast da CASA</p>
                      <img src="<?=$BASE_URL?>img/imger/casa.png" alt="logo da casa">
                      </div>
                  </div>
                </div>
                <div class="ratio ratio-16x9">
                  <div class="about"> 
                     <iframe width="560" height="315" src="https://www.youtube.com/embed/3trEvuPvEco" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                      <div id="about-txt">
                   <p>Conheça nossa Identidade</p> 
                    <img src="<?=$BASE_URL?>img/imger/casa.png" alt="logo da casa">
                   </div>
                  <div class="ratio ratio-16x9">
                    
                  </div>
                    </div>
                 
                  <div class="about">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/KOCiENa2yMQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                      <div id="about-txt">
                    <p>Conheça nossa Cultura</p>
                     <img src="<?=$BASE_URL?>img/imger/casa.png" alt="logo da casa">
                    </div>
                    </div>
                  </div>
              
              </div>
            </div>
            
           





<?php
  require_once("templates/footer.php");
?>