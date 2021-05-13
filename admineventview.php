<?php
	$connect =mysqli_connect('localhost','bitnami','1234','event') or die('connection fail');
	$number = $_GET['number'];
    session_start();
    $query="SELECT title,content,date,hit,id FROM eventpage WHERE number=$number";
    $result = $connect->query($query);
    $rows = mysqli_fetch_assoc($result);
    $hit="UPDATE eventpage SET hit=hit+1 WHERE number=$number";
    $connect->query($hit);

?>
<style type="text/css">
    #wrap {
    margin: auto;
    width: 80%;
}
table .ontop{
    background-color: gray;
}
table{
    width: 100%;
    margin: auto;
    border-collapse: collapse;
    border:1px solid black;
    text-align: left;
}
td,th{
min-height: 10px;
border:1px solid black;
}
th{
    width: 10%;
}
 .btn{
float: right;   
}</style>
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
                <td>작성자</td>
                <td><?php echo $rows['id']?></td>
                <td>소비자조회수</td>
                <td>조회수</td>
        </tr>
        <tr>
        	<td colspan="4"><?php echo $rows['content']?></td>
        </tr>
</table>
<div>
                <button class="btn" onclick="location.href='./adminevent_list.php'">목록으로</button>
                <button onclick="location.href='./modifyevent.php?number=<?=$number?>'">수정</button>
 
                <button onclick="location.href='./deleteevent.php?number=<?=$number?>'">삭제</button>
        </div>
        </table>
</div>
