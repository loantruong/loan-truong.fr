<?php
  $description = "Illustration geisha";
  $title = "mémoire d'une geisha";
  include('./../header.php');
?>
<?php
  $urlHeader = "geisha/header_geisha";
  $descriptionHeader = "header projet geisha";
  $projetTitle = "Geisha";
  $demande = "Création d'une illustration inspiré du film mémoire d'une geisha.";
  $client = "Projet personnel";
  $role = "illustration";
  $logiciel = "Photoshop";
  $date = "janvier 2011";
  include('./../projet-presentation.php');
?>
  <article class="container bg-projet-image">
    </div>
    <div class="row col-sm-12 text-center">
          <span class="visible-xs">
          <img src="../img/portfolio/geisha/illustration.jpg" class="img-responsive center-block" alt="illustration geisha"/>
          </span>
        <div id="galerie" class="hidden-xs">
          <div id="galerie_big">
            <ul class="no-marge aligner">
              <li><img id="img1" src="../img/portfolio/geisha/illustration.jpg" class="img-responsive" alt="projet design produit"/></li>
              <li><img id="img2" src="../img/portfolio/geisha/geisha.gif" class="img-responsive" alt="projet design produit bento"/></li>
            </ul>
          </div>
          <div id="galerie_nav">
            <ul class="no-marge">
              <li class="aligner opacity"><a rel="img1" href="#"><img src="../img/portfolio/geisha/mini_1.jpg" alt="projet design produit bento" class="img-responsive"/></a></li>
              <li class="aligner opacity"><a rel="img2" href="#"><img src="../img/portfolio/geisha/mini_2.jpg" alt="projet design produit bento" class="img-responsive"/></a></li>
            </ul>
          </div>
        </div>
      </div>
  </article>
  <article>
</section>

<?php
  $urlPrecedent ="print-carte.php";
  $urlSuivant = "print-lacolline.php";
  include('./../aside-other.php');
?>

<?php
  include('./../footer.php');
?>
  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
</body>
</html>