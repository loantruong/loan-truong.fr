<?php
  $description = "Développement d'une bibliothèque en ligne avec MySQL et PHP";
  $title = "Bibliothèque en ligne en PHP";
  include('./../header.php');
?>
<?php
  $urlHeader = "libairie-php/header-librairie-php";
  $descriptionHeader = "header book store php";
  $projetTitle = "Book store en php";
  $demande = "Développer une bibliothèque en ligne, ayant son catalogue de livre en PHP. 
  Le site possède un back-office administrateur qui permet de gérer ses membres (éditeurs et acheteurs), 
  de gérer sa base de données de livres. Le site permet à l'utilisateur de créer un compte, d'ajouter 
  un livre à son panier. Il permet aussi à un compte éditeur d'ajouter et de modifier un livre <br />
  Il restera à faire pour la seconde partie du projet, de rendre le site responsive et d'ajouter un beau design ergnomique, 
  avec le framework Materialize.";
  $client = "projet personnel";
  $role = "back-end de l'application et premier jet de design";
  $logiciel = "MySQL, PHP";
  $date = "juin 2017";
  include('./../projet-presentation.php');
?>
    <div class="row col-sm-8 col-sm-offset-2">
      <div class="btn-link-site"><a href="https://github.com/loantruong/book-store-php/"><span>voir le projet sur github</span></a></div>
    </div>
    <div class="row margin-top">
      <img class="center-block img-responsive draw-p5" src="../img/portfolio/libairie-php/screenshot.jpg" class="img-responsive" alt="capture du site"/>
    </div>
  </section>

<?php
  $urlPrecedent ="webdesign-wild-circus.php";
  $urlSuivant = "infographie_product_design_sprint.php";
  include('./../aside.php');
?>

<?php
  include('./../footer.php');
?>

  <script type="text/javascript" src="../js/jquery.orbit.min.js" defer></script>
  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
</body>
</html>
