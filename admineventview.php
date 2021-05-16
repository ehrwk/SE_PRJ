<?php
    include_once "adminLayout.inc";
    $admin = new AdminLayout;
	$connect =mysqli_connect('localhost','bitnami','1234','event') or die('connection fail');
	$number = $_GET['number'];
    $query="SELECT title,content,date,hit,id FROM eventpage WHERE number=$number";
    $result = $connect->query($query);
    while($rows=mysqli_fetch_assoc($result)){
        $title= $rows['title'];
        $id= $rows['id'];
        $date= $rows['date'];
        $content=$rows['content'];
}
    $hit="UPDATE eventpage SET hit=hit+1 WHERE number=$number";
    $connect->query($hit);

    $admin->content ="
    <table>
        <tr>
            <td class='ontop'>이벤트</td>
        </tr>
        <table>
            <tr>
                <td colspan='4'>$title</td>
            </tr>
            <tr>
                <td>작성자</td>
                <td>$id</td>
                <td>소비자조회수</td>
                <td>조회수</td>
            </tr>
            <tr>
                <td colspan='4'>$content</td>
            </tr>
        </table>
        <div>
            <button class='btn' onclick='aa.php'>목록으로</button>
            <button onclick='aa.php'>수정</button>
            <button onclick='aa.php'>삭제</button>
        </div>
    </table>
    ";
    $admin->AdminLayoutMain();
?>
