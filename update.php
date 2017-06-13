       <html>
<head>
<script language="javascript">
     function validate()
{
  var fname=document.reg.fn.value;
  var lname=document.reg.ln.value;
   var session=document.reg.session.value;
    var rn=document.reg.rn.value;
    var branch=document.reg.branch.value;
     var year=document.reg.year.value;
      var semester=document.reg.semester.value;
       var mm=document.reg.mm.value;
        var dd=document.reg.dd.value;
         var yy=document.reg.yy.value;
          var address=document.reg.address.value;

if(fname=='')
  {
    window.alert("Please Enter fname!");
    document.reg.fn.focus();
    return false;

 }

 if(lname=='')
  {
    window.alert("Please Enter lname!");
    document.reg.ln.focus();
    return false;

 }
 if(session=='')
  {
    window.alert("Please Select Session!");
    document.reg.session.focus();
    return false;

 }
 if(rn=='')
  {
    window.alert("Enter Roll No!");
    document.reg.rn.focus();
    return false;

 }
 if(branch=='')
  {
    window.alert("Please Select Branch!");
    document.reg.branch.focus();
    return false;

 }
 if(year=='')
  {
    window.alert("Please Select Year!");
    document.reg.year.focus();
    return false;

 }
 if(semester=='')
  {
    window.alert("Please Select Semester!");
    document.reg.semester.focus();
    return false;

 }
 if(dd=='')
  {
    window.alert("Please Select Day!");
    document.reg.dd.focus();
    return false;

 }
 if(mm=='')
  {
    window.alert("Please Select Month!");
    document.reg.mm.focus();
    return false;

 }
 if(yy=='')
  {
    window.alert("Please Select Year!");
    document.reg.yy.focus();
    return false;

 }
 if(address=='')
  {
    window.alert("Please Select Address!");
    document.reg.address.focus();
    return false;

 }


}


</script>

</head>

<body background="bg-body.jpg">


<center>
<form method="POST" action="update.php" name="reg" onSubmit="return validate()">
<table border="5" bgcolor="#C0C0C0" height="400px" width="60%"> <h1 ><font color="blue"><b>STUDENT INFORMATION SYSTEM</b></font></h1><br><a href="index.php" style="font-size:25px; font-family:COMIC SANS MS; color:maroon;">HOME</a>&nbsp&nbsp&nbsp&nbsp<a href="update.php" style="font-size:25px; font-family:COMIC SANS MS; color:MAROON;">UPDATE</a>&nbsp&nbsp&nbsp&nbsp<a href="delete.php" style="font-size:25px; font-family:COMIC SANS MS; color:MAROON;">DELETE</a>&nbsp&nbsp&nbsp&nbsp<a href="search.php" style="font-size:25px; font-family:COMIC SANS MS; color:MAROON;">SEARCH</a><br><br></center>

        <tr>
		<td>FIRST NAME:</td>
		<td><input type="text" name="fn" /></td>
	</tr>
	<tr>
		<td>LAST NAME:</td>
		<td><input type="text" name="ln" /></td>
	</tr>
<tr>
		<td>SESSION:</td>
 <td>
<select name="session">
<option >Select Session</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
</select>

</tr>
	<tr>
		<td>ROLL NO:</td>
		<td><input type="text" name="rn"></td>
	</tr>
	<tr>
		<td>BRANCH</td>
<td>
<select name="branch">
<option >Select Branch</option>
<option value="CSE">CSE</option>
<option value="ET&T">ET&T</option>
<option value="CIVIL">CIVIL</option>
<option value="MECHNICAL">MECHNICAL</option>
<option value="EEE">EEE</option>
</select>
</td>
</tr>

<tr>
		<td>YEAR:</td>
<td>
<select name="year">
<option >Select Year</option>
<option value="FIRST">FIRST</option>
<option value="SECOND">SECOND</option>
<option value="THIRD">THIRD </option>
<option value="FOURTH">FOURTH</option>
</select>
</td></tr>

