<html>
<head>
	<script language="javascript">
		var URL = window.location.href;
		var USERID = "";
		var PRODUCTID = "";
		var CATEGORY = "";
		if((URL.indexOf("userid=")>-1)&&(URL.indexOf("&productid=")>-1)){
				USERID = URL.substring(URL.indexOf("userid=")+7,URL.indexOf("&productid="));
				PRODUCTID = URL.substring(URL.indexOf("productid=")+10,URL.indexOf("&category="));
				CATEGORY = URL.substring(URL.indexOf("&category=")+10);
		}
		
		function loginon(){
			if(USERID!=""){
				document.write(USERID);
				document.write(" 님 안녕하세요!");
				document.write("</td><td class = topmenu><a class=\"menu\" href=\"main.html\">로그아웃<\/a><\/td>");
			}
			else{
				document.write("<a class=\"menu\" href=\"login.html\">로그인<\/a></td><td class = topmenu><a class=\"menu\" href=\"signup.html\">회원가입<\/a><\/td>");
			}
		}

		function User(){
			document.write("현재 "+navigator.platform+"에서 "+navigator.appName+"으로 이용중입니다.<br>");
			document.write("최대 크기일때 잘 보여용");
		}

		function gotohome(){
			document.information.userid.value = USERID;
			document.information.productid.value = PRODUCTID;
			document.information.action="main.html";
			document.information.submit();
		}
		function gotobuilding(){
			document.information.userid.value = USERID;
			document.information.productid.value = PRODUCTID;
			document.information.action="building/building_main.html";
			document.information.submit();
		}
		function gotomajor(){
			document.information.userid.value = USERID;
			document.information.productid.value = PRODUCTID;
			document.information.action="major/major_main.html";
			document.information.submit();
		}
		function gotofood(){
			document.information.userid.value = USERID;
			document.information.productid.value = PRODUCTID;
			document.information.action="food/food_main.html"
			document.information.submit();
		}
		function gotogoods(){
			document.information.userid.value = USERID;
			document.information.productid.value = PRODUCTID;
			document.information.action="goods/goods_main.html";
			document.information.submit();
		}
		function gototogether(){
			document.information.userid.value = USERID;
			document.information.productid.value = PRODUCTID;
			document.information.action="together/together_main.html";
			document.information.submit();
		}

		function basket(){
			document.information.userid.value=USERID;
			document.information.productid.value = PRODUCTID;
			document.information.category.value = CATEGORY;
			if(USERID==""){
				alert("로그인 후 이용해 주세요");
			}
			else{
				document.information.action="basket.php";
				document.information.submit();
			}

		}

	function gotomybasket(){
			if(USERID==""){
				alert("로그인 후 이용하세요");
			}
			else{
			document.information.userid.value = USERID;
			document.information.productid.value = PRODUCTID;
			document.information.action="mybasket.php";
			document.information.submit();
			}
		}

		function gotocall(){
			alert("서비스 점검중입니다");
		}

	</script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Sookmyung Mall</title>
