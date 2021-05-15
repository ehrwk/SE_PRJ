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

<div class="recentbook">
<div style="background-color:#bbb; border:1px solid; padding:10px;">
  <small>최신등록도서</small>
  </div>
  <div style="background-color:#dcdcdc; border:1px solid; padding:10px;">
  <a href="mainPage.php"><img src="http://image.yes24.com/momo/TopCate1753/MidCate002/175215081.jpg" alt="My Image" width="100" height="130"></a>

  <a href="login.php"><img src="http://image.yes24.com/momo/TopCate1261/MidCate008/126075397.jpg" alt="My Image" width="100" height="130"></a>

  <a href="signUpForm.php"><img src="https://file.themusical.co.kr/fileStorage/ThemusicalAdmin/Play/Image/20141208042619J186J8JKARWB6U0L.jpg" alt="My Image" width="100" height="130"></a>

  <a href="mainPage.php"><img src="https://an2-img.amz.wtchn.net/image/v1/watcha/image/upload/c_fill,h_400,q_80,w_280/v1497452820/rqcrmqnca72igjmczx5t.jpg" alt="My Image" width="100" height="130"></a>

  <a href="login.php"><img src="http://image.yes24.com/momo/TopCate93/MidCate02/9210732.jpg" alt="My Image" width="100" height="130"></a>

  <a href="signUpForm.php"><img src="http://image.yes24.com/goods/56918134/800x0" alt="My Image" width="100" height="130"></a>

  <a href="mainPage.php"><img src="https://i.pinimg.com/originals/16/0d/b1/160db178f006edcd2f811d4b7302b5e2.jpg" alt="My Image" width="100" height="130"></a>
</div>
</div>
	';
//본문

	$base->LayoutMain(); //레이아웃 출력
?>