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

    <title>Thulera's Shop - Todas as Categorias</title>
    <meta name="author" content="Marcos Túlio Barbosa Abreu">
    <meta name="description" content="Atividades Bootstrap">
    <meta name="keywords" content="sites, Bootstrap, HTML, CSS, JavaScript">
  </head>
  <body style="background-color: Honeydew;">
    <a name="topo"></a>

    <?php
    require("menu.inc.php");
    ?>

    <div class="container border centraliza row py-3 px-0 px-md-3 px-sm-0 bg-white">
      <div class="col-md-3 mb-sm-3 mb-3 mb-md-0">
        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active" id="listone" data-toggle="list" href="#lista" role="tab" aria-controls="home">Livros</a>
          <a class="list-group-item list-group-item-action" id="listtwo" data-toggle="list" href="#listb" role="tab" aria-controls="profile">Roupas</a>
          <a class="list-group-item list-group-item-action" id="listthree" data-toggle="list" href="#listc" role="tab" aria-controls="messages">Canecas</a>
          <a class="list-group-item list-group-item-action" id="listfour" data-toggle="list" href="#listd" role="tab" aria-controls="settings">Action Figures</a>
        </div>
      </div>
      <div class="col-md-9 p-0 mx-sm-auto mx-auto">
        <div class="tab-content p-0 mx-sm-auto mx-auto" id="nav-tabContent">
          <div class="row col-md-12 tab-pane fade show p-0 active mx-sm-auto mx-auto" id="lista" role="tabpanel" aria-labelledby="listone">
            <div class="card col-md-4 float-md-left mx-sm-auto mx-auto" style="width: 18rem;">
              <img class="card-img-top mt-2" src="imagens/battle1.jpg" alt="Livro Battle Royale">
              <div class="card-body">
                <h5 class="card-title">Battle Royale: Remast.</h5><small>Por <span class="text-primary">Koushun Takami<span></small><br><small class="text-muted">(Português - 2014 Remasterizado)</small>
                <h4 class=""><b>R$ 41,94</b></h4>
                <small class="text-muted">De: <s>R$ 69,90</s></small>
                <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
                <button type="button" class="btn btn-danger">Comprar</button>
              </div>
            </div>
            <div class="card col-md-4 float-md-left mx-sm-auto mx-auto" style="width: 18rem;">
              <img class="card-img-top mt-2 " src="imagens/saec.jpg" alt="Livro Senhor dos Aneis">
              <div class="card-body">
                <h5 class="card-title">O Senhor dos anéis - Edição Única</h5><small>Por <span class="text-primary">J. R. R. Tolkien<span></small><br><small class="text-muted">(Português - Janeiro 2001)</small>
                <h4 class=""><b>R$ 118,00</b></h4>
                <small class="text-muted">De: <s>R$ 120,00</s></small>
                <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
                <button type="button" class="btn btn-danger">Comprar</button>
              </div>
            </div>
            <div class="card col-md-4 float-md-left mx-sm-auto mx-auto" style="width: 18rem;">
              <img class="card-img-top" src="imagens/jn2.jpg" alt="Livro Jogador N 1">
              <div class="card-body">
                <h5 class="card-title">Jogador N° 1</h5><small>Por <span class="text-primary">Ernest Cline<span></small><br><small class="text-muted">(Português - Outubro 2019)</small>
                <h4 class=""><b>R$ 32,55</b></h4>
                <small class="text-muted">De: <s>R$ 52,00</s></small>
                <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
                <button type="button" class="btn btn-danger">Comprar</button>
              </div>
            </div>
          </div>
          <div class="row col-md-12 tab-pane fade show p-0 mx-sm-auto mx-auto" id="listb" role="tabpanel" aria-labelledby="listtwo">
            <div class="card col-md-4 float-md-left mx-sm-auto mx-auto" style="width: 18rem;">
            <img class="card-img-top mt-2" src="imagens/haikyuu.jpg" alt="Livro Battle Royale">
            <div class="card-body">
              <h5 class="card-title">Camisa Haikyuu: To the Top</h5>
              <p class="card-text">Camisa estampa full</p>
              <h4 class=""><b>R$ 62,99</b></h4>
              <small class="text-muted">De: <s>R$ 80,00</s></small>
              <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
              <button type="button" class="btn btn-danger">Comprar</button>
            </div>
          </div>
          <div class="card col-md-4 float-md-left mx-sm-auto mx-auto" style="width: 18rem;">
            <img class="card-img-top mt-2 " src="imagens/dbs.jpg" alt="Camisa DBS">
            <div class="card-body">
              <h5 class="card-title">Camisa Goku - Dragon Ball Super</h5>
              <p class="card-text">Camisa estampa full</p>
              <h4 class=""><b>R$ 73,99</b></h4>
              <small class="text-muted">De: <s>R$ 79,99</s></small>
              <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
              <button type="button" class="btn btn-danger">Comprar</button>
            </div>
          </div>
          <div class="card col-md-4 float-md-left mx-sm-auto mx-auto" style="width: 18rem;">
            <img class="card-img-top mt-2" src="imagens/fullm.jpg" alt="Camisa Fullmetal">
            <div class="card-body">
              <h5 class="card-title">Camisa Edward Elric - Fullmetal Alchemist</h5>
              <p class="card-text">Camisa estampa full</p>
              <h4 class=""><b>R$ 68,55</b></h4>
              <small class="text-muted">De: <s>R$ 82,00</s></small>
              <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
              <button type="button" class="btn btn-danger">Comprar</button>
            </div>
          </div></div>
          <div class=" row col-md-12 tab-pane fade show p-0 mx-sm-auto mx-auto" id="listc" role="tabpanel" aria-labelledby="listthree">
            <div class="card col-md-4 float-md-left mx-sm-auto mx-auto" style="width: 18rem;">
            <img class="card-img-top mt-2" src="imagens/onep.png" alt="Livro Battle Royale">
            <div class="card-body">
              <h5 class="card-title">Caneca Saitama - One Punch Man</h5>
              <p class="card-text">Caneca de Porcelana <br>Dimensões do produto:<br> Diâmetro - 8.2 cm <br>Altura - 9.7 cm <br>Arte: 21cm X 9.3 cm</p>
              <h4 class=""><b>R$ 29,99</b></h4>
              <small class="text-muted">De: <s>R$ 39,99</s></small>
              <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
              <button type="button" class="btn btn-danger">Comprar</button>
            </div>
          </div>
          <div class="card col-md-4 float-md-left mx-sm-auto mx-auto" style="width: 18rem;">
            <img class="card-img-top mt-2 " src="imagens/vegeto.jpg" alt="Livro Senhor dos Aneis">
            <div class="card-body">
              <h5 class="card-title">Caneca Vegetto - Dragon Ball Super</h5>
              <p class="card-text">Caneca de Porcelana <br>Dimensões do produto: <br>Diâmetro - 8.2 cm <br>Altura - 9.7 cm <br>Arte: 21cm X 9.3 cm
