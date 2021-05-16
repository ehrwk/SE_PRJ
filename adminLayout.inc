<?php
	class AdminLayout{
		public $content;
		//레이아웃 출력
		public function AdminLayoutMain(){
			echo "<!DOCTYPE html>";

			echo "<head><meta charset = 'utf-8'/>
					<title>AdminPage</title>
					<link rel='stylesheet' type='text/css' href='adminStyle.css'>
				</head>";

			echo "<body>";
			echo	$this->AdminLayoutHeader(); //header 레이아웃
			echo	$this->AdminLayoutContent(); //content 레이아웃
			echo	$this->AdminLayoutFooter(); //footer 레이아웃
			echo "</body>
				</html>";
		}

		//header 레이아웃 
		public function AdminLayoutHeader(){
			echo "<header>
					<div>
						<a href='adminMainPage.php'><img src='./img/sampleLogo.png' height='100' width='100'></a>
					</div>
				</header>";
		}

		//content 레이아웃
		public function AdminLayoutContent(){
			echo "<section>
					<ul id = 'menu'>
						<li><a href='#'>회원 관리</a></li>
						<li><a href='#'>상품 관리</a></li>
						<li><a href='#'>공지/이벤트 관리</a></li>
					</ul>
					<article><center>
						".$this->content."
					</center></article>
				</section>";
		}

		//footer 레이아웃
		public function AdminLayoutFooter(){
			echo"<footer>
					<a href='team.php'>footer - 팀원&팀명 여기다가 추가할 예정</a>
				</footer>";
		}
	}
?>