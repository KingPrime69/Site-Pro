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

  // $('.changeFont button').on('click', function(){
  //   $(".color-text").css({
  //     "color": "blue",
  //   });
  // })
});
