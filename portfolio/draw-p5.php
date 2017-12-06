<?php
  $description = "Tuto : ajouter des lignes animées sur du texte";
  $title = "Draw avec p5.js";
  include('./../header.php');
?>
<?php
  $urlHeader = "draw-p5/header-draw";
  $descriptionHeader = "header draw";
  $projetTitle = "draw with p5.js";
  $demande = "Dessiner des lignes animées derrière un texte avec la librairie JavaScript P5.js. <br />
              P5.js permet de faire de la programmation un domaine et un outil accessible pour les 
              artistes, les concepteurs et les curieux.";
  $client = "projet personnel";
  $role = "développement de la page";
  $logiciel = "Visual Studio Code, JavaScript, p5.js";
  $date = "décembre 2017";
  include('./../projet-presentation.php');
?>
    <div class="row col-sm-8 col-sm-offset-2">
      <div class="btn-link-site"><a href="https://loantruong.github.io/draw-p5/"><span>voir le site</span></a></div>
    </div>
    <div class="row margin-top">
        <img class="center-block img-responsive draw-p5" src="../img/portfolio/draw-p5/screenshoot.jpg" class="img-responsive" alt="capture du site"/>
    </div>

  </section>

<?php
  $urlPrecedent ="dev-video-search.php";
  $urlSuivant = "dev-weather-app.php";
  include('./../aside.php');
?>

<?php
  include('./../footer.php');
?>

  <script type="text/javascript" src="../js/jquery.orbit.min.js" defer></script>
  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
</body>
</html>
