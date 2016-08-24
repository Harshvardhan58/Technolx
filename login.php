<!DOCTYPE html>
<html>
    <head>
        <title>Technolx</title>
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
         <meta name="google-signin-scope" content="profile email">
        <meta name="google-signin-client_id" content="458339542108-1ln17cnk3hk4i7n4tbogua0fka2qhee6.apps.googleusercontent.com">
    </head>
    <body>
        <div id="wrapper">
            <div id="top">
                <div id="heading">
                    
                </div>
               
            </div>
            <div id="content">
                <div id="login_form">
                    <div align="center" id="my-signin2"></div>
                </div>
            </div>
            <div id="footer">
                
            </div>
        </div>
        <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
        <script type="application/javascript">
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
		
                /*$.post("checkvalidity.php",{name:ide, ema:ema},function(output){
                    $(".modal-header").html(output).show();*/
                
			
                
            }
	
            function onFailure(error) {
                console.log(error);
            }
        
        </script>
    </body>
</html>