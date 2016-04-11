 <?php
			require_once 'error_checking.php';
			
			$servername = "mysql-1.profound.net.au";
			$username = "christopm-00";
			$password = "aGrdXput9e6uhctbO"; 
			$dbName = "martinmartincomau";
			
			$db = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
		?>