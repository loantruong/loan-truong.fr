<?php
  $description = "Création et mise en page print et des templates de formation sous powerpoint pour La Colline";
  $title = "Création et mise en page d'outil de formation pour La Colline";
  include('./../header.php');
?>
<?php
  $urlHeader = "la_colline/header_lacolline";
  $descriptionHeader = "header la colline";
  $projetTitle = "La colline";
  $demande = "La Colline est une marque de soins haut de gamme suisse pour le visage et le corps. 
L'entreprise est présente à l'international et à besoin d'outil de formation uniforme qui reprend l'identité de la marque. Pour cela La colline a fait appel à Reventys pour la conception et la création d'outils de formation, tel qu'une skincare geography, des fiches récapitulatives modifiables et un book de formation. ";
  $client = "La Colline - mission entreprise - Reventys";
  $role = "direction artistique - design - relation client";
  $logiciel = "Photoshop - Powerpoint - InDesign - Illustrator";
  $date = "janvier/février 2015";
  include('./../projet-presentation.php');
?>
  <article class="container bg-projet-image">
    </div>
      <div class="row col-sm-12 text-center">
          <span class="visible-xs">
          <p>Fiche Récap</p>
          <img src="../img/portfolio/la_colline/fiche_recap2.jpg" class="img-responsive center-block" alt="template recap sheet Matrix r3"/>
          <br/>
          <p>Skincare geography</p>
          <img src="../img/portfolio/la_colline/skincare2.jpg" class="img-responsive center-block" alt="skincare geography verso"/>
          </span>
        <div id="galerie" class="hidden-xs">
          <div id="galerie_big">
            <ul class="no-marge aligner">
              <li><img id="img1" src="../img/portfolio/la_colline/fiche_recap1.jpg" class="img-responsive" alt="template recap sheet cell white"/></li>
              <li><img id="img2" src="../img/portfolio/la_colline/fiche_recap2.jpg" class="img-responsive" alt="template recap sheet Matrix r3"/></li>
              <li><img id="img3" src="../img/portfolio/la_colline/fiche_recap3.jpg" class="img-responsive" alt="template recap sheet moisture boost ++"/></li>
              <li><img id="img4" src="../img/portfolio/la_colline/skincare.jpg" class="img-responsive" alt="brochure skincare geography recto"/></li>
              <li><img id="img5" src="../img/portfolio/la_colline/skincare2.jpg" class="img-responsive" alt="skincare geography verso"/></li>
            </ul>
          </div>
          <div id="galerie_nav">
            <ul class="no-marge">
              <li class="aligner opacity"><a rel="img1" href="#"><img src="../img/portfolio/la_colline/mini_1.jpg" alt="miniature template recap sheet" class="img-responsive"/></a></li>
              <li class="aligner opacity"><a rel="img2" href="#"><img src="../img/portfolio/la_colline/mini_2.jpg" alt="miniature template recap sheet" class="img-responsive"/></a></li>
              <li class="aligner opacity"><a rel="img3" href="#"><img src="../img/portfolio/la_colline/mini_3.jpg" alt="miniature template recap sheet" class="img-responsive"/></a></li>
              <li class="aligner opacity"><a rel="img4" href="#"><img src="../img/portfolio/la_colline/mini_4.jpg" alt="miniature skincare geography" class="img-responsive"/></a></li>
              <li class="aligner opacity"><a rel="img5" href="#"><img src="../img/portfolio/la_colline/mini_5.jpg" alt="miniature skincare geography" class="img-responsive"/></a></li>
            </ul>
          </div>
        </div>
      </div>
  </article>
  <article>
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
         <br/>
        <p>La fiche récap permet à chaque lancement de produit, pouvoir donner aux formateurs/vendeurs une fiche synthétique présentant le nouveau produit.
          <br/>Les fiches récap ont été créé sous powerpoint afin que le  texte et les images des produits peuvent être modifiés. Pour ce projet j'ai été en charge du design des templates et de la réalisation sous powerpoint des déclinaisons des fonds pour les différentes gammes de la marque. </p>
          <p>La skincare geography est un document qui présente l'ensemble des produits de façon claire et simple. </p>
      </div>
    </div>
  </article>
</section>

<?php
  $urlPrecedent ="illustration-geisha.php";
  $urlSuivant = "print-mediasize.php";
  include('./../aside-other.php');
?>

<?php
  include('./../footer.php');
?>
  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
</body>
</html>