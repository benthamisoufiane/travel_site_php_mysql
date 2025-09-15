<?php
$DB_HOST="localhost";
$DB_NAME="travel";
$DB_USER="root";
$DB_PASS="";

$pdo=new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4",
  $DB_USER,$DB_PASS,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);

function e($v){return htmlspecialchars($v??'',ENT_QUOTES);}
?>
