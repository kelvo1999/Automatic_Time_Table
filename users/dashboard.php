<?php
session_start();
include '../database/class.database.php'; // Include the database connection file
include '../includes/header.php';

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

// Fetch user details
$email = $_SESSION['email'];
$sql = "SELECT name FROM user WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $name = $user['name'];
   
} else {
    // If user not found, redirect to login
    header("Location: login.php");
    exit();
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
    header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
}

.logo {
    font-size: 1.5em;
    font-weight: bold;
}

nav ul {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
}

nav ul li {
    margin-left: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    padding: 8px 15px;
    transition: background 0.3s;
}

nav ul li a:hover {
    background-color: #555;
}

</style>
</head>
<body>


<header>
        <nav>
            <div class="logo">Automatic TimeTable Builder</div>
            <ul>
                <li><a href="dashboard.php">Home</a></li>
                <li><a href="timetable.php">Timetable</a></li>
                <li><a href="enquiries.php">Enquiries</a></li>
                <li><a href="view-enquiries.php">Make an Enquiry</a></li>
                <li><a href="logout.php">Log Out</a></li>
               
            </ul>
        </nav>
    </header>
    <h1>Welcome, <?php echo htmlspecialchars($name) ; ?>!</h1>
    <p>Here are timetables as per your department</p>
    
</body>
</html>