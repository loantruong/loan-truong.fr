<?php
  $description = "Création des éléments auto-promotionnels pour la sortie de 
  la nouvelle saison du tv show Kardashian et d'un espace dédié sur Purepeople.";
  $title = "Graphic Design : Campagne Kardashian";
  include('./../header.php');
?>
<?php
  $urlHeader = "campagne_kardashian/header_kardashian";
  $descriptionHeader = "header campagne Kardashian";
  $projetTitle = "Kardashian";
  $demande = "Pour la sortie de la nouvelle saison \"Les sœurs Kardashian à Miami\", 
  télé-réalité qui raconte le quotidien des deux sœur kardashian, Khloé et Kourtney, 
  pendant leur séjour à Miami sur E.Pop of Culture. Nous avons dû réaliser un espace 
  dédié sur le site Purepople, d'un habillage vidéo et des formats auto-promotionnels qui redirigent vers 
  l'espace le site de E.Pop of Culture.";
  $client = "E-Pop of Culture // mission entreprise : Webedia";
  $role = "création de formats auto-promotionnels et webdesign de l'espace dédié";
  $logiciel = "Photoshop";
  $date = "janvier 2013";
  include('./../projet-presentation.php');
?>

  <div class="container bg-projet-image">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2 text-center">
        <span class="visible-xs">
        <img src="../img/portfolio/campagne_kardashian/habillage_kardashian.jpg" class="img-responsive" alt="design de l'application mobile"/>
        </span>
        <div id="galerie" class="hidden-xs">
          <div id="galerie_big">
            <ul class="no-marge aligner center-ul">
              <li><img id="img1" src="../img/portfolio/campagne_kardashian/habillage_kardashian.jpg" class="img-responsive" alt="graphisme : espace dédié et habillage"/></li>
              <li><img id="img2" src="../img/portfolio/campagne_kardashian/formats_pub.jpg" class="img-responsive" alt="graphisme : auto-promo"/></li>
              <li><img id="img3" src="../img/portfolio/campagne_kardashian/habillage_overscreen.jpg" class="img-responsive" alt="graphisme : habillage vidéo"/></li>
            </ul>
          </div>
          <div id="galerie_nav">
            <ul class="no-marge">
              <li class="aligner opacity"><a rel="img1" href="#"><img src="../img/portfolio/campagne_kardashian/mini_1.jpg" alt="miniature habillage et espace dédié" class="img-responsive taille-max"/></a></li>
              <li class="aligner opacity"><a rel="img2" href="#"><img src="../img/portfolio/campagne_kardashian/mini_2.jpg" alt="miniature formats pub" class="img-responsive taille-max"/></a></li>
               <li class="aligner opacity"><a rel="img3" href="#"><img src="../img/portfolio/campagne_kardashian/mini_3.jpg" alt="miniature habillage pub" class="img-responsive taille-max"/></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>

  <?php
    $urlPrecedent ="webdesign-portfolio-v1.php";
    $urlSuivant = "graphisme-toutou-nounou.php";
    include('./../aside.php');
  ?>
  <?php
    include('./../footer.php');
  ?>
  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
  
</body>
</html>