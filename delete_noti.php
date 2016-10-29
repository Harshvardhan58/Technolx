<?php
    require_once('connect.php');
    $postid=$_POST['noti'];
    //$postid=1;
    $sql="UPDATE comment SET noti=0 WHERE postid='".$postid."'";
    $rs=mysqli_query($con,$sql);
?>