<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>kche.cc_上网搜索导航从这里开始</title>
<meta name="keywords" content="搜索导航,导航网址,kche.cc上网导航" />
<meta name="description" content="kche.cc是2015年最新的中文搜索导航，汇集最优秀中文搜索引擎。点击一次搜索就能查看所的搜索引擎检索的结果，让您的网络生活更简单精彩。上网，从kche.cc开始。" />
<meta name="Copyright" content="版权所有" />
<script type="text/javascript" src="js/base.js"></script>
<script type="text/javascript" src="js/UniSearch.js"></script>
<script type="text/javascript" src="js/UniSearchData.js"></script>
<script type="text/javascript" src="js/UniSearchInput.js"></script>
<script type="text/javascript" src="js/gb2312.js"></script>
<script type="text/javascript" src="js/modernizr.custom.js"></script>

<link href="./css/tabs.css" rel="stylesheet" type="text/css" />
<link href="./css/tabstyles.css" rel="stylesheet" type="text/css" />
<link href="./newcss/style.css" rel="stylesheet" type="text/css" />
</head>

<body scroll="no" onload="UniSearchBase.init();">
<div class="wrapper">
<!--头部文开始件-->
<header class="header" id="header">
<div class="innerHeader">
	
<div class="searchCon">
<div class="title-menu" id="titleMenu">&nbsp;</div>
<!--<h3>
	
<a href="http://search.myuedu.net/" id="set_home" onmouseover="" onmouseout="" onclick=""></a>

<a href="javascript:void(9)" onmouseover="" onmouseout="" id="add_fav"></a>
<a href="javascript:void(8)" onmouseover="" onmouseout="" id="set_lang"></a>
<a href="javascript:void(7)" onmouseover="" onmouseout="" id="setup"></a>
</h3>-->
<div class="clear"></div>
<!--  <img src="theme/google2011/images/logo.png"/>
				<a href="#"><div class="logo"></div></a>-->
				<a href="./"><div class="logo"></div></a>
				<span id='searchImgTop'></span>
				<div class="searchText">
				  <input name="text" type="text" class="searchBox" id="keyword" />
		<span class="spBut" id='searchBut' onclick="UniSearchBase.searchWoooord()" title=""></span>
		<!-- QQ输入框提示 -->
		<!--
		<span class="imeBut" id='imeBut' onmouseover="UniSearchBase.showDom('Tips');" onmouseout="UniSearchBase.styHidDom('Tips');" onclick="javascript:(function(q){!!q?q.toggle():(function(d,j){j=d.createElement('script');j.src='//ime.qq.com/fcgi-bin/getjs';j.setAttribute('ime-cfg','lt=2');d.getElementsByTagName('head')[0].appendChild(j)})(document)})(window.QQWebIME)" title=""></span>-->

		<div class="searchWord" id="SearKeys" style="display:none"></div>
				</div>
				<!--记录用户搜索习惯 -->
				<!--
				<div class="historyBut" id="historyBut" onclick="UniSearchBase.showDom('historyBut')"></div>
						-->
						</div>
						</div>
						</header>
						<!--头部文件结束-->
						<!-- tips -->
						<!-- QQ输入框提示 -->
						<!--
						<div id="Tips">
						<div class="tipsContent">
						<div class="ico"></div>
						<div class="title" id="TipsTitle"></div>
						<div class="close"><a id="TipsClose" onclick="UniSearchBase.styHidDom('Tips');"></a></div>
						</div>
						</div>
						-->
						<!-- end tips -->
						<!-- nav -->
	<nav class="navPanel" id="headerNav">
	<div class="innerNavPanel">
			<div class="buttons" id="searches"></div>
			<div class="newSpan" id="addPreferDom" style="display:none" onclick="UniSearchBase.getCurSearchSatus()">
			<!-- 移动到网页搜索选项卡 -->
			<!--
			<img src="theme/google2011/images/btn_add_to_prefered.png" id="addPreferImg" width="16" height="16" alt="添加到首选" />
			-->
			</div>
			<!-- 导航栏增加自定义选项 -->
		
					<span id="searchConfig" class="adddPrefered" style="display:none" onclick="UniSearchBase.showDom('perConfigCon')">
			<!--
			<img src="theme/google2011/images/btn_new_prefered.png" id="newPreferImg" width="16" height="16" alt="" />
								
							<h6 id="selfCon"></h6>
							-->
								
							</span>
								
							</div>
							<div class="clear"></div>
	</nav>
							<!-- end nav -->

	<!--Effect-->
							<div class="effect" id="effect" style="display:none"></div>
	<!--Effect-->

							<!--note文件开始-->

							<!--<footer id="noteWrapper" class="note" style="display:none">
		  <p id="note"></p>
		<hr/>
							<p align="center">
							</p>
		<p style="color:#999999;" align="center">广告</p>-->
							<br/>
							<footer id="noteWrapper"  style="display:none">
						<?php require 'dhy.html';?>
							
						

