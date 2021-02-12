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
        <img class="card-img-top mt-2" src="imagens/frank.jpg" alt="Livro Frankenstein">
        <div class="card-body">
          <h5 class="card-title">Frankenstein: O clássico está vivo!</h5><small>Por <span class="text-primary">Mary Shelley<span></small><br><small class="text-muted">(Português - 2017 Remasterizado)</small>
          <p class="card-text">Victor é um cientista que dedica a juventude e a saúde para descobrir como reanimar tecidos mortos e gerar vida artificialmente. O resultado de sua experiência, um monstro que o próprio Frankenstein considera uma aberração, ganha consciência, vontade, desejo, medo. Criador e criatura se enfrentam: são opostos e, de certa forma, iguais. Humanos!</p>
          <h4 class=""><b>R$ 50,90</b></h4>
          <small class="text-muted">De: <s>R$ 79,90</s></small>
          <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
          <button type="button" class="btn btn-danger">Comprar</button>
          <a href="#" class="btn btn-light border w-25 " id="favorito"><img src="imagens/hearticon.png" width="60%"></a>
        </div>
      </div>
      <div class="card col-md-4 float-md-left mx-sm-auto mx-auto" style="width: 18rem;">
        <img class="card-img-top mt-2 " src="imagens/witcher.jpg" alt="Livro The Witcher Vol. 2">
        <div class="card-body">
          <h5 class="card-title">The Witcher Livro 2 - A Espada do Destino</h5><small>Por <span class="text-primary">Andrzej Sapkowski<span></small><br><small class="text-muted">(Português - Dezembro 2019)</small>
          <p class="card-text">Geralt de Rívia é um bruxo. Um feiticeiro cheio de astúcia. Um matador impiedoso. Um assassino de sangue-frio, treinado desde a infância para caçar e eliminar monstros.A espada do destino é o segundo livro da saga do bruxo Geralt de Rívia e terá continuidade com O sangue dos elfos.</p>
          <h4 class=""><b>R$ 44,89</b></h4>
          <small class="text-muted">De: <s>R$ 56,20</s></small>
          <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
          <button type="button" class="btn btn-danger">Comprar</button>
          <a href="#" class="btn btn-light border w-25 " id="favorito"><img src="imagens/hearticon.png" width="60%"></a>
        </div>
      </div>
      <div class="card col-md-4 float-md-left mx-sm-auto mx-auto" style="width: 18rem;">
        <img class="card-img-top mt-2" src="imagens/stardust.jpg" alt="Mangá Jojo's Bizarre Adventure">
        <div class="card-body">
          <h5 class="card-title">Jojo's Bizarre Adventure – Parte 3 – Stardust Crusaders Vol. 8</h5><small>Por <span class="text-primary">Hirohiko Araki<span></small><br><small class="text-muted">(Português - Dezembro 2020)</small>
          <p class="card-text">O esconderijo de Dio foi encontrado!? Por acaso, Iggy se depara com um estranho pássaro guardando uma mansão e acredita que se trata do local que Jotaro e seus amigos estavam procurando. A estranha atmosfera faz com que Iggy tente evitar a luta, mas o que será que o aguarda neste encontro fatídico?</p>
          <h4 class=""><b>R$ 29,90</b></h4>
          <small class="text-muted">De: <s>R$ 31,00</s></small>
          <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
          <button type="button" class="btn btn-danger">Comprar</button>
          <a href="#" class="btn btn-light border w-25 " id="favorito"><img src="imagens/hearticon.png" width="60%"></a>
        </div>
      </div>
      <nav aria-label="Navegação de página exemplo" class="mx-xl-auto mx-lg-auto mx-md-auto mx-sm-auto mx-auto mt-4 col-md-7">
        <ul class="pagination justify-content-center">
          <li class="page-item">
            <a class="page-link" href="livros2.php">Anterior</a>
          </li>
          <li class="page-item"><a class="page-link" href="livros.php">1</a></li>
          <li class="page-item"><a class="page-link" href="livros2.php">2</a></li>
          <li class="page-item"><a class="page-link bg-primary text-white" href="livros3.php">3</a></li>
          <li class="page-item"><a class="page-link" href="livros4.php">4</a></li>
          <li class="page-item">
            <a class="page-link" href="livros4.php">Próximo</a>
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
