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

	?>
	<body>
		<div id="HeadDiv">
			<a href="M_Store.php">
				<div style="width: 20%;text-align: center;float: left;">
					<img id="Logo" src="../img/logo2.png" style="width: 2.9em;"/>
				</div>
			</a>
			<p id="BookName">购物车</font></p>
			<a href="M_Shopper.php">
				<div style="width: 20%;text-align: center;float: left;">
					<img id="Logo" src="../img/Shopper.png" style="width: 2.9em;"/>
				</div>
			</a>
		</div>

		<div id="MainDiv" style="border: 1px solid #d5d5d5;margin-top: 1.5em;padding-top: 1.5em;background-color: #FFFFFF;">
			<div id="HeadInfo" style="padding-left: 1em;padding-right: 1em;margin-bottom: 1em;">
				<p class="StoreTitle" style="margin: 0 auto;" id="MyHeadText">您的选购的书籍如下：</p>
				<hr style="height:1px;border:none;border-top:1px solid #b9b9b9;" />
				<p id="InfoPrice2" style="display: none;">&emsp;&emsp;目前您的购物车为空，可能您还没有选购任何书籍，或者您加入购物车的书籍已经被他人预定，下次要快一点哦！</p>
			</div>
			<table id="ShopList" cellpadding="0px" cellspacing="0px">
				<?php
					$CookieStr = null;
					$conn=mysql_connect('localhost','sql_Name','sql_Password');
					$db=mysql_select_db('sql_Name');
					$Orders = explode("-", $_COOKIE['Order']);
					foreach ($Orders as $Or){
						if ($Or == null) {continue;}
						$result = mysql_query('SELECT * FROM 5sell_bookdata where  Ordered != 1 AND BookIndex = '.$Or ,$conn);
						$row=mysql_fetch_array($result);
						if ($row == null) {continue;}
						$CookieStr = $CookieStr.'-'.$Or;
							echo '<tr style="border: 1px solid #d5d5d5;">';
							$i = $row[BookIndex];
							echo '<td class="Store1">';
							echo '<img src="../img/'.$Or.'/CoverImg.jpg"  class="StoreImg"/>';
							echo '</td>';
							echo '<td class="Store2"><p class="StoreTitle">'.$row[BookTitle].'</p>';
							echo '<p class="StorePrice">￥'.$row[BookPrice].'</p>';
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
							echo '<p class="StoreText" style="width:50%;float:left">科目：'.$MySubject.'</p>';					
							echo '<p class="StoreText" style="width:50%;float:right">新旧：'.$row[Percent].'成</p>';	
							echo '</td>';
							echo '</tr>';
					}
				?>
			</table>
			<div id="OrderForm">
				<p class="StoreTitle">要完成预定 请填写以下信息</p>
				<hr style="height:1px;border:none;border-top:1px solid #b9b9b9;" />
				<table style="width: 100%;">
					<tr>
						<td class="StoreTitle" align="center">姓名</td>
						<td style="width: 80%;"><input type="text" name="" id="MyName" /></td>
					</tr>
					<tr>
						<td class="StoreTitle" align="center">QQ</td>
						<td style="width: 60%;"><input type="text" name="" id="MyQQ" /></td>
					</tr>
				</table>
				<p class="ShopperText" style="width: 95%;margin: 20px auto;">*注：请务必填写真实信息，我们将在您下单后核对您的订单信息，如无法联系到您则订单作废。<br/><font color="red">如果不使用QQ请注明其他联系方式。<br/>如【手机：10086】</font>。</p>
				<div style="overflow: hidden;width: 80%;margin: 0 auto;margin-bottom: 2em;text-align: center;">
					<div id="DeleteButton">清空购物车</div>
					<div id="ConfirmButton">确  定</div>
				</div>
			</div>
			<a href="./M_Store.php">
				<div style="width: 100%;margin-top: 1em;">
					<div align="center" class="BottomBack">返回商城首页</div>
				</div>
			</a>
		</div>
		<div style="margin-top: 1em;"><p style="font-size: 0.8em;font-family: '微软雅黑';" align="center">5Sell旧资料出售活动<br/>联系方式  QQ:  634549062 或 1044067525<br/>加好友请注明目的（买书、卖书或其他）</p></div>
	</body>
</html>

<script language="JavaScript" src="../js/M_Shopper.js"></script>
<script language="JavaScript">
	var ConfirmButton = document.getElementById("ConfirmButton");
	var MyQQ=document.getElementById("MyQQ");
	var MyName=document.getElementById("MyName");
	var MyOrderList = document.getElementById("ShopList");
	var InfoPrice2 = document.getElementById("InfoPrice2");
	var OrderForm = document.getElementById("OrderForm");
	var BackButton = document.getElementById("BackButton");
	var MyHeadText = document.getElementById("MyHeadText");
	
	ConfirmButton.onmousemove = function()
	{
		ConfirmButton.style.backgroundColor = "#c3a0d9";
	}
	
	ConfirmButton.onmouseout = function(){
		ConfirmButton.style.backgroundColor = "#A97CCA";
	}
	
	ConfirmButton.onclick = function(){
		var MyQQLength= MyQQ.value.length;
		var MyNameLength= MyName.value.length;
		if (MyQQLength == 0 || MyNameLength==0){
			alert("请完善信息。");
			return;
		}
		window.location.href="./M_ProcessMode.php?MyQQ=" + MyQQ.value +"&MyName=" +MyName.value +"&List=" + "<?php echo $CookieStr ?> ";
	}
	var i = MyOrderList.rows.length;
	
	if (i==0){
		MyHeadText.innerText="抱歉";
		InfoPrice2.style.display="block";
		MyOrderList.style.display="none";
		OrderForm.style.display="none";
		BackButton.style.display="block";
	}

</script>