<!--  
							<section>
		<div class="tabs tabs-style-bar">
							<nav>
							<ul>
							<li><a href="#section-bar-1" ><span>休闲一刻</span></a></li>
					<li><a href="#section-bar-2" ><span>站内推荐</span></a></li>
		
					
		
			
	
							
							</ul>
							</nav>
							<div class="content-wrap">
							<section id="section-bar-1">
						
  	<?php #require 'temple/free.html';?>
							
          </section>
							<section id="section-bar-2">
		<div class="test_box" contenteditable="true">
		<?php #require 'temple/2015-02-01.html';?>
		</div> 
							</section>
						
						
							
							</div>
		</div>
							</section>-->
								<!-- 分享代码 -->
				<?php require 'temple/share.html';?>

	</footer>

							<!--note文件结束-->
	<iframe width='0' height='0' frameborder='0' id="iframeDom" style="display:none" src="about:blank"></iframe>
	<!--搜索历史记录-->
	<div class="hisDom" id="hisDom" style="display:none"><a class="hisItemDel" id="doCookie"></a><div class="clear"></div></div>
							<!--搜索历史记录-->
							<div class="options" style="display:none" id="options">
							<h3 id="opt_title"></h3>
			<p>
							<span id="txt_opt_lang"></span>:
							<select id="opt_lang" onchange="UniSearchBase.onchangeLang();"><option selected="selected" value="zh-cn">简体中文</option><option value="en-us">English</option><option value="fr-fr">Français</option></select>
							<div class="clear"></div>
							<input type="button" value="" id="opt_butSave" class="butt" onclick="UniSearchBase.changeLanguage();" /><input type="button" id="opt_butCancel" value="" class="butt" onclick="UniSearchBase.styHidDom('options');"  />
							</p>
							</div>
	<div class="perConfigCon" id="perConfigCon" style="display:none">
		<h3 id="custom_prefer"></h3>
							<table width="100%" cellpadding="0" cellspacing="8" border="0" class="tableConfig">
							<tr>
			<td width="50%"><strong id="custom_curr"></strong><span><a href="#" onclick="navPrefer.preferDef()" id="custom_def"></a></span><span id="muveImg" style="display:none"><img width="16" height="16" src="theme/google2011/images/btn_up.png" alt="Move Up" class="spanImg" onclick="navPrefer.moveUp()" /><img width="16" height="16" src="theme/google2011/images/btn_down.png" alt="Move down" class="spanImg" onclick="navPrefer.moveDown()" /></span></td>
			<td width="50%"><b id="custom_list"></b></td>
		  </tr>
							<tr>
			<td width="50%">
							<div class="preferList" id="preferList"></div>
			</td>
			<td width="50%">
							<div class="pref erListC" id="searchListAll"></div>
							</td>
							</tr>
							</table>
							<input type="button" id="custom_butSave" value="保存" class="butt" onclick="navPrefer.saveConfig();nevTit.readyCreate['prefer'].newCreat(navPrefer.returnNewPrefer());UniSearchBase.savePre()" /><input type="button" id="custom_butCancel" value="取消" class="butt" onclick="navPrefer.cancleDom();UniSearchBase.styHidDom('perConfigCon');"  />
	</div>
	<div class="moreConMain" id="moreConMain" style="display:none"></div>
	<div class="moreBg1" id="moreBg1" style="display:none"></div>
	<?php require_once 'daohang.html';?>

</div>
<div style=" display:none"><img src="" id="keyWordsSubmit" width="1" height="1" alt="UnionSearch"/></div>
<?php require_once 'footer.html';?>
<script type="text/javascript" src="js/cbpFWTabs.js"></script>
<script type="text/javascript">
(function() {

	[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
		new CBPFWTabs( el );
	});

})();

</script>

<!-- kche.cc Baidu tongji analytics -->
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F13fcecc4e1fc58d2b34fc740c59fd910' type='text/javascript'%3E%3C/script%3E"));
</script>

</body>
</html>
