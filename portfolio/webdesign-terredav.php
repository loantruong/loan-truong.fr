<?php
  $description = "Refonte graphique du site de voyage Terre d'aventure.";
  $title = "Webdesign Terre d'aventure";
  include('./../header.php');
?>
<?php
  $urlHeader = "terredav/header_terredav";
  $descriptionHeader = "header terre d'aventure";
  $projetTitle = "Terre d'Av'";
  $demande = "Refonte du webdesign du site Terredav : le rajeunir et accentuer le lien avec l'habitant.</p>
        <p>Terres d'aventure est une agence de voyages qui participe à la création d'un voyage synonyme de partage, d'émotion, dans le respect des hôtes et de l'environnement. Leurs mots d'ordre sont ; exploration, marche d'où le slogan « le voyage à pied », les lieux mystiques, la rencontre, l'écologie et les grands espaces.
        <p>Contrainte : Faire le design de la page d’accueil et d’un pays chaud et froid.";
  $client = "Projet personnel";
  $role = "design des interfaces web";
  $logiciel = "Photoshop - Illustrator";
  $date = "avril 2012";
  include('./../projet-presentation.php');
?>
   <article class="container bg-projet-image">
    <div class="row">
      <span class="visible-xs">
        <img src="../img/portfolio/terredav/webdesign_mobile.jpg" class="img-responsive center-block" alt="webdesign de la home page de terre d'aventure"/>
      </span>
    </div>
    <div class="row col-sm-12 text-center">
        <div id="galerie" class="hidden-xs">
          <div id="galerie_big">
            <ul class="no-marge aligner center-ul">
              <li><img id="img1" src="../img/portfolio/terredav/webdesign_home.jpg" class="img-responsive" alt="webdesgin page d'accueil terre d'aventure"/></li>
              <li><img id="img2" src="../img/portfolio/terredav/webdesign_pays_chaud.jpg" class="img-responsive" alt="webdesgin page pays chaud terre d'aventure"/></li>
              <li><img id="img3" src="../img/portfolio/terredav/webdesign_pays_froid.jpg" class="img-responsive" alt="webdesgin page pays froid terre d'aventure"/></li>
            </ul>
          </div>
          <div id="galerie_nav">
            <ul class="no-marge">
              <li class="aligner opacity"><a rel="img1" href="#"><img src="../img/portfolio/terredav/mini_1.jpg" alt="miniature webdesign terre d'aventure" class="img-responsive taille-max"/></a></li>
              <li class="aligner opacity"><a rel="img2" href="#"><img src="../img/portfolio/terredav/mini_2.jpg" alt="miniature webdesign terre d'aventure" class="img-responsive taille-max"/></a></li>
              <li class="aligner opacity"><a rel="img3" href="#"><img src="../img/portfolio/terredav/mini_3.jpg" alt="miniature webdesign erre d'aventure" class="img-responsive taille-max"/></a></li>
            </ul>
          </div>
        </div>
    </div>
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <br/>
        <h2>Concept</h2>
        <P class="article-end">
        Le site de Terredav, comme dans la plupart des sites de voyages sont souvent caractérisés par de belles photographies. Pour la refonte du webdesign du site, j'ai gardé l'importance de la photographie à travers les pages en rajoutant l'idée de marcher vers l'autre. Le voyage est comme une marche vers un endroit, mais pas seulement, cela peut être le début d'une découverte, d'une rencontre. J'ai voulu matérialiser graphique ce lien par un chemin qui serait tracé à l'aide de trait blanc pour aller vers un lieu, une maison, des habitants, un instant d'évasion.
        </p>
      </div>
    </div>
  </article>
</section>

<?php
  $urlPrecedent ="newsletter-jean-louis-david.php";
  $urlSuivant = "webdesign-sqp.php";
  include('./../aside.php');
?>
<?php
  include('./../footer.php');
?>
    <script type="text/javascript" src="../js/carousel.min.js" defer></script>
</body>
</html>