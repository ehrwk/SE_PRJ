<?php
	include_once "./layout.inc";

	$base = new layout;

	$base->link='./style.css';

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

	';
//본문

	$base->LayoutMain(); //레이아웃 출력
?>