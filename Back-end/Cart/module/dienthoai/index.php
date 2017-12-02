<?php
if (!defined("ROOT"))
{
	echo "Err!"; exit;	
}
	$book = new dienthoai();
	$ac=getIndex("ac", "home");
	if ($ac=="home")
		{
			include ROOT."/module/dienthoai/home.php";
		}
	if ($ac=="list")
		{
			include ROOT."/module/dienthoai/list.php";
		}
	if ($ac=="detail")
		{
			include ROOT."/module/dienthoai/detail.php";	
		}

?>