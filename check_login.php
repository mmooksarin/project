<?php
  require('dbconnect.php');
  require('session.php');

$strSQL = "SELECT * FROM login WHERE username = '".$_POST['txtUsername']."'

and Password = '".$_POST['txtPassword']."'";

$objQuery = mysqli_query($conn, $strSQL);
$objResult = mysqli_fetch_array($objQuery);

if(!$objResult)
{
echo "Username and Password Incorrect!";
}
else
{

$_SESSION["id"] = $objResult["id"];

$_SESSION["status"] = $objResult["Status"];

session_write_close();

if($objResult["Status"] == "admin")
{
header("location:index3.html");
}
header("location:index3.html");
}
?>
