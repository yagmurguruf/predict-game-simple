<?php

require_once __DIR__.'/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem("templates");
$twig = new Twig_Environment($loader, array());


echo $twig->render("index.twig", array(
    "version"=>"1.0.0",
    "id" => $_REQUEST["id"] ? $_REQUEST["id"] : 0
));

?>


