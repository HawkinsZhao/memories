<?php
	$List = $_GET['List'];
	$MyName= $_GET['MyName'];
	$MyQQ= $_GET['MyQQ'];
	$conn=mysql_connect('localhost','sql_Name','sql_Password');
	$db=mysql_select_db('sql_Name');
	mysql_query("INSERT INTO `sql_Name`.`5sell_orderlist` (`Time`, `List`, `QQ`, `Name`) VALUES ('".date('y-m-d H:i:s',time())."', '".$List."', '".$MyQQ."', '".$MyName."');");
	$Orders = explode("-",$List);
	foreach ($Orders as $Or){
		mysql_query("UPDATE `sql_Name`.`5sell_bookdata` SET `Ordered` = '1' WHERE `5sell_bookdata`.`BookIndex` = ".$Or);
	}
	setcookie('Order',null);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link type="text/css" rel="stylesheet" href="../css/DataStyle.css"/>
	</head>
	
	<body>
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
				<p id="InfoTtile">订单提交成功</p>
				<hr style="height:1px;border:none;border-top:1px solid #b9b9b9;" />
				<p id="InfoPrice" style="margin-bottom: 30px;">&emsp;&emsp;我们的工作人员将尽快按照您提供的联系方式联系您，您的订单在3天内有效，如果无法联系到您那么我们将取消订单，所以请保持联系方式可靠畅通。</p>
				<a href="./Store.php">
					<div style="width: 100%;">
						<div align="center" style="width: 30%;margin: 0 auto;margin-bottom: 40px;border-radius: 5px;border: 1px solid #A97CCA;height: 35px;line-height:35px;background-color: #A97CCA;color: #FFFFFF;font-size: 20px;font-family: '微软雅黑';">返回商城首页</div>
					</div>
				</a>
			</div>
		</div>
	</body>
</html>