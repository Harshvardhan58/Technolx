<html>
    <?php 
        require_once('session.php');
        require_once('connect.php');
        $postid=$_REQUEST['postid'];
        $sql="SELECT * FROM comment WHERE postid='".$postid."'";
        $rs=mysqli_query($con,$sql) or die("eror".mysqli_error());
        $num=mysqli_num_rows($rs);
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TechnOlx</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
<style>
     #noti_Container {
        position:relative;
    }
       
    /* A CIRCLE LIKE BUTTON IN THE TOP MENU. */
    #noti_Button {
        width:22px;
        height:22px;
        line-height:22px;
        border-radius:50%;
        -moz-border-radius:50%; 
        -webkit-border-radius:50%;
        background:#FFF;
        margin:-3px 10px 0 10px;
        cursor:pointer;
    }
        
    /* THE POPULAR RED NOTIFICATIONS COUNTER. */
    #noti_Counter {
        display:block;
        position:absolute;
        background:#E1141E;
        color:#FFF;
        font-size:12px;
        font-weight:normal;
        padding:0px 3px;
        margin:6px 0 0 40px;
        border-radius:2px;
        -moz-border-radius:2px; 
        -webkit-border-radius:2px;
        z-index:1;
    }
        
    /* THE NOTIFICAIONS WINDOW. THIS REMAINS HIDDEN WHEN THE PAGE LOADS. */
    #notifications {
        display:none;
        width:390px;
        position:absolute;
        top:40px;
        left:-30px;
        background:#FFF;
        border:solid 1px rgba(100, 100, 100, .20);
        -webkit-box-shadow:0 3px 8px rgba(0, 0, 0, .20);
        z-index: 0;
    }
    /* AN ARROW LIKE STRUCTURE JUST OVER THE NOTIFICATIONS WINDOW */
    #notifications:before {         
        content: '';
        display:block;
        width:0;
        height:0;
        color:transparent;
        border:10px solid #CCC;
        border-color:transparent transparent #FFF;
        margin-top:-20px;
        margin-left:10px;
    }
        
    /*h3 {
        display:block;
        color:#333; 
        background:#FFF;
        font-weight:bold;
        font-size:13px;    
        padding:8px;
        margin:0;
        border-bottom:solid 1px rgba(100, 100, 100, .30);
    }*/
        
    .seeAll {
        background:#F6F7F8;
        padding:8px;
        font-size:12px;
        font-weight:bold;
        border-top:solid 1px rgba(100, 100, 100, .30);
        text-align:center;
    }
    .seeAll a {
        color:#3b5998;
    }
    .seeAll a:hover {
        background:#F6F7F8;
        color:#3b5998;
        text-decoration:underline;
    }
     

/*#ads
{       
        position: absolute;
        z-index: 500px;
        top: 20%;
        height:auto;
        width: 1300px;
        display:block;
}
#adpost
{
        
}*/
    #noti_data{
        overflow-y: scroll;
    }
.qwwe
{
    
    z-index: 1000px;

    width:50px;
    height:40px;
    display:inline-block;
    margin: 5px;
}
#btn123
{
      
      display: block;
    background: #D7E7E7;
    color:black;
    width:150px;
    border:none;
    cursor: default;
    pointer-events: none;
    margin-top: 10px;

}/*
#asd
{

    position: absolute;
    width:1250px;
    float:right;
    top:103%;
}
#dsa
{
    position: absolute;
    width:1250px;
    float:right;
    top:109%;
}*/
    #ad_wrap{
        position: absolute;
        width:98%;
        height:600px;
        top:10%;
        background:white;
       
        
    }
    #comment_panel{
        margin-left: 8%;
        position: absolute;
        top:120%;
        width:100%;
    }
    #ad_des
    {
        position:absolute;
        top:81%;
        left:27%;
        text-align: justify;
        width:600px;;
    }  
    #dsa
    {
        position:absolute;
        top:90%;
        text-align: center;
        width:100%;
    }
    #comment_head{
        margin-left: 8%;
        position: absolute;
        top:105%;
        width:100%;
        font:'chiller';
    }
    #shadow
    {
        width:500px;
        height: 300px;
        background: black;
        box-shadow: 1px 1px 15px black;
        //padding-top:5px;
    }
    
     #profile_image{
            position:fixed;
            z-index:2000;
            top:1%;
            left:94%;
            border:1px solid black;
            width:40px;
            height:auto;
            border-radius: 50%;
            right:5%;
        }
        #profile_name{
            position:fixed;
            z-index:2010;
            top:8%;
            left:90%;
            background: #F8F8F8;
            width:auto;
            height:auto;
            border-radius: 10px;
            text-align:justify;
            padding:5px;
            box-shadow: 2px 2px 15px #000;
            display: none;
        }
</style>
</head>

