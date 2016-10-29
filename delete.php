<?php
require_once('connect.php');
$postid=$_POST['postid'];
//$postid=2;
$sql= "DELETE FROM sell WHERE postid='".$postid."'";
$res=mysqli_query($con,$sql) or die("error in delete post".mysqli_error());
$sql="DELETE FROM comment WHERE postid='".$postid."'";
$res=mysqli_query($con,$sql) or die("error in delete comment".mysqli_error());
?>