<?php
session_start();
include '../database/class.database.php'; // Include the database connection file
include '../includes/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Prepare SQL statement to prevent SQL injection
    $sql = "SELECT id, name, email, password FROM user WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $stored_hash = $user['password'];

        // Debugging: Uncomment this to check the hash (remove in production)
        // echo "<script>alert('Entered Password: $password | Stored Hash: $stored_hash');</script>";

        // Verify password
        if (password_verify($password, $stored_hash)) {
            // Start session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['name'] = $user['name'];

            // Redirect to dashboard
            header("Location: dashboard.php");
            exit();
        } else {
            echo "<script>alert('Incorrect password.'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Email not registered.'); window.history.back();</script>";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>


    <!DOCTYPE html>
<html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<?php
	include_once("../includes/head.php");
	?>

<body>
    


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="login-box">
        <h1 id="hl">Login</h1>
        
        <div class="textbox ">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="email" name="email" placeholder="Email" >
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