<?php
session_start(); // Start the session
include('connection.php'); 
$msg = ''; 

if (isset($_POST['submit'])) {
    $email = $_POST['email']; 
    $rand = rand(000000, 999999);
	
	 

    // Query to check if the email exists
    $query = "SELECT * FROM userlist WHERE email = '$email'";
    $data = mysqli_query($conn, $query); 

    // Check if any result is returned
    if (mysqli_num_rows($data) > 0) {
        $selected_mail = mysqli_fetch_assoc($data)['email']; 

        if ($selected_mail == $email) {
            $to = $email; 
            $subject = "Verification code"; 
            $body = "Hi,\nThis is your verification code: $rand"; 
            $header = "From: div1994srivastava@gmail.com"; 

            if (mail($to, $subject, $body, $header)) {
                $_SESSION['otp'] = $rand;
                header('Location: verifyOTP.php');
                exit(); // Ensure no further code is executed
            } else {
                echo "<script>alert('Failed to send email. Please try again later.');</script>";
            }
        }
    } else {
      
		$msg = "Enter your valid Email id"; 
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
		
		p{
			color: red; 
			font-family: verdana; 
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
            width: 130px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            top: -10px;
            left: calc(50% - 65px); /* Center the image */
        }
    </style>
</head>
<body>

<div id="frame">
    <img src="images/reset2.jpg" alt="Admin Logo" />
    <h1>Forget Password</h1>
	<p> <?php echo $msg ?> </p> 
    <form method='POST'>
        <table>
            <tr>
                <td>Email ID:</td>
                <td><input type="email" name="email" placeholder="Enter your Mail Id" required></td>
            </tr>
        </table>
        <button name='submit'>Reset</button>
    </form> 
</div>

</body>
</html>
