<!DOCTYPE html>
<html lang="en">
    <?php 
        require_once('session.php');
    ?>

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
        
    h3 {
        display:block;
        color:#333; 
        background:#FFF;
        font-weight:bold;
        font-size:13px;    
        padding:8px;
        margin:0;
        border-bottom:solid 1px rgba(100, 100, 100, .30);
    }
        
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
         #noti_data{
        overflow-y: scroll;
    }
    </style> 

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
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
                    
                            <li id="noti_Container">
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
                     notidata();
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
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Contact</h1>            
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            Arushi Mehta  : &nbsp; &nbsp; mehta.17arushi@gmail.com
                            <br><br>
                            Harshvardhan Singh : &nbsp; &nbsp; harshvardhansingh58@gmail.com
                            <br><br>
                            Manasi Pandya  : &nbsp; &nbsp; manasipandya7@gmail.com
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Your Company 2014. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
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
