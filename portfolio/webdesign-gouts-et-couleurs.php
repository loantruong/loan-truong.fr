<?php
  $description = "Identité visuelle, logotype et webdesign de la page d'accueil pour le festival gastronomique Goûts et Couleurs";
  $title = "Webdesign de la home page pour le festival Goûts et Couleurs";
  include('./../header.php');
?>
<?php
  $urlHeader = "gouts_et_couleurs/header_gouts_et_couleurs";
  $descriptionHeader = "header Goûts et couleurs";
  $projetTitle = "Goûts et Couleurs";
  $demande = "Le festival Goûts et Couleurs précédera les fêtes des illuminations du 8 décembre et permettra d’envisager la fête des lumières, le ventre plein, emplis de souvenirs gustatifs... Ainsi, les lyonnais et les nombreux touristes venant fêter la Fête des lumières seront invités, avant l’heure des illuminations, à visiter la ville, de jour, en mangeant.</p>
        <p>Création du logotype et création de la page d’accueil du futur site internet.";
  $client = "Projet scolaire fictif / IUT Cergy Pontoise";
  $role = "direction artistique - webdesign";
  $logiciel = "Illustrator - Photoshop";
  $date = "novembre 2013";
  include('./../projet-presentation.php');
?>
  <article class="container bg-projet-image">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2 class="espace-titre">Webdesign du site</h2>
      </div>
    </div>
      <div class="row col-sm-12 text-center">
          <span class="visible-xs">
          <img src="../img/portfolio/gouts_et_couleurs/webdesign_mobile.jpg" class="img-responsive center-block" alt="webdesign de la home page de gouts et couleurs"/>
          </span>
        <div id="galerie" class="hidden-xs">
          <div id="galerie_big">
            <ul class="no-marge aligner">
              <li><img id="img1" src="../img/portfolio/gouts_et_couleurs/webdesign_1.jpg" class="img-responsive" alt="webdesgin goûts et couleurs festival gastronomique"/></li>
              <li><img id="img2" src="../img/portfolio/gouts_et_couleurs/webdesign_2.jpg" class="img-responsive" alt="webdesgin goûts et couleurs festival gastronomique"/></li>
              <li><img id="img3" src="../img/portfolio/gouts_et_couleurs/webdesign_3.jpg" class="img-responsive" alt="webdesgin goûts et couleurs festival gastronomique"/></li>
            </ul>
          </div>
          <div id="galerie_nav">
            <ul class="no-marge">
              <li class="aligner opacity"><a rel="img1" href="#"><img src="../img/portfolio/gouts_et_couleurs/mini_1.jpg" alt="miniature webdesign goûts et couleurs" class="img-responsive"/></a></li>
              <li class="aligner opacity"><a rel="img2" href="#"><img src="../img/portfolio/gouts_et_couleurs/mini_2.jpg" alt="miniature webdesign goûts et couleurs" class="img-responsive"/></a></li>
              <li class="aligner opacity"><a rel="img3" href="#"><img src="../img/portfolio/gouts_et_couleurs/mini_3.jpg" alt="miniature webdesign goûts et couleurs" class="img-responsive"/></a></li>
            </ul>
          </div>
        </div>
      </div>
  </article>
  <article>
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <br/>
        <p>
        LA PAGE D'ACCUEIL du site internet permet aux utilisateurs de pouvoir s’informer, sur le festival en lui-même ainsi que ses activités. 
        Pour cela, la page a été conçue pour faciliter l’utilisateur dans sa recherche d’information. <br/>
        La page d’accueil possède un grand viewer qui permet d’attirer le regard et présenter le festival. Les différents évènements sont 
        divisés en trois grandes parties ; un agenda accessible, une géolocalisation des évènements à venir et la possibilité de présélectionner
         ses activités selon ses envies, gourmandise ou coloré. 
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2 class="espace-projet-texte">Recherche typographique</h2>
        <p class="espace-projet-texte">Jouer entre les lettres afin de donner envie, ainsi qu’un dynamisme aux mots « goûts et couleurs ». 
        <br/>
        Le logotype final donne un mouvement aux lettres grâces à la différente taille des lettres. L’esperluette et la couleur verte adoucit le tout, pour introduire le mot festival.</p>
      </div>
      <div class="col-sm-2"></div>
    </div>
    <div class="row center-block espace-projet-texte">
      <div class="col-sm-4 bordure">
        <img src="../img/portfolio/gouts_et_couleurs/logo_1.jpg" class="img-responsive centrer" alt="miniature goûts et couleurs"/>
      </div>
      <div class="col-sm-4 bordure">
        <img src="../img/portfolio/gouts_et_couleurs/logo_2.jpg" class="img-responsive centrer" alt="miniature goûts et couleurs"/>
      </div>
      <div class="col-sm-4 bordure">
        <img src="../img/portfolio/gouts_et_couleurs/logo_3.jpg" class="img-responsive centrer" alt="miniature goûts et couleurs"/>
      </div>
    </div>
  </article>
</section>

<?php
  $urlPrecedent ="campagne-mariage.php";
  $urlSuivant = "webdesign-portfolio-v1.php";
  include('./../aside.php');
?>

<?php
  include('./../footer.php');
?>
  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
</body>
</html>