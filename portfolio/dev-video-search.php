<?php
  $description = "Développement d'une page de recherche vidéo";
  $title = "Application recherche vidéo";
  include('./../header.php');
?>
<?php
  $urlHeader = "video-search/header-video-search";
  $descriptionHeader = "header video search";
  $projetTitle = "Video search";
  $demande = "Développer une application permettant de visualiser et rechercher des vidéos <br />
              ressources : youtube data api";
  $client = "projet personnel";
  $role = "développement de l'application, front-end";
  $logiciel = "Visual Studio Code, React";
  $date = "décembre 2017";
  include('./../projet-presentation.php');
?>
    <div class="row col-sm-8 col-sm-offset-2">
      <div class="btn-link-site"><a href="http://video-search.loan-truong.fr/"><span>voir le site</span></a></div>
    </div>
    <div class="row margin-top">
      <img class="center-block img-responsive draw-p5" src="../img/portfolio/video-search/video-search.jpg" class="img-responsive" alt="capture du site"/>
    </div>

  </section>

<?php
  $urlPrecedent ="graphisme-toutou-nounou.php";
  $urlSuivant = "draw-p5.php";
  include('./../aside.php');
?>

<?php
  include('./../footer.php');
?>

  <script type="text/javascript" src="../js/jquery.orbit.min.js" defer></script>
  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
</body>
</html>
