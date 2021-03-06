<!DOCTYPE html>
<html>
  <head>
    <title>Facebook Login JavaScript Example</title>
    <meta charset="UTF-8" />
  </head>
  <body>
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <script>
      function statusChangeCallback(response) {
        // Called with the results from FB.getLoginStatus().
        console.log("statusChangeCallback");
        console.log(response); // The current login status of the person.
        if (response.status === "connected") {
          // Logged into your webpage and Facebook.
          testAPI();
        } else {
          // Not logged into your webpage or we are unable to tell.
          // document.getElementById("status").innerHTML =
          //   "Please log " + "into this webpage.";
        }
      }

      function checkLoginState() {
        // Called when a person is finished with the Login Button.
        FB.getLoginStatus(function(response) {
          // See the onlogin handler
          statusChangeCallback(response);
        });
      }

      window.fbAsyncInit = function() {
        FB.init({
          appId: "830689571103351",
          cookie: true, // Enable cookies to allow the server to access the session.
          xfbml: true, // Parse social plugins on this webpage.
          version: "v9.0" // Use this Graph API version for this call.
        });

        FB.getLoginStatus(function(response) {
          // Called after the JS SDK has been initialized.
          statusChangeCallback(response); // Returns the login status.
        });
      };

      function testAPI() {
        // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
        console.log("Welcome!  Fetching your information.... ");
        FB.api("/me", { locale: "en_US", fields: "name, email" }, function(
          response
        ) {
          console.log("UserId: " + response.id);
          console.log("Successful login for: " + response.name);
          console.log("Email: " + response.email);
          handleData(response.id, response.name, response.email);
          // document.getElementById("status").innerHTML =
          //   "Thanks for logging in, " + response.name + "!";
          // test facebook fake username:admin_lndvdyo_test@tfbnw.net password: Admin123
        });
      }

      //handle data recieved from Facebook login
      var afterUrl = "test2.php";
      var myurl="handleFBAjax.php";
      function handleData(id, name, email) {
  			$.ajax({
  				url: myurl,
  				method: "POST",
  				data: {
  					'save': 1,
            'id': id,
  					'name': name,
            'email': email
  				}, success: function(data) {
  					console.log(data);
  					if(data == "Exists")
  					{
  						window.location.href=afterUrl;
  					}else if(data == "Inserted"){
  						alert('Login successfully!');
              window.location.href=afterUrl;
  					}else{
              alert(data);
            }
  				}
  			});
  		}
    </script>

    <!-- The JS SDK Login Button -->

    <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
    </fb:login-button>

    <div id="status"></div>

    <!-- Load the JS SDK asynchronously -->
    <script
      async
      defer
      crossorigin="anonymous"
      src="https://connect.facebook.net/en_US/sdk.js"
    ></script>
  </body>
</html>
