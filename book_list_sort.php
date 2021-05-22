<?php

	error_reporting(E_ALL);
	ini_set( "display_errors", 1 );
	$conn = mysqli_connect('localhost','bitnami','1234','book') or die('fail');

	$book_name = $_POST['book_name'];
	$sorting = $_POST['sorting'];
	$range_price1 = $_POST['range_price1'];
	$range_price2 = $_POST['range_price2'];
	$image_num = $_POST["image_num"];



	



?>