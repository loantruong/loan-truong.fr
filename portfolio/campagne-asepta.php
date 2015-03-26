<?php
  $description = "Création des visuels pour l'OPS Asepta : création des formats pub, espace dédié, jeu concours.";
  $title = "Graphic design : Campagne Asepta";
  include('./../header.php');
?>
<?php
  $urlHeader = "campagne_asepta/header_asepta";
  $descriptionHeader = "header campage Asepta";
  $projetTitle = "Campagne Asepta";
  $demande = "Pour une OPS, réalisation d'un espace dédié pour le compte d'Asepta, afin de mettre son nouveau produit en avant : article (brand content) + jeu concours + article du jour du site. Ainsi que la création d'un habillage et de format auto-promo renvoyant vers le site de l'annonceur et vers l'espace dédié.";
  $client = "laboratoire Asepta / mission Webdedia ";
  $role = "graphisme espace dédié et<br/>des formats auto-promotionnels, sous la direction du chef de projet.";
  $logiciel = "Photoshop";
  $date = "novembre 2013";
  include('./../projet-presentation.php');
?>

  <article class="container bg-projet-image">
    <div class="visible-xs">
      <div class="row col-sm-12 text-center">
        <h2>Webesign : Espace dédié</h2>
      </div>
      <div class="row">
        <img src="../img/portfolio/campagne_asepta/ed_mobile.jpg" class="img-responsive center-block" alt="design de l'espace dédié"/>
      </div>
    </div>
      <div class="row no_marging">
        <div class="col-sm-8 col-sm-offset-2 text-center padding_none">
          <div id="galerie" class="hidden-xs">
            <div id="galerie_big">
              <ul class="no-marge aligner">
                <li><img id="img1" src="../img/portfolio/campagne_asepta/espace_dedie.jpg" class="img-responsive" alt="espace dédié"/></li>
                <li><img id="img2" src="../img/portfolio/campagne_asepta/habillage.jpg" class="img-responsive" alt="habillage qui redirige vers l'espace dédié"/></li>
                <li><img id="img3" src="../img/portfolio/campagne_asepta/jeu_concours.jpg" class="img-responsive" alt="jeu concour"/></li>
              </ul>
            </div>
            <div id="galerie_nav">
              <ul class="no-marge center-ul">
                <li class="aligner opacity"><a rel="img1" href="#"><img src="../img/portfolio/campagne_asepta/mini_1.jpg" alt="miniature espace dédié" class="img-responsive taille-max"/></a></li>
                <li class="aligner opacity"><a rel="img2" href="#"><img src="../img/portfolio/campagne_asepta/mini_2.jpg" alt="miniature habillage" class="img-responsive taille-max"/></a></li>
                <li class="aligner opacity"><a rel="img3" href="#"><img src="../img/portfolio/campagne_asepta/mini_3.jpg" alt="miniature jeu concours" class="img-responsive taille-max"/></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </article>
    <div class="row bg-section">
      <div class="col-sm-8 col-sm-offset-2">
        <p class="article-end">
        Pour ce projet, le client nous a fournit des photos du produit. Il fallait ainsi scénariser le produit et le rendre attractif pour une clientèle féminine.
        Les courbes reprennent la couleur bleu du produit et de la marque, donnent du mouvement et un côté délicat à l'habillage.</p>
      </div>
    </div>
  </section>

<?php
  $urlPrecedent ="logotype-dream-developpement.php";
  $urlSuivant = "campagne-mobile-givenchy.php";
  include('./../aside.php');
?>

<?php
  include('./../footer.php');
?>

  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
    
</body>
</html>