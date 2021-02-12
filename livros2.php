<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="CSS/estilo.css">

    <title>Thulera's Shop - Livros</title>
    <meta name="author" content="Marcos Túlio Barbosa Abreu">
    <meta name="description" content="Atividades Bootstrap">
    <meta name="keywords" content="sites, Bootstrap, HTML, CSS, JavaScript">
    <link rel="icon" type="imagem/png" href="imagens/analogico.png">
  </head>
  <body style="background-color: Honeydew;">
    <a name="topo"></a>

    <?php
    require("menu.inc.php");
    ?>

    <div class="container row mx-xl-auto mx-lg-auto mx-md-auto border mx-sm-auto mx-auto col-md-10 p-3 mt-4 bg-white">
      <div class="card col-md-4 float-md-left mx-sm-auto mx-auto" style="width: 18rem;">
        <img class="card-img-top mt-2" src="imagens/carboxy.png" alt="Livro Carboxy">
        <div class="card-body">
          <h5 class="card-title">Carboxy</h5><small>Por <span class="text-primary">David Souza<span></small><br><small class="text-muted">(Português - Dezembro 2016)</small>
          <p class="card-text">David Souza imagina a evolução da tecnologia aliada à evolução da dinâmica social para criar a história de Teo, habitante de "Carboxy", apelido carinhoso dado à fusão das conurbações do Rio de Janeiro e de São Paulo no Brasil de 2038.</p>
          <h4 class=""><b>R$ 35,20</b></h4>
          <small class="text-muted">De: <s>R$ 49,90</s></small>
          <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
          <button type="button" class="btn btn-danger">Comprar</button>
          <a href="#" class="btn btn-light border w-25 " id="favorito"><img src="imagens/hearticon.png" width="60%"></a>
        </div>
      </div>
      <div class="card col-md-4 float-md-left mx-sm-auto mx-auto" style="width: 18rem;">
        <img class="card-img-top mt-2 " src="imagens/fisica_quant.jpg" alt="Livro Eisberg e Resnick">
        <div class="card-body">
          <h5 class="card-title">Física Quântica - Eisberg e Resnick</h5><small>Por <span class="text-primary">Robert Eisberg<span></small><br><small class="text-muted">(Português - Julho 1979)</small>
          <p class="card-text">Uma apresentação clara das propriedades de quase todos os sistemas quânticos importantes, do ponto de vista da Mecânica Quântica Elementar. O livro foi concebido para ser utilizado em cursos de um ano por estudantes que já passaram por tratamentos substanciais de Cálculo Diferencial e Integral Elementar e de Física Clássica Elementar.</p>
          <h4 class=""><b>R$ 256,00</b></h4>
          <small class="text-muted">De: <s>R$ 278,00</s></small>
          <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
          <button type="button" class="btn btn-danger">Comprar</button>
          <a href="#" class="btn btn-light border w-25 " id="favorito"><img src="imagens/hearticon.png" width="60%"></a>
        </div>
      </div>
      <div class="card col-md-4 float-md-left mx-sm-auto mx-auto" style="width: 18rem;">
        <img class="card-img-top mt-2" src="imagens/borb_fly.jpg" alt="Livro O Último Voo das Borboletas">
        <div class="card-body">
          <h5 class="card-title">O Último Voo das Borboletas</h5><small>Por <span class="text-primary">Kan Takahama<span></small><br><small class="text-muted">(Português - Setembro 2020)</small>
          <p class="card-text">Japão, Nagasaki, século XIX. No glamoroso bairro de Maruyama, um lugar em que línguas orientais misturam-se aos acordes finos do tradicional shamisen, uma encantadora cortesã de luxo conhece um renomado médico estrangeiro, e a relação de ambos vai descortinar uma triste e secreta história de amor e morte.</p>
          <h4 class=""><b>R$ 38,16</b></h4>
          <small class="text-muted">De: <s>R$ 51,99</s></small>
          <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
          <button type="button" class="btn btn-danger">Comprar</button>
          <a href="#" class="btn btn-light border w-25 " id="favorito"><img src="imagens/hearticon.png" width="60%"></a>
        </div>
      </div>
      <nav aria-label="Navegação de página exemplo" class="mx-xl-auto mx-lg-auto mx-md-auto mx-sm-auto mx-auto mt-4 col-md-7">
        <ul class="pagination justify-content-center">
          <li class="page-item">
            <a class="page-link" href="livros.php">Anterior</a>
          </li>
          <li class="page-item"><a class="page-link" href="livros.php">1</a></li>
          <li class="page-item"><a class="page-link bg-primary text-white" href="livros2.php">2</a></li>
          <li class="page-item"><a class="page-link" href="livros3.php">3</a></li>
          <li class="page-item"><a class="page-link" href="livros4.php">4</a></li>
          <li class="page-item">
            <a class="page-link" href="livros3.php">Próximo</a>
          </li>
        </ul>
      </nav>
    </div>

    <?php
    require("footer.inc.php")
    ?>








    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>
