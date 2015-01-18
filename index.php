﻿﻿﻿﻿﻿﻿﻿<?php
header('Content-Type: text/html; charset=utf-8');
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Дон Пимпон</title>
  <link rel="stylesheet" type="text/css" href="css\normalize.css">
  <link rel="stylesheet" type="text/css" href="css\style.css">

</head>
<body>
   <header class="header">
      <a href="index.php"><img class="logo" src="logo\logo.jpg" ></a>
 <!--    <img class="prev-button" src="images\prev-button.jpg">
    <img class="next-button" src="images\next-button.jpg"> -->
   <!--   <button class="button"><img class="next-button" src="images\next-button.jpg"></button>  -->
<!--          <div id="left_arrow" style="widht:40px; height:40px; background: black;">aaaaaaaaaaaaaaaaaaa</div>  -->
<!-- <img id="left_arrow" src="images\next-button.jpg" ></img> --> 
 

 <ul id="playlist">
            <li><img id="left_arrow" src="images\prev-button.jpg" ></img>
            </li>
            <li id="video1">
             <video controls src="video\vid.mp4">
            </li>

            <li  id="video2"  >
                <video controls src="video\vid.mp4">
            </li>

            <li id="video3"   >
              <video controls src="video\vid.mp4">
            </li>

            <li id="video4" >
                <video controls src="video\vid.mp4">
            </li>   

            <li><img id="right_arrow" src="images\next-button.jpg" ></img>
            </li>

        </ul>

   <ul id="playlist2">
            <li><img id="left_arrow2" src="images\prev-button.jpg" ></img>
            </li>
            <li id="video5">
             <video controls src="video\vid2.mp4">
            </li>

            <li  id="video6"  >
                <video controls src="video\vid2.mp4">
            </li>

            <li id="video7"   >
              <video controls src="video\vid2.mp4">
            </li>

            <li id="video8" >
                <video controls src="video\vid2.mp4">
            </li>   

            <li><img id="right_arrow2" src="images\next-button.jpg" ></img>
            </li>

        </ul>
        <!-- <img id="left_arrow" src="images\prev-button.jpg" ></img> -->
       <!--  <img id="right_arrow" src="images\next-button.jpg" ></img> -->

<a href="neimar.html" class="breaking_news_link">
      <img class="neimar" src="http://img2.sportal.bg/uploads/news/2014_52/p1/00524805.jpg">
      <figcaption class="figcap1">Новият Неймар отказа на Левски</figcaption>
    
    </a>
    
  <ul class="breaking_news">
   <h2 class="h2">BREAKING NEWS</h2>
   

      <li>
      <a href="neimar.html" class="breaking_news_link1">
      <img src="http://img2.sportal.bg/uploads/news/2014_52/p1/00524805.jpg" class="img1">
      <figcaption class="figcap2">Новият Неймар отказа </figcaption>
      </a>
      </li>

      <li>
      <a href="cskapuskanacional.html" class="breaking_news_link2">
      <img src="http://img2.sportal.bg/uploads/news/2014_52/p1/00524760.jpg" class="img2">
      <figcaption class="figcap3">ЦСКА пуска национал без пари</figcaption>
      </a>
      </li>

      <li>
      <a href="kukoch.html" class="breaking_news_link3">
      <img src="http://news7.bg/pictures/i381939_w648.jpg" class="img3">
      <figcaption class="figcap4">Кукоч не бил вариант за Киев</figcaption>
      </a>
      </li>

       <li>
      <a href="vesko.html" class="breaking_news_link4">
      <img src="http://donbalon.eu/content/pics/578652.jpg" class="img4">
      <figcaption class="figcap5">Веско Минев си показа рогата</figcaption>
      </a>
      </li>  
  
    </ul>

   </header>

   <main class="main_content">

       <ul class="menu">
          <li><button class="menu_button"><a href="index.php">Начало</a></button></li>
          <li id="football"><button class="menu_button">Футбол</button></li>
          <li id="basketball"><button class="menu_button">Баскетбол</button></li>
          <li id="volleyball"><button class="menu_button">Волейбол</button></li>
          <li id="lifestyle"><button class="menu_button">Lifestyle</button></li>
          </ul>
    <section class="top_news">
     <h1>Топ новини</h1> 
    <ul class="topnews" id="topnews">

    <!-- <li>
     <a href="#">
     <figure>
    <img src="http://donbalon.eu/content/pics/578887.jpg">
    <figcaption>Левски уреди лагер "за бедняци" в Турция</figcaption>
    </figure>
     </a>
     </li>

    <li>
    <a href="#">
     <figure>
    <img src="http://donbalon.eu/content/pics/578883.jpg">
    <figcaption>Томов бесен, че го преметнали "в негов стил"</figcaption>
    </figure>
     </a>
     </li>
     
     <li>
     <a href="#">
     <figure>
    <img src="http://donbalon.eu/content/pics/564090.jpg">
    <figcaption>Калоян Иванов на висота при победа на Андора</figcaption>
    </figure>
     </a>
     </li>

    <li>
    <a href="#">
     <figure>
    <img src="http://donbalon.eu/content/pics/578859.jpg">
    <figcaption>Лукойл отвя Рилецо</figcaption>
    </figure>
     </a>
     </li>

    <li>
    <a href="#">
     <figure>
    <img src="http://donbalon.eu/content/pics/578701.jpg">
    <figcaption>Тренто удари Монца, Казийски и Гоцев блестят</figcaption>
    </figure>
     </a>
     </li>

    <li>
    <a href="#">
     <figure>
    <img src="http://donbalon.eu/content/pics/566980.jpg">
    <figcaption>Николай Пенчев вдъхнови Ресовия за голяма победа</figcaption>
    </figure>
     </a>
     </li> -->
