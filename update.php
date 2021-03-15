<html>
<head>
<style>
body {
	background-image:url('b3.jpg');
	background-attachment: fixed;
	background-repeat: no-repeat;
	background-size: 100% 100%;
}
</style>
<style>
a {
	background-color=white;
	color:green;
	font-size:20px;
}
</style>
</head>
<style>
  a {
	background-color:white;
	color:green;
  }
</style>
<center>
<body><br><br><br><br>
<?php 
  
$servername = "localhost"; 
$user = "root"; 
$pass = ""; 
$dbname = "mini"; 
$first_name =  $_POST['name1'];
$first =  $_POST['amount'];
  
// Create connection 
$conn = new mysqli($servername,  
    $user, $pass, $dbname); 
  
// Check connection 
if ($conn->connect_error) { 
    die("Connection failed: " 
        . $conn->connect_error); 
} 
  
$sqlquery = "INSERT INTO bank VALUES  
    ('$first_name',$first)"; 
  
if ($conn->query($sqlquery) === TRUE) { 
    echo "record inserted successfully"; 
} else { 
    echo "Error: " . $sql . "<br>" . $conn->error; 
}
?><br><br>
<a href="allcustomers.html">view customers</a><br>

</body>
</center>
</html>