<!DOCTYPE html>
<html>
<head>
  <title>ThePokeRaf | The Official Website</title>
  <link href="https://fonts.googleapis.com/css?family=Nixie+One" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/buttons.css">
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>


<body>

  <!-- Navigation -->
  <nav id="nav" class="page-nav">
    <ul class="page-nav__list">
      <li><a href="#about">About</a></li>
      <li><a href="#latest">Latest</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>

  <!--Main Header-->
  <div class="hero">
    <div class="header">
      <?php
      if($thankyou) {
        echo "<h3>Thank you, your message has sent successfully!</h3>";
        echo "<h3>You will be redirected back to home shortly</h3>";
      } else { ?>
        <h1>ThePokeRaf</h1>
        <p class="lead">The Official Website</p>
        <a href="#latest" class="button button-3d button-royal">Latest video</a>
        <a href="https://www.youtube.com/thepokeraf" target="_blank" class="button button-3d button-royal">Go to my channel!</a>
      <?php } ?>
    </div>
  </div>
