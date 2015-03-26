<?php
  $description = "Création de l'identité visuelle et du design de l'application Feel Board : gestion de flux d'actualité";
  $title = "webdesign application flux actualité Feel Board";
  include('./../header.php');
?>
<?php
  $urlHeader = "feel_board/header_feel_board";
  $descriptionHeader = "header Feel Board";
  $projetTitle = "Feel Board";
  $demande = "Création d’une application de flux d’actualité sur les supports tablettes et mobiles, 
  incluant les réseaux sociaux tels que facebook, twitter et google+.</p>
        <p>Conception : Cette application permet un gain de temps à l'utilisateur. 
        En permettant de regrouper tous les flux d'actualité, sur une seule application et non plusieurs.";
  $client = "projet personnel fictif";
  $role = "création du logotype et design d'interface";
  $logiciel = "Photoshop - Illustrator";
  $date = "avril 2013";
  include('./../projet-presentation.php');
?>
    <article class="container bg-projet-image">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 text-center">
            <span class="visible-xs">
            <img src="../img/portfolio/feel_board/design_mobile.jpg" class="img-responsive" alt="design de l'application mobile"/>
            </span>
            <div id="galerie" class="hidden-xs">
              <div id="galerie_big">
                <ul class="no-marge aligner center-ul">
                  <li><img id="img1" src="../img/portfolio/feel_board/actualite.jpg" class="img-responsive" alt="desgin application mobile"/></li>
                  <li><img id="img2" src="../img/portfolio/feel_board/reseaux.jpg" class="img-responsive" alt="desgin application mobile"/></li>
                  <li><img id="img3" src="../img/portfolio/feel_board/tablette.jpg" class="img-responsive" alt="desgin application tablette"/></li>
                </ul>
              </div>
              <div id="galerie_nav">
                <ul class="no-marge">
                  <li class="aligner opacity"><a rel="prev" href="#"><img src="../img/portfolio/feel_board/mini_1.jpg" alt="miniature design de feel board" class="img-responsive taille-max"/></a></li>
                  <li class="aligner opacity"><a rel="img2" href="#"><img src="../img/portfolio/feel_board/mini_2.jpg" alt="miniature design de feel board" class="img-responsive taille-max"/></a></li>
                  <li class="aligner opacity"><a rel="img3" href="#"><img src="../img/portfolio/feel_board/mini_3.jpg" alt="miniature design de feel board" class="img-responsive taille-max"/></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </article>
  </section>

  <?php
    $urlPrecedent ="campagne-mir.php";
    $urlSuivant = "campagne-mariage.php";
    include('./../aside.php');
  ?>

  <?php
    include('./../footer.php');
  ?>

  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
    
</body>
</html>