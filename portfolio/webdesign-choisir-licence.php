<?php
  $description = "Pour la refonte du site choisir une licence, traduit en français, re-design du site, illustration et ergonomie";
  $title = "choisir une licence open source : webdesign et illustration";
  include('./../header.php');
?>
<?php
  $urlHeader = "licence_open_source/header_licence_open_source";
  $descriptionHeader = "header projet choisir sa licence open source";
  $projetTitle = "Choisir sa licence Open Source";
  $demande = "Redesign du site en s’éloignant complètement du site d’origine. (<a href='http://choosealicense.com' class='texte_cv'>www.choosealicense.com</a>).
  <br/>Donner un esprit humoristique au site. La cible est monsieur tout le monde.
Il faut que le site devienne une référence pour les gens. Si une personne à besoin de se renseigner sur une 
licence libre de droits ou sur l’open-source, il faut qu’elle pense à aller sur ce site.";
  $client = "choisir une licence";
  $role = "ergonomie, webdesign, illustration";
  $logiciel = "Axure - Photoshop - Illustrator";
  $date = "avril 2015";
  include('./../projet-presentation.php');
?>
  <div class="bg-projet-image">
    <div class="row col-sm-12">
        <h2 class="col-sm-6 col-sm-offset-3">Mockup des interfaces</h2><br/>
        <img src="../img/portfolio/licence_open_source/mokup_choisir_licence.jpg" class="img-responsive center-block" title="mokup site open source" alt="mockup mobile avec mise en place d'une mascotte"/>
    </div>
    <div class="row">
      <h3 class="text-center">Wireframe intéractive sous Axure</h3>
      <img src="../img/portfolio/licence_open_source/wireframe_axure.jpg" class="img-responsive center-block" title="wireframe du site open source" alt="wireframe interactif du site : le pingouin est la mascotte"/>
    </div>
    <div class="hidden-xs illustration-licence row col-sm-6 col-sm-offset-3">
        <h2>Illustration en svg</h2>
    </div>
    <div class="row hidden-xs">
      <div class="col-sm-8 col-sm-offset-2 text-center">
        <div id="galerie">
          <div id="galerie_big">
            <ul class="no-marge aligner">
              <li><img id="img1" src="../img/portfolio/licence_open_source/illustration_hp.jpg" class="img-responsive" title="licence open source" alt="illustration quel licence open source choisir ?"/></li>
              <li><img id="img2" src="../img/portfolio/licence_open_source/illustration_hp2.jpg" class="img-responsive" title="licence GPL" alt="illustration licence GPL"/></li>
              <li><img id="img3" src="../img/portfolio/licence_open_source/illustration_hp3.jpg" class="img-responsive" title="licence MIT" alt="illustration licence MIT"/></li>
              <li><img id="img4" src="../img/portfolio/licence_open_source/illustration_hp4.jpg" class="img-responsive" title="licence Apache" alt="illustration licence Apache"/></li>
              <li><img id="img5" src="../img/portfolio/licence_open_source/illustration_hp5.jpg" class="img-responsive" title="licence creative commons" alt="illustration licence creative commons"/></li>
              <li><img id="img6" src="../img/portfolio/licence_open_source/illustration_hp6.jpg" class="img-responsive" title="toutes les licences" alt="illustration pour la page des toutes les licences"/></li>
              <li><img id="img7" src="../img/portfolio/licence_open_source/illustration_hp7.jpg" class="img-responsive" title="sans licence" alt="illustration pour la page pas de licence"/></li>
            </ul>
          </div>
          <div id="galerie_nav">
            <ul class="no-marge center-ul">
              <li class="aligner opacity"><a rel="img1" href="#"><img src="../img/portfolio/licence_open_source/mini_1.jpg" alt="miniature menu illustration 1" class="img-responsive taille-max"/></a></li>
              <li class="aligner opacity"><a rel="img2" href="#"><img src="../img/portfolio/licence_open_source/mini_2.jpg" alt="miniature menu illustration 2" class="img-responsive taille-max"/></a></li>
              <li class="aligner opacity"><a rel="img3" href="#"><img src="../img/portfolio/licence_open_source/mini_3.jpg" alt="miniature menu illustration 3" class="img-responsive taille-max"/></a></li>
              <li class="aligner opacity"><a rel="img4" href="#"><img src="../img/portfolio/licence_open_source/mini_4.jpg" alt="miniature menu illustration 4" class="img-responsive taille-max"/></a></li>
              <li class="aligner opacity"><a rel="img5" href="#"><img src="../img/portfolio/licence_open_source/mini_5.jpg" alt="miniature menu illustration 5" class="img-responsive taille-max"/></a></li>
              <li class="aligner opacity"><a rel="img6" href="#"><img src="../img/portfolio/licence_open_source/mini_6.jpg" alt="miniature menu illustration 6" class="img-responsive taille-max"/></a></li>
              <li class="aligner opacity"><a rel="img7" href="#"><img src="../img/portfolio/licence_open_source/mini_7.jpg" alt="miniature menu illustration 7" class="img-responsive taille-max"/></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row margin-top">
        <h2 class="col-sm-6 col-sm-offset-3">Webdesign</h2>
        <img src="../img/portfolio/licence_open_source/webdesign.jpg" class="img-responsive col-sm-12 hidden-xs" alt="webdesign du site galadrielle"/>
        <img src="../img/portfolio/licence_open_source/webdesign_mobile1.jpg" class="img-responsive col-sm-12 visible-xs center-block" alt="webdesign mobile page accueil site licence open source"/>
        <img src="../img/portfolio/licence_open_source/webdesign_mobile2.jpg" class="img-responsive col-sm-12 visible-xs center-block" alt="webdesign mobile template page licence open source"/>
    </div>
  </div>
  </section>

<?php
  $urlPrecedent ="application-mobile-design-mb-ios.php";
  $urlSuivant = "mobiledesign-stootie.php";
  include('./../aside.php');
?>

<?php
  include('./../footer.php');
?>
  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
</body>
</html>