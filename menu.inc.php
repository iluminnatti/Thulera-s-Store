<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-top border-bottom border-primary">
  <div class="row col-lg-4 col-md-6 col-sm-8 col-11">
    <a class="navbar-brand mt-1" href="home.php"><span id="logo" class="col-md-3">Thulera's Shop</span></a>
    <img src="imagens/analogico.png" id="rotation" width="50px" height="50px" class="d-none d-sm-block d-md-block d-lg-block d-xl-block">
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-light" href="home.php">Início <span class="sr-only">(página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="produtos_novos.php">Produtos Novos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="listas.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categorias
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="livros.php">Livros</a>
          <a class="dropdown-item" href="camisas.php">Roupas</a>
          <a class="dropdown-item" href="canecas.php">Canecas</a>
          <a class="dropdown-item" href="figures.php">Action Figures</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="categorias.php">Todas as Categorias</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown shadowed" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Entrar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">Login</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="cadastro.php">Cadastro</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post" action="">
      <input class="form-control mr-sm-2" type="search" id="search_field" placeholder="Pesquisar" aria-label="Pesquisar" name="pesquisa">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
  </div>
</nav>
<?php
session_start();
$_SESSION["pesquisa"] = isset($_POST['pesquisa']) ? $_POST['pesquisa'] : '' ;
$_SESSION["pesquisa"] = strtolower($_SESSION["pesquisa"]);

if ($_SESSION["pesquisa"] == "roupa" || $_SESSION["pesquisa"] == "roupas"
|| $_SESSION["pesquisa"] == "camisa" || $_SESSION["pesquisa"] == "camisas"){
  header('Location: camisas.php');
}elseif($_SESSION["pesquisa"] == "caneca" || $_SESSION["pesquisa"] == "canecas"
|| $_SESSION["pesquisa"] == "copos" || $_SESSION["pesquisa"] == "copo"){
  header('Location: canecas.php');
}elseif($_SESSION["pesquisa"] == "boneco" || $_SESSION["pesquisa"] == "bonecos"
|| $_SESSION["pesquisa"] == "action figures" || $_SESSION["pesquisa"] == "action figure"
|| $_SESSION["pesquisa"] == "bonequinho" || $_SESSION["pesquisa"] == "bonequinhos"
|| $_SESSION["pesquisa"] == "figure" || $_SESSION["pesquisa"] == "figures"){
  header('Location: figures.php');
}elseif($_SESSION["pesquisa"] == "livro" || $_SESSION["pesquisa"] == "livros"
|| $_SESSION["pesquisa"] == "book" || $_SESSION["pesquisa"] == "books"
|| $_SESSION["pesquisa"] == "manga" || $_SESSION["pesquisa"] == "mangas"
|| $_SESSION["pesquisa"] == "mangá" || $_SESSION["pesquisa"] == "mangás"){
  header('Location: livros.php');
}elseif($_SESSION["pesquisa"] != ""){
  header('Location: not_found.php');
}
?>
