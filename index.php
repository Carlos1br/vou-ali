<?php require_once("header.php"); ?>

  <div id="up">
    <a href="#"></a>
  </div>
  <!-- carousel -->
  <section id="banner">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/aluguel-de-onibus-para-excursoes-e-passeio-de-escola-no-jardim-franca.jpg"
            alt="Primeiro Slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/hopi-hari-panoramica-2.jpg" alt="Segundo Slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/post_dsc00373.jpg" alt="Terceiro Slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
  </section>
  <section id="servicos">
    <div class="container mt-5">
      <h2 class="mb-2">Serviços</h2>
      <div class="row">
        <?php listarServicos();  ?> 
  </section>
  <section id="sobre">
    <div class="container mt-5">
      <h2>Sobre</h2>
      <div class="row">
        <div class="col">
          <img src="img/Vou ali-logo-1000.png" class="img-fluid" alt="">
        </div>
        <div class="col">
          <h2>Sobre</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente voluptate nesciunt id quaerat, ducimus
            ratione! At eaque, nihil provident facilis veniam nemo praesentium aspernatur esse perferendis, totam dicta
            sint vitae?</p>
        </div>
      </div>
    </div>
  </section>
  <section id="contato">
    <div class="container mt-5">
      <h2>Contato</h2>
      <div class="row">
        <div class="col">
          <form>
            <div class="form-group">
              <label for="formGroupExampleInput">Nome</label>
              <input type="text" class="form-control" id="formGroupExampleInput">
            </div>
            <div class="form-group">
              <label for="nome">E-mail</label>
              <input type="text" class="form-control" id="nome">
            </div>
            <div class="form-group">
              <label for="mensagem">Mensagem</label>
              <textarea name="mensagem" id="mensagem" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <button class="btn btn-primary">Enviar</button>
            </div>
          </form>
        </div>
        <div class="col">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.051366938101!2d-46.67744548538287!3d-23.602490668996683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce50ab7feb4519%3A0x739f0ddb0439cf94!2sDigital%20House%20S%C3%A3o%20Paulo!5e0!3m2!1spt-BR!2sbr!4v1569682036000!5m2!1spt-BR!2sbr"
            width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
  </section>
<?php require_once("footer.php"); ?>