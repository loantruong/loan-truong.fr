<?php
  $description = "Développement d'une bibliothèque en ligne avec Node.JS et Angular JS";
  $title = "Bibliothèque en ligne";
  include('./../header.php');
?>
<?php
  $urlHeader = "bibilotheque-js/header-bibliotheque";
  $descriptionHeader = "header book store";
  $projetTitle = "Book store";
  $demande = "Développer une bibliothèque en ligne, ayant son catalogue de livre avec Node.JS et Angular JS. 
              Le site offre la possibilité d'ajouter et de supprimer un livre dans la base de données.
              Le site permet aussi de rechercher un livre dans la base de données de l'API Google Books search.";
  $client = "projet personnel";
  $role = "développement de l'application mean stack";
  $logiciel = "Node.js, Angular JS, MySQL";
  $date = "décembre 2017";
  include('./../projet-presentation.php');
?>
    <div class="row col-sm-8 col-sm-offset-2">
      <div class="btn-link-site"><a href="https://github.com/loantruong/book-store/"><span>voir le projet sur github</span></a></div>
    </div>
    <div class="row margin-top">
      <img class="center-block img-responsive draw-p5" src="../img/portfolio/bibilotheque-js/screenshot.jpg" class="img-responsive" alt="capture du site"/>
    </div>
    <div class="bg-section row margin-top">
    <div class="col-sm-8 col-sm-offset-2">
      <p>Des améliorations son prévues : </p>
      <ul>
        <li>- ajouter un livre à la base de données via les résultats issus du moteur de recherche</li>
        <li>- ajouter la possibilité de modifier un livre de la base de données</li>
        <li>- ajouter l'authentification avec un compte administrateur</li>
      <ul>
    </div>
  </div>
  </section>

<?php
  $urlPrecedent ="dev-nanny-care.php";
  $urlSuivant = "webdesign-wild-circus.php";
  include('./../aside.php');
?>

<?php
  include('./../footer.php');
?>

  <script type="text/javascript" src="../js/jquery.orbit.min.js" defer></script>
  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
</body>
</html>
