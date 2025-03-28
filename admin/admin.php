<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path = "../includes/header.php";
//    $path .= "/timetable/header.php";
   include_once($path);
?>
<body>
	<!-- <nav class="navbar navbar-default navbar-static-top">
	  <div class="container">
	  <h3>Automatic Time Table</h3>
	  </div>
	</nav> -->
	<link rel="stylesheet" href="style.css">
	<header>
        <nav>
            <div class="logo">Automatic TimeTable Builder</div>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../users/register.php">Student</a></li>
                <li><a href="../users/register.php">Lecturer</a></li>
                <li><a href="admin.php">Admin</a></li>
                <!-- <li><a href="#contact">Contact</a></li> -->
            </ul>
        </nav>
    </header>
	
	<div id="content">
		<div id="form">
		<form class="form-horizontal" method="post" action="../libs/register.php">
			<fieldset>

			<!-- Form Name -->
			<legend>Register School Here</legend>
			
			<!-- Text input-->
			<div class="form-group"> 
			  <label class="col-md-4 control-label" for="username">School Name</label>  
			  <div class="col-md-4">
			  <input id="uname" name="uname" type="text" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="username">Username</label>  
			  <div class="col-md-4">
			  <input id="username" name="username" type="text" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="email">Email</label>  
			  <div class="col-md-4">
			  <input id="email" name="email" type="email" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>

			<!-- Password input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="password">Password</label>
			  <div class="col-md-4">
				<input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="register"></label>
			  <div class="col-md-4">
				<input type="submit" id="register" name="register" class="btn btn-success" value="Register">
			  </div>
			</div>

			</fieldset>
		</form>
		</div>
		<div id="login">
		Already Registered. <a href="login.php">Login </a>
		</div>
	</div>
			
			


</body>
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path = "../includes/footer.php";
   include_once($path);
?>