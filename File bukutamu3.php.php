<html>
<head>
<title>
Guestbook
</title>
</head>

<body bgcolor="#99CCFF">
<font color="#000066" face=verdana size=1>
<h3 align=left> View Guestbook
</h3>

<?php require("utama.php"); $link=open_connection();
$tablename="guestbook";
$sqlstr="SELECT * FROM $tablename ORDER BY id DESC"; $result = mysql_query ($sqlstr) or die ("Invalid query"); while ($row = mysql_fetch_object ($result))
{
$nama=$row->nama;
$posted=substr($row->posted,8,2)."-".substr($row->posted,5,2)."-".substr($row-
>posted,0,4);
$email=$row->email;
$alamat=$row->alamat;
$kota=$row->kota;
$msg=stripslashes($row->msg); echo("Posted : $posted<br>"); echo("Nama : $nama<br>");
echo("E-Mail : <a href=mailto:$email>$email</a><br>"); echo("Alamat : $alamat<br>"); echo("kota : $kota<br>"); echo("Message :<br>"); echo("$msg<br>");
echo("<hr size=1 width=100%>");
}
mysql_close($link);

?>

</font>
<font color="#000066" face=verdana size=2>
<a href="bukutamu1.php">Sign Up</a>
</font>
</body>
</html>