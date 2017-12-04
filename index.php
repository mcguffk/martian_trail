<?php
error_reporting(E_ALL);
ini_set('display_errors',true);
require_once(__DIR__."/vendor/autoload.php");

$loader = new \Twig_Loader_Filesystem([__DIR__."/templates/"]);
$twig = new \Twig_Environment($loader);

echo $twig->render("welcome.twig");
