<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Style -->
  <link rel="stylesheet" href="nuStyle.css">
  <title>Another PHP tutorial</title>
</head>
<body>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
    <a href="#" class="navbar-brand"><img id="navIcon" src="img/phpLogo.svg"></a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Page2</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Page3</a></li>
      </ul>
    </div>
  </nav>

  <?php
  $typeOf = "bloody";

  include "hdr2.html";
  ?>


  <div class="container-fluid" id="plan">
    <div class="row">
      <!-- start cols -->
      <div class="col-md-3 col-xl">
        <p>Basic Principles of PHP</p>
      </div>
      <div class="col-md-3 col-xl">
        <p>PHP7 / Apache / MySQL Setup</p>
      </div>
      <div class="col-md-3 col-xl">
        <p>Code Syntax</p>
      </div>
      <div class="col-md-3 col-xl">
      <p>Procedural & OOP</p>
      </div>
      <div class="col-md col-xl">
      <p>Dynamic Pages</p>
      </div>
      <div class="col-md col-xl">
      <p>Form Submissions / Superglobals</p>
      </div>
      <div class="col-md col-xl">
      <p>Working with Databases</p>
      </div>
      <div class="col-md col-xl">
      <p>Mini Projects (Contact form, User Login)</p>
      </div>





    </div>
  </div>




</body>
</html>
