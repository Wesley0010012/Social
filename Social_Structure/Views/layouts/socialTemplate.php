<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 

    <link href="<?php echo STATIC_INCLUDE_PATH; ?>css/general.css" type="text/css" rel="Stylesheet" />
    <link href="<?php echo STATIC_INCLUDE_PATH; ?>css/pages/feed.css" type="text/css" rel="Stylesheet" />

    <title>Bem vindo <?php echo $_SESSION['name']; ?></title>
  </head>
  <body>
  <div class="feed">
    <header>
      <a class="brand">Social</a>
        <nav class="utils">
          <ul>
            <li><a href="/">Home</a></li>
            <li>
              <a href="/">Configurações da conta</a>
            </li>
          </ul>
        </nav>
        <div class="searcher">
          <form method="GET">
            <input type="text" name="pesquisa" placeholder="Digite o que deseja buscar..." />
            <button type="submit" name="a-search" value="o-search">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </form>
        </div>
        <ul class="icons">
          <li><a href=""><i class="fa fa-bell"></i></a></li>
          <li><a href=""><i class="fa fa-comments"></i></a></li>
          <li><a href=""><i class="fa fa-home"></i></a></li>
        </ul>
        <div class="person" style="display: flex;">
          <a class="person-photo">
            <!--Resolução da imagem que seria adicionada quando feito login-->
          <img src="<?php echo STATIC_INCLUDE_PATH; ?>images/template_perfil.jpeg" class="perfil" alt="Seu perfil">
          </a>
          <a href="<?php echo INCLUDE_PATH; ?>config"><i class="fa fa-gears"></i></a>
          <a href="<?php echo INCLUDE_PATH; ?>home?isExit=true"><i class="fa fa-arrow-right-from-bracket"></i></a>
        </div>
      </header>
      <div class="marger"></div>
        <?php \Social_Structure\Views\MainView::pageRender($page); ?>
      <footer>
        Todos os direitos reservados.
      </footer>
    </div>
  </body>
</html>