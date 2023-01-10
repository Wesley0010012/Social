<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
    <link href="<?php echo STATIC_INCLUDE_PATH; ?>css/general.css" type="text/css" rel="Stylesheet" />
    <link href="<?php echo STATIC_INCLUDE_PATH; ?>css/pages/login.css" type="text/css" rel="Stylesheet" />

    <?php
      if($page == 'login'){
    ?>
    <title>Faça login para acessar seu perfil.</title>
    <?php } else if($page == 'register'){ ?>
    <title>Registre-se para conseguir acessar a Social</title>
    <?php } ?>
  </head>
  <body>
    <?php 
      \Social_Structure\Views\MainView::pageRender($page);
    ?>
  </body> 
</html>