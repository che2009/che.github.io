<?php
header("Content-type: text/html; charset=utf-8"); 
include('controller/search.php');
class api extends spController
{
//调用发货记录
	function sendcode() {
	$nums=$this->spArgs('nums');
	$mod=$this->spArgs('mod');
	switch ($mod) {
	case "1":
	$zt="";
	break;
	case "2":
	$zt="UP";
	break;
	case "3":
	$zt="DOWN";
	break;
	}
	$w=$this->spArgs('w');
	$h=$this->spArgs('h');
	$mygp=$this->spArgs('mygp');
	if ($zt!="") {
	echo "document.write(\"<marquee scrollamount='2' scrolldelay='30' direction= '$zt' width='$w' id='helpor_net' height='$h' onmouseover='helpor_net.stop()' onmouseout='helpor_net.start()' Author:redriver;>\");";
	}
	$sp=spClass("send");
	$rs=$sp->findAll("gid='$mygp'","id desc",NULL,$nums);
	foreach ($rs as $v) {
	echo "document.write(\"$v[content]<br>\");";
	}
	if ($zt!="") {
	echo "document.write(\"</marquee>\");";
	}
	}
//调用留言列表
	function bookcode() {
	$mod=$this->spArgs('mod');
	$p=$this->spArgs('p');
	$gid=$this->spArgs('gps');
	$sp=spClass("guestbook");
		switch ($mod) {
		case "1":
		$cond=" gid='$gid' ";
		break;
		case "2":
		$cond=" gid='$gid' && remess is not null ";
		}
		switch ($p) {
		case "1":
		$arr=$sp->findAll($cond,"id desc",NULL,NULL);
		break;
		case "2":
		$arr=$sp->findAll($cond,"id desc",NULL,$nums);
		}
	echo "document.write(\"<ul id='shopping_list'>\");";	
	foreach ($arr as $v) {
	$area = spClass('spIpArea')->get($v[ips]);
	echo "document.write(\"<li style='list-style:none'>\");";
	echo "document.write(\"<table width='98%' border='1' align='center' cellpadding='0' cellspacing='0' style='border-collapse:collapse' bordercolor='#f2f2f2'>\");";
	echo "document.write(\"<tr><td height='25' align='left' bgcolor='#f2f2f2' style='padding-left:8px;font-weight:bold'>访客：$v[writter]&nbsp;&nbsp;发表于：$v[addtime]</td></tr>\");";
	echo "document.write(\"<tr><td height='25' align='left' style='padding:8px'>$v[mess]\");";
		if ($v[remess]!="") {
		echo "document.write(\"<br /><br /><span style='color:red;background-color:#f2f2f2;padding:5px'>官方回复：$v[remess]</span>\");";
		}
	echo "document.write(\"</td></tr></table>\");";
	echo "document.write(\"</li><br>\");";
	}
	echo "document.write(\"</ul>\");";
		if ($p=="1") {
		echo "document.write(\"<table width='98%' border='0' align='center' cellpadding='0' cellspacing='0'><tr><td align='center'>\");";
		echo "document.write(\"<div id='shopping_list_counter'></div></td></tr></table>\");";
		}
	}
}
?>