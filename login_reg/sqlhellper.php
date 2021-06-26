<?php
 class sqlhelpper{
 	public $conn;
 	public $dbname="host7614850";
 	public $username="host7614850";
 	public $password="CHEsunyard";
 	public $host="lnmg-003.xincache.cn";
 	public function __construct(){
 		$this->conn=mysql_connect($this->host,$this->username,$this->password);
 		 if(!$this->conn)
 		 {
 		 	die("连接失败".mysql_error());
 		 }
 		 mysql_select_db($this->dbname,$this->conn);
 	}
 	public function execute_dql($sql)
 	{
 		
 	
 		$res=mysql_query($sql,$this->conn) or die(mysql_error());
 		return $res;
 		
 	}
 	
 	public function execute_dql2($sql)
 	{
 		$arr=array();
 		$res=mysql_query($sql,$this->conn) or die(mysql_error());
 		$i=0;
 		while($row=mysql_fetch_assoc($res))
 		{
 			$arr[]=$row;
 			
 		}
 		mysql_free_result($res);
 		return $arr;
 	}
 	public function execute_dml($sql)
 	{
 		$b=mysql_query($sql,$this->conn);
 		if(!$b)
 		{
 			return 0;
 			
 		}else{
 			if(mysql_affected_rows($this->conn)>0)
 			{
 				return 1;
 			}else{
 				return 2;
 			}
 		}
 	}
 	
 	
 	public function close_connect(){
 		if(!empty($this->conn))
 		{
 			mysql_close($this->conn);
 	}
 	}
 }
?>