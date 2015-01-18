
	$(document).ready(function() {
   
    $('.breaking_news a').hover(function(){
    var path = $(this).find('img').attr("src");
    $('.neimar').attr("src",path); 
    var figcap = $(this).find('figcaption').html();
    $('.figcap1').html(figcap);
    var link = $(this).closest('a').attr("href");
    $('.breaking_news_link').attr("href", link);
    }
)});

	
