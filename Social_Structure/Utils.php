<?php 
  namespace Social_Structure;

  Class Utils {
    public static function alert($arg) {
      echo '<script>alert("'.$arg.'");</script>';
    }

    public static function verifyActor($arg) {
      switch($arg) {
        case 'Login':
          return true;
          break;
        default:
          return false;
          break;
      }
    }

    public static function redirect($url) {
      if(!$url) {
        echo '<script>window.location.href="home"</script>';
			  die();
      } else {
        echo '<script>window.location.href="'.$url.'"</script>';
        die();
      }
    }

    public static function scriptBreak($actor) {
      echo '<script>const actor = '.$actor.'</script>';
      echo '<script src="'.STATIC_INCLUDE_PATH.'js/breaker.js"></script>';
    }

    public static function destroyer() {
      session_destroy();
    }
  }
?>