 
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
		$row = mysqli_fetch_array($result);
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
                <div class="container">
                    <a href="./BorrowBook.html" target="_blank" style="text-decoration:none; color:black; text-shadow: 2px 2px 5px red;">
                        <img src="./borrow.jpg" alt="Borrow_Book" width="300px" height="300px">
                        <div class="desc">
                            <i class="fa fa-book" aria-hidden="true" style="color:rgb(66, 244, 122)"></i>
                            Borrow Book
                       </div>
                    </a>
                    
                </div>
                
                <br />
                
                <div class="container" style="color:blue;">
                    <a target="_blank" href="" style="text-decoration:none; color:black; text-shadow: 2px 2px 5px lightblue;" href="">
                        <img src="./bookreturn.jpg" alt="Return_book" width="300" height="300">
                        <div class="desc">
                            <i class="fa fa-book" aria-hidden="true" style="color:black;"></i>
                            Check Out
                        </div>
                    </a>
                    
                </div>
                
                <br />
                
                <div class="container">
                    <a target="_blank" href="./History.html" style="text-decoration:none; color:black; text-shadow:2px 2px 5px rgb(255, 255, 153);" >
                        <img src="./personal_information.jpg" alt="search" style="width:100%; height:481px;">
                            <div class="desc">
                                <i class="fa fa-search" aria-hidden="true" style="color:black;"></i>
                                Personal Information
                            </div>
                            </a>
                    
                </div>
                
                <br />
                
                <div class="container">
                    <a target="_blank" href="./book_or_class.html" style="text-decoration:none; color:black; text-shadow: 2px 2px 5px rgb(183, 181, 182);" >
                        <img src="./search.jpeg" alt="search" style="width:100%; height:481px;">
                        <div class="desc">
                            <i class="fa fa-search" aria-hidden="true" style="color:black;"></i>
                            Search
                        </div>
                    </a>
                    
                </div>
                


        </div>
    </body>
