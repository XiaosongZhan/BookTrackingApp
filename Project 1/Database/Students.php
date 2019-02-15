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
		$result = MySQLi_query($con,"SELECT * FROM book");
		
		//fetch tha data from the database 
		$row = mysqli_fetch_array($result);
		echo "Student Borrowing History<br />";
		mysqli_query($con, "SELECT studentFName, studentLName, bookName, duedate, checkout
							FROM (student INNER JOIN borrowbook ON student.studentID = borrowbook.studentID) 
							INNER JOIN book ON borrowbook.bookID = book.bookID");
							
							
		$result = MySQLi_query($con,"SELECT student.studentFName, student.studentLName
							FROM student NATURAL JOIN borrowbook ON student.studentID = borrowbook.studentID");
							
		while($data = mysqli_fetch_array($result)){
			echo $data['studentFName'] . "<br />";
		}
		
		//close the connection
		mysqli_close($con);
	?>

