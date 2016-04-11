$query = $db->prepare('SHOW TABLES');
			$query->execute();

			while($rows = $query->fetch(PDO::FETCH_ASSOC)){
     			var_dump($rows);
			}

        <!-- Add your site or application content here -->
       
  <!--      <?php
				$servername = "mysql-1.profound.net.au";
				$username = "christopm-00";
				$password = "aGrdXput9e6uhctbO"; 
				$database = "martinmartincomau";
	
    			$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
					
				foreach($db->query('SELECT * FROM koalas') as $row) {
    			echo $row['koala_id'].' '.$row['koala_name']; //etc...
				}
       ?> -->
       
<!--       	<select name="koala">	
        		<?php 
        			require_once 'config.php';
        			
					$koalas = mysql_query("SELECT * FROM koalas");
					echo $koalas;
					while ($row = mysql_fetch_array($koalas)){
						echo "<option value=\"" . $row['id'] . "\">" . $row['name'] . "</option>";
					}
  				?>	
		    	</select>	-->
		    	
<?php
			$servername = "mysql-1.profound.net.au";
			$username = "christopm-00";
			$password = "aGrdXput9e6uhctbO"; 

			try {
    				$conn = new PDO("mysql:host=$servername;dbname=martinmartincomau", $username, $password);
   					 // set the PDO error mode to exception
    				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    				echo "Connected successfully"; 
   			}
			catch(PDOException $e)
   		{
    			echo "Connection failed: " . $e->getMessage();
    		}
		?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name = "viewport" content = "width = device-width" />
<title>martin-martin.com.au - coming soon</title>
<style type="text/css">
<!--
body
{
background-image:url("linedpaper.png");
background-repeat:repeat;
}

p
{
font-family: 'Open Sans', sans-serif;
font-size: 28px;
}
body, html{
    display:table;
    height:100%;
    width:100%;
}
.container{
    display:table-cell;
    vertical-align:middle;
}
.container .box{
    width:260px;
    height:400px;
    text-align: center;
    vertical-align: middle;
    margin:0 auto;
}
.container .box p {
    font-family: 'Londrina Sketch', cursive;
    font-size: 46px;
    text-align: center;
    vertical-align: middle;
    margin:0 auto;
    color:rgba(74,77,117,0.57)
}
-->
</style>
<link href='http://fonts.googleapis.com/css?family=Londrina+Sketch' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css' />
</head>
<body>
<div class="container">
  <div class="box">	  
    <p style="font-family: 'Open Sans', sans-serif; font-size: 22px; font-weight: 300; color:rgba(74,77,117,0.57); text-decoration: underline;">
    <a href="http://profound.net.au/"><img alt="Profound Hosting Logo" src="ph-icon.png" style="width: 80%; padding-bottom: 13px;" /></a>martin-martin.com.au</p>
    <p>coming soon!</p>
  </div>
</div>
</body>
</html>