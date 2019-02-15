     <?php
		$username = "root";
		$password = "";
		$hostname = "localhost"; 
		$studentID = $_POST['studentID'];
		$studentLName = $_POST['studentLName'];
		$studentFName = $_POST['studentFName'];
		$bookBorrow = $_POST['bookBorrow'];
		$bookRent = $_POST['bookRent'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$passWord = $_POST['passWord'];
	
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
		
			if (mysqli_query($con, "INSERT INTO student VALUES ('$studentID','$bookBorrow',
					'$bookRent','$studentFName','$studentLName','$address','$phone','$passWord')")) {
    				echo "New record created successfully<br />";
				} else {
    				echo "Error: " . "<br>" . mysqli_error($con);
				}
		//close the connection
		mysqli_close($con);
	?>

