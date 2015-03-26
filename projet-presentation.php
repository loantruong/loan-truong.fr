 <header>
    <div class="bg-projet hidden-xs">
    <img src="../img/portfolio/<?php echo $urlHeader; ?>.jpg" class="img-responsive" alt="<?php echo $descriptionHeader; ?>"/>
    </div>
  </header>
  <section class="bg-section text-projet container padding-projet">
    <div class="row">
      <div class=" col-sm-8 col-sm-offset-2">
        <h1 id="titre-projet"><?php echo $projetTitle; ?></h1>
        <br/>
        <p>DEMANDE : <?php echo $demande; ?></p>
        <div class="legend-projet">
          <p class="legend-projet-texte">Client : <?php echo $client; ?> 
          <br/>Rôle : <?php echo $role; ?>
          <br/>Logiciel : <?php echo $logiciel; ?>
          <br/>Date : <?php echo $date; ?></p>
        </div>
      </div>
    </div>