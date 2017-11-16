<?php
  try {
    $db = new PDO("mysql:host=localhost;dbname=dmotte;charset=utf8","dmotte","dmotte1");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(Exception $e) {echo("DB conf is like your life. It's wrong.");die();}
?>