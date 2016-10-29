<?php
    require_once('connect.php');
    $email=$_POST['email'];
    $name=$_POST['name'];
    $postid=$_POST['postid'];
    $msg=$_POST['msg'];
    $sql="SELECT * FROM sell WHERE postid='".$postid."'";
    $owner="";
    $noti=1;
    $rs=mysqli_query($con,$sql) or die("error in insert comment".mysqli_error());
    while($row=mysqli_fetch_array($rs)){
        $owner=$row['email'];
    }
    $sql="INSERT INTO COMMENT VALUES ('".$postid."','".$msg."','".$email."','".$name."','".$owner."','".$noti."')";
    $rs=mysqli_query($con,$sql) or die("error in insert comment".mysqli_error());
?>