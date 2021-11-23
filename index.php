<?php
include "config.php";


if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);


    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: home.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
<html>
    <head>
        <title>INTERGRATED SECONDARY SCHOOL SELECTION SYSTEM</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <style>
            	body{
	text-align: center;
	background: rgb(0,0,0);

}
.one{
	width: 320px;
	height: 420px;
	/*background: rgba(5,55,25,0.08);*/
    background: url(hero-bg.jpg) top center;
	color: rgb(75,155,255);
	top: 40%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;

}
button{
	background: blue;
}
        </style>
    </head>
    <body class="one">
        <div class="container">
            <form method="post" action="">
                <div id="div_login">
                    <h2>INTERGRATED SECONDARY STUDENT SELECTION SYSTEM</h2>
                    <div>
                        <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
                    </div>
                    <div>
                        <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
                    </div>
                    <div>
                        <input type="submit" value="Log in" name="but_submit" id="but_submit" />
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>

