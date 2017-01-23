<?php

namespace App\Controllers;
  // 
  // if "page" exists in the address bar then $page= that page, otherwise $page = home"
  $page = ! isset($_GET['page']) ? "home" : $_GET['page'];

  switch ($page) {
    
    case 'home':

      $controller = new HomeController();
      $controller->show();
      break;
    
    case 'about':
      
      $controller = new AboutController();
      $controller->show();
      break;

    case 'login':
      
    $controller = new AccountController;
    $controller->showLoginForm();
    break;

    default:
      echo "Error 404 ! Page not found !";
      break;
  }











