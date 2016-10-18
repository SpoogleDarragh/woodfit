jQuery(document).ready(function($){

	jQuery(window).scroll(function() {

    if ($(this).scrollTop()>0)
     {
        $('#top-header').hide();
        console.log('Faded out');
        $('#main-header').addClass("scrolled-menu");
        console.log("Added new class");
     }
    else
     {
      $('#top-header').fadeIn("slow");
      console.log('Faded in');
      $('#main-header').removeClass("scrolled-menu");
      console.log("removed class");
     
     }
 });

});

