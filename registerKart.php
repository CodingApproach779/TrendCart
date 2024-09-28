

<?php
include('connection.php'); 
error_reporting(0); 
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
	
	
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
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
}


.brand-title {
    font-size: 2.5rem;
    color:gray;  
    margin-bottom: 5px;
    font-weight: bold;
    letter-spacing: 2px;
}




.form-group {
    margin-bottom: 15px;
    text-align: left;
	font-weight:bold; 
}


input[type="text"], input[type="email"], input[type="tel"], input[type="password"] {
    width: 96%;
    padding: 11px;
    font-size: 14px;
    border: 1px solid #ddd;
    border-radius: 5px;
	margin-top: 10px; 
	
	

}

input[type="text"]:focus, input[type="email"]:focus, input[type="tel"]:focus, input[type="password"]:focus {
    border-color: #af4261;
    outline: none;
}

.btn {
    background-color: black; 
    color: white;
    padding: 10px;
    width: 35%;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color:brown ;
}

#remind{
 
font-size: 15px; 
font-family: verdana; 
margin-top: 20px; 

text-decoration: none;
}

#remind a{
text-decoration: none; 
}


	

	 </style> 
	 
	 

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <div class="container">
        <h1 class="brand-title">TrendCart</h1>
        
        
        <form id="registrationForm" method = "POST"us>
            <div class="form-group">
                <label for="UserName">Username</label>
                <input type="text" id="username" name="fullname" placeholder="Enter your username" required>
                
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                
            </div>

            <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="tel" id="mobile" name="mobile" placeholder="Enter your mobile number" required>
                
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
                
            </div>
            
            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" required>
                
            </div>
            
            <button type="submit" name = "submit" class="btn">Register</button>
        </form>
		<div id = 'remind'>Already Registered? <a href = 'loginKart.php'>click here </a>  </div>
    </div>
	
<?php
if(isset($_POST['submit'])) {
    $fullname = $_POST['fullname']; 
    $email = $_POST['email']; 
    $mobile = $_POST['mobile']; 
    $password = $_POST['password'];
    
    $conpassword = $_POST['confirmPassword']; 

    if($fullname != '' && $email != '' && $mobile != '' && $password != '') {
       $query = "INSERT INTO userlist(fulll_name, email, mobile, password) VALUES ('$fullname', '$email', '$mobile', '$password')";  

        $data = mysqli_query($conn, $query); 

        if ($data) {
            // Prepare the email
            $subject = "Thank you for registering!";
            $message = "You are now a verified trader. Click <a href='http://localhost/ekartCrud/loginKart.php?email=$email'>here</a> to verify your email.";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: noreply@yourdomain.com" . "\r\n";

            // Send the email
            if (mail($email, $subject, $message, $headers)) {
                echo "<script>swal('Success!', 'Registration successful! Verification email sent.', 'success');</script>";
				
            } else {
                echo "<script>swal('Error!', 'Registration successful, but email could not be sent.', 'error');</script>";
            }
            
           
          
	}}
    }
?>   

</body>
</html>
