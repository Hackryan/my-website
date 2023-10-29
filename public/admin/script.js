$(document).ready(function(){

$(function() {
  $('.toggle').on('click', function() {
    $('.sidebar').toggleClass('is-collapsed');
    $('.content').toggleClass('is-full-width');
    $('.container').toggleClass('overlay');
  });
});

$('.fa-search, .cross').click(function(){
$('.search input, .cross').toggleClass('hide-input');
});	

$('.modal-toggle').on('click', function(e) {
  e.preventDefault();
  $('.modal').toggleClass('is-visible');
});

});