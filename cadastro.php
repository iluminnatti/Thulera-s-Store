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

    <title>Cadastro</title>
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

    <form method="post" action="cadastro.php">
      <div class="border col-md-8 mx-auto p-4 rounded mt-3 bg-white col-12 col-sm-12">
        <span><strong><u>Dados Pessoais:</u></strong></span>

        <div class="form-row">
          <div class="form-group col-md-6 col-sm-6 col-12">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Nome" required name="">
          </div>
          <div class="form-group col-md-6 col-sm-6 col-12">
            <label for="sobrenome">Sobrenome</label>
            <input type="email" class="form-control" id="sobrenome" placeholder="Sobrenome" name="">
          </div>
          <div class="form-group col-md-6 col-sm-6 col-12">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email" required name="">
          </div>
          <div class="form-group col-md-6 col-sm-6 col-12">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" id="senha" placeholder="Senha" name="">
          </div>
          <div class="form-group col-md-4 col-sm-4 col-4">
            <label for="inputEstado">Gênero</label>
            <select id="inputEstado" class="form-control" name="">
              <option selected>Escolher...</option>
              <option>Masculino</option>
              <option>Feminino</option>
              <option>Rock n'Roll</option>
              <option>Não declarar</option>
            </select>
          </div>
          <div class="form-group col-md-4 col-sm-4 col-8">
            <label for="data">Data de Nascimento</label>
            <input type="date" class="form-control" id="data" placeholder="Data de Nascimento" name="">
          </div>
          <div class="form-group col-md-3 col-sm-3 col-4">
            <label for="rg">RG</label>
            <input type="text" class="form-control" id="rg" placeholder="RG" required name="">
          </div>
          <div class="form-group col-md-4 col-sm-4 col-5">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" placeholder="CPF" required name="cpf_cadastro">
          </div>
          <div class="form-group col-md-5 col-sm-5 col-5">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" placeholder="" name="">
          </div>
        </div>
        <span><strong><u>Dados de Endereço:</u></strong></span>
        <div class="form-row">
          <div class="form-group col-md-9 col-sm-12 col-12">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" id="endereco" placeholder="Rua dos Bobos" name="">
          </div>
          <div class="form-group col-md-3 col-sm-3 col-3">
            <label for="numero">N°</label>
            <input type="text" class="form-control" id="numero" placeholder="1927" name="">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6 col-sm-6 col-6">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="">
          </div>
          <div class="form-group col-md-4 col-sm-4 col-3">
            <label for="estado">Estado</label>
            <select id="estado" class="form-control" name="">
              <option selected>Escolher...</option>
              <option>AC</option>
              <option>AL</option>
              <option>AM</option>
              <option>AP</option>
              <option>BA</option>
              <option>CE</option>
              <option>DF</option>
              <option>ES</option>
              <option>GO</option>
              <option>MA</option>
              <option>MG</option>
              <option>MS</option>
              <option>MT</option>
              <option>PA</option>
              <option>PB</option>
              <option>PE</option>
              <option>PI</option>
              <option>PR</option>
              <option>RJ</option>
              <option>RN</option>
              <option>RO</option>
              <option>RR</option>
              <option>RS</option>
              <option>SC</option>
              <option>SE</option>
              <option>SP</option>
              <option>TO</option>
            </select>
          </div>
          <div class="form-group col-md-2 col-sm-2 col-3">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" id="cep" name="">
          </div>
          <div class="form-group col-md-6 col-sm-6 col-6">
            <label for="pais">País</label>
            <input type="text" class="form-control" id="pais" name="">
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck" required name="">
            <label class="form-check-label text-muted" for="gridCheck">
              Li e concordo com os Termos de Compromisso e adesão
            </label>
          </div>
          <div class="form-check mt-1">
            <input class="form-check-input" type="checkbox" id="gridCheck" name="">
            <label class="form-check-label text-muted" for="gridCheck">
              Aceito receber e-mails com promoções e notícias sobre a loja
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
      <hr class="col-md-11">
      <div class="mx-auto text-center">
        <span class="col-md-4 mx-auto text-muted">- Já tem conta? Faça <a href="login.html">Login</a> -</span>
      </div>


    </div>
    <?php
    $_SESSION["cpf_cadastro"] = isset($_POST['cpf_cadastro']) ? $_POST['cpf_cadastro'] : '' ;

    function validaCPF($cpf = null) {

    	// Verifica se um número foi informado
    	if(empty($cpf)) {
    		return false;
    	}

    	// Elimina possivel mascara
    	$cpf = preg_replace("/[^0-9]/", "", $cpf);
    	$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

    	// Verifica se o numero de digitos informados é igual a 11
    	if (strlen($cpf) != 11) {
    		return false;
    	}
    	// Verifica se nenhuma das sequências invalidas abaixo
    	// foi digitada. Caso afirmativo, retorna falso
    	else if ($cpf == '00000000000' ||
    		$cpf == '11111111111' ||
    		$cpf == '22222222222' ||
    		$cpf == '33333333333' ||
    		$cpf == '44444444444' ||
    		$cpf == '55555555555' ||
    		$cpf == '66666666666' ||
    		$cpf == '77777777777' ||
    		$cpf == '88888888888' ||
    		$cpf == '99999999999') {
    		return false;
    	 // Calcula os digitos verificadores para verificar se o
    	 // CPF é válido
    	 } else {

    		for ($t = 9; $t < 11; $t++) {

    			for ($d = 0, $c = 0; $c < $t; $c++) {
    				$d += $cpf{$c} * (($t + 1) - $c);
    			}
    			$d = ((10 * $d) % 11) % 10;
    			if ($cpf{$c} != $d) {
    				return false;
    			}
    		}

    		return true;
    	}
    }
    $a = validaCPF($_SESSION["cpf_cadastro"]);
    if ($a == true){
      print "<script language='javascript'>alert('O CPF é Válido');</script>";
    }elseif($a == false){
      print "<script language='javascript'>alert('Alerta: O CPF é Inválido!!!');</script>";
    }
    ?>

    <?php
    require("footer.inc.php");
     ?>







    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
