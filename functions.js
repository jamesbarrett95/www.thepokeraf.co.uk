// Cached Variables
var email = $('#email').val();

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

// Valiation for Contact Form
function checkLength() {
  if($(this).val().length < 1) {
    $(this).next().show();
  } else {
    $(this).next().hide();
  }
}

function isValidEmail(emailAddress) {
  var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
  return pattern.test(emailAddress);
}

// Call length check function calls
$('#name').focus(checkLength);
$('#name').keyup(checkLength);
$('#message').focus(checkLength);
$('#message').keyup(checkLength);

// Check if email is valid call
$('#email').keyup(function(){
  if(isValidEmail(email)) {
    $('#testy').hide();
  } else {
    $('#testy').show();
    alert("sdfdsf");
  }
});
