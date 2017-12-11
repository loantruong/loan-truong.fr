<?php
  $description = "Plateforme de mise en relation entre parent et nounou";
  $title = "Nanny care";
  include('./../header.php');
?>
<?php
  $urlHeader = "nanny-care/header-nounou";
  $descriptionHeader = "header nanny care";
  $projetTitle = "Nanny Care";
  $demande = "Création du back-end pour Nanny Care, un site de mise en relation entre parent et nounou proche de chez soi.
            (mise en place de la base de donnée, du server (routes, controller), authentification, envoie de mail dynamique)";
  $client = "Comodo SAS";
  $role = "mise en place de la base de donnée,développement du back-end";
  $logiciel = "JavaScript, Node.js, MySQL, Sequelize";
  $date = "octobre à novembre 2017";
  include('./../projet-presentation.php');
?>
    <div class="row margin-top">
        <img class="center-block img-responsive draw-p5" src="../img/portfolio/nanny-care/image-nanny-care.jpg" class="img-responsive" alt="capture du site"/>
    </div>

  </section>

<?php
  $urlPrecedent ="dev-weather-app.php";
  $urlSuivant = "dev-book-store.php";
  include('./../aside.php');
?>

<?php
  include('./../footer.php');
?>

  <script type="text/javascript" src="../js/jquery.orbit.min.js" defer></script>
  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
</body>
</html>
