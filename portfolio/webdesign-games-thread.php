<?php
  $description = "Design d'un espace dédié et du back-office pour Games Thread";
  $title = "Webdesign Games Thread";
  include('./../header.php');
?>
<?php
  $urlHeader = "gt/header_gt";
  $descriptionHeader = "header plateforme Games Thread";
  $projetTitle = "Games Thread";
  $demande = "Création du logotype de Games Thread. Création d'un espace dédié et du back-office de la plateforme.";
  $client = "Dream Developpement";
  $role = "direction artistique - ergonomie - webdesign <br>Projet Freelance";
  $logiciel = "Illustrator - Photoshop";
  $date = "fin 2013";
  include('./../projet-presentation.php');
?>
  <article class="container bg-projet-image">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2 class="espace-titre">Webdesign Espace dédié</h2>
      </div>
    </div>
    <div class="row col-xs-12">
      <div class="visible-xs respiration">
        <div id="slideshow-mobile">
            <img src="../img/portfolio/gt/ed_mobile1.jpg"  alt="espace dédié accueil"/>
            <img src="../img/portfolio/gt/ed_mobile2.jpg"  alt="espace dédiée crédit"/>
            <img src="../img/portfolio/gt/ed_mobile3.jpg"  alt="espace dédié jeux"/>
            <img src="../img/portfolio/gt/ed_mobile4.jpg"  alt="espace dédié trophé"/>
          </div>
      </div>
    </div>
    <div class="row col-sm-12 text-center">
        <div id="galerie" class="hidden-xs">
          <div id="galerie_big">
            <ul class="no-marge aligner">
              <li><img id="img1" src="../img/portfolio/gt/ed_1.jpg" class="img-responsive" alt="esace dédié accueil"/></li>
              <li><img id="img2" src="../img/portfolio/gt/ed_2.jpg" class="img-responsive" alt="espace dédié crédit"/></li>
              <li><img id="img3" src="../img/portfolio/gt/ed_3.jpg" class="img-responsive" alt="espace dédié jeux"/></li>
              <li><img id="img4" src="../img/portfolio/gt/ed_4.jpg" class="img-responsive" alt="espace dédié trophé"/></li>
            </ul>
          </div>
          <div id="galerie_nav">
            <ul class="no-marge center-ul">
              <li class="aligner opacity"><a rel="img1" href="#"><img src="../img/portfolio/gt/ed_mini_1.jpg" alt="miniature espace dédié" class="img-responsive taille-max"/></a></li>
              <li class="aligner opacity"><a rel="img2" href="#"><img src="../img/portfolio/gt/ed_mini_2.jpg" alt="miniature espace dédié" class="img-responsive taille-max"/></a></li>
              <li class="aligner opacity"><a rel="img3" href="#"><img src="../img/portfolio/gt/ed_mini_3.jpg" alt="miniature espace dédié" class="img-responsive taille-max"/></a></li>
              <li class="aligner opacity"><a rel="img4" href="#"><img src="../img/portfolio/gt/ed_mini_4.jpg" alt="miniature espace dédié" class="img-responsive taille-max"/></a></li>
            </ul>
          </div>
        </div>
    </div>
     <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <br/>
        <p>CONTRAINTE : taille : 620x650px - design sobre, car intégré dans différents sites de jeux.</p>
        <p>Pour cet espace dédié qui possède les caractéristiques d'un mini-site, avec ses différentes rubriques, j'ai voulu jouer sur les couleurs. Chaque rubrique à une couleur spécifique qui va permettre d'aider l'utilisateur à se situer dans l'espace.</p>
      </div>
    </div>
  </article>
  <article>
  <div class="bg-projet-image container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2 class="espace-titre">Webdesign Back-office</h2>
      </div>
    </div>
    <div class="row col-sm-12 text-center">
        <span class="visible-xs">
        <img src="../img/portfolio/gt/back_office_mobile.jpg" class="img-responsive centrer" alt="projet graphique galadrielle"/>
        </span>
        <div id="galerie2" class="hidden-xs">
          <div id="galerie_big2">
            <ul class="no-marge aligner">
              <li><img id="mini1" src="../img/portfolio/gt/back_office_1.jpg" class="img-responsive" alt="back-office web et tablette"/></li>
              <li><img id="mini2" src="../img/portfolio/gt/back_office_2.jpg" class="img-responsive" alt="back-office mobile"/></li>
            </ul>
          </div>
          <div id="galerie_nav2">
            <ul class="no-marge center-ul">
              <li class="aligner opacity"><a rel="mini1" href="#"><img src="../img/portfolio/gt/back_office_mini_1.jpg" alt="miniature espace dédié" class="img-responsive taille-max"/></a></li>
              <li class="aligner opacity"><a rel="mini2" href="#"><img src="../img/portfolio/gt/back_office_mini_2.jpg" alt="miniature espace dédié" class="img-responsive taille-max"/></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </article>
</section>

<?php
  $urlPrecedent ="campagne-seb.php";
  $urlSuivant = "logotype-dream-developpement.php";
  include('./../aside.php');
?>

<?php
  include('./../footer.php');
?>
  <script type="text/javascript" src="../js/jquery.orbit.min.js" defer></script>
  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
</body>
</html>