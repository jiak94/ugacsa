<?php
require_once("../connect.php");

$username = $_POST['username'];


$sql = "SELECT * FROM Admin WHERE Username='$username'";


$query = mysql_query($sql);


if (!(mysql_num_rows($query))) {
    echo "<script> alert('用户名不存在, 请重新注册'); window.location.href = 'createAdmin.php'</script> ";
}


$data = mysql_fetch_assoc($query);


if ($data['SecretQuestion'] == "firstCar") {
    $secretQuestion = "What's the brand of your first car?";
} else if ($data['SecretQuestion'] == "firstPet") {
    $secretQuestion = "What's the name of your first pet?";
} else if ($data['SecretQuestion'] == "motherLastName") {
    $secretQuestion = "What's your mother's LAST name?";
} else if ($data['SecretQuestion'] == "fatherFirstName") {
    $secretQuestion = "What's your father's FIRST name?";
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>回答密保问题</title>
    <meta charset="utf-8">
    <style type="text/css">
        body {
            margin: 0px;
            min-width: 1100px;
        }

        .background {
            height: auto;
            width: auto;
            z-index: -1;
        }

        .content {
            width: 500px;
            height: 260px;
            margin: auto;
            margin-top: 200px;
            border-radius: 10px;
            background: #f5f5f5;
            border: solid red;
            padding-top: 40px;
        }
        .form {
            width: 150px;
            margin: auto;
        }

        #answer {
            height: 20px;
            width: 150px;
            border-radius: 5px;
            font-size: medium;
            padding-left: 10px
        }
        #button {
            width: 50px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="background">
    <div class="content">
        <h3 align="center"><?php echo($secretQuestion); ?></h3>
        <div class="form">
            <form id="form" name="form" method="post" action="sendEmail.php">
                <input type="hidden" name="id" id="id" value="<?php echo $data['id'] ?>">
                <input id="answer" name="answer" placeholder="答案" required="true">
                <input type="submit" id="button" name="button" value="确认">
            </form>
        </div>
    </div>
    <img src="../assets/img/loginBackground.jpg"
         style="position:fixed;top: 0; bottom: 0; left: 0; right: 0; z-index: -1" height="100%" width="100%">
</div>
</body>
</html>