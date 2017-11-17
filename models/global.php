<?php 
  $dbhost = "localhost";
  $dbname = "dmotte";
  $dbuser = "dmotte";
  $dbpass = "dmotte1";

  require_once M . "functions.php";
  require_once C . "fromDB.php";

  $getStock = $db->query("SELECT * FROM stock");
  $getCar 
?>