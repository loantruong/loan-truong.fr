<?php
  $description = "Mise en page de document print pour l'exposition Maison et Objet";
  $title = "Création by matao";
  include('./../header.php');
?>
<?php
  $urlHeader = "bymatao/header_bymatao";
  $descriptionHeader = "header projet workineo";
  $projetTitle = "by Matao";
  $demande = "By Matao est une petite entreprise familiale qui propose des objets personnalisés à offrir. 
  En passant des sacs brodés, des albums photo, des mugs spécialement conçus pour être un cadeau original.
  By Matao pour le salon Maison et Objet m'a demandé de créer des PLV, brochure et bon de commande pour cet évènement. 
  J'ai également participé à la création d'une nouvelle gamme de trousse 'aujourd'hui je suis...'.
  ";
  $client = "By Matao";
  $role = "mise en page - typographie - retouche photo";
  $logiciel = "InDesign - Illustrator";
  $date = "juillet 2012";
  include('./../projet-presentation.php');
?>
  <article class="container bg-projet-image">
    </div>
      <div class="row col-sm-12 text-center">
          <span class="visible-xs">
          <img src="../img/portfolio/bymatao/brochure1.jpg" class="img-responsive center-block" alt="brochure by matao"/>
          <img src="../img/portfolio/bymatao/brochure2.jpg" class="img-responsive center-block" alt="brochure by matao"/>
          </span>
        <div id="galerie" class="hidden-xs">
          <div id="galerie_big">
            <ul class="no-marge aligner">
              <li><img id="img1" src="../img/portfolio/bymatao/brochure1.jpg" class="img-responsive" alt="brochure by matao"/></li>
              <li><img id="img2" src="../img/portfolio/bymatao/brochure2.jpg" class="img-responsive" alt="brochure by matao"/></li>
              <li><img id="img3" src="../img/portfolio/bymatao/plv_aujourdhui.jpg" class="img-responsive" alt="trousses aujourdhui"/></li>
            </ul>
          </div>
          <div id="galerie_nav">
            <ul class="no-marge">
              <li class="aligner opacity"><a rel="img1" href="#"><img src="../img/portfolio/bymatao/mini_1.jpg" alt="brochure by matao" class="img-responsive"/></a></li>
              <li class="aligner opacity"><a rel="img2" href="#"><img src="../img/portfolio/bymatao/mini_2.jpg" alt="brochure by matao" class="img-responsive"/></a></li>
              <li class="aligner opacity"><a rel="img3" href="#"><img src="../img/portfolio/bymatao/mini_3.jpg" alt="plv trousses aujourdhui" class="img-responsive"/></a></li>
            </ul>
          </div>
        </div>
      </div>
  </article>
  <article>
</section>

<?php
  $urlPrecedent ="illustration-tracasse.php";
  $urlSuivant = "design-bento.php";
  include('./../aside-other.php');
?>

<?php
  include('./../footer.php');
?>
  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
</body>
</html>