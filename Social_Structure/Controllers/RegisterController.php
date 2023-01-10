<?php 
  namespace Social_Structure\Controllers;

use FFI\Exception;

  class RegisterController {

    private static function verifyName($name) {
      for($i = 0; $i <= strlen($name); $i++) {
        if(is_numeric(@$name[$i])) {
          \Social_Structure\Utils::alert('Insira o nome corretamente!');
          break;
          return false;
        }
      }
      return true;
    }

    private static function verifyPasswords($pass, $pass2) {
      if($pass != $pass2) {
        \Social_Structure\Utils::alert('As senhas não batem!');
        return false;
      } else {
        return true;
      }
    }

    private static function verifyEmail($email) {
      $query = \Social_Structure\MySql::connect()->prepare("SELECT email FROM `tb_users` WHERE (email = ?)");
      $query->execute(array($email));

      if($query->rowCount() != 0) {
        \Social_Structure\Utils::alert("E-mail já existente na rede!");
        return false;
      } else {
        return true;
      }
    }
    
    private static function register($name, $password, $password2, $email) {
      $ver1 = self::verifyName($name);
      $ver2 = self::verifyPasswords($password, $password2);
      $ver3 = self::verifyEmail($email);

      if(!$ver1 || !$ver2 || !$ver3) {
        \Social_Structure\Utils::redirect('register?error=true&user='.$name.'&email='.$email.'&pass='.$password.'&pass2='.$password2);
        die();
      }

      $password = \Social_Structure\Bcrypt::hash($password);

      $query = \Social_Structure\MySql::connect()->prepare("INSERT INTO `tb_users` VALUES (?, ?, ?, ?, ?)");

      try {
        $query->execute(array(null, $name, $email, $password, null));
        \Social_Structure\Utils::redirect('home&register=success');
      } catch(Exception) {
        \Social_Structure\Utils::redirect('register?error=true&user='.$name.'&email='.$email.'&pass='.$password.'&pass2='.$password2.'&register=failed');
      }
    }
    
    public static function index() {
      if(isset($_POST['action'])) {
        if($_POST['action'] != 'Registrar') {
          \Social_Structure\Utils::alert('Tentativa de força bruta');
          \Social_Structure\Utils::redirect('home');
        } else {
          $actor = $_POST['action'];
          $name = $_POST['name'];
          $password = $_POST['pass'];
          $password2 = $_POST['pass2'];
          $email = $_POST['email'];
          
          self::register($name, $password, $password2, $email);
        }
      }
      
      \Social_Structure\Views\MainView::render('register','loginTemplate');
    }
  }
?>