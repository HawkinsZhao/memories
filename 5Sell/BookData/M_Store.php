<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="../css/M_Store.css"/>
	</head>
	<body>
		<div id="SearchDiv">
			<div id="HomeButton"><img style="vertical-align: middle;width:2.9em" src="../img/logo2.png"/></div>
			<div id="ShopperButton"><img style="vertical-align: middle;width: 2.9em;" src="../img/Shopper.png"/></div>
			<div style="padding-top: 0.4em;"><input type="text" name="" id="SearchInput"/></div>
			<div id="SearchButton"><img style="width: 100%;width: 1.8em;padding: 0.1em;" src="../img/Search.png"/></div>
			
		</div>
		<table id="SearchTable">
			<tr>
				<td class="SearchSelect">
					<div id="Order1" style="cursor: pointer;">
					上架时间
					<hr id="Oh1" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;;display: none;" />
					</div>
					</td>
				<td class="SearchSelect" style="cursor: pointer;">
					<div id="Order2">
					从新到旧
					<hr id="Oh2" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
					</div>
				</td>
				<td class="SearchSelect" style="cursor: pointer;">
					<div id="Order3">
					更多筛选
					<hr id="Oh3" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
					</div>
				</td>
			</tr>
		</table>
		<table id="MoreTable" style="display: none;">
			<tr>
				<td class="ListItem"><p class="ListItemText">科目</p></td>
				<td class="ListItem">
					<div id="MyAll">
						<p class="ListItemText">全部</p>
						<hr id="OLAll" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
					</div>
					</td>
				<td class="ListItem">
					<div id="Chinese">
						<p class="ListItemText">语文</p>
						<hr id="OLChinese" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
					</div>
					</td>
				<td class="ListItem">
					<div id="Math">
						<p class="ListItemText">数学</p>
						<hr id="OLMath" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
					</div>
					</td>
				<td class="ListItem">
					<div id="English">
						<p class="ListItemText">英语</p>
						<hr id="OLEnglish" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
					</div>
					</td>
			</tr>
			<tr>
				<td class="ListItem"></td>
				<td class="ListItem">
					<div id="Physic">
						<p class="ListItemText">物理</p>
						<hr id="OLPhysic" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
					</div>
					</td>
				<td class="ListItem">
					<div id="Chem">
						<p class="ListItemText">化学</p>
						<hr id="OLChem" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
					</div>
					</td>
				<td class="ListItem">
					<div id="Biology">
						<p class="ListItemText">生物</p>
						<hr id="OLBiology" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
					</div>
					</td>
				<td class="ListItem">
					<div id="LiZong">
						<p class="ListItemText">理综</p>
						<hr id="OLLiZong" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
					</div>
				</td>
			</tr>
			<tr>
				<td class="ListItem"></td>
				<td class="ListItem">
					<div id="Pol">
						<p class="ListItemText">政治</p>
						<hr id="OLPol" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
					</div>
					</td>
				<td class="ListItem">
					<div id="History">
						<p class="ListItemText">历史</p>
						<hr id="OLHistory" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
					</div>
					</td>
				<td class="ListItem">
					<div id="Geography">
						<p class="ListItemText">地理</p>
						<hr id="OLGeography" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
					</div>
					</td>
				<td class="ListItem">
					<div id="WenZong">
						<p class="ListItemText">文综</p>
						<hr id="OLWenZong" style="border:none;border-top:2px solid #A97CCA;margin-top: 0;margin-bottom: 2px;width: 70%;display: none;" />
					</div>
				</td>
			</tr>
		</table>
		<div style="width: 100%;background-color: #FFFFFF;margin-top: 0.5em;">
			<table id="BookTable" rules="rows">
				<?php
					function My_GetData($My_value)
					{
						//setcookie('Order','&0',time() + 3600*24*30);
						
						$conn=mysql_connect('localhost','sql_Name','sql_Password');
						$db=mysql_select_db('sql_Name');
						$SJ= $_GET['Subject'];
						$SOrder = $_GET['Order'];
						$AorD = " DESC";
						if ($SOrder == null) { $SOrder = 'BookIndex';$AorD = " ASC";}
						if ($SJ != null) {
							$result = mysql_query('SELECT * FROM 5sell_bookdata WHERE BookTitle LIKE "%'.$My_value.'%" AND Subject="'.$SJ.'" AND Ordered != 1 ORDER BY '.$SOrder.$AorD ,$conn);
						}
						else{
							$result = mysql_query('SELECT * FROM 5sell_bookdata WHERE BookTitle LIKE "%'.$My_value.'%" AND Ordered != 1 ORDER BY '.$SOrder.$AorD ,$conn);
						}
						while ($row = mysql_fetch_array($result)){
							echo '<tr style="border: 1px solid #d5d5d5;">';
							$i = $row[BookIndex];
							echo '<td class="Store1">';
							echo '<a href="./M_BookData.php?index='.$i.'">';
							echo '<img src="../img/'.$i.'/CoverImg.jpg"  class="StoreImg"/>';
							echo '</a></td>';
							echo '<td class="Store2"><a href="./M_BookData.php?index='.$i.'"><p class="StoreTitle">'.$row[BookTitle].'</p></a>';
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
			<p id="NoDisplay" style="display: none;width: 100%;font-size: 1.5em;font-family: '微软雅黑';text-align: center; line-height: 2em;border: 1px solid #d5d5d5;;">抱歉，没有找到相关资料。</p>
		</div>
		<div style="margin-top: 1em;"><p style="font-size: 0.8em;font-family: '微软雅黑';" align="center">5Sell旧资料出售活动<br/>联系方式  QQ:  634549062 或 1044067525<br/>加好友请注明目的（买书、卖书或其他）</p></div>
	</body>
</html>

<script language="JavaScript" src="../js/M_Store.js"></script>