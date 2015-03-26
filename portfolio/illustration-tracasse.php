<?php
  $description = "Conception et réalisation d'une étiquette pour des pots de miel.";
  $title = "Illustration étiquette pots de miel";
  include('./../header.php');
?>
<?php
  $urlHeader = "tracasse/header_tracasse";
  $descriptionHeader = "header projet Tracassé";
  $projetTitle = "Les tracassés";
  $demande = "Les Tracassés, est le surnom donné aux deux frères apiculteurs et rugbymen de la région de l'Aude.
  Pour leurs miels, ils ont voulu créer une étiquette à leurs images.";
  $client = "Les tracassés //  mission freelance";
  $role = "Illustration - design";
  $logiciel = "Illustrator";
  $date = "septembre 2014";
  include('./../projet-presentation.php');
?>

 <div class="container bg-projet-image">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2 text-center">
        <ul>
          <li><img src="../img/portfolio/tracasse/preview_miel.jpg" class="img-responsive centrer" alt="étiquette miel"/>
          <li><img src="../img/portfolio/tracasse/etiquette.jpg" class="img-responsive centrer" alt="étiquette miel"/>
        </ul>

    </div>
  </div>
  </section>

<?php
  $urlPrecedent ="print-workineo.php";
  $urlSuivant = "print-bymatao.php";
  include('./../aside-other.php');
?>

<?php
  include('./../footer.php');
?>

  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
</body>
</html>