<?php
session_start();

	class layout{
		public $link; //css 링크 태그
		public $style;
		public $content; //메인 content
		public $board; //게시판
		public $title="book store"; //웹페이지 제목

		//레이아웃 출력
		public function LayoutMain(){
			echo "<!DOCTYPE html>\n<html lang = 'ko'>";

			echo "<head>\n<meta charset = 'utf-8'/>";
			echo "<title>".$this->title."</title>"; //title
			echo $this->LayoutStyle(); //스타일 추가
			echo "</head>";

			echo "<body>\n<div id = 'container'>";
			echo	$this->LayoutHeader(); //header 레이아웃
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
<<<<<<< HEAD
				<div id='logo'><center>
<<<<<<< HEAD
					<h1><a href='mainPage.php'>header - 로고, 검색창, 회원가입 추가할 예정</a></h1>
				    <h6><a href='login.php'>로그인</a></h6>
				</center></div>

=======
					<h1><a href='mainPage.php'>header - 로고, 검색창, 로그인, 회원가입 추가할 예정</a></h1>
				</center></div>
>>>>>>> 30db3fc877410926939b15500df38ac609ef5ebc
=======
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
					</div>

				    <h5 style='margin-top: 0;'><a href='login.php'>로그인</a>|<a href='signUpForm.php'>회원가입</a></h5>
				</center>

>>>>>>> upstream/master
				</header>";
		}

		//content 레이아웃
		public function LayoutContent(){
			echo "<section>
					<ul id = 'menu'>
						<li><a href='javascript: DisplayMenu(1);'>국내도서</a></li>
							<ul id = 'subMenu1' style = 'display: none;'>
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
						<li><a href='javascript: DisplayMenu(2);'>국외도서</a></li>
							<ul id = 'subMenu2' style = 'display: none;'>
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
			<article><center>".$this->content."</center></article>
			</section>

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
			</script>";
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