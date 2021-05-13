<?php
	$name = $_POST['name'];
	$id = $_POST['id'];
	$pw = $_POST['pw'];
	$chkPw = $_POST['chkPw'];
	$email = $_POST['email'];

	$db_conn = mysqli_connect('localhost', 'bitnami', '1234', 'customerInfo') or die('fail'); //db 연결

    $sql = "SELECT id FROM member WHERE id = '$id';"; //기존 db의 id 정보와 비교
    $sql_res = mysqli_query($db_conn, $sql);
    while ($db_row = mysqli_fetch_array($sql_res)){
      $id_dup = $db_row['id'];
    }
    if($id == $id_dup){
    	$chkID_dup = 1;
    }

    $sql = "SELECT email FROM member WHERE email = '$email';"; //기존 db의 이메일 정보와 비교
    $sql_res = mysqli_query($db_conn, $sql);
    while ($db_row = mysqli_fetch_array($sql_res)){
      $email_dup = $db_row['email'];
    }
    if($email == $email_dup){
    	$chkEmail_dup = 1;
    }

    $num = preg_match('/[0-9]/u', $pw); //입력한 비밀번호와 비밀번호 조건 비교
    $eng = preg_match('/[a-z]/u', $pw);

    if(!$name || !$id || !$pw || !$chkPw || !$email){ //빈칸 확인
		echo "<script>
			alert('입력되지 않은 정보가 존재합니다.');
			history.back();
			exit();
		</script>";
	}
    else if ($chkID_dup == 1) { //id 중복 확인
		echo "<script>
			alert('이미 존재하는 아이디입니다.');
			history.back();
			exit();
		</script>";
  	}
    else if((strlen($pw) < 8 || strlen($pw) > 30)||(preg_match("/\s/u", $pw) == true)||($num == 0 || $eng == 0)){ //비밀번호 조건 확인
    	echo "<script>
			alert('비밀번호가 조건에 맞지 않거나 공백이 존재합니다.');
			history.back();
			exit();
		</script>";
    }
	else if($pw != $chkPw){	//확인 비밀번호 일치 여부
		echo "<script>
			alert('비밀번호가 맞지 않습니다.');
			history.back();
			exit();
		</script>";
	}
	else if (preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email) == false){ //이메일 형식 확인
		echo "<script>
			alert('올바른 형식의 이메일이 아닙니다.');
			history.back();
			exit();
		</script>";
	}
	else if ($chkEmail_dup == 1) { //이메일 중복 확인
		echo "<script>
			alert('이미 존재하는 이메일입니다.');
			history.back();
			exit();
		</script>";
  	}
	else {
		$encryptedPw = password_hash($pw, PASSWORD_DEFAULT);
     	$sqlRegUser = "INSERT INTO member(name, id, pw, email, permit) VALUES('$name','$id','$encryptedPw','$email', 1);";
       	$sql_res = mysqli_query($db_conn, $sqlRegUser);
   		
     	if($sql_res == true){
			echo"<script>
				alert('정상적으로 가입되었습니다. 로그인 화면으로 이동합니다.');
				location.replace('login.php');
			</script>";
			mysqli_close($db_conn);
		}
		else{
			echo"<script>
				alert('회원가입에 실패했습니다.');
				history.back();
				exit();
			</script>";
		}
	}
?>