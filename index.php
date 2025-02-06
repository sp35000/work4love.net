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
?>

<div class="container content-fluid">
  <div class="row">
    <div class="col-md-12 columns text-center firstdiv">
    <!-- <h1>Work4Love.net</h1> -->
    <h1><img src="/sig/images/Work4Love.net-logo.png" alt="Work4Love.net" width="40%"/></h1>
    <p class="bg-info"><big>Work4Love.net - Portal de serviços: Banco de dados de Notícias, Sites sobre Finanças, Tecnologia, Viagens, Cursos e Entretenimento, Galeria de fotos de viagem e Blog Nomad Fire Life.</big></p>
    <div id="clock">day, dd/mm/yyyy hh:mm:ss</div>
    <script>
    setInterval(showTime, 120);
    showTime();
    </script>

    <div class="col-md-12 columns text-center" style="padding-left:10%;padding-right:10%;padding-top:5%">
    <h2>Serviços</h2>
    <form method="post" action="https://sp35000.pythonanywhere.com/" target="_blank">
    <label for="text">QRCode Text</label>
    <input name="text"  id="text" required>
    <input type="submit" value="Generate" class="btn btn-lg btn-success">
    </form>
    <br/><br/>

      <div class="col-md-4 columns text-center">
      <p>
      <a href="/sig/emma/" class="btn btn-lg btn-success">Sites</a>
      <br/>
      Sites úteis: Finanças, Tecnologia, Viagens, Cursos e Entretenimento.
      </p>
      </div>

      <div class="col-md-4 columns text-center">
      <p>
      <a href="/sig/serina/news1.php" class="btn btn-lg btn-success">News</a>
      <br/>
      Banco de dados com notícias dos sites úteis e fontes diversas.
      </p>
      </div>

      <div class="col-md-4 columns text-center">
      <p>
        <a href="/nomad/" class="btn btn-lg btn-success" target="_blank">Blog</a><br/>
        Nomad Fire Life - Independência Financeira como Nômade Digital.
      </p>
      </div>
    </div>

    <div class="col-md-12 columns text-center" style="padding-left:10%;padding-right:10%">
      <div class="col-md-4 columns text-center">
      <p>
        <a href="https://www.mensagembr.com" class="btn btn-lg btn-success" target="_blank">MensagemBR</a><br/>
        Site para envio de mensagens positivas.
      </p>
      </div>

      <div class="col-md-4 columns text-center">
      <p><a href="/archive" class="btn btn-lg btn-success">Arquivo</a><br/>
        Sites antigos republicados a pedido.
      </p>
      </div>

      <div class="col-md-4 columns text-center">
      <p><a href="/calculator" class="btn btn-lg btn-success" target="_blank">Calculadora</a><br/>
        Calculadora básica.
      </p>
      </div>
    </div>

    <div class="col-md-12 columns text-center" style="padding-left:10%;padding-right:10%;padding-top:5%">
    <h2>Cotações</h2>
    <div class="frame-container">
    <iframe class="responsive-iframe" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vREdJFqdh2z9iss2b73Z3vvNywBhfGecHReDFeyUBL-S_DQMpV_Es76CKIPxa552_mhmmVb9p57B5Xe/pubhtml?gid=1413162259&amp;single=true&amp;widget=true&amp;headers=false" width="800px" height="400px">
      <span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span>
      <span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height:0;"class="mce_SELRES_start">﻿</span>
    </iframe>
    </div>
    <p class="bg-info" align="center"><small>This spreadsheet is a courtesy of <strong><a href="https://rommiebr.com/" target="_blank">Rommie blog</a></strong>.</small></br></p>

    <h2>Sobre este site</h2>
    <p>Inicialmente, este site foi criado para armazenar meus sites favoritos em um lugar centralizado na Internet.<br/>
    Ele já esteve hospedado inicialmente na Geocities, até chegar ao formato atual com domínio e hospedagem próprios.<br/>
    Um dos objetivos deste site é que a pessoa vá atrás da informação no site desejado, ao invés de aceitar o que foi enviado por um algoritmo de redes sociais.<br/>
    Ao longo do tempo, foram acrescentados mais Serviços sendo atualmente mais que um catálogo de sites.<br/>
    O endereço Work4Love.net ficou sendo o portal para todos estes Serviços.</p>
    </div>
  <?php include("./sig/include/footer.php"); ?>
</div>
</div>
<?php include("./sig/include/bodyend.php"); ?>
</body>
</html>
