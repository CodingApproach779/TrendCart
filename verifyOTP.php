<?php
session_start(); // Start the session
include('connection.php'); 
error_reporting(0); // Enable error reporting for debugging

$msg = ''; 

// Correctly access the session variable
$otp = $_SESSION['otp']; 

if (isset($_POST['submit'])) {
    $submit_otp = $_POST['otp'];
    
    // Verify the submitted OTP against the session OTP
    if ($submit_otp == $otp) {
        header('location: newPassword.php'); 
        exit(); // Important to prevent further execution
    } else {
        $msg = "Please Enter Valid OTP"; 
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password - TrendCart</title>
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
            margin-top: 60px;
            color: #333;
        }
		
		h4 {
			font-family: verdana; 
			font-weight: bold; 
			padding: 10px; 
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
            width: calc(100% - 22px);
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
            height: 90px;
            border-radius: 50%;
            position: absolute;
			top: -5px; 
            left: calc(50% - 65px); /* Center the image */
        }
    </style>
</head>
<body>

<div id="frame">
    <img src="otp2.png" alt="Admin Logo" />
    <h1>OTP Verification</h1>
	<h4>Please Check your Email to get OTP for Verification</h4> 
    <p><?php echo $msg; ?></p> 
    <form method='POST'>
        <table>
            <tr>
                <td>Enter OTP: </td>
                <td><input type="text" name="otp" placeholder="Enter OTP Digits" required></td>
            </tr>
        </table>
        <button name='submit'>Verify</button>
    </form> 
</div>

</body>
</html>
