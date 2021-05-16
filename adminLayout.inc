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
					<div style='display: inline-block; margin-right: 20px; vertical-align: top;'>
						<a href='adminMainPage.php'><img src='./img/sampleLogo.png' height='100' width='100'></a>
					</div>
					<h1 style='display: inline-block; font-size: 30pt;'>관리자화면</h1>
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
					<div>
					<a href='team.php'>사업자정보</a> | <a href = 'https://www.law.go.kr/%ED%96%89%EC%A0%95%EA%B7%9C%EC%B9%99/%EB%94%94%EC%A7%80%ED%84%B8%EC%BD%98%ED%85%90%EC%B8%A0%20%EC%9D%B4%EC%9A%A9%20%ED%91%9C%EC%A4%80%EC%95%BD%EA%B4%80'>이용약관</a>
					</div>
				</footer>";
		}
	}
?>