<?php
  $description = "Création d'une carte de voeux pour L'université de michel de montaigne";
  $title = "Carte de voeux Michel de Montaigne";
  include('./../header.php');
?>
<?php
  $urlHeader = "carte_voeux/header_carte";
  $descriptionHeader = "header projet carte de voeux";
  $projetTitle = "Carte de voeux";
  $demande = "Chaque année, l'université de Michel de Montaigne, Bordeaux III propose aux étudiants d'arts appliqués 
  la création d'une carte de voeux pour la nouvelle année.
  <br/>La période des fêtes me fait penser aux bons moments, aux repas de famille et surtout le souhait qu'il neige. J'ai voulu retranscrire dans ce projet, la joie, la mélancolie et la beauté de l'hiver. ";
  $client = "Projet scolaire";
  $role = "design graphique - photographie";
  $logiciel = "Photoshop";
  $date = "décembre 2010";
  include('./../projet-presentation.php');
?>
  <article class="container bg-projet-image">
    </div>
      <div class="row col-sm-12 text-center">
          <img src="../img/portfolio/carte_voeux/carte_de_voeux.jpg" class="img-responsive center-block" alt="carte de voeux"/>
      </div>
  </article>
  <article>
</section>

<?php
  $urlPrecedent ="design-bento.php";
  $urlSuivant = "illustration-geisha.php";
  include('./../aside-other.php');
?>

<?php
  include('./../footer.php');
?>
  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
</body>
</html>