<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PIMS_程序安装</title>
<link href="css/css.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="css/jquery.js"></script>
<script type="text/javascript" src="css/Validform.js"></script>
<script type="text/javascript">
$(function(){
	$(".registerform:last").Validform({
		tiptype:2,
		ajaxPost:true,
		callback:function(data){
			if(data.status=="y"){
				setTimeout(function(){
					$.Hidemsg(); //公用方法关闭信息提示框;
				},2000);
			}
		}
	});
})
</script>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
.STYLE2 {color: #999999}
-->
</style></head>
<?php
//检测重复安装
if (is_file("install.locked")) {
echo "<script>alert('已经安装过，建议删除install文件夹以确保安全');";
echo "location.href='../index.php?c=admin&a=index';</script>";
exit;
}
?>
<body>
<form method="post" action="step2.php" class="registerform">
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="25" align="left"><a href="http://www.diantuo.net" target="_blank"><img src="img/logo.gif" border="0" /></a></td>
  </tr>
  <tr><td style="height:10px"></td></tr>
  <tr>
    <td height="25" align="left">
	<table width="100%" cellspacing="0" cellpadding="0" style="border-right:solid 1px #c6c6c6; border-bottom:solid 1px #c6c6c6; border-left:solid 1px #c6c6c6; border-top:solid 1px #c6c6c6;">
      <tr>
        <td height="30" colspan="3" align="center" valign="middle">
		<DIV style="PADDING-RIGHT:10px;OVERFLOW-Y:auto;PADDING-LEFT:10px;PADDING-BOTTOM:10px;SCROLLBAR-HIGHLIGHT-COLOR:#ffffff;OVERFLOW:auto;WIDTH:680px;SCROLLBAR-SHADOW-COLOR:#919192;SCROLLBAR-3DLIGHT-COLOR:#ffffff;LINE-HEIGHT:100%;SCROLLBAR-ARROW-COLOR:#919192;PADDING-TOP:0px;SCROLLBAR-TRACK-COLOR:#ffffff;SCROLLBAR-DARKSHADOW-COLOR:#ffffff;LETTER-SPACING:1pt;HEIGHT:180px;TEXT-ALIGN:left;padding-top:10px; color:#666666";>
		<p><strong>版权所有 (c)2009-2013，diantuo.net 保留所有权利。</strong></p>
		<p>感谢您选择PIMS在线订单管理系统（以下简称PIMS），PIMS是针对单页订购网站、以及其他表单管理类网站解决方案之一，基于 PHP + MySQL 技术开发。</p>
		<p>PIMS 的官方网址是： <a href="http://www.diantuo.net" target="_blank">www.diantuo.net</a> </p>
		<p>1、PIMS属商业程序，不提供免费版。</p>
		<p>2、您可以在协议规定的约束和限制范围内修改 PIMS 部分源代码或界面风格以适应您的网站要求。</p>
		<p>3、您拥有使用本软件构建的网站全部内容所有权，并独立承担与这些内容的相关法律义务。</p>
		<p>4、PIMS商业版本自购买时刻起，在技术支持期限内拥有通过指定的方式获得指定范围内的技术支持服务。</p>
		<p>5、商业授权用户享有反映和提出意见的权力，相关意见将被作为首要考虑，但没有一定被采纳的承诺或保证。</p>
	    <p>6、未经官方许可，不得对本软件或与之关联的商业授权进行出租、出售、抵押或发放子许可证。</p>
		<p>7、未经官方许可，禁止在 PIMS 的整体或任何部分基础上以发展任何派生版本、修改版本或第三方版本用于重新分发。</p>
				<p><b>协议发布时间：</b> 2011年12月21日</p>
				<p><b>最新版本号：</b> PIMS在线订单管理系统 V4.1正式版</p>
				<p><b>版本最新更新：</b> 2013年06月30日 By diantuo.net</p>
		</div>		</td>
        </tr>
      <tr>
        <td width="16%" height="18" align="right">&nbsp;</td>
        <td width="28%" align="left">&nbsp;</td>
        <td width="56%" align="left">&nbsp;</td>
      </tr>
      
      <tr>
        <td height="30" align="right">数据库主机：</td>
        <td align="left"><input name="host" type="text" id="host" value="localhost" class="inputxt" datatype="*" nullmsg="(数据库主机不能留空)" /></td>
        <td align="left"><div class="Validform_checktip">(一般为localhost)</div></td>
      </tr>
      <tr>
        <td height="30" align="right">数据库名称：</td>
        <td align="left"><input name="dbname" type="text" id="dbname" class="inputxt" datatype="*" nullmsg="(数据库名称不能留空)" /></td>
        <td align="left"><div class="Validform_checktip"></div></td>
      </tr>
      <tr>
        <td height="30" align="right">数据库用户：</td>
        <td align="left"><input name="username" type="text" id="username" class="inputxt" datatype="*" nullmsg="(数据库用户名不能留空)" /></td>
        <td align="left"><div class="Validform_checktip"></div></td>
      </tr>
      <tr>
        <td height="30" align="right">数据库密码：</td>
        <td align="left"><input name="password" type="text" id="password" class="inputxt" datatype="*" nullmsg="(数据库密码不能留空)" /></td>
        <td align="left"><div class="Validform_checktip"></div></td>
      </tr>
      <tr>
        <td height="30" align="right">数据表前缀：</td>
        <td align="left"><input name="qianzui" type="text" id="qianzui" value="pims_"  class="inputxt" datatype="*" nullmsg="(数据库表前缀不能留空)" /></td>
        <td align="left"><div class="Validform_checktip">(如无特殊需要，请不要修改)</div></td>
      </tr>
      <tr>
        <td height="30" align="right">数据库编码：</td>
        <td align="left">UTF-8</td>
        <td align="left">&nbsp;<span class="STYLE2">(目前仅提供utf8通用编码版本，请与前台页面编码统一)</span></td>
      </tr>
      <tr>
        <td height="30" align="right">管理用户名：</td>
        <td align="left"><input name="adminuser" type="text" id="adminuser" value="admin" class="inputxt" datatype="*" nullmsg="(管理用户名不能留空)" /></td>
        <td align="left"><div class="Validform_checktip"></div></td>
      </tr>
      <tr>
        <td height="30" align="right">管理员密码：</td>
        <td align="left"><input name="adminpass" type="text" id="adminpass" class="inputxt" datatype="*" nullmsg="(管理员密码不能留空)" /></td>
        <td align="left"></td>
      </tr>
      <tr>
        <td height="30" align="right">授权域名：</td>
        <td align="left"><input name="domain" type="text" id="domain" value="<?php echo $_SERVER['HTTP_HOST'];?>" readonly="readonly" /></td>
        <td align="left"></td>
      </tr>
      <tr>
        <td height="30" align="right">授权码：</td>
        <td align="left"><input name="passport" type="text" id="passport" class="inputxt" datatype="*" nullmsg="(请联系购买后索取授权码)" /></td>
        <td align="left"><div class="Validform_checktip">(请查看压缩包内key.txt文件或<a href="http://diantuo.net/pro.php" target="_blank">联系购买后索取</a>)</div></td>
      </tr>
      <tr>
        <td height="30" align="right">阅读并同意协议：</td>
        <td align="left"><input name="xieyi" type="checkbox" id="xieyi" value="1" checked="checked" /></td>
        <td align="left">&nbsp;</td>
      </tr>
      <tr>
        <td height="30" colspan="3" align="center"><input type="image" src="img/submit.gif" /></td>
        </tr>
  <tr><td style="height:10px"></td></tr>
    </table></td>
  </tr>
</table>
</form>
</body>
</html>
