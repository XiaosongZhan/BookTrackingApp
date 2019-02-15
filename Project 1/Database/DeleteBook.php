<?php
		$username = "root";
		$password = "";
		$hostname = "localhost"; 
		$bookName = $_POST['bookName'];
		$ISBN = $_POST['ISBN'];
		$CallNumber = $_POST['CallNumber'];
		
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
		while($row = $result->fetch_assoc()) {
		  if ($row['bookName'] == $bookName && $row['ISBN'] == $ISBN && $row['CallNumber'] == $CallNumber){
				echo "Delete request confirmed.<br />";
				mysqli_query($con, "DELETE FROM book WHERE ISBN = $ISBN");
    			echo "Data removed successfully";
				}
			}

		
		//close the connection
		mysqli_close($con);
	?>

