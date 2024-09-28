<?php
$servername = 'localhost';
$username = 'root'; 
$password = '';
$db_name = 'ekartproject'; 
 

$conn = mysqli_connect($servername, $username,  $password, $db_name); 

if($conn){
	
	
}

else{
	
	echo "Database Not Connected"; 
}


?>