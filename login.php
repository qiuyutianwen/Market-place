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

        <title>Login Form</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato|Nanum+Gothic:700|Raleway&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" rel="stylesheet">

        <link rel="stylesheet" href="CSS/StyleLoginForm.css"/>
        <link rel="stylesheet" type="text/css" href="CSS/style.css" />

    </head>

    <body class="demo-ama render">
        <script>
          window.fbAsyncInit = function() {
            FB.init({
              appId      : '830689571103351',
              cookie     : true,
              xfbml      : true,
              version    : 'v9.0'
            });

            FB.AppEvents.logPageView();

          };

          (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "https://connect.facebook.net/en_US/sdk.js";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));

          function fbLogin(){
                FB.login(function(response){
                    if(response.authResponse){
                        fbAfterLogin();
                    }
                }, {scope: 'public_profile,email'});
          }

          function fbAfterLogin(){
            FB.getLoginStatus(function(response){
                if(response.status === 'connected') {
                    FB.api('/me', function(response) {
                        console.log(response);
                    });
                }
            });
          }

          function fbLogout(){
            FB.getLoginStatus(function (response) {
                if (response.authResponse) {
                   window.location = "https://www.facebook.com/logout.php?next=" +
                     'https://sleepy-meadow-98391.herokuapp.com/' +
                     "&access_token=" + response.authResponse.accessToken;
                }
              });
          }
        </script>

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
                                <button type="button" title="SignUp with Google" onclick="fbLogout()">
                                    <span><i class="fab fa-google"></i></span>
                                    <span id="accGoogle">LogIn with Google</span>
                                </button>

                                <button type="button" title="SignUp with Facebook" onclick="fbLogin()">
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


        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
        <!-- <script>
function submitform()
{
document.getElementById("register").submit();
alert("your form submitted");
}
</script> -->
        <script src="JS/ScriptLoginForm.js"></script>
        <script src="JS/charming.min.js"></script>
        <script src="JS/anime.min.js"></script>
        <script src="JS/demo-ama.js"></script>
    </body>
</html>
