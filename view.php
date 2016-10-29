<?php
    require_once("session.php");
    require_once("connect.php");
    if (isset($_POST['submit'])) {
        $title=$_POST['title'];
        $cat=$_POST['cat'];
        $des=$_POST['des'];
        $price=$_POST['price'];
        $sr=$_POST['sr'];
        $email=$_SESSION['email'];   
        $sql="SELECT * FROM sell";
        $img_name;$j;
        $rs=mysqli_query($con,$sql) or die("error in select query");
        $id=mysqli_num_rows($rs);
        $id++;
        for ($i = 1,$j=0; $i <= count($_FILES['file']['name']); $i++,$j++) {
            $target_path = "uploads/";
            $target_path = $target_path . $id."img".$i.".jpeg";
            $img_name[$j]=mysqli_real_escape_string($con,$target_path);
            
            move_uploaded_file($_FILES['file']['tmp_name'][$j], $target_path); 
        }
        if($j<4){
            for(;$j<4;$j++){
              $img_name[$j]="uploads/temp.jpeg";  
               $img_name[$j]= mysqli_real_escape_string($con,$img_name[$j]);
            }
        }
        echo $id."   ". $title."   ".$cat."   ".$des."   ".$price."   ".$sr."   ".$email."   ".$img_name[0]."   ".$img_name[1]."   ".$img_name[2]."   ".$img_name[3];
        $sql="INSERT INTO sell VALUES ('".$id."','".$title."','".$des."','".$cat."','".$sr."','".$price."','".$img_name[0]."','".$img_name[1]."','".$img_name[2]."','".$img_name[3]."','".$email."')";
        $rs=mysqli_query($con,$sql) or die("error in insert query".mysqli_error());
        echo $rs;
        header("Location:pp.php");
    }
?>