// Navigation appear on scroll
(function($) {
  $(window).scroll(function(){
    if ($(this).scrollTop() > 400) {
      $('nav').fadeIn(500);
    } else {
      $('nav').fadeOut(500);
    }
  });
})(jQuery);

$(document).on('click', 'a', function(){
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top - 100
    }, 500);
});

// Fade In Scroll jQuery Plugin
$('.col').fadeInScroll();

/*
  CONTACT FORM VALIDATION
*/

$(".formValidation").on("submit", function(e){

  var errorMessage  = $(".errorMessage");
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
  errorMessage.css("display", "flex");
}); //Form .submit
