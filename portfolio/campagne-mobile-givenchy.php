<?php
  $description = "Campagne mobile pour givenchy et sephora";
  $title = "Mobile Design : Campagne Sephora";
  include('./../header.php');
?>
<?php
  $urlHeader = "campagne_givenchy/header_givenchy";
  $descriptionHeader = "header campagne Sephora avec Givenchy";
  $projetTitle = "Givenchy";
  $demande = "Réalisation d'une animation en parallaxe sur format mobile pour la sortie d'un nouveau produit Givenchy \"teinte couture\" et d'un jeu concours.";
  $client = "Sephora - mission entreprise Webedia";
  $role = "graphisme pour l'animation pour l'OPS sur mobile";
  $logiciel = "Photoshop";
  $date = "septembre 2013";
  include('./../projet-presentation.php');
?>

  <div class="bg-projet-image hidden-xs" id="bg-projet-color-givenchy">
    <div class="row">
        <div class="col-sm-12">
          <div id="slideshow">
            <img src="../img/portfolio/campagne_givenchy/slide1.jpg"  alt="animation mobile"/>
            <img src="../img/portfolio/campagne_givenchy/slide2.jpg"  alt="animation mobile"/>
            <img src="../img/portfolio/campagne_givenchy/slide3.jpg"  alt="animation mobile"/>
            <img src="../img/portfolio/campagne_givenchy/slide4.jpg"  alt="animation mobile"/>
            <img src="../img/portfolio/campagne_givenchy/slide5.jpg"  alt="animation mobile"/>
          </div>
        </div>
    </div>
  </div>
    <div class="row col-xs-12 text-center">
      <div class="visible-xs">
          <div id="slideshow-mobile">
              <img src="../img/portfolio/campagne_givenchy/mobile_1.jpg"  alt="application mobile"/>
             <img src="../img/portfolio/campagne_givenchy/mobile_2.jpg"  alt="application mobile"/>
             <img src="../img/portfolio/campagne_givenchy/mobile_3.jpg"  alt="application mobile"/>
             <img src="../img/portfolio/campagne_givenchy/mobile_4.jpg"  alt="application mobile"/>
             <img src="../img/portfolio/campagne_givenchy/mobile_5.jpg"  alt="application mobile"/>
             <img src="../img/portfolio/campagne_givenchy/mobile_6.jpg"  alt="application mobile"/>
            </div>
        </div>
    </div>
  <div class="bg-projet-image">
    <div class="row hidden-xs">
        <div class="row col-sm-12 text-center">
          <h3>Design animation mobile version paysage</h3>
           <img src="../img/portfolio/campagne_givenchy/version_paysage.jpg"  alt="animation mobile" class="img-responsive"/>
        </div>
    </div>
  </div>
</section>

<?php
  $urlPrecedent ="campagne-asepta.php";
  $urlSuivant = "campagne-bonheur-ogres.php";
  include('./../aside.php');
?>

<?php
  include('./../footer.php');
?>
  <script type="text/javascript" src="../js/jquery.orbit.min.js" defer></script>
</body>
</html>