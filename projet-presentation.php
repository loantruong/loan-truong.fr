 <header role="banner">
    <div class="bg-projet hidden-xs space-header-work">
    <img src="../img/portfolio/<?php echo $urlHeader; ?>.jpg" class="img-responsive" alt="<?php echo $descriptionHeader; ?>"/>
    </div>
  </header>
  <section class="bg-section text-projet container padding-projet ">
    <div class="row space-header-work-mini">
      <div class=" col-sm-8 col-sm-offset-2">
        <h1 id="titre-projet"><?php echo $projetTitle; ?></h1>
        <br/>
        <p>DEMANDE : <?php echo $demande; ?></p>
        <div class="legend-projet">
          <p class="legend-projet-texte">Client : <?php echo $client; ?>
          <br/>Date : <?php echo $date; ?>
          <br/>Rôle : <?php echo $role; ?>
          <br/>Logiciel/Langage : <?php echo $logiciel; ?></p>
        </div>
      </div>
    </div>

    <?php $lien = '<a href="https://medium.com/scribe/product-design-sprint-comment-innover-en-5-jours-a4d3ce3c091d">texte</a>'; ?>
