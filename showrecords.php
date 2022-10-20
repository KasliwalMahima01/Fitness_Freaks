<?php
/*
$conn=mysqli_connect("localhost","root","","gym_mgmt_system");
	if(!$conn){
		die("Connection Failed".mysqli_connect_errno());
	}else{
		//echo "Connection Successful";
	}
	session_start();
	$show="SELECT `name` , `username` ,`phoneno` FROM `customers`";
 	$query=mysqli_query($conn,$show);

	//$result = mysqli_query($con,$sql);
	while(mysqli_fetch_array($query)){
		$name = $data['name'];
 		$username = $data['username'];
 		$phoneno = $data['phoneno'];
	}

 /*	while($data = mysqli_fetch_array($query)){
 		$name = $data['name'];
 		$username = $data['username'];
 		$phoneno = $data['phoneno'];
 	}*/
 ?> 

 <?php
$conn=mysqli_connect("localhost","root","","gym_mgmt_system");
	if(!$conn){
		die("Connection Failed".mysqli_connect_errno());
	}else{
		//echo "Connection Successful";
	}
	session_start();

$show="SELECT `name` , `username` ,`phoneno` FROM `customer`";

$result = mysqli_query($conn,$show);

echo "<table border=3>";
echo "<tr><th>Name</th><th>Username</th><th>Phone Number</th></tr>";

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $name = $row['name'];
    $username = $row['username'];
    $phoneno = $row['phoneno'];
    echo "<tr><td style='width: 200px;'>".$name."</td><td style='width: 600px;'>".$username."</td><td>".$phoneno."</td></tr>";
} 

echo "</table>";
mysqli_close($conn);
?>







                                             


<!--
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<table>
 		<tr>
 			<th>Name</th>
 			<th>Username</th>
 			<th>Phone Number</th>
 		</tr>
 		<tr>
 			<td><?php echo $name; ?></td>
 			<td><?php echo $username; ?></td>
 			<td><?php echo $phoneno; ?></td>
 		</tr>
 	</table>
 </body>
 </html> -->