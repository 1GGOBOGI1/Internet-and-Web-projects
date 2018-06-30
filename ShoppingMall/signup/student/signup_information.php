<html>
<head>
<script language = "javascript">
function gotoend(){
	window.location.href = "signup_4.html";
}
function gotoback(){
	window.location.href = "signup_3.html";
}
<?php
	$id = $_POST['id'];
	$name = $_POST['Name'];
	$pw = $_POST['enc'];
	$studentid = $_POST['studentid'];
	
	ini_set("date.timezone","Asia/Seoul");
	$y = date("Y",time());
	$m = date("m",time());
	$d = date("d",time());
	$h = date("H",time());
	$i = date("i",time());
	$s = date("s",time());
	$D = date("D",time());
	if(file_exists("../../UserInformation/".$id.".txt")){
		$fp = fopen("../../UserInformation/".$id.".txt","w");
		fwrite($fp,$pw."/".$name."/".$studentid."/".$y.$m.$d.$h.$i.$s.$D."/");
		fclose($fp);
		?>gotoend();<?php
	}
	else{
		echo "alert(\"아이디가 존재하지 않습니다\");";
		?>gotoback();<?php
	}

?>
</script>
</head>
<body>	
</body>
</html>
