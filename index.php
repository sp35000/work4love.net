<?php
$title="Work4Love.net";
$description="Work4Love.net - Portal de serviços: Banco de dados de Notícias, Sites sobre Finanças, Tecnologia, Viagens, Cursos e Entretenimento, Galeria de fotos de viagem e Blog Nomad Fire Life.";
$keywords="coronvírus,sites,solidariedade,estudo,lazer,trabalho,noticias,mensagens";
include("./sig/include/header.php");
?>
<body>
<?php
include("./sig/include/bodystart.php");
include("./sig/include/menusup.php");
include("./sig/include/tools.php");
?>

<div class="container content-fluid">
  <div class="col-md-12 columns text-center firstdiv">
    <h1><img src="/sig/images/Work4Love.net-logo.png" alt="Work4Love.net" width="40%"/></h1>
    <p class="bg-info text-left"><big>O site Work4Love.net é um portal composto por um diretório de sites por tema, banco de dados de notícias e links úteis, blog de viagens e serviços diversos.</big></p>
    <div id="clock">day, dd/mm/yyyy hh:mm:ss</div>
      <script>
      setInterval(showTime, 120);
      showTime();
      </script>
    </div>
</div>

  <div class="col-md-12 columns text-center" style="padding-left:10%;padding-right:10%;padding-top:5%">
    <p><a href="https://www.mensagembr.com" class="btn btn-lg btn-success" target="_blank">Envie sua mensagem positiva!</a><br/></p>
    <?php include("./sig/util/mensagembrOpenGraph.php"); ?>
    <br/>
  </div>

  <div class="col-md-12 columns text-center" style="padding-left:10%;padding-right:10%;padding-top:5%">
    <p><a href="/sig/emma/" class="btn btn-lg btn-success">Directory</a></p>
    <br/>
    <div class="row">
      <div class="col-sm-3">
      <span class="glyphicon glyphicon-star"></span>
      <h4><a href="/sig/emma/">Sites</a></h4>
      </div>
      <div class="col-sm-3">
      <span class="glyphicon glyphicon-usd"></span>
      <h4><a href="/sig/rommie/">Finance</a></h4>
      </div>
      <div class="col-sm-3">
      <span class="glyphicon glyphicon-education"></span>
      <h4><a href="/sig/serina/">Learning</a></h4>
      </div>
      <div class="col-sm-3">
      <span class="glyphicon glyphicon-picture"></span>
      <h4><a href="/sig/finn/">Travel</a></h4>
      </div>
    </div>
  </div>

  <div class="col-md-12 columns text-center" style="padding-left:10%;padding-right:10%;padding-top:5%">
    <div class="row">
      <div class="col-sm-3">
        <span class="glyphicon glyphicon-film"></span>
        <h4><a href="/sig/videos/">Videos</a></h4>
      </div>
      <div class="col-sm-3">
        <span class="glyphicon glyphicon-phone"></span>
        <h4><a href="/sig/elle/">Technology</a></h4>
      </div>
      <div class="col-sm-3">
        <span class="glyphicon glyphicon-fire"></span>
        <h4><a href="/sig/charlotte/">Formula 1</a></h4>
      </div>
      <div class="col-sm-3">
        <span class="glyphicon glyphicon-music"></span>
        <h4><a href="/sig/melody/">Music</a></h4>
      </div>
    </div>
  </div>

  <div class="col-md-12 columns text-center" style="padding-left:10%;padding-right:10%;padding-top:5%">
    <p><a href="/sig/news" class="btn btn-lg btn-success">Últimas Notícias</a><br/>
    <div align="left">
      <?php getExternalContent("https://work4love.net/sig/serina/news4.php")?>
    </div>
  <br/>

    <h2>Cotações</h2>
    <div class="frame-container">
    <iframe class="responsive-iframe" loading="lazy" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vREdJFqdh2z9iss2b73Z3vvNywBhfGecHReDFeyUBL-S_DQMpV_Es76CKIPxa552_mhmmVb9p57B5Xe/pubhtml?gid=1413162259&amp;single=true&amp;widget=true&amp;headers=false" width="800px" height="400px">
    <span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span>
    <span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height:0;"class="mce_SELRES_start">﻿</span>
    </iframe>
    </div>
    <p class="bg-info" align="center"><small>This spreadsheet is a courtesy of <strong><a href="https://rommiebr.com/" target="_blank">Rommie blog</a></strong>.</small></br></p>
    <br/>

    <p><a href="https://work4love.net/nomad/" class="btn btn-lg btn-success" target="_blank">Blog de Viagens</a><br/></p>
    <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <?php include("./sig/include/carousel.php"); ?>
    </div>

    <h2>Serviços</h2>
    <form method="post" action="https://sp35000.pythonanywhere.com/" target="_blank">
    <label for="text">Texto</label>
    <input name="text"  id="text" required>
    <input type="submit" value="Gerar QRCode" class="btn btn-lg btn-success">
    </form>
    <br/>

    <p><a href="https://work4love.net/calculator/" class="btn btn-lg btn-success" target="_blank">Calculadora</a><br/>
    Calculadora básica (versão beta).

    <p><a href="https://work4love.net/archive/" class="btn btn-lg btn-success">Arquivo</a><br/>
    Sites antigos republicados a pedido.
    </p>
  </div>

<?php include("./sig/include/footer.php"); ?>
</div>
</body>
</html>
