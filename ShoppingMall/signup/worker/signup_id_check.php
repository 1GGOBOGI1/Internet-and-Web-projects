<html>
<head>
<script language="javascript">
function success(){
	window.location.href="signup_3.html";
}
function fail(){
	window.location.href="signup_make_id.html";
}

<?php
	$id = $_POST['id'];
	if(file_exists("../../UserInformation/".$id.".txt")){
		echo "alert(\"이미 존재하는 아이디입니다\");";
		?>fail();<?php
	}
	else{
		echo "alert(\"사용가능한 아이디입니다\");";
		if($fp=fopen("../../UserInformation/".$id.".txt","w")){	
			fclose($fp);
			$fp=fopen("../../UserInformation/Shopping/".$id.".txt","w");
			fclose($fp);
		}
		else{
			echo "alert(\"회원가입에 실패하였습니다\");";
		}
		?>success();<?php
	}
?>
</script>
</head>
</html>
