<?php 
  session_start();

  date_default_timezone_set("America/Sao_Paulo");
  require("./vendor/autoload.php");

  define("INCLUDE_PATH", "http://localhost/Social_Network/");
  define("STATIC_INCLUDE_PATH", "http://localhost/Social_Network/Social_Structure/Views/Pages/static/");

  $app = new Social_Structure\Application();

  $app->run();
?>