</ul>
    </section>
    <section class="all_news">
    
    <nav>
   
      <!-- <ul class="menu_list"> -->
  
          <ul class="football_news">
          <h1><em>Футболни акценти</em></h1>
          <li><img src="http://donbalon.eu/content/pics/578666.jpg"><a href="#"><h3 class="news_h3">Илко Пиргов поема към Стара Загора</h3></a></li>
          <li><img src="http://donbalon.eu/content/pics/578644.jpg"><a href="#"><h3 class="news_h3">ЦСКА реже китайци за Жоаким</h3> </a> </li>        
          <li><img src="http://donbalon.eu/content/pics/578670.jpg"> <a href="#"><h3 class="news_h3">Домусчиев: След загуба не мога да спя от яд</h3> </a> </li>
          <li><img src="http://donbalon.eu/content/pics/578668.jpg"><a href="#"><h3 class="news_h3">В Разград планират  трансфери</h3> </a></li>
          
          </ul>

          <ul class="basketball_news">
        <h1><em>Баскетболни акценти</em></h1>
          <li><img src="http://donbalon.eu/content/pics/564089.jpg"><a href="#"><h3 class="news_h3">Калоян Иванов на висота при победа</h3></a></li>
          <li><img src="http://donbalon.eu/content/pics/569399.jpg"><a href="#"><h3 class="news_h3">Тити Папазов: Борим се много, но това не е достатъчно</h3> </a> </li>        
          <li><img src="http://donbalon.eu/content/pics/578777.jpg"> <a href="#"><h3 class="news_h3">Спърс пришпори Рокетс</h3> </a> </li>
          <li><img src="http://donbalon.eu/content/pics/578385.jpg"><a href="#"><h3 class="news_h3">Кадетите финишираха втори</h3> </a></li>
          </ul>          
          
           <ul class="volleyball_news">
          <h1><em>Волейболни акценти</em></h1>
          <li><img src="http://donbalon.eu/content/pics/578791.jpg"><a href="#"><h3 class="news_h3">Ябланица - перлата на Предбалкана </h3></a></li>
          <li><img src="http://donbalon.eu/content/pics/578701.jpg"><a href="#"><h3 class="news_h3">Тренто удари Монца, Казийски и Гоцев блестят</h3> </a> </li>        
          <li><img src="http://donbalon.eu/content/pics/578699.jpg"> <a href="#"><h3 class="news_h3">Силен Христо Златанов при победа на Копра</h3> </a> </li>
          <li><img src="http://donbalon.eu/content/pics/578224.jpg"><a href="#"><h3 class="news_h3">Владо Николов блести при разгром на Лион</h3> </a></li>
          </ul>

           <ul class="lifestyle_news">
          <h1><em>Lifestyle акценти</em></h1>
          <li><img src="http://sportal.bg/uploads/tinymce/pp8/Lubo_Ganev_o_Bali_2012_trud.jpg"><a href="#"><h3 class="news_h3">Любо Ганев язди слонове като немец</h3></a></li>
          <li><img src="http://img3.sportal.bg/uploads/news/2015_03/images/00527476.jpg"><a href="#"><h3 class="news_h3">Надал като Тоти - направи си селфи на корта</h3> </a> </li>        
          <li><img src="http://img3.sportal.bg/uploads/news/2015_03/images/00527398.jpg"> <a href="#"><h3 class="news_h3">Прекрасният живот на Роман Абрамович</h3> </a> </li>
          <li><img src="http://img3.sportal.bg/uploads/news/2015_03/images/00526890.jpg"><a href="#"><h3 class="news_h3">Гол и потен! Гришо задържа!</h3> </a></li>
          </ul>

            <ul class="exclusive_comments">
          <h1><em>Exclusive comments</em></h1>
          <li><img src="http://donbalon.eu/content/pics/580932.jpg"><a href="#"><h3 class="news_h3">Абсолютни диктатори по света</h3></a></li>
          <li><img src="http://donbalon.eu/content/pics/507818.jpg"><a href="#"><h3 class="news_h3">Кривогледа ли е Темида?Хъхъ</h3> </a> </li>        
          <li><img src="http://donbalon.eu/content/pics/580656.jpg"> <a href="#"><h3 class="news_h3">Синя надежда от "Надежда"</h3> </a> </li>
          <li><img src="http://donbalon.eu/content/pics/580894.jpg"><a href="#"><h3 class="news_h3">"Златната топка" е една кофти шега</h3> </a></li>
          </ul>

          
         
        <!-- </ul>
    </nav>
    </section>


