
	$(document).ready(function() {
   
    $('.breaking_news a').hover(function(){
    var path = $(this).find('img').attr("src");
    $('.neimar').attr("src",path); 
    var figcap = $(this).find('figcaption').html();
    $('.figcap1').html(figcap);
    }
)});

	
