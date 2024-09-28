<?php
session_start(); // Start the session
include('connection.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Login form</title>
	
	<style> 
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			font-family: 'Poppins', sans-serif;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}

		.container {
			background-color: white;
			padding: 30px;
			border-radius: 15px;
			width: 650px;
			height: 400px; 
			box-shadow: 0 15px 10px rgba(0, 0, 0, 0.1);
			text-align: center;
		}

		.brand-title {
			font-size: 2.5rem;
			color: gray;
			font-weight: bold;
			letter-spacing: 2px;
		}

		.form-group {
			margin-bottom: 25px;
			text-align: left;
			font-family: verdana; 
			font-weight: bold; 
			padding: 5px; 
		}

		input[type="text"], input[type="password"] {
			width: 95%;
			padding: 10px;
			font-size: 17px;
			border: 1px solid #ddd;
			border-radius: 8px;
			transition: border-color 0.3s ease;
			margin-top: 7px; 
		}

		input[type="text"]:focus, input[type="password"]:focus {
			border-color: #af4261;
			outline: none;
		}

		#reminder {
			position: absolute; 
			font-size: 15px; 
			font-family: verdana; 
			bottom: 250px; 
			right: 452px; 
			text-decoration: none; 
		}

		#reminder a {
			text-decoration: none; 
		}

		#forget {
			font-size: 15px; 
			font-family: verdana; 
			margin-top: 15px; 
		}

		#forget a {
			text-decoration: none;
		}

		.btn {
			background-color: black;
			color: white;
			padding: 10px;
			width: 25%;
			border: none;
			border-radius: 8px;
			cursor: pointer;
			font-size: 16px;
			font-weight: bold;
			transition: background-color 0.3s ease;
		}

		.btn:hover {
			background-color: brown;
		}
	</style> 
</head>

<body>
    <div class="container">
        <h1 class="brand-title">TrendCart</h1>
        
        <form id="registrationForm" method="POST">
            <div class="form-group">
                <label for="UserName">Username</label>
                <input type="text" id="username" name="fullname" placeholder="Enter your username" required>
            </div>
          
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            
            <button type="submit" name="submit" class="btn">Login</button>
            <div id='reminder'>Not Registered yet? <a href='registerKart.php'>click here</a></div>
            <div id='forget'><a href='forget.php'>Forget Password?</a></div> 
        </form>
    </div>
	
	<?php
	if (isset($_POST['submit'])) {
		$fullname= $_POST['fullname']; 
		$password = $_POST['password'];
		

		$query = "SELECT password FROM userlist WHERE fulll_name = '$fullname' && password = '$password'";
		$data = mysqli_query($conn, $query); 
		
		$total = mysqli_num_rows($data); 
		
		if($total){
				$_SESSION['fulll_name'] = $fullname; 
				header('Location: project.php'); 
			
			} 
		else {
			echo "Login failed: User not found."; 
		}
	}
	?>
    
</body>
</html>
