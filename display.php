<?php
include('connection.php'); 
?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <style> 
        * {
            padding: 0; 
            margin: 0; 
            box-sizing: border-box; 
        }

        body {
            font-family: 'Verdana', sans-serif; 
            background-color: #f4f4f4; 
            padding: 20px; 
        }

        table {
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 30px; 
            background-color: white; 
            box-shadow: 0 0 10px rgba(0,0,0,0.1); 
        }

        th {
            background-color: gray; 
            color: white; 
            font-weight: bold; 
            font-size: 23px; 
            padding: 10px; 
        }

        tr {
            height: 40px; 
        }

        td {
            font-family: 'Verdana'; 
            font-weight: bold; 
            border: 1px solid black; 
            padding: 10px; 
            text-align: center;
			font-size: 17px; 
			
        }

        tr:nth-child(even) {
            background-color: #f2f2f2; 
        }

        tr:hover {
            background-color: #e1e1e1; 
        }
		
		#edit{
				width: 70%; 
				height: 50px; 
				text-align: center; 
				font-size: 21px; 
				background-color: brown; 
				color: white; 
				font-family: verdana; 
				font-weight: bold; 
				border-radius: 10px; 
				cursor: pointer; 
		}
		
		
		#del{
			width: 70%; 
				height: 50px; 
				text-align: center; 
				font-size: 21px; 
				background-color: purple; 
				color: white; 
				font-family: verdana; 
				font-weight: bold; 
				border-radius: 10px; 
				cursor: pointer; 
		}
		
		
		a{
	text-decoration: none; 
	color: white; 
}

			
			
		
    </style> 
</head> 

<body> 
    <table> 
        <tr> 
            <th>ID</th> 
            <th>Full Name</th> 
            <th>Email</th> 
            <th>Mobile</th> 
			<th colspan = "2">Operation </th> 
        </tr> 
		
		
		
		<?php
		
		
		$query = "SELECT*FROM userlist"; 
		$data = mysqli_query($conn, $query); 
		
		$total = mysqli_num_rows($data); 
		
		if($total!=0){
			
		while($result = mysqli_fetch_assoc($data)){
		echo "<tr> 
		<td>$result[id] </td> 
		<td>$result[fulll_name] </td> 
		<td>$result[email] </td> 
		<td>$result[mobile] </td> 
		<center>
		
		<td><button id='edit'><a href='update.php?id=$result[id]'>Update</a>
		</button></td> 
		
       <td> <button id='del'><a href='deleted.php?id=$result[id]'>Delete</a>
	   </button></td> 




		</center> 
		
		</tr>";
		}
		
		

       
    echo '</table>';
		}
else{

echo "No Entry Found"; 
}

?> 	
	
</body> 
</html>
