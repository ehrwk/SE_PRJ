<?php
	$db_host = 'localhost';
	$db_user = 'bitnami';
	$db_password = '1234';
	$db_name = 'customerInfo';

	$con = mysqli_connect($db_host, $db_user, $db_password, $db_name);

	if(mysqli_connect_error($con)){
		echo "데이터베이스 접속이 실패했습니다.";
		echo "원인: ", mysqli_connect_error();
		exit();
	}

	echo "데이터베이스 접속에 성공했습니다.";
	$sql = "INSERT INTO test_table(testN, testM) VALUES(10, 20)";
    mysquli_query($con, $sql);
    echo "성공적으로 값을 입력했습니다.";
	mysqli_close($con);
?>