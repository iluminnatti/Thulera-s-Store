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

    <title>Login</title>
    <meta name="author" content="Marcos Túlio Barbosa Abreu">
    <meta name="description" content="Atividades Bootstrap">
    <meta name="keywords" content="sites, Bootstrap, HTML, CSS, JavaScript">
    <link rel="icon" type="imagem/png" href="imagens/analogico.png">
  </head>
  <body class="w-100 py-xl-5 py-lg-5 py-md-5 py-sm-5 py-5">
    <div class="border rounded col-md-5 col-sm-8 mx-auto row justify-content-center pt-5 pb-4">
        <form method="post" action="">
          <h1>Login</h1>
          <p>
            <label for="email_login">Nome/e-mail</label><br/>
            <input id="email_login" name="email_login" required="required" type="email" placeholder="Email"/>
          </p>

          <p>
            <label for="senha_login">Senha</label><br/>
            <input id="senha_login" name="senha_login" required="required" type="password" placeholder="Senha" />
          </p>

          <p>
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" />
            <label for="manterlogado">Manter-me logado</label>
          </p>

          <p>
            <input type="submit" value="Logar" class="btn btn-primary"/>
          </p>

          <p class="link">
            Ainda não tem conta?
            <a href="cadastro.php">Cadastre-se</a>
          </p>
          <span class="text-muted"><a href="#" class="text-muted">Esqueci minha senha</a></span>
        </form>
        <hr class="col-md-11">
        <span id="logo" class="col-md-12 text-center"><h5>Thulera's Shop</h5></span>
        <span class="text-muted" id="minimo">Thulera's Shop 2020 ©</span>
      </div>







    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
