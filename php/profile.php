<?php
$n=$_GET['username'];
$c=$_GET['Email'];
$u=$_GET['Phone Number'];
$t=$_GET['Dob'];
$t1=$_GET['New password'];
$t2=$_GET['Confirm password'];
$con=mysqli_connect("localhost","root","","sample");
$sql="SELECT * from student ('$n','$c','$u','$t','$t1','$t2')";
$r=mysqli_query($con,$sql);
if($r)
{
    echo "Data read successfully";
}
else{
    echo "Data not read successfully";
}
?>