<?php
  $description = "Création de format pub pour l'OPS l'Oréal";
  $title = "Designer Graphic : Espace dédié Pure Power";
  include('./../header.php');
?>
<?php
  $urlHeader = "campagne_pure_power/header_pure_power";
  $descriptionHeader = "header campagne lOreal - Pure Power";
  $projetTitle = "Pure Power";
  $demande = "Pour l'OPS de Pure Power, création de format auto-promotionnels et d'un espace dédié qui mettra en avant des vidéos du produit et des articles écrit par la rédaction.";
  $client = "l'Oréal - mission entreprise Webedia";
  $role = "création graphique de l'espace dédié";
  $logiciel = "Photoshop";
  $date = "septembre 2013";
  include('./../projet-presentation.php');
?>

 <article class="container bg-projet-image">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2>Design Espace dédié</h2>
        <img src="../img/portfolio/campagne_pure_power/espace_dedie.jpg" class="img-responsive" alt="espace dédié et grand angle"/>
      </div>
    </div>
  </article>
</section>

<?php
  $urlPrecedent ="campagne-mobile-givenchy.php";
  $urlSuivant = "campagne-bonheur-ogres.php";
  include('./../aside.php');
?>

<?php
  include('./../footer.php');
?>
</body>
</html>