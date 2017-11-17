<?php
  define ("M", "./models/");
  define ("C", "./controller/");
  define ("V", "./views/");

  require_once M . "global.php";

  require_once C . "router.php";

  include V . "master.php";
?>
