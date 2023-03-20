<?php
$n=$_POST['username'];
$c=$_POST['Email'];
$u=$_POST['Phone Number'];
$t=$_POST['Dob'];
$t1=$_POST['New password'];
$t2=$_POST['Confirm password'];
$con=mysqli_connect("localhost","root","","sample");
$sql="insert into student values('$n','$c','$u','$t','$t1','$t2')";
$r=mysqli_query($con,$sql);
if($r)
{
    echo "Data inserted";
}
else{
    echo "Data not inserted";
}
?>