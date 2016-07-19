<?php
$conn=mysql_connect("localhost","root","");
if(!$conn)
die('could not connect'.mysql_error());
$h=$_POST['hdt'];
$e=$_POST['edt'];
$a=$_POST['adt'];
$s=$_POST['swdt'];
mysql_select_db("CCTBM",$conn);
$tot=intval($h)+intval($e)+intval($a)+intval($s);
if((intval($h))<0||(intval($e))<0||(intval($a))<0||(intval($s))<0)
{
echo "<script>
alert('Please check your credentials');
window.location.href='budoff.html';
</script>";
}
else if($tot>100){
echo "<script>
alert('You exceeded the total points');
window.location.href='budoff.html';
</script>";
}
else
{
mysql_query("UPDATE pointInfo SET HEALTH=$h,EDUCATION=$e,AGRICULTURE=$a,SOCIAL=$s WHERE id=1",$conn);
echo "<script>
alert('successfully transacted');
window.location.href='budoff.html';
</script>";
}
mysql_close($conn);
?>