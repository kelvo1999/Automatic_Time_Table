<?php
include '../database/class.database.php'; // Include the database connection file
include '../includes/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and trim spaces
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $school = trim($_POST['school']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);
    $department = trim($_POST['department']);

    // Validate password match
    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match.'); window.history.back();</script>";
        exit();
    }

    // Check if email already exists
    $check_email_query = "SELECT id FROM user WHERE email = ?";
    $stmt = $conn->prepare($check_email_query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "<script>alert('This email is already registered.'); window.history.back();</script>";
        exit();
    }
    $stmt->close();

    // Hash the password securely
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user into the database using prepared statement
    $sql = "INSERT INTO user (name, email, department, password, school) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $email, $department, $hashed_password, $school);

    if ($stmt->execute()) {
        echo "<script>alert('Registration successful! Please log in.'); window.location.href = 'login.php';</script>";
    } else {
        echo "<script>alert('Error: Could not register user.'); window.history.back();</script>";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>

 
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
                <li><a href="../admin/admin.php">Admin</a></li>
                <!-- <li><a href="#contact">Contact</a></li> -->
            </ul>
        </nav>
    </header>



    


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
            <input type="text" name="school" placeholder=" School" >
            <span class="help-block"></span>
        </div>
        <div class="textbox ">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" name="department" placeholder=" Department" >
            <span class="help-block"></span>
        </div>
        <div class="textbox <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" name="password" placeholder="Password">
            <span class="help-block"></span>
        </div>
        
        <div class="textbox <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" name="confirm_password" placeholder="Confirm Password">
            <span class="help-block"></span>
        </div>
        
        <input type="submit" class="btn btn-primary" value="Register" name="register">
        <p>Already Registered? <a href="login.php">Sign In</a></p>
        <!-- <p>Forgot password? <a href="mailto:example@example.com?subject=Password Reset">Reset</a></p> -->
    </div>
</form>



    <footer>
        <p>&copy; Automatic TimeTable Builder. All rights reserved.</p>
    </footer>
</body>
</html>