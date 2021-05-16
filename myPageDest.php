<?php
	include_once "./layout.inc";
	$base = new layout;

	$db_conn = mysqli_connect('localhost', 'bitnami', '1234', 'Destination') or die('fail');	

	$base->style = "
		#arrivalInfo{
			border: 1px solid #b0b0b0;
			width: 100%;
			height: 200px;
		}

		#submit{
			margin-top: 25px;
			width: 100%;
			font-size: 13pt;
		}
	";
	$base->content = "
		<table id='arrivalInfo'>
			<tr>
				<td></td>
			</tr>
		</table>
		<input id = 'submit' type = 'button' value = '+배송지 추가' onclick = window.open('postcodeAPI.php')></td>
	";
	$base->LayoutMain();
?>
