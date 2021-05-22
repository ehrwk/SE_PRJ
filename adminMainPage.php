<?php
	include_once "adminLayout.inc";
	$admin = new AdminLayout;
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<?php $admin->AdminLayoutStyle(); ?>
</head>
<body>
	<?php
		$admin->AdminLayoutHeader();
		$admin->AdminLayoutMenu();
	?>
	<article>
		
	</article>
	<?php
		$admin->AdminLayoutFooter();
	?>
</body>
</html>