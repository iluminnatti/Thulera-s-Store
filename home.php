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

    <title>Thulera's Shop</title>
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

    <div class="container-fluid bg-dark p-0" style="max-height: 600px;">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="livros.php"><img class="d-block w-100 rounded" id="imgalvo" src="imagens/prop_2.png" alt="Primeiro Slide" style="max-height: 600px;"></a>
            <div class="carousel-caption d-none d-md-block">
              <h5>Livros de vários gêneros e categorias</h5>
              <p id="colorp"><span>Ficção Científica, Mangás, Livros Científicos e muitos outros!</span></p>
            </div>
          </div>
          <div class="carousel-item">
            <a href="camisas.php"><img class="d-block w-100 rounded" id="imgalvo" src="imagens/prop.png" alt="Segundo Slide" style="max-height: 600px;"></a>
            <div class="carousel-caption d-none d-md-block">
              <h5>Diversas camisas para qualquer gosto!</h5>
              <p id="colorp"><span>Navegue pela loja e busque o que mais combina com você.</span></p>
            </div>
          </div>
          <div class="carousel-item">
            <a href="canecas.php"><img class="d-block w-100 rounded" id="imgalvo" src="imagens/prop_3.jpg" alt="Terceiro Slide" style="max-height: 600px;"></a>
            <div class="carousel-caption d-none d-md-block">
              <h5>Canecas de diversos tipos e tamanhos</h5>
              <p id="colorp"><span>Canecas Personalizadas e modelos já prontos</span></p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>
    </div>

    <div class="container border mt-3 p-3 row mx-auto bg-white">
      <p class="col-md-12 text-monospace"><u>Navegue por categoria:</u></p>
      <div class="card text-white bg-primary rounded-circle mx-auto text-center mb-2 zoom col-5" style="max-width: 190px; max-height: 190px;">
        <a href="livros.php" class="text-white" style="text-decoration: none;">
        <div class="card-body">
          <img src="imagens/book_icon.png" class="w-75">
          <p class="card-text w-100 mx-auto">Livros</p>
        </div>
      </a>
      </div>
      <div class="card text-white bg-primary rounded-circle mx-auto text-center mb-2 zoom col-5" style="max-width: 12rem;">
        <a href="camisas.php" class="text-white" style="text-decoration: none;">
        <div class="card-body">
          <img src="imagens/shirt_icon.png" class="w-75">
          <p class="card-text w-100 mx-auto">Camisas</p>
        </div>
      </a>
      </div>
      <div class="card text-white bg-primary rounded-circle mx-auto text-center mb-2 zoom col-5" style="max-width: 12rem;">
        <a href="canecas.php" class="text-white" style="text-decoration: none;">
        <div class="card-body">
          <img src="imagens/cup_icon.png" class="w-75">
          <p class="card-text w-100 mx-auto">Canecas</p>
        </div>
      </a>
      </div>
      <div class="card text-white bg-primary rounded-circle mx-auto text-center mb-2 zoom col-5" style="max-width: 12rem;">
        <a href="figures.php" class="text-white" style="text-decoration: none;">
        <div class="card-body">
          <img src="imagens/action_icon.png" class="w-50 mt-3">
          <p class="card-text w-100 mx-auto">Figures</p>
        </div>
      </a>
      </div>
    </div>

    <div class="container row mt-3 mx-auto p-0">
      <div class="container col-md-9 col-sm-12 border col-12 mx-0 mb-md-0 mb-sm-2 mb-2 bg-white pt-3 pb-3">
        <p class="col-md-12 text-monospace"><u>Produtos Mais Acessados:</u></p>
        <div class="card col-md-4 float-md-left mx-sm-auto mx-auto col-12" style="width: 18rem;">
          <img class="card-img-top mt-2" src="imagens/capa_snk.jpg" alt="Livro Battle Royale" style="max-height: 242px;">
          <div class="card-body">
            <h5 class="card-title">Capa Tropa de Exploração - Anime Shingeki no Kyojin</h5>
            <h4 class=""><b>R$ 89,99</b></h4>
            <small class="text-muted">De: <s>R$ 120,00</s></small>
            <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
            <button type="button" class="btn btn-danger">Comprar</button>
          </div>
        </div>
        <div class="card col-md-4 float-md-left mx-sm-auto mx-auto col-12" style="width: 18rem; max-height: 510px;">
          <img class="card-img-top mt-2" src="imagens/uni_shoyo.jpg" alt="Livro Battle Royale" style="max-height: 242px;">
          <div class="card-body">
            <h5 class="card-title">Uniforme Karasuno (Shoyo - 10) - Anime Haikyuu</h5>
            <h4 class=""><b>R$ 89,90</b></h4>
            <small class="text-muted">De: <s>R$ 99,90</s></small>
            <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
            <button type="button" class="btn btn-danger">Comprar</button>
          </div>
        </div>
        <div class="card col-md-4 float-md-left mx-sm-auto mx-auto col-12" style="width: 18rem; max-height: 510px;" >
          <img class="card-img-top mt-2" src="imagens/capa_ed.jpg" alt="Livro Battle Royale" style="max-height: 242px;">
          <div class="card-body">
            <h5 class="card-title">Capa Edward Elric - Fullmetal Alchemist Brotherhood</h5>
            <h4 class=""><b>R$ 89,99</b></h4>
            <small class="text-muted">De: <s>R$ 150,00</s></small>
            <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
            <button type="button" class="btn btn-danger">Comprar</button>
          </div>
        </div>
      </div>
      <a href="https://www.amazon.com.br/prime?aaxitk=tA128KjDOYts0umQ2G-dtw&pf_rd_r=VV5D96V8D2W8C7SMGYPC&pf_rd_p=2a318b03-6841-4f17-8883-0eff37af5c47&pd_rd_r=bd81d2f2-4fe7-4818-88a3-719ad4b003b2&pd_rd_w=Nci1V&pd_rd_wg=5EDJx&ref_=pd_gw_unk" class="mx-auto">
        <div class="alert rounded alert-dismissible fade show col-md-2 col-sm-2 col-2 mx-auto mb-0 mt-3" role="alert" id="propaganda">
          <button type="button" class="close bg-white p-0 text-primary" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </a>
      <div class="container col-md-9 col-sm-12 border col-12 mx-0 mb-md-0 mb-sm-2 mb-2 bg-white pt-3 mt-0 border-top pb-3">
        <div class="card col-md-4 float-md-left mx-sm-auto mx-auto col-12" style="width: 18rem;">
          <img class="card-img-top mt-2" src="imagens/daki_02.jpg" alt="Livro Battle Royale" style="max-height: 242px;">
          <div class="card-body">
            <h5 class="card-title">Dakimakura Zero Two - Anime Darling in The Franxx</h5>
            <h4 class=""><b>R$ 70,36</b></h4>
            <small class="text-muted">De: <s>R$ 185,84</s></small>
            <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
            <button type="button" class="btn btn-danger">Comprar</button>
          </div>
        </div>
        <div class="card col-md-4 float-md-left mx-sm-auto mx-auto col-12" style="width: 18rem; max-height: 510px;">
          <img class="card-img-top mt-2" src="imagens/daki_rem_ram.jpg" alt="Livro Battle Royale" style="max-height: 242px;">
          <div class="card-body">
            <h5 class="card-title">Dakimakura Rem & Ram - Anime Re: Zero season 1</h5>
            <h4 class=""><b>R$ 62,90</b></h4>
            <small class="text-muted">De: <s>R$ 106,50</s></small>
            <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
            <button type="button" class="btn btn-danger">Comprar</button>
          </div>
        </div>
        <div class="card col-md-4 float-md-left mx-sm-auto mx-auto col-12" style="width: 18rem; max-height: 600px;" >
          <img class="card-img-top mt-2" src="imagens/daki_todoroki.jpg" alt="Livro Battle Royale" style="max-height: 242px;">
          <div class="card-body">
            <h5 class="card-title">Dakimakura Todoroki - Boku no Hero Academia</h5>
            <h4 class=""><b>R$ 89,99</b></h4>
            <small class="text-muted">De: <s>R$ 150,00</s></small>
            <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
            <button type="button" class="btn btn-danger">Comprar</button>
          </div>
        </div>
      </div>
      <a href="https://www.kabum.com.br/?gclid=EAIaIQobChMI7aGhwsXD7QIVlwqRCh2A4A6MEAAYASAAEgIvdvD_BwE" class="mx-auto">
        <div class="alert rounded alert-dismissible fade show col-md-2 col-sm-2 col-2 mx-auto mb-0 mt-3" role="alert" id="propaganda2">
          <button type="button" class="close bg-white p-0 text-primary" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </a>
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
