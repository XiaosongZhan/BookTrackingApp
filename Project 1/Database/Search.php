<?php
		$username = "root";
		$password = "";
		$hostname = "localhost"; 
		
		//connection to the database
		$con = mysqli_connect($hostname, $username, $password)
		 or die("Unable to connect to MySQL");
		echo "Connected to MySQL<br>";
		
		//select a database to work with
		$db = mysqli_select_db($con,"library")
		  or die("Could not select database");
		
		//execute the SQL query and return records
		$result = MySQLi_query($con,"SELECT * FROM order_type");
		
		//fetch tha data from the database 
		$row = mysqli_fetch_array($result);
		echo "Checkout by class";
		mysqli_query($con, "SELECT classID,studentID,bookID FROM class OUTER JOIN borrowbook
							ON studentID = studentID ORDER BY classID");
		echo "Check out by Book ID";
		mysqli_query($con, "SELECT classID,studentID,bookID FROM class OUTER JOIN borrowbook
							ON studentID = studentID ORDER BY bookID");
		//close the connection
		mysqli_close($con);
	?>

