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
				<p id="InfoTtile">购物车</p>
				<p id="InfoPrice">*若购物车无法使用请打开浏览器的Cookie设置 若有问题请 <a href="contact.html"><font style="color: #A97CCA;">联系我们</font></a></p>
				<hr style="height:1px;border:none;border-top:1px solid #b9b9b9;" />
				<p id="InfoPrice2" style="display: none;font-size: 20px;">&emsp;&emsp;抱歉，目前您的购物车为空，可能您还没有选购任何书籍，或者您加入购物车的书籍已经被他人预定，下次要快一点哦！</p>
				<div class="BlankDiv-Small"></div>
				<table id="ShopList" cellpadding="0px" cellspacing="0px" style="border: 1px solid #d5d5d5;">
					<tr >
						<td class="TableHead" style="width: 12%;">书籍</td>
						<td class="TableHead" style="width: 33%;">名称</td>
						<td class="TableHead" style="width: 15%;">价格</td>
						<td class="TableHead" style="width: 40%;">新旧</td>
					</tr>
					<?php
						if ($_COOKIE['Order'] == null){
							//setcookie('Order','&0');
						}
						$CookieStr = null;
						$conn=mysql_connect('localhost','sql_Name','sql_Password');
						$db=mysql_select_db('sql_Name');
						$Orders = explode("-", $_COOKIE['Order']);
						$j=0;
						foreach ($Orders as $Or){
							if ($Or == null) {continue;}
							$result = mysql_query('SELECT * FROM 5sell_bookdata where  Ordered != 1 AND BookIndex = '.$Or ,$conn);
							$row=mysql_fetch_array($result);
							if ($row == null) {continue;}
							$CookieStr = $CookieStr.'-'.$Or;
							echo "<tr>";
							if ($j % 2 ==0){
								echo '<td class="TableText-eee"><img style="width: 80%;margin: 10px;" src="../img/'.$Or.'/CoverImg.jpg"/></td>';
								echo '<td class="TableText-eee">'.$row[BookTitle].'</td>';
								echo '<td class="TableText-eee"><font color="red">'.$row[BookPrice].'</font></td>';
								echo '<td class="TableText-eee">'.$row[Percent].'成</td>';
							}
							else{
								echo '<td class="TableText-fff"><img style="width: 80%;margin: 10px;" src="../img/'.$Or.'/CoverImg.jpg"/></td>';
								echo '<td class="TableText-fff">'.$row[BookTitle].'</td>';
								echo '<td class="TableText-fff"><font color="red">'.$row[BookPrice].'</font></td>';
								echo '<td class="TableText-fff">'.$row[Percent].'成</td>';
							}
							echo "</tr>";
							$j++;
						}
					?>
				</table>
				<div class="BlankDiv"></div>
				<div id="OrderForm">
					<p id="FormTitle">要完成预定 请填写以下信息</p>
					<hr style="height:1px;border:none;border-top:1px solid #b9b9b9;" />
					<table style="width: 100%;">
						<tr>
							<td class="FormText" align="center">姓名</td>
							<td style="width: 60%;"><input type="text" name="" id="MyName" /></td>
						</tr>
						<tr>
							<td class="FormText" align="center">QQ</td>
							<td style="width: 60%;"><input type="text" name="" id="MyQQ" /></td>
						</tr>
					</table>
					<p style="width: 95%;margin: 20px auto;" align="right">*注：请务必填写真实信息，我们将在您下单后核对您的订单信息，如无法联系到您则订单作废。<br/>如果不使用QQ请注明其他联系方式,如【手机：10086】。</p>
					<div id="ConfirmButton" title="点击预定-加入购物车">确  定</div>
					<div id="DeleteButton" title="点击预定-加入购物车">清空购物车</div>
				</div>
				<a href="./Store.php">
					<div id="BackButton" style="width: 100%;display: none;">
						<div align="center" style="width: 30%;margin: 10px auto;border-radius: 5px;border: 1px solid #A97CCA;height: 35px;line-height:35px;background-color: #A97CCA;color: #FFFFFF;font-size: 20px;font-family: '微软雅黑';">返回商城首页</div>
					</div>
				</a>
				<div class="BlankDiv"></div>
				<div class="BlankDiv"></div>
			</div>
		</div>
	</body>
</html>

<script language="JavaScript" src="../js/HeadEvent.js"></script>
<script language="JavaScript" src="../js/Shopper.js"></script>
<script language="JavaScript">
	var ConfirmButton = document.getElementById("ConfirmButton");
	var MyQQ=document.getElementById("MyQQ");
	var MyName=document.getElementById("MyName");
	var MyOrderList = document.getElementById("ShopList");
	var InfoPrice2 = document.getElementById("InfoPrice2");
	var OrderForm = document.getElementById("OrderForm");
	var BackButton = document.getElementById("BackButton");
	
	ConfirmButton.onclick = function(){
		var MyQQLength= MyQQ.value.length;
		var MyNameLength= MyName.value.length;
		if (MyQQLength == 0 || MyNameLength==0){
			alert("请完善信息。");
			return;
		}
		window.location.href="./ProcessMode.php?MyQQ=" + MyQQ.value +"&MyName=" +MyName.value +"&List=" + "<?php echo $CookieStr ?> ";
	}
	
	var i = MyOrderList.rows.length;
	
	if (i==1){
		InfoPrice2.style.display="block";
		MyOrderList.style.display="none";
		OrderForm.style.display="none";
		BackButton.style.display="block";
	}
</script>