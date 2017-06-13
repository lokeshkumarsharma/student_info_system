<?php
#SSsession_start();
echo'<center>';
echo'<H1>LOGIN</H1>';

echo'<html>';
echo'<body background="bg-body.jpg">';
echo'<center>';
echo'<form method="post" action="sis_login2.php">';
echo'<p style="font-size:30px; font-family:COMIC SANS MS; color:blue;">  Email <input type="text" name="email"></p>';


echo'<p style="font-size:30px; font-family:COMIC SANS MS; color:blue;">Password <input type="password" name="pass"></p>';
echo'<p><input type="submit" value="login"></p>';
echo'</form>';
echo'not an account??<a href="sis_signup1.php"  style="font-size:30px; font-family:COMIC SANS MS; color:blue;">Sign up</a>';
echo'</center>';

echo'</html>';
?>