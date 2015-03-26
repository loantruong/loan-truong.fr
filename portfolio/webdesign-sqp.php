<?php
  $description = "Conception et création du design du site sqp motors";
  $title = "web design sqp motors, ergonomie, design";
  include('./../header.php');
?>
<?php
  $urlHeader = "sqp/header_sqp";
  $descriptionHeader = "header sqp motors";
  $projetTitle = "Sqp Motors";
  $demande = "Refonte du design du site sqp motors <a href='http://www.sqpmotors.com/'class='sqp'>[ancien site de référence]</a>. Le site doit être plus clair, plus agréable à voir et à utiliser pour les internautes. 
  Le site réalisé avec le cms wordpress, devait reprendre les codes graphiques du logo de SQP motors et de l'univers motard.";
  $client = "Sqp Motors // mission entreprise - Reventys";
  $role = "ergonomie - design du site responsive";
  $logiciel = "Illustrator - Photoshop";
  $date = "janvier 2015";
  include('./../projet-presentation.php');
?>
  <div class="bg-projet-image">
  <section>
  <div class="visible-xs">
    <div class="row col-sm-12 text-center">
      <a href="http://preprod.reventys.com/SQP/"><h2 class="">Webdesign du site</h2></a>
    </div>
    <div class="row">
        <img src="../img/portfolio/sqp/webdesign_sqp_mobile.jpg" class="img-responsive center-block" alt="webdesign sqp home page"/>
        <br/>
    </div>
    <div class="row col-sm-12">
      <a href="http://preprod.reventys.com/SQP/"><img src="../img/portfolio/sqp/btn_sqp.jpg" class="img-responsive center-block hidd" alt="bouton site"/></a>
    </div>
  </div>
    <div class="row bg-projet-image no_marging hidden-xs">
      <div class="col-sm-8 col-sm-offset-2 padding_none text-center">
        <a href="http://preprod.reventys.com/SQP/"><h2 class="bb-tea-h4">Webdesign du site</h2></a>
        <div id="galerie">
          <div id="galerie_big">
            <ul class="no-marge aligner">
              <li><img id="img1" src="../img/portfolio/sqp/webdesign_sqp_hp.jpg" class="img-responsive" alt="webdesign sqp home page"/></li>
              <li><img id="img2" src="../img/portfolio/sqp/webdesign_sqp_entreprise.jpg" class="img-responsive" alt="webdesign sqp motors préentation entreprise"/></li>
              <li><img id="img3" src="../img/portfolio/sqp/webdesign_sqp_news.jpg" class="img-responsive" alt="webdesign sqp motors articles"/></li>
              <li><img id="img4" src="../img/portfolio/sqp/webdesign_sqp_real.jpg" class="img-responsive" alt="webdesign sqp motors réalisation"/></li>
            </ul>
          </div>
          <div id="galerie_nav">
            <ul class="no-marge center-ul">
              <li class="aligner opacity"><a rel="img1" href="#"><img src="../img/portfolio/sqp/mini_1.jpg" alt="miniature site internet sqp accueil" class="img-responsive taille-max"/></a></li>
              <li class="aligner opacity"><a rel="img2" href="#"><img src="../img/portfolio/sqp/mini_2.jpg" alt="miniature site internet sqp entreprise" class="img-responsive taille-max"/></a></li>
              <li class="aligner opacity"><a rel="img3" href="#"><img src="../img/portfolio/sqp/mini_3.jpg" alt="miniature site internet sqp news" class="img-responsive taille-max"/></a></li> 
              <li class="aligner opacity"><a rel="img4" href="#"><img src="../img/portfolio/sqp/mini_4.jpg" alt="miniature site internet sqp réalisations" class="img-responsive taille-max"/></a></li>
            </ul>
          </div>
        </div>
          <br/>
              <a href="http://preprod.reventys.com/SQP/"><img src="../img/portfolio/sqp/btn_sqp.jpg" class="img-responsive center-block hidd" alt="bouton site"/></a>
        </div>
    </div>
  </section>

<?php
  $urlPrecedent ="webdesign-terredav.php";
  $urlSuivant = "webdesign-a2fconseils.php";
  include('./../aside.php');
?>

<?php
  include('./../footer.php');
?>
  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
</body>
</html>