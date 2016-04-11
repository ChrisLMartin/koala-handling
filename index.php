<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Koala Handling</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
       
      	<fieldset>      	
	      	<form method="post"> 
	      		<div class="form">
	        	<label for="koala">Koala</label> 
		        	<select name="koala" size="10">
		        		<?php
		        		require_once 'config.php';
					
						foreach($db->query('SELECT * FROM koalas;') as $row) {
		    				echo "<option value=\"" . $row['koala_id'] . "\">" . $row['koala_name'] . "</option>";
						}
		        		?>
		        	</select>
	        	</div>
	        	<div class="form">
		        	<label for="handler">Handler</label>
		        	<select name="handler" size="10">
		        		<?php
		        		require_once 'config.php';
						
						foreach($db->query('SELECT * FROM handlers;') as $row) {
		    				echo "<option value=\"" . $row['handler_id'] . "\">" . $row['handler_name'] . "</option>";
						}
		        		?>
		        	</select>
		        </div>
	        	<div class="form"><input type="submit" value="Start" /></div> 
	        	<!-- Need to pass information into MySQL database with current timestamp, then show it in "handling" form  -->
	        </form>
        	<form method="post">
        		<div class="form">
	        		<label for="handling">Currently handling</label>
		        	<select name="handling" size="10">
		        		<?php
		        		require_once 'config.php';
						
						/* $sql = "INSERT INTO handling (koala_id, handler_id, handling_start) VALUES (:koala_id, :handler_id, :handling_start)";
						
						$stmt = $db->prepare($sql);
						
						$stmt->bindParam(':koala_id', $_POST['koala_id'], PDO::PARAM_STR); 
						$stmt->bindParam(':handler_id', $_POST['handler_id'], PDO::PARAM_STR);
						$stmt->bindParam(':handling_start', NOT SURE HOW TO GET TIMESTAMP ONCLICK MIGHT NEED JS, PDO::PARAM_STR);
						
						$stmt->execute();*/  
						
						foreach($db->query('SELECT * FROM handling 
											INNER JOIN koalas ON handling.koala_id = koalas.koala_id 
											INNER JOIN handlers ON handling.handler_id = handlers.handler_id
											WHERE handling_start > CURDATE();') as $row) {
		    				echo "<option value=\"" . $row['handling_id'] . "\">" 
		    				. $row['koala_name'] . " | " . $row['handler_name'] . " | " . date("Y-m-d H:i:s") - $row['handling_start'] . // I need to sort out a countdown in minutes
		    				"minutes left</option>";
						}
		        		?>
		        	</select>
		        </div>
	        	<div class="form"><input type="submit" value="Stop" /></div>
        	</form>
        </fieldset>

        <script src="https://code.jquery.com/jquery-{{JQUERY_VERSION}}.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-{{JQUERY_VERSION}}.min.js"><\/script>');</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments);};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview');
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
