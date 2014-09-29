<?php
	require_once("../connect.php");
	
	$username = $_POST['username'];
	
	

	
	$sql = "SELECT * FROM Admin WHERE Username='$username'";
		
	
	$query = mysql_query($sql);
	
	
	if(!(mysql_num_rows($query))){
		echo "<script> alert('用户名不存在, 请重新注册'); window.location.href = 'createAdmin.php'</script> ";
	}
	

	
	$data = mysql_fetch_assoc($query);
	
	
	
	
	
	if($data['SecretQuestion']=="firstCar"){
		$secretQuestion = "What's the brand of your first car?";
	}
	else if($data['SecretQuestion']=="firstPet"){
		$secretQuestion = "What's the name of your first pet?";
	}
	else if($data['SecretQuestion']=="motherLastName"){
		$secretQuestion = "What's your mother's LAST name?";
	}
	else if($data['SecretQuestion']=="fatherFirstName"){
		$secretQuestion = "What's your father's FIRST name?";
	}
	
 
?>
<!DOCTYPE html>
<html>
	<head>
		<title>回答密保问题</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>密保问题:</h2>
		<strong><?php echo($secretQuestion); ?></strong>
		<br>
		<form id="form" name="form" method="post" action="sendEmail.php">
		<input type="hidden" name="id" id="id" value="<?php echo  $data['id'] ?>" >
		<input id="answer" name="answer" placeholder="答案" required="true">
		<input type="submit" id="button" name="button" value="确认">
		</form>
	</body>
</html>