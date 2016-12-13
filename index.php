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
    <div class="inner" id="about">
      <div class="col">
        <h3>Theories &amp; Speculation</h3>
        <img src="img/pikachu.png" alt="Pikachu">
        <p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>

      <div class="col">
        <h3>Latest Pokemon News</h3>
        <img src="img/charizard.png" alt="Charizard">
        <p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>

      <div class="col">
        <h3>Playthroughs</h3>
        <img id="mewtwo" src="img/mewtwo.png" alt="Mewtwo">
        <p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>
  </div>

    <!--Latest Video-->
    <div class="col">
      <h2>Latest Video!</h2>
      <iframe src="http://www.youtube.com/embed?max-results=1&controls=1&showinfo=0&rel=0&listType=user_uploads&list=ThePokeRaf" frameborder="0" allowfullscreen></iframe>
    </div>

    <!--Contact-->
    <div class="form-container">
        <h2>Let's Get In Touch.</h2>
        <?php
          if(isset($error_message)) {
            echo "<h3 class='phperror'>".$error_message."</h3>";
          }
         ?>
        <p>
          Do you have any suggestions to improve the channel? Perhaps you
          would like to collaborate with me? I read all messages, so please do not
          hesitate to contact!
        </p>


      <div>

        <form action="index.php" method="post" class="formValidation">

          <div class="field">
            <label for="name">Name</label>
            <input type="text" id="name" name="user_name" placeholder="E.g. John Smith" class="inputValidation">
          </div>

          <div class="field">
            <label for="email">Email</label>
            <input type="email" id="email" name="user_email" placeholder="E.g. johnsmith@hotmail.com" class="inputValidation">
          </div>

          <div class="field">
            <label for="message">Message</label>
            <textarea id="message" name="user_message" placeholder="Hi! I wanted to suggest..." class="inputValidation"></textarea>
          </div>


          <button class="button button-3d button-action button-pill" type="submit" id="submit" value="submit">Submit</button>

        </form>
        <div class="errorMessage"></div>

        </div>
      </div>
    </div>
  </div>

  <?php
    include("inc/footer.php");
  ?>

  <!--jQuery Library-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <!--Columns Appear on Scroll Plugin-->
  <script src="js/fadeInScroll.jQuery.js"></script>
  <!--JavaScript Validation Library-->
  <script src="js/validate.js"></script>
  <!--JavaScript Functions-->
  <script src="js/functions.js"></script>


</body>
</html>
