<?php
        	$con = mysqli_connect('localhost', "root", "")
		 	or die("Unable to connect to MySQL");

			$db = mysqli_select_db($con,"library")
		  	or die("Could not select database");
			
			$search = $_POST['search'];
          
			$result = MySQLi_query($con,"SELECT * FROM book WHERE bookName LIKE '%$search%'");
		
			if ($result->num_rows > 0) {
    			while($row = $result->fetch_assoc()) {
        			echo "book ID:" . $row["bookID"] . "<br>ISBN:" . $row["ISBN"] . "<br>book name " . $row["bookName"]. "<br>publish year: " . $row["publishYear"] . "author: " . $row["Author"] . "<br>call number: " . $row["CallNumber"] . "<br><br>";
					}
			} 
			else{
    			echo "0 results";
			}
?>