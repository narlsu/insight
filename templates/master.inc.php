<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div class="row">
      <div class="large-12 columns">

        <h1>Welcome to Insight</h1>
      </div>
    </div>


<nav class="row">
  <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
    <button class="menu-icon" type="button" data-toggle></button>
    <div class="title-bar-title">Menu</div>
  </div>

  <div class="top-bar" id="example-menu">
    <div class="top-bar-left">
      <ul class="dropdown menu" data-dropdown-menu>
        <li class="menu-text">Insight</li>
        <li class="has-submenu">
          <a href="#0">One</a>
          <ul class="submenu menu vertical" data-submenu>
            <li><a href="#0">One</a></li>
            <li><a href="#0">Two</a></li>
            <li><a href="#0">Three</a></li>
          </ul>
        </li>
        <li><a href="#0">Two</a></li>
        <li><a href="#0">Three</a></li>
      </ul>
    </div>
    <div class="top-bar-right">
      <ul class="menu">
        <li><input type="search" placeholder="Search"></li>
        <li><button type="button" class="button">Search</button></li>
      </ul>
    </div>
  </div>
</nav>


 <?php $this->content(); ?>

 





