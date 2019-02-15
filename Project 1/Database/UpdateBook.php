<?php
		$username = "root";
		$password = "";
		$hostname = "localhost"; 
		$bookname1 = $_POST['book_name1'];
		$ISBN1 = $_POST['ISBN1'];
		$CallNumber1 = $_POST['CallNumber1'];
		$bookID2 = $_POST['bookID2'];
		$bookname2 = $_POST['book_name2'];
		$ISBN2 = $_POST['ISBN2'];
		$CallNumber2 = $_POST['CallNumber2'];
		$publishYear2 = $_POST['publishYear2'];
		$author2 = $_POST['author2'];
		$totalava2 = $_POST['tot_available2'];
		$category2 = $_POST['category2'];
		
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
		if ($row['CallNumber'] == $CallNumber1 ){
			echo "Update request confirmed.<br />";
			mysqli_query($con, "UPDATE book SET bookName = $bookname2, ISBN = $ISBN2, CallNumber = $CallNumber2, bookID = $bookID2, publishYear = $publishYear2, Author = $author2,
			tot_available = $totalava2, category = $category2 WHERE bookName = '$bookname1'");
			echo "Data update successfully";
			}
		}
		//close the connection
		mysqli_close($con);
	?>

