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
<!-- Modal / Reveal -->
<p><a data-open="exampleModal1">Click me for a modal</a></p>

<div class="reveal" id="exampleModal1" data-reveal>
  <h1>Awesome. I Have It.</h1>
  <p class="lead">Your couch. It is mine.</p>
  <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
  <button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<p><a data-open="exampleModal1">Click me for a modal</a></p>


 <?php $this->content(); ?>

<!-- Pagination -->
<ul class="pagination" role="navigation" aria-label="Pagination">
  <li class="disabled">Previous <span class="show-for-sr">page</span></li>
  <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
  <li><a href="#0" aria-label="Page 2">2</a></li>
  <li><a href="#0" aria-label="Page 3">3</a></li>
  <li><a href="#0" aria-label="Page 4">4</a></li>
  <li class="ellipsis" aria-hidden="true"></li>
  <li><a href="#0" aria-label="Page 12">12</a></li>
  <li><a href="#0" aria-label="Page 13">13</a></li>
  <li><a href="#0" aria-label="Next page">Next <span class="show-for-sr">page</span></a></li>
</ul>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/foundation.js"></script>
<script type="text/javascript" src="js/what-input.js"></script>
<script>
    $(document).foundation();
</script>
</body>


 





