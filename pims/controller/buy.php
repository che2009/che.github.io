<?php
header("Content-type: text/html; charset=utf-8"); 
//error_reporting(E_ALL);
class buy extends spController
{
	/*过滤html标签*/
	function cleanhtml($str,$tags=''){//过滤时默认保留html中的<a><img>标签
		$search = array(
						'@<script[^>]*?>.*?</script>@si',  // Strip out javascript
/*						'@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags*/
						'@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly 
						'@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments including CDATA 
		); 
		$str = preg_replace($search, '', $str);
		$str = strip_tags($str,$tags);
		return $str;
	}
//保存前台用户订单
	function saveorder() {
	$gid=$this->spArgs('gid');
	$yanzhengma=$this->spArgs('text');
	$newform=spClass("forms");
	$newaaa=$newform->find(array('gid'=>$gid));
	if ($newaaa[yzm]=="2") {
		if ($yanzhengma!=$_SESSION["yan"]) {
		echo "<script>alert('验证码错误');";
		echo "window.opener.location.reload();window.close();</script>";
		exit;
		}
	}
	$pname=explode("|",$this->spArgs('pname'));
	$nums=$this->spArgs('nums');
	$username=$this->spArgs('username');
	$mob=$this->spArgs('mob');
	$address=$this->spArgs('address');
	$beizhu=$this->spArgs('beizhu');
	$pay=$this->spArgs('pay');
	$fromdomain=$this->spArgs('fromdomain');
	if ($gid=="" || $pname=="" || $nums=="" || $username=="") {echo "<script>history.back(-1);</script>";exit;}
	$array=$_POST;
	$area = spClass('spIpArea')->get(egetip());
	unset($array[Submit]);
	unset($array[fromurl]);
	unset($array[fromdomain]);
	unset($array[c]);
	unset($array[a]);
	unset($array[gid]);
	unset($array[pname]);
	unset($array[nums]);
	unset($array[username]);
	unset($array[mob]);
	unset($array[address]);
	unset($array[beizhu]);
	unset($array[pay]);
	unset($array[text]);
	unset($array[tmib_res_layout]);
	unset($array[PHPSESSID]);
	foreach ($array as $key=>$v) {
		if (!isset($useroption)) {
		$useroption=$key."|".$v;
		$uo=$key."：".$v;
		} else {
		$useroption=$useroption."~".$key."|".$v;
		$uo=$uo."<br>".$key."：".$v;
		}
	}
	$myurl1=$_SERVER['HTTP_REFERER'];
	$myurl2=$_POST[fromurl];
	$addtime=date("Y-m-d H:i:s");
	$ordernum=date("YmdHis").rand(100,999);
		//获取折扣
		$zk=spClass("groups");
		$zhek=$zk->find(array('id'=>$gid));
		if ($zhek[zhekou]!="") {
		$bfb=$zhek[zhekou]/10;
		$totle=$pname[1]*$nums;//全价
		$totle2=$pname[1]*$nums*$bfb;//折扣价
		} else {
		$totle=$pname[1]*$nums;//全价
		$totle2=$pname[1]*$nums;//折扣价
		}
		$orders=spClass("orders");
		//全价数组
		$arr1=array(
			'gid' => $this->cleanhtml($gid),
			'ordernum' => $this->cleanhtml($ordernum),
			'pname' => $this->cleanhtml($pname[0]),
			'price' => $this->cleanhtml($pname[1]),
			'totle' => $this->cleanhtml($totle),
			'nums' => $this->cleanhtml($nums),
			'realname' => $this->cleanhtml($username),
			'mob' => $this->cleanhtml($mob),
			'address' => $this->cleanhtml($address),
			'beizhu' => $this->cleanhtml($beizhu),
			'useroption' => $this->cleanhtml($useroption),
			'payment' => $this->cleanhtml($pay),
			'addtime' => $this->cleanhtml($addtime),
			'ips' => egetip(),
			'areas' => $area,
			'zt1' => "1",
			'zt2' => "1",
			'url1' => $this->cleanhtml($myurl1),
			'url2' => $this->cleanhtml($myurl2),
			'fromdomain' => $this->cleanhtml($fromdomain)
		);
		//半价数组
		$arr2=array(
			'gid' => $this->cleanhtml($gid),
			'ordernum' => $this->cleanhtml($ordernum),
			'pname' => $this->cleanhtml($pname[0]),
			'price' => $this->cleanhtml($pname[1]),
			'totle' => $this->cleanhtml($totle2),
			'nums' => $this->cleanhtml($nums),
			'realname' => $this->cleanhtml($username),
			'mob' => $this->cleanhtml($mob),
			'address' => $this->cleanhtml($address),
			'beizhu' => $this->cleanhtml($beizhu),
			'useroption' => $this->cleanhtml($useroption),
			'payment' => $this->cleanhtml($pay),
			'addtime' => $addtime,
			'ips' => egetip(),
			'areas' => $area,
			'zt1' => "1",
			'zt2' => "1",
			'url1' => $this->cleanhtml($myurl1),
			'url2' => $this->cleanhtml($myurl2),
			'fromdomain' => $this->cleanhtml($fromdomain)
		);
		switch ($pay) {
		case "1":
		$py="支付宝即时到帐";
		$myp=$totle2;
		break;
		case "2":
		$py="支付宝担保交易";
		$myp=$totle;
		break;
		case "3":
		$py="银联在线";
		$myp=$totle2;
		break;
		case "4":
		$py="财付通";
		$myp=$totle2;
		break;
		case "5":
		$py="易宝";
		$myp=$totle2;
		break;
		case "6":
		$py="银行汇款";
		$myp=$totle;
		break;
		case "7":
		$py="货到付款";
		$myp=$totle;
		break;
		case "8":
		$py="上门取货";
		$myp=$totle;
		case "9":
		$py="Paypal";
		$myp=$totle;
		}
		//检测前台用户短信提醒是否开启
		$yip=egetip();
		$mysms=spCLass('mysms');
		$sms=$mysms->find();
		$sms_message=str_replace("{ordernum}",$ordernum,$sms[message]);
		$sms_message=str_replace("{pname}",$pname[0],$sms_message);
		$sms_message=str_replace("{price}",$pname[1],$sms_message);
		$sms_message=str_replace("{nums}",$nums,$sms_message);
		$sms_message=str_replace("{totle}",$myp,$sms_message);
		$sms_message=str_replace("{realname}",$username,$sms_message);
		$sms_message=str_replace("{mob}",$mob,$sms_message);
		$sms_message=str_replace("{address}",$address,$sms_message);
		$sms_message=str_replace("{remark}",$beizhu,$sms_message);
		$sms_message=str_replace("{pay}",$py,$sms_message);
		$sms_message=str_replace("{addtime}",$addtime,$sms_message);
		$gateway="http://api.sojisms.com:8082/sendsms.aspx?suser=$sms[uid]&spass=$sms[passwd]&telnum=$mob&nr=$sms_message";
		//$gateway = "http://ipyy.net/WS1/BatchSend.aspx?CorpID={$sms[uid]}&Pwd={$sms[passwd]}&Mobile={$mob}&Content={$sms_message}&Cell=&SendTime=";
		if ($sms[is_open]=="2") {
			if ($sms[nums]=="0" || $sms[nums]=="") {
			$resultsms = file_get_contents($gateway);
			} else {
				$getorder=spClass('orders');
				$myorder=$getorder->find(array('mob'=>$mob,'ips'=>egetip()));
				if (empty($myorder)) {
				$resultsms = file_get_contents($gateway);
				} else {
				$yes=date("Y-m-d");
				$onum=$getorder->findCount("mob='$mob' && ips='$yip' && DATE_FORMAT(addtime,'%Y-%m-%d')='$yes'");
					if ($onum<=$sms[nums]) {
					$resultsms = file_get_contents($gateway);
					} else {
					echo "<script>alert('同IP同手机号每天订购次数不能超过：".$sms[nums]."次');";
					echo "window.opener.location.reload();window.close();</script>";
					}
				}
			}
		}
		//检测是否开启手机短信提醒
		$mymobs=spClass('mob');
		$mymob=$mymobs->find();
		//检测是否开启邮件提醒
		$e=spClass("email");
		$this->m=$e->find();
		$ml=$this->m;
		if ($ml[is_open]=="1") {
		$mail = spClass('spEmail');
		$mailsubject = $ml[title];
		$mailbody = "订单编号:".$ordernum."<br>产品名称：".$pname[0]."<br>产品价格：".$pname[1]."<br>订购数量：".$nums."<br>收货人姓名：".$username."<br>手机号码：".$mob."<br>收货地址：".$address."<br>订单备注：".$beizhu."<br>支付方式：".$py."<br>下单时间：".$addtime."<br>购买IP：".egetip()."<br>".$uo;
		$mailtype = "HTML";
		}
		if ($ml[is_open]=="1" && $ml[smtpaddr]!="") {$mail->sendmail($ml[getaddr], $mailsubject, $mailbody, $mailtype);}
		$mailbody_gbk=iconv("utf-8","GBK",$mailbody);
		if ($mymob[zt]=="1" && $ml[smtpaddr]!="") {$mail->sendmail($mymob[mail139], "New orders to remind", $mailbody_gbk, $mailtype);}
		switch ($pay) {
		case "1"://支付宝即时到帐(ok)
		$orders->create($arr2);
		echo "<script>location.href=\"pay/alipay/alipayto.php?pname=".urlencode($pname[0])."&price=".$totle2."&ordernum=".$ordernum."\";";
		echo "window.opener.location.reload();</script>";
		break;
		case "2"://支付宝担保交易(ok)
		$orders->create($arr1);
		echo "<script>location.href='pay/alipaydb/alipayto.php?pname=".urlencode($pname[0])."&price=$totle&ordernum=$ordernum&user=".urlencode($username)."&addr=".urlencode($address)."&mob=$mob';";
		echo "window.opener.location.reload();</script>";
		break;
		case "3"://银联在线(ok)
		$orders->create($arr2);
		echo "<script>location.href='pay/chinabank/Send.php?pname=".urlencode($pname[0])."&price=$totle2&ordernum=$ordernum&user=".urlencode($username)."&addr=".urlencode($address)."&mob=$mob';";
		echo "window.opener.location.reload();</script>";
		break;
		case "4"://财付通即时到帐(ok)
		$orders->create($arr2);
		$newpname=iconv("UTF-8","GBK",$pname[0]);
		$newpname=urlencode($newpname);
		$user=iconv("UTF-8","GBK",$username);
		$newuser=urlencode($user);
		$addr=iconv("UTF-8","GBK",$address);
		$newaddr=urlencode($addr);
		echo "<script>location.href='pay/stenpay/index.php?pname=$newpname&price=$totle2&ordernum=$ordernum&user=$newuser&addr=$newaddr&mob=$mob';</script>";
		echo "window.opener.location.reload();</script>";
		break;
		case "5"://易宝(ok)
		$orders->create($arr2);
		$inter=spClass("interfaces");
		$in=$inter->find(array('id'=>'4'));
		$furl=$in['urladdress']."/pay/yeepay/callback.php";
		$newpname=iconv("UTF-8","GBK",$pname[0]);
		$newpname=urlencode($newpname);
		echo "<script>location.href='pay/yeepay/yeepay.php?pname=$newpname&price=$totle2&ordernum=$ordernum&furl=$furl';</script>";
		echo "window.opener.location.reload();</script>";
		break;
		case "6"://银行汇款
		$orders->create($arr2);
		echo "<script>alert('订购成功，您的订单编号：".$ordernum."');";
		echo "window.opener.location.reload();window.close();</script>";
		break;
		case "7"://货到付款
		$orders->create($arr1);
		echo "<script>alert('订购成功，您的订单编号：".$ordernum."');";
		echo "window.opener.location.reload();window.close();</script>";
		break;
		case "8"://上门取货
		$orders->create($arr1);
		echo "<script>alert('订购成功，您的订单编号：".$ordernum."');";
		echo "window.opener.location.reload();window.close();</script>";
		break;
		case "9"://Paypal
		$orders->create($arr1);
		echo "<script>location.href='pay/paypal/index.php?price=$totle&ordernum=$ordernum&pname=".urlencode($pname[0])."';</script>";
		echo "window.opener.location.reload();</script>";
		break;
		case "10"://支付宝双接口
		$orders->create($arr1);
		echo "<script>location.href='pay/alipaytwo/alipayto.php?pname=".urlencode($pname[0])."&price=$totle&ordernum=$ordernum&user=".urlencode($username)."&addr=".urlencode($address)."&mob=$mob';";
		echo "window.opener.location.reload();</script>";
		break;
		}
	}
}
?>