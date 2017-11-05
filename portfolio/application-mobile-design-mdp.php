<?php
  $description = "Conception et design de l'application Medicapp Dossiers Patients :
  ergonomie, design d'interface, illustration";
  $title = "UX et UI design application mobile médicale iPhone";
  include('./../header.php');
?>
<?php
  $urlHeader = "medicapp_dossiers_patients_app/header_iphone_mdp";
  $descriptionHeader = "design application mobile iOS";
  $projetTitle = "Application mobile médicale";
  $demande = "Medicapp Dossiers Patients est un logiciel complexe et multi-tâches sur iPad édité par Medicapp Connect.
  À partir de ce logiciel, il est possible pour un professionnel de santé de gérer son carnet de clients, de gérer ses rendez-vous, de constituer et de faire
    évoluer le dossier médical d’un patient par la génération de photos annotées et de lettres de synthèse.
    Il est également possible de gérer ses tarifs et ses comptes.
  <br/>Mon rôle a été décliner et moderniser l’application sur iPhone et tablette iOS, et smartphone et tablette Android.";
  $client = "Medicapp Connect";
  $role = "ux design, ui design, illustration";
  $logiciel = "Marvel - Photoshop - Illustrator";
  $date = "août 2016 à décembre 2016";
  include('./../projet-presentation.php');
?>
  <div class="bg-projet-image-no-padding">
    <div class="row margin-top">
        <img src="../img/portfolio/medicapp_dossiers_patients_app/iphone_mdp_design.jpg" class="img-responsive" alt="design des interfaces iPhone"/>
    </div>
    <div class="row">
      <div class="col-md-7">
        <img src="../img/portfolio/medicapp_dossiers_patients_app/iphone_mdp_old_design.jpg" class="img-responsive" alt="design des anciennes interface sur tablette"/>
      </div>
       <div class="col-md-4 margin-top">
        <h3>Analyse de la version actuelle</h3>
        <p>
          Compte tenu de toutes les fonctionnalités de Medicapp Dossiers Patients. Il faut un certain temps pour que les utilisateurs arrivent à utiliser l'application à 100%.
          <br/>Nous avons remarqué, que la plupart des professionnels de santé utilise le logiciel
          pour faire une seule tâche. Par exemple, créer des bilans en PDF ou bien créer le dossier patient en intégrant
          la photo de celui-ci. <br/> La version actuelle pose quelques problèmes d’ergonomies.
          Dont un problème majeur, les utilisateurs ont du mal à créer un nouveau dossier patient.
          <br/>Pour cette nouvelle version, qui va être aussi utilisée sur une interface plus petite ; le smartphone.
          Pour le premier jet de la version iPhone, nous avons conçu une application plus légère, tournée vers le patient.
        </p>
      </div>
      <div class="col-md-1"></div>
    </div>
    <div class="row margin-top">
        <img src="../img/portfolio/medicapp_dossiers_patients_app/iphone_mdp_design2.jpg" class="img-responsive" alt="design des interfaces iPhone dossier patient"/>
    </div>
    <div class="row margin-top">
      <div class="col-md-6 col-sm-offset-3">
        <h3>Le dossier médical au centre de l'application</h3>
        <p>Problème : Dans l’application actuelle (iPad), l’interface autour du tableau de bord qui rassemble toutes les fonctionnalités pert les utilisateurs. Les utilisateurs se pose certaines questions comme ; Par quoi je dois commencer ? Qu’est ce que, je peux faire ? Comment ?
Il est alors important pour la version smartphone de simplifier et de montrer un chemin clair à l’utilisateur. Le dossier médical du patient est au centre du travail du professionnel de santé. Il est important pour nous, de bien synthétiser toutes les informations dans cet espace afin de rendre plus aisé le travail du professionnel de santé. <p/>
        <p>Problématique : Comment réorganiser de manière simple l’application autour du dossier patient, sans la dénaturer ?</p>
        <p>Solution : L’utilisateur se connecte et arrive sur la liste des patients. Il peut switcher la vue pour afficher les patients du jour. Cette vue va permettre au professionnel de santé, de créer facilement un nouveau patient et de consulter et mettre à jour son dossier. Nous sommes ici au coeur même de l’application.
        </p>
        <p class="download-app"><a href="https://itunes.apple.com/fr/app/medicapp-dossiers-patients/id1163144182?mt=8" title="lien vers App Store">télécharger l'application sur l'App Store</a></p>
      </div>
    </div>
  </div>
  </section>

<?php
  $urlPrecedent ="webdesign-wild-circus.php";
  $urlSuivant = "application-mobile-design-mb-iPhone.php";
  include('./../aside.php');
?>

<?php
  include('./../footer.php');
?>
  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
</body>
</html>
