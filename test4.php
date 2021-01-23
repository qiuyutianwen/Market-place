<!-- <html lang="en">
  <head>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="560112578537-05o6k320bderaldnhrq00pj5n0n0ts6n.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  </head>
  <body>
    <button type="button" title="SignUp with Google" class="g-signin2" data-onsuccess="onSignIn">
        <span><i class="fab fa-google"></i></span>
        <span id="accGoogle">LogIn with Google</span>
    </button>
    <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      }
    </script>
    <a href="#" onclick="signOut();">Sign out</a>
    <script>
      function signOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
          console.log('User signed out.');
        });
      }
    </script>
  </body>
</html> -->

<html>
<head>
  <script src="https://apis.google.com/js/api:client.js"></script>
  <script>
  var googleUser = {};
  var startApp = function() {
    gapi.load('auth2', function(){
      // Retrieve the singleton for the GoogleAuth library and set up the client.
      auth2 = gapi.auth2.init({
        client_id: '560112578537-05o6k320bderaldnhrq00pj5n0n0ts6n.apps.googleusercontent.com',
        cookiepolicy: 'single_host_origin',
        // Request scopes in addition to 'profile' and 'email'
        //scope: 'additional_scope'
      });
      attachSignin(document.getElementById('customBtn'));
    });
  };

  function attachSignin(element) {
    console.log(element.id);
    auth2.attachClickHandler(element, {},
        function(googleUser) {
          console.log('Full Name: ' + googleUser.getBasicProfile().getName());
          console.log('Id: ' + googleUser.getBasicProfile().getId());
          console.log('Email: ' + googleUser.getBasicProfile().getEmail());
          
        }, function(error) {
          alert(JSON.stringify(error, undefined, 2));
        });
  }
  </script>

  </head>
  <body>
  <!-- In the callback, you would hide the gSignInWrapper element on a
  successful sign in -->

  <button type="button" title="SignUp with Google" id="customBtn">
      <span><i class="fab fa-google"></i></span>
      <span id="accGoogle">LogIn with Google</span>
  </button>

  <script>startApp();</script>
  <a href="#" onclick="signOut();">Sign out</a>
  <script>
    function signOut() {
      var auth2 = gapi.auth2.getAuthInstance();
      auth2.signOut().then(function () {
        console.log('User signed out.');
      });
    }
  </script>
</body>
</html>
