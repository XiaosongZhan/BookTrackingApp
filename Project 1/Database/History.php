<?php
		$username = "root";
		$password = "";
		$hostname = "localhost"; 
		$TotalNumbers = 0;
		
		//connection to the database
		$con = mysqli_connect($hostname, $username, $password)
		 or die("Unable to connect to MySQL");
		echo "Connected to MySQL<br>";
		
		//select a database to work with
		$db = mysqli_select_db($con,"library")
		  or die("Could not select database");
		
		//execute the SQL query and return records
		$result = MySQLi_query($con,"SELECT * FROM book");
		
		//fetch tha data from the database 
		$row = mysqli_fetch_array($result);
		mysqli_query($con, "SELECT COUNT(bookID) AS TotalNumbers FROM book");
		if ($result->num_rows > 0) {
   		while($row = $result->fetch_assoc()) {
           $TotalNumbers = $TotalNumbers + 1;
         }
		}
		echo 'Total number of books: ' . $TotalNumbers. "<br>";
		echo '<br />';
		
		$result = MySQLi_query($con,"SELECT * FROM book");
		echo "Books available to borrow: <br />";
		mysqli_query($con, "SELECT * FROM book LEFT ANTI JOIN borrowbook");
		if ($result->num_rows > 0) {
   		while($row = $result->fetch_assoc()) {
           echo $row["bookID"] . " " . $row["bookName"]. " " . $row["ISBN"]. " " . $row["tot_available"] . "<br>";
         }
		 } else {
   			echo "0 results";
		}
		echo '<br />';
		
		$TotalNumbers = 0;
		$result = MySQLi_query($con,"SELECT * FROM book");
		mysqli_query($con, "SELECT COUNT(*) AS TotalAvailable FROM book LEFT ANTI JOIN borrowbook");
		if ($result->num_rows > 0) {
   		while($row = $result->fetch_assoc()) {
           	$TotalNumbers = $TotalNumbers + 1;
         	}
		 } 
		echo "Total number of books available to borrow: " . $TotalNumbers . "<br>";
		echo '<br />';
		//close the connection
		mysqli_close($con);
	?>

