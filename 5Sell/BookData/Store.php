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
				<a href="../contact.html"><p align="center" id="Connect">联系我们</p></a>
				<div id="Shopper">购物车</div>
			</div>
		</div>
		<div class="BlankDiv"></div>
		<div class="MContain">
			<div style="width: 90%;margin: 0 auto;">
				<div class="BlankDiv"></div>
				<p id="InfoTtile">商城</p>
				<p id="InfoPrice">这里是已经上架的商品，您可以在此查看，更多商品正在陆续添加，我们保证定期更新。</p>
				<hr style="height:1px;border:none;border-top:1px solid #b9b9b9;" />
				
				<table style="width:100%;background-color: #EEEEEE;border: 1px solid #d5d5d5;" cellpadding="0" cellspacing="0">
					<tr>
						<td style="width: 75%;padding-top: 10px;padding-bottom: 10px;">
							<p class="ListIntro">筛选方式</p>
							<div class="StoreList" style="width: 120px;" id="Order1">
								上架时间
								<hr id="Oh1" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
								</div>
							<div class="StoreList" style="width: 120px;" id="Order2">
								从新到旧
								<hr id="Oh2" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
								</div>
							<div class="StoreList" id="ListMore" style="float: right;margin-right: 20px;">更多</div>
							</td>
						<td style="width: 25%;padding-top: 10px;padding-bottom: 10px;padding-right: 10px;">
							<table style="width: 100%;border: 1px solid #d5d5d5;" cellpadding="0" cellspacing="0">
								<tr>
									<td style="width: 70%;"><input type="text" name="" id="SearchInput"/></td>
									<td style="width: 30%;"><div id="SearchButton">搜 索</div></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr id="List1" style="display: none;">
						<td style="width: 75%;padding-top: 10px;padding-bottom: 10px;">
							<p class="ListIntro">科目</p>
							<div class="StoreList" id="MyAll">
								<p class="ListItemText">全部</p>
								<hr id="OLAll" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
							</div>
							<div class="StoreList" id="Chinese">
								<p class="ListItemText">语文</p>
								<hr id="OLChinese" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
							</div>
							<div class="StoreList" id="Math">
								<p class="ListItemText">数学</p>
								<hr id="OLMath" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
							</div>
							<div class="StoreList" id="English">
								<p class="ListItemText">英语</p>
								<hr id="OLEnglish" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
							</div>
							<div class="StoreList" id="LiZong">
								<p class="ListItemText">理综</p>
								<hr id="OLLiZong" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
							</div>
							<div class="StoreList" id="WenZong">
								<p class="ListItemText">文综</p>
								<hr id="OLWenZong" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
							</div>
						</td>
						<!--<td style="width: 25%;padding-top: 10px;padding-bottom: 10px;padding-right: 10px;">
							<div style="height: 30px;">
								<p class="ListIntro" style="width: 40px;">热搜</p>
								<div class="StoreList">53</div>
							</div>
						</td>-->
					</tr>
					<tr id="List2" style="display: none;">
						<td style="padding-top: 10px;padding-bottom: 20px;">
							<div style="width:100px;height: 30px;float: left;"></div>
							<div class="StoreList" id="Physic">
								<p class="ListItemText">物理</p>
								<hr id="OLPhysic" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
							</div>
							<div class="StoreList" id="Chem">
								<p class="ListItemText">化学</p>
								<hr id="OLChem" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
							</div>
							<div class="StoreList" id="Biology">
								<p class="ListItemText">生物</p>
								<hr id="OLBiology" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
							</div>
							<div class="StoreList" id="Pol">
								<p class="ListItemText">政治</p>
								<hr id="OLPol" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
							</div>
							<div class="StoreList" id="History">
								<p class="ListItemText">历史</p>
								<hr id="OLHistory" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
							</div>
							<div class="StoreList" id="Geography">
								<p class="ListItemText">地理</p>
								<hr id="OLGeography" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
							</div>
						</td>
					</tr>
				</table>
				<div class="BlankDiv-Small"></div>
				<table id="SearchTable" cellpadding="0" cellspacing="0" style="width: 100%;border: 1px solid #d5d5d5;">
					<?php
						function My_GetData($My_value)
						{
							//setcookie('Order','&0',time() + 3600*24*30);
							echo '<tr>';
							$j=0;
							$conn=mysql_connect('localhost','sql_Name','sql_Password');
							$db=mysql_select_db('sql_Name');
							$SJ= $_GET['Subject'];
							$SOrder = $_GET['Order'];
							$AorD = " DESC";
							if ($SOrder == null) { $SOrder = 'BookIndex';$AorD = " ASC";}
							if ($SJ != null) {
								$result = mysql_query('SELECT * FROM 5sell_bookdata WHERE BookTitle LIKE "%'.$My_value.'%" AND Subject="'.$SJ.'" AND Ordered != 1 ORDER BY '.$SOrder.$AorD,$conn);
							}
							else{
								$result = mysql_query('SELECT * FROM 5sell_bookdata WHERE BookTitle LIKE "%'.$My_value.'%" AND Ordered != 1 ORDER BY '.$SOrder.$AorD ,$conn);
							}
							while ($row = mysql_fetch_array($result)){
								$i = $row[BookIndex];
								if ($j % 2 == 0){echo '<td class="StoreEEE">';}
								else {echo '<td class="StoreFFF">';}
								echo '<a target="_blank" href="./BookData.php?index='.$i.'"><img src="../img/'.$i.'/CoverImg.jpg"  class="StoreImg"/></a>';
								echo '<p class="StoreTitle">'.$row[BookTitle].'</p>';
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
								echo '<p class="StoreTitle-Small" style="float:left">科目：'.$MySubject.'</p>';
								echo '<p class="StoreTitle-Small" style="float:right">新旧：'.$row[Percent].'成</p>';
								echo '</td>';
								$j++;
								if ($j % 5 == 0){
									echo '</tr><tr>';
								}
							}
							echo '</tr>';
							mysql_close($conn);
							return;
						}
						$Search = $_GET['Search'];
						if ($Search!=null){
							My_GetData($Search);
						}
						if ($Search == null){
							My_GetData(null);
						}
					?>
				</table>
				<p id="NoDisplay" class="StoreTitle" style="display:none;">抱歉，没有找到相关资料。</p>
				<div class="BlankDiv"></div>
				<div class="BlankDiv"></div>
			</div>
		</div>
		<div class="BlankDiv"></div>
		<p style="font-size: 15px;font-family: '微软雅黑';" align="center">5Sell旧资料出售活动 <br/>联系方式  QQ:  634549062 或 1044067525 加好友请注明目的（买书、卖书或其他）</p>
	</body>
</html>

<script language="JavaScript" src="../js/HeadEvent.js"></script>
<script language="JavaScript" src="../js/Search.js"></script>

<script language="JavaScript">
	var STable = document.getElementById("SearchTable");
	var Cols= STable.rows[0].cells.length;
	
	function GetRequest() {
	  var url = location.search; //获取url中"?"符后的字串
	   var theRequest = new Object();
	   if (url.indexOf("?") != -1) {
	      var str = url.substr(1);
	      strs = str.split("&");
	      for(var i = 0; i < strs.length; i ++) {
	         theRequest[strs[i].split("=")[0]]=(strs[i].split("=")[1]);
	      }
	   }
	   return theRequest;
	}
	
	if (Cols==0){
		var NoDisplay = document.getElementById("NoDisplay");
		NoDisplay.style.display="inherit";
	}
	else{
		var Twidth= 20 * Cols ;
		if (Cols <5){ STable.style.width = Twidth + "%";}
	}
</script>