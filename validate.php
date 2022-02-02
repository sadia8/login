<html>
<body bgcolor="#ffffCC">
<center>
<h1><?php
include 'config.php';
$f_usr= $_POST["userid"];
$f_pswd= $_POST["password"];
$con=mysql_connect("localhost","root","password");
if(! $con)
{
        die('Connection Failed'.mysql_error());
}
mysql_select_db("my_db",$conn);
$result=mysql_query("select * from users");
while($row=mysql_fetch_array($result))
{
    if($row["username"]==$f_usr && $row["password"]==$f_pswd)
        echo"Welcome : $f_usr";
    else
        echo"Sorry : $f_usr";
}
?>
</h1>
</center>
</body>
</html>