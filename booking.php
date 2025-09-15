<?php
$page_title="Réservation";include __DIR__."/includes/header.php";
$type=$_GET['type']??null;$id=(int)($_GET['id']??0);

if($type==='flight'){
  $stmt=$pdo->prepare("SELECT * FROM flights WHERE id=?");
  $stmt->execute([$id]);
  $item=$stmt->fetch();
}
if($type==='hotel'){
  $stmt=$pdo->prepare("SELECT * FROM hotels WHERE id=?");
  $stmt->execute([$id]);
  $item=$stmt->fetch();
}
?>
<div class="container my-4">
<?php if(!$item): ?><p>Introuvable.</p>
<?php else: ?>
<form method="post" action="confirm.php" class="card p-3">
  <input type="hidden" name="type" value="<?=$type?>">
  <input type="hidden" name="id" value="<?=$id?>">
  <input class="form-control mb-2" name="fullname" placeholder="Nom complet" required>
  <input type="email" class="form-control mb-2" name="email" placeholder="Email" required>
  <button class="btn btn-primary">Confirmer</button>
</form>
<?php endif; ?>
</div>
<?php include __DIR__."/includes/footer.php"; ?>
