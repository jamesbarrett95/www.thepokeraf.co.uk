// Triggers 3 bars to 'X' animation
function toggleNav(icon) {
  icon.classList.toggle("change");
}

// Click event to toggle navigation on mobile and tablet devices
$('.bars').click(function(e) {
    if ($(window).width() <= 768) {
        $('.main-nav').toggle();
    }
});

// Fade In Scroll jQuery Plugin
$('.col').fadeInScroll();


// Valiation for Contact Form
function validateForm() {
      var error = 0;

      // Validate the user's name
      var errorname = document.getElementById("errorname");
      var user_name = document.contactform.user_name.value;
      if (user_name === "") {
          errorname.style.visibility = "visible";
          error = 1;
      } else {
          errorname.style.visibility = "hidden";
      }

      // Validate the user's email
      var erroremail = document.getElementById("erroremail");
      var user_email = document.contactform.user_email.value;
      var atpos = user_email.indexOf("@");
      var dotpos = user_email.lastIndexOf(".");
      if (user_email === "") {
          erroremail.style.visibility = "visible";
          error = 1;
      } else if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 > user_email.length) {
          document.getElementById("erroremail").textContent="Invalid Email Address";
          erroremail.style.visibility = "visible";
          error = 1;
      } else {
          erroremail.style.visibility = "hidden";
      }

      // Validate the user's message
      var errormessage = document.getElementById("errormessage");
      var user_message = document.contactform.user_message.value;
      if (user_message === "") {
          errormessage.style.visibility = "visible";
          error = 1;
      } else {
          errormessage.style.visibility = "hidden";
      }

      // If error is equal to zero, the form will submit successfully
      return (error == 0);
  }
