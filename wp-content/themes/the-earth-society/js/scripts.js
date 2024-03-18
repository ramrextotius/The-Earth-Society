jQuery(document).ready(function($) {
$('.menu-toggle').click(function(){ 
   $(this).toggleClass("is-active");
   $('ul.navbar-menu-mobile').toggle();
});
});
