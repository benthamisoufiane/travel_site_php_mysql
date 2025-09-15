<?php $page_title = "Accueil — TravelBooker"; include __DIR__ . "/includes/header.php"; ?>
<section class="hero py-5">
  <div class="container">
    <h1 class="display-6 fw-bold">Réservez votre prochain voyage en toute simplicité</h1>
    <p class="lead">Comparez vols et hôtels, trouvez les meilleures offres, et finalisez votre réservation en quelques clics.</p>
    <a href="results.php?type=flight" class="btn btn-primary">Voir les vols</a>
    <a href="results.php?type=hotel" class="btn btn-outline-primary">Voir les hôtels</a>
  </div>
</section>
<?php include __DIR__ . "/includes/footer.php"; ?>
