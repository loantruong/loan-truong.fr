<?php
  $description = "Création du logotype pour BB Tea, de sa carte de visite, packaging. Design et intégration de site internet.";
  $title = "BB tea, vente de bubble tea ! : Webdesign - logotype - intégration";
  include('./../header.php');
?>
<?php
  $urlHeader = "bb_tea/header_bb_tea";
  $descriptionHeader = "header bb tea, boutique de bubble tea sur paris";
  $projetTitle = "bb tea";
  $demande = "Pour l’ouverture d’une nouvelle boutique de bubble tea, création de l’identité et du site de BB tea.";
  $client = "BB TEA // projet personnel";
  $role = "logotype - packaging - webdesign et intégration du site";
  $logiciel = "Illustrator - Photoshop - Sublime text - Framework Twitter Bootstrap";
  $date = "septembre 2014";
  include('./../projet-presentation.php');
?>
  <div class="bg-projet-image">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <br/>
        <h2>Design du logotype</h2>
        <img src="../img/portfolio/bb_tea/logo.svg" class="img-responsive center-block" alt="logotype de bb tea"/>
      </div>
    </div>
  </div>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <br/>
        <p>
          Pour le logo «BB tea», j'ai voulu retranscrire la multitude des goûts et des couleurs que l'on peut créer avec un bubble tea. Une boisson qui se boit aussi bien chaud que froid, qui vous fait du bien et vous rend heureux. 
        </p>
      </div>
    </div>
    <div class="row">
    <br/>
    <img src="../img/portfolio/bb_tea/bb_tea_carte.jpg" class="img-responsive" alt="carte de visite et pochette"/>
    </div>
  </section>
  <section>
  <div class="visible-xs">
    <div class="row col-sm-12 text-center">
      <a href="http://bubble-tea-time.net/"><h2 class="bb-tea-h4">Webdesign du site : www.bubble-tea-time.net</h2></a>
    </div>
    <div class="row">
        <img src="../img/portfolio/bb_tea/webdesign_mobile_1.jpg" class="img-responsive center-block" alt="webdesign bb tea"/>
        <img src="../img/portfolio/bb_tea/webdesign_mobile_2.jpg" class="img-responsive center-block" alt="webdesign bb tea"/>
        <img src="../img/portfolio/bb_tea/webdesign_mobile_3.jpg" class="img-responsive center-block" alt="webdesign bb tea"/>
        <br/>
    </div>
    <div class="row col-sm-12">
      <a href="http://bubble-tea-time.net/"><img src="../img/portfolio/bb_tea/btn_bb.jpg" class="img-responsive center-block hidd" alt="bouton site"/></a>
    </div>
  </div>
    <div class="row bg-projet-image no_marging hidden-xs">
      <div class="col-sm-8 col-sm-offset-2 padding_none text-center">
        <a href="http://bubble-tea-time.net/"><h2 class="bb-tea-h4">Webdesign du site : bubble-tea-time.net</h2></a>
        <div id="galerie">
          <div id="galerie_big">
            <ul class="no-marge aligner">
              <li><img id="img1" src="../img/portfolio/bb_tea/webdesign_1.jpg" class="img-responsive" alt="header du site internet bb tea, boutique de bubble tea sur paris"/></li>
              <li><img id="img2" src="../img/portfolio/bb_tea/webdesign_2.jpg" class="img-responsive" alt="les bubbles tea du site internet bb tea, boutique de bubble tea sur paris"/></li>
              <li><img id="img3" src="../img/portfolio/bb_tea/webdesign_3.jpg" class="img-responsive" alt="menu du site internet bb tea, boutique de bubble tea sur paris"/></li>
              <li><img id="img4" src="../img/portfolio/bb_tea/webdesign_4.jpg" class="img-responsive" alt="géolocalisation site internet bb tea, boutique de bubble tea sur paris"/></li>
            </ul>
          </div>
          <div id="galerie_nav">
            <ul class="no-marge center-ul">
              <li class="aligner opacity"><a rel="img1" href="#"><img src="../img/portfolio/bb_tea/mini_1.jpg" alt="miniature site internet bb tea header" class="img-responsive taille-max"/></a></li>
              <li class="aligner opacity"><a rel="img2" href="#"><img src="../img/portfolio/bb_tea/mini_2.jpg" alt="miniature site internet bb tea les bubbles tea" class="img-responsive taille-max"/></a></li>
              <li class="aligner opacity"><a rel="img3" href="#"><img src="../img/portfolio/bb_tea/mini_3.jpg" alt="miniature site internet bb tea menu" class="img-responsive taille-max"/></a></li> 
              <li class="aligner opacity"><a rel="img4" href="#"><img src="../img/portfolio/bb_tea/mini_4.jpg" alt="miniature site internet bb tea geolcalisation" class="img-responsive taille-max"/></a></li>
            </ul>
          </div>
        </div>
          <br/>
              <a href="http://bubble-tea-time.net/"><img src="../img/portfolio/bb_tea/btn_bb.jpg" class="img-responsive center-block hidd" alt="bouton site"/></a>
        </div>
    </div>
  </section>

<?php
  $urlPrecedent ="webdesign-il-campiello.php";
  $urlSuivant = "webdesign-portfolio-v2.php";
  include('./../aside.php');
?>

<?php
  include('./../footer.php');
?>
  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
</body>
</html>