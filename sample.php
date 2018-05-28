
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>


</style>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="top">
<ul>
<li><a class="active" href="admin_profile.php">Home</a></li>
<li><a href="birth.php">Births</a></li>
<li><a href="marriage.php">Mariage</a></li>
<li><a href="death.php">Death</a></li>
<li><a href="logout.php">Logout</a></li>

</ul>

</div>
<div class="cont_body">
<img src="img/man.ico"
<?php 
//login_success.php 
session_start(); 
if(isset($_SESSION["username"]) && isset($_SESSION["password"])) 
{ 
echo "<h3>Welcome ".$_SESSION['username']."</h3>"; 
} 
else 
{ 
header("location:index.php"); 
} 
?>
<a href="change_password.php" style="text-decoration:none;"><h3>Change Password</h3></a>
<table border="0">
<tr>
<td>
<form method="post">
<input type="submit" name="view" value="View All Births" />
</form></td><td><form method="post">
</form></td><td><form method="post">
<input type="submit" name="marriage" value="View All marriage" />
</form></td></tr></table>
<?php

if(isset($_POST['view']))
{
include('connect.php');
$select1=mysql_query("SELECT * FROM births");
if (mysql_num_rows($select1)==0)
{
echo"<font color='red'>No Records</font>";
}
else
{
$select = mysql_query("SELECT * FROM births")or die (mysql_error());

print("<h3><center>LIST OF ALL BIRTHS REGISTERED</h3>");
echo "<table border='0' width='500'>
<tr bgcolor='#F2F2F2'>
<TD><font size='2' color='#0000'><b>IDNo</b></font></TD>
<TD><font size='2' color='#0000'><b>FATHER'S NAME</b></font></TD>
<TD><font size='2' color='#0000'><b>MATHER'S NAME</b></font></TD>
<TD><font size='2' color='#0000'><b>B_FNAME</b></font></TD>
<TD><font size='2' color='#0000'><b>B_LNAME</b></font></TD>
<TD><font size='2' color='#0000'><b>GENDER</b></font></TD>
<TD><font size='2' color='#0000'><b>TEL</b></font></TD>
<TD><font size='2' color='#0000'><b>PROVINCE</b></font></TD>
<TD><font size='2' color='#0000'><b>DISTRICT</b></font></TD>
<TD><font size='2' color='#0000'><b>DATE</b></font></TD>

</TR>";
while($Ligne=mysql_fetch_object($select))
{

echo" <tr bgcolor='#FFFFFF'>";
//``````````
echo"<TD><font size='2' color='#000000'><b>$Ligne->id_number</b></font></TD>";
echo"<TD><font size='2' color='#000000'><b>$Ligne->father_name</b></font></TD>";
echo"<TD><font size='2' color='#000000'><b>$Ligne->mather_name</b></font></TD>";
echo"<TD><font size='2' color='#000000'><b>$Ligne->b_fname</b></font></TD>";
echo"<TD><font size='2' color='#000000'><b>$Ligne->b_lname</b></font></TD>";
echo"<TD><font size='2' color='#000000'><b>$Ligne->sex</b></font></TD>";
echo"<TD><font size='2' color='#000000'><b>$Ligne->phone</b></font></TD>";
echo"<TD><font size='2' color='#000000'><b>$Ligne->province</b></font></TD>";
echo"<TD><font size='2' color='#000000'><b>$Ligne->district</b></font></TD>";
echo"<TD><font size='2' color='#000000'><b>$Ligne->date</b></font></TD>";
//echo"<TD><a href='change_pass.php?edit_user_password&amp;id=$Ligne->id&amp;fname=$Ligne->fname&amp;lname=$Ligne->lname&amp;email=$Ligne->phone&amp;job_title=$Ligne->job_title'><img src='images/b_edit.png' title='change_password'></a></b></font></TD>";

echo"</TR>\n";
}

echo"</table>";
}}
?>

<?php

