$('.dropdown-trigger').dropdown();
$(document).ready(function(){
  $('.modal').modal();
  $('.signin a').on('click', function() {
    $('.login').show();
    $('.signin').hide();
  })
  $('.login a').on('click', function() {
    $('.login').hide();
    $('.signin').show();
  })

});