</html>
         <?php
			}
		else{
				die("Username or passord are not correct!");
			}
		}
		
		else if($check == "teacher"){
		//execute the SQL query and return records
		$result = MySQLi_query($con,"SELECT * FROM teacher WHERE teacherID = '$userID' AND password = '$password'")
				or die("Username or passord are not correct");
		
		//fetch tha data from the database 
		$row = mysqli_fetch_array($result);
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
    <body background="./33.jpeg">
        <div class="a">
            
            <h1><center>Hello Professor</center></h1>
            <h2><center>Click the image to do what you want to do today</center></h2>
            <br />
            <div class="container">
                <a href="./BorrowBook.html" target="_blank" style="text-decoration:none; color:black; text-shadow: 2px 2px 5px red;">
                    <img src="./borrow.jpg" alt="Borrow_Book" width="300px" height="300px">
                        <div class="desc">
                            <i class="fa fa-book" aria-hidden="true" style=""></i>
                            Borrow Book
                        </div>
                        </a>
                
            </div>
            
            <br />
            
            <div class="container" style="color:blue;">
                <a target="_blank" href="" style="text-decoration:none; color:black; text-shadow: 2px 2px 5px lightblue;" href="">
                    <img src="./bookreturn.jpg" alt="Return_book" width="300" height="300">
                        <div class="desc">
                            <i class="fa fa-book" aria-hidden="true" style="color:black;"></i>
                            Return Boook
                        </div>
                        </a>
                
            </div>
            
            <br />
            
            <div class="container">
                <a target="_blank" href="" style="text-decoration:none; color:black; text-shadow:2px 2px 5px rgb(255, 255, 153);" >
                    <img src="./history.jpg" alt="search" style="width:100%; height:381px;">
                        <div class="desc">
                            <i class="fa fa-search" aria-hidden="true" style="color:black;"></i>
                            History
                        </div>
                        </a>
                
            </div>
            
            <br />
            
            <div class="container">
                <a target="_blank" href="" style="text-decoration:none; color:black; text-shadow: 2px 2px 5px rgb(183, 181, 182);" >
                    <img src="./search.jpeg" alt="search" style="width:100%; height:381px;">
                        <div class="desc">
                            <i class="fa fa-search" aria-hidden="true" style="color:black;"></i>
                            Search
                        </div>
                        </a>
                
            </div>
            
            
            
        </div>
    </body>
</html>

                 <?php
			}
		else{
				die("Username or passord are not correct!");
			}
		}
		
		else if($check == "admin"){
		//execute the SQL query and return records
		$result = MySQLi_query($con,"SELECT * FROM admin WHERE adminID = '$userID' AND password = '$password'")
				or die("Username or passord are not correct!");
		
		//fetch tha data from the database 
		$row = mysqli_fetch_array($result);
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
                <a target="_blank" href="" style="text-decoration:none; color:black; text-shadow: 2px 2px 5px lightblue;" href="">
                    <img src="./add.jpg" alt="Return_book" width="300" height="300">
                        <div class="desc">
                            <i class="fa fa-book" aria-hidden="true" style="color:black;"></i>
                            Add Boook
                        </div>
                        </a>
                
            </div>
            
            <br />
            
            <div class="container">
                <a target="_blank" href="" style="text-decoration:none; color:black; text-shadow:2px 2px 5px rgb(255, 255, 153);" >
                    <img src="./delete.jpg" alt="search" style="width:100%; height:381px;">
                        <div class="desc">
                            <i class="fa fa-book" aria-hidden="true" style="color:black;"></i>
                            Delete Book
                        </div>
                        </a>
                
            </div>
            
            <br />
            
            <div class="container">
                <a href="./BorrowBook.html" target="_blank" style="text-decoration:none; color:black; text-shadow: 2px 2px 5px rgb(0, 255, 0);">
                    <img src="./borrow.jpg" alt="Borrow_Book" width="300px" height="300px">
                        <div class="desc">
                            <i class="fa fa-book" aria-hidden="true" style=""></i>
                            Borrow Book
                        </div>
                        </a>
                
            </div>

            <br />
            
            <div class="container">
                <a target="_blank" href="" style="text-decoration:none; color:black; text-shadow:2px 2px 5px rgb(255, 191, 0);" >
                    <img src="./user.jpg" alt="search" style="width:100%; height:381px;">
                        <div class="desc">
                            <i class="fa fa-users" aria-hidden="true" style="color:black;"></i>
                            Authorized Users
                        </div>
                        </a>
                
            </div>
            
            <br />

            <div class="container">
                <a target="_blank" href="" style="text-decoration:none; color:black; text-shadow:2px 2px 5px rgb(255, 204, 204);" >
                    <img src="./history.jpg" alt="search" style="width:100%; height:381px;">
                        <div class="desc">
                            <i class="fa fa-search" aria-hidden="true" style="color:black;"></i>
                            History
                        </div>
                        </a>
                
            </div>
            
            <br />
            
            <div class="container">
                <a target="_blank" href="" style="text-decoration:none; color:black; text-shadow:2px 2px 5px rgb(255, 204, 204);" >
                    <img src="./history.jpg" alt="search" style="width:100%; height:381px;">
                        <div class="desc">
                            <i class="fa fa-search" aria-hidden="true" style="color:black;"></i>
                            Check Out
                        </div>
                        </a>
                
            </div>

            <br />

            <div class="container">
                <a target="_blank" href="" style="text-decoration:none; color:black; text-shadow: 2px 2px 5px rgb(183, 181, 182);" >
                    <img src="./search.jpeg" alt="search" style="width:100%; height:381px;">
                        <div class="desc">
                            <i class="fa fa-search" aria-hidden="true" style="color:black;"></i>
                            Search
                        </div>
                        </a>
                
            </div>         
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
?>
	
