<?php
  $description = "Pour mettre en avant mes réalisations et projets digitaux, refonte du webdesign de mon portfolio web, pour un nouveau site responsive !";
  $title = "Portfolio v2 : webdesign - responsive design et intégration";
  include('./../header.php');
?>
<?php
  $urlHeader = "portfolio_v2/header_portfolio";
  $descriptionHeader = "header portfolio responsive";
  $projetTitle = "Portfolio responsive";
  $demande = "Refonte du design du site existant =><a href=\"http://www.v1.loan-truong.fr/\" class=\"texte_cv\">http://www.v1.loan-truong.fr</a> pour créer un site responsive.<br/>
  Ce projet a été pensé en mobile first, c'est-à-dire que le design du site mobile a été conçu en premier.
  Le design mobile et web finalisé, j'ai ensuite intégré le site à l'aide du framework Twitter Bootstrap.";
  $client = "projet personnel";
  $role = "webdesign - intégration";
  $logiciel = "Photoshop - Twitter Bootstrap - FileZilla -Sublime Text";
  $date = "juillet/août 2014";
  include('./../projet-presentation.php');
?>

  <div class="container bg-projet-image">
    <div class="row text-center col-md-12">
          <h2>webdesign du site</h2>
          <img src="../img/portfolio/portfolio_v2/webdesign.jpg" class="img-responsive center-block" alt="webdesign responsive portfolio"/>
    </div>
  </div>
  </section>

  <?php
    $urlPrecedent ="webdesign-bb-tea.php";
    $urlSuivant = "campagne-seb.php";
    include('./../aside.php');
  ?>
  <?php
    include('./../footer.php');
  ?>
  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
  
</body>
</html>