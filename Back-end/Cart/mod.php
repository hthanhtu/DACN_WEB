<?php
$mod = getIndex("mod","dienthoai");
			
if ($mod=="dienthoai")
	include "module/dienthoai/index.php";
if ($mod=="news")
	include "module/news/index.php";
if ($mod=="cart")
	include "module/cart/index.php";
	
?>