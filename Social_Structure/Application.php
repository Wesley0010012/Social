<?php 
  namespace Social_Structure;
  class Application {
    private $controller;

    private function setApp() {
      $loadName = 'Social_Structure\Controllers\\';
      $url = explode('/',@$_GET['url']);
      
      //$_SERVER['REQUEST_URI']

      if($url[0] == "") {
        $loadName.="Home";
      } else {
        $loadName.=ucfirst(strtolower($url[0]));
      }


      $loadName.="Controller";

      if(file_exists($loadName. '.php')){
        $this->controller = new $loadName();
      } else {
        include('Views/Pages/404.php');
        die();
      }
    }

    public function run(){
			$this->setApp();
			$this->controller->index();
		}
  }
?>