if(isset($_POST['divorced']))
{
include('connect.php');
$select1=mysql_query("SELECT * FROM divorced");
if (mysql_num_rows($select1)==0)
{
echo"<font color='red'>No Records</font>";
}
else
{
$select = mysql_query("SELECT * FROM divorced")or die (mysql_error());

print("<h3><center>ALL INFORMATIONS FOR WHO GET MARRIED</h3>");
echo "<table border='0' width='800'>
<tr bgcolor='#F2F2F2'>
<TD><font size='2' color='#0000'><b>NAMES WHO GET MARRIED</b></font></TD>
<TD><font size='2' color='#0000'><b>MAN ID</b></font></TD>
<TD><font size='2' color='#0000'><b>WOMAN ID</b></font></TD>
<TD><font size='2' color='#0000'><b>MARRIAGE DATE</b></font></TD>
<TD><font size='2' color='#0000'><b>Tel</b></font></TD>
<TD><font size='2' color='#0000'><b>PROVINCE</b></font></TD>
<TD><font size='2' color='#0000'><b>DISTRICT</b></font></TD>
<TD><font size='2' color='#0000'><b>SECTOR</b></font></TD>
<TD><font size='2' color='#0000'><b>CELLULE</b></font></TD>
<TD><font size='2' color='#0000'><b>DIVORCED DATE</b></font></TD>

</TR>";
while($Ligne=mysql_fetch_object($select))
{

echo" <tr bgcolor='#FFFFFF'>";
//``````````
echo"<TD><font size='2' color='#000000'><b>$Ligne->b_names&nbsp;& $Ligne->g_names</font></TD>";
echo"<TD><font size='2' color='#000000'><b>$Ligne->b_id_number</b></font></TD>";
echo"<TD><font size='2' color='#000000'><b>$Ligne->g_id_number</b></font></TD>";
echo"<TD><font size='2' color='#000000'><b>$Ligne->marriage_date</b></font></TD>";
echo"<TD><font size='2' color='#000000'><b>$Ligne->phone</b></font></TD>";
echo"<TD><font size='2' color='#000000'><b>$Ligne->province</b></font></TD>";
echo"<TD><font size='2' color='#000000'><b>$Ligne->district</b></font></TD>";
echo"<TD><font size='2' color='#000000'><b>$Ligne->sector</b></font></TD>";
echo"<TD><font size='2' color='#000000'><b>$Ligne->cellure</b></font></TD>";
echo"<TD><font size='2' color='#000000'><b>$Ligne->date</b></font></TD>";
//echo"<TD><a href='change_pass.php?edit_user_password&amp;id=$Ligne->id&amp;fname=$Ligne->fname&amp;lname=$Ligne->lname&amp;email=$Ligne->phone&amp;job_title=$Ligne->job_title'><img src='images/b_edit.png' title='change_password'></a></b></font></TD>";

echo"</TR>\n";
}

echo"</table>";
}}
?>

<?php

if(isset($_POST['marriage']))
{
include('connect.php');
$select1=mysql_query("SELECT * FROM marriage");
if (mysql_num_rows($select1)==0)
{
echo"<font color='red'>No Records</font>";
}
else
{
$select = mysql_query("SELECT * FROM marriage")or die (mysql_error());

print("<h3><center>ALL INFORMATIONS FOR WHOSE WANT TO GET MARRIED</h3>");
echo "<table border='0' width='800'>
<tr bgcolor='#F2F2F2'>
<TD><font size='2' color='#0000'><b>NAMES FOR SOME ONE WANT TO GET MARRIED</b></font></TD>
<TD><font size='2' color='#0000'><b>MAN ID</b></font></TD>
<TD><font size='2' color='#0000'><b>WOMAN ID</b></font></TD>
<TD><font size='2' color='#0000'><b>MARRIAGE DATE</b></font></TD>
<TD><font size='2' color='#0000'><b>Tel</b></font></TD>
<TD><font size='2' color='#0000'><b>PROVINCE</b></font></TD>
<TD><font size='2' color='#0000'><b>DISTRICT</b></font></TD>
<TD><font size='2' color='#0000'><b>SECTOR</b></font></TD>
<TD><font size='2' color='#0000'><b>CELLULE</b></font></TD>

</TR>";
while($Ligne=mysql_fetch_object($select))
{

echo" <tr bgcolor='#FFFFFF'>";
//``````````
echo"<TD><font size='2' color='#000000'><b>$Ligne->b_names&nbsp;& $Ligne->g_names</font></TD>";
echo"<TD><font size='2' color='#000000'><b>$Ligne->b_id_number</b></font></TD>";
echo"<TD><font size='2' color='#000000'><b>$Ligne->g_id_number</b></font></TD>";
echo"<TD><font size='2' color='#000000'><b>$Ligne->marriage_date</b></font></TD>";
echo"<TD><font size='2' color='#000000'><b>$Ligne->phone</b></font></TD>";
echo"<TD><font size='2' color='#000000'><b>$Ligne->province</b></font></TD>";
echo"<TD><font size='2' color='#000000'><b>$Ligne->district</b></font></TD>";
echo"<TD><font size='2' color='#000000'><b>$Ligne->sector</b></font></TD>";
echo"<TD><font size='2' color='#000000'><b>$Ligne->cellure</b></font></TD>";
//echo"<TD><a href='change_pass.php?edit_user_password&amp;id=$Ligne->id&amp;fname=$Ligne->fname&amp;lname=$Ligne->lname&amp;email=$Ligne->phone&amp;job_title=$Ligne->job_title'><img src='images/b_edit.png' title='change_password'></a></b></font></TD>";

echo"</TR>\n";
}

echo"</table>";
}}
?>
</div>
</body>
</html>
