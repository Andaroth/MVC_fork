<?php
$get = explode("/", $_SERVER["REQUEST_URI"]); // Get url
$page = $get[2] != "" ? $get[2] : "home"; // target the url
$view = "./views/" . $page . ".php"; // refer to the view
$content="./views/home.php"; // set default content

if (file_exists($view)) {
    $content = $view; // usage
} else {
    $content = "./views/error404.php"; // send 404
}
?>