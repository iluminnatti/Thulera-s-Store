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
        <img class="card-img-top mt-2" src="imagens/battle.jpg" alt="Livro Battle Royale">
        <div class="card-body">
          <h5 class="card-title">Battle Royale: Remast.</h5><small>Por <span class="text-primary">Koushun Takami<span></small><br><small class="text-muted">(Português - 2014 Remasterizado)</small>
          <p class="card-text">Numa distopia, onde o japão se vê em um governo fascista bem sucedido, uma classe do 9° ano é escolhida para um programa em que devem se matar até restar apenas um vencedor.</p>
          <h4 class=""><b>R$ 41,94</b></h4>
          <small class="text-muted">De: <s>R$ 69,90</s></small>
          <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
          <button type="button" class="btn btn-danger">Comprar</button>
          <a href="#" class="btn btn-light border w-25 " id="favorito"><img src="imagens/hearticon.png" width="60%"></a>
        </div>
      </div>
      <div class="card col-md-4 float-md-left mx-sm-auto mx-auto" style="width: 18rem;">
        <img class="card-img-top mt-2 " src="imagens/saec.jpg" alt="Livro Senhor dos Anéis">
        <div class="card-body">
          <h5 class="card-title">O Senhor dos anéis - Edição Única</h5><small>Por <span class="text-primary">J. R. R. Tolkien<span></small><br><small class="text-muted">(Português - Janeiro 2001)</small>
          <p class="card-text">Este volume está composto pela primeira (A Sociedade do Anel), segunda (As Duas Torres) e terceira parte (O Retorno do Rei) da grande obra de ficção fantástica de J. R. R. Tolkien, O Senhor dos Anéis.</p>
          <h4 class=""><b>R$ 118,00</b></h4>
          <small class="text-muted">De: <s>R$ 120,00</s></small>
          <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
          <button type="button" class="btn btn-danger">Comprar</button>
          <a href="#" class="btn btn-light border w-25 " id="favorito"><img src="imagens/hearticon.png" width="60%"></a>
        </div>
      </div>
      <div class="card col-md-4 float-md-left mx-sm-auto mx-auto" style="width: 18rem;">
        <img class="card-img-top mt-2" src="imagens/jn1.jpg" alt="Livro Jogador n° 1">
        <div class="card-body">
          <h5 class="card-title">Jogador N° 1</h5><small>Por <span class="text-primary">Ernest Cline<span></small><br><small class="text-muted">(Português - Outubro 2019)</small>
          <p class="card-text">Em 2044, a terra está em guerra e fome. Porém, quando James Halliday, dono do maior jogo do mundo, base da sociedade, o OASIS morre e esconde um easter egg no mundo do jogo, de modo que aquele que o encontrasse, herdaria toda a sua fortuna e empresa, uma caça colossal se inicia.</p>
          <h4 class=""><b>R$ 32,55</b></h4>
          <small class="text-muted">De: <s>R$ 52,00</s></small>
          <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
          <button type="button" class="btn btn-danger">Comprar</button>
          <a href="#" class="btn btn-light border w-25 " id="favorito"><img src="imagens/hearticon.png" width="60%"></a>
        </div>
      </div>
      <nav aria-label="Navegação de página exemplo" class="mx-xl-auto mx-lg-auto mx-md-auto mx-sm-auto mx-auto mt-4 col-md-7">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#">Anterior</a>
          </li>
          <li class="page-item"><a class="page-link bg-primary text-white" href="livros.php">1</a></li>
          <li class="page-item"><a class="page-link" href="livros2.php">2</a></li>
          <li class="page-item"><a class="page-link" href="livros3.php">3</a></li>
          <li class="page-item"><a class="page-link" href="livros4.php">4</a></li>
          <li class="page-item">
            <a class="page-link" href="livros2.php">Próximo</a>
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
