<?php
$list = $book->getRand(10);
foreach($list as $r)
{
	?>
    <div class=book>
    	<?php echo $r["TenDongDT"];?><br />
        <a href="index.php?mod=cart&ac=add&id=<?php echo $r["MaDongDT"];?>">Mua hàng</a>
    </div>
    <?php	
}
?>