        <html>
<head>


</head>

<body>


<center>
<form method="POST" action="">
<table border="5" bgcolor="#C0C0C0" width="30%" height="100px"> <h1 ><font color="blue"><b>STUDENT INFORMATION SYSTEM</b></font></h1><br><a href="index.php">HOME</a>&nbsp&nbsp&nbsp&nbsp<a href="update.php">UPDATE</a>&nbsp&nbsp&nbsp&nbsp<a href="delete.php">DELETE</a>&nbsp&nbsp&nbsp&nbsp<a href="search.php">SEARCH</a><br><br></center>

<tr>
		<td>ENTER ROLL NO:</td>
		<td><input type="text" name="rn" /></td>
	</tr>

		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="DELETE" /></td>
	</tr>
 </table>
</form>
</body>
</html>
<?php
require'db_conn.php';

if(isset($_POST['rn']))
{
$rn=$_POST['rn'];
}



if(isset($_POST['submit']))
 {

 $del=mysql_query("DELETE FROM bhup where rn='$rn'");


if($del)
{
 echo"Record Successfully Deleted";
}
else
{

echo"Not Delete Your Record" ;
}
 }
?>