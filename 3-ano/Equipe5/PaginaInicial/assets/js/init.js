(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('select').formSelect();
    $('.scrollspy').scrollSpy({
      scrollOffset: 0
    });

  });
})(jQuery);