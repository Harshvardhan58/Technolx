<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        require_once('session.php');
    ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
        
        .button 
        {
                background-color: #8EAEBD;
                display: inline-block;
              
                
             
                color: white;
                text-align: center;
                font-size: 28px;
                
                transition: all 0.5s;
                cursor: pointer;
               
        }
           .button:hover
        {
                background-color: #8EAEBD;
                display: inline-block;
                content: '»';
                
             
                color: white;
                text-align: center;
                font-size: 20px;
                
                transition: all 0.5s;
                cursor: pointer;
               
        }
         #noti_data{
        overflow-y: scroll;
    }
       
        input
        {
            color:black;
        }
        textarea
        {
            resize:none;
        }
        #sell
        {
            width:700px;
            height:800px;
            background: rgba(0,0,2,0.5);
            //font-size:20px;
            padding:15px;
           // margin:10px;
           // position:relative;
            top:-10%;
        }
        form input{
            font-family: "Roboto", sans-serif;
              outline: 0;
              background: #f2f2f2;
              width: 100%;
              border: 0;
              margin: 0 0 15px;
              padding: 15px;
              box-sizing: border-box;
              font-size: 14px;
              margin:15px;
              background:#F2F2F2;
              max-width:425px;
              
        }
        form textarea{
             margin:15px;
            
        }
        form select{
             margin:15px;
             
             padding: 10px;
        }

       #arrange
       {
            position:absolute;
            z-index:1000;
            top:1%;
            height:auto;
            width:auto;
            margin-top: 6%;
            left:25%;
       }
       .colour{
        color:white;
       }

       @import "http://fonts.googleapis.com/css?family=Droid+Sans";
        
        #maindiv{
        width:960px;
        margin:40px auto;
        padding:10px;
        font-family:'Droid Sans',sans-serif
        }
        #formdiv{
        width:500px;
        float:left;
        text-align:center
        }
        
        h2{
        margin-left:30px
        }
        .upload{
        background-color:#8EAEBD;
      
        color:#fff;
        border-radius:5px;
        padding:10px;
        
        box-shadow:2px 2px 15px rgba(0,0,0,.75)
        }
        .upload:hover{
        cursor:pointer;
        background:#36444D;
        
        box-shadow:0 0 5px rgba(0,0,0,.75)
        }
        #file{
        color:green;
        padding:5px;
        border:1px solid #123456;
        background-color:#f9ffe5;
        float:left;
        }
        #upload{
        }
        #noerror{
        color:green;
        text-align:left
        }
        #error{
        color:red;
        text-align:left
        }
        #img{
        width:17px;
        border:none;
        height:17px;
        margin-left:-20px;
        margin-bottom:91px
        }
        .abcd{
        float:left;
        margin-left: 15px;
        }
        .abcd img{
        height:98px;
        width:98px;
        padding:5px;
        border:1px solid #e8debd
        }
        b{
        color:red
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
            <script>
                var abc = 0;   
                var br_count=19; 
                var img_count=0;
                var img_load=1;
                 // Declaring and defining global increment variable.
            $(document).ready(function() {
            //  To add new input file field dynamically, on click of "Add More Files" button below function will be executed.
            $('#add_more').click(function() {
                img_count++;
                if(img_count===3){
                    $('#add_more').hide();
                }
            $(this).before($("<div/>", {
            id: 'filediv'
            }).fadeIn('slow').append($("<input/>", {
            name: 'file[]',
            type: 'file',
            id: 'file'
            }) /*$("<br/><br/>")*/));
            var sell=$("#sell").height();
                if(img_count==2){
                     sell+=110;
                }
                else{
                    sell+=130;
                }
            
            document.getElementById('sell').style.height=sell+"px";
            br_count+=5;
            var br="";
            for(var i=0;i<br_count;i++){
                br=br+"<br>";
            }
            document.getElementById('bre').innerHTML=br;
            });
            // Following function will executes on change event of file input to select different file.
            $('body').on('change', '#file', function() {
            if (this.files && this.files[0]) {
            abc += 1; // Incrementing global variable by 1.
            var z = abc - 1;
            var x = $(this).parent().find('#previewimg' + z).remove();
            if(img_load<=2){
                 var sell=$("#sell").height();
                sell+=45;
                document.getElementById('sell').style.height=sell+"px";
                br_count+=4;
                var br="";
                for(var i=0;i<br_count;i++){
                    br=br+"<br>";
                }
                document.getElementById('bre').innerHTML=br;
                img_load++;
            }
            else{
                var sell=$("#sell").height();
                if(img_load==3){
                    sell-=60;
                }
                else{
                     sell-=110;
                }
               
                document.getElementById('sell').style.height=sell+"px";
                br_count-=6;
                var br="";
                for(var i=0;i<br_count;i++){
                    br=br+"<br>";
                }
                document.getElementById('bre').innerHTML=br;
                img_load++;
            }   
           
                
                
                
                
                
            $(this).before("<div id='abcd" + abc + "' class='abcd' style='float:left;'><img id='previewimg" + abc + "' src=''/></div>");
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(this.files[0]);
            $(this).hide();
            /*$("#abcd" + abc).append($("<img/>", {
            id: 'img',
            src: 'x.png',
            alt: 'delete'
            }).click(function() {
            $(this).parent().parent().remove();
            }));*/
            }
            });
            // To Preview Image
            function imageIsLoaded(e) {
            $('#previewimg' + abc).attr('src', e.target.result);
            };
            $('#upload').click(function(e) {
            var name = $(":file").val();
            if (!name) {
            alert("First Image Must Be Selected");
            e.preventDefault();
            }
            });
            });
            </script>

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
                            
                            <div style="height:300px;" id="noti_data">
                                
                            </div>
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
                else $('#noti_Butto').css('background-color', '#FFF');
                    notidata();// CHANGE BACKGROUND COLOR OF THE BUTTON.
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

<a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12" id="col-12">
                    <div class="intro-message">
                    <div id="bre">
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                    <p class="copyright text-muted small">Copyright &copy; Your Company 2014. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    
    <div id="profile_img" onmouseenter="p();" onmouseleave="p1();">
        <img src="" alt="profile pic" id="profile_image"/>
        
    </div>
    <p id="profile_name"  ></p>
    
                <center>
                    <div id="arrange">
                <div id="sell">
                        <h1 id="h1" class="colour">Sell</h1>            
                        <hr class="intro-divider">
                        <center>
                        <form method="post" action="view.php" enctype="multipart/form-data">
                        <table> 
                            <tr>
                                <td valign="center" class="colour">Ad Title :</td>
                                <td><input id="Fname" type = "Text" name = "title" maxlength="70" size="80" required  /></td>
                                
                            </tr>    
                            <tr>
                                <td valign="center" class="colour">Category :</td>
                                <td>
                                    <select id="mydropdown" style="color: black;" name="cat">
                                        <option style="color: black;" value="Bikes">Bikes</option>
                                        <option style="color: black;" value="Books,Sports & Hobbies">Books,Sports & Hobbies</option>
                                        <option style="color: black;" value="Vehicles">Vehicles</option>
                                        <option style="color: black;" value="Mobiles">Mobiles</option>
                                        <option style="color: black;" value="Electronics and Appliances">Electronics and Appliances</option>
                                        <option style="color: black;" value="Fashion">Fashion</option>
                                        <option style="color: black;" value="Furniture">Furniture</option>
                                        </select>
                                        </td>
                                        
                            </tr>
                            <tr>
                                <td valign="center" class="colour">Sell/Rent :</td>
                                <td>
                                    <select id="mydrop" style="color: black;" name="sr">
                                        <option style="color: black;" value="Sell">Sell</option>
                                        <option style="color: black;" value="Rent">Rent</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td valign="center" class="colour">Ad Description :</td>
                                <td><textarea id="description" name="des" cols="50" rows="4"  style="color: black;" maxlength="4096" placeholder="Include the brand, model, age and any included accesories." required></textarea></td>
                            </tr>
                            <tr>
                                <td  valign="center" class="colour">Price :</td>
                                <td><input type = "text" id="Price" name = "price" placeholder="In rupees" required pattern="\d+"/></td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <br><font color="white">Image Upload :</font>
                                </td>
                            
                                <td>
                                   <!-- <form enctype="multipart/form-data" action="" method="post">-->
                                    
                                    <div id="filediv"><input name="file[]" type="file" id="file" required/></div>
                                    
                                     <input style="width:230px; float:left;" type="button" id="add_more" class="upload" value="Add More Files"/>
                                </td>
                            </tr>
                             <tr>
                                <td></td>
                                <td style="display:inline-block; width:450px;">
                                   
                                   <!-- <input style="width:230px;" type="submit" value="Upload File" name="submit" id="upload" class="upload"/>-->
                                </td>
                                   <!-- </form>-->
                            </tr>
                            <tr>
                                <td valign="center"></td>
                                <td><input type="submit" name="submit" value="Submit" onclick="form_submit();" class="button" onmouseenter="fn1(this);" onmouseleave="fn2(this);" id="submit" ></td>
                            </tr>

                        </table>
                        </form>
                        </center>
                    </div>
                </div>
            </center>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    function fn1(ob){
        
            ob.value="Submit >>";
        
        
        
    }
    function fn2(ob){
        ob.value="Submit ";
        
    }
   
    </script>
      
        </div>
        </div>
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
    function notidata(){
        var email="<?php echo $email; ?>";
       $.post('noti_data.php',{email:email},function(data){
          $('#noti_data').html(data);
       });
    }
    function post_call(ob){
        $.post('delete_noti.php',{noti:ob.id},function(){
            
        });
        window.location="posts.php?postid="+ob.id;
    }
        
    </script>

</body>

</html>
