<?php
$db=mysql_connect('localhost','root','');
mysql_select_db('sis',$db);

$email=$_POST['email'];

$pass=$_POST['pass'];

#$sql = 'insert into cms_users values("' . mysql_real_escape_string($email, $db) . '",
#PASSWORD("' . mysql_real_escape_string($pass, $db) . '"),
#$"' . mysql_real_escape_string($name, $db) . '")';
$sql = "insert into sis_users(email, pass) values ('$email', '$pass')";
mysql_query($sql, $db) or die(mysql_error('not done'));
$sqll = "select email from sis_users where pass='$pass'";
$result=mysql_query($sqll,$db);
$row=mysql_fetch_array($result);
echo 'Successfully logged In as ';
echo $row['email'];
echo'</br>';
session_start();
$_SESSION['user_id'] = mysql_insert_id($db);
#print_r($_SESSION);
$_SESSION['email'] = $email;
if(isset($_SESSION['email']))
{
	include('index.php');
#header('Location: /index.php');
}
else
{
	echo'unsuccessful';
}
?>