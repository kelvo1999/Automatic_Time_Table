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
<header>
        <nav>
            <div class="logo">Automatic TimeTable Builder</div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="users/register.php">Student</a></li>
                <li><a href="users/register.php">Lecturer</a></li>
                <li><a href="admin.php">Admin</a></li>
                <!-- <li><a href="#contact">Contact</a></li> -->
            </ul>
        </nav>
    </header>