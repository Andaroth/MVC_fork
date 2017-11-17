<?php
  define ("M", "./models/");
  define ("C", "./controller/");
  define ("V", "./views/");

  require M . "global.php";

  require C . "router.php";
  require C . "getstock.php";

  include V . "master.php";
?>
