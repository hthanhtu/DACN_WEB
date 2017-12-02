<?php
$cats = $db->exeQuery("select * from dienthoai ");
foreach($cats as $r)
{
	?>
    <div><a href="index.php?mod=book&ac=list&cat_id=<?php echo $r["IMEI"];?>">
    		<?php echo $r["MaDongDT"];?><?php echo $r["MauSac"];?></a>
    </div>
    <?php	
}

?>