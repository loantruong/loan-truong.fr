<?php
  $description = "Amélioration de l'application Medicapp Bilans sur tablette iOS : ergonomie, design d'interface, illustration";
  $title = "UX et UI design application mobile médicale iOS";
  include('./../header.php');
?>
<?php
  $urlHeader = "medicapp_bilans_app/header_medicapp_bilans_app";
  $descriptionHeader = "design application mobile iOS";
  $projetTitle = "Application mobile médicale";
  $demande = "Medicapp Bilans est un logiciel de bilans kinésithérapiques sur mobile édité par Medicapp connect. Le logiciel propose des questionnaires sous forme de checkbox, la génération de ces bilans kinésithérapeutes sous format PDF et la création d’une lettre au médecin.<br/>
    Mon rôle a été d'améliorer et d'intégrer les nouvelles fonctionnalités tout en respectant l'expérience utilisateur et le design graphique existant.";
  $client = "Medicapp Connect";
  $role = "ux design, ui design, illustration";
  $logiciel = "Marvel - Photoshop - Illustrator";
  $date = "septembre 2015 - février 2016";
  include('./../projet-presentation.php');
?>
  <div class="bg-projet-image-no-padding">
    <div class="row margin-top">
        <img src="../img/portfolio/medicapp_bilans_app/desing_mobile_app_search.jpg" class="img-responsive" alt="maquette design de la vue recherche sur tablette"/>
    </div>
    <div class="row">
       <div class="col-md-5 col-sm-offset-6">
        <h3> Recherche d'un test</h3>
        <p>Quand l'utilisateur se connecte, il arrive sur la page des bilans kinésithérapique. Cette page affiche tous les tests présents dans Medicapp Bilans par ordre chronologique. Medicapp connect souhaite agrandir cette base de tests, pour cela il lui faut repenser son interface.<p/>
        <p> Problématique : Comment faciliter la recherche utilisateur sans complexifier l'application ?</p>
        <p>Dans un premier temps nous avons mis en place un champ de recherche afin que l'utilisateur puisse retrouver facilement un test. Nous avons eu des retours de professionnels de santé, nous disant que l'ajout du champ de recherche ne suffisait pas. Les kinésithérapeutes classent les tests en fonction de pathologie ou de la zone du corps à traiter, exemple : rhumatologie, cheville,... Nous avons alors décidé d'ajouter un classement par corps et par thème pour simplifier la visualisation des tests qu’un kiné peut faire en fonction de la pathologie qu’il a à traiter.
Nous avons ajouté un champ de recherches, pour ceux qui cherchent un test en particulier. </p>
      </div>
      <div class="col-md-1"></div>
    </div>
    <div class="row margin-top">
        <img src="../img/portfolio/medicapp_bilans_app/desing_mobile_app_resume.jpg" class="img-responsive" alt="maquette design de la vue résumé"/>
    </div>
    <div class="row">
      <div class="col-md-5 col-sm-offset-1">
        <h3>Évolution de l'application</h3>
        <p>Problème : L'utilisateur ne comprend pas comment sélectionner un patient pour lui affecter un bilan. En effet, l’utilisateur doit d’abord faire un bilan dans l'onglet bilan, à la fin de celui-ci, l’application lui demande de l’ajouter à un patient ou d’en créer un nouveau.<p/>
        <p>Problématique : Quels sont les usages des kinésithérapeutes ? Comment peut-on supprimer l’appréhension des professionnels de santé face à l’interface ?</p>
        <p>Analyser et répondre aux usages classiques des kinés : le client arrive, il reprend son dossier afin de se le remémorer. Le professionnels de santé effectue ensuite les différents tests pour amener à une conclusion de la prestation.</p>
        <p>Mise en place d'un nouveau scénario utilisateur : le kiné doit d’abord sélectionner ou créer un patient avant de faire un bilan. Pour les nouveaux utilisateurs, nous avons décidé de garder la possibilité de pouvoir visionner les tests sans être obligé de sélectionner un patient.</p>
        <p class="download-app"><a href="https://itunes.apple.com/fr/app/medicapp-bilans-pour-les-kines/id916925791?mt=8" title="lien vers App Store">télécharger la version App Store</a></p>
      </div>
    </div>
  </div>
  </section>

<?php
  $urlPrecedent ="application-mobile-design-mb-android.php";
  $urlSuivant = "webdesign-choisir-licence.php";
  include('./../aside.php');
?>

<?php
  include('./../footer.php');
?>
  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
</body>
</html>
