(function($) {
	
	
	
$.fn.menumaker = function(options) {  
 var cssmenu = $(this), settings = $.extend({
   format: "dropdown",
   sticky: false
 }, options);
 return this.each(function() {
   $(this).find(".button").click(function(){
     $(this).toggleClass('menu-opened');
     var mainmenu = $(this).next('ul');
     if (mainmenu.hasClass('open')) { 
       mainmenu.slideToggle().removeClass('open');
     }
     else {
       mainmenu.slideToggle().addClass('open');
       if (settings.format === "dropdown") {
         mainmenu.find('ul').show();
       }
     }
   });
   cssmenu.find('li ul').parent().addClass('has-sub');
multiTg = function() {
     cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
     cssmenu.find('.submenu-button').click(function() {
       $(this).toggleClass('submenu-opened');
       if ($(this).siblings('ul').hasClass('open')) {
         $(this).siblings('ul').removeClass('open').slideToggle();
       }
       else {
         $(this).siblings('ul').addClass('open').slideToggle();
       }
     });
   };
   if (settings.format === 'multitoggle') multiTg();
   else cssmenu.addClass('dropdown');
   if (settings.sticky === true) cssmenu.css('position', 'fixed');
resizeFix = function() {
  var mediasize = 700;
     if ($( window ).width() > mediasize) {
       cssmenu.find('ul').show();
     }
     if ($(window).width() <= mediasize) {
       cssmenu.find('ul').hide().removeClass('open');
     }
   };
   resizeFix();
   return $(window).resize(function(){
   	
   	if ($(window).width() > settings.breakpoint) {
           cssmenu.find('ul').show();
           cssmenu.removeClass('small-screen');
           if (settings.format === 'select') {
             cssmenu.find('select').hide();
           }
           else {
             cssmenu.find("#menu-button").removeClass("menu-opened");
           }
         }

         if ($(window).width() <= settings.breakpoint && !cssmenu.hasClass("small-screen")) {
           cssmenu.find('ul').hide().removeClass('open');
           cssmenu.addClass('small-screen');
           if (settings.format === 'select') {
             cssmenu.find('select').show();
           }
         }
   	
   	
   });
 });
  };
})(jQuery);






(function($){
	$(document).ready(function(){
		
	$("#cssmenu").menumaker({
	   format: "multitoggle"
	});
	});
	})(jQuery);