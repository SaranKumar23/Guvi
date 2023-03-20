<?php
$n=$_POST['username'];
$c=$_POST['Password'];
$con=mysqli_connect("localhost","root","","sample");
$sql="insert into student values('$n','$c')";
$r=mysqli_query($con,$sql);
if($r)
{
    echo "Data inserted";
}
else{
    echo "Data not inserted";
}
?>