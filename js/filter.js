$(document).ready(function() {
   
// $('.exclusive_comments').each(function() {(
//       if($(this).hasClass('basketball_news')) {
//         $(this).show();
//       } else {
//         $(this).hide();
//       }
    

//   })

$('#basketball').click(function(event){
  event.preventDefault();
  $('.football_news,.volleyball_news,.lifestyle_news,.exclusive_comments,.basketball_news').show();
    $('.football_news,.volleyball_news,.lifestyle_news,.exclusive_comments').hide();
    $('.basketball_news').css({'position':'relative', 'margin': 'auto', 'display':'table'});
    // $('.basketball').fadeIn();
});
    $('#volleyball').click(function(event){
      event.preventDefault();
  $('.football_news,.volleyball_news,.lifestyle_news,.exclusive_comments,.basketball').show();
    $('.basketball_news,.football_news,.lifestyle_news,.exclusive_comments').hide();
    $('.volleyball_news').css({'position':'relative', 'margin': 'auto', 'display':'table'});
});
    $('#lifestyle').click(function(event){
      event.preventDefault();
  $('.football_news,.volleyball_news,.lifestyle_news,.exclusive_comments,.basketball').show();
    $('.basketball_news,.volleyball_news,.football_news,.exclusive_comments').hide();
    $('.lifestyle_news').css({'position':'relative', 'margin': 'auto', 'display':'table'});
});

    $('#football').click(function(event){
    event.preventDefault();
  $('.football_news,.volleyball_news,.lifestyle_news,.exclusive_comments,.basketball').show();
    $('.basketball_news,.volleyball_news,.lifestyle_news,.exclusive_comments').hide();
    $('.football_news').css({'position':'relative', 'margin': 'auto', 'display':'table'});
})});

// $('.exclusive_comments').each(function() {(
//       if($(this).hasClass('basketball_news')) {
//         $(this).show();
//       } else {
//         $(this).hide();
//       }
    

//   })