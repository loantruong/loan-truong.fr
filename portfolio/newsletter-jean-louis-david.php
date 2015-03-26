<?php
  $description = "Design de la newsletter pour la marque Jean Louis David.";
  $title = "Design newsletter Jean Louis David";
  include('./../header.php');
?>
<?php
  $urlHeader = "jld/header_jld";
  $descriptionHeader = "header newsletter Jean Louis David";
  $projetTitle = "Jld newsletter";
  $demande = "Réalisation d’une newsletter en reprenant les codes graphiques et l’esprit du site de Jean Louis David. </p>
        <p>CONTRAINTE : La newsletter doit mettre en avant six articles avec un nombre de caractère imposé, dont un, met en avant un produit de la gamme.";
  $client = "Jean Louis David // mission Webedia";
  $role = "design de la newsletter";
  $logiciel = "Photoshop";
  $date = "novembre 2012";
  include('./../projet-presentation.php');
?>

  <article class="container bg-projet-image">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2 center_plus">
        <ul class="no-padding">
          <li><h3>Titre de la newsletter avec un article en pleine page</h3><img src="../img/portfolio/jld/newsletter_jld_1.jpg" class="img-responsive img-espace" alt="newsletter header"/></li>
          <li><p>Article à lire</p><img src="../img/portfolio/jld/newsletter_jld_2.jpg" class="img-responsive img-espace" alt="newsletter article"/></li>
          <li><p>Fin de la newsletter avec présentation du produit de la semaine</p><img src="../img/portfolio/jld/newsletter_jld_3.jpg" class="img-responsive" alt="newsletter footer"/></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <P class="espace-projet-texte">
        Pour ce projet, j’ai repris les codes et éléments graphiques du site internet de la marque, comme le bouton « + », les couleurs noir et bleu, ainsi que la façon graphique de traiter les articles. <br/>
        J’ai choisi de mettre en avant un article principal afin d’attirer l’œil avec une grande image et de mettre en avant le produit à la fin de la newsletter pour inciter une dernière fois au clic avec le produit et le titre « à shopper cette semaine ».
        </p>
      </div>
    </div>
  </article>
</section>

<?php
  $urlPrecedent ="graphisme-toutou-nounou.php";
  $urlSuivant = "webdesign-terredav.php";
  include('./../aside.php');
?>

<?php
  include('./../footer.php');
?>
</body>
</html>