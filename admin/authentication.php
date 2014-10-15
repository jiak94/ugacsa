<?php
	require_once("../connect.php");
	session_start();


	$username = $_POST["username"];
	$password = $_POST["password"];
	$hashPassword = hash('md5', $password);
	
	//echo $username;
	$sql = "select * from Admin WHERE Username = '$username'";
	$query = mysql_query($sql);

	

	if ($query && mysql_num_rows($query)) {
		while ($row = mysql_fetch_assoc($query)) {
			$data[] = $row;
		}
	}


	if(!empty($data)){
		foreach($data as $value){
            //echo $value['Username'];
            //echo $value['Password'];
            //echo $hashPassword;
			if($value["Username"] === $username && $value["Password"]===$hashPassword){
				
				$_SESSION['login']= 1;
				$_SESSION['username'] = $username;
				echo "<script> alert ('恭喜你登陆成功'); window.location.href = 'manage.php'</script>";
				exit();
			}
		}
	}

	echo "<script> alert ('用户名或密码错误,请重试'); window.location.href = 'login.php'</script>";
?>