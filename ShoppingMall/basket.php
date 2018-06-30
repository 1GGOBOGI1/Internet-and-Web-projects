<html>
<head>
<form name ="information" method="get">
<input type="hidden" name="userid">
<input type="hidden" name="productid">
<input type="hidden" name="category">
<script language="javascript">
	var URL = window.location.href;
		var USERID = "";
		var PRODUCTID = "";
		var CATEGORY="";
		if((URL.indexOf("userid=")>-1)&&(URL.indexOf("&productid=")>-1)){
				USERID = URL.substring(URL.indexOf("userid=")+7,URL.indexOf("&productid="));
				PRODUCTID = URL.substring(URL.indexOf("productid=")+10,URL.indexOf("&category="));
				CATEGORY = URL.substring(URL.indexOf("&category=")+10);
		}
	<?php

		$USERID = $_GET['userid'];
		$PRODUCTID = $_GET['productid'];
		$CATEGORY = $_GET['category'];
		$fp1 = fopen($CATEGORY."/productdetail/".$PRODUCTID.".txt","r");
		$size = filesize($CATEGORY."/productdetail/".$PRODUCTID.".txt");
		$content = fread($fp1,$size);
		$contents = explode("/",$content);
		$fp = fopen("UserInformation/Shopping/".$USERID.".txt","a");
		fwrite($fp,$contents[0]."_".$contents[1]."/");
		fclose($fp);

	?>
	
	alert("선택하신 상품이 장바구니에 추가되었습니다");
	
	document.information.userid.value = USERID;
	
	document.information.productid.value = PRODUCTID;
	document.information.category.value = CATEGORY;
	document.information.action = "productdetail.php";
	document.information.submit();
</script>
</head>
<body>
</body>
</html>
