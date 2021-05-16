
<!DOCTYPE html>
<html>

<head>
<link rel='stylesheet' type='text/css' href='style.css'>
<style type="text/css">
.topline{border-top:2px solid black;
}
.botline{border-bottom:2px solid black;
}
.bottonline{border-top:2px solid black;
	border-bottom:2px solid black;
}
a:visited {text-decoration: none; color: #333333;
}

</style>

</head>

<body>
	<header>
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

	</header>
	<section>
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
			<article><center>
				<h1> <p align=center>로그인</p> </h1>
				<form method='post' action='userlogincheck.php'>
				<table align=center border=0 cellspacing=0 width=500 bordercolordark=white bordercolorlight=#999999>
					<tr>
					<td class="topline" width=150>
						<p align=center>아이디</p>
					</td>
					<td class="topline" width=200>
						<input type="text" name="id" style="height:25px">
					</td>

					<td class="buttonline" rowspan="2" align=center>
					<button type="submit" style="height:100px; width:130px">로그인</button>
					</td>
					</tr>

					<tr>
					<td class="botline" width=150>
						<p align=center>비밀번호</p>
					</td>

					<td class="botline" width=200>
						<input type="password" name="pw" style="height:25px">
					</td>		
					</tr>

					<tr>
						<td colspan=3 align=center>

					<a href="signUpForm.php" target="_self" style="text-decoration:none">회원가입 하시겠습니까?</p>
					</td>
				</tr>
			</table>
			</form>

			</center></article>
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
			</script>
			<footer>
				<div>
					<a href='team.php'>사업자정보</a> | <a href = 'https://www.law.go.kr/%ED%96%89%EC%A0%95%EA%B7%9C%EC%B9%99/%EB%94%94%EC%A7%80%ED%84%B8%EC%BD%98%ED%85%90%EC%B8%A0%20%EC%9D%B4%EC%9A%A9%20%ED%91%9C%EC%A4%80%EC%95%BD%EA%B4%80'>이용약관</a>
			</div>
			</footer>
	</body>

	</html>
					
