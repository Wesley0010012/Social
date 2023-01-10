<?php 
  namespace Social_Structure\Controllers;

  class ConfigController {
    public static function index() {
      \Social_Structure\Views\MainView::render('config', 'socialtemplate');
    }
  }
?>