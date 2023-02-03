
var $ = jQuery.noConflict();
// A $( document ).ready() block.
$( document ).ready(function() {

//Dropdown menu on hover show
 $('.menu-item-has-children').hover(
    function(){
        $(this).children('.dropdown-menu').slideDown('fast');
    },
    function () {
        $(this).children('.dropdown-menu').slideUp('fast');
    });

});