</head>
<body>	
	<form name = "information" method="get">
	<input type = "hidden" name ="userid">
	<input type = "hidden" name ="productid">
	<input type = "hidden" name ="category">
	</form>
	
	<div class = parent>
		<div class = top align="center">
			<div class="main">
				<table class=clear align = "left" height = 100%>
				<tr>
					<td class = topmenu><a class="menu" onclick = "window.open('http://www.sookmyung.ac.kr/sookmyungkr/index.do','','')">숙명여자대학교 홈페이지 바로가기</a></td>
				</tr>
			</table>
			<table class = clear align = "right" height = 100%>
				<tr>
					<td class = topmenu><script language="javascript">loginon();</script>
					<td class = topmenu><input type="button" onclick="gotomybasket()" style="background:white;border-width:0;font-size:9pt;" value="장바구니"</td>
					<td class = topmenu><input type="button" onclick="gotocall()" style="background:white;border-width:0;font-size:9pt;" value="고객센터"</td>
					</tr>
			</table>
			</div>
		</div>
		<div class = search>
			<div class=main>
				<div class=searchotherleft></div>
				<div class=searchengine>
					<table class=clear width=100% height=100%>
						<tr><td align="center"><img src="image/character_new13.gif" width="80pt" onclick="gotohome()"></td></tr>
						<tr>
							<td class = searchmenu>
								<form method = "post">

									<input type = "text" name = "item" maxlength = "20" value = "검색 기능을 이용해보세요!" style="width:200pt; border-width:2pt; border-collapse: collapse; border-color:#2060AA; border-style: none none solid none; text-align: center;">
									<input type="submit" value = "검색" style="background: #2060AA;color:white; border-width: 0;">
								</form>
							</td>
						</tr>
					</table>				
				</div>
				<div class=searchotherright>
					
				</div>
			</div>
		</div>
		<div class= category>
			<table class="clear" height=100% align="center">
					<tr>
						<td class="categorymenu"><input type = "button" style = "border:0;background:white;font-size:12pt;font-weight:bold;" onclick="gotobuilding()" value="건물"></td>
						<td class="categorymenu"><input type = "button" style = "border:0;background:white;font-size:12pt;font-weight:bold;" onclick="gotomajor()" value="전공"></td>
						<td class="categorymenu"><input type = "button" style = "border:0;background:white;font-size:12pt;font-weight:bold;" onclick="gotofood()" value="학식"></td>
						<td class="categorymenu"><input type = "button" style = "border:0;background:white;font-size:12pt;font-weight:bold;" onclick="gotogoods()" value="눈송굿즈"></td>
						<td class="categorymenu"><input type = "button" style = "border:0;background:white;font-size:12pt;font-weight:bold;" onclick="gototogether()" value="공동구매"></td>
					</tr>
			</table>
		</div>
		<div class="maincontent">
			<div class="contentmain"><br>
			<table width=100% height = 50pt border = 2 cellpadding=100pt align="center" valign="middle" bordercolor = "#2060AA"><font size = 6>
				<?php
					$productid = $_GET['productid'];
					$category = $_GET['category'];
					if(file_exists($category."/productdetail/".$productid.".txt")){
						$fp = fopen($category."/productdetail/".$productid.".txt","r");
						$size = filesize($category."/productdetail/".$productid.".txt");
						$content = fread($fp,$size);
						$contents = explode("/",$content);
						echo $contents[0];
						fclose($fp);
					}
					else{
						echo "error";
					}
				?>
			</font></table>
			<br>
			<table width=100% height = 500pt border = 1 style="border-collapse:collapse;border-color:black;border-style:none none solid none;">
				<tr><td width = 50% rowspan="5" align="center">
				<?php
					$productid = $_GET['productid'];
					$category = $_GET['category'];
					if(file_exists($category."/image/".$productid.".jpg")){
						echo "<img src =\"".$category."/image/".$productid.".jpg\" width=300pt;>";
					}
					else{
						echo "no";
					}
				?>
	</td><td style="font-size:25pt;font-weight: bolder;text-align: right;vertical-align: middle;height:100pt;">
				<?php
					$productid = $_GET['productid'];
					$category = $_GET['category'];
					if(file_exists($category."/productdetail/".$productid.".txt")){
						$fp = fopen($category."/productdetail/".$productid.".txt","r");
						$size = filesize($category."/productdetail/".$productid.".txt");
						$content = fread($fp,$size);
						$contents = explode("/",$content);
						echo $contents[1];
						fclose($fp);
					}
					else{
						echo "error";
					}
				?>
					 원</td></tr>
				<tr><td style="font-size:15pt;text-align:left;vertical-align: middle;height:100pt;">				<?php
					$productid = $_GET['productid'];
					$category = $_GET['category'];
					if(file_exists($category."/productdetail/".$productid.".txt")){
						$fp = fopen($category."/productdetail/".$productid.".txt","r");
						$size = filesize($category."/productdetail/".$productid.".txt");
						$content = fread($fp,$size);
						$contents = explode("/",$content);
						echo $contents[2];
						fclose($fp);
					}
					else{
						echo "no";
					}
				?>
	</td></tr>
				<tr><td style="font-size:15pt;text-align:left;vertical-align: middle;height:100pt;">				<?php
				$productid = $_GET['productid'];
				$category = $_GET['category'];
				if(file_exists($category."/productdetail/".$productid.".txt")){
					$fp = fopen($category."/productdetail/".$productid.".txt","r");
					$size = filesize($category."/productdetail/".$productid.".txt");
					$content = fread($fp,$size);
					$contents = explode("/",$content);
					echo $contents[3];
					fclose($fp);
				}
				else{
					echo "no";
				}
			?>
</td></tr>
				<tr><td style="font-size:15pt;text-align:left;vertical-align: middle;height:100pt;">			<?php
					$productid = $_GET['productid'];
					$category = $_GET['category'];
					if(file_exists($category."/productdetail/".$productid.".txt")){
						$fp = fopen($category."/productdetail/".$productid.".txt","r");
						$size = filesize($category."/productdetail/".$productid.".txt");
						$content = fread($fp,$size);
						$contents = explode("/",$content);
						echo $contents[4];
						fclose($fp);
					}
					else{
						echo "no";
					}
				?>
	</td></tr>
				<tr><td style="font-size:15pt;text-align:left;vertical-align: middle;height:100pt;">				<?php
					$productid = $_GET['productid'];
					$category = $_GET['category'];
					if(file_exists($category."/productdetail/".$productid.".txt")){
						$fp = fopen($category."/productdetail/".$productid.".txt","r");
						$size = filesize($category."/productdetail/".$productid.".txt");
						$content = fread($fp,$size);
						$contents = explode("/",$content);
						echo $contents[5];
						fclose($fp);
					}
					else{
						echo "no";
					}
				?>
	</td></tr>
			</table><br>
			<p align="right">
			<input type="button" value ="장바구니" style="width:100pt; height:50pt;font-size:15pt;background:#2060AA;color:white;border:0;font-weight:bold;" onclick="basket()">&nbsp;&nbsp;
			<input type="button" value = "바로 결제하기" style="width:100pt; height:50pt;font-size:15pt;background:red;color:white;border:0;font-weight: bold;" onclick="buy()">
		</p>
			</form>
			</div>
		</div>
	</div>
</body>
</html>





