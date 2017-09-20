<?php
//Login details
$servername = "mysql5.gear.host";
$username = "sensordata";
$password = "Eo1R-l~8C77F";
$dbname = "sensordata";
//Create connection
$conn = new mysqli("$servername", $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
echo"Yes";
$sql = "SELECT * FROM sensor";
    $result = mysqli_query($conn ,$sql);
    $array = [];
    
    while($row = $result->fetch_assoc()){
       echo '$row[timestamp] $row[AmmoniaLevel] $row[WaterLevel] $row[Location]<br>';
    }
    
    //header('Content-Type:Application/json');
    //echo json_encode($array);
   // mysqli_free_result($result);
//Getting all data from server
?>
