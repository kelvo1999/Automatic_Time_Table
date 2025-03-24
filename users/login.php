<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <header>
        <nav>
            <div class="logo">Automatic TimeTable Builder</div>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="register.php">Student</a></li>
                <li><a href="register.php">Lecturer</a></li>
                <li><a href="../index.php">Admin</a></li>
                <!-- <li><a href="#contact">Contact</a></li> -->
            </ul>
        </nav>
    </header>

    <!DOCTYPE html>
<html>

<body>
    


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="login-box">
        <h1 id="hl">Login</h1>
        
        <div class="textbox ">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" name="input" placeholder="Username or Email" >
            <span class="help-block"></span>
        </div>
        
        <div class="textbox <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" name="password" placeholder="Password">
            <span class="help-block"></span>
        </div>
        
        <input type="submit" class="btn btn-primary" value="Login">
        <p>Don't have an account? <a href="register.php">Sign Up</a></p>
        <p>Forgot password? <a href="mailto:example@example.com?subject=Password Reset">Reset</a></p>
    </div>
</form>



    <footer>
        <p>&copy; Automatic TimeTable Builder. All rights reserved.</p>
    </footer>
</body>
</html>