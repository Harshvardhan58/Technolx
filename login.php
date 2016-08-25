<?php
    session_start();
    if(isset($_POST['email'])){
        require_once("connect.php");
        $name=$_POST['name'];
        $img=$_POST['img'];
        $email=$_POST['email'];
        $_SESSION['name']=$name;
        $_SESSION['img']=$img;
        $_SESSION['email']=$email;
        $sql="SELECT * FROM login WHERE email='$email'";
        $rs=mysql_query($sql) or die("Error in query".mysql_error());
        if(mysql_num_rows($rs)==1){
            echo "dashboard";
        }
        else{
            $sql="INSERT INTO login (name,email,img) VALUES ('$name','$email','$img')";
            $rs=mysql_query($sql) or die("Error in query".mysql_error());
        }
    }














?>