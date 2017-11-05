<?php
  $description = "";
  $title = "ux et ui design application mobile sur android";
  include('./../header.php');
?>
<?php
  $urlHeader = "medicapp_bilans_app/header_medicapp_bilans_app_android";
  $descriptionHeader = "design application mobile android";
  $projetTitle = "Application mobile médicale";
  $demande = "Medicapp Bilans est un logiciel de bilans kinésithérapiques sur mobile édité par Medicapp connect. Le logiciel propose des questionnaires sous forme de checkbox, la génération de ces bilans kinés sous format PDF et la création d’une lettre au médecin.<br/>
    Mon rôle a été de décliner la version existant de l'application sur iOS, pour la version Android en suivant les guidelines Material design. ";
  $client = "Medicapp Connect";
  $role = "ux design, ui design, illustration";
  $logiciel = "Marvel - Photoshop - Illustrator";
  $date = "octobre 2015 - mai 2016";
  include('./../projet-presentation.php');
?>
  <div class="bg-projet-image">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
      <h2>Bibliothèque de tests</h2>
        <img src="../img/portfolio/medicapp_bilans_app/preview_tests_smartphone.gif" class="img-responsive center-block" title="preview interface utilisateur android app" alt="interface utilisateur interactif android"/>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-sm-offset-3 margin-top">
        <p>problème : Medicapp Bilans propose une liste de tests kinésithérapiques regroupés par thématique et par zone du corps. En travaillant sur l'application android, nous avons dû concevoir une nouvelle interface pour la recherche des tests sur smartphone. En effet sur petit écran, il n'y a pas assez de place pour afficher les tests, le champ de recherche et la liste des corps ou thèmes. <p/>
        <p>Problématique :  Comment proposer une navigation simple et intuitive des tests Medicapp Bilans sur petit écran?</p>
        <p>L'univers Android et son material design nous permettent d'afficher une vue en plein écran et d'utiliser un floating button pour l'action de rechercher un test. C'est ce que nous avons décidé de faire. En cliquant sur le bouton de recherche, l'application propose à l'utilisateur deux sections, comme sur iPad ; corps et thème. Ayant plus de place pour afficher les thèmes, des illustrations ont été ajoutées afin que l'utilisateur puisse se repérer au texte et aux visuels.  </p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3 welcom">
        <h2>Création d'un bilan</h2>
        <img src="../img/portfolio/medicapp_bilans_app/tablett_ui_design.gif" class="img-responsive center-block" title="preview interface utilisateur android app" alt="interface utilisateur interactif android"/>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-sm-offset-3 margin-top">
        <p>Toutes les vues existant sur Medicapp Bilans iOS ont été repensées, améliorées et redesignées pour la version Android. Par exemple, pour le questionnaire des tests, nous avons choisi d'intégrer la possibilité de prendre des photos toutes au long du test. Sur la version iOS, il n'était possible de prendre des photos qu'arrivées à la fin du questionnaire.</p>
        <p class="download-app"><a href="https://play.google.com/store/apps/details?id=com.medicappconnect.medicappbilans&hl=fr" title="lien vers google play">télécharger la version Android</a></p>
      </div>
    </div>
  </div>
  </section>

<?php
  $urlPrecedent ="application-mobile-design-mb-iPhone.php";
  $urlSuivant = "application-mobile-design-mb-ios.php";
  include('./../aside.php');
?>

<?php
  include('./../footer.php');
?>
  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
</body>
</html>
