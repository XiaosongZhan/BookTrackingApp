 
 <?php
		$userID = $_POST['userID'];
		$password = $_POST['password'];
		$check = $_POST['check'];
		$hostname = "localhost"; 

		//connection to the database
		$con = mysqli_connect($hostname, "root", "")
		 or die("Unable to connect to MySQL");
		echo "Connected to MySQL<br>";
		
		//select a database to work with
		$db = mysqli_select_db($con,"library")
		  or die("Could not select database");
		
		if($check == "student"){
		//execute the SQL query and return records
		$result = MySQLi_query($con,"SELECT * FROM student WHERE studentID = '$userID' AND password = '$password'")
				or die("Username or passord are not correct!");
		
		//fetch tha data from the database 
		while($row = $result->fetch_assoc()) {
		if ($row['studentID'] == $userID && $row['password'] == $password){
			echo "Successfully logged in.<br />";
		?>
         <!DOCTYPE html>
<html>
    <head>
        <title>Student Front Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <style>
            
            div.container {
                border: 1px solid #ccc;
                
            }
        
            div.container:hover {
                border: 1px solid #777;
            }
        
            div.container img {
                width: 100%;
                height: auto;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
        
            div.desc {
                font-size:40px;
                padding: 5px;
                text-align: center;
            }
        
        
            h1, h2{
                color:white;
                text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
            }
            
            .a{
                background-color:white;
                border: 3px solid #f1f1f1;
                width:60%;
                margin:auto;
            }
        </style>
    </head>
    <body background="./22.jpeg">
        <div class="a">
            
                <h1><center>Hello User</center></h1>
                <h2><center>Click the image to do what you want to do today</center></h2>
                <br />
                <div class="container" style="color:blue;">
                    <a target="_blank" href="./list_book.php" style="text-decoration:none; color:black; text-shadow: 2px 2px 5px lightblue;">
                        <img src="./list_book.jpg" alt="Return_book" width="300" height="300">
                        <div class="desc">
                            <i class="fa fa-book" aria-hidden="true" style="color:black;"></i>
                            List all Books Information with Search
                        </div>
                    </a>
                    
                </div>
                
                <br />
                
                <div class="container">
                    <a target="_blank" style="text-decoration:none; color:black; text-shadow:2px 2px 5px rgb(255, 255, 153);" >
                        <img src="./personal_information.jpg" alt="search" style="width:100%; height:481px;">
                            <div class="desc">
                                <i class="fa fa-search" aria-hidden="true" style="color:black;"></i>
                                <?php
								echo "Student Information: <br />";
			echo $row['studentID'] . " " . $row['studentFName'] . " " . 
			$row['studentLName'] . "<br />";
		
			$result = MySQLi_query($con,"SELECT * FROM parrent");
			while($row = $result->fetch_assoc()) {
			if ($row['studentID'] == $userID){
				echo "Student Parent Information: <br />";
				echo $row['parentID'] . " " . $row['parentFName'] . " " .
				$row['parentLName'] . "<br />";
				echo "Student Address Information: <br />";
				echo $row['address'] . " " . $row['phoneNo'] . "<br />";
			}
			}
			$result = MySQLi_query($con,"SELECT * FROM management");
			while($row = $result->fetch_assoc()) {
			if ($row['studentID'] == $userID){
				echo "Student Account Amount Due: ";
				echo $row['DueAmount'] . "<br />";
			}
			}
								?>
                            </div>
                            </a>
                    
                </div>
                
                <br />
                

        </div>
    </body>
</html>
         <?php
			}
		else{
				die("Username or passord are not correct!");
			}
		}
		}
		else if($check == "teacher"){
		//execute the SQL query and return records
		$result = MySQLi_query($con,"SELECT * FROM teacher WHERE teacherID = '$userID' AND password = '$password'")
				or die("Username or passord are not correct");
		
		//fetch tha data from the database 
		while($row = $result->fetch_assoc()) {
		if ($row['teacherID'] == $userID && $row['password'] == $password){
				echo "Successfully logged in.<br />";
				?>
              <!DOCTYPE html>
<html>
    <head>
        <title>Teacher Front Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                
                <style>
                    
                    div.container {
                        border: 1px solid #ccc;
                        
                    }
                
                div.container:hover {
                    border: 1px solid #777;
                }
                
                div.container img {
                    width: 100%;
                    height: auto;
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                }
                
                div.desc {
                    font-size:20px;
                    padding: 5px;
                    text-align: center;
                }
                
                
                h1, h2{
                    color:white;
                    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
                }
                
                .a{
                    background-color:white;
                    border: 3px solid #f1f1f1;
                    width:60%;
                    margin:auto;
                }
                </style>
                </head>
    <body background="./33.jpeg">
        <div class="a">
            
            <h1><center>Hello Professor</center></h1>
            <h2><center>Click the image to do what you want to do today</center></h2>
            <br />
            <div class="container" style="color:blue;">
                <a target="_blank" href="./list_book.php" style="text-decoration:none; color:black; text-shadow: 2px 2px 5px lightblue;">
                    <img src="./list_book.jpg" alt="Return_book" width="300" height="300">
                        <div class="desc">
                            <i class="fa fa-book" aria-hidden="true" style="color:black;"></i>
                            List all Books Information with Search
                        </div>
                        </a>
                
            </div>
            <br />
            <div class="container">
                <a target="_blank" style="text-decoration:none; color:black; text-shadow:2px 2px 5px rgb(0, 204, 255);" >
                    <img src="./history.jpg" alt="search" style="width:100%; height:381px;">
                        <div class="desc">
                            <i class="fa fa-search" aria-hidden="true" style="color:black;"></i>
                             <?php
								echo "Class Book Checkout Information: <br />";
			$classID = "";
			$result = MySQLi_query($con,"SELECT * FROM class");
			
			while($row = $result->fetch_assoc()) {
						if($row['teacherID'] == $userID){
        				echo $row['classID'] . " " . $row['className'] . "<br />";
						$classID = $row['classID'];
					}
			}
			
			$result = MySQLi_query($con,"SELECT * FROM enrollment JOIN borrowbook
			ON enrollment.studentID = borrowbook.studentID");
				echo "Student Information: <br />";
		        if ($result->num_rows > 0) {
    				while($row = $result->fetch_assoc()) {
						if($classID == $row['classID']){
        				echo "student ID: " . $row["studentID"] . " book ID: " . $row["bookID"] . " checkout date: " . $row["checkdate"] . " due date: " . $row["duedate"]. "<br>";
						}
					}
				} 
				else{
    				echo "0 results";
					}
								?>
                        </div>
                        </a>
                
            </div>

            <br />
            
        </div>
    </body>
</html>

                 <?php
			}
		else{
				die("Username or passord are not correct!");
			}
		}
		}
		else if($check == "admin"){
		//execute the SQL query and return records
		$result = MySQLi_query($con,"SELECT * FROM admin WHERE adminID = '$userID' AND password = '$password'")
				or die("Username or passord are not correct!");
		
		//fetch tha data from the database 
		while($row = $result->fetch_assoc()) {
		if ($row['adminID'] == $userID && $row['password'] == $password){
				echo "Successfully logged in.<br />";
				?>
               <!DOCTYPE html>
<html>
    <head>
        <title>Admin Front Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                
                <style>
                    
                    div.container {
                        border: 1px solid #ccc;
                        
                    }
                
                div.container:hover {
                    border: 1px solid #777;
                }
                
                div.container img {
                    width: 100%;
                    height: auto;
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                }
                
                div.desc {
                    font-size:20px;
                    padding: 5px;
                    text-align: center;
                }
                
                
                h1, h2{
                    color:white;
                    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
                }
                
                .a{
                    background-color:white;
                    border: 3px solid #f1f1f1;
                    width:60%;
                    margin:auto;
                }
                </style>
                </head>
    <body background="./44.jpg">
        <div class="a">
            
            <h1><center>Hello Administrator</center></h1>
            <h2><center>Click the image to do what you want to do today</center></h2>
            <br />
            <div class="container">
                <a href="./UpdateBook.html" target="_blank" style="text-decoration:none; color:black; text-shadow: 2px 2px 5px red;">
                    <img src="./update.jpg" alt="Borrow_Book" width="300px" height="300px">
                        <div class="desc">
                            <i class="fa fa-book" aria-hidden="true" style=""></i>
                            Update Book
                        </div>
                        </a>
                
            </div>
            
            <br />
            
            <div class="container" style="color:blue;">
                <a target="_blank" href="./add.html" style="text-decoration:none; color:black; text-shadow: 2px 2px 5px lightblue;" href="">
                    <img src="./add.jpg" alt="Return_book" width="300" height="300">
                        <div class="desc">
                            <i class="fa fa-book" aria-hidden="true" style="color:black;"></i>
                            Add Boook
                        </div>
                        </a>
                
            </div>
            
            <br />
            
            <div class="container">
                <a target="_blank" href="./DeleteBook.html" style="text-decoration:none; color:black; text-shadow:2px 2px 5px rgb(255, 255, 153);" >
                    <img src="./delete.jpg" alt="search" style="width:100%; height:781px;">
                        <div class="desc">
                            <i class="fa fa-book" aria-hidden="true" style="color:black;"></i>
                            Delete Book
                        </div>
                        </a>
                
            </div>
            
            <br />
            
            <div class="container">
                <a href="./add_student.html" target="_blank" style="text-decoration:none; color:black; text-shadow: 2px 2px 5px rgb(0, 255, 0);">
                    <img src="./add_student.jpg" alt="add_student" style="width:100%; height:500px;">
                        <div class="desc">
                            <i class="fa fa-book" aria-hidden="true" style=""></i>
                            Add Student
                        </div>
                        </a>
                
            </div>

            <br />
            
            <div class="container">
                <a href="./delete_student.html" target="_blank" style="text-decoration:none; color:black; text-shadow: 2px 2px 5px rgb(255, 0, 255);">
                    <img src="./delete_student.jpg" alt="add_student" style="width:100%; height:500px;">
                        <div class="desc">
                            <i class="fa fa-book" aria-hidden="true" style=""></i>
                            Delete Student
                        </div>
                        </a>
                
            </div>
            
            <br />
            
            <div class="container">
                <a href="./update_student.html" target="_blank" style="text-decoration:none; color:black; text-shadow: 2px 2px 5px rgb(128, 0, 255);">
                    <img src="./update_student.jpg" alt="add_student" style="width:100%; height:500px;">
                        <div class="desc">
                            <i class="fa fa-book" aria-hidden="true" style=""></i>
                            Update Student
                        </div>
                        </a>
                
            </div>
            
            <br />

            <div class="container">
                <a target="_blank" style="text-decoration:none; color:black; text-shadow:2px 2px 5px rgb(255, 191, 0);" >
                    <img src="./user.jpg" alt="search" style="width:100%; height:381px;">
                        <div class="desc">
                            <i class="fa fa-users" aria-hidden="true" style="color:black;"></i>
                            List all Authorized Users <br />
                            <?php	
		$result = MySQLi_query($con,"SELECT * FROM student");
				
		echo "Users list with access level 1<br />";
		if ($result->num_rows > 0) {
   		while($row = $result->fetch_assoc()) {
           echo $row["studentID"] . " " . $row["studentFName"]. " " . $row["studentLName"]. "<br>";
         }
		 } else {
   			echo "0 results";
		}
		echo '<br />';
		
		$result = MySQLi_query($con,"SELECT * FROM teacher");
		echo "Users list with access level 2<br />";
		if ($result->num_rows > 0) {
   		while($row = $result->fetch_assoc()) {
           echo $row["teacherID"] . " " . $row["teacherFName"]. " " . $row["teacherLName"]. "<br>";
         }
		 } else {
   			echo "0 results";
		}
		echo '<br />';
		
		$result = MySQLi_query($con,"SELECT * FROM admin");
		echo "Users list with access level 3<br />";
		if ($result->num_rows > 0) {
   		while($row = $result->fetch_assoc()) {
           echo $row["adminID"] . " " . $row["adminName"]. "<br>";
         }
		 } else {
   			echo "0 results";
		}
		echo '<br />';
	?>
                            
                        </div>
                        </a>
                
            </div>
            
            <br />

            <div class="container">
                <a target="_blank" href="./list_book.php" style="text-decoration:none; color:black; text-shadow:2px 2px 5px rgb(255, 204, 204);" >
                    <img src="./list_book.jpg" alt="search" style="width:100%; height:381px;">
                        <div class="desc">
                            <i class="fa fa-book" aria-hidden="true" style="color:black;"></i>
                            List all Books Information with Search
                        </div>
                        </a>
                
            </div>
            
            <br />
            
            <div class="container">
                <a target="_blank" style="text-decoration:none; color:black; text-shadow:2px 2px 5px rgb(0, 204, 255);" >
                    <img src="./history.jpg" alt="search" style="width:100%; height:381px;">
                        <div class="desc">
                            <i class="fa fa-search" aria-hidden="true" style="color:black;"></i>
                            Checkout Information <br />
                            <?php
							echo "Book Checkout Information: <br />";
				$result = MySQLi_query($con,"SELECT * FROM borrowbook");
		        if ($result->num_rows > 0) {
    				while($row = $result->fetch_assoc()) {
        				echo "book ID: " . $row["bookID"] . " checkout date: " . $row["checkdate"] . " due date: " . $row["duedate"]. "<br>";
						}
				} 
				else{
    				echo "0 results";
					}
								?>
                        </div>
                        </a>
                
            </div>

            <br />
            
            <div class="container">
                <a target="_blank"  style="text-decoration:none; color:black; text-shadow:2px 2px 5px rgb(0, 204, 255);" >
                    <img src="./history.jpg" alt="search" style="width:100%; height:381px;">
                        <div class="desc">
                            <i class="fa fa-search" aria-hidden="true" style="color:black;"></i>
                            List all Order Type
                             <?php
							echo "Book Order Information: <br />";
				$result = MySQLi_query($con,"SELECT * FROM order_type");
		        if ($result->num_rows > 0) {
    				while($row = $result->fetch_assoc()) {
        				echo "book ID: " . $row["bookID"] . " order type: " . $row["order_type"]. "<br>";
						}
				} 
				else{
    				echo "0 results";
					}
								?>
                        </div>
                        </a>
                
            </div>
            
            <br />
            
        </div>
    </body>
</html>

                 <?php
			}
		else{
				die("Username or passord are not correct!");
			}
		}
		//close the connection
		mysqli_close($con);
		}
?>
	
