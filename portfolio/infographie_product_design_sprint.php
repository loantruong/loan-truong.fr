<?php
  $description = "infographie pour un article présentant le Product Design Sprint";
  $title = "Comment innover en 5 jours avec le Product Design Sprint";
  include('./../header.php');
?>
<?php
  $lien = '<a href="https://medium.com/scribe/product-design-sprint-comment-innover-en-5-jours-a4d3ce3c091d">lire l\'article</a>';
  $urlHeader = "articles/header_design_sprint";
  $descriptionHeader = "Product Sprint Design";
  $projetTitle = "Infographie";
  $demande = "Création d'une infographie pour illustrer mon article sur le Product Design Sprint. Le Product Design Sprint est une méthode de Design Thinking qui permet de répondre rapidement à une problématique 
  de design en 5 jours. Elle a été initiée par l’équipe de Google Venture, inspirée par IDEO et la School de Stanford... ".$lien."";
  $client = "Personnel";
  $role = "graphisme, illustration, écriture";
  $logiciel = "Illustrator";
  $date = "avril 2017";
  include('./../projet-presentation.php');
?>
    <div class="bg-projet-image-no-padding">
    <div class="row margin-top">
      <p class="text-center">
        <img class="bordure img-responsive center-block" src="../img/portfolio/articles/infographie_product_design_sprint.png" alt="infographie">
      </p>
    </div>
  </div>
  </section>
  
<?php
  $urlPrecedent ="webdesign-wild-circus.php";
  $urlSuivant = "application-mobile-design-mb-iPhone.php";
  include('./../aside.php');
?>

<?php
  include('./../footer.php');
?>
  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
</body>
</html>
