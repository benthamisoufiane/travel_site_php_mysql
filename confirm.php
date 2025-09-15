<?php
$page_title="Confirmation";include __DIR__."/includes/header.php";

$type=$_POST['type']??null;$id=(int)($_POST['id']??0);
$fullname=$_POST['fullname']??'';$email=$_POST['email']??'';

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

if($item){
  $pdo->prepare("INSERT INTO bookings(type,item_id,fullname,email) VALUES(?,?,?,?)")
  ->execute([$type,$id,$fullname,$email]);
}
?>
<div class="container my-4">
  <div class="card p-3">
    <h5>✅ Réservation confirmée</h5>
    <p><b>Voyageur:</b> <?=$fullname?> — <?=$email?></p>
    <a href="index.php" class="btn btn-outline-primary">Retour accueil</a>
  </div>
</div>
<?php include __DIR__."/includes/footer.php"; ?>
