<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("CCTBM",$con);
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
$count=0;
$username=$_POST['username'];
$password=$_POST['password'];

$result = mysql_query("SELECT * FROM register");
while($row=mysql_fetch_array($result))
{
$user=$row['username']; 
$pass=$row['password'];
if($username == $user&& $password==$pass)
{
echo "<script>
      document.cookie ='username'+'='+'$username';
	window.location='budoff.html';</script>";
$count=0;
break;
}
else if($password != $pass||$username != $user)
{
$count++;
}
}
if($count>0)
{
echo "<script type='text/javascript'>alert('Incorrect Username or Password');
window.location='log.html';
</script>";
}
?>