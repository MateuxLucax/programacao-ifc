(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('select').formSelect();
    $('select').formSelect();
    $('.carousel.carousel-slider').carousel({
      fullWidth: true,
      indicators: true
    });
    autoplay();
    function autoplay() {
      setTimeout(autoplay, 7500);
      $('.carousel').carousel('next');
    }

    $(document).ready(function() {
      $('input#input_text, textarea#textarea2').characterCounter();
    });

  });
})(jQuery);

$(document).ready(function () {
  $("a.scrollLink").click(function (event) {
      event.preventDefault();
      $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500);
  });
});