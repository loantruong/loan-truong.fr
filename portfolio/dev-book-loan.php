<?php
  $description = "Refonte de mon portfolio personnel";
  $title = "portfolio de loan truong";
  include('./../header.php');
?>
<?php
  $urlHeader = "weather-app/header-weather-app";
  $descriptionHeader = "header application météo";
  $projetTitle = "Weather app";
  $demande = "Développer une application permettant d'afficher les webcams et la météo de la ville de son choix.<br />
              critères: fonctionnel, originalité du design et l'interprétation du sujet, ergonomie de l'interface utilisateur 
              et qualité du design. <br />
              ressources : OpenWeatherMap et Webcams.travel";
  $client = "Wild School - Hackathon 24h";
  $role = "développement de l'application, front-end";
  $logiciel = "Visual Studio Code, AngularJS, nodeJS";
  $date = "octobre 2017";
  include('./../projet-presentation.php');
?>
    <div class="row col-sm-8 col-sm-offset-2">
      <div class="btn-link-site"><a href="https://loantruong.github.io/Weatherapp_Express/"><span>voir le site</span></a></div>
    </div>
    <div class="row margin-top">
        <img class="center-block img-responsive" src="../img/portfolio/weather-app/weather-app.jpg" class="img-responsive" alt="capture du site"/>
    </div>

  </section>

<?php
  $urlPrecedent ="draw-p5.php";
  $urlSuivant = "dev-nanny-care.php";
  include('./../aside.php');
?>

<?php
  include('./../footer.php');
?>

  <script type="text/javascript" src="../js/jquery.orbit.min.js" defer></script>
  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
</body>
</html>
