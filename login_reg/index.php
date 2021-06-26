<?php
include_once ('sqlhellper.php');
@session_start();
$_SESSION['code']=mt_rand(1,1000);//生成1到1000之间的随机器数
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>收货信息</title>

<style type="text/css">
*{margin:0;padding:0;list-style-type:none;}
a,img{border:0;}
body{font:12px/180% Arial, Helvetica, sans-serif, "新宋体";}
</style>


<link rel="stylesheet" type="text/css" href="css/style.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>

</head>

<body>
			
				<form class="cd-form" action="admineemprocess.php" method="post" id="form1" >
					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">用户名</label>
						<input class="full-width has-padding has-border" id="signup-username" type="text" name="user" placeholder="收货姓名">
					</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">联系方式</label>
						<input class="full-width has-padding has-border" id="signup-email" type="text" 
						name="tel" placeholder="手机号">
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">地址</label>
						<input class="full-width has-padding has-border" id="signup-password" type="text"  name="address" placeholder="收货地址">
					</p>

				

					<p class="fieldset">
						<input class="full-width2" type="submit" value="提交">
						<input type="hidden" name="flag" value="<?php echo $_SESSION['code']?>"/>
					</p>
				</form>
				


</body>
</html>