</p>
              <h4 class=""><b>R$ 29,99</b></h4>
              <small class="text-muted">De: <s>R$ 39,99</s></small>
              <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
              <button type="button" class="btn btn-danger">Comprar</button>
            </div>
          </div>
          <div class="card col-md-4 float-md-left mx-sm-auto mx-auto" style="width: 18rem;">
            <img class="card-img-top mt-2" src="imagens/cdz.jpg" alt="Livro Jogador N 1">
            <div class="card-body">
              <h5 class="card-title">Caneca Cavaleiros de Bronze - Saint Seiya</h5>
              <p class="card-text">Caneca de Porcelana <br>Dimensões do produto: <br>Diâmetro - 8.2 cm <br>Altura - 9.7 cm <br>Arte: 21cm X 9.3 cm</p>
              <h4 class=""><b>R$ 29,99</b></h4>
              <small class="text-muted">De: <s>R$ 39,99</s></small>
              <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
              <button type="button" class="btn btn-danger">Comprar</button>
            </div>
          </div></div>
          <div class="row col-md-12 tab-pane fade show p-0 mx-sm-auto mx-auto" id="listd" role="tabpanel" aria-labelledby="listfour">
            <div class="card col-md-4 float-md-left mx-sm-auto mx-auto" style="width: 18rem;">
            <img class="card-img-top mt-2" src="imagens/allmight.jpg" alt="Livro Battle Royale">
            <div class="card-body">
              <h5 class="card-title">Action Figure - All Might - Boku no Hero Academia.</h5>
              <p class="card-text">Material: PVC<br>Origem: China<br>Altura: 16 cm<br>Foto: Original do Produto<br>Caixa: Sim</p>
              <h4 class=""><b>R$ 149,99</b></h4>
              <small class="text-muted">De: <s>R$ 199,99</s></small>
              <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
              <button type="button" class="btn btn-danger">Comprar</button>
            </div>
          </div>
          <div class="card col-md-4 float-md-left mx-sm-auto mx-auto" style="width: 18rem;">
            <img class="card-img-top mt-2 " src="imagens/trunks.jpg" alt="Livro Senhor dos Aneis">
            <div class="card-body">
              <h5 class="card-title">Action Figure - Trunks SSJ - Dragon Ball Z</h5>
              <p class="card-text">Material: PVC <br>Origem: China <br>Tamanho (Altura x Largura): 12,5cm x 17,5cm <br>Foto: Original do Produto <br>Caixa: Não</p>
              <h4 class=""><b>R$ 1119,99</b></h4>
              <small class="text-muted">De: <s>R$ 99,99</s></small>
              <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
              <button type="button" class="btn btn-danger">Comprar</button>
            </div>
          </div>
          <div class="card col-md-4 float-md-left mx-sm-auto mx-auto" style="width: 18rem;">
            <img class="card-img-top mt-2" src="imagens/hashirama.jpg" alt="Livro Jogador N 1">
            <div class="card-body">
              <h5 class="card-title">Action Figure Hashirama - Naruto Shippuden</h5>
              <p class="card-text">Material: PVC<br>Origem: China<br>Tamanho (Altura x Largura): 14cm<br>Foto: Original do Produto<br>Caixa: Não</p>
              <h4 class=""><b>R$ 119,99</b></h4>
              <small class="text-muted">De: <s>R$ 149,99</s></small>
              <hr class="col-xl-11 col-md-11 col-sm-11 col-11">
              <button type="button" class="btn btn-danger">Comprar</button>
            </div>
          </div></div>
        </div>
      </div>
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
