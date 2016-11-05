// (function($) {
//
//   function mobileMenu() {
//     // hide cross icon, hide menu and on click transition them in
//     $('.cross').hide();
//     $('.primary-nav').hide();
//     $('.hamburger').on('click', function(){
//       $('.primary-nav').slideToggle(100, function() {
//         $('.hamburger').hide();
//         $('main').css({
//           'margin-top' : '215px'
//         });
//         $('.cross').show();
//       });
//     });
//
//     $('.cross').on('click', function() {
//       $('.primary-nav').slideToggle(100, function() {
//         $('.cross').hide();
//         $('main').css({
//           'margin-top' : '0'
//         });
//         $('.hamburger').show();
//       });
//     });
//   }
//
//   // run javascript after other files have loaded
//   $(document).ready(function(){
//
//     if (window.outerWidth < 701) {
//       mobileMenu();
//     }
//
//   });
//
// })( jQuery );
