<?php
include 'database/class.database.php'; // Include the database connection file
include 'includes/header.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $school = $_POST['school'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $department = $_POST['department'];
    // $location = $_POST['location'];
    // $age = $_POST['age'];

    // Validate that the password and confirm password match
    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match.'); window.history.back();</script>";
        exit();
    }

    // Check if the email already exists
    $check_email_query = "SELECT * FROM user WHERE email='$email'";
    $email_result = $conn->query($check_email_query);

    if ($email_result->num_rows > 0) {
        echo "<script>alert('This email is already registered. Please use a different email.'); window.history.back();</script>";
        exit();
    }




    // Insert the data into the database with unverified status and OTP
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password for security
    $sql = "INSERT INTO user (name, email, department, password, school)
            VALUES ('$name', '$email', '$department', '$hashed_password', '$school')";

    if ($conn->query($sql) === TRUE) {
       
            echo "<script>alert('Registration successful! .'); window.location.href = 'login.php';</script>";
        }
    else {
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "'); window.history.back();</script>";
    }
    

    // Close the connection
    $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="users/style.css">
    

    
</head>

    <header>
        <nav>
            <div class="logo">Automatic TimeTable Builder</div>
            <ul>
                <li><a href="index.php" >Home</a></li>
                <li><a href="users/register.php">Student</a></li>
                <li><a href="users/register.php">Lecturer</a></li>
                <li><a href="admin/login.php">Admin</a></li>
                <!-- <li><a href="#contact">Contact</a></li> -->
            </ul>
        </nav>
    </header>

   

<body>
    


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="login-box">
        <h1 id="hl">Sign Up</h1>
        <div class="textbox ">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" name="name" placeholder="Name" >
            <span class="help-block"></span>
        </div>
        <div class="textbox ">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="email" name="email" placeholder=" Email" >
            <span class="help-block"></span>
        </div>
        <div class="textbox ">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="email" name="input" placeholder=" School" >
            <span class="help-block"></span>
        </div>
        <div class="textbox ">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="email" name="input" placeholder=" Department" >
            <span class="help-block"></span>
        </div>
        <div class="textbox <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" name="password" placeholder="Password">
            <span class="help-block"></span>
        </div>
        
        <div class="textbox <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" name="password" placeholder="Confirm Password">
            <span class="help-block"></span>
        </div>
        
        <input type="submit" class="btn btn-primary" value="Register">
        <p>Already Registered? <a href="users/login.php">Sign In</a></p>
        <!-- <p>Forgot password? <a href="mailto:example@example.com?subject=Password Reset">Reset</a></p> -->
    </div>
</form>



    <footer>
        <p>&copy; Automatic TimeTable Builder. All rights reserved.</p>
    </footer>
</body>
