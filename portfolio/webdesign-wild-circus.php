<?php
  $description = "Conception de l'idenité visuelle de Wild Circus Compagny et de son site web";
  $title = "Site de Wild Circus Compagny";
  include('./../header.php');
?>
<?php
  $urlHeader = "wild_circus/header_wild_circus";
  $descriptionHeader = "header Wild Circus";
  $projetTitle = "Wild circus";
  $demande = "La Wild School pour son challenge demande de concevoir un site web pour la compagnie de cirque \"Wild circus\".
  Le site se tenir sur une seule page et montrer 3 performances. Il doit avant tout donner envie aux spectateurs d'aller voir les spectacles de Wild circus !
  <br/> Contraintes techniques : le site doit être développé avec les langages HTML et CSS, et utiliser un composant jQuery.";
  $client = "Wild School - projet personnel";
  $role = "identité graphique - logotype - ergonomie - webdesign - intégration";
  $logiciel = "Photoshop - Illustrator - Atom";
  $date = "avril 2017";
  include('./../projet-presentation.php');
?>
    <div class="row col-sm-8 col-sm-offset-2">
      <div class="btn-link-site"><a href="http://loan-truong.fr/wild_circus/index.html"><span>voir le site</span></a></div>
    </div>
    <div class="row margin-top">
        <img src="../img/portfolio/wild_circus/webdesign_wild_circus_01.jpg" class="img-responsive" alt="maquette design de la vue recherche sur tablette"/>
    </div>

  </section>

<?php
  $urlPrecedent ="graphisme-toutou-nounou.php";
  $urlSuivant = "application-mobile-design-mdp.php";
  include('./../aside.php');
?>

<?php
  include('./../footer.php');
?>

  <script type="text/javascript" src="../js/jquery.orbit.min.js" defer></script>
  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
</body>
</html>
