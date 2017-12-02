<?php
$pubs = $db->exeQuery("select * from dienthoai ");
foreach($pubs as $r)
{
	?>
    <div><a href="index.php?mod=book&ac=list&pub_id=<?php echo $r["IMEI"];?>">
    		<?php echo $r["MaDongDT"];?><?php echo $r["MauSac"];?></a>
    </div>
    <?php	
}

?>