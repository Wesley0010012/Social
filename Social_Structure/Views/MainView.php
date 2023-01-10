<?php
  namespace Social_Structure\Views;

  class MainView {
    public static function render($page, $layout) {
      include('layouts/'.$layout.'.php');
    }

    public static function pageRender($page) {
      include('pages/'.$page.'.php');
    }
  }

?>