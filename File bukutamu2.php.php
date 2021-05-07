<html>
<head>
<title>
Guestbook
</title>
</head>

<body bgcolor="#99CCFF">
<font color="#000066" face=verdana>
<h3 align=left>
Signup Guestbook
</h3>

<?php require("utama.php"); $link=open_connection();
$tablename="guestbook";
$tgl=date("Y-m-d");
$pesan=addslashes($pesan);
$sqlstr="INSERT INTO $tablename
VALUES('','$tgl','$nama','$email','$alamat','$kota','$pesan')"; if (!mysql_query ($sqlstr))
    {
    echo("Invalid Query!<br>Please register again...<br>");     exit;
    }
mysql_close($link);
echo("Thank you for signing up Guestbook...<p>");

?>

</font>
<font color="#000066" face=verdana size=2>
<a href="bukutamu3.php">View Guestbook</a> <a href="bukutamu1.php">Sign Up</a>

</font>
</body>
</html>