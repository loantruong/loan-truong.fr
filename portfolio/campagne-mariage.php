<?php
  $description = "Déclinaison de la compagne cinéma pour la sortie du film Mariage à l'anglaise sur web et mobile pour Webedia";
  $title = "Graphic Design : Campagne Mariage à l'anglaise";
  include('./../header.php');
?>
<?php
  $urlHeader = "mariage/header_mariage";
  $descriptionHeader = "header campagne Cristal Fighters";
  $projetTitle = "Campagne Mariage à l'anglaise";
  $demande = "À l'occasion de la sortie du film « Mariage à l'anglaise » créer l'habillage et les formats auto-promotionnels, ainsi qu'un espace dédié sur mobile. Sur l'espace mobile, devait figurer plusieurs informations (vidéo de la bande-annonce, synopsis, date de sortie, slogan du film et une galerie photo).";
  $client = "Studio Canal // mission entreprise : Webedia ";
  $role = "déclinaison et création graphique des formats web et espace dédié sur mobile";
  $logiciel = "Photoshop";
  $date = "mai 2013";
  include('./../projet-presentation.php');
?>

  <div class="container bg-projet-image">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2 text-center">
        <span class="visible-xs">
        <img src="../img/portfolio/mariage/habillage.jpg" class="img-responsive" alt="design de l'application mobile"/>
        </span>
        <div id="galerie" class="hidden-xs">
            <ul class="no-marge aligner center-ul">
              <li><img id="img1" src="../img/portfolio/mariage/habillage.jpg" class="img-responsive" alt="graphisme : habillage"/></li>
              <li><img id="img2" src="../img/portfolio/mariage/auto_promo.jpg" class="img-responsive" alt="graphisme : auto-promo"/></li>
            </ul>
          </div>
      </div>
    </div>
  </div>
  <article>
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <br/>
        <h2>Design de l 'espace dédié mobile</h2>
        <p>
        Pour ce projet la première slide présente le film, avec le titre, la date de sortie, les personnages et propose le visionnage 
        de la bande-annonce. Pour la suite des informations, j’ai choisi d’utiliser un arrière-plan fixe qui reprend le paysage de fond de l’affiche, avec les éléments qui s’afficheront au scroll.
        </p>
      </div>
    </div>
  <div class="row col-xs-12">
      <div class="visible-xs respiration">
        <div id="slideshow-mobile">
            <img src="../img/portfolio/mariage/mobile_1.jpg"  alt="application mobile"/>
            <img src="../img/portfolio/mariage/mobile_2.jpg"  alt="application mobile"/>
            <img src="../img/portfolio/mariage/mobile_3.jpg"  alt="application mobile"/>
            <img src="../img/portfolio/mariage/mobile_4.jpg"  alt="application mobile"/>
          </div>
      </div>
    </div>
  </article>
  </section>

<?php
  $urlPrecedent ="application-feel-board.php";
  $urlSuivant = "webdesign-gouts-et-couleurs.php";
  include('./../aside.php');
?>

<?php
  include('./../footer.php');
?>

  <script type="text/javascript" src="../js/jquery.orbit.min.js" defer></script>
</body>
</html>