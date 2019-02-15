     <?php
		$username = "root";
		$password = "";
		$hostname = "localhost"; 
		$bookname = $_POST['book_name'];
		$ISBN = $_POST['ISBN'];
		$CallNumber = $_POST['CallNumber'];
		$bookID = "";
		$checkdate = date("m/d/Y");
		
		//connection to the database
		$con = MySQLi_connect($hostname, $username, $password)
		 or die("Unable to connect to MySQL");
		echo "Connected to MySQL<br>";
		
		//select a database to work with
		$db = MySQLi_select_db($con,"library")
		  or die("Could not select database");
		
		//execute the SQL query and return records
		$result = MySQLi_query($con,"SELECT * FROM book");
		
		//fetch tha data from the database 
		$row = MySQLi_fetch_array($result);
		
		while($row = $result->fetch_assoc()) {
			if ($row['bookName'] == $bookname && $row['ISBN'] == $ISBN &&
				$row['CallNumber'] == $CallNumber){
				echo "Borrow request confirmed.<br />";
				$bookID = $row['bookID'];
				$result = MySQLi_query($con,"INSERT INTO borrowbook VALUES ('',$bookID,$ISBN,$checkdate,'')");
				}
		}
		
		
		//close the connection
		mysqli_close($con);
	?>

