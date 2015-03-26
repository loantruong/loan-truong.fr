<?php
  $description = "Création du logotype de Dream Developpement.";
  $title = "Graphic Designer : Logotype Dream Developpement";
  include('./../header.php');
?>
<?php
  $urlHeader = "dream_developpement/header_dd";
  $descriptionHeader = "header dream developpement";
  $projetTitle = "Dream developpement";
  $demande = "Création du logotype pour la start-up Dream Developpement";
  $client = "Dream Developpement";
  $role = "design du logotype <br/> Projet professionnel // mission freelance";
  $logiciel = "Illustrator";
  $date = "décembre 2013";
  include('./../projet-presentation.php');
?>

  <article class="container bg-projet-image">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2 class="espace-titre">Rercherche design du logotype</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2 text-center">
        <span class="visible-xs">
        <img src="../img/portfolio/dream_developpement/logo_mobile.jpg" class="img-responsive" alt="logo piste 1"/>
        </span>
        <div id="galerie" class="hidden-xs">
          <div id="galerie_big">
            <ul class="no-marge aligner">
              <li><img id="img1" src="../img/portfolio/dream_developpement/logotype_1.jpg" class="img-responsive" alt="logo piste 1"/></li>
              <li><img id="img2" src="../img/portfolio/dream_developpement/logotype_2.jpg" class="img-responsive" alt="logo piste 2"/></li>
              <li><img id="img3" src="../img/portfolio/dream_developpement/site_logo.jpg" class="img-responsive" alt="logo sur site"/></li>
            </ul>
          </div>
          <div id="galerie_nav">
            <ul class="no-marge center-ul">
              <li class="aligner opacity"><a rel="img1" href="#"><img src="../img/portfolio/dream_developpement/mini_1.jpg" alt="piste 1" class="img-responsive taille-max"/></a></li>
              <li class="aligner opacity"><a rel="img2" href="#"><img src="../img/portfolio/dream_developpement/mini_2.jpg" alt="piste 2" class="img-responsive taille-max"/></a></li>
               <li class="aligner opacity"><a rel="img3" href="#"><img src="../img/portfolio/dream_developpement/mini_3.jpg" alt="logo sur site" class="img-responsive taille-max"/></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </article>
</section>

<?php
  $urlPrecedent ="webdesign-games-thread.php";
  $urlSuivant = "campagne-asepta.php";
  include('./../aside.php');
?>

<?php
  include('./../footer.php');
?>
  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
</body>
</html>