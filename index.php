<?php
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect user input - Filter and Sanitize
    $name = trim(filter_input(INPUT_POST, "user_name", FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, "user_email", FILTER_SANITIZE_EMAIL));
    $message = trim(filter_input(INPUT_POST, "user_message", FILTER_SANITIZE_STRING));

    // No input validation
    if($name == "" || $email == "" || $message == "") {
      $error_message = "Please fill in all form fields";
    }

    // Require the PHPMailer Library
    require("inc/PHPMailer/PHPMailerAutoload.php");
    $mail = new PHPMailer;

    // Invalid Email Validation
    if(!isset($error_message) && !$mail->ValidateAddress($email)) {
      $error_message = "Invalid Email Address";
    }

    // If no error message is set, create the email and set up SMTP
    if(!isset($error_message)) {
      $email_body = "";
      $email_body .= "Name: " . $name ."\n";
      $email_body .= "Email: " . $email ."\n";
      $email_body .= "Message: " . $message ."\n";
      $mail->IsSMTP();
      $mail->SMTPAuth = true;
      $mail->Host = "smtp.postmarkapp.com";
      $mail->Port = 25;
      $mail->Username = "f6dffe65-e715-4532-815e-11d16d9d4f40";
      $mail->Password = "f6dffe65-e715-4532-815e-11d16d9d4f40";
      $mail->setFrom("UP734253@myport.ac.uk");
      $mail->addAddress("UP734253@myport.ac.uk", "James");
      $mail->isHTML(false);
      $mail->Subject = 'Message from ' . $name;
      $mail->Body    = $email_body;
      // If the mail sends...
      if($mail->send()) {
        header("location:thankyou.php");
        exit;
      }
        $error_message = 'Message could not be sent.';
        $error_message .= 'Mailer Error: ' . $mail->ErrorInfo;
      }
    }
    include("inc/header.php");
?>

  <!--Introduction-->
  <div class="container clearfix">
    <div class="primary col">
      <h2>Who is ThePokeRaf?</h2>
      <p>Hey, what's going on guys? My name's Raf and welcome to the official website
        of ThePokeRaf! My channel is mainly based around my childhood favourite game, Pokemon!
        I provide a variety of original Pokemon based content, alongside Top 5/10s,
        Theories, Speculation and Playthroughs, including the latest Pokemon News
        all in HIGH QUALITY!
      </p>
      <div class="center">
        <a class="btn" href="http://www.youtube.com/ThePokeRaf">Go to my channel!</a>
      </div>
    </div>

    <!--Latest Video-->
    <div class="secondary col">
      <h2>View My Latest Video!</h2>
      <iframe width="300" height="200" src="http://www.youtube.com/embed?max-results=1&controls=0&showinfo=0&rel=0&listType=user_uploads&list=ThePokeRaf" frameborder="0" allowfullscreen></iframe>
    </div>

    <!--Contact-->
    <h2>Let's Get In Touch.</h2>
    <?php
      if(isset($error_message)) {
        echo "<h3 class='phperror'>".$error_message."</h3>";
      }
     ?>
    <div class="secondary-form col">
      <p class="form-desc-center">Do you have any suggestions to improve the channel? Perhaps you
        would like to collaborate with me? I read all messages, so please do not
        hesitate to contact!</p>
    </div>
    <div class="primary-form col">
      <form action="index.php" method="post" id="contactform" name="contactform">
        <label for="name">Name</label>
        <input type="text" id="name" name="user_name" placeholder="E.g. John Smith" required>
        <span id="errorname" class="error">Name is required</span>
        <label for="email">Email</label>
        <input type="email" id="email" name="user_email" placeholder="E.g. johnsmith@hotmail.com" required>
        <span id="erroremail" class="error">Email is required</span>
        <label for="message">Message</label>
        <textarea id="message" name="user_message" placeholder="Hi! I wanted to suggest..." required></textarea>
        <span id="errormessage" class="error">Message is required</span>
        <button type="submit" value="submit" onclick="return validateForm();">Submit</button>
      </form>
    </div>

  </div>

  <?php
    include("inc/footer.php");
  ?>

  <!--jQuery Library-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <!--JavaScript Functions-->
  <!-- <script src="functions.js"></script> -->


</body>
</html>
