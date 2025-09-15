<?php
$page_title = "Résultats — TravelBooker";
include __DIR__ . "/includes/header.php";

$type = $_GET['type'] ?? null;
//function e($v){return htmlspecialchars($v??'',ENT_QUOTES);}

if($type==='flight'){
  $stmt=$pdo->query("SELECT * FROM flights");
  $items=$stmt->fetchAll();
}elseif($type==='hotel'){
  $stmt=$pdo->query("SELECT * FROM hotels");
  $items=$stmt->fetchAll();
}else{$items=[];}
?>
<div class="container my-4">
  <h2>Résultats <?=e($type)?></h2>
  <div class="row g-3">
  <?php foreach($items as $it): ?>
    <div class="col-md-6"><div class="card p-3">
      <h5><?=e($it['name']??($it['departure_city']." → ".$it['arrival_city']))?></h5>
      <p><b>Prix:</b> <?=e($it['price_eur'])?> €</p>
      <a href="booking.php?type=<?=e($type)?>&id=<?=$it['id']?>" class="btn btn-primary">Réserver</a>
    </div></div>
  <?php endforeach; ?>
  </div>
</div>
<?php include __DIR__ . "/includes/footer.php"; ?>
