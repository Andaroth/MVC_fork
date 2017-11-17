<?php 
  $dbhost = "localhost";
  $dbname = "dmotte";
  $dbuser = "dmotte";
  $dbpass = "dmotte1";

  require M . "functions.php";
  require C . "fromDB.php";

  $getStock = $db->query("SELECT * FROM stock");
  $getCar 
?>