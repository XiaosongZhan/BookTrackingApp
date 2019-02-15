<!DOCTYPE html>
<html>
    <head>
        <title>List All Books</title>
        <style>
            input[type=text] {
                width: 130px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
                background-color: white;
                background-position: 10px 10px;
                background-repeat: no-repeat;
                padding: 12px 20px 12px 40px;
                -webkit-transition: width 0.4s ease-in-out;
                transition: width 0.4s ease-in-out;
            }
        
            input[type=text]:focus {
               width: 100%;
            }
        
            h1{
                text-align: center;
                font-size: 35px;
                color: rgb(0, 204, 255);
                text-shadow: 0 0 3px #FF0000;
            }
        </style>
        
    </head>
    <body>
        <h1>All the Book information are shown below</h1>
        <form action="search_book.php" method="POST">
            <input type="text" name="search" placeholder="Enter book name or part of book name"><br />
            <input type="submit" value="Submit" maxlength="150" size="35"/>
        </form>
    </body>
</html>
<?php
        	$con = mysqli_connect('localhost', "root", "")
		 	or die("Unable to connect to MySQL");

			$db = mysqli_select_db($con,"library")
		  	or die("Could not select database");
          
				$result = MySQLi_query($con,"SELECT * FROM book");
		        if ($result->num_rows > 0) {
    				while($row = $result->fetch_assoc()) {
        				echo "book ID:" . $row["bookID"] . "<br>ISBN:" . $row["ISBN"] . "<br>book name " . $row["bookName"]. "<br>publish year: " . $row["publishYear"] . "author: " . $row["Author"] . "<br>call number: " . $row["CallNumber"] . "<br><br>";
						}
				} 
				else{
    				echo "0 results";
					}
?>
