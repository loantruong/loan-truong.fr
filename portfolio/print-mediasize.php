<?php
  $description = "Réalisation de flyer et de roll-up pour le stand media size";
  $title = "flyer et roll-up media size";
  include('./../header.php');
?>
<?php
  $urlHeader = "media_size/header_mediasize";
  $descriptionHeader = "header projet media size";
  $projetTitle = "Media Size";
  $demande = "MediaSize est une entreprise située dans la région parisienne qui propose au taxi des écrans interactifs. Un écran digital et multimédia qui va permettre au conducteur et aux voyageurs de s'informer sur les bons plans, la météo, l'actualité et plein d'autres choses. 
Pour mettre en avant sa solution digitale, MediaSize sera présent au salon du taxi qui se tiendra fin janvier 2015. 
<br/>Pour le salon, j'ai été chargé de la création des flyer et des roll-up.";
  $client = "Media Size - mission freelance";
  $role = "design graphique, relation client";
  $logiciel = "Illustrator - Photoshop";
  $date = "janvier 2015";
  include('./../projet-presentation.php');
?>

 <div class="container bg-projet-image">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2 text-center">
        <ul>
          <li><img src="../img/portfolio/media_size/flyer_media_size.jpg" class="img-responsive centrer" alt="étiquette miel"/>
          <li><img src="../img/portfolio/media_size/roll-up_mediasize.jpg" class="img-responsive centrer" alt="étiquette miel"/>
        </ul>
    </div>
  </div>
  </section>

<?php
  $urlPrecedent ="print-lacolline.php";
  $urlSuivant = "print-workineo.php";
  include('./../aside-other.php');
?>

<?php
  include('./../footer.php');
?>

  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
</body>
</html>