<tr>
		<td>SEMESTER:</td>
<td>
<select name="semester">
<option >Select Semester</option>
<option value="FIRST">FIRST</option>
<option value="SECOND">SECOND</option>
<option value="THIRD">THIRD</option>
<option value="FOURTH">FOURTH</option>
<option value="FIFTH">FIFTH</option>
<option value="SIX">SIX</option>
<option value="SEVENTH">SEVENTH</option>
<option value="EIGHT">EIGHT</option>
</select>
</td>
</tr>

<tr>
<td>Date Of Birth(DD-MM-YYYY)</td>
<td><select name="dd">
<option> select date </option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="2">8</option>
<option value="3">9</option>
<option value="4">10</option>
<option value="5">11</option>
<option value="6">12</option>
<option value="7">13</option>
<option value="1">14</option>
<option value="2">15</option>
<option value="3">16</option>
<option value="4">17</option>
<option value="5">18</option>
<option value="6">19</option>
<option value="7">20</option>
<option value="2">21</option>
<option value="3">22</option>
<option value="4">23</option>
<option value="5">24</option>
<option value="6">25</option>
<option value="7">26</option>
<option value="7">27</option>
<option value="7">28</option>
<option value="7">29</option>
<option value="7">30</option>
<option value="7">31</option>

</select>
<select name="mm">
<option> select mounth </option>
<option value="jan">JAN</option>
<option value="feb">FEB</option>
<option value="mar">MAR</option>
<option value="apr">APR</option>
<option value="may">MAY</option>
<option value="jun">JUN</option>
<option value="jul">JUL</option>
<option value="jan">AUG</option>
<option value="feb">SEP</option>
<option value="mar">OCT</option>
<option value="apr">NOV</option>
<option value="may">DEC</option>

</select>
<select name="yy">
<option>select year</option>
<option value="2014">1989</option>
<option value="2015">1990</option>
<option value="2016">1991</option>
<option value="2017">1992</option>
<option value="2018">1993</option>
<option value="2019">1994</option>
<option value="2014">1995</option>
<option value="2015">1996</option>
<option value="2016">1997</option>
<option value="2017">1998</option>
<option value="2018">1999</option>
<option value="2019">2000</option>
</select>
</td>
</tr>
<tr>
		<td>ADDRESS:</td>
		<td><input type="text" name="address" /></td>
	</tr>

		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="UPDATE" /></td>
	</tr>
 </table>
</form>
</body>
</html>
<?php
require'db_conn.php';
if( isset($_POST['fn']))
{
$fn=$_POST['fn'];
}
if( isset($_POST['ln']))
{
$ln=$_POST['ln'];
}
if( isset($_POST['session']))
{
$session=$_POST['session'];
}
if( isset($_POST['rn']))
{
$rn=$_POST['rn'];
}
if( isset($_POST['branch']))
{
$branch=$_POST['branch'];
}
if( isset($_POST['year']))
{
$year=$_POST['year'];
}
if( isset($_POST['semester']))
{
$semester=$_POST['semester'];
}
if( isset($_POST['dd']))
{
$dd=$_POST['dd'];
}
if( isset($_POST['mm']))
{
$mm=$_POST['mm'];
}
if( isset($_POST['yy']))
{
$yy=$_POST['yy'];
}
if( isset($_POST['address']))
{
$address=$_POST['address'];
}
if( isset($_POST['fn']))
{
$cap1=strtoupper($fn);
}
if( isset($_POST['ln']))
{
$cap2=strtoupper($ln);
}
if( isset($_POST['address']))
{
$cap3=strtoupper($address);
}


if(isset($_POST['submit']))
 {

 $q1=mysql_query("UPDATE bhup SET fname='$cap1',lname='$cap2',session='$session',rn='$rn',branch='$branch',year='$year',semester='$semester',dob='$dd $mm $yy',address='$cap3' where rn =$rn");
if($q1)
{
 echo"Record Successfully Updated";
}
else
{

echo"Not Update Your Record" ;
}
 }
?>