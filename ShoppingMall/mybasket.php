<html>
<head>
	<script language="javascript">
		var URL = window.location.href;
		var USERID = "";
		var PRODUCTID = "";
		if((URL.indexOf("userid=")>-1)&&(URL.indexOf("&productid=")>-1)){
				USERID = URL.substring(URL.indexOf("userid=")+7,URL.indexOf("&productid="));
				PRODUCTID = URL.substring(URL.indexOf("productid=")+10);
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
				<div style="width:100%; height:100pt; overflow:hidden;background:#2060AA;border-radius:20pt; text-align:center; vertical-align:middle;overflow:hidden;"><br><br><br>
					<font color=white><font size = 5>
						<?php echo $_GET['userid']; ?>
					 님의 장바구니 내역입니다</font></font>

					</div>
				<font color=black size = 5><br><br>
				<table class="clear" width=100% border=1>
				<tr><td align="center">상품명</td><td align="right">가격</td></tr>
			<?php
							$USERID = $_GET['userid'];
							if(file_exists("UserInformation/Shopping/".$USERID.".txt")){								$fp=fopen("UserInformation/Shopping/".$USERID.".txt","r");
								$size = filesize("UserInformation/Shopping/".$USERID.".txt");
								$filecontent=fread($fp,$size);
							
								$filecontents=explode("/",$filecontent);
								foreach($filecontents as $ff){
									$nn = explode("_",$ff);
									echo "<tr><td align=\"center\">".$nn[0]."</td><td align=\"right\">".$nn[1]."원</td></tr>";
								}
								fclose($fp);

							}
							else{
							}
				?></font>
				</table>
			</div>
			
		</div>
	</div>
</body>
</html>





