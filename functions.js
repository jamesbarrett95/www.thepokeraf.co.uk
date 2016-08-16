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

function validateEmail(email) {
   var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
   return emailReg.test(email);
}

$('#email').keyup(function() {
  if(validateEmail($('#email').val())) {
    $(this).next().hide();
  } else {
    $(this).next().show();
  }
});

// Validation Check Calls
$('#name').keyup(checkLength);
$('#message').keyup(checkLength);

function enableSubmitEvent() {
  $('#submit').prop('disabled', true) //determineButtonState()
}

enableSubmitEvent();
