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

    <title>Thulera's Shop - Figures</title>
    <meta name="author" content="Marcos Túlio Barbosa Abreu">
    <meta name="description" content="Atividades Bootstrap">
    <meta name="keywords" content="sites, Bootstrap, HTML, CSS, JavaScript">
    <link rel="icon" type="imagem/png" href="imagens/analogico.png">
  </head>
  <body style="background-color: Honeydew;">
    <a name="topo"></a>

    <?php
    require("menu.inc.php")
    ?>

    <div class="container row mx-xl-auto mx-lg-auto mx-md-auto border mx-sm-auto mx-auto col-md-10 p-3 mt-4 bg-white">
      <div class="card col-md-4 float-md-left mx-sm-auto mx-auto" style="width: 18rem;">
        <img class="card-img-top mt-2" src="imagens/figure_lee.jpg" alt="Action Figure All Might">
        <div class="card-body">
          <h5 class="card-title">Action Figure - Rock Lee - Naruto Shippuden</h5>
          <p class="card-text">Material: PVC<br>Origem: China<br>Tamanho (Altura x Largura): 13,5cm x 12cm<br>Foto: Original do Produto<br>Caixa: Não</p>
          <h4 class=""><b>R$ 99,99</b></h4>
          <small class="text-muted">De: <s>R$ 129,99</s></small>
          <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
          <button type="button" class="btn btn-danger">Comprar</button>
          <a href="#" class="btn btn-light border w-25 " id="favorito"><img src="imagens/hearticon.png" width="60%"></a>
        </div>
      </div>
      <div class="card col-md-4 float-md-left mx-sm-auto mx-auto" style="width: 18rem;">
        <img class="card-img-top mt-2 " src="imagens/figure_goku.jpg" alt="Action Figure Trunks">
        <div class="card-body">
          <h5 class="card-title">Action Figure - Goku Kamehameha - Dragon Ball Z</h5>
          <p class="card-text">Material: PVC <br>Origem: China <br>Tamanho (Altura x Largura): 12,5cm x 13,5cm <br>Foto: Original do Produto <br>Caixa: Sim</p>
          <h4 class=""><b>R$ 179,99</b></h4>
          <small class="text-muted">De: <s>R$ 99,99</s></small>
          <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
          <button type="button" class="btn btn-danger">Comprar</button>
          <a href="#" class="btn btn-light border w-25 " id="favorito"><img src="imagens/hearticon.png" width="60%"></a>
        </div>
      </div>
      <div class="card col-md-4 float-md-left mx-sm-auto mx-auto" style="width: 18rem;">
        <img class="card-img-top mt-2" src="imagens/figure_shenlong.jpg" alt="Action Figure Hashirama">
        <div class="card-body">
          <h5 class="card-title">Action Figure - Shenlong - Dragon Ball Z</h5>
          <p class="card-text">Material: PVC<br>Origem: China<br>Tamanho (Altura x Largura): 14cm x 12,5cm<br>Foto: Original do Produto<br>Caixa: Sim</p>
          <h4 class=""><b>R$ 149,99</b></h4>
          <small class="text-muted">De: <s>R$ 179,99</s></small>
          <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
          <button type="button" class="btn btn-danger">Comprar</button>
          <a href="#" class="btn btn-light border w-25 " id="favorito"><img src="imagens/hearticon.png" width="60%"></a>
        </div>
      </div>
      <nav aria-label="Navegação de página exemplo" class="mx-xl-auto mx-lg-auto mx-md-auto mx-sm-auto mx-auto mt-4 col-md-7">
        <ul class="pagination justify-content-center">
          <li class="page-item">
            <a class="page-link" href="figures2.php">Anterior</a>
          </li>
          <li class="page-item"><a class="page-link" href="figures.php">1</a></li>
          <li class="page-item"><a class="page-link" href="figures2.php">2</a></li>
          <li class="page-item"><a class="page-link bg-primary text-white" href="figures3.php">3</a></li>
          <li class="page-item"><a class="page-link" href="figures4.php">4</a></li>
          <li class="page-item">
            <a class="page-link" href="figures4.php">Próximo</a>
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