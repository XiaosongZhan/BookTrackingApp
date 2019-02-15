     <?php
		$username = "root";
		$password = "";
		$hostname = "localhost"; 
		$bookID = $_POST['bookID'];
		$bookname = $_POST['book_name'];
		$ISBN = $_POST['ISBN'];
		$CallNumber = $_POST['CallNumber'];
		$publishYear = $_POST['publishYear'];
		$author = $_POST['author'];
		$totalava = $_POST['tot_available'];
		$category = $_POST['category'];
	
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
		if ($row['bookName'] == $bookname && $row['ISBN'] == $ISBN){
				$totalava = $row['tot_available'] + 1;
				$row['tot_available'] = $totalava;
				echo "Add request confirmed.<br />";
			}
		else{
			if (mysqli_query($con, "INSERT INTO book VALUES ('$bookID','$ISBN',
					'$bookname','$publishYear','$author','$CallNumber','$totalava','$category')")) {
    				echo "New record created successfully<br />";
				} else {
    				echo "Error: " . "<br>" . mysqli_error($con);
				}
			}
		//close the connection
		mysqli_close($con);
	?>

