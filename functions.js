function toggleNav(icon) {
  icon.classList.toggle("change");
}

jQuery(document).ready(function() {
    jQuery('.bars').click(function(e) {
        if ($(window).width() <= 768) {
            jQuery('.main-nav').toggle();
        }
    });
});
