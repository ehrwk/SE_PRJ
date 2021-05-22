<?php
    session_start();

    $num = $_POST['rmRow'];

    $db_conn = mysqli_connect('localhost', 'bitnami', '1234', 'Destination') or die('fail');

    $sql = "DELETE FROM desInfo WHERE NUM = '$num';";
    $query_res = mysqli_query($db_conn, $sql);
    if($query_res){
        echo "<script>
            alert('정상적으로 삭제되었습니다.');
            location.href='myPageDest.php';
            exit();
        </script>";
    }
    else{
        echo "<script>
            alert('배송지 정보 삭제에 실패했습니다.');
            location.href='myPageDest.php';
            exit();
        </script>";
    }
?>