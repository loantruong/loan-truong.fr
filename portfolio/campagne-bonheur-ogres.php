<?php
  $description = "Déclinaison de la campagne pour la sortie au cinéma du film au bonheur des ogres sur le web : réalisation d'habillage, formats auto-promotionnels";
  $title = "Graphic Design : Campagne Au Bonheur des Ogres";
  include('./../header.php');
?>
<?php
  $urlHeader = "campagne_bonheur_ogres/header_bonheur_ogres";
  $descriptionHeader = "header campagne Au Bonheur des Ogres";
  $projetTitle = "Au bonheur des ogres";
  $demande = "Pour la sortie au cinéma du film \"Au bonheur des ogres\". Création d'un habillage classique, de formats auto-promotionnels et d'un habillage slider.
  L'habillage slider permet aux internautes d'accéder à une page dédié sur le film, avec un effet en parallax horizontal.";
  $client = " mission entreprise : Webedia";
  $role = "déclinaison des formats et design de la page dédié";
  $logiciel = "Photoshop";
  $date = "septembre 2013";
  include('./../projet-presentation.php');
?>

  <div class="container bg-projet-image">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2 text-center">
        <span class="visible-xs">
        <img src="../img/portfolio/campagne_bonheur_ogres/habillage.jpg" class="img-responsive" alt="design de l'application mobile"/>
        </span>
        <div id="galerie" class="hidden-xs">
          <div id="galerie_big">
            <ul class="no-marge aligner center-ul">
              <li><img id="img1" src="../img/portfolio/campagne_bonheur_ogres/habillage.jpg" class="img-responsive" alt="graphisme : habillage"/></li>
              <li><img id="img2" src="../img/portfolio/campagne_bonheur_ogres/habillage_slidding.jpg" class="img-responsive" alt="graphisme : auto-promo"/></li>
            </ul>
          </div>
          <div id="galerie_nav">
            <ul class="no-marge">
              <li class="aligner opacity"><a rel="img1" href="#"><img src="../img/portfolio/campagne_bonheur_ogres/mini_1.jpg" alt="miniature habillage" class="img-responsive taille-max"/></a></li>
              <li class="aligner opacity"><a rel="img2" href="#"><img src="../img/portfolio/campagne_bonheur_ogres/mini_2.jpg" alt="miniature espace dédié" class="img-responsive taille-max"/></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>

  <?php
    $urlPrecedent ="campagne-mobile-givenchy.php";
    $urlSuivant = "mobile-paris-en-vert.php";
    include('./../aside.php');
  ?>
  <?php
    include('./../footer.php');
  ?>
  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
  
</body>
</html>