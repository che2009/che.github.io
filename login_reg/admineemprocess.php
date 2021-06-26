<?php
@session_start();
require_once 'adminempserver.class.php';
$AdminEmpserver=new adminempserver();
// $user=$_POST['user'];

//  		$tel=$_POST['tel'];
//  		$address=$_POST['address'];
//  		echo $user; 
//  		echo $tel;
//  		echo $address;
//  		die;

if(!empty($_REQUEST['flag']))
{
	$flag=$_REQUEST['flag'];
if($flag==$_SESSION['code'])
{
        $user=$_POST['user'];
		$tel=$_POST['tel'];
		$address=$_POST['address'];
// echo $user; 
//  		echo $tel;
//  		echo $address;
//  		die;
	
		date_default_timezone_set("PRC");
		require_once('class.phpmailer.php');
		
		$mail = new PHPMailer(); //实例化
		$mail->IsSMTP(); // 启用SMTP
		$mail->Host = "smtp.qq.com"; //SMTP服务器 以163邮箱为例子
		$mail->Port = 25;  //邮件发送端口
		$mail->SMTPAuth   = true;  //启用SMTP认证
		
		$mail->CharSet  = "UTF-8"; //字符集
		$mail->Encoding = "base64"; //编码方式
		
		$mail->Username = "2609949816@qq.com";  //你的邮箱
		$mail->Password = "LZBsylzb";  //你的密码
		$mail->Subject = "收货信息邮件提醒"; //邮件标题
		
		$mail->From = "2609949816@qq.com";  //发件人地址（也就是你的邮箱）
		$mail->FromName = "收货信息邮件";  //发件人姓名
		
		//$address = "1226851346";//收件人email
		$mail->AddAddress("597267673@qq.com", "你好");//添加收件人（地址，昵称）
		
		//$mail->AddAttachment('xx.xls','我的附件.xls'); // 添加附件,并指定名称
		$mail->IsHTML(true); //支持html格式内容
		$mail->AddEmbeddedImage("header-bg2.jpg", "my-attach", "header-bg2.jpg"); //设置邮件中的图片
		$mail->Body = '你好, <b>1226851346@qq.com用户</b>! <br/>这是一封来自收货信息邮件提醒！<br/>内容：(用户:'.$user.')已建立了客户基本信息.<br/>注：此邮件是提示信息,详情如下：<br/>
		     <br/> 用户名：'.$user.'</br>
		     <br>手机号：'.$tel.'</br>
		     <br>地址：'.$address.'</br>
				<br/><img alt="helloweba" src="cid:my-attach">';
		$res=$AdminEmpserver->insert_custment_info($user,$tel,$address);
		if ($res==1){
			if(!$mail->Send()) {
				//echo "发送失败: " . $mail->ErrorInfo;
				
				echo"<script>alert('增加客户信息成功，邮件没有成功发送但不影响正常操作,点击确定后返回查看页面,谢谢！');location.href='./';</script>";
			} else {
			//echo"<script>alert('增加客户信息成功！');history.go(-1)</script>";
			echo"<script>alert('订单提交成功，请保持手机畅通，以便快递人员联系到您！');location.href='./';</script>";}
		}else {
			echo"<script>alert('增加客户信息失败！');location.href='./';</script>";
			exit();
		}
}else{
	echo"<script>alert('客户基本信息数据已经上传,请不要重复提交！');location.href='./';</script>";
	exit();
}
$_SESSION['code']=0;


			
}
?>