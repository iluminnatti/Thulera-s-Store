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
        <img class="card-img-top mt-2" src="imagens/snk_31.jpg" alt="Mangá Shingeki no Kyojin Vol. 31">
        <div class="card-body">
          <h5 class="card-title">Ataque Dos Titãs Vol. 31</h5><small>Por <span class="text-primary">Hajime Isayama<span></small><br><small class="text-muted">(Português - Dezembro 2020)</small>
          <p class="card-text">Zeke confiou a Eren o plano de eutanásia do povo eldiano. Os dois conseguem quebrar o cerco inimigo e entrar em contato físico. Porém, o plano verdadeiro de Eren era trair Zeke e destruir o mundo com o poder do Nivelamento. A batalha dos dois pelo poder de Ymir termina com a vitória de Eren e, finalmente, o avanço de inúmeros Titãs Colossais tem início...</p>
          <h4 class=""><b>R$ 19,90</b></h4>
          <small class="text-muted">De: <s>R$ 24,90</s></small>
          <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
          <button type="button" class="btn btn-danger">Comprar</button>
          <a href="#" class="btn btn-light border w-25 " id="favorito"><img src="imagens/hearticon.png" width="60%"></a>
        </div>
      </div>
      <div class="card col-md-4 float-md-left mx-sm-auto mx-auto" style="width: 18rem;">
        <img class="card-img-top mt-2 " src="imagens/fullmetal_24.jpg" alt="Mangá Fullmetal Alchemist Vol 24">
        <div class="card-body">
          <h5 class="card-title">Fullmetal Alchemist - Especial - Vol. 24</h5><small>Por <span class="text-primary">Hiromu Arakawa<span></small><br><small class="text-muted">(Português - Novembro 2020)</small>
          <p class="card-text">Hohenheim está diante do “homenzinho do frasco”, aquele que também já foi chamado de homúnculo, e ambos começam uma batalha que vai além da compreensão humana! O combate do QG Central continua, e quem aparece de reforço é…?! </p>
          <h4 class=""><b>R$ 25,11</b></h4>
          <small class="text-muted">De: <s>R$ 32,57</s></small>
          <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
          <button type="button" class="btn btn-danger">Comprar</button>
          <a href="#" class="btn btn-light border w-25 " id="favorito"><img src="imagens/hearticon.png" width="60%"></a>
        </div>
      </div>
      <div class="card col-md-4 float-md-left mx-sm-auto mx-auto" style="width: 18rem;">
        <img class="card-img-top mt-2" src="imagens/unity.jpg" alt="Livro Jogador n° 1">
        <div class="card-body">
          <h5 class="card-title">Unity: Design e Desenvolvimento de Jogos</h5><small>Por <span class="text-primary">William Pereira Alves<span></small><br><small class="text-muted">(Português - Setembro 2019)</small>
          <p class="card-text">O Unity é certamente a mais conhecida ferramenta de desenvolvimento de jogos, tanto para consoles de videogames, quanto para computadores e dispositivos móveis (smartphones e tablets).Com uma linguagem bastante didática e simplificada, este livro aborda os principais conceitos necessários à criação de jogos nos dois formatos (2D e 3D).</p>
          <h4 class=""><b>R$ 42,89</b></h4>
          <small class="text-muted">De: <s>R$ 57,85</s></small>
          <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
          <button type="button" class="btn btn-danger">Comprar</button>
          <a href="#" class="btn btn-light border w-25 " id="favorito"><img src="imagens/hearticon.png" width="60%"></a>
        </div>
      </div>
      <nav aria-label="Navegação de página exemplo" class="mx-xl-auto mx-lg-auto mx-md-auto mx-sm-auto mx-auto mt-4 col-md-7">
        <ul class="pagination justify-content-center">
          <li class="page-item">
            <a class="page-link" href="livros3.php">Anterior</a>
          </li>
          <li class="page-item"><a class="page-link" href="livros.php">1</a></li>
          <li class="page-item"><a class="page-link" href="livros2.php">2</a></li>
          <li class="page-item"><a class="page-link" href="livros3.php">3</a></li>
          <li class="page-item"><a class="page-link bg-primary text-white" href="livros4.php">4</a></li>
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
