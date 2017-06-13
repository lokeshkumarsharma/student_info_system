<?php
#session_start();
#include('sis_login1.php');

echo'<center><H1><p style="font-size:30px; font-family:COMIC SANS MS; color:blue;">create an account</H1></center></p>';
?>

<html>
<body background="bg-body.jpg">
<center>

<form method="post" action="sis_signup2.php">
<p style="font-size:30px; font-family:COMIC SANS MS; color:blue;">Email <input type="text" name="email"></p>


<p style="font-size:30px; font-family:COMIC SANS MS; color:blue;">Password <input type="password" name="pass"></p>
<p><input type="submit" value="login "></p>
</form>
</center>
</body>
</html>
</html>