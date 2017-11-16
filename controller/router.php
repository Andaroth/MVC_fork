<?php
$get = explode("/", $_SERVER["REQUEST_URI"]);
$page = $get[2] != "" ? $get[2] : "home";
$view = "./views/" . $page . ".php";
$content="./views/home.php"; 

if (file_exists($view)) {
    $content = $view;
} else {
    $content = "./views/error404.php";
}
?>