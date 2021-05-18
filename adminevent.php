<?php
	include_once "adminLayout.inc";
	$admin = new AdminLayout;

	
	$admin->content="
	<iframe src='adminevent_form.php' style='width:100%; height:100vh' frameborder='0' crolling='no' frameborder='none' allowfullscreen=''></iframe>
	";

	$admin->AdminLayoutMain(); ?>