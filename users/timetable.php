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
    
</body>
</html>