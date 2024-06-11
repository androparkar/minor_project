<?php

// include_once("connection.php");
include_once("login.php");
include_once("signup.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style_login.css" />
    <title>Sign in & Sign up Form</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="login.php" class="sign-in-form" method="post">
                    <h2 class="title">Login</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="email" name="email" id="email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" id="password" />
                    </div>
                    <input type="submit" value="login" class="btn solid" name="login" />
                    
                </form>
                <form method="post" action="signup.php" class="sign-up-form" >
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username" id="username" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" id="email" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" id="password" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="Text" placeholder="Type:Teacher/Student" name="access" id="access" required/>
                    </div>
                    <input type="submit" class="btn" value="Sign up" name="signup" />
                    
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        create a account first.
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
                <img src="images/img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        login at here.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="images/img/register.svg" class="image" alt="logo" />
            </div>
        </div>
    </div>

    <script src="./vendor/alpinejs/app_login.js"></script>
</body>

</html>