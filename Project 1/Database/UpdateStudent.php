<?php
		$username = "root";
		$password = "";
		$hostname = "localhost"; 
		$studentID1 = $_POST['studentID1'];
		$studentID2 = $_POST['studentID2'];
		$studentFName2 = $_POST['studentFName2'];
		$studentLName2 = $_POST['studentLName2'];
		$bookBorrow2 = $_POST['bookBorrow2'];
		$bookRent2 = $_POST['bookRent2'];
		$address2 = $_POST['address2'];
		$phone2 = $_POST['phone2'];
		$passWord2 = $_POST['passWord2'];
		
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
		while($row = $result->fetch_assoc()) {
		if ($row['studentID'] == $studentID1 ){
			echo "Update request confirmed.<br />";
			mysqli_query($con, "UPDATE student SET studentID = $studentID2, studentFName = $studentFName2, studentLName = $studentLName2, NoOfBookBorrowed = $bookBorrow2, book_access = $bookRent2, address = $address2, phoneNo = $phone2, password = $passWord2 WHERE studentID = '$studentID1'");
			echo "Data update successfully";
			}
		}
		//close the connection
		mysqli_close($con);
	?>

