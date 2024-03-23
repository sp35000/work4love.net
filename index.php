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
      <form method="get" action="/sig/serina/news3.php">
       <label for="hashtag">News Search</label>
       <input name="hashtag" type="text">&nbsp;
       <input type="submit" class="btn btn-lg btn-success" value="Search">&nbsp;
       <a href="/news" class="btn btn-lg btn-success" target="_blank">News By Date</a>
       <a href="/landing/help.html" class="btn btn-lg btn-success">Help</a>
      </form>
    </div>

    <div class="col-md-12 columns text-center" style="padding-left:10%;padding-right:10%;padding-top:5%">
      <div class="col-md-4 columns text-center">
      <p>
        <a href="/sig/emma/" class="btn btn-lg btn-success">Sites</a>
        <!-- <br/>
        Sites úteis: Finanças, Tecnologia, Viagens, Cursos e Entretenimento. -->
      </p>
      <p  class="bg-info" style="padding-left:10%;padding-right:10%"><strong>
        [<a href="/sig/charlotte/">Formula 1</a>|
        <a href="/sig/trilena/">Movies and TV</a>|
        <a href="/sig/melody/">Music</a>|
        <a href="/sig/serina/">Learning</a>|
        <a href="/sig/elle/">Technology</a>|
        <a href="/sig/finn/">Travel</a>|
        <a href="/sig/rommie/">Finance</a>
        ]</strong>
      </p>
      </div>

      <div class="col-md-4 columns text-center">
      <p>
        <a href="/sig/serina/index.php" class="btn btn-lg btn-success">News</a>
        <!-- <br/>
        Banco de dados com notícias dos sites úteis e fontes diversas. -->
      </p>
      <p  class="bg-info"><strong>
        [<a href="/sig/serina/news2.php?category=Nature">Nature</a>|
        <a href="/sig/serina/news2.php?category=World">World</a>|
        <a href="/sig/serina/news2.php?category=Brasil">Brasil</a>|
        <a href="/sig/serina/news2.php?category=America">America</a>|
        <a href="/sig/serina/news2.php?category=Asia">Asia</a>|
        <a href="/sig/serina/news2.php?category=Africa">Africa</a>|
        <a href="/sig/serina/news2.php?category=Oceania">Oceania</a>|
        <a href="/sig/serina/news2.php?category=Technology">Technology</a>|
        <a href="/sig/serina/news2.php?category=Culture">Culture</a>|
        <a href="/sig/serina/news2.php?category=Travel">Travel</a>|
        <a href="/sig/serina/news2.php?category=Economy">Economy</a>
        ]</strong>
      </p>
      </div>

      <div class="col-md-4 columns text-center">
      <p>
        <a href="/sig/elle/tranceit.html" class="btn btn-lg btn-success">IT</a>
        <!-- <br/>
        IT Cheat Sheet: dicas rápidas de T.I. -->
      </p>
      <p  class="bg-info"><strong>
        [<a href="/sig/elle/network.html">Network</a>|
        <a href="/sig/elle/mainframe.html">Mainframe</a>|
        <a href="/sig/elle/database.html">Database</a>|
        <a href="/sig/elle/oldunixlinux.html">Unix/Linux</a>|
        <a href="/sig/elle/pi.html">Raspbian</a>
        ]</strong>
      </p>
      </div>
    </div>

    <div class="col-md-12 columns text-center" style="padding-left:10%;padding-right:10%;padding-top:5%">
      <div class="col-md-8 columns text-left bg-grey">
        <h2 align="center"><a href="/sig/serina/index.php">Latest News</a></h2>
        <div w3-include-html="/sig/serina/news4.php"></div>
      </div>
      <div class="col-md-4 columns text-center">
        <p align="center">
          <a class="twitter-timeline" data-height="400" href="https://twitter.com/CelsoNomad?ref_src=twsrc%5Etfw">Tweets by CelsoNomad</a>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>  </p>
      </div>
   </div>

   <div class="col-md-12 columns text-center" style="padding-left:10%;padding-right:10%">
     <h2>Serviços</h2>
     <form method="post" action="https://sp35000.pythonanywhere.com/" target="_blank">
       <label for="text">QRCode Text</label>
       <input name="text"  id="text" required>
       <input type="submit" value="Generate" class="btn btn-lg btn-success">
     </form>
     <br/><br/>
      <div class="col-md-4 columns text-center">
        <p>
          <a href="/nomad/" class="btn btn-lg btn-success" target="_blank">Blog</a><br/>
          Nomad Fire Life - Independência Financeira como Nômade Digital.
        </p>
      </div>

      <div class="col-md-4 columns text-center">
        <p>
          <a href="/coronavirus/" class="btn btn-lg btn-success" target="_blank">Covid</a><br/>
          Sites úteis durante a quarentena do coronavírus.
        </p>
      </div>

      <div class="col-md-4 columns text-center">
        <p>
          <a href="/finn" class="btn btn-lg btn-success" target="_blank">Fotos</a><br/>
          Galeria de fotos de viagens.
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

  </div>
  <?php include("./sig/include/footer.php"); ?>
</div>
</div>
<?php include("./sig/include/bodyend.php"); ?>
</body>
</html>
