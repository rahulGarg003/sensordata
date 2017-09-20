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
//Create table query
$sql = "CREATE TABLE sensor (timestamp Date,AmmoniaLevel Number(5), WaterLevel Number(5), Location Varchar(50))";
if ($conn->query($sql) === TRUE) {
    echo "Table blogs created successfully!";} 
else {
    echo "Error creating table: " . $conn->error;
}
?>