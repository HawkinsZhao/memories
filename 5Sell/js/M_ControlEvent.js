var OrderButton = document.getElementById("OrderButton");

function SetCookie(name,value)//两个参数，一个是cookie的名子，一个是值
{
    var Days = 30; //此 cookie 将被保存 30 天
    var exp  = new Date();    //new Date("December 31, 9998");
    exp.setTime(exp.getTime() + Days*24*60*60*1000);
    document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString();
}

function getCookie(name)//取cookies函数        
{
    var arr = document.cookie.match(new RegExp("(^| )"+name+"=([^;]*)(;|$)"));
     if(arr != null) return unescape(arr[2]); return null;

}


OrderButton.onmousedown = function(){
	//delCookie("Order");
	var Oe= getCookie("Order");
	if (Oe != null) {
		var strs= new Array();
		strs = Oe.split("-");
		for (i=0;i<strs.length ;i++ ) {
			if (strs[i]==Request["index"]){
				alert("请到右上角的购物车中结算");
				return ;
			}
		}
		SetCookie("Order",getCookie("Order") +  "-" +Request["index"]);
		OrderButton.innerText="已加入购物车";
		var BottomDisplay = document.getElementById("BottomDisplay");
		BottomDisplay.style.display="block";
	}
	else{
		SetCookie("Order","-" +Request["index"]);
		OrderButton.innerText="已加入购物车";
		var BottomDisplay = document.getElementById("BottomDisplay");
		BottomDisplay.style.display="block";
	}
	
}

	var Oe= getCookie("Order");
	if (Oe != null) 
	{
		var strs= new Array();
		strs = Oe.split("-");
		for (i=0;i<strs.length ;i++ ) {
			if (strs[i]==Request["index"]){
				OrderButton.innerText="已加入购物车";
			}
		}
	}
