<?php
	class dbConnection{
		protected $db_conn;
		public $db_name = 'timetable'; //database name
		public $db_user = 'root'; //localhost username
		public $db_pass = ''; //localhost password
		public $db_host = 'localhost'; //hostname
		
		public function connect(){
			try{
				$this->db_conn = new PDO("mysql:host=$this->db_host;dbname=$this->db_name",$this->db_user,$this->db_pass);
				return $this->db_conn;
			
		

			}

			catch(PDOException $e)
			{
				return $e->getMessage();
			}
		}
	}



	
// Replace with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "timetable";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>