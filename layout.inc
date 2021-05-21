<?php
	class layout{
		public $link; //css 링크 태그
		public $style;
		public $content; //메인 content
		public $board; //게시판
		public $title="book store"; //웹페이지 제목

		//레이아웃 출력
		public function LayoutMain(){
			session_start();
			echo "<!DOCTYPE html>\n<html lang = 'ko'>";

			echo "<head>\n<meta charset = 'utf-8'/>";
			echo "<title>".$this->title."</title>"; //title
			echo $this->LayoutStyle(); //스타일 추가
			echo "</head>";

			echo "<body>\n<div id = 'container'>";
			echo	$this->LayoutHeader(); //header 레이아웃
			echo 	$this->LayoutMenu(); //menu 레이아웃
			echo	$this->LayoutContent(); //content 레이아웃
			echo	$this->LayoutFooter(); //footer 레이아웃
			echo "</div></body>\n</html>";
		}

		//스타일 추가
		public function LayoutStyle(){
			echo "<link rel='stylesheet' type='text/css' href='style.css'>";
			echo "<style>".$this->style."</style>";
		}

		//header 레이아웃 
		public function LayoutHeader(){
			echo "<header>
				<center>
					<h1 style='display: inline-block;'>
					<a href='mainPage.php'><img src='./img/sampleLogo.png' height='100' width='100'></a>
					</h1>
					<div style='display: inline-block;'>
					<form>
					<table id = 'search_box'>
					<th>
						<select id = 'category'>
						<option>통합검색</option>
						<option>국내도서</option>
						<option>국외도서</option>
						<option>중고도서</option>
						</select>
					</th>
					<th>
						<input id ='search_css' type='text' name='book_name'>
					</th>
					<th>
						<input type='submit' value='검색'>
					</th>
					</table>
					</form>
					</div>";
			if(!$_SESSION['id'] && !$_SESSION['name']){
				echo "<h5 style='margin-top: 0;'><a href='login.php'>로그인 </a>|<a href='signUpForm.php'> 회원가입</a></h5>";
			}
			else{
				echo "<h5 style='margin-top: 0;'><a href='myPage.php'>".$_SESSION['name']."</a>님, 환영합니다. |<a href='#'> 장바구니 </a>|<a href='logout.php'> 로그아웃</a></h5>";
			}
				echo "</center>
				</header>";
		}

		//menu 레이아웃
		public function LayoutMenu(){
			echo "<ul id = 'menu'>
						<li onmouseover = 'DisplayMenu(1);' onmouseout = 'DisapearMenu(1);'><a href='#'>국내도서</a></li>
							<ul id = 'subMenu1' style = 'display: none;' onmouseover = 'DisplayMenu(1);' onmouseout = 'DisapearMenu(1);'>
								<li><a href='#'>총류</a></li>
								<li><a href='#'>철학</a></li>
								<li><a href='#'>종교</a></li>
								<li><a href='#'>사회과학</a></li>
								<li><a href='#'>자연과학</a></li>
								<li><a href='#'>기술과학</a></li>
								<li><a href='#'>예술</a></li>
								<li><a href='#'>언어</a></li>
								<li><a href='#'>문학</a></li>
								<li><a href='#'>역사</a></li>
							</ul>
						<li onmouseover = 'DisplayMenu(2);' onmouseout = 'DisapearMenu(2);'><a href='#'>국외도서</a></li>
							<ul id = 'subMenu2' style = 'display: none;' onmouseover = 'DisplayMenu(2);' onmouseout = 'DisapearMenu(2);'>
								<li><a href='#'>총류</a></li>
								<li><a href='#'>철학</a></li>
								<li><a href='#'>종교</a></li>
								<li><a href='#'>사회과학</a></li>
								<li><a href='#'>자연과학</a></li>
								<li><a href='#'>기술과학</a></li>
								<li><a href='#'>예술</a></li>
								<li><a href='#'>언어</a></li>
								<li><a href='#'>문학</a></li>
								<li><a href='#'>역사</a></li>
							</ul>
						<li><a href='#'>중고도서</a></li>
						<li><a href='#'>공지/이벤트</a></li>
					</ul>
				<script>
				function DisplayMenu(n){
					if(n == 1){
						var m = document.getElementById('subMenu1');
					}
					else if(n == 2){
						var m = document.getElementById('subMenu2');
					}
            		if(m.style.display == 'none'){
              			m.style.display = 'block';
         			}
         			else{
                		m.style.display = 'none';
           			}
				}

				function DisapearMenu(n){
					if(n == 1){
						var m = document.getElementById('subMenu1');
					}
					else if(n == 2){
						var m = document.getElementById('subMenu2');
					}
            		if(m.style.display == 'block'){
              			m.style.display = 'none';
         			}
         			else{
                		m.style.display = 'block';
           			}
				}
				</script>";
		}
		//content 레이아웃
		public function LayoutContent(){
			echo "<article><center>".$this->content."</center></article>";
		}

		//footer 레이아웃
		public function LayoutFooter(){
			echo"<footer>
				<div>
					<a href='team.php'>사업자정보</a> | <a href = 'https://www.law.go.kr/%ED%96%89%EC%A0%95%EA%B7%9C%EC%B9%99/%EB%94%94%EC%A7%80%ED%84%B8%EC%BD%98%ED%85%90%EC%B8%A0%20%EC%9D%B4%EC%9A%A9%20%ED%91%9C%EC%A4%80%EC%95%BD%EA%B4%80'>이용약관</a>
				</div>
				</footer>";
		}
	}
?>