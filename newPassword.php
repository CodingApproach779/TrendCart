<?php
session_start();
include('connection.php'); 
error_reporting(0); 

$msg = '';

if (isset($_POST['submit'])) {
    $new_password = $_POST['new_password']; 
    $con_password = $_POST['con_password']; 

    if ($new_password == $con_password) {
        // Assuming you have a way to identify the user, e.g., user ID in the session
        $user_id = $_SESSION['user_id']; // Example user ID retrieval

        $query = "UPDATE userlist SET password= ? WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('si', $new_password, $user_id);

        if ($stmt->execute()) {
            header('location: project.html'); 
            exit(); // Ensure script stops after redirect
        } else {
            $msg = "Error updating password.";
        }
    } else {
        $msg = "New Password does not match Confirm Password."; 
    }
}
?> 

<!DOCTYPE html>

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
            top: -3px;
            left: calc(50% - 65px); /* Center the image */
        }
    </style>
</head>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password - TrendCart</title>
    <style>
        /* Your existing CSS */
    </style>
</head>
<body>

<div id="frame">
    <img src="reset11.png" alt="Admin Logo" />
    <h1>Reset Password</h1>
    
    <form method='POST'>
        <p><?php echo $msg; ?></p> 
        <table>
            <tr>
                <td>New Password</td>
                <td><input type="password" name="new_password" placeholder="Enter New Password" required></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="password" name="con_password" placeholder="Confirm New Password" required></td>
            </tr>
        </table>
        <button name='submit'>Submit</button>
    </form> 
</div>

</body>
</html>



