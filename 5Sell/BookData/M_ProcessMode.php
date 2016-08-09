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
		<meta charset="utf-8" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="../css/M_Store.css"/>
	</head>
	
	<body>
		<div id="HeadDiv">
			<a href="M_Store.php">
				<div style="width: 20%;text-align: center;float: left;">
					<img id="Logo" src="../img/logo2.png" style="width: 2.9em;"/>
				</div>
			</a>
			<p id="BookName">订    单</font></p>
			<a href="M_Shopper.php">
				<div style="width: 20%;text-align: center;float: left;">
					<img id="Logo" src="../img/Shopper.png" style="width: 2.9em;"/>
				</div>
			</a>
		</div>

		<div id="MainDiv" style="border: 1px solid #d5d5d5;margin-top: 1.5em;padding-top: 1.5em;background-color: #FFFFFF;">
			<div id="HeadInfo" style="padding-left: 1em;padding-right: 1em;margin-bottom: 1em;">
				<p class="StoreTitle" style="margin: 0 auto;" id="MyHeadText">订单提交成功</p>
				<hr style="height:1px;border:none;border-top:1px solid #b9b9b9;" />
				<p id="InfoPrice2">&emsp;&emsp;我们的工作人员将尽快按照您提供的联系方式联系您，您的订单在3天内有效，如果无法联系到您那么我们将取消订单，所以请保持联系方式可靠畅通。</p>
				<a href="./M_Store.php">
					<div style="width: 100%;">
						<div align="center" class="BottomBack">返回商城首页</div>
					</div>
				</a>
			</div>
		</div>
	</body>
</html>