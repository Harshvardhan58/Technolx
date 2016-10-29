<html>
    <head>
        <style>
            .comment_wrap{
                width:700px;
                height:120px;
                background: lightcyan;
                margin-bottom:10px;
              //  border: 1px dashed black;
                margin-top:10px;
                padding-left: 10px;
                padding-top: 5px;
                box-shadow: 2px 2px 10px black;
            }
        #comment_msg
            {
                width:700px;
                height:80px;
                resize: none;
                
                
            }
        </style>
    
    </head>
     <body>
    <?php
        //require_once('session.php');
         session_start();
        require_once('connect.php');
        $postid=$_POST['postid'];
         //$postid=1;
        $sql="SELECT * FROM comment WHERE postid='".$postid."'";
        $rs=mysqli_query($con,$sql) or die("eror".mysqli_error());
         //$num=mysql_num_rows($rs);
         $num=1;
        while($row=mysqli_fetch_array($rs)){
    ?>
   
        <div class="comment_wrap" id="<?php echo $num; ?>">
            <div class="comment_name"> Name : <?php echo $row['name'];?></div>
            <div class="comment_email"> Email : <?php echo $row['email'];?></div>
            <div class="comment_msg"> Comment : <?php echo $row['msg'];?></div>
        </div>
    <?php 
     $num++;   }
    ?>
    <div id="new_c_wrap">
        <textarea id="comment_msg"></textarea> <br>  
        <button id="post_c" onclick="comment_fn()">Comment</button> 
         
         
         
         
         
    </div>
    
    
    
    
    
    </body>
    







<script src="js/jquery.js"></script>
<script type="text/javascript">
   
    
    
    
</script>




</html>
    