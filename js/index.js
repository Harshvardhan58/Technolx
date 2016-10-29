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
    var name = profile.getName();
    var email = profile.getEmail();
    var img = profile.getImageUrl();
    var atpos=email.indexOf("@");
    var domain=email.substring(atpos+1);
    if(domain == 'technonjr.org' || domain == 'TECHNONJR.ORG'){
    $.post("login.php",{name:name, email:email, img:img},function(output){
                    $("#login_form").html(output).show();  
     });
    for(var i=0;i<20000;i++){
        
    }
    window.location='dashboard1.php';    
 }
    else{
         signOut();
        window.open("logout.php");
    }
}
function onFailure(error) {
                console.log(error);
            }
  $("#login_form").fadeIn(2000);
 
function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }