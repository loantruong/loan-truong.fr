<?php
  $description = "Campagne Mir pour Webedia";
  $title = "Design Graphic : Campagne Mir";
  include('./../header.php');
?>
<?php
  $urlHeader = "campagne_mir/header_mir";
  $descriptionHeader = "header campagne Mir";
  $projetTitle = "Campagne Mir";
  $demande = "Créer l'habillage et les formats auto-promotionnels de la campagne publicitaire.</p>
        <p>CONCEPT : Jouer sur la mousse et la sensualité.</p>
        <p>Avant d'arriver sur le site internet, l'internaute tombe sur un décor rose, qui se remplit de mousse.
        On peut apercevoir des objets de la campagne, tel que de la vaisselle, un canard rose, une éponge en forme de 
        cœur et des pétales de rose. Au fur et à mesure, le site se remplit de mousse. 
        La mousse petit à petit s'en va pour faire apparaitre le site et l'habillage publicitaire final avec le produit MIR Vaisselle.";
  $client = "Henkel // mission entreprise – Webedia ";
  $role = "graphisme habillages et auto-promos et scénarisation du FT";
  $logiciel = "Photoshop";
  $date = "mai 2013";
  include('./../projet-presentation.php');
?>

  <article class="bg-projet-image">
    <div class="row hidden-xs">
        <div class="col-md-6 col-sm-9 col-md-offset-3 col-sm-offset-1">
          <h2>Design Story Board</h2>
          <div id="slideshow">
            <img src="../img/portfolio/campagne_mir/ft_1.jpg"  alt="scénarion ft 1"/>
            <img src="../img/portfolio/campagne_mir/ft_2.jpg"  alt="scénarion ft 2"/>
            <img src="../img/portfolio/campagne_mir/ft_3.jpg"  alt="iscénarion ft 3"/>
            <img src="../img/portfolio/campagne_mir/ft_4.jpg"  alt="scénarion ft 4"/>
            <img src="../img/portfolio/campagne_mir/ft_5.jpg"  alt="scénarion ft 5"/>
            <img src="../img/portfolio/campagne_mir/ft_6.jpg"  alt="scénarion ft 6"/>
            <img src="../img/portfolio/campagne_mir/ft_7.jpg"  alt="scénarion ft 7"/>
            <img src="../img/portfolio/campagne_mir/ft_8.jpg"  alt="scénarion ft final"/>
          </div>
        </div>
    </div>
    <div class="row col-sx-12 no_marging">
      <div class="visible-xs">
          <h2 class="text-center">Story Board</h2>
          <img src="../img/portfolio/campagne_mir/ft_mobile.jpg" alt="image présentation ft mobile" class="img-responsive"/>
      </div>
    </div>
    <div class="rox visible-xs">
        <h2>Design habillage</h2>
        <span class="row">
        <img src="../img/portfolio/campagne_mir/habillage_mir.jpg" alt="habillage de la campagne Mir" class="img-responsive center-block"/>
        </span>
    </div>
    <div class="row bg-projet-image no_marging hidden-xs">
        <div class="col-md-6 col-sm-9 col-md-offset-3 col-sm-offset-1">
          <br/>
          <h2>Habillage</h2>
        <span class="row">
        <img src="../img/portfolio/campagne_mir/habillage_mir.jpg" alt="habillage de la campagne Mir" class="img-responsive center-block"/>
        </span>
      </div>
    </div>
  </article>
</section>

<?php
  $urlPrecedent ="graphisme-galadrielle.php";
  $urlSuivant = "application-feel-board.php";
  include('./../aside.php');
?>

<?php
  include('./../footer.php');
?>

  <script type="text/javascript" src="../js/jquery.orbit.min.js" defer></script>
</body>
</html>