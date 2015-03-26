<?php
  $description = "Mise en page d'une document de présentation";
  $title = "Mise en page d'un document de présentation de la société WORKINEO";
  include('./../header.php');
?>
<?php
  $urlHeader = "workineo/header_workineo";
  $descriptionHeader = "header projet workineo";
  $projetTitle = "Workineo";
  $demande = "Workineo est un nouveau réseau social pour les entrepreneurs. Il est permet de créer et nouer des liens entres les utilisateurs, à la fois sur le networking virtuel relations d’affaires fortes et sur un networking à la fois virtuel et aussi grâce à l'organisation d'évenement social.
  Pour promouvoir ce réseau, plusieurs document on été réalisé, dont un petit guide de présentation que j'ai mis en page.";
  $client = "Workineo - mission entreprise - Reventys";
  $role = "mise en page";
  $logiciel = "InDesign";
  $date = "février 2015";
  include('./../projet-presentation.php');
?>
  <article class="container bg-projet-image">
    </div>
      <div class="row col-sm-12 text-center">
          <span class="visible-xs">
          <img src="../img/portfolio/gouts_et_couleurs/webdesign_mobile.jpg" class="img-responsive center-block" alt="webdesign de la home page de gouts et couleurs"/>
          </span>
        <div id="galerie" class="hidden-xs">
          <div id="galerie_big">
            <ul class="no-marge aligner">
              <li><img id="img1" src="../img/portfolio/workineo/couverture.jpg" class="img-responsive" alt="couverture"/></li>
              <li><img id="img2" src="../img/portfolio/workineo/page1.jpg" class="img-responsive" alt="page1"/></li>
              <li><img id="img3" src="../img/portfolio/workineo/page2.jpg" class="img-responsive" alt="page2"/></li>
            </ul>
          </div>
          <div id="galerie_nav">
            <ul class="no-marge">
              <li class="aligner opacity"><a rel="img1" href="#"><img src="../img/portfolio/workineo/mini_1.jpg" alt="miniature template recap sheet" class="img-responsive"/></a></li>
              <li class="aligner opacity"><a rel="img2" href="#"><img src="../img/portfolio/workineo/mini_2.jpg" alt="miniature template recap sheet" class="img-responsive"/></a></li>
              <li class="aligner opacity"><a rel="img3" href="#"><img src="../img/portfolio/workineo/mini_3.jpg" alt="miniature template recap sheet" class="img-responsive"/></a></li>
            </ul>
          </div>
        </div>
      </div>
  </article>
  <article>
</section>

<?php
  $urlPrecedent ="print-mediasize.php";
  $urlSuivant = "illustration-tracasse.php";
  include('./../aside-other.php');
?>

<?php
  include('./../footer.php');
?>
  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
</body>
</html>