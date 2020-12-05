<?php
	// Include config file
	require_once "config.php";
	$username = $password = $confirm_password = "";
	$username_err = $password_err = $confirm_password_err = "";
	
	if(isset($_POST['submit']))
	{ 
		//Validate username
	    if(empty(trim($_POST["username"]))){
	        $username_err = "Please enter a username.";
	    } else{
	        // Prepare a select statement
	        $sql = "SELECT id FROM users WHERE username = ?";
	        
	        if($stmt = mysqli_prepare($link, $sql)){
	            // Bind variables to the prepared statement as parameters
	            mysqli_stmt_bind_param($stmt, "s", $param_username);
	            
	            // Set parameters
	            $param_username = trim($_POST["username"]);
	            
	            // Attempt to execute the prepared statement
	            if(mysqli_stmt_execute($stmt)){
	                /* store result */
	                mysqli_stmt_store_result($stmt);
	                
	                if(mysqli_stmt_num_rows($stmt) == 1){
	                    $username_err = "This username is already taken.";
	                } else{
	                    $username = trim($_POST["username"]);
	                }
	            } else{
	            	$error1 =  mysqli_stmt_error($stmt);
	            	echo "<script>alert('$error1');</script>";
	            }

	            // Close statement
	            mysqli_stmt_close($stmt);
	        }
	    }
	    
	    // Validate password
	    if(empty(trim($_POST["password"]))){
	        $password_err = "Please enter a password.";     
	    } elseif(strlen(trim($_POST["password"])) < 6){
	        $password_err = "Password must have atleast 6 characters.";
	    } else{
	        $password = trim($_POST["password"]);
	    }
	    
	    // Validate confirm password
	    if(empty(trim($_POST["confirmpassword"]))){
	        $confirm_password_err = "Please confirm password.";     
	    } else{
	        $confirm_password = trim($_POST["confirmpassword"]);
	        if(empty($password_err) && ($password != $confirm_password)){
	            $confirm_password_err = "Password did not match.";
	        }
	    }
	    
	    // Check input errors before inserting in database
	    if(!empty($username_err))
	    {
			echo "<script>alert('$username_err');</script>";
	    } elseif (!empty($password_err)) 
	    {
	    	echo "<script>alert('$password_err');</script>";
	    } elseif (!empty($confirm_password_err)) 
	    {
	    	echo "<script>alert('$confirm_password_err');</script>";
	    }
	    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
	        
	        // Prepare an insert statement
	        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
	         
	        if($stmt = mysqli_prepare($link, $sql)){
	            // Bind variables to the prepared statement as parameters
	            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
	            
	            // Set parameters
	            $param_username = $username;
	            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
	            
	            // Attempt to execute the prepared statement
	            if(mysqli_stmt_execute($stmt)){
	                // Redirect to login page
	                $reg_success = "true";
	            } else{
	            	$error2 = mysqli_stmt_error($stmt);
	                echo "<script>alert('$error2');</script>";
	            }

	            // Close statement
	            mysqli_stmt_close($stmt);
	        }
	    }
	    
	    // Close connection
	    mysqli_close($link);
	    if($reg_success === "true")
	    {
	    	$success_message = "Account has been created successfully!";
	        echo "<script>alert('$success_message');</script>";
	    	header('Location: /FetchUserData.php');
            exit ;
	    }
	}
?>

<!DOCTYPE html>
<html>
    <head>
        
        <title>Register</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato|Nanum+Gothic:700|Raleway&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" rel="stylesheet">

        <link rel="stylesheet" href="CSS/StyleLoginForm.css"/>  
        <link rel="stylesheet" type="text/css" href="CSS/style.css" />      

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
                                <button type="button" title="SignUp with Google">
                                    <span><i class="fab fa-google"></i></span>
                                    <span id="accGoogle">LogIn with Google</span>
                                </button>

                                <button type="button" title="SignUp with Google">
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
                                        <input type="email" name="username" required="required" class="txtField" placeholder="&#xf0e0; E-Mail ID"/>
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
                                
                                <form class="form-content">
                                    <div class="input-field">
                                        <input type="text" id="userName" required="required" class="txtField"  placeholder="&#xf007; Username"/>
                                        <span class="underLine"></span>
                                    </div>
                                    
                                    <div class="input-field">
                                        <input type="password" required="required" class="txtField" placeholder="&#xf084; Password"/>
                                        <span class="underLine"></span>
                                    </div>
                                    
                                    <div class="form-footer">
                                        <button class="submit-btn" type="button">LogIn</button>
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