<?php
    error_reporting(E_ALL);
    ini_set( "display_errors", 1 );

    
    extract($_REQUEST);

    if (is_uploaded_file($_FILES['userImage']['tmp_name'])){
        $connect = mysqli_connect('localhost','bitnami','1234','event') or die('connection fail');
        $title=addslashes($title);
        $finalDate=addslashes($finalDate);
        $content=addslashes($content);
        $date = date('Y-m-d H:i:s');
      
        $imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
        $imageProperties = getimageSize($_FILES['userImage']['tmp_name']);

        $query = "UPDATE eventdb SET title='$title', content='$content',finalDate='$finalDate', date='$date',imageType='{$imageProperties['mime']}',imageData='{$imgData}' WHERE number=$number";
        
        $current_id = mysqli_query($connect, $query) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($connect));
        if(isset($current_id)) {
            <script>
                alert("수정되었습니다.");
                location.replace("./admineventview?number=<?=$number?>");
            </script>   }
    }
    else
    {
        echo "<script>alert('파일을 첨부해 주세요');
        history.back()
        </script>";
    }

  


