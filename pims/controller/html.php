<?php
header("Content-type: text/html; charset=utf-8"); 
include('controller/search.php');
set_time_limit(0);
class html extends spController
{
//显示客服业绩查询与结算页面
	function showyeji() {
	//读取客服
	$kefu=spClass("adminuser");
	$this->kf=$kefu->findAll(null,"id desc",null,null);
	$this->nowyear=date("Y");
	$this->nowmonth=date("m");
	//获取年份数组
	for ($i=$this->nowyear;$i>($this->nowyear-20);$i--) {
	$year[]=$i;
	}
	$this->year=$year;
	$this->display("admin/showyeji.html");
	}
//客服业绩查询
	function searchyeji() {
	//分页传参
	$this->kefu=$this->spArgs('kefu');
	$this->year=$this->spArgs('year');
	$this->month=$this->spArgs('month');
	$this->page=$this->spArgs('page');
	//读取客服
	$kefu=spClass("adminuser");
	$this->kf=$kefu->findAll(null,"id desc",null,null);
	$this->nowyear=date("Y");
	$this->nowmonth=date("m");
	//获取年份数组
	for ($i=$this->nowyear;$i>($this->nowyear-20);$i--) {
	$yeara[]=$i;
	}
	$this->yeara=$yeara;
	$banklist=spClass("orders");
	$kefus=$this->spArgs("kefu");
	$date=$this->spArgs("year")."-".$this->spArgs("month");
	$myarr=" kefu='$kefus' && zt1=4 && zt2=2 && DATE_FORMAT(addtime,'%Y-%m')='$date' ";
	$this->results=$banklist->spPager($this->spArgs('page',1),10000)->findAll($myarr,"id desc",null,null);
	//获取提成比例
	$tc=spClass("groups");
	$tp=$this->results;
	$zongji1=0;
	$zongji2=0;
	foreach ($tp as $key=>$v) {
		//根据所属产品组ID获取提成比例
		$tcre=$tc->find(array('id' => $v['gid']));
		if (!empty($tcre[ticheng])) {
		$jine=$tcre[ticheng]/100*$v[totle];
		array_push($tp[$key],$tcre[ticheng]);
		array_push($tp[$key],$jine);
		$zongji1+=$v[totle];
		$zongji2+=$jine;
		}
	}
	$this->zj1=$zongji1;
	$this->zj2=$zongji2;
	$this->results=$tp;
	//判断所查月份是否已结算
	$his=spClass("his");
	$okefu=$this->kefu;
	$odate=$this->year."-".$this->month;
	$mynum=$his->findCount(" kefu='$okefu' && dotime='$odate' ");
	$this->mynums=$mynum;
	
	
	$this->pager=$banklist->spPager()->getPager();
	$this->display("admin/showyeji.html");
	}
	//客服业绩结算
	function yejijiesuan() {
	$kefu=$this->spArgs('kefu');
	$dotime=$this->spArgs('dotime');
	$totle=$this->spArgs('totle');
	$ticheng=$this->spArgs('ticheng');
	$addtime=date("Y-m-d H:i:s");
		$his=spClass("his");
		$newrow = array( 
		'kefu' => $kefu,
		'totle' => $totle,
		'ticheng' => $ticheng,
		'dotime' => $dotime,
		'addtime' => $addtime
		);
		$his->create($newrow);  
		$this->success("结算成功！", spUrl("html", "showyeji"));
	}
//显示业绩历史
	function yejihis() {
	$banklist=spClass("his");
		//获取用户权限
		$users=spClass("adminuser");
		$qx=$users->find(array('username'=>$_SESSION[admin_username][username]));
		$nowuser=$_SESSION[admin_username][username];
		$qx=explode("|",$qx[qx]);
		if ($qx[0]=="1,2,3,4,5,6,7") {
		$myarr=null;
		} else {
		$myarr=" kefu='$nowuser' ";
		}
	$this->results=$banklist->spPager($this->spArgs('page',1),20)->findAll($myarr,"id desc",null,null);
	$this->pager=$banklist->spPager()->getPager();
	$this->display("admin/his.html");
	}
}
?>