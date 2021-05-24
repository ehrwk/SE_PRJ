<?php
//레이아웃
  include_once "./layout.inc";

  session_start(); //예지가 추가함
  $base = new layout;
  $base->link='./style.css';

  #$id = $_SESSION['id']; //예지가 추가함
  //
 $connect = mysqli_connect(
  'localhost',      //주소
  'bitnami',        //username
  '1234',           //pw
  'book'            //database_name
) or die('connection fail');

 $book_num=$_GET['book_num'];

 $query="SELECT category, cate_dec, book_name, author, price,book_detail FROM bookdata WHERE book_num=$book_num";
$result = $connect->query($query);
$rows=mysqli_fetch_assoc($result);

  $content=$rows['book_detail'];
   $str_content = str_replace("\r\n", "<br>", $content);
  
//이미지데이터
    $image_num = $book_num;

    $sql = "SELECT image_num FROM upfile where image_num=$image_num";
    $iresult = mysqli_query($connect, $sql);
    $irows=mysqli_fetch_assoc($iresult);

    //장바구니 함수

function basket(){
  $basketbook_amount=$_GET['basketbook_amount'];
  $image_num=$_GET['image_num'];
  $price=$_GET['price'];
  $author=$_GET['author'];
  $book_name=$_GET['book_name'];
  $id = $_SESSION['id']; //예지가 추가함

  $conn_basket = mysqli_connect("localhost","bitnami","1234","shoppingbasket") or die("connection fail");
  $b_sql = "INSERT INTO basket(basketbook_index,basketbook_name,basketbook_author,basketbook_price,basketbook_amount,id)
  VALUES (null,'$book_name','$author','$price','$basketbook_amount','$id')"; //basketbook_image_num 컬럼 삭제 해서 지우고, id 컬럼 추가해서 넣음

  $current_id = mysqli_query($conn_basket, $b_sql) or die("<b>Error:</b>장바구니 에러!<br/>" . mysqli_error($conn_basket));
  if (isset($current_id)) {
       echo "<script>alert('장바구니 등록되었음');
       location.reload();</script>";
  }
}
 if (array_key_exists('basket', $_GET)) {
   basket();
 }
?>

<!DOCTYPE html>
<html>
<head>
    <?php $base->LayoutStyle();?>
    
</head>

<body>
    <?php 
    $base->LayoutHeader();
    $base->LayoutMenu();
  ?>
   <article><center>
  <form method="get">
    <div class=mainbox>

        <div class="img_sec"  style="display: inline-block;">
        <img src="book_image_view.php?image_num=<?php echo $irows["image_num"]; ?>" /  height = "300px">
        </div>
        <div class="subbox" style="display: inline-block; height: 300px; ">
        <h2><?php echo $rows['book_name']?></h2>
        <hr size = "3" color = "burlywood">
        <table>
            <tr>
                <th>카테고리</th>
                <td><?php echo $rows['category']?></td>
            </tr>

            <tr>
                <th>10진분류</th>
                <td><?php echo $rows['cate_dec']?>
            </tr>
            <tr>
                <th>저자</th>
                <td><?php echo $rows['author']?></td>
            </tr>

            <tr> 
                <th class = "sub">배송비</th>
                <td class = "sub">무료배송</td>
            </tr>

            <tr>
                <th>판매가</th>
                <td><?php echo $rows['price']?></td>
            </tr>
            <tr>
              <th>구매수량</th>
              <td>
                <input type="number" name="basketbook_amount" value="1">
              </td>
            </tr>
           
        </table>
        <br>

<input type="hidden" name="image_num" value="<?php echo $irows["image_num"];?>">
<input type="hidden" name="price" value="<?php echo $rows["price"];?>">
<input type="hidden" name="author" value="<?php echo $rows['author'];?>">
<input type="hidden" name="book_name" value="<?php echo $rows['book_name'];?>">
<script type="text/javascript">
  function warning(){
    alert("현재 구매하기 비활성!")
  }
</script>
        <input type ="button" value = "구매하기(비활성)" onclick="warning()"/> 
        <input type ="submit" name="basket" value = "장바구니"/>
        </div>
        </div>
       
        <div>
          <h3>상세페이지</h3>
          <?php echo $str_content?></div>
</form>
          </center></article>
  <?php
    $base->LayoutFooter();
  ?>
    </body>
</html>