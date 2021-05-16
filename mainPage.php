<?php
	include_once "./layout.inc";

	$base = new layout;

	$base->link='./style.css';
	$base->content = "본문 - 이벤트&공지 추가할 예정"; //본문

	$base->LayoutMain(); //레이아웃 출력
?>