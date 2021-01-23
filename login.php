<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("Location: /scroll.php");
    exit;
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    if(!empty($username_err))
    {
        echo "<script>alert('$username_err');</script>";
    } elseif (!empty($password_err))
    {
        echo "<script>alert('$password_err');</script>";
    }
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirect user to welcome page
                            header("Location: /scroll.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                $error1 =  mysqli_stmt_error($stmt);
                echo "<script>alert('$error1');</script>";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
    if($username_err === "No account found with that username.")
    {
        echo "<script>alert('$username_err');</script>";
    } elseif ($password_err === "The password you entered was not valid.")
    {
        echo "<script>alert('$password_err');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>

        <title>CMPE272</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato|Nanum+Gothic:700|Raleway&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" rel="stylesheet">

        <link rel="stylesheet" href="CSS/StyleLoginForm.css"/>
        <link rel="stylesheet" type="text/css" href="CSS/style.css" />
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
            attachSignin(document.getElementById('googleLogin'));
          });
        };

        function attachSignin(element) {
          console.log(element.id);
          auth2.attachClickHandler(element, {},
              function(googleUser) {
                console.log('Full Name: ' + googleUser.getBasicProfile().getName());
                console.log('Id: ' + googleUser.getBasicProfile().getId());
                console.log('Email: ' + googleUser.getBasicProfile().getEmail());
                handleData(googleUser.getBasicProfile().getId(), googleUser.getBasicProfile().getName(), googleUser.getBasicProfile().getEmail());
              }, function(error) {
                alert(JSON.stringify(error, undefined, 2));
              });
          //handle data recieved from Facebook login
          var afterUrl = "scroll.php";
          var myurl="handleGoogleAjax.php";
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
        }
        </script>
        <script>startApp();</script>
    </head>

    <body class="demo-ama render">
        <div class="row">
            <h1 class="header__title">CMPE272 Team Project</h1>
            <div style="width:100%; position: absolute; right: 0; bottom: 0;"><div style="width:100%; position: relative;">
                <h2 style="text-align: center; margin: 50px 0;">Team member</h2>
                <nav class="menu menu--ama">
                    <a class="menu__item" href="#">
                        <span class="menu__item-name">Yu Qiu</span>
                    </a>
                    <a class="menu__item" href="#">
                        <span class="menu__item-name">Bo An</span>
                    </a>
                    <a class="menu__item" href="#">
                        <span class="menu__item-name">Jing Xue</span>
                    </a>
                    <a class="menu__item" href="#">
                        <span class="menu__item-name">Dongmei Yin</span>
                    </a>
                    <a class="menu__item" href="#">
                        <span class="menu__item-name">Yiru Sun</span>
                    </a>
                </nav>
            </div></div>
            <div id="callLogin">
                <button class="" type="button" aria-placeholder="Click Here to Login and SignUp">
                    <i class="far fa-user"></i> &nbsp; My Account
                </button>
            </div>

            <div id="AccForm">

                <div class="m5 login-panel" id="test">

                    <span id="close"><i class="fas fa-times"></i></span>

                    <ul>
                        <li>
                            <div class="single-signin">
                                <button type="button" title="SignUp with Google" id="googleLogin">
                                    <span><i class="fab fa-google"></i></span>
                                    <span id="accGoogle">LogIn with Google</span>
                                </button>

                                <button type="button" title="SignUp with Facebook" onclick="facebookLogin()">
                                    <span><i class="fab fa-facebook-f"></i></span>
                                    <span id="accFacebook">LogIn with Facebook</span>
                                </button>

                                <button type="button" title="SignUp with Google" onclick="formChange()">
                                    <span><i id="accIcon" class="fas fa-user-plus"></i></span>
                                    <span id="logSignBtn">SignUp</span>
                                </button>
                            </div>
                        </li>

                        <li>
                            <div class="signup-form" id="newUser">
                                <div class="header">
                                    <div class="welcome">SignUp</div>
                                    <div class="subtitle">Create your Account and Connect with Us.</div>
                                </div>

                                <form class="form-content" role="form" action="register.php" method="post">
                                    <div class="input-field">
                                        <input type="email" id="emailId" name="username" required="required" class="txtField" placeholder="&#xf0e0; E-Mail ID"/>
                                        <span class="underLine"></span>
                                    </div>

                                    <div class="input-field">
                                        <input type="password" name="password" required="required" class="txtField" placeholder="&#xf084; Password"/>
                                        <span class="underLine"></span>
                                    </div>

                                    <div class="input-field">
                                            <input type="password" name="confirmpassword" required="required" class="txtField" placeholder="&#xf084; Confirm Password"/>
                                            <span class="underLine"></span>
                                        </div>

                                    <div class="form-footer">
                                        <button class="submit-btn" name="submit" type="submit" value="submit">SignUp</button>
                                    </div>
                                </form>
                            </div>

                            <div class="login-form">
                                <div class="header">
                                    <div class="welcome">Welcome Back</div>
                                    <!-- <div class="subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div> -->
                                </div>

                                <form class="form-content" role="form" action="login.php" method="post">
                                    <div class="input-field">
                                        <input type="text" id="userName" name="username" required="required" class="txtField"  placeholder="&#xf007; Username"/>
                                        <span class="underLine"></span>
                                    </div>

                                    <div class="input-field">
                                        <input type="password" name="password" required="required" class="txtField" placeholder="&#xf084; Password"/>
                                        <span class="underLine"></span>
                                    </div>

                                    <div class="form-footer">
                                        <button class="submit-btn" name="submit" type="submit" value="submit">LogIn</button>
                                        <a href="" title="Forgot Password ?">Forgot Password ?</a>
                                    </div>
                                </form>

                            </div>

                        </li>
                    </ul>

                </div>

            </div>

        </div>

        <!-- facebook login -->
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
              console.log("Connected");

            } else {
              // Not logged into your webpage or we are unable to tell.
              // document.getElementById("status").innerHTML =
              //   "Please log " + "into this webpage.";
              console.log("Disconnected");
            }
          }

          function facebookLogin() {
            // Called when a person is finished with the Login Button.
            FB.getLoginStatus(function(response) {
              // See the onlogin handler
              if (response.status === "connected") {
                console.log("Already connected, disconnect now");
                FB.logout();
              }
              FB.login(function(response) {
                  if (response.authResponse) {
                   console.log('Welcome!  Fetching your information.... ');
                   FB.api('/me', function(response) {
                     console.log('Good to see you, ' + response.name + '.');
                   });
                   testAPI();
                  } else {
                   console.log('User cancelled login or did not fully authorize.');
                  }
              }, { auth_type: 'reauthenticate' });
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
              handleFBData(response.id, response.name, response.email);
              // document.getElementById("status").innerHTML =
              //   "Thanks for logging in, " + response.name + "!";
              // test facebook fake username:admin_lndvdyo_test@tfbnw.net password: Admin123
            });
          }

          //handle data recieved from Facebook login
          var afterUrl = "scroll.php";
          var myurl="handleFBAjax.php";
          function handleFBData(id, name, email) {
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
        <script
          async
          defer
          crossorigin="anonymous"
          src="https://connect.facebook.net/en_US/sdk.js"
        ></script>
        <script src="JS/ScriptLoginForm.js"></script>
        <script src="JS/charming.min.js"></script>
        <script src="JS/anime.min.js"></script>
        <script src="JS/demo-ama.js"></script>
    </body>
</html>
