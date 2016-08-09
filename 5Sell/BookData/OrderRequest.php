<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link type="text/css" rel="stylesheet" href="../css/DataStyle.css"/>
	</head>
	
	<body onload="Loaded()">
		<div id="HeadLine">
			<div id="HeadGuide">
				<div style="width: 100%;"></div>
				<a href="../5index.html"><img id="Logo" src="../img/logo.png" style="line-height: 50px;"/></a>
				<p align="center" id="Connect">联系我们</p>
				<div id="Shopper">购物车</div>
			</div>
		</div>
		<div class="BlankDiv"></div>
		<div class="MContain">
			<div style="width: 90%;margin: 0 auto;">
				<div class="BlankDiv"></div>
				<p id="InfoTtile">Order successful!</p>
				<p id="InfoPrice">Please keep your qrcode.</p>
				<hr style="height:1px;border:none;border-top:1px solid #b9b9b9;" />
				<div class="BlankDiv-Small"></div>
				<table id="QRTable">
					<tr>
						<td style="width: 70%;">
							<p class="StoreTitle">Here is your QRCode</p>
						</td>
						<td style="width: 30%;">
							<div style="width: 300px;height: 300px;border-radius: 10px;-webkit-box-shadow: #666 0px 0px 10px;">
								<img id="QRCodeImg" style="line-height: 300px;width: 300px;"/>
							</div>
						</td>
					</tr>
				</table>
				<div class="BlankDiv"></div>
			</div>
		</div>
		<div class="BlankDiv"></div>
		<p style="font-size: 15px;font-family: '微软雅黑';" align="center">5Sell旧资料出售活动 联系方式 hawkinszhao@outlook.com QQ:1044067525</p>
	</body>
</html>

<script language="JavaScript" src="../js/HeadEvent.js"></script>
<script language="JavaScript">
	function GetQueryString(name)
	
	{
	
	     var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
	
	     var r = window.location.search.substr(1).match(reg);
	
	     if(r!=null)return  unescape(r[2]); return null;
	
	}
	var QRCodeImg = document.getElementById("QRCodeImg");
	alert(GetQueryString("Order"));
	QRCodeImg.src="http://qr.liantu.com/api.php?text=OrderCode:%0A"+GetQueryString("Order");
	
	function Loaded(){
		alert(<?php echo "12323";?>);
	}
</script>