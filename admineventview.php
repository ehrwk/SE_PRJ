<?php
    error_reporting(E_ALL);
    ini_set( "display_errors", 1 );
	$connect =mysqli_connect('localhost','bitnami','1234','event') or die('connection fail');
    $number=$_GET['number'];
    $sql = "SELECT title,content,date,finalDate,hit FROM eventdb WHERE number=$number";

    $result = $connect->query($sql);
    $rows=mysqli_fetch_assoc($result);

?>

<div  id="wrap">
    <table>
        <tr>
            <td class="ontop">이벤트</td>
        </tr>
<table>
    <tr>
        <td colspan="4"><?php echo $rows['title']?></td>
    </tr>
        <tr>
            <img src="admineventview_img.php?number=<?php echo $number ?>" / style="max-width: 80%;height: auto;">
        </tr>

        <tr>
                <td>소비자조회수</td>
                <td><?php echo  $rows['hit']?></td>
        </tr>
        <tr>
            <td colspan="4"><?php echo $rows['content']?></td>
        </tr>
</table>
<div>
                <button class="btn" onclick="history.back()" >목록으로</button>
                <button onclick="location.href='./adminevent_modify.php?number=<?=$number?>'">수정</button>
 
                <button onclick="location.href='./adminevent_delete.php?number=<?=$number?>'">삭제</button>
        </div>
        </table>
</div>