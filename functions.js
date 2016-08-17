/****************
    NAVIGATION
*////////////////

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

// Resize event to show navigation on larger screens
$(window).resize(function(){
  if ($(window).width() > 768) {
    $('.main-nav').show();
    $('.main-nav').css('text-align','center');
  }
});

// Fade In Scroll jQuery Plugin
$('.col').fadeInScroll();

/*************************
  CONTACT FORM VALIDATION
*/////////////////////////

// Check Length of Name and Message Fields
function checkLength() {
  if($(this).val().length < 1) {
    $(this).next().show();
  } else {
    $(this).next().hide();
  }
}

// Check if email is valid
function validateEmail(email) {
   var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
   if(emailReg.test(email)) {
     $('#erroremail').hide();
   } else {
     $('#erroremail').show();
   }
}

// Calls to check if email is valid
$('#email').keyup(function(){
    validateEmail(
      $('#email').val()
    ).focus(
      validateEmail($('#email').val()
    ));
  });


// Function to check if the error messages are visible or hidden
function checkIfHidden() {
  return $("#errorname").is(':hidden') && $("#errormessage").is(':hidden') && $("#erroremail").is(':hidden');
}

// Function to check the state of the submit button
function enableSubmitEvent() {
  $('#submit').prop('disabled', !checkIfHidden());
}

// Length Check Calls
$('#name').keyup(checkLength);
$('#message').keyup(checkLength);

// Calls to check submit button state
$('#name').keyup(enableSubmitEvent);
$('#email').keyup(enableSubmitEvent);
$('#message').keyup(enableSubmitEvent);
