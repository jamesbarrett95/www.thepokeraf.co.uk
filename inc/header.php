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

  <!--Main Header-->
  <div id="hero">
    <div class="header">
      <?php
      if($thankyou) {
        echo "<h1>Thank you, your message has sent successfully!</h1>";
        echo "<h2>You will be redirected back to home shortly</h2>";
      } else { ?>
        <h1>ThePokeRaf</h1>
        <p class="lead">The Official Website</p>
        <a href="#latest" class="button button-3d button-royal">Watch my latest video!</a>
        <a href="https://www.youtube.com/thepokeraf" class="button button-3d button-royal">Go to my channel!</a>
      <?php } ?>
    </div>
  </div>
