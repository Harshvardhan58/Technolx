<html>
    <style>
        .img_data{
            
            margin-top: 10px;
            margin-left: 10px;
            width:150px;
            //border:1px solid blue;
            //display:inline-block;
            float: left;
            
        }
     .description{
            
            
            width:700px;
            height:120px;
           // margin-top: 5px;
            margin-left: 10px;
            //border:1px solid pink;
            display:inline-block;
            
        }
        .content_data{
            margin-bottom:20px;
            background: #D7CEC7;
            padding: 5px;
            cursor: pointer;
        }
        
    </style>
<?php
    require_once('session.php');
    require_once('connect.php');
   $email=$_SESSION['email'];
    $sql="SELECT * from sell where email='".$email."'";
    $rs=mysqli_query($con,$sql) or die('error'.mysqli_error());
    while($row=mysqli_fetch_array($rs)){
        ?>
        <div class="content_data" id="<?php echo $row['postid'];?>" onclick="call_post(this);" style="overflow:hidden;">
                <div class="img_data" style="overflow:hidden;">
                    <img src="<?php echo $row['img1'];?>" width="150px" height="auto" alt="image not available"/>
                    <br>
                    
                </div>
                <div class="description">
                    <h3><?php echo $row['title'];?></h3>
                    <h3><div id='price'>Rs.<?php echo $row['price'];?></div></h3>
                    <button style="margin:-10px; float:right;" onclick="delete1(this);" id="<?php echo $row['postid'];?>">Delete</button>
                </div>



        </div>
        
  <?php      
    }
    ?>
     <script src="js/jquery.js"></script>
    <script type="text/javascript" >
        function call_post(ob){
            window.location="posts.php?postid="+ob.id;
        }
    
    </script>
   
</html>