<!-- <footer class="index_footer">
  <p>OT Don Pimponovcite (мже) </p>

</footer> -->
   </main>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/transform.js"></script>    
<script type="text/javascript">
$(document).ready(function() {
  var left = true;
  $('#playlist2').hide();
  $('#left_arrow,#right_arrow,#left_arrow2,#right_arrow2').on('click', function(){
    $('#playlist2').show();
      if (left) {
      $('#video1').hide();
      $('#video2').hide();
      $('#video3').hide();
      $('#video4').hide();
      $('#right_arrow,#left_arrow').hide();
      $('#video5').show();
      $('#video6').show();
      $('#video7').show();
      $('#video8').show();
      $('#right_arrow2,#left_arrow2').show();
      left = false;
    } else {
      $('#video5').hide();
      $('#video6').hide();
      $('#video7').hide();
      $('#video8').hide();
      $('#right_arrow2,#left_arrow2').hide();
      $('#video1').show();
      $('#video2').show();
      $('#video3').show();
      $('#video4').show();
      $('#right_arrow,#left_arrow').show();
      left = true;
    };





    // setInterval(function(){ 
    //   if (left) {
    //   $('#video2').fadeIn(166);
    //   $('#video1').animate({left: "+=5000"}, 500);
    //   $('#video3').fadeIn(333);
    //   $('#video4').fadeIn(500);
    //   left = false;
    // } else {
    //   $('#video2').fadeOut(500);
    //   $('#video1').animate({left: "-=1000"}, 500);
    //   $('#video3').fadeOut(333);
    //   $('#video4').fadeOut(166);
    //   left = true;
    // };
    //  }, 1000);
    

  });
});
</script>
<script type="text/javascript"> 
var News = 
  function News(img, title, link) {
    this._img = img;
    this._title = title;
    this._link = link;
    }
  News.prototype.listingNews = function (arrayNews) {
  for(var number in arrayNews) {
    var s = '<li>' + '<a href='+ arrayNews[number]._link +'>'+ '<figure>' + '<img src=' + arrayNews[number]._img + '>' + '<figcaption>' + arrayNews[number]._title + '</figcaption>' + '</figure>' + '</li>';
    var li = document.createElement('li');
    li.innerHTML = s;
    document.getElementById("topnews").appendChild(li);
  }

};
var topNews =  new News();
topNews.listingNews([new News("http://donbalon.eu/content/pics/578887.jpg", "Левски уреди лагер 'за бедняци' в Турция", "#"), new News("http://donbalon.eu/content/pics/578883.jpg", "Томов бесен, че го преметнали 'в негов стил'", "#"), new News("http://donbalon.eu/content/pics/564090.jpg", "Калоян Иванов на висота при победа на Андора", "#"), new News("http://donbalon.eu/content/pics/578859.jpg", "Лукойл отвя Рилецо", "#"), new News("http://donbalon.eu/content/pics/578701.jpg", "Тренто удари Монца", "#"), new News("http://donbalon.eu/content/pics/566980.jpg", "Пенчев вдъхнови Ресовия за голяма победа", "#")]);
</script>
<script src="js/filter.js"></script>
</body>
</html>


