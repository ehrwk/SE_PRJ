<?php
	include_once "./layout.inc";

	$base = new layout;

	$base->link='./style.css';
<<<<<<< HEAD

	$base->content ='
	 <link rel="stylesheet" href="./jquery.bxslider.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	 <script src="./jquery.bxslider.min.js"></script>

  <script>
    $(document).ready(function(){
      $(".slider").bxSlider({
      	auto:true, 
      	captions:true,
      	adaptiveHeight:true, 
      	touchEnabled:false
      });
    });
  </script>

  <div class="slider">
    <div><a href="event.php?idx=1"><img src="http://image.kyobobook.co.kr/ink/images/prom/2021/book/210413_wisdom/bnD_w01_f5cf99.jpg" title="첫번째 이벤트 페이지 설명"></a></div>
    <div><a href="event.php?idx=2"><img src="http://image.kyobobook.co.kr/ink/images/prom/2021/book/210408_spring/bnH_w01_fff294.jpg" title="두번째페이지 설명"></a></div>
    <div><a href="event.php?idx=3"><img src="http://image.kyobobook.co.kr/ink/images/prom/2021/banner/210401/bnO_w01_cccccc.jpg" title="세번째페이지 설명"></a></div>
  </div>

	'
	;
=======
<<<<<<< HEAD

	$base->content ='
	 <link rel="stylesheet" href="./jquery.bxslider.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	 <script src="./jquery.bxslider.min.js"></script>

  <script>
    $(document).ready(function(){
      $(".slider").bxSlider({
      	auto:true, 
      	captions:true,
      	adaptiveHeight:true, 
      	touchEnabled:false
      });
    });
  </script>

  <div class="slider">
    <div><a href="event.php?idx=1"><img src="http://image.kyobobook.co.kr/ink/images/prom/2021/book/210413_wisdom/bnD_w01_f5cf99.jpg" title="첫번째 이벤트 페이지 설명"></a></div>
    <div><a href="event.php?idx=2"><img src="http://image.kyobobook.co.kr/ink/images/prom/2021/book/210408_spring/bnH_w01_fff294.jpg" title="두번째페이지 설명"></a></div>
    <div><a href="event.php?idx=3"><img src="http://image.kyobobook.co.kr/ink/images/prom/2021/banner/210401/bnO_w01_cccccc.jpg" title="세번째페이지 설명"></a></div>
  </div>

	'
	;
=======
	$base->content = "본문 - 이벤트&공지 추가할 예정"; //본문

>>>>>>> e1a24575a817b6b5a7a84f1860a3ec9b681b6503
>>>>>>> 10ab54e2838023769c79615e8aeb006b025857bd
	$base->LayoutMain(); //레이아웃 출력
?>