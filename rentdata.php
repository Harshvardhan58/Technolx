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
            //border:1px solid #E7DFDD;
            display:inline-block;
            
        }
        .content_data{
            margin-bottom:20px;
            background: #c9d8c5;
            padding: 5px;
            cursor: pointer;
            box-shadow: 2px 2px 15px black;
        }
        
    </style>
<?php
    //require_once('session.php');
    session_start();
    require_once('connect.php');
    $cat=mysqli_real_escape_string($con,$_POST['cat']);
   // $cat="Bikes";
    $sql="SELECT * from sell where cat='".$cat."' AND sr='Rent'";
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
                </div>



        </div>
        
  <?php      
    }
    ?>
     <script type="text/javascript" >
        function call_post(ob){
            window.location="posts.php?postid="+ob.id;
        }
    
    </script>
</html>