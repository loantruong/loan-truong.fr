<?php
  $description = "infographie pour un article présentant le Product Design Sprint";
  $title = "Comment innover en 5 jours avec le Product Design Sprint";
  include('./../header.php');
?>
<?php
  $lien = '<a href="https://medium.com/scribe/product-design-sprint-comment-innover-en-5-jours-a4d3ce3c091d">Product Design Sprint : comment innover en 5 jours ?</a>';
  $urlHeader = "article/header_product_design";
  $descriptionHeader = "design application mobile iOS";
  $projetTitle = "Infographie";
  $demande = "Création d'une infographie pour un article sur le ".$lien."";
  $client = "Personnel";
  $role = "graphisme, illustration";
  $logiciel = "Illustrator";
  $date = "avril 2017";
  include('./../projet-presentation.php');
?>
  <div class="bg-projet-image">
    <div class="row margin-top">
        <img src="../img/portfolio/article/infographie_product_design.png" class="img-responsive center-block border-img-article" alt="maquette design de la vue recherche sur tablette"/>
    </div>
  </section>

<?php
  $urlPrecedent ="application-mobile-design-mb-android.php";
  $urlSuivant = "webdesign-choisir-licence.php";
  include('./../aside.php');
?>

<?php
  include('./../footer.php');
?>
  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
</body>
</html>
