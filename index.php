<?php
  // Easy MVC usage
  define ("M", "./models/");
  define ("C", "./controller/");
  define ("V", "./views/");
  // Vitals
  require_once M . "global.php";
  require_once C . "router.php";
  // Views
  include V . "master.php";
?>
