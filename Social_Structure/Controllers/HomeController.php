<?php 
  namespace Social_Structure\Controllers;

  class HomeController {
    public static function index() {

      if(@$_GET['isExit'] && $_GET['isExit'] == 'true') {
        \Social_Structure\Utils::destroyer();
        \Social_Structure\Utils::redirect('home');
      }

      if(@isset($_SESSION['login']) && @$_SESSION['login'] == "OK!") {
        //Página de Feed

        \Social_Structure\Views\MainView::render('feed', 'socialTemplate');
      } else {
        //Página de login
        if(isset($_POST['action'])) {
          $actor = $_POST['action'];

          if(!\Social_Structure\Utils::verifyActor($actor)) {
            \Social_Structure\Utils::alert('Tentativa de bruteforce');
            
            \Social_Structure\Utils::redirect(INCLUDE_PATH);
          } else {
            //Passou na verify;

            $login = $_POST['email'];
            $pass = $_POST['pass'];

            $verify = \Social_Structure\MySql::connect()->prepare("SELECT * FROM tb_users WHERE (email = ?) ");
            $verify->execute(array($login));

            if($verify->rowCount() == 0) {
              \Social_Structure\Utils::alert("E-mail ou senha incorretos!");
              \Social_Structure\Utils::redirect(INCLUDE_PATH.'?login=failed');
            } else {
              $data = $verify->fetch();
              $checkpass = $data['password'];
              if(\Social_Structure\Bcrypt::check($pass, $checkpass)) {
                $_SESSION['login'] = "OK!";
                $_SESSION['name'] = $data['name'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['password'] = $data['password'];
                $_SESSION['photo'] = $data['photo'];
                \Social_Structure\Utils::redirect(INCLUDE_PATH);
              } else {
                \Social_Structure\Utils::alert($checkpass); //"E-mail ou senha incorretos!"
                \Social_Structure\Utils::redirect(INCLUDE_PATH.'?login=failed');
              }
            }
          }
        }
        \Social_Structure\Views\MainView::render('login','loginTemplate');
      }
    }
  }

?>