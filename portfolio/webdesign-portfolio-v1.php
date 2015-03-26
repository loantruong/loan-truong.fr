<?php
  $description = "Création d'un portfolio web : design et intégration";
  $title = "Portfolio v1 : Webdesign et intégration";
  include('./../header.php');
?>
<?php
  $urlHeader = "portfolio_v1/header_portfolio";
  $descriptionHeader = "header portfolio v1";
  $projetTitle = "Première version du book";
  $demande = "Création d'un portfolio afin de mettre en avant mes projets.</p>
        <p>Pour ce projet, j'ai voulu créer mon propre portfolio, afin de créer un site par moi-même et surtout de m'exercer à l'intégration avec HTML5 et CSS.";
  $client = "loan truong";
  $role = "conception et réalisation du site : webdesign et intégration";
  $logiciel = "Photoshop - Sublime Text - FileZilla";
  $date = "février 2013";
  include('./../projet-presentation.php');
?>
   <div class="container bg-projet-image">
    <div class="row espace-titre">
      <div class="col-sm-8 col-sm-offset-2">
        <img src="../img/portfolio/portfolio_v1/webdesign.jpg" class="img-responsive hidden-xs center-block" alt="espace dédié et grand angle"/>
        <img src="../img/portfolio/portfolio_v1/webdesign_mobile.jpg" class="img-responsive visible-xs center-block" alt="espace dédié et grand angle"/>
         <a href="http://www.v1.loan-truong.fr/" target="_blank"><img src="../img/portfolio/portfolio_v1/btn_site.jpg" class="img-responsive center-block" alt="espace dédié et grand angle"/></a>
      </div>
    </div>
  </div>
  </section>

<?php
  $urlPrecedent ="webdesign-gouts-et-couleurs.php";
  $urlSuivant = "graphisme-toutou-nounou.php";
  include('./../aside.php');
?>

<?php
  include('./../footer.php');
?>
</body>
</html>