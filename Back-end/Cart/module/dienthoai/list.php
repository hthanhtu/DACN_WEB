<?php
if (!defined("ROOT"))
{
	echo "Err!"; exit;	
}
$cat_id = getIndex("MaLoai", "all");
$pub_id = getIndex("MaHangSX", "all");
$sql ="select * from dongdienthoai where 1 ";
$arr = array();
if ($cat_id !="all")
{	$sql .=" and MaLoai =:MaLoai ";
	$arr[":MaLoai"] = $cat_id;
}

if ($pub_id !="all")
{	$sql .=" and MaHangSX =:MaHangSX ";
	$arr["MaHangSX"] = $pub_id;
}

$list = $book->exeQuery($sql, $arr);
echo "Có ".$book->getRowCount() ." kết quả";
foreach($list as $r)
{
	?>
    <div class=book>
    	<?php echo $r["book_name"];?>
    </div>
    <?php	
}

?>