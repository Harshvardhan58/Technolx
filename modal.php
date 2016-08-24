<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
 <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="751808995199-jotb4s04fr4lcbc0a9qcu4lcjrsp754l.apps.googleusercontent.com">

	<link rel="stylesheet" href="bootstrap-social.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color:black">

<div class="container">
 
 
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
	  <br/>
	  <br/>
	  <br/>
	  <br/>
	  <h1 align="center" style="color:white">NJR Study Portal</h1>
	  
	  
	  <br/>
      <div class="modal-content">
	  <div class="modal-header" style="background-color:red">
        
        <h4 class="modal-title" align="center" style="color:white">Sign in</h4>
		
      </div>
		
        <div class="modal-body">
			 
			<div align="center" id="my-signin2"></div>
			 
        </div>
        
      </div>
	  
      <h4 align="right" style="color:white"> by : NJR (Nikunj Janil Rohit)</h4>
    </div>
  </div>
  
</div>
<script>
	$('#myModal').modal({
  backdrop: 'static',
  keyboard: false
})
$(document).ready(function(){$('#mymodal').open();})
function onSuccess(googleUser) {
		  var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());
		ide = profile.getName();
		ema = profile.getEmail();
        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
		
		$.post("checkvalidity.php",{name:ide, ema:ema},function(output){
			$(".modal-header").html(output).show();
		});
			
		
    }
	
    function onFailure(error) {
      console.log(error);
    }
    function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 240,
        'height': 50,
        'longtitle': true,
        'theme': 'white',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
    }
	
</script>

<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>

</body>
</html>
