<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sis";
$conn=mysql_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

mysql_select_db($dbname,$conn);

if (isset($_POST['email'])) {
    $email = $_POST['email'];
}

if (isset($_POST['pass'])) {
    $pass = $_POST['pass'];
}

//$email = $_POST['email'];

//$pass = $_POST['pass'];

$sql = "select * from sis_users where email = '$email' and pass = '$pass'";
$result = mysql_query($sql,$conn);

//if (mysql_num_rows($result) > 0)
	//{
$row = mysql_fetch_array($result);
//print_r($row);
//extract($row);
//print_r($row);
session_start();
//$_SESSION['user_id'] = $user_id;
$_SESSION['email'] = $email;
$_SESSION['pass'] = $pass;

if($_SESSION['pass']==$row['pass'] && $_SESSION['email']==$row['email'])
	
	{
		include('index.php');
		#header('Location:/index.php');
	}
	
else{
	
	
        echo"invalid entry";
	}
	//}
	//else
	//{
		//header('Location: /sis/sis_login2.php');
		//echo'wrong information';
	//}


?>