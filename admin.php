
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - TrendCart</title>
    <style>
        body {
            font-family: Verdana, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        #frame {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            position: relative;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
        }

        table {
            width: 100%;
            margin: 20px 0;
        }

        td {
            font-size: 16px;
            padding: 10px;
            text-align: left;
        }

        input {
            width: calc(100% - 22px); /* Adjust width for padding */
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            width: 100%;
            height: 40px;
            font-family: Verdana;
            font-weight: bold;
            border-radius: 5px;
            font-size: 18px;
            background-color: black;
            color: white;
            cursor: pointer;
            margin-top: 20px;
            border: none;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #333;
        }

        img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            top: -50px; /* Adjusted for better layout */
            left: calc(50% - 50px); /* Center the image */
        }
    </style>
</head>
<body>

<div id="frame">
    <img src="Admin2.png" alt="Admin Logo" />
    <h1>Admin Login</h1>
	<form method = 'POST'>
    <table>
        <tr>
            <td>Email ID:</td>
            <td><input type="email" name = "email" placeholder="Enter your Mail Id" required></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name = "password" placeholder="Enter your Password" required></td>
        </tr>
    </table>
	
    <button name = 'submit' >Login</button>
	</form> 
</div>


<?php

if(isset($_POST['submit'])){
	
	$email = $_POST['email']; 
	$password = $_POST['password']; 
	
	if($email == 'trendcart546@gmail.com' && $password == 'trend@01'){
		
	header('location: display.php'); 
	}
	
	else{
		
		echo "<script> window.alert('Wrong Credentials'); </script>"; 
	}
}


?>

</body>
</html>
