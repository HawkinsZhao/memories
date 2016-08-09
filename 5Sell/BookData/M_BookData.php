<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="../css/M_Store.css"/>
	</head>
	<?php
		$conn=mysql_connect('localhost','sql_Name','sql_Password');
		$db=mysql_select_db('sql_Name');
		$result = mysql_query('SELECT * FROM 5sell_bookdata where BookIndex = '.$_GET['index'] ,$conn);
		$row=mysql_fetch_array($result);
		$MySubject = $row[Subject] ;
		switch ($MySubject){
			case "Chinese":
				$MySubject = "语文";
				break;
			case "English":
				$MySubject = "英语";
				break;
			case "Math":
				$MySubject = "数学";
				break;
			case "Physic":
				$MySubject = "物理";
				break;
			case "Chem":
				$MySubject = "化学";
				break;
			case "LiZong":
				$MySubject = "理综";
				break;
			case "Biology":
				$MySubject = "生物";
				break;
			case "History":
				$MySubject = "历史";
				break;
			case "Pol":
				$MySubject = "政治";
				break;
			case "Geography":
				$MySubject = "地理";
				break;
			case "WenZong":
				$MySubject = "文综";
				break;
		}
	?>
	<body>
		<div id="BottomDisplay">
			<p class="StoreTitle" style="font-size: 1.5em;margin-top: 1em;margin-left: 1em;">成功加入购物车</p>
			<a href="./M_Store.php">
				<div style="width: 50%;float: left;">
					<div align="center" class="BottomBack" style="width: 80%;">返回商城</div>
				</div>
			</a>
			<a href="./M_Shopper.php">
				<div style="width: 50%;float: left;">
					<div align="center" class="BottomBack" style="width: 80%;">前往购物车</div>
				</div>
			</a>
		</div>
		<div id="HeadDiv">
			<a href="M_Store.php">
				<div style="width: 20%;text-align: center;float: left;">
					<img id="Logo" src="../img/logo2.png" style="width: 2.9em;"/>
				</div>
			</a>
			<p id="BookName"><?php echo $row[BookTitle] ?></font></p>
			<a href="M_Shopper.php">
				<div style="width: 20%;text-align: center;float: left;">
					<img id="Logo" src="../img/Shopper.png" style="width: 2.9em;"/>
				</div>
			</a>
		</div>
		<div style="width: 100%;background-color: #FFFFFF;text-align: center;">
			<img src=<?php echo "../img/".$_GET['index']."/CoverImg.jpg" ?> style="width: 50%;padding: 1em;"/>
		</div>
		<div id="MInfoDes">
			<div style="overflow: hidden;width: 100%;">
				<p class="StoreTitle" align="left" style="margin-left: 1em;font-size: 1.5em;float: left;"><font style="color: red;">￥<?php echo $row[BookPrice] ?></font></p>
				<div id="OrderButton" align="center">加入购物车</div>
			</div>
			<div style="overflow: hidden;text-align: center;margin-left: 1.5em;margin-top: 1.2em;">
				<p class="MListItemText" style="width: 50%;">科目：<?php echo $MySubject ?></p>
				<p class="MListItemText" style="width: 50%;">新旧：<?php echo $row[Percent] ?>成</p>
			</div>
			<p class="MListItemText" style="width:50%;margin-left: 1.5em;">全新品零售价：￥<?php echo $row[NewPrice] ?></p>
			<p class="MListItemText" style="width:90%;color: #393939;margin-left:1.5em;margin-top: 0.5em;"><?php echo $row[BookDes] ?></p>
		</div>
		<div id="MMoreDes">
			<p style="text-align: left;margin-left: 2.5em;font-size: 1em;">更多介绍<font style="font-size: 0.6em;">（点击图片看大图）</font></p>
			<hr style="height:1px;border:none;border-top:1px solid #b9b9b9;width: 90%;" />
			<a href=<?php echo "http://5sell.hawkinscode.com/img/".$_GET['index']."/0.jpg" ?> target="_blank"><img src=<?php echo "../img/".$_GET['index']."/0.jpg" ?> style="width: 90%;"/></a>
			<div style="overflow: hidden;width: 90%;margin: 0 auto;">
				<a href=<?php echo "http://5sell.hawkinscode.com/img/".$_GET['index']."/1.jpg" ?> target="_blank"><img src=<?php echo "../img/".$_GET['index']."/1.jpg" ?> style="cursor: pointer;width: 49.7%;float: left;text-align: center;"/></a>
				<a href=<?php echo "http://5sell.hawkinscode.com/img/".$_GET['index']."/2.jpg" ?> target="_blank"><img src=<?php echo "../img/".$_GET['index']."/2.jpg" ?> style="float: right;width: 49.7%;text-align: center;" /></a>
			</div>
			<div style="overflow: hidden;width: 90%;margin: 0 auto;">
				<a href=<?php echo "http://5sell.hawkinscode.com/img/".$_GET['index']."/3.jpg" ?> target="_blank"><img src=<?php echo "../img/".$_GET['index']."/3.jpg" ?> style="cursor: pointer;width: 49.7%;float: left;text-align: center;"/></a>
				<a href=<?php echo "http://5sell.hawkinscode.com/img/".$_GET['index']."/4.jpg" ?> target="_blank"><img src=<?php echo "../img/".$_GET['index']."/4.jpg" ?> style="float: right;width: 49.7%;text-align: center;" /></a>
			</div>
			<a href=<?php echo "http://5sell.hawkinscode.com/img/".$_GET['index']."/5.jpg" ?> target="_blank"><img src=<?php echo "../img/".$_GET['index']."/5.jpg" ?> style="width: 90%;margin-top: 0.2em;"/></a>
			<a href="./M_Store.php">
				<div style="width: 100%;">
					<div align="center" class="BottomBack">返回商城首页</div>
				</div>
			</a>
		</div>
		<div style="margin-top: 1em;"><p style="font-size: 0.8em;font-family: '微软雅黑';" align="center">5Sell旧资料出售活动<br/>联系方式  QQ:  634549062 或 1044067525<br/>加好友请注明目的（买书、卖书或其他）</p></div>
	</body>
</html>

<script language="JavaScript" src="../js/DataMethod.js"></script>
<script language="JavaScript" src="../js/M_ControlEvent.js"></script>
