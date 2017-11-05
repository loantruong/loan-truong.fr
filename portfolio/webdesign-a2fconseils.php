<?php
  $description = "Webdesign : Redesign du site A2f conseils, site réalisé sous wordpress";
  $title = "web design sqp motors, ergonomie, design";
  include('./../header.php');
?>
<?php
  $urlHeader = "a2f-conseils/header_a2fconseils";
  $descriptionHeader = "header A2f Conseils";
  $projetTitle = "A2f conseils";
  $demande = "A2f Conseils est une société qui propose des conseils et des services dans le domaine des systèmes et logiciels informatiques. 
  Pour donner une nouvelle image et attirer plus de clients, A2f Conseils souhaite moderniser et restructurer son site internet.";
  $client = "A2F Conseils // mission entreprise - Reventys";
  $role = "ergonomie - design du site";
  $logiciel = "Illustrator - Photoshop";
  $date = "décembre 2014";
  include('./../projet-presentation.php');
?>
  <div class="bg-projet-image">
  <section>
  <div class="visible-xs">
    <div class="row col-sm-12 text-center">
      <a href="http://preprod.reventys.com/A2fconseils/"><h2 class="">Webdesign du site</h2></a>
    </div>
    <div class="row">
        <img src="../img/portfolio/a2f-conseils/webdesign_a2fconsiels_homepage.jpg" class="img-responsive center-block" alt="webdesign a2f conseil page d'accueil web"/>
        <br/>
    </div>
    <div class="row col-sm-12">
      <a href="http://preprod.reventys.com/SQP/"><img src="../img/portfolio/a2f-conseils/btn_a2f.jpg" class="img-responsive center-block hidd" alt="bouton site"/></a>
    </div>
  </div>
    <div class="row bg-projet-image no_marging hidden-xs">
      <div class="col-sm-8 col-sm-offset-2 padding_none text-center">
        <a href="http://preprod.reventys.com/A2fconseils/"><h2 class="bb-tea-h4">Webdesign du site</h2></a>
        <br/>
        <div id="galerie">
          <div id="galerie_big">
            <ul class="no-marge aligner">
              <li><img id="img1" src="../img/portfolio/a2f-conseils/webdesign_a2fconsiels_homepage.jpg" class="img-responsive" alt="webdesign A2f conseils home page"/></li>
              <li><img id="img2" src="../img/portfolio/a2f-conseils/webdesign_a2fconsiels_societe.jpg" class="img-responsive" alt="webdesign A2f conseils préentation entreprise"/></li>
              <li><img id="img3" src="../img/portfolio/a2f-conseils/webdesign_a2fconsiels_contact.jpg" class="img-responsive" alt="webdesign A2f conseils contact"/></li>
              <li><img id="img4" src="../img/portfolio/a2f-conseils/webdesign_a2fconsiels_ref.jpg" class="img-responsive" alt="webdesign A2f conseils référence"/></li>
            </ul>
          </div>
          <div id="galerie_nav">
            <ul class="no-marge center-ul">
              <li class="aligner opacity"><a rel="img1" href="#"><img src="../img/portfolio/a2f-conseils/mini_1.jpg" alt="miniature A2f conseils home page" class="img-responsive taille-max"/></a></li>
              <li class="aligner opacity"><a rel="img2" href="#"><img src="../img/portfolio/a2f-conseils/mini_2.jpg" alt="miniature A2f conseils entreprise" class="img-responsive taille-max"/></a></li>
              <li class="aligner opacity"><a rel="img3" href="#"><img src="../img/portfolio/a2f-conseils/mini_3.jpg" alt="miniature A2f conseils contact" class="img-responsive taille-max"/></a></li> 
              <li class="aligner opacity"><a rel="img4" href="#"><img src="../img/portfolio/a2f-conseils/mini_4.jpg" alt="miniature A2f conseils ref" class="img-responsive taille-max"/></a></li>
            </ul>
          </div>
        </div>
          <br/>
              <a href="http://preprod.reventys.com/A2fconseils/"><img src="../img/portfolio/a2f-conseils/btn_a2f.jpg" class="img-responsive center-block hidd" alt="bouton site"/></a>
        </div>
    </div>
  </section>

<?php
  $urlPrecedent ="webdesign-sqp.php";
  $urlSuivant = "exposition-smartphood.php";
  include('./../aside.php');
?>

<?php
  include('./../footer.php');
?>
  <script type="text/javascript" src="../js/carousel.min.js" defer></script>
</body>
</html>