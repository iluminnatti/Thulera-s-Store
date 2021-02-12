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

    <title>Thulera's Shop - Produtos Novos</title>
    <meta name="author" content="Marcos Túlio Barbosa Abreu">
    <meta name="description" content="Loja Virtual">
    <meta name="keywords" content="sites, Bootstrap, HTML, CSS, JavaScript">
    <link rel="icon" type="imagem/png" href="imagens/analogico.png">
  </head>
  <body style="background-color: Honeydew;">
    <a name="topo"></a>

    <?php
    require("menu.inc.php");
    ?>

    <div class="container row mx-xl-auto mx-lg-auto mx-md-auto border mx-sm-auto mx-auto col-md-10 p-3 mt-3 bg-white">
      <div class="card col-md-4 float-md-left mx-sm-auto mx-auto" style="width: 18rem;">
        <img class="card-img-top" src="imagens/doometernal.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Disco Soundtrack Doom Eternal</h5>
          <p class="card-text">Estrassalhe demônios enquanto ouve essa excitante trilha sonora que motiva qualquer um a seguir seu caminho de campeão.<br><hr></p>
          <h4 class=""><b>R$ 149,99</b></h4>
          <small class="text-muted">De: <s>R$ 199,99</s></small>
          <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
          <button type="button" class="btn btn-danger">Comprar</button>
          <a href="#" class="btn btn-light border w-25 " id="favorito"><img src="imagens/hearticon.png" width="60%"></a>
        </div>
      </div>
      <div class="card col-md-4 float-md-left mx-sm-auto mx-auto" style="width: 18rem;">
        <img class="card-img-top" src="imagens/god_sound.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Disco Soundtrack God of War</h5>
          <p class="card-text">Relaxe com esse estupendo soundtrack que com certeza te animará para sair em uma jornada com seu filho, matando monstros e deuses pelo caminho.<br><hr></p>
          <h4 class=""><b>R$ 169,99</b></h4>
          <small class="text-muted">De: <s>R$ 219,99</s></small>
          <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
          <button type="button" class="btn btn-danger">Comprar</button>
          <a href="#" class="btn btn-light border w-25 " id="favorito"><img src="imagens/hearticon.png" width="60%"></a>
        </div>
      </div>
      <div class="card col-md-4 float-md-left mx-sm-auto mx-auto" style="width: 18rem;">
        <img class="card-img-top" src="imagens/red_sound.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Disco Soundtrack Red Dead Redemption</h5>
          <p class="card-text">Assalte um banco enquanto ouve essa exuberante trilha sonora que lhe tornará um verdadeiro fora da lei (OBS: Planos bostas podem matar sua gangue).<br><hr></p>
          <h4 class=""><b>R$ 189,99</b></h4>
          <small class="text-muted">De: <s>R$ 259,99</s></small>
          <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
          <button type="button" class="btn btn-danger">Comprar</button>
          <a href="#" class="btn btn-light border w-25 " id="favorito"><img src="imagens/hearticon.png" width="60%"></a>
        </div>
      </div>
      <nav aria-label="Navegação de página exemplo" class="mx-xl-auto mx-lg-auto mx-md-auto mx-sm-auto mx-auto mt-4">
        <ul class="pagination justify-content-center">
          <li class="page-item">
            <a class="page-link" href="produtos_novos.php" tabindex="-1">Anterior</a>
          </li>
          <li class="page-item"><a class="page-link" href="produtos_novos.php">1</a></li>
          <li class="page-item"><a class="page-link bg-primary text-white" href="produtos_novos2.php">2</a></li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Próximo</a>
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
