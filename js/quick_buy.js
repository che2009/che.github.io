function check_quick_buy() {
    var form_quick_buy = document.forms['quick_buy'];
	var goods_id = form_quick_buy.elements['goods_id'].value;
    var consignee = form_quick_buy.elements['consignee'].value;
	var country = form_quick_buy.elements['country'].value;
	var province = form_quick_buy.elements['province'].value;
	var city= form_quick_buy.elements['city'].value;
	var district = form_quick_buy.elements['district'].value;
    var address = form_quick_buy.elements['address'].value;
    var mobile = form_quick_buy.elements['mobile'].value;
    var email = form_quick_buy.elements['email'].value;
    var count = form_quick_buy.elements['count'].value;
    var msg = '';
    if (consignee == '') {
        msg += '收货人姓名不能为空\n';
    }

	if (country == '0' || province == '0' || city == '0' || district =='0') {
        msg += '所在地区不完整\n';
    }

    if (address == '') {
        msg += '收货人地址不能为空\n';
    }
    if (mobile == '') {
        msg += '收货人手机号码不能为空\n';
    } else {
        if (!(/^0*(13|15|18)\d{9}$/.test(mobile))) {
            msg += '手机号码格式不对\n';
        }
    }
    if (email != '')
	{
        var reg1 = /([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)/;
        if (!reg1.test(email)) {
            msg += 'Email输入格式不对\n';
        }
    }
    if (count == '')
	{
        msg += '必须输入购买数量';
    }
	else
	{
        if (! (/(\d)+/.test(count) ))
		{
            msg += '购买数量必须输入整数' + '\n';
        }
    }
    var payment = document.getElementById("payment");
    var pv = payment.options[payment.selectedIndex].value;
    if (pv == '') {
        msg += '请选择支付方式' + '\n';
    }
    if (msg)
	{
        alert(msg);
        return false;
    }
	else
	{
		var goods        = new Object();
		var formBuy      = document.forms['ECS_FORMBUY'];
		// 检查是否有商品规格 
	  if (formBuy)
	  {
		spec_arr = getSelectedAttributes(formBuy);
	  }
	  goods.spec     = spec_arr;
	  goods.goods_id = goods_id ;
	  goods.number   = count;	  
	  form_quick_buy.elements['qgoods'].value = goods.toJSONString();
        return true;
    }
}
//快速订购
function quick_buy_show(){
	html = document.documentElement;
	var bgObj = document.createElement("div");
	if(document.body.scrollHeight>document.documentElement.clientHeight)
	{
	    bg_heght = document.body.scrollHeight + "px";	
	}
	else
	{
	   bg_heght = Math.max(document.body.clientHeight, html.clientHeight) + "px";	
	}
	
    document.body.appendChild(bgObj)
	
	bgObj.setAttribute("id","bgbox");
	bgObj.style.width = html.clientWidth + "px";
	bgObj.style.height =bg_heght;
	document.body.appendChild(bgObj);
	var oShow = document.getElementById('show');	
	document.getElementById('show').id="oshow";
	oShow.style.display = 'block';
	box = document.getElementById('oshow');
	boxWidth = oShow.offsetWidth,
    boxHeight = oShow.offsetHeight,
	setPos();
    getPos();
	function oClose(){
	//oShow.style.display = 'none';
	oClosebtn.innerHTML = "";
	document.getElementById('oshow').id="show";
	document.getElementById('show').style.marginLeft='0px';	
	document.getElementById('show').style.marginTop='0px';
	document.body.removeChild(bgObj);
	}
	var oClosebtn = document.createElement("span");
	oClosebtn.innerHTML = "<input type='button' title='关闭窗口' class='close' value='关闭' />";
	oShow.appendChild(oClosebtn);
	oClosebtn.onclick = oClose;
	bgObj.onclick = oClose;
	changeMsgPrice();
}

        
        
// 设置位置
function setPos() {
	
		// 可视窗口
	var htmlWidth = html.clientWidth;
	 var htmlHeight = html.clientHeight;

		// margin 值
		var marginX = htmlWidth > boxWidth ? -(boxWidth/2) :0;
		var marginY = htmlHeight > boxHeight ? document.documentElement.scrollTop-(boxHeight/2) : 0;
	
		// 可视宽度如果太小，要注意让内容能完整显示出来
		var left = marginX == 0 ? 0 : '50%';
		var  top = marginY == 0 ? 0 : '50%';

		box.style.left = left;
		box.style.top = top;
		box.style.marginLeft = marginX + 'px';
		box.style.marginTop = marginY + 'px';
}

// 找到位置
  function getPos() {
	var box = document.getElementById('oshow');
	var curLeft =0, curTop = 0, obj = box;
	if (obj.offsetParent) {
		while (obj.offsetParent) {
			curLeft += box.offsetLeft;
			curTop += box.offsetTop;
			obj = obj.offsetParent;
		}
	}
}

function changeMsgPrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty ;
  var goods_id = document.forms['quick_buy'].elements['goods_id'].value;

	qty = document.getElementById('count').value;
	qty = qty>1?qty:1;  
    Ajax.call('goods.php', 'act=price&id=' + goods_id  + '&attr=' + attr + '&number=' + qty, changeMsgPriceResponse, 'GET', 'JSON');
}

function changeMsgPriceResponse(res)
{
	  if (res.err_msg.length > 0)
	  {
		alert(res.err_msg);
	  }
	  else
	  {
		  var number=res.qty ;
		  var result=res.result ;
		  changeMsgValue(number,result);
	  }
}
function changeMsgValue(num,price)
{
	if(document.getElementById('count'))
	{
	    document.getElementById('count').value=num;
	}
	if(document.getElementById('msg_price'))
	{
	    document.getElementById('msg_price').value=price;
	}
}