<body onload="comment_call();">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="dashboard1.php">TechnOlx</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                       <a href="#about" id="noti_Butto">Notifications</a>
                    </li>
                    <li>
                        <a href="pp.php">Previous Post</a>
                    </li>
                    <li>
                        <a href="logout0.php">Logout</a>
                    </li>
                    <div>
                        <ul>
                    
                            <li id="noti_Container" onload="notidata();">
                            <div id="noti_Counter"></div>   <!--SHOW NOTIFICATIONS COUNT.-->
                
                <!--A CIRCLE LIKE BUTTON TO DISPLAY NOTIFICATION DROPDOWN
                            <div id="noti_Button"></div>  -->  

                <!--THE NOTIFICAIONS DROPDOWN BOX.-->
                            <div id="notifications">
                            
                            <div style="height:300px;" id="noti_data"></div>
                            <div class="seeAll"></div>
                            </div>
                            </li>
                 
                        </ul>
                    </div>

                <script>
                $(document).ready(function () {

        // ANIMATEDLY DISPLAY THE NOTIFICATION COUNTER.
                $('#noti_Counter')
                .css({ opacity: 0 })
                .text('')              // ADD DYNAMIC VALUE (YOU CAN EXTRACT DATA FROM DATABASE OR XML).
                .css({ top: '-10px' })
                .animate({ top: '-2px', opacity: 1 }, 500);

                $('#noti_Butto').click(function () {

            // TOGGLE (SHOW OR HIDE) NOTIFICATION WINDOW.
                $('#notifications').fadeToggle('fast', 'linear', function () {
                if ($('#notifications').is(':hidden')) {
                    $('#noti_Butto').css('background-color', '#F8F8F8');
                }
                else $('#noti_Butto').css('background-color', '#FFF');        // CHANGE BACKGROUND COLOR OF THE BUTTON.
                });

                $('#noti_Counter').fadeOut('slow');                 // HIDE THE COUNTER.

                return false;
                });

        // HIDE NOTIFICATIONS WHEN CLICKED ANYWHERE ON THE PAGE.
                $(document).click(function () {
                $('#notifications').hide();

            // CHECK IF NOTIFICATION COUNTER IS HIDDEN.
                if ($('#noti_Counter').is(':hidden')) {
                // CHANGE BACKGROUND COLOR OF THE BUTTON.
                $('#noti_Butto').css('background-color', '#F8F8F8');
                     notidata();
                }
                });

                 $('#notifications').click(function () {
                return false;       // DO NOTHING WHEN CONTAINER IS CLICKED.
                });
                 });
                </script>
                    
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="about"></a>
        <div class="container"><br>

            <div class="row">
                <div class="col-lg-12"><br><br><br><br>
                    <div class="intro-message" id="add_br">
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
        

                
            

        
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="dashboard1.php">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; TechnOlx 2016. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <?php 
    $sql="SELECT * FROM sell WHERE postid='".$postid."'";
        $rs=mysqli_query($con,$sql)or die("error in post get query".mysqli_error());
        $row=mysqli_fetch_array($rs);
    ?>

    <div id="ad_wrap" class="<?php echo $postid; ?>">
        <center><h2><?php echo $row['title'];?></h2></center>
        <center>
        <div id="shadow"><img src="<?php echo $row['img1'];?>" id="big_img" width="500px" height="300px";></div>
</center><br><br>
        <div id="adpost">
            <center>
            <img class="qwwe" src="<?php echo $row['img1'];?>" onclick="img_zoom(this);">           
            <img class="qwwe" src="<?php echo $row['img2'];?>" onclick="img_zoom(this);"> 
            <img class="qwwe" src="<?php echo $row['img3'];?>" onclick="img_zoom(this);">  
            <img class="qwwe" src="<?php echo $row['img4'];?>" onclick="img_zoom(this);">
            </center>
        </div>
    </div>
    <center><div id="ad_des"><center><h4><?php echo $row['des'];?></h4></center><br>
                   <center> <button id="btn123" width="100%" height="auto"><h3>Rs.<?php echo $row['price'];?></h3></button></center>
        </div></center>     
        <div id="comment_head"><h2>COMMENTS</h2></div>
        <div id="comment_panel">
        
        
        
        </div>
           
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        var br_count=15;
        var br="";
            function comment_call(){
            var id=document.getElementById('ad_wrap').className;
           $.post('comment.php',{postid:id},function(output){
              $('#comment_panel').html(output);
           });
                br="";
                var count="<?php echo $num; ?>";
                for(var i=0;i<((count*7)+15);i++){
                br=br+"<br>";
            }
                document.getElementById('add_br').innerHTML=br;
            }
        
        
        function img_zoom(ob){
            var temp_src=ob.src;
            document.getElementById("big_img").src=temp_src;
        }
        function comment_fn(){
        var msg=document.getElementById('comment_msg').value;
        var email="<?php echo mysqli_real_escape_string($con,$_SESSION['email']);?>";
        var name="<?php echo $_SESSION['name'];?>";
        var postid="<?php echo $postid;?>";
        $.post('add_comment.php',{email:email, name:name, msg:msg, postid:postid },function(){
           console.log(email+"  "+name+ "  "+ postid + "  " + msg);
        });
            var count="<?php echo $num; ?>";
            br_count+=(parseInt(count)*7);
             br_count+=7;
             br="";
        for(var i=0;i<br_count;i++){
            br=br+"<br>";
        }
        alert('Your comment has been posted.');
        document.getElementById('add_br').innerHTML=br;
        var id=document.getElementById('ad_wrap').className;
           $.post('comment.php',{postid:id},function(output){
              $('#comment_panel').html(output);
           });
            br_count-=(parseInt(count)*7);
    }
    </script>
 
        <div id="profile_img" onmouseenter="p();" onmouseleave="p1();">
        <img src="" alt="profile pic" id="profile_image"/>
        
    </div>
    <p id="profile_name"  ></p>
 <script type="text/javascript">
        document.getElementById('profile_image').src="<?php echo $img;?>";
        function p(){
            document.getElementById('profile_name').style.display="block";
            document.getElementById('profile_name').innerHTML="<?php echo $name;?>";
        }
         function p1(){
            document.getElementById('profile_name').style.display="none";
            document.getElementById('profile_name').innerHTML="";
        }
     function post_call(ob){
        $.post('delete_noti.php',{noti:ob.id},function(){
            
        });
        window.location="posts.php?postid="+ob.id;
    }
     function notidata(){
        var email="<?php echo $email; ?>";
       $.post('noti_data.php',{email:email},function(data){
          $('#noti_data').html(data);
       });
    }
        
    </script>

        
</body>
</html>