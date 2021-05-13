<?php
session_start();

	class layout{
		public $link = "./style.css"; //css 링크 태그
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
			echo "<link rel='stylesheet' type='text/css' href='".$this->link."'>";
			echo "<style>".$this->style."</style>";
		}

		//header 레이아웃 
		public function LayoutHeader(){
			echo "<header>
					<div><center>
					<h1>
					<a href='mainPage.php'><img src='./img/sampleLogo.png' height='100' width='100'></a>
					</h1>
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
					

				    <h5><a href='login.php'>로그인</a>|<a href='signUpForm.php'>회원가입</a></h5>
				</center></div>

				</header>";
		}

		//content 레이아웃
		public function LayoutContent(){
			echo "<section>
			<article><center>".$this->content."</center></article>
			</section>";
		}

		//footer 레이아웃
		public function LayoutFooter(){
			echo"<footer>
				<a href='team.php'>footer - 팀원&팀명 여기다가 추가할 예정</a>
				</footer>";
		}
	}
?>