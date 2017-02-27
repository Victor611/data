$(document).ready(function() {

     /* ======= Bootstrap-3 hover dropdown ======= */   
     $('[data-hover="dropdown"]').dropdownHover();
     
     /* ======= Fixed Header Menu ======= */    
     $(window).on('scroll load', function() {
          
          if ($(window).scrollTop() > 0) {
              $('#header').addClass('scrolled');
          }
          else {
               $('#header').removeClass('scrolled'); 
          }
     });
     /* ======= End Fixed Header Menu ======= */ 
     
     /* ======== Placeholder ========== */
     $('input, textarea').placeholder();    
     
     /* ======== FitVids ========== */
     $(".video-container").fitVids();
     
     /* ======= Style Switcher ======= */    
     $('#config-trigger').on('click', function(e) {
         var $panel = $('#config-panel');
         var panelVisible = $('#config-panel').is(':visible');
         if (panelVisible) {
             $panel.hide();          
         } else {
             $panel.show();
         }
         e.preventDefault();
     });

     $('#config-close').on('click', function(e) {
         e.preventDefault();
         $('#config-panel').hide();
     });
     /* ======= End Style Switcher ======= */    

     /* ======== Index Carousel ======= */   
     $('#carousel_control').click(function(){
          var text = $('#carousel_control i').attr("class");
          if(text == 'fa fa-pause'){
               $('#carousel-example-generic').carousel("pause");
               $('#carousel_control i').attr('class', 'fa fa-play');
          } else if (text == 'fa fa-play'){
               $('#carousel-example-generic').carousel("cycle");
               $('#carousel_control i').attr('class', 'fa fa-pause');
          }
     });
     /* ======== End Index Carousel ======= */

});