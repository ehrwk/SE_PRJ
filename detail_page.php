<?php

 $connect = mysqli_connect(
  'localhost',      //주소
  'bitnami',        //username
  '1234',           //pw
  'book'            //database_name
) or die('connection fail');
 $book_name=$_GET['book_name'];
 session_start();
 $query="SELECT category, cate_dec, book_name, author, price FROM bookdata WHERE book_name=$book_name";
$result = $connect->query($query);
$rows=mysqli_fetch_assoc($result);
?>

<head>
	<style type="text/css">
		table td{
			width: 200px;
			padding: 10px;
			border-bottom: 1px solid lightgray;
		}
		.mainbox{
			width: 1000px;
			height : 400px;
            position : relative;
            left:100px;
		}
		.img_sec{
			position : absolute;
            width:300px;
            height: 120px;
		}
		.subbox{
			position : absolute;
            width:300px;
            height: 100px;
            left:440px;
		}
	</style>
</head>
<body>
	<div class=mainbox>
        <div class="img_sec">
        <img src = "img/sampleLogo.png" width = "400px" height = "400px">
        </div>
        <div class="subbox">
        <h2><?php echo $rows['book_name']?></h2>
        <hr size = "3" color = "burlywood">
        <table>


            <tr>
                <td class = "sub">카테고리</td>
                <td><?php echo $rows['category']?></td>
            </tr>

            <tr>
                <td class = "sub">10진분류</td>
                <td><?php echo $rows['cate_dec']?>
            </tr>
            <tr>
                <td class = "sub">저자</td>
                <td><?php echo $rows['author']?></td>
            </tr>

            <tr> 
                <td class = "sub">배송비</td>
                <td class = "sub">무료배송</td>
            </tr>

            <tr>
                <td class = "sub">판매가</td>
                <td><?php echo $rows['price']?></td>
            </tr>
        </table>
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type ="button" value = "구매하기"/> &nbsp;&nbsp;&nbsp;
        <input type ="button" value = "장바구니"/>
        </div>
        </div>
    </body>
