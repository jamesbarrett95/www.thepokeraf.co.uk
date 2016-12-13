/*
  NAVIGATION
*/

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

/*
  CONTACT FORM VALIDATION
*/

$(".formValidation").on("submit", function(e){

  var errorMessage  = $(".errorMessage");
  console.log(errorMessage);
  var hasError = false;

  $(".inputValidation").each(function(){
    var $this = $(this);

    if($this.val() == ""){
      hasError = true;
      $this.addClass("inputError");
      errorMessage.html("<p>Error: Please correct fields with a red border</p>");
      e.preventDefault();
    }if($this.val() != ""){
      $this.removeClass("inputError");
    }else{
      return true;
    }
  }); //Input
  errorMessage.slideDown(700);
}); //Form .submit
