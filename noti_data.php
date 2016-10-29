<html>
    <style>
        .notifi{
            background: lightskyblue;
            color: white;
            height:50px;
            padding: 5px;
            padding-top: 15px;
            margin-bottom: 4px;
            margin-top: 4px;
            font-family: serif;
            font-size: 16px;
        }
        .notifi:hover{
            background: #F8F8F8;
            color: lightskyblue;
            cursor: pointer;
        }
    
    </style>
<?php 
    require_once('connect.php');
    $owner=$_POST['email'];
    //$owner="harshvardhan.singh@technonjr.org";
    $sql="SELECT * FROM comment WHERE owner='".$owner."' AND noti=1";
    $rs=mysqli_query($con,$sql) or die("error in select".mysqli_error());
    while($row=mysqli_fetch_array($rs)){
    ?>
    <div class="notifi" id="<?php echo $row['postid']; ?>" onclick="post_call(this);">
        <bold><?php echo $row['name']; ?></bold> has commented on your post.
    </div>
<?php
    }
?>
</html>