<?php
header("Content-type: text/html; charset=utf-8"); 
include('controller/search.php');
class ajax extends spController
{
	function logs($dowhat) {
	$sp=spClass("logs");
	$dotime=date("Y-m-d H:i:s");
	$area = spClass('spIpArea')->get($this->egetip());
	$newarr=array(
		'dowhat' => $dowhat,
		'dotime' => $dotime,
		'doip' => $this->egetip(),
		'areas' => $area,
		'username' => $_SESSION[admin_username][username]
	);
	$sp->create($newarr);
	}
	function egetip(){
		if(getenv('HTTP_CLIENT_IP')&&strcasecmp(getenv('HTTP_CLIENT_IP'),'unknown')) 
		{
			$ip=getenv('HTTP_CLIENT_IP');
		} 
		elseif(getenv('HTTP_X_FORWARDED_FOR')&&strcasecmp(getenv('HTTP_X_FORWARDED_FOR'),'unknown'))
		{
			$ip=getenv('HTTP_X_FORWARDED_FOR');
		}
		elseif(getenv('REMOTE_ADDR')&&strcasecmp(getenv('REMOTE_ADDR'),'unknown'))
		{
			$ip=getenv('REMOTE_ADDR');
		}
		elseif(isset($_SERVER['REMOTE_ADDR'])&&$_SERVER['REMOTE_ADDR']&&strcasecmp($_SERVER['REMOTE_ADDR'],'unknown'))
		{
			$ip=$_SERVER['REMOTE_ADDR'];
		}
		return preg_replace("/^([\d\.]+).*/", "\\1",$ip);
	}
	//银行帐号_编辑
	function updatebank() {
	$cb = spClass("banks");
	$conditions = array('id' => $this->spArgs('id'));
	$newrow = array(
	'bankname' => $this->spArgs('b1'),
	'banknum' => $this->spArgs('b2'),
	'realname' => $this->spArgs('b3')
	);
	$cb->update($conditions,$newrow);
	$this->logs("编辑银行帐号");
	echo "修改成功！";
	}
	//产品组_编辑
	function updategroup() {
	$cb = spClass("groups");
	$conditions = array('id' => $this->spArgs('id'));
	$newrow = array(
	'gname' => $this->spArgs('b1'),
	'zhekou' => $this->spArgs('b2'),
	'ticheng' => $this->spArgs('b3')
	);
	$cb->update($conditions,$newrow);
	$this->logs("编辑产品组");
	echo "修改成功！";
	}
	//产品组_重名检测
	function groupcheck() {
	$gp=spClass('groups');
	$keys=$this->spArgs('param');
	$this->gnums = $gp->find(array('gname' => $keys));
		if ($this->gnums) {
		echo "该产品组名称已存在！";
		} else {
		echo "y";
		}
	}
	//产品_编辑
	function updateproduct() {
	$cb = spClass("products");
	$conditions = array('id' => $this->spArgs('id'));
	$newrow = array(
	'pname' => $this->spArgs('b1'),
	'price' => $this->spArgs('b2'),
	'gid' => $this->spArgs('b3')
	);
	$cb->update($conditions,$newrow);
	$this->logs("编辑产品");
	echo "修改成功！";
	}
	//表单项_删除
	function delform() {
	$gb = spClass('forms');
	$re = $gb->deleteByPk($this->spArgs('id'));
	if ($re) {echo "1";}  
	}
	//修改订单
	function corder() {
	$t1=$this->spArgs('arr1');
	$t2=$this->spArgs('arr2');
	$i=0;
	foreach ($t1 as $v) {
		$t3[]=$v."|".$t2[$i];	
		$i++;
	}
	$t4=implode("~",$t3);
	$id=$this->spArgs('cid');
	$price=$this->spArgs('price');
	$nums=$this->spArgs('nums');
	$realname=$this->spArgs('realname');
	$mob=$this->spArgs('mob');
	$address=$this->spArgs('address');
	$payments=$this->spArgs('payments');
	$sp=spClass("orders");
	$newarr=array(
		'price' => $price,
		'totle' => $price*$nums,
		'nums' => $nums,
		'realname' => $realname,
		'mob' => $mob,
		'address' => $address,
		'useroption' => $t4,
		'payment' => $payments
	);
	$sp->update(array('id'=>$id),$newarr);
	$ons=$sp->find(array('id'=>$id));
	$this->logs("修改订单，订单编号：".$ons[ordernum]);
	echo "修改成功";
	}
}
?>