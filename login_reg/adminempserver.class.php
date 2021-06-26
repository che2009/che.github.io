<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
include_once ('sqlhellper.php');
@session_start();

class adminempserver{
	function insert_custment_info($user,$tel,$address){
		$sql="insert into user (user,tel,address)value('$user','$tel','$address') ";
		$Sqlhelpper=new sqlhelpper();
		$res=$Sqlhelpper->execute_dql($sql);
		$Sqlhelpper->close_connect();
		return $res;
	}

	
}
?>