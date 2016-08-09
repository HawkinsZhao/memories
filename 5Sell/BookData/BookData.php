<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link type="text/css" rel="stylesheet" href="../css/DataStyle.css"/>
	</head>
	
	<body>
		<?php
			$conn=mysql_connect('localhost','sql_Name','sql_Password');
			$db=mysql_select_db('sql_Name');
			$result = mysql_query('SELECT * FROM 5sell_bookdata where BookIndex = '.$_GET['index'] ,$conn);
			$row=mysql_fetch_array($result);
		?>
	
		<div id="HeadLine">
			<div id="HeadGuide">
				<div style="width: 100%;"></div>
				<a href="../5index.html"><img id="Logo" src="../img/logo.png" style="line-height: 50px;"/></a>
				<a href="../contact.html"><p align="center" id="Connect">联系我们</p></a>
				<div id="Shopper">购物车</div>
				<div id="ShopperInfo">
					<p class="StoreListTitle" style="margin-top: 25px;width: 100%;text-align: left;margin-left: 25px;">已加入购物车</p>
					<a href="./Store.php">
						<div style="width: 50%;float: left;">
							<div align="center" class="BottomBack" style="width: 80%;">返回商城</div>
						</div>
					</a>
					<a href="./Shopper.php">
						<div style="width: 50%;float: left;">
							<div align="center" class="BottomBack" style="width: 80%;">前往购物车</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="BlankDiv"></div>
		<div class="MContain" style="min-width: 950px;">
			<div style="width: 90%;margin: 0 auto;">
				<div class="BlankDiv"></div>
					<table id="BookInfo">
						<tr>
							<td id="BITd1">
								<img id="CoverImg" style="width: 100%;min-width: 360px;"/>
							</td>
							<td id="BITd2">
								<div class="PDiv">
									<table width="100%">
										<tr>
											<td style="width: 70%;"><p id="InfoTtile"><?php echo $row[BookTitle] ?></p></td>
											<td style="width: 30%;"><div id="OrderButton" title="点击预定-加入购物车">加入购物车</div></td>
										</tr>
									</table>
									<hr style="height:1px;border:none;border-top:1px solid #b9b9b9;" />
									<table>
										<tr>
											<td id="PriceInfo1">价格</td>
											<td id="PriceInfo2"><?php echo $row[BookPrice] ?></td>
											<td id="PriceInfo3">全新品零售价</td>
											<td id="PriceInfo4"><?php echo $row[NewPrice] ?></td>
										</tr>
									</table>
									<hr style="height:1px;border:none;border-top:1px solid #b9b9b9;" />
									<br />
									<p id="InfoDes"><?php echo $row[BookDes] ?></p>
								</div>
							</td>
						</tr>
					</table>
					<div class="BlankDiv"></div>
				</div>
			</div>
		<div class="BlankDiv"></div>
		<?php
			mysql_close($conn)
		?>		
		
		<div class="MContain" style="min-width: 950px;">
			<div style="width: 90%;margin: 0 auto;margin-top: 40px;">
				<div id="ImgDiv">
					<p id="PicTtile">更多介绍</p>
				</div>
				<hr style="height:1px;border:none;border-top:1px solid #b9b9b9;" />
				<img id="IT1" style="width: 100%;"/>
				<img id="IT2" style="width: 49.8%; float:left"/>
				<img id="IT3" style="width: 49.8%;float: right;"/><br/>
				<img id="IT4" style="width: 49.8%; float:left"/>
				<img id="IT5" style="width: 49.8%;float: right;"/>
				<img id="IT6" style="width: 100%;margin-bottom: 40px;margin-top: 5px;"/>
				<a href="./Store.php">
					<div style="width: 100%;">
						<div align="center" style="width: 30%;margin: 0 auto;margin-bottom: 40px;border-radius: 5px;border: 1px solid #A97CCA;height: 35px;line-height:35px;background-color: #A97CCA;color: #FFFFFF;font-size: 20px;font-family: '微软雅黑';">返回商城首页</div>
					</div>
				</a>
			</div>
		</div>
		<div class="BlankDiv"></div>
		<p style="font-size: 15px;font-family: '微软雅黑';" align="center">5Sell旧资料出售活动 <br/>联系方式  QQ:  634549062 或 1044067525 加好友请注明目的（买书、卖书或其他）</p>
	</body>
</html>
<script language="JavaScript" src="../js/DataMethod.js"></script>
<script language="JavaScript" src="../js/ControlEvent.js"></script>
<script language="JavaScript" src="../js/HeadEvent.js"></script>