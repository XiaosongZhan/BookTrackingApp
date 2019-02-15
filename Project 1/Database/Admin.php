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
		$result = MySQLi_query($con,"SELECT * FROM student");
		
		//fetch tha data from the database 
		
		echo "Users list with access level 1<br />";
		if ($result->num_rows > 0) {
   		while($row = $result->fetch_assoc()) {
           echo $row["studentID"] . " " . $row["studentFName"]. " " . $row["studentLName"]. "<br>";
         }
		 } else {
   			echo "0 results";
		}
		echo '<br />';
		
		$result = MySQLi_query($con,"SELECT * FROM teacher");
		echo "Users list with access level 2<br />";
		if ($result->num_rows > 0) {
   		while($row = $result->fetch_assoc()) {
           echo $row["teacherID"] . " " . $row["teacherFName"]. " " . $row["teacherLName"]. "<br>";
         }
		 } else {
   			echo "0 results";
		}
		echo '<br />';
		
		$result = MySQLi_query($con,"SELECT * FROM admin");
		echo "Users list with access level 3<br />";
		if ($result->num_rows > 0) {
   		while($row = $result->fetch_assoc()) {
           echo $row["adminID"] . " " . $row["adminName"]. "<br>";
         }
		 } else {
   			echo "0 results";
		}
		echo '<br />';
		//close the connection
		mysqli_close($con);
	?>

