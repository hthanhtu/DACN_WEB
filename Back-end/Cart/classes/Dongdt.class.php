<?php
class Dongdt extends Db{
	public function getRand($n)
	{
		$sql="select MaDongDT, TenDongDT, Hinh from dongdienthoai order by rand() limit 0, $n ";
		return $this->exeQuery($sql);	
	}
	
	
	public function delete($MaDongDT)
	{
			
	}
	
	public function getDetail($MaDongDT)
	{
		
					
		
	}

}
?>