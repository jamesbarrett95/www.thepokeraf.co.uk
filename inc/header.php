<!DOCTYPE html>
<html>
<head>
  <title>ThePokeRaf | The Official Website</title>
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>

<!-- Navigation -->
<body>
  <nav>
    <!--Navigation Icon-->
    <div class="bars" onclick="toggleNav(this)">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
    </div>
    <a href="index.php"><h3 class="name">ThePokeRaf</h3></a>

    <!--Navigation Elements-->
    <div class="container">
      <ul class="main-nav">
        <li><a href="#about">About</a></li>
        <li><a href="#latest">Latest</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </nav>

    <!--Main Header-->
      <header>
        <div class="container">
          <?php
            if($thankyou) {
              echo "<h1>Thank you, your message has sent successfully!</h1>";
              echo "<h2>You will be redirected back to home shortly</h2>";
            } else { ?>
              <h1>ThePokeRaf | The Official Website</h1>
              <div class="center">
                <a class="btn" href="#">Watch my latest video!</a>
              </div>
            <?php } ?>
        </div>
      </header>
